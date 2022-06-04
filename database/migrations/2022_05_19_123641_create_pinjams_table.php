<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjams', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pinjam');
            $table->string('jenis_pinjam')->nullable();
            $table->string('jenis_pengguna')->nullable();
            $table->string('nama_peminjam')->nullable();
            $table->string('nomor_induk')->nullable();
            $table->string('hp')->nullable();
            $table->string('email')->nullable();
            $table->text('nomor_surat')->nullable();
            $table->date('tanggal_surat')->nullable();
            $table->text('nama_kegiatan')->nullable();
            $table->text('file')->nullable();
            $table->integer('status')->nullable(); //
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
        Schema::dropIfExists('pinjams');
    }
};
