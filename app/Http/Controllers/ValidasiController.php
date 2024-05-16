<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\ruangan;
use Illuminate\Http\Request;

class ValidasiController extends Controller
{
    public function validasi(){
        $data = Booking::get();
        return view('validasi', compact('data'));
    }
    public function edit(Request $request, $id)
    {
        $booking = Booking::with('ruangan')->findOrFail($id);
        $ruangan = Ruangan::where('id', '!=', $booking->id)->get(['id', 'ruangan']);
        return view('validasi-edit', ['booking' => $booking, 'ruangan' => $ruangan]);
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
        $booking->ruangan = $request->ruangan;
        $booking->keperluan = $request->keperluan;
        $booking->save();
        
        
        return redirect('/validasi');
    }
    public function destroy($id)
{
    // Lakukan operasi penghapusan data sesuai dengan id
    // Contoh:
    Booking::find($id)->delete();

    // Redirect atau kembalikan ke halaman yang sesuai
    return redirect()->back();
}
    
}
