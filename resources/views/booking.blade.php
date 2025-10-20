@extends('layouts.app')

@section('title', 'Pesan Kamar')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-4xl font-bold mb-8 text-center">Form Pemesanan Kamar</h1>
    
    <div class="bg-white rounded-lg shadow-lg p-8">
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('booking.store') }}" method="POST" id="bookingForm">
            @csrf
            
            <!-- Nama Pemesan -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Nama Pemesan *</label>
                <input type="text" name="nama_pemesan" value="{{ old('nama_pemesan') }}" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required>
            </div>

            <!-- Jenis Kelamin -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Jenis Kelamin *</label>
                <div class="flex space-x-4">
                    <label class="flex items-center">
                        <input type="radio" name="jenis_kelamin" value="Laki-laki" 
                            {{ old('jenis_kelamin') == 'Laki-laki' ? 'checked' : '' }} 
                            class="mr-2" required>
                        Laki-laki
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="jenis_kelamin" value="Perempuan" 
                            {{ old('jenis_kelamin') == 'Perempuan' ? 'checked' : '' }} 
                            class="mr-2" required>
                        Perempuan
                    </label>
                </div>
            </div>

            <!-- Nomor Identitas -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Nomor Identitas (16 Digit) *</label>
                <input type="text" name="nomor_identitas" value="{{ old('nomor_identitas') }}" 
                    maxlength="16" pattern="[0-9]{16}"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required>
                <p class="text-sm text-gray-500 mt-1">Masukkan 16 digit nomor KTP</p>
            </div>

            <!-- Tipe Kamar -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Tipe Kamar *</label>
                <select name="tipe_kamar" id="tipe_kamar" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required>
                    <option value="">-- Pilih Tipe Kamar --</option>
                    <option value="Standar" data-price="350000" {{ old('tipe_kamar') == 'Standar' ? 'selected' : '' }}>
                        Standar
                    </option>
                    <option value="Deluxe" data-price="500000" {{ old('tipe_kamar') == 'Deluxe' ? 'selected' : '' }}>
                        Deluxe 
                    </option>
                    <option value="Family" data-price="750000" {{ old('tipe_kamar') == 'Family' ? 'selected' : '' }}>
                        Family
                    </option>
                </select>
            </div>

            <!-- Harga -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Harga per Malam</label>
                <input type="text" id="harga" 
                    class="w-full px-4 py-2 border rounded-lg bg-gray-100" 
                    readonly>
            </div>

            <!-- Tanggal Pesan -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Tanggal Pesan *</label>
                <input type="date" name="tanggal_pesan" value="{{ old('tanggal_pesan') }}" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required>
            </div>

            <!-- Durasi Menginap -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Durasi Menginap (Hari) *</label>
                <input type="number" name="durasi_menginap" id="durasi_menginap" 
                    value="{{ old('durasi_menginap', 1) }}" min="1"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required>
            </div>

            <!-- Breakfast -->
            <div class="mb-4">
                <label class="flex items-center">
                    <input type="checkbox" name="breakfast" id="breakfast" value="1" 
                        {{ old('breakfast') ? 'checked' : '' }}
                        class="mr-2 h-5 w-5">
                    <span class="text-gray-700 font-bold">Termasuk Breakfast (+Rp 80.000)</span>
                </label>
            </div>

            <!-- Total Bayar -->
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2">Total Bayar</label>
                <input type="text" id="total_bayar" 
                    class="w-full px-4 py-2 border rounded-lg bg-gray-100 text-xl font-bold text-green-600" 
                    readonly>
                <p class="text-sm text-gray-500 mt-1">* Diskon 10% untuk menginap lebih dari 3 hari</p>
            </div>

            <!-- Buttons -->
            <div class="flex space-x-4">
                <button type="button" onclick="hitungTotal()" 
                    class="flex-1 bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700">
                    Hitung Total Bayar
                </button>
                <button type="submit" 
                    class="flex-1 bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700">
                    Pesan Sekarang
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Update harga saat tipe kamar dipilih
    document.getElementById('tipe_kamar').addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        const price = selectedOption.getAttribute('data-price');
        
        if (price) {
            document.getElementById('harga').value = 'Rp ' + parseInt(price).toLocaleString('id-ID');
        } else {
            document.getElementById('harga').value = '';
        }
        document.getElementById('total_bayar').value = '';
    });

    // Fungsi hitung total bayar
    function hitungTotal() {
        const tipeKamar = document.getElementById('tipe_kamar');
        const selectedOption = tipeKamar.options[tipeKamar.selectedIndex];
        const harga = parseInt(selectedOption.getAttribute('data-price'));
        const durasi = parseInt(document.getElementById('durasi_menginap').value);
        const breakfast = document.getElementById('breakfast').checked;

        if (!harga || !durasi) {
            alert('Mohon lengkapi Tipe Kamar dan Durasi Menginap');
            return;
        }

        let total = harga * durasi;

        // Diskon 10% jika menginap lebih dari 3 hari
        if (durasi > 3) {
            total = total * 0.9;
        }

        // Tambahan breakfast
        if (breakfast) {
            total += 80000;
        }

        document.getElementById('total_bayar').value = 'Rp ' + Math.round(total).toLocaleString('id-ID');
    }

    // Auto hitung saat durasi atau breakfast berubah
    document.getElementById('durasi_menginap').addEventListener('input', function() {
        if (document.getElementById('harga').value) {
            hitungTotal();
        }
    });

    document.getElementById('breakfast').addEventListener('change', function() {
        if (document.getElementById('harga').value) {
            hitungTotal();
        }
    });
</script>
@endpush