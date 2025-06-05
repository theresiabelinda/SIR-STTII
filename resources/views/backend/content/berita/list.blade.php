@extends('backend.layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="h3 mb-2 text-gray-800">Daftar File</h1>
                @if(isset($keyword) && !empty($keyword))
                    <small class="text-muted">
                        Hasil pencarian untuk: "<strong>{{ $keyword }}</strong>" 
                        ({{ $berita->count() }} data ditemukan)
                        <a href="{{ route('berita.index') }}" class="ml-2 text-primary">
                            <i class="fa fa-times"></i> Reset Pencarian
                        </a>
                    </small>
                @endif
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

        <!-- Search Form Alternatif (jika ingin di dalam halaman) -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="m-0 font-weight-bold text-primary">Data Jurnal</h6>
                    </div>
                    <div class="col-md-6">
                        <form method="GET" action="{{ route('berita.cari') }}" class="form-inline justify-content-end">
                            <div class="input-group input-group-sm">
                                <input type="text" name="search" class="form-control" 
                                       placeholder="Cari judul, penulis, kategori..." 
                                       value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    @if(request('search'))
                                        <a href="{{ route('berita.index') }}" class="btn btn-secondary btn-sm">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if($berita->count() > 0)
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
                                            <a href="{{ route('berita.hapus', $row->id) }}" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i> Hapus
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center py-4">
                        <div class="text-muted">
                            <i class="fa fa-search fa-3x mb-3"></i>
                            <h5>Tidak ada data yang ditemukan</h5>
                            @if(isset($keyword))
                                <p>Tidak ada hasil untuk pencarian "{{ $keyword }}"</p>
                                <a href="{{ route('berita.index') }}" class="btn btn-primary">
                                    <i class="fa fa-arrow-left"></i> Kembali ke Daftar
                                </a>
                            @else
                                <p>Belum ada data jurnal yang tersimpan</p>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection