<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms;
use Filament\Forms\Components\RichEditor;
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

                FileUpload::make('image')
                    ->label('Image')
                    ->directory('news')
                    ->image()
                    ->imageEditor()
                    ->maxSize(5120),

                RichEditor::make('content_uz')
                    ->label('Content (UZ)')
                    ->required(),

                RichEditor::make('content_en')
                    ->label('Content (EN)')
                    ->required()
            ]);
    }
}
