<?php

use App\Models\JenisInfrastruktur;
use App\Models\Lokasi;
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
        Schema::create('potensi_bahayas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Lokasi::class, 'lokasi_id');
            $table->foreignIdFor(JenisInfrastruktur::class, 'infrastruktur_id');
            $table->string('potensi_bahaya');
            $table->string('effect_of_failure');
            $table->text('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('potensi_bahayas');
    }
};
