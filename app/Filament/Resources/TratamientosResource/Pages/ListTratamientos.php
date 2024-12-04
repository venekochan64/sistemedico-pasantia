<?php

namespace App\Filament\Resources\TratamientosResource\Pages;

use App\Filament\Resources\TratamientosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\Action;

class ListTratamientos extends ListRecords
{
    protected static string $resource = TratamientosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('edit')
        ];
    }

}
