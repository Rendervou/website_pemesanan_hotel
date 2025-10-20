@extends('layouts.app')

@section('title', 'Tentang Kami - Hotel Grand Paradise')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <!-- Header Section (Vision and Mission) -->
    <div class="bg-blue-900 text-white rounded-xl shadow-2xl p-8 lg:p-16 mb-12">
        <p class="text-lg font-medium uppercase tracking-wider mb-4 text-blue-300">Tentang Kami</p>
        <h1 class="text-4xl lg:text-6xl font-extrabold mb-6 leading-tight">Menciptakan Surga Kenyamanan di Jantung Kota.</h1>
        <p class="text-xl lg:text-2xl opacity-90">
            Visi kami adalah menjadi destinasi utama bagi para pelancong yang mencari ketenangan dan layanan tak tertandingi, menggabungkan kemewahan modern dengan kehangatan keramahan tradisional Indonesia.
        </p>
    </div>

    <!-- Our Story and Commitment -->
    <div class="grid lg:grid-cols-2 gap-12 mb-12 items-center">
        <div>
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Perjalanan Grand Paradise</h2>
            <p class="text-gray-600 mb-4 leading-relaxed">
                Hotel Grand Paradise didirikan pada tahun 1995 dengan satu tujuan: untuk mendefinisikan ulang makna **kemewahan yang personal**. Selama lebih dari dua dekade, kami telah berkembang dari butik hotel sederhana menjadi ikon keramahtamahan bintang 5, namun komitmen kami terhadap setiap tamu tetap menjadi inti dari apa yang kami lakukan.
            </p>
            <p class="text-gray-600 leading-relaxed border-l-4 border-blue-500 pl-4 italic">
                "Kami percaya bahwa pengalaman menginap bukan hanya tentang kamar yang mewah, tetapi tentang koneksi emosional dan kenangan yang tercipta."
            </p>
        </div>
        <div class="bg-gray-100 p-6 rounded-lg shadow-inner">
            <img src="https://images.unsplash.com/photo-1625244724120-1fd1d34d00f6?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Foto Lobi Hotel" class="rounded-lg shadow-lg w-full h-auto object-cover">
        </div>
    </div>

    <!-- Core Values Section -->
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-blue-700 mb-8">Nilai-Nilai Inti Kami</h2>
        <div class="grid sm:grid-cols-3 gap-6">
            <div class="bg-white p-8 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <div class="text-5xl mb-4 text-blue-500">✨</div>
                <h3 class="text-xl font-semibold mb-2 text-gray-800">Kualitas Tanpa Kompromi</h3>
                <p class="text-gray-600">Dari seprai linen terbaik hingga hidangan kuliner bintang Michelin, kami menjamin kualitas di setiap detail layanan.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <div class="text-5xl mb-4 text-blue-500">🤝</div>
                <h3 class="text-xl font-semibold mb-2 text-gray-800">Keramahan Otentik</h3>
                <p class="text-gray-600">Staf kami dilatih untuk menyediakan layanan yang hangat, personal, dan proaktif, memastikan setiap tamu merasa dihargai.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <div class="text-5xl mb-4 text-blue-500">🌿</div>
                <h3 class="text-xl font-semibold mb-2 text-gray-800">Keberlanjutan Lingkungan</h3>
                <p class="text-gray-600">Kami berkomitmen pada praktik hotel ramah lingkungan untuk menjaga keindahan alam sekitar bagi generasi mendatang.</p>
            </div>
        </div>
    </div>

    <!-- Location Highlight -->
    <div class="bg-blue-50 rounded-lg p-8 lg:p-12 mb-12">
        <div class="grid lg:grid-cols-2 gap-8 items-center">
            <div>
                <h3 class="text-2xl font-bold text-blue-700 mb-3">Lokasi Premium</h3>
                <p class="text-lg text-gray-700 mb-4">
                    Grand Paradise terletak strategis di pusat bisnis dan hiburan kota, hanya beberapa langkah dari atraksi utama. Akses mudah ke bandara dan stasiun kereta menjadikannya pilihan sempurna.
                </p>
                <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition">
                    Lihat Peta Lokasi
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow-inner">
            <img src="https://images.unsplash.com/photo-1655303717516-0a43d0d6c3a3?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aG90ZWwlMjBmcm9udCUyMHZpZXd8ZW58MHx8MHx8fDA%3D" alt="Foto Lobi Hotel" class="rounded-lg shadow-lg w-full h-auto object-cover">
        </div>
        </div>
    </div>

    <!-- Final Call to Action -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-lg p-10 text-center shadow-xl">
        <h2 class="text-3xl font-bold text-white mb-3">Siap Menjadi Bagian dari Kisah Kami?</h2>
        <p class="text-xl text-blue-200 mb-6">Rasakan perbedaan menginap di Hotel Grand Paradise. Pesan pengalaman bintang 5 Anda sekarang.</p>
        <a href="{{ route('booking.form') }}" class="inline-block bg-white text-blue-800 px-10 py-4 rounded-full font-bold text-lg shadow-2xl hover:bg-gray-200 transition transform hover:scale-105">
            Pesan Sekarang &raquo;
        </a>
    </div>

</div>
@endsection
