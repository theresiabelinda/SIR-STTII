@extends('backend/layout/main')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Profil Saya</h1>

    @if(session()->has('pesan'))
        <div class="alert alert-{{session()->get('pesan')[0]}}">
            {{session()->get('pesan')[1]}}
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-body">
            {{-- Informasi Profil --}}
            <div class="mb-4">
                <h4>Detail Profil</h4>
                <p><strong>Nama Lengkap:</strong> {{ $user->name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                @if(isset($user->username))
                    <p><strong>Username:</strong> {{ $user->username }}</p>
                @endif
                @if(isset($user->role))
                    <p><strong>Role:</strong> {{ ucfirst($user->role) }}</p>
                @endif
                @if(isset($user->phone))
                    <p><strong>Nomor Telepon:</strong> {{ $user->phone }}</p>
                @endif
                <p><strong>Tanggal Bergabung:</strong> {{ $user->created_at->format('d M Y') }}</p>
                <p><strong>Terakhir Update Profil:</strong> {{ $user->updated_at->format('d M Y') }}</p>
                
                {{-- Kalau ada foto profil --}}
                @if(isset($user->profile_photo_path))
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $user->profile_photo_path) }}" alt="Foto Profil" width="150" class="img-thumbnail">
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
