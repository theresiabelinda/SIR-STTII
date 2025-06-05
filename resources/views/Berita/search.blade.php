<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

<div class="max-w-6xl mx-auto px-6 mt-10">
    <h2 class="text-2xl font-bold mb-6">Hasil Pencarian untuk: "{{ $query }}"</h2>

    @if($beritas->isEmpty())
        <p class="text-gray-600">Tidak ada hasil ditemukan.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($beritas as $berita)
                <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition border border-gray-200">
                    <h3 class="text-xl font-bold text-blue-900 mb-2">{{ $berita->judul }}</h3>
                    <p class="text-sm text-gray-700 mb-1"><strong>Penulis:</strong> {{ $berita->penulis }}</p>
                    <p class="text-sm text-gray-600 mb-4">{{ Str::limit($berita->isi, 100) }}</p>
                    
                    <div class="flex items-center space-x-4">
                        <a href="{{ asset('storage/jurnal/' . $berita->file) }}" target="_blank"
                           class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition text-sm">
                            Download PDF
                        </a>
                        <a href="{{ route('berita.search', $berita->id) }}"
                           class="text-blue-600 hover:underline text-sm">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

</body>
</html>
