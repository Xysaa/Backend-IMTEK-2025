<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matkul;

class MatkulController extends Controller
{
    public function index()
    {
        $query = Matkul::query();

        if(request()->has('search')){
            $query->where('kode_matkul','like','%' . request()->get('search','') . '%')->orWhere('name','like','%' . request()->get('search','') . '%')->orWhere('sks','like','%' . request()->get('search','') . '%');
        }

        $matkuls=$query->paginate(5);
        return view('matkul.index', compact('matkuls'));
    }

    public function create()
    {
        return view('matkul.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matkul'=>'required',
            'name'=>'required',
            'sks'=>'required|numeric'
        ]);

        $matkuls = Matkul::create([
            'kode_matkul'=>$request->kode_matkul,
            'name'=>$request->name,
            'sks'=>$request->sks
        ]);

        return redirect()->route('matkul.index')->with('suscces','Matkul Berhasil ditambahkan!');
    }

    public function edit(Matkul $matkul)
    {
        return view('matkul.edit', compact('matkul'));
    }

    public function update(Request $request,Matkul $matkul)
    {
        $request->validate([
            'kode_matkul'=>'required',
            'name'=>'required',
            'sks'=>'required|numeric'
        ]);

        $matkul->kode_matkul=$request->kode_matkul;
        $matkul->name= $request->name;
        $matkul->sks=$request->sks;

        $matkul->update();
        return redirect()->route('matkul.index')->with('suscces','Matkul Berhasil diupdate!');

    }
    public function destroy(Matkul $matkul)
    {
        $matkul->delete();
        return redirect()->route('matkul.index');
    }

}
