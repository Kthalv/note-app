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
        Schema::create('notes', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // Title of the note
            $table->string('description'); // Short description
            $table->string('content'); // Content of the note
            $table->rememberToken();
            $table->timestamps();
        });

    }

    /**
     * Run the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};