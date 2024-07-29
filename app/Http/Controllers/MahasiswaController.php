<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\MahasiswaCreaterequest;
use App\Http\Requests\MahasiswaUpdateterequest;

class MahasiswaController extends Controller
{
    public function list(Request $request) {
        $keyword = $request->keyword;
        $mahasiswa = mahasiswa::where('nama', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('nim', 'LIKE', '%'.$keyword.'%')
                    ->orWhere(function($query) use($keyword) {
                        $query->where('nama', 'LIKE', '%'.$keyword.'%');
                    })
                    ->paginate(10);

        return view('mahasiswa_list',['mahasiswa' => $mahasiswa]);
    }

    public function create()
    {
        $prodi = Prodi::select('id', 'nama_prodi')->get();
        return view('tambah-mahasiswa', ['prodi' => $prodi]);
    }

    public function store(MahasiswaCreaterequest $request)
    {
        // $validated = $request->validate([
        //     'nim' => 'unique:mahasiswas',
        // ]);

        $mahasiswa = mahasiswa::create($request->all());

        return redirect('mahasiswa')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }

    public function edit(Request $request, $id)
    {
        $mhs = mahasiswa::with('prodi')->findOrFail($id);

        $prodi = Prodi::where('id', '!=', $mhs->prodi->id)->get(['id', 'nama_prodi']);

        return view('mahasiswa-edit', ['mhs' => $mhs, 'prodi' => $prodi]);
    }

    public function update(MahasiswaUpdateterequest $request, $id)
    {
        $mhs = mahasiswa::findOrFail($id);

        $mhs->update($request->all());

        return redirect('mahasiswa')->with('toast_success', 'Data Berhasil Di Ubah!');
    }

    public function delete($id)
    {
        $mhs = mahasiswa::findOrFail($id);
        $mhs->delete();

        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
