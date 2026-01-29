<?php

namespace App\Filament\Resources\Collaborations\Pages;

use App\Filament\Resources\Collaborations\CollaborationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCollaboration extends EditRecord
{
    protected static string $resource = CollaborationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
