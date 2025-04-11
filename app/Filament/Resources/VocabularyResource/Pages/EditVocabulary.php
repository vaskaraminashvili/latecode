<?php

namespace App\Filament\Resources\VocabularyResource\Pages;

use App\Filament\Resources\VocabularyResource;
use Filament\Actions;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditVocabulary extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = VocabularyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
