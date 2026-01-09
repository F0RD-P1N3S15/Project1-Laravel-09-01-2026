<?php

namespace App\Filament\Admin\Resources\Forms;

use App\Filament\Admin\Resources\Forms\Pages\CreateForms;
use App\Filament\Admin\Resources\Forms\Pages\EditForms;
use App\Filament\Admin\Resources\Forms\Pages\ListForms;
use App\Filament\Admin\Resources\Forms\Schemas\FormsForm;
use App\Filament\Admin\Resources\Forms\Tables\FormsTable;
use App\Models\Forms;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FormsResource extends Resource
{
    protected static ?string $model = Forms::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'email';

    public static function form(Schema $schema): Schema
    {
        return FormsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FormsTable::configure($table);
    }

    public static function canCreate(): bool
    {
        return false; // Admin is not allowed to create these
    }

    public static function canEdit($record = null): bool
    {
        return false; // Admin is not allowed to edit these
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
            'index' => ListForms::route('/'),
            'create' => CreateForms::route('/create'),
            'edit' => EditForms::route('/{record}/edit'),
        ];
    }
}
