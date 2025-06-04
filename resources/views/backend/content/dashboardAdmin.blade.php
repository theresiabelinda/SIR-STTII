@extends('backend.layout.main')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
   

        <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body text-center py-5">
                    <div class="mb-4">
                        <i class="fas fa-user-circle fa-5x text-primary mb-3"></i>
                        <h2 class="h3 text-gray-800 mb-3">Selamat Datang ke Dashboard Admin</h2>
                        <p class="text-gray-600 mb-4">Halo <strong>{{ Auth::user()->name ?? 'User' }}</strong>, selamat datang di dashboard Anda. Gunakan fitur pencarian di bawah untuk menemukan data yang Anda butuhkan.</p>
                    </div>
                    
                    <!-- Centered Search Bar -->
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <form action="{{ route('berita.cari') }}" method="GET" class="mb-4">
                                <div class="input-group input-group-lg">
                                    <input type="text" name="search" class="form-control bg-light border-1" 
                                           placeholder="Cari data atau file..." 
                                           aria-label="Search" 
                                           value="{{ request('search') }}"
                                           style="border-radius: 50px 0 0 50px;">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary px-4" type="submit" style="border-radius: 0 50px 50px 0;">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Quick Action Buttons -->
                    <div class="row justify-content-center mt-4">
                        <div class="col-auto">
                            <a href="{{ route('berita.index') }}" class="btn btn-outline-primary btn-lg me-3">
                                <i class="fas fa-file-upload me-2"></i>
                                Data Upload File
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('dashboard.profile') }}" class="btn btn-outline-secondary btn-lg">
                                <i class="fas fa-user me-2"></i>
                                Profile Saya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total File
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalBerita }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-upload fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Total Kategori</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalKategori }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-box fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Total Pengguna
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $totalUser }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Latest File Upload</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Tanggal Upload</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($latestBerita as $berita)
                                        <tr>
                                            <td>{{ $berita->judul }}</td>
                                            <td>{{ $berita->kategori->nama_kategori }}</td>
                                            <td>{{ $berita->created_at->format('d-m-Y H:i') }}</td>
                                        </tr>
                                    @endforeach
                            </table>

                    </div>
                </div>
            </div>


        </div>
        <!-- /.container-fluid -->
    @endsection
