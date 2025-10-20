@extends('layouts.app')

@section('title', 'Pemesanan Berhasil')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <!-- Success Icon -->
        <div class="text-center mb-6">
            <div class="text-6xl mb-4">✅</div>
            <h1 class="text-3xl font-bold text-green-600 mb-2">Pemesanan Berhasil!</h1>
            <p class="text-gray-600">Terima kasih atas pemesanan Anda</p>
        </div>

        <!-- Detail Pemesanan -->
        <div class="border-t border-gray-200 pt-6">
            <h2 class="text-2xl font-bold mb-4">Detail Pemesanan</h2>
            
            <div class="grid md:grid-cols-2 gap-4 mb-6">
                <div>
                    <p class="text-sm text-gray-600">Nama Pemesan</p>
                    <p class="font-semibold">{{ $booking->nama_pemesan }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Jenis Kelamin</p>
                    <p class="font-semibold">{{ $booking->jenis_kelamin }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Nomor Identitas</p>
                    <p class="font-semibold">{{ $booking->nomor_identitas }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Tipe Kamar</p>
                    <p class="font-semibold">{{ $booking->tipe_kamar }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Harga per Malam</p>
                    <p class="font-semibold">Rp {{ number_format($booking->harga, 0, ',', '.') }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Tanggal Pesan</p>
                    <p class="font-semibold">{{ $booking->tanggal_pesan->format('d/m/Y') }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Durasi Menginap</p>
                    <p class="font-semibold">{{ $booking->durasi_menginap }} Hari</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Breakfast</p>
                    <p class="font-semibold">{{ $booking->breakfast ? 'Ya' : 'Tidak' }}</p>
                </div>
            </div>

            <!-- Total Bayar -->
            <div class="bg-blue-50 rounded-lg p-4 mb-6">
                <div class="flex justify-between items-center">
                    <span class="text-lg font-semibold">Total Bayar:</span>
                    <span class="text-2xl font-bold text-blue-600">
                        Rp {{ number_format($booking->total_bayar, 0, ',', '.') }}
                    </span>
                </div>
            </div>

            <!-- Informasi Pembayaran -->
            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
                <h3 class="font-bold mb-2">Informasi Penting:</h3>
                <ul class="text-sm space-y-1">
                    <li>• Silakan lakukan pembayaran maksimal 24 jam setelah pemesanan</li>
                    <li>• Check-in pukul 14:00, Check-out pukul 12:00</li>
                    <li>• Bawa KTP sesuai dengan nomor identitas yang didaftarkan</li>
                    <li>• Untuk informasi lebih lanjut, hubungi: 021-12345678</li>
                </ul>
            </div>

            <!-- Action Buttons -->
            <div class="flex space-x-4">
                <a href="{{ route('home') }}" 
                    class="flex-1 text-center bg-gray-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-gray-700">
                    Kembali ke Home
                </a>
                <a href="{{ route('booking.list') }}" 
                    class="flex-1 text-center bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700">
                    Lihat Semua Pesanan
                </a>
            </div>
        </div>
    </div>
</div>
@endsection