<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>{{ $title ?? 'Sembako POS' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap');

        body {
            font-family: 'Outfit', sans-serif;
            -webkit-tap-highlight-color: transparent;
        }

        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.07);
        }

        .active-nav {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: white;
            box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.2);
        }

        .sidebar-light {
            background: #ffffff;
            border-right: 1px solid #e2e8f0;
        }

        @media (max-width: 1024px) {
            .main-content {
                margin-left: 0 !important;
                padding-bottom: 80px !important;
            }
        }
    </style>
</head>

<body class="bg-[#f8fafc] text-slate-700 min-h-screen flex selection:bg-blue-100 selection:text-blue-700">

    <!-- Desktop Sidebar -->
    <aside class="hidden lg:flex w-72 sidebar-light flex-col fixed h-full z-50">
        <div class="p-8">
            <div class="flex items-center space-x-3 group cursor-pointer">
                <div
                    class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-300 shadow-lg shadow-blue-500/20">
                    <i class="fas fa-store text-white"></i>
                </div>
                <h1 class="text-xl font-extrabold tracking-tight text-slate-900 uppercase">Sembako <span
                        class="text-blue-600">Pro</span></h1>
            </div>
        </div>

        <nav class="flex-1 px-6 space-y-2 mt-4">
            <p class="text-[10px] uppercase tracking-widest text-slate-400 font-bold mb-4 ml-2">Menu Utama</p>
            <a href="{{ route('pos.dashboard') }}"
                class="flex items-center space-x-3 p-3.5 rounded-2xl transition-all duration-300 {{ request()->routeIs('pos.dashboard') ? 'active-nav' : 'text-slate-500 hover:bg-slate-50 hover:text-blue-600' }}">
                <i class="fas fa-th-large text-lg"></i>
                <span class="font-semibold">Beranda</span>
            </a>
            <a href="{{ route('pos.terminal') }}"
                class="flex items-center space-x-3 p-3.5 rounded-2xl transition-all duration-300 {{ request()->routeIs('pos.terminal') ? 'active-nav' : 'text-slate-500 hover:bg-slate-50 hover:text-blue-600' }}">
                <i class="fas fa-cash-register text-lg"></i>
                <span class="font-semibold">Kasir (POS)</span>
            </a>
            <a href="{{ route('pos.products') }}"
                class="flex items-center space-x-3 p-3.5 rounded-2xl transition-all duration-300 {{ request()->routeIs('pos.products') ? 'active-nav' : 'text-slate-500 hover:bg-slate-50 hover:text-blue-600' }}">
                <i class="fas fa-boxes text-lg"></i>
                <span class="font-semibold">Stok Barang</span>
            </a>
            <a href="{{ route('pos.history') }}"
                class="flex items-center space-x-3 p-3.5 rounded-2xl transition-all duration-300 {{ request()->routeIs('pos.history') ? 'active-nav' : 'text-slate-500 hover:bg-slate-50 hover:text-blue-600' }}">
                <i class="fas fa-file-invoice text-lg"></i>
                <span class="font-semibold">Riwayat Penjualan</span>
            </a>

            <div class="pt-8 mb-4">
                <p class="text-[10px] uppercase tracking-widest text-slate-400 font-bold mb-4 ml-2">Sistem</p>
                <a href="{{ route('pos.settings') }}"
                    class="flex items-center space-x-3 p-3.5 rounded-2xl transition-all duration-300 {{ request()->routeIs('pos.settings') ? 'active-nav' : 'text-slate-500 hover:bg-slate-50 hover:text-blue-600' }}">
                    <i class="fas fa-cog text-lg"></i>
                    <span class="font-semibold">Pengaturan</span>
                </a>
                <a href="/admin"
                    class="flex items-center space-x-3 p-3.5 rounded-2xl text-slate-500 hover:bg-slate-50 hover:text-blue-600 transition-all duration-300">
                    <i class="fas fa-user-shield text-lg"></i>
                    <span class="font-semibold">Panel Admin</span>
                </a>
            </div>
        </nav>

        <div class="p-6">
            <div class="bg-slate-50 p-4 rounded-3xl border border-slate-200/60">
                <div class="flex items-center space-x-3">
                    <div
                        class="w-11 h-11 rounded-2xl bg-blue-100 flex items-center justify-center font-bold text-blue-600 border border-blue-200">
                        A</div>
                    <div>
                        <p class="text-sm font-bold text-slate-900 leading-tight">Admin Toko</p>
                        <div
                            class="flex items-center text-[10px] text-emerald-600 mt-0.5 font-bold uppercase tracking-wider">
                            <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full mr-1.5"></span>
                            Aktif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Mobile Bottom Navigation -->
    <nav
        class="lg:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-slate-200 px-6 py-3 flex justify-between items-center z-[100] shadow-2xl">
        <a href="{{ route('pos.dashboard') }}"
            class="flex flex-col items-center space-y-1 {{ request()->routeIs('pos.dashboard') ? 'text-blue-600' : 'text-slate-400' }}">
            <i class="fas fa-th-large text-xl"></i>
            <span class="text-[10px] font-bold">Beranda</span>
        </a>
        <a href="{{ route('pos.terminal') }}"
            class="flex flex-col items-center space-y-1 {{ request()->routeIs('pos.terminal') ? 'text-blue-600' : 'text-slate-400' }}">
            <i class="fas fa-cash-register text-xl"></i>
            <span class="text-[10px] font-bold">Kasir</span>
        </a>
        <a href="{{ route('pos.products') }}"
            class="flex flex-col items-center space-y-1 {{ request()->routeIs('pos.products') ? 'text-blue-600' : 'text-slate-400' }}">
            <i class="fas fa-boxes text-xl"></i>
            <span class="text-[10px] font-bold">Stok</span>
        </a>
        <a href="{{ route('pos.history') }}"
            class="flex flex-col items-center space-y-1 {{ request()->routeIs('pos.history') ? 'text-blue-600' : 'text-slate-400' }}">
            <i class="fas fa-file-invoice text-xl"></i>
            <span class="text-[10px] font-bold">Riwayat</span>
        </a>
        <a href="{{ route('pos.settings') }}"
            class="flex flex-col items-center space-y-1 {{ request()->routeIs('pos.settings') ? 'text-blue-600' : 'text-slate-400' }}">
            <i class="fas fa-cog text-xl"></i>
            <span class="text-[10px] font-bold">Seting</span>
        </a>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 lg:ml-72 p-4 md:p-10 main-content">
        @yield('content')
    </main>

</body>

</html>

@php
    if (!function_exists('nav_link')) {
        // This is a hack because I cannot easily create a component file in one go with layout update
    }
@endphp

@unless(isset($is_component))
    {{-- Inline component replacement for clarity --}}
@endunless