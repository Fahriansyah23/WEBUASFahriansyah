<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Makul;
use App\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with(['makul','mahasiswa'])->get(); // select * from mahasiswa
        return view ('nilai.index', compact('nilai') );
    }

    public function tambah()
    {
        $mahasiswa = Mahasiswa::all();
        $makul = Makul::all();

        return view ('nilai.tambah', compact('mahasiswa','makul'));
    }

    public function create(Request $request)
    {
        Nilai::create($request->all());
        toast('Data Nilai Kuliah Berhasil Disimpan','success');
        return redirect('nilai');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::all();
        $makul = Makul::all();
        $nilai = Nilai::find($id);
        return view('nilai.edit', compact('mahasiswa','makul','nilai'));
    }

    public function update(Request $request, $id)
    {
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Data Mata Kuliah Berhasil Di Edit','success');
        return redirect('nilai');
    }

    public function destroy($id)
    {
        $nilai = Nilai::find($id);
        $nilai ->delete();
        toast('Data Mata Kuliah Telah Di Hapus','info');
        return redirect('nilai');
    }
}