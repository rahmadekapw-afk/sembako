<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Product;
use App\Models\Sale;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Carbon\Carbon;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $todaySales = Sale::whereDate('created_at', Carbon::today())->sum('total_price');
        $lowStockCount = Product::where('stock', '<', 10)->count();
        $totalProducts = Product::count();

        return [
            Stat::make('Today\'s Sales', 'Rp ' . number_format($todaySales, 0, ',', '.'))
                ->description('Total income today')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make('Total Products', $totalProducts)
                ->description('Active SKU in inventory')
                ->descriptionIcon('heroicon-m-shopping-bag'),
            Stat::make('Low Stock Alert', $lowStockCount)
                ->description('Products with stock < 10')
                ->descriptionIcon('heroicon-m-exclamation-triangle')
                ->color($lowStockCount > 0 ? 'danger' : 'success'),
        ];
    }
}
