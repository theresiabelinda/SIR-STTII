@extends('backend/layout/mainAdmin')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Form Tambah User</h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('user.prosesTambah') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama User</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <span style="color: red ; font-weight: 600; font-soxe: 9pt">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email User</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <span style="color: red ; font-weight: 600; font-soxe: 9pt">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password User</label>
                        <input type="text" name="password" value="{{ old('password') }}"
                            class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <span style="color: red ; font-weight: 600; font-soxe: 9pt">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Role User</label>
                        <select name="role" required>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>

    </div>
@endsection
