<?php

namespace App\Filament\Admin\Resources\FAQS\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;

class FAQForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),

                Select::make('faq_category_id')
                    ->label('Category')
                    ->relationship('category', 'title') 
                    ->required(),   
            ]);
    }
}
