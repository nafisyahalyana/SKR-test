<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function pengguna()
    {
        $data = User::get();
        return view('pengguna', compact('data'));
        
    }
    
    public function index()
    {
        $data = User::count();
    return view('dashboard', ['data' => $data]);
    }
    
}