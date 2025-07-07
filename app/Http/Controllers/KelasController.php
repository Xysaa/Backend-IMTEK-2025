<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class KelasController extends Controller
{
    public function index(Request $request): view
    {
        $query = Kelas::query();

        if($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama_kelas', 'like', '%'.$search.'%')->orWhere('nama_matkul', 'like', '%'.$search.'%');
            });
        }

        $kelass = $query->paginate(10);
        return view('kelas.index', compact('kelass'));
    }

    public function store(Request $request): RedirectResponse
    {
        Kelas::create([
            'nama_kelas'    => $request->nama_kelas,
            'nama_matkul'   => $request->nama_matkul,
            'nama_dosen'    => $request->nama_dosen
        ]);

        return redirect()->route('kelas.index');
    }

    public function edit($id): view
    {
        $kelas = Kelas::findOrFail($id);

        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $kelas = Kelas::findOrFail($id);

        $kelas->update([
            'nama_kelas'    => $request->nama_kelas,
            'nama_matkul'   => $request->nama_matkul,
            'nama_dosen'    => $request->nama_dosen
        ]);

        return redirect()->route('kelas.index');
    }

    public function destroy($id): RedirectResponse
    {
        $kelas = Kelas::findOrFail($id);

        $kelas->delete();

        return redirect()->route('kelas.index');
    }
}
