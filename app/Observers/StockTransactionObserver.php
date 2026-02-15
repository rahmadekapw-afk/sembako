<?php

namespace App\Observers;

use App\Models\StockTransaction;

class StockTransactionObserver
{
    /**
     * Handle the StockTransaction "created" event.
     */
    public function created(StockTransaction $stockTransaction): void
    {
        $product = $stockTransaction->product;
        if ($stockTransaction->type === 'in') {
            $product->increment('stock', $stockTransaction->quantity);
        } else {
            $product->decrement('stock', $stockTransaction->quantity);
        }
    }

    /**
     * Handle the StockTransaction "updated" event.
     */
    public function updated(StockTransaction $stockTransaction): void
    {
        //
    }

    /**
     * Handle the StockTransaction "deleted" event.
     */
    public function deleted(StockTransaction $stockTransaction): void
    {
        //
    }

    /**
     * Handle the StockTransaction "restored" event.
     */
    public function restored(StockTransaction $stockTransaction): void
    {
        //
    }

    /**
     * Handle the StockTransaction "force deleted" event.
     */
    public function forceDeleted(StockTransaction $stockTransaction): void
    {
        //
    }
}
