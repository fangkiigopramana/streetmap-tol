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
        Schema::table('potensi_bahayas', function (Blueprint $table) {
            $table->foreignId('risk_level_id')
                ->nullable()
                ->constrained('risk_levels')
                ->onDelete('set null')
                ->after('id'); // Assuming 'id' is the last column before this new column
            $table->index('risk_level_id', 'potensi_bahayas_risk_level_id_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('potensi_bahayas', function (Blueprint $table) {
            //
        });
    }
};
