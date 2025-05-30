<?php

namespace Database\Seeders;

use App\Models\JenisInfrastruktur as ModelsJenisInfrastruktur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisInfrastruktur extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenisData = [
            'Fasilitas Jalan',
            'Perkerasan Jalan',
            'Perlengkapan Jalan',
        ];

        foreach ($jenisData as $jenis) {
            ModelsJenisInfrastruktur::create([
                'nama' => $jenis,
                'warna' => match ($jenis) {
                    'Fasilitas Jalan' => '#FF5733', // Red
                    'Perkerasan Jalan' => '#33FF57', // Green
                    'Perlengkapan Jalan' => '#3357FF', // Blue
                    default => '#000000', // Default to black if not matched
                },
            ]);
        }
    }
}
