<?php

namespace App\Filament\Resources\CollaborationForms;

use App\Filament\Resources\CollaborationForms\Pages\CreateCollaborationForm;
use App\Filament\Resources\CollaborationForms\Pages\EditCollaborationForm;
use App\Filament\Resources\CollaborationForms\Pages\ListCollaborationForms;
use App\Filament\Resources\CollaborationForms\Schemas\CollaborationFormForm;
use App\Filament\Resources\CollaborationForms\Tables\CollaborationFormsTable;
use App\Models\CollaborationForm;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CollaborationFormResource extends Resource
{
    protected static ?string $model = CollaborationForm::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return CollaborationFormForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CollaborationFormsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCollaborationForms::route('/'),
        ];
    }
}
