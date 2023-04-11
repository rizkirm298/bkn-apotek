<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $fillable = ["kode_obat", "nama_obat", "expired_date", "jumlah", "hargaPerUnit"];
}
