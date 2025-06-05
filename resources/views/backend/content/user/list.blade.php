@extends('backend.layout.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="h3 mb-2 text-gray-800">List Pengguna</h1>
            </div>
            <div class="col-lg-6 text-right">
                <a href="{{ route('user.tambah') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>
            </div>

            @if (session()->has('pesan'))
                <div class="alert alert-success w-100 mb-3 {{session()->get('pesan')[0]}}">
                    {{session()->get('pesan')[1]}}
                </div>
            @endif

        </div>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" collspasing="0">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($user as $row)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>
                                        @if ($row->role == 'admin')
                                            <span class="badge badge-success">Admin</span>
                                        @else
                                            <span class="badge badge-primary">User</span>
                                        @endif
                                    <td>
                                        <a href="{{ route('user.ubah', $row->id) }}"
                                            class="btn btn-sm btn-secondary"><i class="fa fa-edit"></i>Ubah</a>
                                        <a href="{{ route('user.hapus', $row->id) }}"
                                            onclick="return confirm('Anda Yakin?')" class="btn btn-sm btn-secondary"><i
                                                class="fa fa-trash"></i>Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
