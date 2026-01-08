<?php

namespace App\Filament\Admin\Resources\FAQS\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class FAQForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),

                RichEditor::make('content') /* RichEditor => Gives extra edit options in the content section */
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
