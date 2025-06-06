<?php

use App\Models\JenisInfrastruktur;
use App\Models\PotensiBahaya;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $lokasi = PotensiBahaya::with('lokasi','jenisInfrastruktur', 'riskLevel')
        ->get()
        ->map(function($item) {
            return [
                'id_jenis' => $item->jenisInfrastruktur->id,
                'kategori' => $item->jenisInfrastruktur->nama ?? '-',
                'jalan_tol' => $item->lokasi->nama ?? '-',
                'risk_level' => $item->riskLevel->name ?? '-',
                'km' => $item->potensi_bahaya ?? '-',
                'latitude' => $item->lokasi->latitude ?? '-',
                'longitude' => $item->lokasi->longitude ?? '-',
                'keterangan' => $item->effect_of_failure ?? '-',
                'gambar' => $item->gambar ?? '-',
            ];
        });
    $jenis = JenisInfrastruktur::all();
    return view('home', compact('lokasi', 'jenis'));
});
