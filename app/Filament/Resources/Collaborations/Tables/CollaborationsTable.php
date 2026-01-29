<?php

namespace App\Filament\Resources\Collaborations\Tables;

use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class CollaborationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->disk('public')
                    ->circular()
                    ->label('Image'),

                TextColumn::make('title_uz')
                    ->label('Title (UZ)')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('title_en')
                    ->label('Title (EN)')
                    ->searchable(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
