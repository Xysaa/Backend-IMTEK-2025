<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    function tampil(){
        $mahasiswa = Mahasiswa::get();
        return view ('mahasiswa.tampil', compact('mahasiswa'));

    }
        

    function tambah(){
        return view ('mahasiswa.tambah');
    }

    function submit(Request $request) {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->prodi = $request->prodi;
        $mahasiswa->angkatan = $request->angkatan;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->save();

        return redirect()->route('mahasiswa.tampil')->with('success', 'Data Mahasiswa berhasil ditambahkan!');
    }

    function edit($id) {
        $mahasiswa = Mahasiswa::find($id);
        if (!$mahasiswa) {
            return redirect()->route('mahasiswa.tampil')->with('error', 'Data Mahasiswa tidak ditemukan!');
        }
        return view('mahasiswa.edit', compact('mahasiswa'));
        
    }

    function update (Request $request, $id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->prodi = $request->prodi;
        $mahasiswa->angkatan = $request->angkatan;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;

        $mahasiswa->update();

        return redirect()->route('mahasiswa.tampil')->with('success', 'Data Mahasiswa berhasil ditambahkan!');

    }

    function delete($id) {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.tampil')->with('success', 'Data Mahasiswa berhasil dihapus!');
    }
}