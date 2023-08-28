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
        Schema::create('inputs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nik');
            $table->string('nama');
            $table->dateTime('tl');
            $table->enum('jenisKelamin',['Perempuan','laki - laki']);
            $table->string(('alamat'));
            $table->enum('statusperkawinan',['sudah kawin','belum kawin']);
            $table->string('pekerjaan');
            $table ->bigInteger('telephone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inputs');
    }
};
