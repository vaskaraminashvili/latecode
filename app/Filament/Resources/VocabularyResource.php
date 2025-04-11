<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VocabularyResource\Pages;
use App\Models\CodeLanguage;
use App\Models\Vocabulary;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Wiebenieuwenhuis\FilamentCodeEditor\Components\CodeEditor;

class VocabularyResource extends Resource
{
    use Translatable;

    protected static ?string $model = Vocabulary::class;

    protected static ?string $slug = 'vocabularies';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('term'),
                TextInput::make('title')
                    ->required(),
                RichEditor::make('definition')
                    ->columnSpanFull(),
                Repeater::make('example')
                    ->label('კოდის ბლოკი')
                    ->schema([
                        Select::make('language')
                            ->options(
                                CodeLanguage::where('status', 1)
                                    ->pluck('name', 'name')
                            )
                            ->searchable()
                            ->preload(),
                        CodeEditor::make('content'),
                    ])
                    ->columnSpanFull()
                    ->collapsible(),
                RichEditor::make('notes')
                    ->columnSpanFull(),
                Toggle::make('status')
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('term'),

                TextColumn::make('category'),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                ToggleColumn::make('status'),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
                RestoreAction::make(),
                ForceDeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListVocabularies::route('/'),
            'create' => Pages\CreateVocabulary::route('/create'),
            'edit'   => Pages\EditVocabulary::route('/{record}/edit'),
        ];
    }

}
