<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section as ComponentsSection;
use Filament\Schemas\Schema;

class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            // =========================
            // Titles & Subtitles
            // =========================
            ComponentsSection::make('Titles')
                ->description('Main titles and subtitles for the banner')
                ->schema([
                    TextInput::make('title_uz')
                        ->label('Title (Uzbek)')
                        ->required(),

                    TextInput::make('title_en')
                        ->label('Title (English)')
                        ->required(),

                    Textarea::make('subtitle_uz')
                        ->label('Subtitle (Uzbek)')
                        ->rows(4),

                    Textarea::make('subtitle_en')
                        ->label('Subtitle (English)')
                        ->rows(4),
                ])
                ->columns(2),

            // =========================
            // Buttons
            // =========================
            ComponentsSection::make('Buttons')
                ->description('Button texts and links')
                ->schema([
                    TextInput::make('btn1_text_uz')
                        ->label('Button 1 Text (Uzbek)'),

                    TextInput::make('btn1_text_en')
                        ->label('Button 1 Text (English)'),

                    TextInput::make('btn1_url')
                        ->label('Button 1 URL'),

                    TextInput::make('btn2_text_uz')
                        ->label('Button 2 Text (Uzbek)'),

                    TextInput::make('btn2_text_en')
                        ->label('Button 2 Text (English)'),

                    TextInput::make('btn2_url')
                        ->label('Button 2 URL'),
                ])
                ->columns(2),

            // =========================
            // Image & Status
            // =========================
            ComponentsSection::make('Image and Status')
                ->description('Banner image and active status')
                ->schema([
                    FileUpload::make('image')
                        ->label('Banner Image')
                        ->directory('banners')
                        ->image()
                        ->required(),
                ]),

        ]);
    }
}
