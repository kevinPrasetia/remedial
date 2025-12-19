<?php

namespace App\Filament\Resources\PemesanandetailResource\Pages;

use App\Filament\Resources\PemesanandetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePemesanandetails extends ManageRecords
{
    protected static string $resource = PemesanandetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
