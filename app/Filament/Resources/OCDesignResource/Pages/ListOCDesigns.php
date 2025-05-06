<?php

namespace App\Filament\Resources\OCDesignResource\Pages;

use App\Filament\Resources\OCDesignResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOCDesigns extends ListRecords
{
    protected static string $resource = OCDesignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
