<?php

namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class AboutForm
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

                Textarea::make('content_uz')
                    ->rows(11)
                    ->label('Content (UZ)')
                    ->required(),

                Textarea::make('content_en')
                    ->rows(11)
                    ->label('Content (EN)')
                    ->required(),
            ]);
    }
}
