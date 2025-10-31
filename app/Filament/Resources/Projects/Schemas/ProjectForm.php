<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;
use Filament\Forms;
use App\Models\ProjectCategory;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Grid::make(2)
                    ->schema([
                        Forms\Components\TextInput::make('title_uz')
                            ->label('Title (Uzbek)')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('title_en')
                            ->label('Title (English)')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\Textarea::make('content_uz')
                            ->label('Content (Uzbek)')
                            ->rows(5)
                            ->required(),

                        Forms\Components\Textarea::make('content_en')
                            ->label('Content (English)')
                            ->rows(5)
                            ->required(),
                    ]),

                Forms\Components\FileUpload::make('image')
                    ->label('Project Image')
                    ->image()
                    ->directory('projects/images')
                    ->maxSize(5120),

                Forms\Components\TextInput::make('url')
                    ->label('Project URL')
                    ->url()
                    ->nullable(),

                Forms\Components\Select::make('project_category_id')
                    ->label('Category')
                    ->relationship('category', 'name_en')
                    ->required()
                    ->searchable()
                    ->preload(),
            ]);
    }
}
