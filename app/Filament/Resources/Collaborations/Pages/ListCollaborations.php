<?php

namespace App\Filament\Resources\Collaborations\Pages;

use App\Filament\Resources\Collaborations\CollaborationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCollaborations extends ListRecords
{
    protected static string $resource = CollaborationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
