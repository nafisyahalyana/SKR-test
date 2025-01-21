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
        // $data = Booking::get();
        // return view('validasi', compact('data'));
    }
    public function approve(Request $request, Booking $booking)
    {
      
        $booking->status = 'disetujui';
        $booking->save();
        
        $ruangan = Ruangan::find($booking->ruangan_id);
        $ruangan->status = 0;
        $ruangan->save();
        // Send notification via API
        $client = new Client();
        $phoneNumber = $booking->no_hp;
        $apiUrl = 'https://rsml.app/bridging/wa_sendopen/' . $phoneNumber . '/Selamat! Permintaan peminjaman ruangan Anda telah disetujui. Anda dapat menggunakan ruangan sesuai dengan jadwal yang telah ditentukan. Terima kasih!';

        try {
            $response = $client->request('GET', $apiUrl);
            if ($response->getStatusCode() == 200) {
                // Notification sent successfully
            } else {
                // Handle failed notification if necessary
            }
        } catch (\Exception $e) {
            // Handle exception if necessary
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
        // Send notification via API
        $client = new Client();
        $phoneNumber = $booking->no_hp;
        $apiUrl = 'https://rsml.app/bridging/wa_sendopen/' . $phoneNumber . '/Mohon maaf, Permintaan peminjaman ruangan Anda ditolak. Anda dapat memilih peminjaman dengan waktu lain. Terima kasih!';

        try {
            $response = $client->request('GET', $apiUrl);
            if ($response->getStatusCode() == 200) {
                // Notification sent successfully
            } else {
                // Handle failed notification if necessary
            }
        } catch (\Exception $e) {
            // Handle exception if necessary
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
