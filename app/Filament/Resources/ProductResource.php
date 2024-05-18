<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Webbingbrasil\FilamentAdvancedFilter\Filters\DateFilter;
use Webbingbrasil\FilamentAdvancedFilter\Filters\NumberFilter;
use Webbingbrasil\FilamentAdvancedFilter\Filters\TextFilter;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\TextInput::make('quantity')
                    ->required()
                    ->numeric(),

                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpan(3)
                    ->maxLength(500),

                Forms\Components\TextInput::make('dimensions')
                    ->required()
                    ->maxLength(255),
                Forms\Components\ColorPicker::make('color')
                    ->required(),
                Forms\Components\TextInput::make('discount')
                    ->numeric(),
                Forms\Components\TextInput::make('category')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),

                FileUpload::make('attachment')
                    ->columnSpan(3)
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('attachment')
                    ->alignCenter()
                    ->rounded()
                    ->searchable(),

                Tables\Columns\TextColumn::make('name')
                    ->alignCenter()
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->alignCenter()
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('quantity')
                    ->alignCenter()
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->alignCenter()
                    ->searchable(),

                Tables\Columns\TextColumn::make('dimensions')
                    ->alignCenter()
                    ->searchable(),
                Tables\Columns\ColorColumn::make('color')
                    ->alignCenter()
                    ->searchable(),

                Tables\Columns\TextColumn::make('discount')
                    ->alignCenter()
                    ->numeric()
                    ->sortable()
                    ->default("0 %"),

                Tables\Columns\TextColumn::make('category')
                    ->alignCenter()
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->alignCenter()
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->alignCenter()
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TextFilter::make('name'),
                TextFilter::make('category'),
                TextFilter::make('dimensions'),
                TextFilter::make('discount'),
                DateFilter::make('created_at'),
                DateFilter::make('updated_at'),
                NumberFilter::make('quantity'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
