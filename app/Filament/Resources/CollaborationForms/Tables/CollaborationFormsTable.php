<?php

namespace App\Filament\Resources\CollaborationForms\Tables;

use Filament\Actions\Action as ActionsAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Tables;
use Filament\Tables\Table;

class CollaborationFormsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name')
                    ->label('First Name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('last_name')
                    ->label('Last Name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),

                Tables\Columns\TextColumn::make('organization')
                    ->label('Organization')
                    ->toggleable(),

                Tables\Columns\TextColumn::make('collaboration_type')
                    ->label('Type')
                    ->badge(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
            ])
            ->filters([
                // 
            ])
            ->recordActions([
                ViewAction::make(),

                ActionsAction::make('markAsRead')
                    ->label('Read')
                    ->icon('heroicon-o-check-circle')
                    ->tooltip('Mark as Read')
                    ->visible(fn($record) => !$record->is_read)
                    ->action(fn($record) => $record->update(['is_read' => true]))
                    ->color('success'),

                ActionsAction::make('markAsUnread')
                    ->label('Unread')
                    ->icon('heroicon-o-arrow-path')
                    ->tooltip('Mark as Unread')
                    ->visible(fn($record) => $record->is_read)
                    ->action(fn($record) => $record->update(['is_read' => false]))
                    ->color('warning'),

                DeleteAction::make(),
            ])
            ->toolbarActions([
                // 
            ])
            ->defaultSort('created_at', 'desc');
    }
}
