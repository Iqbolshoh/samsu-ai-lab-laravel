<?php

namespace App\Filament\Resources\CollaborationForms\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;

class CollaborationFormForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\TextInput::make('first_name')
                    ->label('First Name')
                    ->required()
                    ->maxLength(100),

                Forms\Components\TextInput::make('last_name')
                    ->label('Last Name')
                    ->required()
                    ->maxLength(100),

                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->maxLength(150),

                Forms\Components\TextInput::make('organization')
                    ->label('Organization')
                    ->maxLength(150),

                Forms\Components\TextInput::make('collaboration_type')
                    ->label('Collaboration Type')
                    ->required(),

                Forms\Components\Textarea::make('message')
                    ->label('Message')
                    ->required()
                    ->rows(5)
                    ->maxLength(2000),
            ]);
    }
}
