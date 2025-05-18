<?php

namespace App\Filament\Admin\Resources\PartialResource\Pages;

use App\Filament\Admin\Resources\PartialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartial extends EditRecord
{
    protected static string $resource = PartialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
