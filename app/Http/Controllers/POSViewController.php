<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use App\Models\Category;
use Illuminate\Http\Request;

class POSViewController extends Controller
{
    public function landing()
    {
        return view('landing');
    }

    public function dashboard()
    {
        return view('pos.dashboard', [
            'totalSales' => Sale::sum('total_price'),
            'totalProducts' => Product::count(),
            'lowStock' => Product::where('stock', '<', 10)->count(),
            'totalCategories' => Category::count(),
        ]);
    }

    public function terminal()
    {
        return view('pos.terminal', [
            'products' => Product::with('category')->get(),
        ]);
    }

    public function products()
    {
        return view('pos.products', [
            'products' => Product::with('category')->latest()->get(),
        ]);
    }

    public function history()
    {
        return view('pos.history', [
            'sales' => Sale::with(['user', 'details.product'])->latest()->get(),
        ]);
    }

    public function settings()
    {
        return view('pos.settings');
    }
}
