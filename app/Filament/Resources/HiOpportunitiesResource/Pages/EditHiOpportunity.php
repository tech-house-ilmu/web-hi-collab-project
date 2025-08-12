<?php

namespace App\Filament\Resources\HiOpportunityResource\Pages;

use App\Filament\Resources\HiOpportunityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHiOpportunity extends EditRecord
{
    protected static string $resource = HiOpportunityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
