<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VtuberBuildResource\Pages;
use App\Filament\Resources\VtuberBuildResource\RelationManagers;
use App\Models\VtuberBuild;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VtuberBuildResource extends Resource
{
    protected static ?string $model = VtuberBuild::class;

    protected static ?string $navigationGroup = 'Isi Content Layout';
    protected static ?string $navigationIcon = 'heroicon-o-video-camera';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('video_url')
                    ->label('Youtube Video URL')
                    ->helperText('Paste Video Url Disini')
                    ->placeholder('https://www.youtube.com/watch?v=...')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('No'),
                Tables\Columns\TextColumn::make('video_url')
                    ->label('Video Url'),
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
            'index' => Pages\ListVtuberBuilds::route('/'),
            'create' => Pages\CreateVtuberBuild::route('/create'),
            'edit' => Pages\EditVtuberBuild::route('/{record}/edit'),
        ];
    }
}
