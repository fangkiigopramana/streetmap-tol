<?php

namespace App\Filament\Resources\PotensiBahayaResource\Pages;

use App\Filament\Resources\PotensiBahayaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPotensiBahaya extends EditRecord
{
    protected static string $resource = PotensiBahayaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
