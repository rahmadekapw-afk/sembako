<?php

namespace App\Filament\Admin\Resources\StockTransactionResource\Pages;

use App\Filament\Admin\Resources\StockTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStockTransaction extends EditRecord
{
    protected static string $resource = StockTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
