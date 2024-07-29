@extends('layouts.mainlayouts')

@section('title', 'List Prodi')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-1 mb-1"><span class="text-muted fw-light"></span> Tambah Mahasiswa</h4>
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Basic Layout</h5>
                        <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <form action="addmahasiswa" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="nama" id="basic-default-fullname"
                                    placeholder="John Doe" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nim</label>
                                <input type="text" class="form-control" name="nim" id="basic-default-company"
                                    placeholder="ACME Inc." />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Prodi</label>
                                <select class="form-select" name="prodi_id" id="inputGroupSelect01">
                                    <option selected>Pilih prodi</option>
                                    @foreach ($prodi as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_prodi }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">usia</label>
                                <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                    placeholder="15-100" name="usia" />
                            </div>
                            <div class="mb-3">
                                <label class="col-md-2 col-form-label">Tanggal lahir</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="date" name="tgl_lahir" id="html5-date-input" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea id="basic-default-message" class="form-control" placeholder="" name="alamat"></textarea>
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
