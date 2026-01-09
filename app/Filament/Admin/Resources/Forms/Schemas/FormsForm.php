<?php

namespace App\Filament\Admin\Resources\Forms\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;

class FormsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),

                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),

                RichEditor::make('content') /* RichEditor => Gives extra edit options in the content section */
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
