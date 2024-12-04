<?php

namespace App\Filament\Resources\TratamientosResource\Pages;

use App\Filament\Resources\TratamientosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTratamientos extends EditRecord
{
    protected static string $resource = TratamientosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
