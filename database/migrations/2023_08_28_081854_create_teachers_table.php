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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_id')->nullable();
            $table->string('name', 50);
            $table->string('gender', 10);
            $table->string('birthplace', 30);
            $table->string('birthday', 30);
            $table->string('address', 100);
            $table->string('last_education', 50);
            $table->string('phone_number', 15);
            $table->string('position', 30);
            $table->integer('nominal_salary');
            $table->string('email', 30);
            $table->string('password', 30);
            $table->string('image', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
