<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ContactForm
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
                    ->nullable()
                    ->required(),

                TextInput::make('address_uz')
                    ->label('Address (UZ)')
                    ->nullable()
                    ->required(),

                TextInput::make('address_en')
                    ->label('Address (EN)')
                    ->nullable()
                    ->required(),

                TextInput::make('email_1')
                    ->label('Email 1')
                    ->email()
                    ->nullable()
                    ->required(),

                TextInput::make('email_2')
                    ->label('Email 2')
                    ->email()
                    ->nullable(),

                TextInput::make('phone_1')
                    ->label('Phone 1')
                    ->tel()
                    ->nullable()
                    ->required(),

                TextInput::make('phone_2')
                    ->label('Phone 2')
                    ->tel()
                    ->nullable(),

                Textarea::make('map_iframe')
                    ->label('Map Iframe')
                    ->rows(5)
                    ->columnSpanFull()
                    ->nullable()
                    ->required(),

                TextInput::make('facebook')
                    ->label('Facebook Link')
                    ->url()
                    ->placeholder('https://facebook.com/...'),

                TextInput::make('instagram')
                    ->label('Instagram Link')
                    ->url()
                    ->placeholder('https://instagram.com/...'),

                TextInput::make('telegram')
                    ->label('Telegram Link')
                    ->url()
                    ->placeholder('https://t.me/...'),

                TextInput::make('youtube')
                    ->label('YouTube Link')
                    ->url()
                    ->placeholder('https://youtube.com/...'),
            ]);
    }
}
