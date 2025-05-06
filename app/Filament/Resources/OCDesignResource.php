<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OCDesignResource\Pages;
use App\Filament\Resources\OCDesignResource\RelationManagers;
use App\Models\OCDesign;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OCDesignResource extends Resource
{

    protected static ?string $navigationGroup = 'Isi Content Layout';

    protected static ?string $model = OCDesign::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('gambar_grid_oc')
                    ->directory('grid_oc')
                    ->openable()
                    ->image()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('No'),
                Tables\Columns\ImageColumn::make('gambar_grid_oc')
                    ->label('Gambar grid oc')
                    ->disk('public'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListOCDesigns::route('/'),
            'create' => Pages\CreateOCDesign::route('/create'),
            'edit' => Pages\EditOCDesign::route('/{record}/edit'),
        ];
    }
}
