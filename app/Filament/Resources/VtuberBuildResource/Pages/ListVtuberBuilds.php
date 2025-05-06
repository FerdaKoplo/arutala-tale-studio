<?php

namespace App\Filament\Resources\VtuberBuildResource\Pages;

use App\Filament\Resources\VtuberBuildResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVtuberBuilds extends ListRecords
{
    protected static string $resource = VtuberBuildResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
