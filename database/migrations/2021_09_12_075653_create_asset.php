<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsset extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_asset');
            $table->string('nama');
            $table->string('jenis');
            $table->string('merk');
            $table->string('tipe');
            $table->string('warna');
            $table->string('no_identifikasi');
            $table->string('jenis_bahan');
            $table->string('asal');
            $table->date('tahun_perolehan');
            $table->double('ukuran');
            $table->string('satuan');
            $table->string('kondisi');
            $table->integer('jumlah_barang');
            $table->integer('harga_satuan');
            $table->string('lokasi');
            $table->string('foto');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset');
    }
}
