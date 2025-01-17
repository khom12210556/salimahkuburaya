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
        Schema::create('tampilabouts', function (Blueprint $table) {
            $table->id();
            $table->string('img')->nullable();
            $table->string('judul');
            $table->text('deskripsi');
            $table->text('visi');
            $table->text('misi');
            $table->string('judulmap');
            $table->text('map');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tampilabouts');
    }
};
