@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10 px-4">
    <h2 class="text-2xl font-bold mb-4">Hasil Pencarian untuk: "{{ $query }}"</h2>

    @if($results->isEmpty())
        <p class="text-gray-600">Tidak ada hasil ditemukan.</p>
    @else
        <ul class="space-y-4">
            @foreach($results as $item)
                <li class="p-4 bg-white rounded shadow">
                    <h3 class="text-lg font-semibold">{{ $item->judul }}</h3>
                    <p class="text-sm text-gray-600">{{ Str::limit($item->deskripsi, 150) }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection