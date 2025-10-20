@extends('layouts.app')

@section('title', 'Daftar Pemesanan')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-4xl font-bold mb-8 text-center">Daftar Pemesanan Kamar</h1>
    
    @if($bookings->isEmpty())
        <!-- Jika belum ada pemesanan -->
        <div class="bg-white rounded-lg shadow-lg p-12 text-center">
            <div class="text-6xl mb-4">📋</div>
            <h2 class="text-2xl font-bold mb-2 text-gray-800">Belum Ada Pemesanan</h2>
            <p class="text-gray-600 mb-6">Mulai pesan kamar sekarang dan nikmati penawaran terbaik!</p>
            <a href="{{ route('booking.form') }}" 
                class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Pesan Kamar Sekarang
            </a>
        </div>
    @else
        <!-- Jika ada pemesanan -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-600">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">
                                No
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Nama Pemesan
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Jenis Kelamin
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">
                                No. Identitas
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Tipe Kamar
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Harga
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Tanggal Pesan
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Durasi
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Breakfast
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Total Bayar
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($bookings as $index => $booking)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $index + 1 }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold">
                                {{ $booking->nama_pemesan }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                @if($booking->jenis_kelamin == 'Laki-laki')
                                    <span class="text-blue-600">♂️ {{ $booking->jenis_kelamin }}</span>
                                @else
                                    <span class="text-pink-600">♀️ {{ $booking->jenis_kelamin }}</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-mono">
                                {{ $booking->nomor_identitas }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <span class="px-3 py-1 rounded-full text-xs font-semibold
                                    {{ $booking->tipe_kamar == 'Standar' ? 'bg-blue-100 text-blue-800' : '' }}
                                    {{ $booking->tipe_kamar == 'Deluxe' ? 'bg-purple-100 text-purple-800' : '' }}
                                    {{ $booking->tipe_kamar == 'Family' ? 'bg-green-100 text-green-800' : '' }}">
                                    {{ $booking->tipe_kamar }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                Rp {{ number_format($booking->harga, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                {{ $booking->tanggal_pesan->format('d/m/Y') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center">
                                <span class="bg-gray-100 px-3 py-1 rounded-full font-semibold">
                                    {{ $booking->durasi_menginap }} hari
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                @if($booking->breakfast)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-800">
                                        ✓ Ya
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-gray-100 text-gray-600">
                                        ✗ Tidak
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-blue-600">
                                Rp {{ number_format($booking->total_bayar, 0, ',', '.') }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="bg-gray-50">
                        <tr>
                            <td colspan="9" class="px-6 py-4 text-right text-sm font-bold text-gray-900">
                                TOTAL KESELURUHAN:
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-green-600">
                                Rp {{ number_format($bookings->sum('total_bayar'), 0, ',', '.') }}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <!-- Summary Statistics -->
        <div class="grid md:grid-cols-4 gap-6 mb-8">
            <!-- Total Pemesanan -->
            <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm opacity-90 mb-1">Total Pemesanan</p>
                        <p class="text-4xl font-bold">{{ $bookings->count() }}</p>
                        <p class="text-xs opacity-75 mt-1">Transaksi</p>
                    </div>
                    <div class="text-5xl opacity-80">
                        📋
                    </div>
                </div>
            </div>

            <!-- Total Pendapatan -->
            <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-lg shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm opacity-90 mb-1">Total Pendapatan</p>
                        <p class="text-2xl font-bold">
                            Rp {{ number_format($bookings->sum('total_bayar') / 1000000, 1) }}jt
                        </p>
                        <p class="text-xs opacity-75 mt-1">
                            Rp {{ number_format($bookings->sum('total_bayar'), 0, ',', '.') }}
                        </p>
                    </div>
                    <div class="text-5xl opacity-80">
                        💰
                    </div>
                </div>
            </div>

            <!-- Dengan Breakfast -->
            <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-lg shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm opacity-90 mb-1">Dengan Breakfast</p>
                        <p class="text-4xl font-bold">{{ $bookings->where('breakfast', true)->count() }}</p>
                        <p class="text-xs opacity-75 mt-1">
                            {{ $bookings->count() > 0 ? round(($bookings->where('breakfast', true)->count() / $bookings->count()) * 100) : 0 }}% dari total
                        </p>
                    </div>
                    <div class="text-5xl opacity-80">
                        🍽️
                    </div>
                </div>
            </div>

            <!-- Total Hari Menginap -->
            <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm opacity-90 mb-1">Total Hari</p>
                        <p class="text-4xl font-bold">{{ $bookings->sum('durasi_menginap') }}</p>
                        <p class="text-xs opacity-75 mt-1">Hari menginap</p>
                    </div>
                    <div class="text-5xl opacity-80">
                        📅
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistik Tipe Kamar -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold mb-6">Statistik Berdasarkan Tipe Kamar</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Standar -->
                <div class="border-2 border-blue-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-blue-600">Standar</h3>
                        <span class="text-3xl">🛏️</span>
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Jumlah:</span>
                            <span class="font-bold">{{ $bookings->where('tipe_kamar', 'Standar')->count() }} pesanan</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Pendapatan:</span>
                            <span class="font-bold text-blue-600">
                                Rp {{ number_format($bookings->where('tipe_kamar', 'Standar')->sum('total_bayar'), 0, ',', '.') }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Deluxe -->
                <div class="border-2 border-purple-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-purple-600">Deluxe</h3>
                        <span class="text-3xl">🏨</span>
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Jumlah:</span>
                            <span class="font-bold">{{ $bookings->where('tipe_kamar', 'Deluxe')->count() }} pesanan</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Pendapatan:</span>
                            <span class="font-bold text-purple-600">
                                Rp {{ number_format($bookings->where('tipe_kamar', 'Deluxe')->sum('total_bayar'), 0, ',', '.') }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Family -->
                <div class="border-2 border-green-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-green-600">Family</h3>
                        <span class="text-3xl">👨‍👩‍👧‍👦</span>
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Jumlah:</span>
                            <span class="font-bold">{{ $bookings->where('tipe_kamar', 'Family')->count() }} pesanan</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Pendapatan:</span>
                            <span class="font-bold text-green-600">
                                Rp {{ number_format($bookings->where('tipe_kamar', 'Family')->sum('total_bayar'), 0, ',', '.') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-center space-x-4">
            <a href="{{ route('booking.form') }}" 
                class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition inline-flex items-center">
                <span class="mr-2">➕</span>
                Tambah Pemesanan Baru
            </a>
            <a href="{{ route('home') }}" 
                class="bg-gray-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-gray-700 transition inline-flex items-center">
                <span class="mr-2">🏠</span>
                Kembali ke Home
            </a>
        </div>
    @endif
</div>
@endsection