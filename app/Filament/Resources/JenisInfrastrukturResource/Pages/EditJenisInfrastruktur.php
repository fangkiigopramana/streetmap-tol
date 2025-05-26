<?php

namespace App\Filament\Resources\JenisInfrastrukturResource\Pages;

use App\Filament\Resources\JenisInfrastrukturResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisInfrastruktur extends EditRecord
{
    protected static string $resource = JenisInfrastrukturResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
