<?php

namespace App\Filament\Resources\HiOpportunityResource\Pages;

use App\Filament\Resources\HiOpportunityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHiOpportunity extends ListRecords
{
    protected static string $resource = HiOpportunityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
