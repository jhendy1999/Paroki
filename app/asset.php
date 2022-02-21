<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asset extends Model
{
    protected $table='asset';
    protected $fillable=['kode_asset','nama','jenis','merk','tipe','warna','no_identifikasi','jenis_bahan','asal','tahun_perolehan','ukuran','satuan','kondisi','jumlah_barang','harga_satuan','lokasi','foto','keterangan'];
    
    
}
