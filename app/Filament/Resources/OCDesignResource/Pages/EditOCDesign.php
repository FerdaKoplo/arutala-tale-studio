<?php

namespace App\Filament\Resources\OCDesignResource\Pages;

use App\Filament\Resources\OCDesignResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOCDesign extends EditRecord
{
    protected static string $resource = OCDesignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
