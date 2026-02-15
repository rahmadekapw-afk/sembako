<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\StockTransactionResource\Pages;
use App\Models\StockTransaction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class StockTransactionResource extends Resource
{
    protected static ?string $model = StockTransaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrows-right-left';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('product_id')
                    ->relationship('product', 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
                Forms\Components\Select::make('supplier_id')
                    ->relationship('supplier', 'name')
                    ->searchable()
                    ->preload(),
                Forms\Components\Select::make('type')
                    ->options([
                        'in' => 'Stock In',
                        'out' => 'Stock Out',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('quantity')
                    ->required()
                    ->numeric()
                    ->minValue(1),
                Forms\Components\TextInput::make('note')
                    ->maxLength(255)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('product.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('supplier.name')
                    ->sortable(),
                Tables\Columns\BadgeColumn::make('type')
                    ->colors([
                        'success' => 'in',
                        'danger' => 'out',
                    ]),
                Tables\Columns\TextColumn::make('quantity')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([])
            ->actions([
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
            'index' => Pages\ListStockTransactions::route('/'),
            'create' => Pages\CreateStockTransaction::route('/create'),
        ];
    }
}
