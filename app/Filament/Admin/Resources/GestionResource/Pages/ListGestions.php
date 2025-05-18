<?php

namespace App\Filament\Admin\Resources\GestionResource\Pages;

use App\Filament\Admin\Resources\GestionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGestions extends ListRecords
{
    protected static string $resource = GestionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
