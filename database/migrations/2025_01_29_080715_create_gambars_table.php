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
        Schema::create('gambars', function (Blueprint $table) {
            $table->id();
            $table->string('gambar_banner')->nullable();
            $table->string('gambar_screen')->nullable();
            $table->string('gambar_layout_oc_design')->nullable();
            $table->string('gambar_layout_vtuber_build')->nullable();
            $table->string('gambar_layout_termofservice')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gambars');
    }
};
