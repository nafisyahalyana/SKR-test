<?php

namespace App\Http\Controllers;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index()
    {
        $data = Ruangan::get();
        return view('ruangan', compact('data'));
    }
    public function create()
    {
        $ruangan = Ruangan::all();
        return view('ruangan-add', compact('ruangan'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $ruangan = new Ruangan;
        $ruangan->ruangan = $request->input('ruangan');
        // dd($ruangan);
        $ruangan->save();

        return redirect('/ruangan');
    }
    public function edit(Request $request, $id)
    {
        $ruangan = Ruangan::findOrFail($id);
        return view('ruangan-edit', ['ruangan' => $ruangan]);
    }

    public function update(Request $request, $id)
    {
        $ruangan = Ruangan::findOrFail($id);
        $ruangan->ruangan = $request->ruangan;
        $ruangan->save();

        return redirect('/ruangan');
    }
    public function destroy($id)
{
    // Lakukan operasi penghapusan data sesuai dengan id
    // Contoh:
    Ruangan::find($id)->delete();

    // Redirect atau kembalikan ke halaman yang sesuai
    return redirect()->back();
}

}
