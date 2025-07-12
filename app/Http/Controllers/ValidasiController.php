<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\ruangan;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ValidasiController extends Controller
{
    public function validasi(){
        $data = Booking::where('status', 'pending')
        ->orderBy('tanggal', 'desc')
                    ->get();
        return view('validasi', compact('data'));
        
    }
    public function approve(Request $request, Booking $booking)
    {
      
        $booking->status = 'disetujui';
        $booking->save();
        
        $ruangan = Ruangan::find($booking->ruangan_id);
        $ruangan->status = 0;
        $ruangan->save();
        
        try {
        $token = 'ivwJp5fJtCEQ4rTJ1QBH';
        $target = $booking->no_hp;
        
        // Ambil info yang dibutuhkan
        $nama     = $booking->nama;
        $ruangan  = $booking->ruangan->ruangan; // pastikan relasi 'ruangan' tersedia
        $mulai    = \Carbon\Carbon::parse($booking->waktu_mulai)->format('H:i');
        $berakhir = \Carbon\Carbon::parse($booking->waktu_berakhir)->format('H:i');
        $tanggal  = \Carbon\Carbon::parse($booking->tanggal)->format('m-d-Y');

        // Buat isi pesan
        $message = "Halo {$nama},\n\n";
        $message .= "Permintaan peminjaman ruangan *{$ruangan}* telah *disetujui*.\n";
        $message .= "Silakan gunakan ruangan pada:\n";
        $message .= "📅 {$tanggal}\n🕒 {$mulai} - {$berakhir}\n\n";
        $message .= "Terima kasih.";

        // Kirim melalui API
        $url = "https://api.fonnte.com/send?token={$token}&target={$target}&message=" . urlencode($message);

        $response = file_get_contents($url);

        if ($response !== false) {
        // Log::info('WhatsApp berhasil dikirim.', ['response' => $response]);
        } else {
        // Log::warning('Gagal kirim WA. Tidak ada respons.');
        }
        } catch (\Exception $e) {
        // Log::error('Gagal mengirim WA: ' . $e->getMessage());
        }
        return redirect()->back()->with('success', 'Booking disetujui.');
    }
    public function reject(Request $request, Booking $booking)
    {
      
        $booking->status = 'ditolak';
        $booking->save();

        $ruangan = Ruangan::find($booking->ruangan_id);
        $ruangan->status = 0;
        $ruangan->save();
        
        try {
        $token = 'ivwJp5fJtCEQ4rTJ1QBH';
        $target = $booking->no_hp;
        $nama     = $booking->nama;
        $ruangan  = $booking->ruangan->ruangan ?? 'Nama Ruangan';
        $tanggal  = \Carbon\Carbon::parse($booking->tanggal)->format('d-m-Y');
        $mulai    = \Carbon\Carbon::parse($booking->waktu_mulai)->format('H:i');
        $berakhir = \Carbon\Carbon::parse($booking->waktu_berakhir)->format('H:i');

        // Susun pesan penolakan
        $pesan = "Mohon maaf *{$nama}*,\n\n";
        $pesan .= "Permintaan peminjaman ruangan *{$ruangan}* pada:\n";
        $pesan .= "📅 {$tanggal}\n🕒 {$mulai} - {$berakhir}\n";
        $pesan .= "telah *ditolak* oleh admin.\n\n";
        $pesan .= "Silakan ajukan kembali di waktu yang lain.\nTerima kasih 🙏";
        $message = urlencode($pesan);
        $url = "https://api.fonnte.com/send?token={$token}&target={$target}&message={$message}";

        $response = file_get_contents($url);

        if ($response !== false) {
        // Log::info('WhatsApp berhasil dikirim.', ['response' => $response]);
        } else {
        // Log::warning('Gagal kirim WA. Tidak ada respons.');
        }
        } catch (\Exception $e) {
        // Log::error('Gagal mengirim WA: ' . $e->getMessage());
        }
        return redirect()->back()->with('success', 'Booking ditolak.');
    }
    public function edit(Request $request, $id)
    {
        $booking = Booking::with('ruangan')->findOrFail($id);
        $ruangan = Ruangan::where('id', '!=', $booking->id)->get(['id', 'ruangan']);
        return view('validasi', ['booking' => $booking, 'ruangan' => $ruangan]);
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $booking = Booking::findOrFail($id);
        $booking->nama = $request->nama;
        $booking->bidang = $request->bidang;
        $booking->no_hp = $request->no_hp;
        $booking->tanggal = $request->tanggal;
        $booking->waktu_mulai = $request->waktu_mulai;
        $booking->waktu_berakhir = $request->waktu_berakhir;
        $booking->ruangan_id = $request->ruangan_id;
        $booking->keperluan = $request->keperluan;
        $booking->status = 'pending';
        $booking->save();
        
        
        return view('/validasi');
    }
    public function destroy($id)
{
    // Lakukan operasi penghapusan data sesuai dengan id
    // Contoh:
    $booking = Booking::find($id);
    $booking->delete();

    // Mengubah status ruangan menjadi 1
    $ruangan = Ruangan::find($booking->ruangan_id);
    $ruangan->status = 0;
    $ruangan->save();

    // Redirect atau kembalikan ke halaman yang sesuai
    return redirect()->back();
}
    
}
