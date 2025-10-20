@extends('layouts.app')

@section('title', 'Produk Kamar - Hotel Grand Paradise')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-4xl font-bold mb-8 text-center">Pilihan Kamar Kami</h1>
    
    <div class="grid md:grid-cols-3 gap-8">
        <!-- Kamar Standar -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
            <div class="h-64 bg-gradient-to-br  flex items-center justify-center">
                <div class="text-center text-white">
                     <img src="{{ asset('image.png') }}" alt="Kamar Standar" class="w-full h-full object-cover">
                    <p class="text-xl font-semibold">Kamar Standar</p>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-2xl font-bold mb-2">Standar Room</h3>
                <p class="text-gray-600 mb-4">Kamar standar dengan fasilitas lengkap dan nyaman untuk menginap Anda</p>
                <div class="mb-4">
                    <p class="text-3xl font-bold text-blue-600">Rp 350.000</p>
                    <p class="text-sm text-gray-500">per malam</p>
                </div>
                <ul class="text-sm text-gray-600 space-y-2 mb-4">
                    <li>✓ AC & TV</li>
                    <li>✓ Kamar mandi dalam</li>
                    <li>✓ WiFi gratis</li>
                    <li>✓ Ukuran: 20m²</li>
                </ul>
                <a href="{{ route('booking.form') }}" class="block text-center bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Pesan Sekarang
                </a>
            </div>
        </div>

        <!-- Kamar Deluxe -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
            <div class="h-64 bg-gradient-to-br  flex items-center justify-center">
                <div class="text-center text-white">
                     <img src="{{ asset('room.png') }}" alt="Kamar Standar" class="w-full h-full object-cover">

                    <p class="text-xl font-semibold">Kamar Deluxe</p>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-2xl font-bold mb-2">Deluxe Room</h3>
                <p class="text-gray-600 mb-4">Kamar deluxe dengan pemandangan indah dan fasilitas premium</p>
                <div class="mb-4">
                    <p class="text-3xl font-bold text-purple-600">Rp 500.000</p>
                    <p class="text-sm text-gray-500">per malam</p>
                </div>
                <ul class="text-sm text-gray-600 space-y-2 mb-4">
                    <li>✓ AC & Smart TV</li>
                    <li>✓ Kamar mandi mewah</li>
                    <li>✓ WiFi super cepat</li>
                    <li>✓ Pemandangan kota</li>
                    <li>✓ Ukuran: 30m²</li>
                </ul>
                <a href="{{ route('booking.form') }}" class="block text-center bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 transition">
                    Pesan Sekarang
                </a>
            </div>
        </div>

        <!-- Kamar Family -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
            <div class="h-64 bg-gradient-to-br flex items-center justify-center">
                <div class="text-center text-white">
                    <div class="text-6xl mb-2">
                         <img src="{{ asset('room2.png') }}" alt="Kamar Standar" class="w-full h-full object-cover">

                    </div>
                    <p class="text-xl font-semibold">Kamar Family</p>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-2xl font-bold mb-2">Family Room</h3>
                <p class="text-gray-600 mb-4">Kamar luas untuk keluarga dengan fasilitas lengkap dan nyaman</p>
                <div class="mb-4">
                    <p class="text-3xl font-bold text-green-600">Rp 750.000</p>
                    <p class="text-sm text-gray-500">per malam</p>
                </div>
                <ul class="text-sm text-gray-600 space-y-2 mb-4">
                    <li>✓ 2 AC & 2 Smart TV</li>
                    <li>✓ 2 Kamar mandi</li>
                    <li>✓ WiFi super cepat</li>
                    <li>✓ Ruang keluarga</li>
                    <li>✓ Area bermain anak</li>
                    <li>✓ Ukuran: 50m²</li>
                </ul>
                <a href="{{ route('booking.form') }}" class="block text-center bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                    Pesan Sekarang
                </a>
            </div>
        </div>
    </div>

    <!-- Foto & Video Section -->
   <div class="mt-12 bg-white rounded-lg shadow-md p-8">
    <h2 class="text-3xl font-bold mb-6 text-center">Galeri Foto & Video</h2>
    <div class="grid md:grid-cols-2 gap-6">
        <!-- Foto Kamar -->
        <div>
            <h3 class="text-xl font-semibold mb-4">Foto Kamar</h3>
            <div class="grid grid-cols-2 gap-4">
                <div class="aspect-square rounded-lg overflow-hidden">
                    <img src="{{ asset('room.png') }}" alt="Kamar Standar" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square rounded-lg overflow-hidden">
                    <img src="{{ asset('terrace.png') }}" alt="Terrace Hotel" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square rounded-lg overflow-hidden">
                    <img src="{{ asset('room2.png') }}" alt="Terrace Hotel" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square rounded-lg overflow-hidden">
                    <img src="{{ asset('image.png') }}" alt="Terrace Hotel" class="w-full h-full object-cover">
                </div>
            </div>
            
        </div>

        <!-- Video Tour -->
        <div>
            <h3 class="text-xl font-semibold mb-4">Video Tour</h3>
            <div class="aspect-video rounded-lg overflow-hidden">
                 <iframe class="w-full h-full"
                    src="https://www.youtube.com/embed/1EiC9bvVGnk"
                    title="Hotel Room Tour"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
            
        </div>
    </div>
</div>
</div>
@endsection