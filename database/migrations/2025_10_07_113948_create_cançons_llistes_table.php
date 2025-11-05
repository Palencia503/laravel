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
        Schema::create('cançons_llistes', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('llistes_id'); 
            $table->unsignedBigInteger('cancions_id'); 
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cançons_llistes');
    }
};
