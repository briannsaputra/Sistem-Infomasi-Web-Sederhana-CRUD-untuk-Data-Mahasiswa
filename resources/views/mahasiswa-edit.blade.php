@extends('layouts.mainlayouts')

@section('title', 'Edit Mahasiswa')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-1 mb-1"><span class="text-muted fw-light"></span> Edit Mahasiswa</h4>
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="/editmahasiswa/{{ $mhs->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Full Name</label>
                                <input type="text" class="form-control" name="nama" id="basic-default-fullname"
                                    value="{{ $mhs->nama }}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Nim</label>
                                <input type="text" class="form-control" name="nim" id="basic-default-company"
                                    value="{{ $mhs->nim }}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="inputGroupSelect01">Prodi</label>
                                <select class="form-select" name="prodi_id" id="inputGroupSelect01">
                                    <option value="{{ $mhs->prodi->id }}">{{ $mhs->prodi->nama_prodi }}</option>
                                    @foreach ($prodi as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_prodi }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">usia</label>
                                <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                    value="{{ $mhs->usia }}" name="usia" />
                            </div>
                            <div class="mb-3">
                                <label for="html5-date-input" class="col-md-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="date" name="tgl_lahir"
                                        value="{{ $mhs->tgl_lahir }}" id="html5-date-input" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Alamat</label>
                                <textarea id="basic-default-message" class="form-control" placeholder="" name="alamat">{{ $mhs->alamat }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <span class="tf-icons bx bxs-save"></span>&nbsp; Save
                            </button>
                            <a href="/mahasiswa">
                                <button type="button" class="btn btn-outline-primary">
                                    <span class="tf-icons bx bx-arrow-back"></span>&nbsp; Cancel
                                </button>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
