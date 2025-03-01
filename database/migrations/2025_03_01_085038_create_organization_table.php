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
        Schema::create('organization', function (Blueprint $table) {
            $table->string('nama');
            $table->string('kabinet');
            $table->string('periode');
            $table->string('slogan');
            $table->text('deskripsi');
            $table->text('sambutan');
            $table->string('pendamping');
            $table->string('visi');
            $table->string('misi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organization');
    }
};
