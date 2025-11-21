<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Nama user
            $table->string('name');

            // Username login: Mahasiswa = NIM, Dosen/Staff = NIDN
            $table->string('identifier')->unique();

            // Password login, bisa di-set default = NIM/NIDN lalu user ganti sendiri
            $table->string('password');

            // Role
            $table->enum('role', ['mahasiswa', 'dosen', 'kaprodi', 'koordinator']);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
