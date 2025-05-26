<?php

namespace App\Filament\Resources\PotensiBahayaResource\Pages;

use App\Filament\Resources\PotensiBahayaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPotensiBahayas extends ListRecords
{
    protected static string $resource = PotensiBahayaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
