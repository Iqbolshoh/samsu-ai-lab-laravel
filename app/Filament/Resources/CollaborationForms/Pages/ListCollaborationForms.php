<?php

namespace App\Filament\Resources\CollaborationForms\Pages;

use App\Filament\Resources\CollaborationForms\CollaborationFormResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCollaborationForms extends ListRecords
{
    protected static string $resource = CollaborationFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
