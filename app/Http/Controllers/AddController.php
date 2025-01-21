<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Ruangan;


use Illuminate\Http\Request;

class AddController extends Controller
{
    public function store(Request $request)
    {
        $data = Booking::where('status', 'pending')->get();
        return view('peminjaman', compact('data'));
    }
    public function edit(Request $request, $id)
    {
        $booking = Booking::with('ruangan')->findOrFail($id);
        $ruangan = Ruangan::where('id', '!=', $booking->id)->get(['id', 'ruangan']);
        return view('peminjaman-edit', ['booking' => $booking, 'ruangan' => $ruangan]);
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
        
        
        return redirect('/peminjaman');
    }
}
