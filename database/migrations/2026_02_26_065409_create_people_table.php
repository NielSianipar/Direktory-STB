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
        Schema::create('people', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('id_number')->unique(); // NIP atau NIM
            $table->enum('category', ['dosen', 'mahasiswa', 'staff']);
            $table->string('prodi')->nullable(); // Program Studi
            $table->string('faculty')->nullable(); // Fakultas
            $table->string('image')->nullable(); // Foto profil
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
