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
            ]);
        }
    }
}
