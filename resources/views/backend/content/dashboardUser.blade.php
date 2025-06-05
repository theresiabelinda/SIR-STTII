@extends('backend.layout.main')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard User</h1>
    </div>

    <!-- Welcome Section -->
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-body text-center py-5">
                    <div class="mb-4">
                        <i class="fas fa-user-circle fa-5x text-primary mb-3"></i>
                        <h2 class="h3 text-gray-800 mb-3">Selamat Datang ke Dashboard User</h2>
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

    <!-- Recent Activity or Stats Cards (Optional) -->

</div>
<!-- /.container-fluid -->
        
    @endsection
