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
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();

            $table->string('nama_layanan');
            $table->string('thumbnail');
            $table->enum('jenis_layanan', ['1', '2'])->comment('1=Reguler, 2=Kilat,3=Express');
            $table->enum('unit', ['1', '2'])->comment('1=Kg, 2=Pcs');
            $table->unsignedBigInteger('category_id')->index();
            $table->integer('harga');
         $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanans');
    }
};