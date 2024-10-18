<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('patients', function (Blueprint $table) {
        $table->id();
        $table->string('nama_lengkap');
        $table->date('tanggal_lahir');
        $table->string('jenis_kelamin');
        $table->string('alamat');
        $table->string('nomor_telepon');
        $table->integer('usia');
        $table->string('email');
        $table->string('nik');
        $table->string('jenis_poli');
        $table->text('keluhan');
        $table->date('tanggal_kunjungan');
        $table->time('jam_kunjungan');
        $table->string('pilihan_dokter');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
