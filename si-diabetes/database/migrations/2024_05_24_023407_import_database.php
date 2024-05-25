<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Tabel user
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('nama');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->timestamps();
        });

        // Tabel pasien
        Schema::create('pasien', function (Blueprint $table) {
            $table->increments('id_pasien');
            $table->unsignedInteger('id_user');
            $table->string('nama_pasien');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
        });

        // Tabel gejala
        Schema::create('gejala', function (Blueprint $table) {
            $table->increments('id_gejala');
            $table->string('nama_gejala');
            $table->timestamps();
        });

        // Tabel penyakit
        Schema::create('penyakit', function (Blueprint $table) {
            $table->increments('id_penyakit');
            $table->string('nama_penyakit');
            $table->timestamps();
        });

        // Tabel hasil
        Schema::create('hasil', function (Blueprint $table) {
            $table->increments('id_hasil');
            $table->unsignedInteger('id_pasien');
            $table->string('hasil');
            $table->timestamps();

            $table->foreign('id_pasien')->references('id_pasien')->on('pasien')->onDelete('cascade');
        });


        // Tabel rule
        Schema::create('rule', function (Blueprint $table) {
            $table->increments('id_rule');
            $table->unsignedInteger('id_gejala');
            $table->unsignedInteger('id_penyakit');
            $table->timestamps();

            $table->foreign('id_gejala')->references('id_gejala')->on('gejala')->onDelete('cascade');
            $table->foreign('id_penyakit')->references('id_penyakit')->on('penyakit')->onDelete('cascade');
        });

        // Tabel solusi
        Schema::create('solusi', function (Blueprint $table) {
            $table->increments('id_solusi');
            $table->unsignedInteger('id_pasien');
            $table->unsignedInteger('id_penyakit');
            $table->string('solusi');
            $table->timestamps();

            $table->foreign('id_pasien')->references('id_pasien')->on('pasien')->onDelete('cascade');
            $table->foreign('id_penyakit')->references('id_penyakit')->on('penyakit')->onDelete('cascade');
        });

        // Tabel riwayat
        Schema::create('riwayat', function (Blueprint $table) {
            $table->increments('id_riwayat');
            $table->unsignedInteger('id_pasien');
            $table->unsignedInteger('id_gejala');
            $table->unsignedInteger('id_penyakit');
            $table->unsignedInteger('id_hasil');
            $table->timestamps();

            $table->foreign('id_pasien')->references('id_pasien')->on('pasien')->onDelete('cascade');
            $table->foreign('id_gejala')->references('id_gejala')->on('gejala')->onDelete('cascade');
            $table->foreign('id_penyakit')->references('id_penyakit')->on('penyakit')->onDelete('cascade');
            $table->foreign('id_hasil')->references('id_hasil')->on('hasil')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solusi');
        Schema::dropIfExists('rule');
        Schema::dropIfExists('riwayat');
        Schema::dropIfExists('hasil');
        Schema::dropIfExists('penyakit');
        Schema::dropIfExists('gejala');
        Schema::dropIfExists('pasien');
        Schema::dropIfExists('user');
    }
};