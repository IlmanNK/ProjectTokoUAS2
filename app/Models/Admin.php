<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'produk';


    public $timestamps = false;
    protected $fillable = ['kode', 'nama_produk', 'harga_produk', 'stok_produk', 'min_stok', 'deskripsi_produk'];
}
