<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CatKakiResource\Pages;
use App\Filament\Admin\Resources\CatKakiResource\RelationManagers;
use App\Models\CatKaki;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CatKakiResource extends Resource
{
    protected static ?string $model = CatKaki::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListCatKakis::route('/'),
            'create' => Pages\CreateCatKaki::route('/create'),
            'edit' => Pages\EditCatKaki::route('/{record}/edit'),
        ];
    }
}
