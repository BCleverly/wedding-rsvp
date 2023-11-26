<?php

namespace App\Filament\Resources\PointOfInterestResource\Pages;

use App\Filament\Resources\PointOfInterestResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPointOfInterest extends ViewRecord
{
    protected static string $resource = PointOfInterestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
