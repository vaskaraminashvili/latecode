<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ItemResource\Pages;
use App\Models\Category;
use App\Models\CodeLanguage;
use App\Models\Item;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ItemResource extends Resource
{
    use Translatable;

    protected static ?string $model = Item::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Select::make('category_id')
                            ->searchable()
                            ->label('Category')
                            ->options(
                                Category::where('status', 1)
                                    ->get()
                                    ->pluck('title', 'id')
                                    ->map(fn($title, $id) => __($title))
                            ),
                        TextInput::make('title')
                            ->required(),
                        TextInput::make('slug'),
                        RichEditor::make('description')
                            ->helperText('where you want code to appear add block @@code@@'),
                        Repeater::make('code')
                            ->label('კოდის ბლოკი')
                            ->schema([
                                Select::make('language')
                                    ->options(
                                        CodeLanguage::where('status', 1)
                                            ->pluck('name', 'name')
                                    )
                                    ->searchable()
                                    ->preload(),
                                TextArea::make('content')
                                    ->rows(5),
                            ])
                            ->collapsible()
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('slug')
                    ->url(function ($state) {
                        return route('item.show', ['slug' => $state]);
                    })
                    ->openUrlInNewTab()
                ,
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('id', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListItems::route('/'),
            'create' => Pages\CreateItem::route('/create'),
            'edit'   => Pages\EditItem::route('/{record}/edit'),
        ];
    }
}
