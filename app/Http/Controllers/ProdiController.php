<?php

namespace App\Http\Controllers;

use App\Models\Prodi;

use Illuminate\Http\Request;
use App\Http\Requests\ProdiCreateRequest;
use Illuminate\Support\Facades\Redirect;

class ProdiController extends Controller
{
    public function show($name)
    {

        return view('home', ['ngaran' => $name]);
    }

    public function list()
    {
        $prodi = Prodi::paginate(3);

        return view('prodi_list', ['prodi' => $prodi]);
    }

    public function create()
    {
        return view('tambah-prodi');
    }

    public function store(ProdiCreateRequest $request)
    {
        // dd($request->all());
        $prodi = Prodi::create($request->all());

        return redirect('prodi')->with('toast_success', 'Data Prodi Berhasil Ditambahkan!');
    }
}
