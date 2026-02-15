<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SaleResource\Pages;
use App\Models\Sale;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SaleResource extends Resource
{
    protected static ?string $model = Sale::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Sale Information')
                    ->schema([
                        Forms\Components\Select::make('user_id')
                            ->label('Cashier')
                            ->relationship('user', 'name')
                            ->default(auth()->id())
                            ->required(),
                        Forms\Components\TextInput::make('total_price')
                            ->required()
                            ->numeric()
                            ->prefix('Rp')
                            ->readOnly()
                            ->dehydrated(),
                        Forms\Components\TextInput::make('cash_paid')
                            ->required()
                            ->numeric()
                            ->prefix('Rp')
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, Forms\Set $set, Forms\Get $get) {
                                $total = (float) $get('total_price');
                                $paid = (float) $state;
                                $set('cash_return', max(0, $paid - $total));
                            }),
                        Forms\Components\TextInput::make('cash_return')
                            ->required()
                            ->numeric()
                            ->prefix('Rp')
                            ->readOnly(),
                    ])->columns(2),

                Forms\Components\Section::make('Items')
                    ->schema([
                        Forms\Components\Repeater::make('details')
                            ->relationship()
                            ->schema([
                                Forms\Components\Select::make('product_id')
                                    ->relationship('product', 'name')
                                    ->required()
                                    ->reactive()
                                    ->afterStateUpdated(function ($state, Forms\Set $set) {
                                        $product = \App\Models\Product::find($state);
                                        $set('unit_price', $product?->price ?? 0);
                                    }),
                                Forms\Components\TextInput::make('quantity')
                                    ->numeric()
                                    ->default(1)
                                    ->required()
                                    ->reactive()
                                    ->afterStateUpdated(fn($state, Forms\Set $set, Forms\Get $get) =>
                                        $set('subtotal', $state * $get('unit_price'))),
                                Forms\Components\TextInput::make('unit_price')
                                    ->numeric()
                                    ->readOnly()
                                    ->prefix('Rp'),
                                Forms\Components\TextInput::make('subtotal')
                                    ->numeric()
                                    ->readOnly()
                                    ->prefix('Rp'),
                            ])
                            ->columns(4)
                            ->live()
                            ->afterStateUpdated(function (Forms\Get $get, Forms\Set $set) {
                                $total = collect($get('details'))->sum('subtotal');
                                $set('total_price', $total);
                            }),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Transaction Date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Cashier')
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_price')
                    ->money('IDR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('cash_paid')
                    ->money('IDR'),
                Tables\Columns\TextColumn::make('cash_return')
                    ->money('IDR'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSales::route('/'),
            'create' => Pages\CreateSale::route('/create'),
            'view' => Pages\ViewSale::route('/{record}'),
        ];
    }
}
