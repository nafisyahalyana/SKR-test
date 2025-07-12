<?php

namespace App\Http\Controllers;
use App\Models\Ruangan;
use App\Models\Booking;
use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class formBookingController extends Controller
{
    public function formRuangan(Request $request)
    {
       
        $ruangan = Ruangan::where('status', 0)->get();
        return view('booking', compact('ruangan') );
    
    }
    
    public function booking(Request $request)
    {
        Log::info('Memulai proses booking.');
        Log::info('Data yang dikirim:', $request->all());

        $validatedData = $request->validate([
            'nama' => 'required|string',
            'bidang' => 'required|string',
            'no_hp' => 'required|string',
            'tanggal' => 'required|date',
            'waktu_mulai' => 'required|string',
            'waktu_berakhir' => 'required|string',
            'ruangan_id' => 'required|exists:ruangan,id',
            'keperluan' => 'required|string',
            // 'is_private' => 'nullable|boolean', // menambahkan validasi untuk checkbox
        ]);
        Log::info('Validasi input berhasil.');
        //
        $waktuMulai = Carbon::parse($validatedData['tanggal'] . ' ' . $validatedData['waktu_mulai']);
        $waktuBerakhir = Carbon::parse($validatedData['tanggal'] . ' ' . $validatedData['waktu_berakhir']);
        $conflictBooking = Booking::where('ruangan_id', $validatedData['ruangan_id'])
        ->where('tanggal', $validatedData['tanggal']) // Tambahkan pemeriksaan tanggal
        ->where(function ($query) use ($waktuMulai, $waktuBerakhir) {
            $query->where(function ($query) use ($waktuMulai, $waktuBerakhir) {
                $query->where('waktu_mulai', '<=', $waktuBerakhir)
                    ->where('waktu_berakhir', '>=', $waktuMulai);
            });
        })->exists();


        if ($conflictBooking) {
            Log::info('Konflik booking ditemukan.');
            return back()->with('error', 'Maaf, Ruangan sudah dipinjam pada waktu tersebut.' );
        }
        $validatedData['status'] = 'pending';
        $validatedData['is_private'] = $request->has('is_private') ? 1 : 0;
        $validatedData['waktu_mulai'] = $waktuMulai;
        $validatedData['waktu_berakhir'] = $waktuBerakhir;
        
        // Simpan booking menggunakan metode create
        $booking = Booking::create($validatedData);
        
        Log::info('Data booking berhasil disimpan.', ['booking' => $booking]);

        $ruangan = Ruangan::find($request->input('ruangan_id'));
        $ruangan->status = 1;
        $ruangan->save();
             Log::info('Status ruangan berhasil diperbarui.', ['ruangan' => $ruangan]);
            //  $this->sendWhatsAppNotification();
            
        Log::info('Sebelum kirim WhatsApp');

        try {
        $token = 'ivwJp5fJtCEQ4rTJ1QBH';
        $target = '081233313892';
            
        // Ambil informasi dari data booking
        $nama     = $booking->nama;
        $ruangan  = $booking->ruangan->ruangan ?? 'Ruangan Tidak Diketahui'; // Pastikan relasi tersedia
        $tanggal  = \Carbon\Carbon::parse($booking->tanggal)->format('d-m-Y');
        $mulai    = \Carbon\Carbon::parse($booking->waktu_mulai)->format('H:i');
        $berakhir = \Carbon\Carbon::parse($booking->waktu_berakhir)->format('H:i');

        // Susun isi pesan
        $pesan = "Perhatian! Ada permintaan peminjaman ruangan baru.\n\n";
        $pesan .= "👤 Nama: *{$nama}*\n";
        $pesan .= "🏢 Ruangan: *{$ruangan}*\n";
        $pesan .= "📅 Tanggal: {$tanggal}\n";
        $pesan .= "🕒 Waktu: {$mulai} - {$berakhir}\n\n";
        $pesan .= "Mohon segera lakukan validasi permintaan tersebut.";

        // Buat URL dengan pesan yang sudah di-urlencode
        $message = urlencode($pesan);
        $url = "https://api.fonnte.com/send?token={$token}&target={$target}&message={$message}";


        $response = file_get_contents($url);

        if ($response !== false) {
            Log::info('WhatsApp berhasil dikirim.', ['response' => $response]);
        } else {
            Log::warning('Gagal kirim WA. Tidak ada respons.');
        }
    } catch (\Exception $e) {
            Log::error('Gagal mengirim WA: ' . $e->getMessage());
        }

        Log::info('Setelah proses kirim WhatsApp');
        return view('dashboard');
        
    }
    
    public function validasi(){
        $data = Booking::get();
        return view('validasi', compact('data'));
    }


}

