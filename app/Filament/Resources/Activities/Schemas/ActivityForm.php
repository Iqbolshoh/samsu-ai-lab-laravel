<?php

namespace App\Filament\Resources\Activities\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ActivityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title_uz')
                    ->label('Title (UZ)')
                    ->required(),

                TextInput::make('title_en')
                    ->label('Title (EN)')
                    ->required(),

                Textarea::make('description_uz')
                    ->label('Description (UZ)')
                    ->required()
                    ->rows(5),

                Textarea::make('description_en')
                    ->label('Description (EN)')
                    ->required()
                    ->rows(5),
            ]);
    }
}
