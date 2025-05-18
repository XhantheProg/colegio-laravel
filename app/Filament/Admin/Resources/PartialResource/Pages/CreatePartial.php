<?php

namespace App\Filament\Admin\Resources\PartialResource\Pages;

use App\Filament\Admin\Resources\PartialResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePartial extends CreateRecord
{
    protected static string $resource = PartialResource::class;
}
