<?php

namespace App\Filament\Resources\ProjectCategories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProjectCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name_uz')
                    ->label('Name (Uzbek)')
                    ->required()
                    ->maxLength(255),
                TextInput::make('name_en')
                    ->label('Name (English)')
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
