<?php

namespace App\Filament\Admin\Resources\CatKakiResource\Pages;

use App\Filament\Admin\Resources\CatKakiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCatKakis extends ListRecords
{
    protected static string $resource = CatKakiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
