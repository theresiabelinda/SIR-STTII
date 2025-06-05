<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Repository STTII Yogyakarta</title>

        <!-- Mengganti logo globe menjadi icon sttii -->
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Fonts & Tailwind CSS CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
        integrity="sha512-dyZ88mC6Up2uqS4h/KZef5SBYYyRUGSFLq+ihW6qRQzVcqfTf1cX4JrMBC+cCJpyODxG6IoF3wYhXl6W9G6Uqw==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 white:bg-gray-900 text-gray-900 dark:text-gray-100 min-h-screen flex flex-col">

    <!-- Navigation -->
    <nav class="flex justify-between items-center p-6 bg-gray-900 shadow-md">
    <a href="#" class="flex items-center space-x-3 pl-20"> 
        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-14 w-14 object-contain" />
        <div class="flex flex-col leading-tight">
            <span class="text-xl font-bold text-black-900">REPOSITORY</span>
            <span class="text-sm text-black-900">Sekolah Tinggi Teologi Injili Indonesia Yogyakarta</span>
        </div>
    </a>

    <div class="space-x-4 text-sm pr-20">
        <a href="{{ url('/faq') }}" class="text-md text-black-900 hover:underline">FAQ</a>
        <a href="{{ url('/login') }}" class="text-md text-black-900 hover:underline">LOGIN</a>
        <a href="https://student.sttii-yogyakarta.ac.id/" class="text-md text-black-900 hover:underline">SIAKAD</a>
    </div>
</nav>

    <!-- Hero Section -->

    <header class="flex flex-col items-center justify-center flex-grow px-6 text-center max-w-4xl mx-auto mt-20">
        <h1 class="text-5xl font-extrabold mb-4">
            <span class="text-blue-900">Repository</span> 
            <span class="text-red-900">STTII Yogyakarta</span>
        </h1>

        <form method="GET" action="{{ route('berita.search') }}" class="flex items-left gap-2 max-w-lg mx-auto mt-10">
            <input type="text" 
            name="query" 
            placeholder="Cari judul atau kata kunci..." 
            class="w-full px-20 py-2 border rounded-lg border-blue-500 shadow-xl focus:outline-none focus:ring-2 focus:ring-blue-400 text-gray-500" />
            <button type="submit" class="px-4 py-2 bg-blue-400 text-white rounded-lg hover:bg-blue-800 transition">Search</button>
        </form>
    </header>
    </div>

    <!-- Features Section -->
    <section class="max-w-6xl mx-auto px-6 mt-20 grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    
    </head>

    <!-- Feature 1: Repository -->
    <div class="h-full flex flex-col justify-between p-6 border rounded-lg shadow hover:shadow-lg transition hover:bg-gray-300 bg-gray-200">
        <h2 class="text-xl font-bold mb-4 flex items-center gap-2 text-gray-800">
            <i class="fas fa-book text-blue-600"></i> Repository
        </h2>
            <div class="space-y-2 text-gray-700 text-sm flex items-start gap-2">
                    <i class="fas fa-graduation-cap text-green-500 mt-1"></i>
                    <div>
                        <strong class="text-gray-800">Program Studi :</strong><br>
                        <p>Sarjana Teologi </p>
                        <p>Magister Teologi </p>
                        <p>Doktor Teologi </p>
                    </div>
                </div>

                <div class="flex items-start gap-2">
                    <i class="fas fa-search-plus text-red-500 mt-1"></i>
                    <div>
                        <strong class="text-gray-800">Website :</strong><br>
                        <a href="https://www.sttii-yogyakarta.ac.id/" target="_blank" class="text-blue-600 hover:underline">
                            Kunjungi Website Resmi STTII
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature 2: Panduan Unggah Mandiri -->
    <a href="{{ url('/panduan-unggah') }}" class="h-full flex flex-col justify-between p-6 border rounded-lg shadow hover:shadow-lg transition hover:bg-gray-300 bg-gray-200">

        <div>
            <h2 class="text-xl font-bold mb-2 flex items-center gap-2 text-gray-800">
                <i class="fas fa-pen-fancy text-green-600"></i> Panduan Unggah
            </h2>
            <p class="text-gray-600 text-sm">Panduan unggah mandiri skripsi/tesis/disertasi mahasiswa.</p>
        </div>
    </a>

    <!-- Feature 3: Contact Info -->
    <div class="h-full flex flex-col justify-between p-6 border rounded-lg shadow hover:shadow-lg transition hover:bg-gray-300 bg-gray-200">
        <h2 class="text-xl font-bold mb-4 flex items-center gap-2 text-gray-800">
            <i class="fas fa-address-card text-blue-600"></i> Contact Us
        </h2>

        <div class="space-y-3 text-gray-700 text-sm">
            <div class="flex items-start gap-3">
                <i class="fas fa-map-marker-alt text-blue-500 mt-1"></i>
                <div>
                    <strong class="text-gray-800">Address:</strong><br>
                    Jl. Solo Km. 11,1 PO.BOX 4/YKAP, Kalasan Yogyakarta
                </div>
            </div>

            <div class="flex items-start gap-3">
                <i class="fas fa-phone-alt text-green-500 mt-1"></i>
                <div>
                    <strong class="text-gray-800">Call:</strong><br>
                    (0274) 496257
                </div>
            </div>

            <div class="flex items-start gap-3">
                <i class="fas fa-envelope text-red-500 mt-1"></i>
                <div>
                    <strong class="text-gray-800">Email:</strong><br>
                    <a href="mailto:humas@sttii-yogyakarta.ac.id" class="text-blue-700 hover:underline">
                        humas@sttii-yogyakarta.ac.id
                    </a>
                </div>
            </div>
        </div>
    </div>

    </section>

    <footer class="mt-auto py-6 text-center text-sm text-gray-700 dark:text-gray-700">
        &copy; {{ date('Y') }} STTII Yogyakarta.
    </footer>

</body>
</html>