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
        // Schema -> moja baza
        // Create -> schema::create -> CREATE TABLE
        // function (Blueprint $table) - anonimne f-je
        // {} -> Ovo je kod koji se izvrsava. $table -> moja "contact" tabela u bazi
        Schema::create('contact', function (Blueprint $table) {
            $table->id(); // UNSIGNED (ne moze biti negativan broj), big increments (BIG INT, AUTO INCREMENT)

            $table->string('email', 64); // VARCHAR (64) EMAIL
            $table->string('subject'); // VARCHAR (192) subject
            $table->text('message'); // TEXT message




            $table->timestamps(); // created_at, updated_at -> CREATED_AT, UPDATED_AT

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
