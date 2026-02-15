@extends('pos.layout', ['title' => 'Manajemen Inventaris'])

@section('content')
    <div class="space-y-6 lg:space-y-10">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end space-y-4 md:space-y-0">
            <div>
                <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight text-slate-900 mb-2">Gudang <span
                        class="text-blue-600">Stok</span></h2>
                <p class="text-slate-500 text-sm lg:text-base font-medium">Pelacakan aset detail dan audit tingkat stok
                    barang.</p>
            </div>
            <button
                class="w-full md:w-auto bg-blue-600 text-white font-extrabold px-6 lg:px-8 py-3 lg:py-3.5 rounded-2xl hover:bg-blue-700 transition-all duration-300 shadow-xl shadow-blue-600/20 flex items-center justify-center group">
                <i class="fas fa-plus mr-3 group-hover:rotate-90 transition-transform"></i> Produk Baru
            </button>
        </div>

        <!-- Mobile Card View Component (Visible on mobile) -->
        <div class="grid grid-cols-1 md:hidden gap-4">
            @foreach($products as $product)
                <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm flex flex-col space-y-4">
                    <div class="flex items-center space-x-4">
                        <div
                            class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 border border-blue-100 font-bold">
                            <i class="fas fa-database text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-bold text-slate-900 text-lg leading-tight">{{ $product->name }}</p>
                            <p class="text-[10px] text-slate-400 font-black uppercase tracking-widest mt-0.5">
                                {{ $product->sku }}</p>
                        </div>
                        <span
                            class="bg-slate-50 px-3 py-1 rounded-lg text-[9px] font-black text-slate-500 border border-slate-200 uppercase tracking-widest">
                            {{ $product->category->name }}
                        </span>
                    </div>

                    <div class="flex justify-between items-center py-2 border-y border-slate-50">
                        <div>
                            <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest">Harga</p>
                            <p class="font-black text-slate-900 text-lg tabular-nums">Rp
                                {{ number_format($product->price, 0, ',', '.') }}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest">Stok</p>
                            <div
                                class="text-2xl font-black tabular-nums {{ $product->stock < 10 ? 'text-red-500' : 'text-blue-600' }}">
                                {{ $product->stock }}
                            </div>
                        </div>
                    </div>

                    <div class="flex space-x-2">
                        <button
                            class="flex-1 bg-slate-50 text-slate-500 py-3 rounded-xl font-bold flex items-center justify-center space-x-2 border border-slate-100"><i
                                class="fas fa-edit text-xs"></i> <span>Ubah</span></button>
                        <button
                            class="flex-1 bg-red-50 text-red-500 py-3 rounded-xl font-bold flex items-center justify-center space-x-2 border border-red-100"><i
                                class="fas fa-trash-alt text-xs"></i> <span>Hapus</span></button>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Desktop Table View (Hidden on mobile) -->
        <div class="hidden md:block bg-white rounded-[2rem] overflow-hidden border border-slate-200 shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse min-w-[800px]">
                    <thead>
                        <tr class="bg-slate-50 text-slate-400 text-[10px] font-black tracking-[0.2em] uppercase">
                            <th class="p-8 pb-4">Detail Produk</th>
                            <th class="p-8 pb-4 text-center">Kategori</th>
                            <th class="p-8 pb-4">Harga</th>
                            <th class="p-8 pb-4 text-center">Ketersediaan</th>
                            <th class="p-8 pb-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach($products as $product)
                            <tr class="hover:bg-blue-50/30 transition-colors duration-300 group">
                                <td class="p-8">
                                    <div class="flex items-center space-x-6">
                                        <div
                                            class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-blue-600 border border-slate-100 font-bold group-hover:bg-white group-hover:border-blue-200 transition-all">
                                            <i class="fas fa-database text-xl"></i>
                                        </div>
                                        <div>
                                            <p
                                                class="font-bold text-slate-900 text-lg group-hover:text-blue-600 transition-colors">
                                                {{ $product->name }}</p>
                                            <p class="text-[10px] text-slate-400 font-black uppercase tracking-widest mt-1">
                                                {{ $product->sku }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-8 text-center">
                                    <span
                                        class="bg-white px-4 py-1.5 rounded-xl text-[10px] font-black text-slate-500 border border-slate-200 uppercase tracking-widest">
                                        {{ $product->category->name }}
                                    </span>
                                </td>
                                <td class="p-8">
                                    <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest mb-1">Harga Satuan
                                    </p>
                                    <p class="font-black text-slate-900 text-lg tabular-nums">Rp
                                        {{ number_format($product->price, 0, ',', '.') }}</p>
                                </td>
                                <td class="p-8 text-center">
                                    <div class="inline-flex flex-col items-center">
                                        <div
                                            class="text-3xl font-black tabular-nums {{ $product->stock < 10 ? 'text-red-500' : 'text-blue-600' }}">
                                            {{ $product->stock }}
                                        </div>
                                        <div class="flex items-center mt-1">
                                            <div
                                                class="w-1.5 h-1.5 rounded-full mr-2 {{ $product->stock < 10 ? 'bg-red-500 animate-pulse' : 'bg-emerald-500' }}">
                                            </div>
                                            <span
                                                class="text-[9px] text-slate-400 font-black uppercase tracking-[0.15em]">Status</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-8 text-right">
                                    <div class="flex justify-end space-x-3">
                                        <button
                                            class="w-10 h-10 bg-white flex items-center justify-center rounded-xl text-slate-400 hover:text-blue-600 border border-slate-200 hover:border-blue-500 transition-all duration-300 shadow-sm"><i
                                                class="fas fa-edit text-sm"></i></button>
                                        <button
                                            class="w-10 h-10 bg-white flex items-center justify-center rounded-xl text-slate-400 hover:text-red-600 border border-slate-200 hover:border-red-500 transition-all duration-300 shadow-sm"><i
                                                class="fas fa-trash-alt text-sm"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection