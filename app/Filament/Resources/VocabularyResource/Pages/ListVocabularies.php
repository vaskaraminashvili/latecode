<?php

namespace App\Filament\Resources\VocabularyResource\Pages;

use App\Filament\Resources\VocabularyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVocabularies extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = VocabularyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
