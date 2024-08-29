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
        Schema::create('data_tpk', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('tempat_tanggal_lahir');
            $table->text('alamat');
            $table->integer('nik');
            $table->string('no_hp');
            $table->string('no_sk_desa');
            $table->date('tanggal_sk_desa');
            $table->string('jabatan');
            $table->unsignedBigInteger('userId'); // Updated column type
            $table->timestamps();
    
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade'); // Add foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_tpk');
    }
};
