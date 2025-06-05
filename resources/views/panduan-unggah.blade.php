<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Panduan Unggah File - Repository STTII Yogyakarta</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 dark:bg-white-50 text-gray-900 dark:text-gray-100 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="flex justify-between items-center p-6 bg-gray-900 shadow-md">
        <a href="{{ url('/') }}" class="flex items-center space-x-3 pl-20">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-14 w-14 object-contain" />
            <div class="flex flex-col leading-tight">
                <span class="text-xl font-bold text-white">REPOSITORY</span>
                <span class="text-sm text-gray-300">Sekolah Tinggi Teologi Injili Indonesia Yogyakarta</span>
            </div>
        </a>
        <div class="space-x-4 text-sm pr-20">
            <a href="{{ url('/faq') }}" class="text-gray-300 hover:underline">FAQ</a>
            <a href="{{ url('/login') }}" class="text-gray-300 hover:underline">LOGIN</a>
        </div>
    </nav>

    <!-- Main content -->
    <main class="max-w-4xl mx-auto px-6 py-12 flex-grow">
        <h1 class="text-4xl font-extrabold mb-8 text-blue-900">Panduan Unggah Mandiri Skripsi/Tesis/Disertasi</h1>

        <section class="bg-white dark:bg-gray-800 rounded-lg shadow p-8 space-y-6">
            <p class="text-gray-700 dark:text-gray-300 text-lg">
                Selamat datang di panduan unggah mandiri file skripsi, tesis, dan disertasi. Berikut langkah-langkah yang harus Anda ikuti:
            </p>

            <ol class="list-decimal list-inside space-y-3 text-gray-700 dark:text-gray-300">
                <li>Pastikan file sudah dalam format <strong>PDF</strong> dengan ukuran maksimal 20 MB.</li>
                <li>Login menggunakan akun yang telah terdaftar di sistem.</li>
                <li>Siapkan data lengkap skripsi/tesis/disertasi seperti judul, nama penulis, program studi, dan tahun.</li>
                <li>Klik tombol <strong>"Unggah File"</strong> di bawah ini untuk menuju halaman unggah.</li>
                <li>Isi form unggah dengan lengkap dan pilih file PDF yang sudah disiapkan.</li>
                <li>Tekan tombol <strong>"Submit"</strong> dan tunggu konfirmasi berhasil.</li>
                <li>Jika ada kesulitan, hubungi bagian administrasi repository.</li>
            </ol>

            <div class="mt-8">
                <a href="{{ url('/login') }}"
                   class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-800 transition font-semibold">
                    Unggah File Skripsi/Tesis/Disertasi
                </a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="py-6 text-center text-sm text-gray-700 dark:text-gray-600">
        &copy; {{ date('Y') }} STTII Yogyakarta. All rights reserved.
    </footer>

</body>
</html>
