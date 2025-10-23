<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                \Filament\Schemas\Components\Grid::make(2)
                    ->schema([
                        TextInput::make('title_uz')
                            ->label('Title (UZ)')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('title_en')
                            ->label('Title (EN)')
                            ->required()
                            ->maxLength(255),
                    ]),

                \Filament\Schemas\Components\Grid::make(2)
                    ->schema([
                        Textarea::make('content_uz')
                            ->label('Content (UZ)')
                            ->rows(6)
                            ->required(),

                        Textarea::make('content_en')
                            ->label('Content (EN)')
                            ->rows(6)
                            ->required(),
                    ]),

                FileUpload::make('image')
                    ->label('Image')
                    ->directory('news')
                    ->image()
                    ->imageEditor()
                    ->maxSize(2048),

                TextInput::make('url')
                    ->label('Custom URL (optional)')
                    ->placeholder('example: /news/my-latest-article')
                    ->nullable(),
            ]);
    }
}
