<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),


                Forms\Components\ToggleButtons::make('payment_method')
                    ->options([
                        "stripe" => "Stripe",

                    ])->default('stripe')->inline(),


                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),

                Forms\Components\ToggleButtons::make('status')
                    ->options([
                        "delivered" => "Delivered",
                        "pending" => "Pending",
                        "canceled" => "Canceled"
                    ])->colors([
                            "delivered" => "success",
                            "pending" => "warning",
                            "canceled" => "danger"
                        ])->default('new')->inline(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
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
                Tables\Columns\TextColumn::make('user.name')
                    ->alignCenter()
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state):string => match($state) {
                        "delivered" => "success",
                        "pending" => "warning",
                        "canceled" => "danger"
                    })->icon(fn (string $state):string => match($state) {
                        "delivered" => "heroicon-m-sparkles",
                        "pending" => "heroicon-m-arrow-path",
                        "canceled" => "heroicon-m-x-circle"
                    })
                ->alignCenter(),

                Tables\Columns\TextColumn::make('payment_method')->alignCenter(),
                Tables\Columns\TextColumn::make('email')->alignCenter()
                    ->searchable(),
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
