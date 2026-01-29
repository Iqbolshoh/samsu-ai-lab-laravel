<?php

namespace App\Filament\Resources\Collaborations\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class CollaborationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title_uz')
                    ->label('Title (UZ)')
                    ->required()
                    ->maxLength(255),

                TextInput::make('title_en')
                    ->label('Title (EN)')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->directory('collaborations')
                    ->image()
                    ->imageEditor(),
            ]);
    }
}
