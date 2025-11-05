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
        Schema::create('llistes', function (Blueprint $table) {
            $table->id(); 
            $table->string('nom');
            $table->text('descripcio')->nullable();
            $table->date('dataCreacio')->default(now());
            $table->boolean('publica')->default(false); 
            $table->unsignedBigInteger('usuari_id');

            //FK
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('llistes');
    }
};
