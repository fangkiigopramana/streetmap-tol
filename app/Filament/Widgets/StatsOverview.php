<?php

namespace App\Filament\Widgets;

use App\Models\JenisInfrastruktur;
use App\Models\Lokasi;
use App\Models\PotensiBahaya;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Lokasi', Lokasi::count()),
            Stat::make('Total Jenis Infrastruktur', JenisInfrastruktur::count()),
            Stat::make('Total Data Potensi Bahaya', PotensiBahaya::count()),
        ];
    }
}
