<?php

namespace App\Filament\Admin\Resources\Categories\Pages;

use App\Filament\Admin\Resources\Categories\CategoriesResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCategories extends CreateRecord
{
    protected static string $resource = CategoriesResource::class;
}
