<?php

namespace App\Filament\Admin\Resources\Forms\Pages;

use App\Filament\Admin\Resources\Forms\FormsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditForms extends EditRecord
{
    protected static string $resource = FormsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
