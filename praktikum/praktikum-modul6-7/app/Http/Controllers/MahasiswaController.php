<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;



class MahasiswaController extends Controller
{
    public function index()
    {
        //ambil data SELECT * FROM mahasiswa
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact(['mahasiswa']), ['title' => 'Data Mahasiswa']);
    }

    public function tambah()
    {
        return view('mahasiswa.tambah', ['title' => 'Tambah Mahasiswa']);
    }

    public function simpan(Request $request)
    {
        // menyimpan dengan menghilangkan field _token dan submit
        Mahasiswa::create($request->except(['_token', 'submit']));
        return redirect('/mahasiswa');
    }


    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        // dd($id);
        return view('mahasiswa.edit', compact(['mahasiswa']),  ['title' => 'Edit Mahasiswa']);
    }

    public function update($id, Request $request)
    {
        $mahasiswa = Mahasiswa::find($id);
        // dd($mahasiswa);
        $mahasiswa->update($request->except(['_token', 'submit']));
        return redirect('/mahasiswa');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa');
    }

    public function about()
    {
        return view('about', ['title' => 'About Me']);
    }

}
