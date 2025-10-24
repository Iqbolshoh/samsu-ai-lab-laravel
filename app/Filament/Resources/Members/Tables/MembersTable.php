<?php

namespace App\Filament\Resources\Members\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;

class MembersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Photo')
                    ->circular()
                    ->height(60)
                    ->width(60),

                Tables\Columns\TextColumn::make('name_en')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('role_en')
                    ->label('Role')
                    ->sortable()
                    ->limit(25),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y')
                    ->label('Created'),
            ])
            ->filters([])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
