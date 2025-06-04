@extends('backend.layout.main')


@section('content')
<div class="container mt-4">
    <h2>Ubah Jurnal</h2>

    @if(session('pesan'))
        <div class="alert alert-{{ session('pesan')[0] }}">
            {{ session('pesan')[1] }}
        </div>
    @endif

    <form action="{{ route('berita.prosesUbah') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="id" value="{{ $berita->id }}">

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul', $berita->judul) }}">
            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="kategori_id">Kategori</label>
            <select name="kategori_id" class="form-control @error('kategori_id') is-invalid @enderror" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach ($kategori as $item)
                    <option value="{{ $item->id }}" {{ $berita->kategori_id == $item->id ? 'selected' : '' }}>{{ $item->nama_kategori }}</option>
                @endforeach
            </select>
            @error('kategori_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        <div class="mb-3">
            <label for="abstrak" class="form-label">Abstrak</label>
            <textarea name="abstrak" id="abstrak" rows="4" class="form-control @error('abstrak') is-invalid @enderror">{{ old('abstrak', $berita->abstrak) }}</textarea>
            @error('abstrak')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" name="penulis" id="penulis" class="form-control @error('penulis') is-invalid @enderror" value="{{ old('penulis', $berita->penulis) }}">
            @error('penulis')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="number" name="tahun" id="tahun" class="form-control @error('tahun') is-invalid @enderror" value="{{ old('tahun', $berita->tahun) }}">
            @error('tahun')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="file" class="form-label">File PDF (opsional)</label>
            <input type="file" name="file" id="file" accept="application/pdf" class="form-control @error('file') is-invalid @enderror">
            @error('file')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            @if($berita->file)
                <p class="mt-2">File saat ini: <a href="{{ asset('storage/jurnal/' . $berita->file) }}" target="_blank">{{ $berita->file }}</a></p>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('berita.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
