<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * Controller untuk mengelola pemesanan hotel
 * 
 * @author Your Name
 * @version 1.0
 * @date 2025-09-30
 */
class HotelController extends Controller
{
    /**
     * Menampilkan halaman utama
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Menampilkan halaman produk/kamar
     */
    public function products()
    {
        $rooms = [
            [
                'name' => 'Standar',
                'price' => 350000,
                'image' => 'standar.jpg',
                'description' => 'Kamar standar dengan fasilitas lengkap'
            ],
            [
                'name' => 'Deluxe',
                'price' => 500000,
                'image' => 'deluxe.jpg',
                'description' => 'Kamar deluxe dengan pemandangan indah'
            ],
            [
                'name' => 'Family',
                'price' => 750000,
                'image' => 'family.jpg',
                'description' => 'Kamar family untuk keluarga besar'
            ]
        ];

        return view('products', compact('rooms'));
    }

    /**
     * Menampilkan daftar harga
     */
    public function prices()
    {
        $prices = [
            ['type' => 'Standar', 'price' => 350000],
            ['type' => 'Deluxe', 'price' => 500000],
            ['type' => 'Family', 'price' => 750000],
        ];

        return view('prices', compact('prices'));
    }

    /**
     * Menampilkan halaman tentang kami
     */
    public function about()
    {
        $hotel = [
            'name' => 'Hotel Grand Paradise',
            'address' => 'Jl. Sudirman No. 123, Jakarta Pusat',
            'phone' => '021-12345678',
            'email' => 'info@grandparadise.com'
        ];

        return view('about', compact('hotel'));
    }

    /**
     * Menampilkan form pemesanan
     */
    public function bookingForm()
    {
        return view('booking');
    }

    /**
     * Menyimpan data pemesanan
     */
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama_pemesan' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'nomor_identitas' => 'required|digits:16',
            'tipe_kamar' => 'required|in:Standar,Deluxe,Family',
            'tanggal_pesan' => 'required|date',
            'durasi_menginap' => 'required|integer|min:1',
            'breakfast' => 'nullable|boolean',
        ], [
            'nomor_identitas.digits' => 'Isian salah..data harus 16 digit',
            'durasi_menginap.integer' => 'Harus isi angka',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Hitung harga berdasarkan tipe kamar
        $harga = 0;
        switch ($request->tipe_kamar) {
            case 'Standar':
                $harga = 350000;
                break;
            case 'Deluxe':
                $harga = 500000;
                break;
            case 'Family':
                $harga = 750000;
                break;
        }

        // Hitung total bayar
        $total = $harga * $request->durasi_menginap;

        // Diskon 10% jika menginap lebih dari 3 hari
        if ($request->durasi_menginap > 3) {
            $total = $total * 0.9;
        }

        // Tambahan breakfast Rp 80.000
        if ($request->breakfast) {
            $total += 80000;
        }

        // Simpan ke database
        $booking = Booking::create([
            'nama_pemesan' => $request->nama_pemesan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomor_identitas' => $request->nomor_identitas,
            'tipe_kamar' => $request->tipe_kamar,
            'harga' => $harga,
            'tanggal_pesan' => $request->tanggal_pesan,
            'durasi_menginap' => $request->durasi_menginap,
            'breakfast' => $request->breakfast ?? false,
            'total_bayar' => $total,
        ]);

        return redirect()->route('booking.success', $booking->id);
    }

    /**
     * Menampilkan halaman sukses pemesanan
     */
    public function success($id)
    {
        $booking = Booking::findOrFail($id);
        return view('booking-success', compact('booking'));
    }

    /**
     * Menampilkan daftar semua pemesanan
     */
    public function list()
    {
        $bookings = Booking::orderBy('created_at', 'desc')->get();
        return view('booking-list', compact('bookings'));
    }
}