<?php

namespace App\Filament\Resources\PageSections\Pages;

use App\Filament\Resources\PageSections\PageSectionsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPageSections extends EditRecord
{
    protected static string $resource = PageSectionsResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
