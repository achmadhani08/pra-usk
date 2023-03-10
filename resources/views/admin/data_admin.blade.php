@extends('layouts.admin')

@section('content-admin')
    <div class="card">
        @if (session('status'))
            <div class="alert alert-{{ session('status') }}" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <div class="card-header d-flex justify-content-between">
            Data Admin
            <button type="button" class="btn btn-icon btn-outline-primary block" data-bs-toggle="modal"
                data-bs-target="#exampleModalCenter">
                <i class="bi bi-plus"></i>
            </button>
        </div>
        <div class="card-body">
            <table class="table" id="table1">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Lengkap</th>
                        <th>Nama Pengguna</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $admin)
                        <tr>
                            <td>{{ $admin->kode }}</td>
                            <td>{{ $admin->fullname }}</td>
                            <td>{{ $admin->username }}</td>
                            <td>{{ $admin->alamat }}</td>
                            <td><img src="{{ asset($admin->photo) }}" style="height: 100px; width: 100px;" class="card-img"
                                    alt="{{ $admin->username }}"></td>
                            <td>
                                <span class="badge bg-success">verified</span>
                            </td>
                            <td>
                                <div class="buttons">
                                    <a href="#" class="btn icon btn-primary"><i class="bi bi-pencil"></i></a>
                                    <form method="post" action="{{ route('admin.hapus_admin', $admin->id) }}">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Modal --}}
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="false">
            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">
                            Tambah Admin
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form action="{{ route('admin.submit_admin') }}" method="POST" class="form-group">
                        @csrf
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="">Fullname</label>
                                    <input type="text" name="fullname" value="" class="form-control" required>
                                </div>
                                <div class="d-flex gap-5">
                                    <div class="mb-3">
                                        <label for="">Username</label>
                                        <input type="text" name="username" value="" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Password</label>
                                        <input type="password" name="password" value="" class="form-control" required>
                                    </div>
                                </div>
                                <div class="d-flex gap-5">
                                    <div class="mb-3">
                                        <label for="">NIS</label>
                                        <input type="number" name="nis" value="" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Kelas</label>
                                        <input type="text" name="kelas" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" value="" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Foto</label>
                                    <input type="file" name="photo" value="" class="form-control">
                                </div>

                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="kode" value="generate">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <button class="btn btn-primary ml-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/js/pages/simple-datatables.js') }}"></script>
@endsection
