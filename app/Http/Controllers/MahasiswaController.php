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
        //kasih validate
       $validdatedData = $request->validate([
            'nim' => 'required|numeric|unique:mahasiswa,nim',
            'nama' => 'required|string|max:100',
            'prodi' => 'required|string|max:255',
            'angkatan' => 'required|integer|digits:4|min:1900|max:'.(date('Y')+1), 
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan', 

            //dd($request->all()),
        ]);


        Mahasiswa::create($validdatedData);
        // $mahasiswa = new Mahasiswa();
        // $mahasiswa->nim = $request->nim;
        // $mahasiswa->nama = $request->nama;
        // $mahasiswa->prodi = $request->prodi;
        // $mahasiswa->angkatan = $request->angkatan;
        // $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        // $mahasiswa->save();
        // pake mahasiswa model untuk menyimpan data
        
    
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

        $validdatedData = $request->validate([
            'nim' => 'required|numeric|unique:mahasiswa,nim, '.$id,
            'nama' => 'required|string|max:100',
            'prodi' => 'required|string|max:255',
            'angkatan' => 'required|integer',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan', 

        ]);

        $mahasiswa = Mahasiswa::find($id);
        if(!$mahasiswa){
            return redirect()->route ('mahasiswa.tampil')->with('error', 'Data Mahasiswa Tidak Ditemukan');
        }
        // $mahasiswa->nim = $request->nim;
        // $mahasiswa->nama = $request->nama;
        // $mahasiswa->prodi = $request->prodi;
        // $mahasiswa->angkatan = $request->angkatan;
        // $mahasiswa->jenis_kelamin = $request->jenis_kelamin;

        $mahasiswa->update($validdatedData);

        return redirect()->route('mahasiswa.tampil')->with('success', 'Data Mahasiswa berhasil ditambahkan!');

    }

    function delete($id) {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.tampil')->with('success', 'Data Mahasiswa berhasil dihapus!');
    }
}