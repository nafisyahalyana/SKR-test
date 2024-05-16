<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function jadwal(){
        $data = Booking::get();
        return view('jadwal', compact('data'));
    }
    
}
