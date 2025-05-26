<?php

namespace App\Filament\Resources\JenisInfrastrukturResource\Pages;

use App\Filament\Resources\JenisInfrastrukturResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisInfrastrukturs extends ListRecords
{
    protected static string $resource = JenisInfrastrukturResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
