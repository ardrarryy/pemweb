<?php

namespace App\Filament\Admin\Resources\CatKakiResource\Pages;

use App\Filament\Admin\Resources\CatKakiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCatKaki extends EditRecord
{
    protected static string $resource = CatKakiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
