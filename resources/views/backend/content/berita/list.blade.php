@extends('backend/layout/main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="h3 mb-2 text-gray-800">Daftar File</h1>
            </div>
            <div class="col-lg-6 text-right">
                <a href="{{ route('berita.tambah') }}" class="btn btn-sm btn-primary">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>
        </div>

        @if(session()->has('pesan'))
            <div class="alert alert-{{ session()->get('pesan')[0] }}">
                {{ session()->get('pesan')[1] }}
            </div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Penulis</th>
                                <th>Tahun</th>
                                <th>File</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($berita as $row)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $row->judul }}</td>
                                    <td>{{ $row->kategori->nama_kategori ?? '-' }}</td>
                                    <td>{{ $row->penulis }}</td>
                                    <td>{{ $row->tahun }}</td>
                                    
                                    <td>
                                        <a href="{{ asset('storage/jurnal/' . $row->file) }}" target="_blank" class="btn btn-sm btn-info">
                                            <i class="fa fa-file-pdf-o"></i> Lihat
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('berita.ubah', $row->id) }}" class="btn btn-sm btn-secondary">
                                            <i class="fa fa-edit"></i> Ubah
                                        </a>
                                        <a href="{{ route('berita.hapus', $row->id) }}" onclick="return confirm('Yakin ingin menghapus jurnal ini?')" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i> Hapus
                                        </a>
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
