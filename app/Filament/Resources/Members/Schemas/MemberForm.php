<?php

namespace App\Filament\Resources\Members\Schemas;

use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;
use Filament\Forms;

class MemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Grid::make(2)
                    ->schema([
                        Forms\Components\TextInput::make('name_uz')
                            ->label('Name (Uzbek)')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('name_en')
                            ->label('Name (English)')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('role_uz')
                            ->label('Role (Uzbek)')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('role_en')
                            ->label('Role (English)')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\Textarea::make('bio_uz')
                            ->label('Bio (Uzbek)')
                            ->rows(4)
                            ->required(),

                        Forms\Components\Textarea::make('bio_en')
                            ->label('Bio (English)')
                            ->rows(4)
                            ->required(),
                    ]),

                Forms\Components\FileUpload::make('image')
                    ->label('Profile Image')
                    ->image()
                    ->directory('members')
                    ->imageEditor()
                    ->imagePreviewHeight('150px')
                    ->maxSize(5120),
            ]);
    }
}
