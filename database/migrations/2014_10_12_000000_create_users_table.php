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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickname')->nullable();
            $table->enum('gender', ['m', 'f', 'n']);
            $table->date('birthdate');
            $table->string('cpf')->unique();
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->boolean('subscribe');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('shareData');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
