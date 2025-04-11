<?php

namespace App\Filament\Resources\VocabularyResource\Pages;

use App\Filament\Resources\VocabularyResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVocabulary extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = VocabularyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
