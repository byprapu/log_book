<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->integer('id_peserta')->primary();
            $table->integer('id_pembimbing');
            $table->integer('id_opd');
            $table->integer('id_nilai');
            $table->string('nama_peserta', 100);
            $table->string('nim', 12);
            $table->string('jurusan', 100);
            $table->string('instansi', 100);
            $table->date('mulai_magang');
            $table->date('akhir_magang');
            $table->string('projek', 225);
            $table->string('no_lp', 12);
            $table->string('email', 225);
            $table->string('foto', 225);
            $table->string('username', 225);
            $table->string('password', 225);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta');
    }
};
