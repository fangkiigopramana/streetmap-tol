<?php

namespace Database\Seeders;

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
    }
}
