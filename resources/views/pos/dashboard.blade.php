@extends('pos.layout', ['title' => 'Beranda'])

@section('content')
    <div class="space-y-6 lg:space-y-10">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0">
            <div>
                <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight text-slate-900 mb-1">Dashboard <span
                        class="text-blue-600">Toko</span></h2>
                <p class="text-slate-500 text-sm lg:text-base font-medium">Gambaran performa harian dan kesehatan bisnis
                    Anda.</p>
            </div>
            <div
                class="flex items-center space-x-3 bg-white px-4 py-2 lg:px-5 lg:py-2.5 rounded-2xl border border-slate-200 shadow-sm w-full md:w-auto justify-center">
                <i class="far fa-calendar-alt text-blue-600"></i>
                <span class="text-sm font-bold text-slate-600">{{ now()->translatedFormat('D, d M Y') }}</span>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
            <div
                class="bg-white p-6 lg:p-8 rounded-[1.5rem] lg:rounded-[2rem] border border-slate-200 shadow-sm relative overflow-hidden group hover:shadow-md transition-all duration-300">
                <div
                    class="absolute -right-6 -bottom-6 text-7xl lg:text-8xl text-blue-600/5 rotate-12 group-hover:rotate-0 transition-transform duration-700">
                    <i class="fas fa-coins"></i>
                </div>
                <div
                    class="w-10 h-10 lg:w-12 lg:h-12 bg-blue-50 rounded-xl lg:rounded-2xl flex items-center justify-center text-blue-600 mb-4 lg:mb-6">
                    <i class="fas fa-wallet text-lg lg:text-xl"></i>
                </div>
                <p class="text-slate-500 text-[10px] lg:text-xs font-bold uppercase tracking-widest">Total Pendapatan</p>
                <h3 class="text-2xl lg:text-3xl font-black mt-2 text-slate-900">Rp
                    {{ number_format($totalSales, 0, ',', '.') }}
                </h3>
                <div class="mt-3 lg:mt-4 flex items-center text-[10px] lg:text-xs text-emerald-600 font-bold">
                    <i class="fas fa-arrow-up mr-1 text-[8px] lg:text-[10px]"></i> Naik 15%
                </div>
            </div>

            <div
                class="bg-white p-6 lg:p-8 rounded-[1.5rem] lg:rounded-[2rem] border border-slate-200 shadow-sm relative overflow-hidden group hover:shadow-md transition-all duration-300">
                <div
                    class="absolute -right-6 -bottom-6 text-7xl lg:text-8xl text-indigo-600/5 rotate-12 group-hover:rotate-0 transition-transform duration-700">
                    <i class="fas fa-box"></i>
                </div>
                <div
                    class="w-10 h-10 lg:w-12 lg:h-12 bg-indigo-50 rounded-xl lg:rounded-2xl flex items-center justify-center text-indigo-600 mb-4 lg:mb-6">
                    <i class="fas fa-boxes text-lg lg:text-xl"></i>
                </div>
                <p class="text-slate-500 text-[10px] lg:text-xs font-bold uppercase tracking-widest">Total Produk</p>
                <h3 class="text-2xl lg:text-3xl font-black mt-2 text-slate-900">{{ $totalProducts }}</h3>
                <p class="mt-3 lg:mt-4 text-[9px] lg:text-[10px] text-slate-400 font-bold uppercase tracking-wider">SKU
                    Terdaftar</p>
            </div>

            <div
                class="bg-white p-6 lg:p-8 rounded-[1.5rem] lg:rounded-[2rem] border border-red-100 shadow-sm relative overflow-hidden group hover:shadow-md transition-all duration-300">
                <div
                    class="absolute -right-6 -bottom-6 text-7xl lg:text-8xl text-red-600/5 rotate-12 group-hover:rotate-0 transition-transform duration-700">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <div
                    class="w-10 h-10 lg:w-12 lg:h-12 bg-red-50 rounded-xl lg:rounded-2xl flex items-center justify-center text-red-600 mb-4 lg:mb-6">
                    <i class="fas fa-layer-group text-lg lg:text-xl"></i>
                </div>
                <p class="text-slate-500 text-[10px] lg:text-xs font-bold uppercase tracking-widest">Stok Rendah</p>
                <h3 class="text-2xl lg:text-3xl font-black mt-2 text-red-600">{{ $lowStock }}</h3>
                <div
                    class="mt-3 lg:mt-4 flex items-center text-[9px] lg:text-[10px] text-slate-400 font-bold uppercase tracking-wider">
                    <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span> Perlu Restock
                </div>
            </div>

            <div
                class="bg-white p-6 lg:p-8 rounded-[1.5rem] lg:rounded-[2rem] border border-slate-200 shadow-sm relative overflow-hidden group hover:shadow-md transition-all duration-300">
                <div
                    class="absolute -right-6 -bottom-6 text-7xl lg:text-8xl text-emerald-600/5 rotate-12 group-hover:rotate-0 transition-transform duration-700">
                    <i class="fas fa-tags"></i>
                </div>
                <div
                    class="w-10 h-10 lg:w-12 lg:h-12 bg-emerald-50 rounded-xl lg:rounded-2xl flex items-center justify-center text-emerald-600 mb-4 lg:mb-6">
                    <i class="fas fa-tag text-lg lg:text-xl"></i>
                </div>
                <p class="text-slate-500 text-[10px] lg:text-xs font-bold uppercase tracking-widest">Kategori</p>
                <h3 class="text-2xl lg:text-3xl font-black mt-2 text-slate-900">{{ $totalCategories }}</h3>
                <p class="mt-3 lg:mt-4 text-[9px] lg:text-[10px] text-slate-400 font-bold uppercase tracking-wider">
                    Departemen Aktif</p>
            </div>
        </div>

        <!-- Charts & Analytics -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8">
            <div
                class="bg-white p-6 lg:p-10 rounded-[1.5rem] lg:rounded-[2.5rem] border border-slate-200 shadow-sm flex flex-col justify-center relative group min-h-[300px] lg:min-h-[400px]">
                <div class="text-center">
                    <div
                        class="w-16 h-16 lg:w-20 lg:h-20 bg-blue-50 rounded-2xl lg:rounded-[2rem] flex items-center justify-center text-blue-600 mx-auto mb-4 lg:mb-6 text-2xl lg:text-3xl shadow-sm">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4 class="font-black text-xl lg:text-2xl text-slate-900 mb-2">Analisis Penjualan</h4>
                    <p class="text-slate-500 text-sm lg:text-base max-w-xs mx-auto leading-relaxed">Grafik pertumbuhan dan
                        tren penjualan sedang disiapkan.</p>
                </div>
            </div>

            <div
                class="bg-white p-6 lg:p-10 rounded-[1.5rem] lg:rounded-[2.5rem] border border-slate-200 shadow-sm flex flex-col justify-center relative group min-h-[300px] lg:min-h-[400px]">
                <div class="text-center">
                    <div
                        class="w-16 h-16 lg:w-20 lg:h-20 bg-emerald-50 rounded-2xl lg:rounded-[2rem] flex items-center justify-center text-emerald-600 mx-auto mb-4 lg:mb-6 text-2xl lg:text-3xl shadow-sm">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h4 class="font-black text-xl lg:text-2xl text-slate-900 mb-2">Produk Terlaris</h4>
                    <p class="text-slate-500 text-sm lg:text-base max-w-xs mx-auto leading-relaxed">Mengidentifikasi barang
                        dengan perputaran stok tercepat secara otomatis.</p>
                </div>
            </div>
        </div>
    </div>
@endsection