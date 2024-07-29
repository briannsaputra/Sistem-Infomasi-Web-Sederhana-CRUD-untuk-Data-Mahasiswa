@extends('layouts.mainlayouts')

@section('title', 'List Prodi')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="m-4 d-flex justify-content-between">
                <h5>List Prodi</h5>
                <a href="prodi-add">
                    <button type="button" class="btn btn-primary">
                        <span class="tf-icons bx bx-message-square-add"></span>&nbsp; Tambah Prodi
                    </button>
                </a>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Prodi</th>
                            <th>Kode Prodi</th>
                            <th>Ketua Prodi</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($prodi as $item)
                            <tr>
                                <td><strong>{{ $loop->iteration }}</strong></td>
                                <td>{{ $item->nama_prodi }}</td>
                                <td>{{ $item->kode_prodi }}</td>
                                <td>{{ $item->kaprodi }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-0 p-4">
                    {{ $prodi->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
