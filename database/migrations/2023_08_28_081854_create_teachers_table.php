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
            $table->date('birthday');
            $table->string('address', 100);
            $table->string('last_education', 50);
            $table->string('phone_number', 20)->unique();
            $table->string('position', 100);
            $table->integer('nominal_salary');
            $table->string('email', 250)->unique();
            $table->string('password', 255);
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
