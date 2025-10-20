<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model untuk mengelola data pemesanan kamar hotel
 * 
 * @author Your Name
 * @version 1.0
 * @date 2025-09-30
 */
class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_pemesan',
        'jenis_kelamin',
        'nomor_identitas',
        'tipe_kamar',
        'harga',
        'tanggal_pesan',
        'durasi_menginap',
        'breakfast',
        'total_bayar',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'tanggal_pesan' => 'date',
        'breakfast' => 'boolean',
        'harga' => 'decimal:2',
        'total_bayar' => 'decimal:2',
    ];
}