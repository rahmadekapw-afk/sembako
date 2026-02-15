<?php

namespace App\Observers;

use App\Models\Sale;

class SaleObserver
{
    /**
     * Handle the Sale "created" event.
     */
    public function created(Sale $sale): void
    {
        foreach ($sale->details as $detail) {
            $product = $detail->product;
            $product->decrement('stock', $detail->quantity);
        }
    }
}
