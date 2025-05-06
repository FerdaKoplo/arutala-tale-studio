<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GambarResource\Pages;
use App\Filament\Resources\GambarResource\RelationManagers;
use App\Models\Gambar;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GambarResource extends Resource
{
    protected static ?string $model = Gambar::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('gambar_banner')
                    ->directory('banner')
                    ->image()
                    ->previewable()
                    ->openable(),
                FileUpload::make('gambar_screen')
                    ->directory('screen')
                    ->image()
                    ->previewable()
                    ->openable(),
                FileUpload::make('gambar_layout_oc_design')
                    ->directory('oc_design')
                    ->image()
                    ->previewable()
                    ->openable(),
                FileUpload::make('gambar_layout_vtuber_build')
                    ->directory('vtuber')
                    ->image()
                    ->previewable()
                    ->openable(),
                FileUpload::make('gambar_layout_termofservice')
                    ->directory('termofservice')
                    ->image()
                    ->previewable()
                    ->openable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar_banner')
                    ->disk('public') 
                    ->label('Gambar Banner'),
                Tables\Columns\ImageColumn::make('gambar_screen')
                    ->disk('public') 
                    ->label('Gambar Screen'),
                Tables\Columns\ImageColumn::make('gambar_layout_oc_design')
                    ->disk('public') 
                    ->label('Gambar Layout OC Design'),
                Tables\Columns\ImageColumn::make('gambar_layout_vtuber_build')
                    ->disk('public') 
                    ->label('Gambar Layout Vtuber Build'),
                Tables\Columns\ImageColumn::make('gambar_layout_termofservice')
                    ->disk('public') 
                    ->label('Gambar Layout Term of Service'),
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
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListGambars::route('/'),
            'create' => Pages\CreateGambar::route('/create'),
            'edit' => Pages\EditGambar::route('/{record}/edit'),
        ];
    }
}
