@extends('layouts.app')

@section('title', 'Home - Hotel Grand Paradise')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">

    <!-- Hero Section - Clean & High Impact -->
    <!-- Using a large rounded card with soft shadow and lighter blue gradient for elegance -->
    <div class="bg-gradient-to-r from-sky-600 to-indigo-700 rounded-2xl shadow-2xl p-8 lg:p-20 text-white mb-12 transform transition duration-500 hover:scale-[1.01]">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold mb-4 leading-tight">
            Hotel Grand Paradise: <span class="block text-sky-200">Kenyamanan Tak Tertandingi</span>
        </h1>
        <p class="text-lg lg:text-xl mb-8 opacity-90">
            Nikmati pengalaman menginap yang eksklusif dengan fasilitas bintang 5 di lokasi terbaik kami.
        </p>
        <a href="{{ route('booking.form') }}" class="inline-block bg-white text-indigo-700 px-10 py-4 rounded-full font-bold text-lg shadow-lg hover:bg-gray-100 transition transform hover:-translate-y-0.5">
            Pesan Sekarang
        </a>
    </div>

    <!-- Features - Minimalist Icons -->
    <!-- Removing heavy box shadows and relying on typography and subtle lines -->
    <div class="mb-12 pt-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Layanan Terbaik Kami</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Feature 1: Kamar Nyaman -->
            <div class="text-center p-6 border-b-2 border-sky-200 hover:border-sky-500 transition duration-300">
                <!-- SVG Icon: Bed -->
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-auto mb-4 text-sky-500"><path d="M2 20h20"/><path d="M4 14V4a2 2 0 0 1 2-2h4l2 5v13"/><path d="M15.5 14h-8a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2z"/><path d="M19 14V4a2 2 0 0 0-2-2h-2"/></svg>
                <h3 class="text-xl font-bold mb-2 text-gray-800">Suite Eksklusif</h3>
                <p class="text-gray-600">Kamar didesain ulang dengan sentuhan modern dan fasilitas lengkap.</p>
            </div>

            <!-- Feature 2: Breakfast Spesial -->
            <div class="text-center p-6 border-b-2 border-sky-200 hover:border-sky-500 transition duration-300">
                <!-- SVG Icon: Croissant/Coffee -->
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-auto mb-4 text-sky-500"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a2 2 0 0 0-3-3l-2.75 2.75a4 4 0 0 0 0 5.66l2.75 2.75a2 2 0 0 0 3-3"/><path d="m2 18 6-6"/></svg>
                <h3 class="text-xl font-bold mb-2 text-gray-800">Fine Dining</h3>
                <p class="text-gray-600">Pilihan hidangan gourmet dari koki internasional untuk sarapan dan makan malam.</p>
            </div>

            <!-- Feature 3: Harga Terjangkau -->
            <div class="text-center p-6 border-b-2 border-sky-200 hover:border-sky-500 transition duration-300">
                <!-- SVG Icon: Tag/Discount -->
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-auto mb-4 text-sky-500"><path d="M18 6 6 18"/><path d="M12 21a9 9 0 0 1 0-18c2.19 0 4.16 1.02 5.66 2.66"/><path d="M12 21a9 9 0 0 0 0-18c-2.19 0-4.16 1.02-5.66 2.66"/></svg>
                <h3 class="text-xl font-bold mb-2 text-gray-800">Penawaran Eksklusif</h3>
                <p class="text-gray-600">Diskon khusus dan paket menginap untuk loyalitas Anda.</p>
            </div>
        </div>
    </div>

    <!-- Video/Showcase Section - Clean Card -->
    <div class="bg-gray-50 rounded-xl shadow-lg p-8 lg:p-10 mb-12">
    <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Galeri Hotel Kami</h2>
    <div class="aspect-video bg-gray-200 rounded-lg overflow-hidden border border-gray-300">
        <iframe 
            class="w-full h-full"
            src="https://www.youtube.com/embed/cdKx1Zv3YKs?si=i8zemJGyUQ73wQlj"
            title="Hotel Room Tour"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>
</div>


    <!-- Call to Action - Integrated Footer Style -->
    <div class="bg-indigo-700/90 rounded-2xl p-8 lg:p-10 text-center text-white shadow-xl">
        <h2 class="text-3xl font-bold mb-4">Waktunya Merencanakan Perjalanan Anda.</h2>
        <p class="text-lg text-indigo-100 mb-6">Pastikan ketersediaan kamar Anda hari ini dan kunci harga terbaik.</p>
        <a href="{{ route('booking.form') }}" class="inline-block bg-sky-400 text-indigo-900 px-12 py-4 rounded-full font-bold text-lg shadow-2xl hover:bg-sky-300 transition transform hover:shadow-3xl">
            Pesan Kamar Sekarang
        </a>
    </div>
</div>
@endsection