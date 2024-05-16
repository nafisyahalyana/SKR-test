<?php

namespace App\Http\Controllers;
use App\Models\Ruangan;
use App\Models\Booking;
use Illuminate\Http\Request;

class formBookingController extends Controller
{
    public function formRuangan()
    {
        $ruangan = Ruangan::all();
        return view('booking', compact('ruangan'));
    }

    public function booking(Request $request)
    {
        // dd($request->all());
        $booking = new Booking;
        $booking->nama = $request->input('nama');
        $booking->bidang = $request->input('bidang');
        $booking->no_hp = $request->input('no_hp');
        $booking->tanggal = $request->input('tanggal');
        $booking->waktu_mulai = $request->input('waktu_mulai');
        $booking->waktu_berakhir = $request->input('waktu_berakhir');
        $booking->ruangan = $request->input('ruangan');
        $booking->keperluan = $request->input('keperluan');
        $booking->save();

        return view('dashboard');
    }

    
//     public function store(Request $request)
// {
//     $booking = new Booking();
//     isi data booking dengan data dari request
//     $booking->save();

//     return redirect()->route('booking');
// }
}

