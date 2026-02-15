@extends('pos.layout', ['title' => 'Terminal Kasir'])

@section('content')
    <div class="flex flex-col lg:flex-row gap-6 h-auto lg:h-[calc(100vh-120px)] lg:overflow-hidden">
        <!-- Product Grid Section -->
        <div class="flex-1 flex flex-col space-y-6 lg:space-y-8 lg:overflow-hidden">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-extrabold tracking-tight text-slate-900 mb-0.5">Kasir <span
                            class="text-blue-600">Terminal</span></h2>
                    <p class="text-slate-500 text-xs lg:text-sm font-medium">Proses pesanan dengan cepat dan akurat.</p>
                </div>
                <div class="relative w-full md:w-80 group">
                    <i
                        class="fas fa-search absolute left-5 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-blue-600 transition-colors"></i>
                    <input type="text" placeholder="Scan SKU atau Cari..."
                        class="w-full bg-white border border-slate-200 rounded-2xl py-3 lg:py-3.5 pl-14 pr-6 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 outline-none transition-all duration-300 font-medium placeholder:text-slate-400 shadow-sm">
                </div>
            </div>

            <div
                class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-6 overflow-y-auto pb-6 pr-1 custom-scrollbar">
                @foreach($products as $product)
                    <div
                        class="bg-white p-3 lg:p-5 rounded-[1.25rem] lg:rounded-[2rem] group cursor-pointer border border-slate-200 hover:border-blue-500/40 hover:shadow-xl hover:shadow-blue-500/5 transition-all duration-500 relative flex flex-col">
                        <div class="absolute top-3 left-3 lg:top-4 lg:left-4 z-10">
                            <span
                                class="bg-blue-600 text-white text-[8px] lg:text-[9px] font-black px-2 py-0.5 lg:py-1 rounded-lg uppercase tracking-widest shadow-lg shadow-blue-600/20">
                                {{ $product->category->name }}
                            </span>
                        </div>

                        <div
                            class="h-32 lg:h-44 bg-slate-50 rounded-xl lg:rounded-2xl mb-4 lg:mb-5 flex items-center justify-center text-slate-200 group-hover:text-blue-100 transition-all duration-500 transform group-hover:scale-[1.02] border border-slate-100/50">
                            <i class="fas fa-box-open text-4xl lg:text-6xl"></i>
                        </div>

                        <div class="space-y-1 lg:space-y-1.5 px-0.5 lg:px-1 flex-1">
                            <h4
                                class="font-bold text-sm lg:text-lg leading-tight text-slate-900 group-hover:text-blue-600 transition-colors duration-300 line-clamp-1">
                                {{ $product->name }}</h4>
                            <div
                                class="flex items-center justify-between text-[8px] lg:text-[10px] text-slate-400 font-bold uppercase tracking-wider">
                                <span>SKU: {{ $product->sku }}</span>
                                <span class="{{ $product->stock < 10 ? 'text-red-500' : 'text-slate-400' }}">Stok:
                                    {{ $product->stock }}</span>
                            </div>
                        </div>

                        <div class="flex justify-between items-center mt-4 lg:mt-6 px-0.5 lg:px-1">
                            <span class="text-base lg:text-2xl font-black text-slate-900 tabular-nums">Rp
                                {{ number_format($product->price, 0, ',', '.') }}</span>
                            <button
                                class="w-8 h-8 lg:w-11 lg:h-11 rounded-lg lg:rounded-2xl bg-slate-100 group-hover:bg-blue-600 text-slate-400 group-hover:text-white flex items-center justify-center transform group-active:scale-95 transition-all duration-300 shadow-sm group-hover:shadow-blue-600/30">
                                <i class="fas fa-plus text-xs"></i>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Quick Cart Sidebar -->
        <aside
            class="w-full lg:w-[26rem] bg-white rounded-[1.5rem] lg:rounded-[2.5rem] border border-slate-200 flex flex-col overflow-hidden shadow-2xl shadow-slate-200/50 min-h-[400px]">
            <div class="p-6 lg:p-8 border-b border-slate-100 bg-slate-50/30">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="font-black text-xl lg:text-2xl tracking-tight text-slate-900 uppercase">Pesanan <span
                                class="text-blue-600">Baru</span></h3>
                        <p class="text-[10px] text-slate-400 font-bold uppercase tracking-[0.2em] mt-1">Ref
                            #{{ date('Hi-s') }}</p>
                    </div>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-xl bg-white border border-slate-200 text-slate-400 hover:text-red-500 transition-colors shadow-sm"><i
                            class="fas fa-trash-alt"></i></button>
                </div>
            </div>

            <div class="flex-1 overflow-y-auto p-6 lg:p-8 space-y-6 custom-scrollbar">
                <!-- Order List Empty State -->
                <div class="flex flex-col items-center justify-center h-full text-center space-y-4">
                    <div
                        class="w-16 h-16 lg:w-20 lg:h-20 bg-slate-50 rounded-2xl lg:rounded-[2.5rem] flex items-center justify-center text-2xl lg:text-3xl text-slate-300 border border-slate-100">
                        <i class="fas fa-shopping-basket"></i>
                    </div>
                    <div>
                        <h5 class="font-bold text-slate-600 text-sm lg:text-base">Keranjang Kosong</h5>
                        <p class="text-[10px] lg:text-xs text-slate-400 mt-1 max-w-[180px] font-medium leading-relaxed">
                            Pilih produk dari daftar untuk mulai menjual.</p>
                    </div>
                </div>
            </div>

            <div class="p-8 lg:p-10 bg-slate-50/50 space-y-4 lg:space-y-5 border-t border-slate-100">
                <div class="space-y-2 lg:space-y-3 px-1 lg:px-2">
                    <div
                        class="flex justify-between text-slate-500 text-[10px] lg:text-sm font-bold uppercase tracking-wider">
                        <span>Subtotal</span>
                        <span class="text-slate-900">0</span>
                    </div>
                    <div
                        class="flex justify-between text-slate-500 text-[10px] lg:text-sm font-bold uppercase tracking-wider">
                        <span>Pajak (0%)</span>
                        <span class="text-slate-900">0</span>
                    </div>
                    <div class="h-px bg-slate-200/50 my-2"></div>
                    <div class="flex justify-between items-center">
                        <span class="text-[10px] lg:text-sm font-black text-slate-400 uppercase tracking-[0.2em]">Total
                            Bayar</span>
                        <span class="text-2xl lg:text-4xl font-black text-blue-600 tabular-nums tracking-tighter">Rp
                            0</span>
                    </div>
                </div>

                <button
                    class="w-full bg-blue-600 hover:bg-blue-700 py-4 lg:py-5 rounded-xl lg:rounded-[1.5rem] font-black text-lg lg:text-xl tracking-[0.1em] shadow-xl shadow-blue-600/30 transform active:scale-[0.98] transition-all duration-300 uppercase text-white mt-2 disabled:bg-slate-200 disabled:text-slate-400 disabled:shadow-none"
                    disabled>
                    Bayar Sekarang
                </button>
            </div>
        </aside>
    </div>

    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #e2e8f0;
            border-radius: 20px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
    </style>
@endsection