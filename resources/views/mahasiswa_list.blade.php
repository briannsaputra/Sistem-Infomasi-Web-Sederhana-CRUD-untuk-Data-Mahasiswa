@extends('layouts.mainlayouts')

@section('title', 'List Mahasiswa')

@section('search')
<form action="" method="GET">
    <div class="navbar-nav align-items-center">
        <div class="nav-item d-flex align-items-center">
            <i class="bx bx-search fs-4 lh-0"></i>
            <input type="text" class="form-control border-0 shadow-none" name="keyword" placeholder="Search..."
                aria-label="Search..." />
        </div>
    </div>
</form>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="m-4 d-flex justify-content-between">
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible text-white" role="alert">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
                <h5>List Mahasiswa Poliban</h5>
                <a href="mahasiswa-add">
                    <button type="button" class="btn btn-primary">
                        <span class="tf-icons bx bx-message-square-add"></span>&nbsp; Tambah Mahasiswa
                    </button>
                </a>
            </div>
            <div class="table-responsive text-nowrap mt-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Prodi</th>
                            <th>usia</th>
                            <th>Tgl_Lahir</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($mahasiswa as $mhs)
                            <tr>
                                <td><strong>{{ $loop->iteration }}</strong></td>
                                <td>{{ $mhs->nama }}</td>
                                <td>{{ $mhs->nim }}</td>
                                <td>{{ $mhs->prodi->nama_prodi }}</td>
                                <td>{{ $mhs->usia }}</td>
                                <td>{{ $mhs->tgl_lahir }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="mahasiswa-edit/{{ $mhs->id }}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="mahasiswa-delete/{{ $mhs->id }}"><i
                                                    class="bx bx-trash me-1"></i>Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-0 p-4">
                    {{ $mahasiswa->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
