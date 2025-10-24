<?php

namespace App\Filament\Resources\Members\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;

class MemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
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

                Forms\Components\FileUpload::make('image')
                    ->label('Profile Image')
                    ->image()
                    ->directory('members')
                    ->imageEditor()
                    ->imagePreviewHeight('150px')
                    ->maxSize(2048),
            ]);
    }
}
