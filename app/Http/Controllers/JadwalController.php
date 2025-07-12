<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    public function jadwal(){
        $approvedBookings = Booking::where('status', 'disetujui')
    ->orderByRaw("CONCAT(tanggal, ' ', waktu_mulai) DESC")
    ->get();

    
    // Mengambil data dari tabel booking dan mengurutkan berdasarkan tanggal secara descending
    // $data = DB::table('booking')->orderBy('waktu_mulai', 'desc')->get();
    


    // Mengirim data ke view
//   dd($approvedBookings->pluck('waktu_mulai'));

        return view('jadwal', compact('approvedBookings'));
    }
    
    
}
