@extends('layouts.mainlayouts')

@section('title', 'Tambah Prodi')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-1 mb-1"><span class="text-muted fw-light"></span> Tambah Prodi</h4>
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Basic Layout</h5>
                        <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <form action="addprodi" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Nama Prodi</label>
                                <input type="text" class="form-control" name="nama_prodi" id="basic-default-fullname"
                                    placeholder="Administrasi Bisnis" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Kode Prodi</label>
                                <input type="text" class="form-control" name="kode_prodi" id="basic-default-company"
                                    placeholder="11144" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Kepala Prodi</label>
                                <input type="text" class="form-control" name="kaprodi" id="basic-default-company"
                                    placeholder="S.T" />
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <span class="tf-icons bx bxs-save"></span>&nbsp; Save
                            </button>
                            <a href="/prodi">
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
