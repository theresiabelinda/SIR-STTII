<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <title>FAQ - STTII Yogyakarta</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<header class="bg-gray-900 text-white py-6 shadow-md">
    <div class="max-w-6xl mx-auto px-4 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-14 w-14 object-contain">
            <div>
                <h1 class="text-xl font-bold text-black-900">REPOSITORY</h1>
                <span class="text-sm text-black-900">Sekolah Tinggi Teologi Injili Indonesia Yogyakarta</span>
            </div>
        </div>
        <nav class="space-x-4 text-sm">
            <a href="{{ url('/faq') }}" class="text-sm text-black-900 hover:underline">FAQ</a>
            <a href="{{ url('/login') }}" class="text-black-900">LOGIN</a>
            <a href="https://student.sttii-yogyakarta.ac.id/" class="text-md text-black-900 hover:underline">SIAKAD</a>
        </nav>
    </div>
</header>

<body class="bg-gray-50 text-gray-900 min-h-screen">

    <div class="max-w-4xl mx-auto px-6 py-16">
        <h1 class="text-4xl font-extrabold text-center text-blue-900 mb-10">Frequently Asked Questions</h1>

        <div class="space-y-6">
            <!-- FAQ Item 1 -->
            <details class="bg-white shadow rounded-md p-5">
                <summary class="cursor-pointer text-lg font-semibold text-gray-800">Apa itu Repository STTII?</summary>
                <p class="mt-3 text-gray-600">Repository STTII adalah sistem penyimpanan digital untuk karya ilmiah mahasiswa seperti skripsi, tesis dan disertasi.</p>
            </details>

            <!-- FAQ Item 2 -->
            <details class="bg-white shadow rounded-md p-5">
                <summary class="cursor-pointer text-lg font-semibold text-gray-800">Bagaimana cara mencari dokumen?</summary>
                <p class="mt-3 text-gray-600">Gunakan fitur pencarian di halaman utama dengan mengetik judul atau kata kunci dokumen.</p>
            </details>

            <!-- FAQ Item 3 -->
            <details class="bg-white shadow rounded-md p-5">
                <summary class="cursor-pointer text-lg font-semibold text-gray-800">Apakah harus login untuk melihat dokumen?</summary>
                <p class="mt-3 text-gray-600">Beberapa dokumen dapat diakses publik, namun untuk akses penuh perlu login terlebih dahulu.</p>
            </details>

            <!-- FAQ Item 4 -->
            <details class="bg-white shadow rounded-md p-5">
                <summary class="cursor-pointer text-lg font-semibold text-gray-800">Bagaimana cara mendapatkan akses untuk login?</summary>
                <p class="mt-3 text-gray-600"> Silahkan menghubungi admin prodi untuk mendapatkan akses login.</p>
            </details>

            <!-- FAQ Item 5 -->
            <details class="bg-white shadow rounded-md p-5">
                <summary class="cursor-pointer text-lg font-semibold text-gray-800">Bagaimana cara mengunggah dokumen skripsi/tesis/disertasi dalam repository?</summary>
                <p class="mt-3 text-gray-600">Silahkan cek menu Panduan Unggahan</p>
            </details>

            <!-- FAQ Item 6 -->
            <details class="bg-white shadow rounded-md p-5">
                <summary class="cursor-pointer text-lg font-semibold text-gray-800">Apakah ada format penulisan skripsi/tesis/disertasi?</summary>
                <p class="mt-3 text-gray-600">Ya, silahkan menghubungi bagian program studi terkait</p>
            </details>
        </div>
    </div>

</body>
</html>