<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ["nomor_transaksi", "tgl_transaksi", "nama_kasir", "total_bayar", "obat_id", "resep_id"];
}
