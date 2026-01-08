<?php

namespace App\Filament\Admin\Resources\News\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),

                FileUpload::make('image')
                    ->image()
                    ->directory('news')
                    ->imagePreviewHeight(200)
                    ->disk('public')
                    ->required(),

                RichEditor::make('content') /* RichEditor => Gives extra edit options in the content section */
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
