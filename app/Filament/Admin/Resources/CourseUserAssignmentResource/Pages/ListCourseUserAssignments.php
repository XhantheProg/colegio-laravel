<?php

namespace App\Filament\Admin\Resources\CourseUserAssignmentResource\Pages;

use App\Filament\Admin\Resources\CourseUserAssignmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCourseUserAssignments extends ListRecords
{
    protected static string $resource = CourseUserAssignmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
