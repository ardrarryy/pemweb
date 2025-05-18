<?php

namespace App\Filament\Admin\Resources\ClientResource\Pages;

use App\Filament\Admin\Resources\ClientResource;
use Filament\Actions\Action; // Pastikan Action diimport
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str; // Pastikan Str diimport
use Filament\Notifications\Notification; // Pastikan Notification diimport

class EditClient extends EditRecord
{
    protected static string $resource = ClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('requestApiToken')
                ->label('Request New API Token')
                ->color('secondary')
                ->icon('heroicon-o-arrow-right') // Ganti dengan icon yang sesuai
                ->action(function () {
                    // Generate new API Token
                    $this->record->api_token = Str::random(10);
                    $this->record->save();
                    $this->record->fillForm();

                    // Send notification
                    Notification::make()
                        ->title('New API Token Generated')
                        ->success()
                        ->send();
                })
                ->requiresConfirmation(),  // Menambahkan konfirmasi sebelum aksi dijalankan
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Pastikan data api_token tidak kosong sebelum menyimpan
        if (empty($data['api_token'])) {
            $data['api_token'] = Str::random(10);
        }
        return $data; // Return the modified data
    }
}