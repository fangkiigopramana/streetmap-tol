<?php

namespace App\Filament\Resources\PotensiBahayaResource\Pages;

use App\Filament\Resources\PotensiBahayaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePotensiBahaya extends CreateRecord
{
    protected static string $resource = PotensiBahayaResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
