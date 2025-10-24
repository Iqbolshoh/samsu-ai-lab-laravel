<?php

namespace App\Filament\Resources\Abouts\Schemas;

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

                RichEditor::make('content_uz')
                    ->label('Content (UZ)')
                    ->required(),

                RichEditor::make('content_en')
                    ->label('Content (EN)')
                    ->required(),
            ]);
    }
}
