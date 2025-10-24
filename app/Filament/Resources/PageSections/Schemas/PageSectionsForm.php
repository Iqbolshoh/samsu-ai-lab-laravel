<?php

namespace App\Filament\Resources\PageSections\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class PageSectionsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Page name
                TextInput::make('page')
                    ->label('Page')
                    ->required(),

                // Hero section
                TextInput::make('hero_title_uz')->label('Hero Title (UZ)'),
                TextInput::make('hero_title_en')->label('Hero Title (EN)'),
                Textarea::make('hero_subtitle_uz')->label('Hero Subtitle (UZ)'),
                Textarea::make('hero_subtitle_en')->label('Hero Subtitle (EN)'),

                // CTA section
                TextInput::make('cta_title_uz')->label('CTA Title (UZ)'),
                TextInput::make('cta_title_en')->label('CTA Title (EN)'),
                Textarea::make('cta_subtitle_uz')->label('CTA Subtitle (UZ)'),
                Textarea::make('cta_subtitle_en')->label('CTA Subtitle (EN)'),
                TextInput::make('cta_button_text_uz')->label('CTA Button Text (UZ)'),
                TextInput::make('cta_button_text_en')->label('CTA Button Text (EN)'),
            ]);
    }
}
