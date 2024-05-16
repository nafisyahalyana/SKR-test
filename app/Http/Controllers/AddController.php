<?php

namespace App\Http\Controllers;
use App\Models\Ruangan;

use Illuminate\Http\Request;

class AddController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $ruangan = new Ruangan;
        $ruangan->ruangan = $request->input('ruangan');
        // dd($ruangan);
        $ruangan->save();

        return view('ruangan');
    }
}
