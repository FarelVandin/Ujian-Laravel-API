<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionM extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $fillable = [
        'id_produk', 'namapelanggan', 'nomor_unik', 'uang_bayar', 'uang_kembali'
    ];
}