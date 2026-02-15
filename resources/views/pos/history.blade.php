@extends('pos.layout', ['title' => 'Riwayat Transaksi'])

@section('content')
    <div class="space-y-6 lg:space-y-10">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0">
            <div>
                <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight text-slate-900 mb-2">Riwayat <span
                        class="text-blue-600">Penjualan</span></h2>
                <p class="text-slate-500 text-sm lg:text-base font-medium">Catatan lengkap dari semua transaksi ritel yang
                    dilakukan.</p>
            </div>
            <button
                class="w-full md:w-auto bg-white text-slate-600 px-6 py-3 rounded-2xl border border-slate-200 hover:bg-slate-50 hover:text-blue-600 transition-all font-bold flex items-center justify-center shadow-sm">
                <i class="fas fa-download mr-3 text-blue-600"></i> Ekspor Laporan
            </button>
        </div>

        <div class="space-y-4 lg:space-y-4">
            @foreach($sales as $sale)
                <div
                    class="bg-white rounded-[1.5rem] lg:rounded-[2rem] p-5 lg:p-8 hover:border-blue-300 border border-slate-200 transition-all duration-500 group relative flex flex-col lg:flex-row justify-between items-start lg:items-center shadow-sm hover:shadow-md space-y-6 lg:space-y-0">
                    <div class="flex items-center space-x-6 lg:space-x-10 w-full lg:w-auto">
                        <div
                            class="w-16 h-16 lg:w-20 lg:h-20 bg-blue-50 border border-blue-100 font-black text-xl lg:text-2xl flex items-center justify-center rounded-[1.25rem] lg:rounded-[1.5rem] text-blue-600 shadow-inner group-hover:scale-105 transition-transform duration-500 shrink-0">
                            #{{ str_pad($sale->id, 4, '0', STR_PAD_LEFT) }}
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center space-x-3 mb-1">
                                <h4 class="text-xl lg:text-2xl font-black text-slate-900 tabular-nums">Rp
                                    {{ number_format($sale->total_price, 0, ',', '.') }}</h4>
                                <span
                                    class="bg-emerald-50 text-emerald-600 text-[8px] lg:text-[9px] font-black px-2 py-0.5 rounded-lg uppercase tracking-widest border border-emerald-100">Berhasil</span>
                            </div>
                            <p class="text-[9px] lg:text-[10px] text-slate-400 font-bold uppercase tracking-[0.1em]">
                                {{ $sale->created_at->format('H:i:s') }} • {{ $sale->created_at->format('d M Y') }}</p>
                        </div>
                        <div class="hidden lg:block h-12 w-px bg-slate-100"></div>
                        <div class="hidden md:block">
                            <p class="text-[9px] text-slate-400 font-black uppercase tracking-[0.2em] mb-2">Item Terjual</p>
                            <div class="flex -space-x-2">
                                @foreach($sale->details->take(5) as $detail)
                                    <div class="w-8 h-8 lg:w-10 lg:h-10 rounded-xl lg:rounded-2xl border-2 lg:border-4 border-white bg-slate-50 flex items-center justify-center text-[10px] lg:text-xs font-black text-blue-600 shadow-sm border border-slate-100"
                                        title="{{ $detail->product->name }}">
                                        {{ substr($detail->product->name, 0, 1) }}
                                    </div>
                                @endforeach
                                @if($sale->details->count() > 5)
                                    <div
                                        class="w-8 h-8 lg:w-10 lg:h-10 rounded-xl lg:rounded-2xl border-2 lg:border-4 border-white bg-slate-100 flex items-center justify-center text-[8px] lg:text-[10px] font-black text-slate-500 border border-slate-200">
                                        +{{ $sale->details->count() - 5 }}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-between w-full lg:w-auto lg:space-x-10 pt-4 lg:pt-0 border-t lg:border-0 border-slate-50">
                        <div class="text-left lg:text-right">
                            <p class="text-[9px] text-slate-400 font-black uppercase tracking-[0.2em] mb-1">Kasir</p>
                            <p class="font-bold text-slate-700 text-base lg:text-lg leading-tight">{{ $sale->user->name }}</p>
                        </div>
                        <button
                            class="bg-slate-50 w-12 h-12 lg:w-14 lg:h-14 flex items-center justify-center rounded-xl lg:rounded-[1.25rem] border border-slate-100 text-slate-400 group-hover:bg-blue-600 group-hover:text-white group-hover:border-blue-600 transition-all duration-300 shadow-sm">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
            @endforeach

            @if($sales->isEmpty())
                <div
                    class="bg-white rounded-[2rem] lg:rounded-[3rem] p-12 lg:p-24 flex flex-col items-center justify-center text-center border border-slate-200 shadow-sm">
                    <div
                        class="w-16 h-16 lg:w-24 lg:h-24 bg-slate-50 rounded-2xl lg:rounded-[2.5rem] border border-slate-100 flex items-center justify-center text-2xl lg:text-4xl text-slate-200 mb-6 lg:mb-8 transition-transform hover:rotate-12 duration-500">
                        <i class="fas fa-history"></i>
                    </div>
                    <h4 class="text-xl lg:text-2xl font-black text-slate-900">Belum Ada Riwayat</h4>
                    <p class="text-slate-500 text-sm lg:text-base max-w-sm mt-3 font-medium leading-relaxed">Belum ada data
                        transaksi yang tercatat dalam sistem untuk periode ini.</p>
                </div>
            @endif
        </div>
    </div>
@endsection