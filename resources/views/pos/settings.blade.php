@extends('pos.layout', ['title' => 'Pengaturan Sistem'])

@section('content')
    <div class="max-w-5xl mx-auto space-y-8 lg:space-y-12">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0">
            <div>
                <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight text-slate-900 mb-2">Pusat <span
                        class="text-blue-600 italic">Kontrol</span></h2>
                <p class="text-slate-500 text-sm lg:text-base font-medium">Atur identitas toko dan preferensi inti sistem
                    Sembako Pro.</p>
            </div>
            <span
                class="inline-block bg-blue-50 text-blue-600 text-[10px] font-black px-3 py-1.5 rounded-lg border border-blue-100 uppercase tracking-widest self-start md:self-center">Versi
                2.4.0</span>
        </div>

        <!-- Identity Identity Identity -->
        <div
            class="bg-white p-6 lg:p-10 rounded-[2rem] lg:rounded-[3.5rem] border border-slate-200 shadow-sm relative overflow-hidden group">
            <div class="flex flex-col lg:flex-row items-center justify-between relative z-10 space-y-8 lg:space-y-0">
                <div
                    class="flex flex-col lg:flex-row items-center lg:items-center space-y-6 lg:space-y-0 lg:space-x-10 text-center lg:text-left">
                    <div class="relative">
                        <div
                            class="w-24 h-24 lg:w-28 lg:h-28 rounded-[2rem] lg:rounded-[2.5rem] bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center text-4xl lg:text-5xl font-black text-white shadow-2xl shadow-blue-600/30 border-4 border-white">
                            A</div>
                    </div>
                    <div>
                        <h3 class="text-2xl lg:text-3xl font-black text-slate-900 tracking-tight uppercase italic">Akun
                            Admin</h3>
                        <p class="text-slate-500 font-medium text-base lg:text-lg">Operator Utama • admin@sembako.com</p>
                        <div class="mt-4 flex flex-wrap justify-center lg:justify-start gap-2">
                            <span
                                class="bg-emerald-50 text-emerald-600 text-[9px] font-black px-3 py-1 rounded-lg uppercase tracking-widest border border-emerald-100">Terverifikasi</span>
                            <span
                                class="bg-slate-50 text-slate-400 text-[9px] font-black px-3 py-1 rounded-lg border border-slate-100 uppercase tracking-widest">Akses
                                Level 1</span>
                        </div>
                    </div>
                </div>
                <button
                    class="w-full lg:w-auto bg-slate-900 text-white font-black px-10 py-4 rounded-2xl hover:bg-blue-600 transform active:scale-95 transition-all duration-300 shadow-xl">Kelola
                    Profil</button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-10">
            <!-- Store Management -->
            <div
                class="bg-white p-6 lg:p-10 rounded-[2rem] lg:rounded-[2.5rem] space-y-6 lg:space-y-8 border border-slate-200 shadow-sm">
                <div class="flex items-center space-x-4">
                    <div
                        class="w-10 h-10 lg:w-11 lg:h-11 bg-blue-50 rounded-xl lg:rounded-2xl flex items-center justify-center text-blue-600 border border-blue-100">
                        <i class="fas fa-store"></i>
                    </div>
                    <h4 class="text-base lg:text-lg font-black uppercase tracking-[0.2em] text-slate-900">Identitas Toko
                    </h4>
                </div>

                <div class="space-y-4 lg:space-y-6">
                    <div>
                        <label class="text-[10px] uppercase font-black text-slate-400 tracking-[0.3em] block mb-2 ml-1">Nama
                            Toko</label>
                        <input type="text" value="Sembako Pro Official"
                            class="w-full bg-slate-50 border border-slate-100 rounded-xl lg:rounded-2xl px-5 py-3 lg:py-4 focus:bg-white focus:border-blue-500 outline-none transition-all duration-300 font-bold text-slate-700">
                    </div>
                    <div>
                        <label
                            class="text-[10px] uppercase font-black text-slate-400 tracking-[0.3em] block mb-2 ml-1">Alamat
                            HQ</label>
                        <textarea
                            class="w-full bg-slate-50 border border-slate-100 rounded-xl lg:rounded-2xl px-5 py-3 lg:py-4 focus:bg-white focus:border-blue-500 outline-none transition-all duration-300 font-bold text-slate-700 h-28">Pusat Komando, Jl. Utama No. 8, Indonesia</textarea>
                    </div>
                </div>
                <button
                    class="w-full bg-blue-600 text-white py-4 rounded-xl lg:rounded-2xl font-black tracking-[0.2em] uppercase hover:bg-blue-700 transform active:scale-95 transition-all duration-300 shadow-xl shadow-blue-600/20">Simpan
                    Perubahan</button>
            </div>

            <!-- System Logic -->
            <div
                class="bg-white p-6 lg:p-10 rounded-[2rem] lg:rounded-[2.5rem] space-y-6 lg:space-y-8 border border-slate-200 shadow-sm">
                <div class="flex items-center space-x-4">
                    <div
                        class="w-10 h-10 lg:w-11 lg:h-11 bg-indigo-50 rounded-xl lg:rounded-2xl flex items-center justify-center text-indigo-600 border border-indigo-100">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h4 class="text-base lg:text-lg font-black uppercase tracking-[0.2em] text-slate-900">Inti Taktis</h4>
                </div>

                <div class="space-y-3 lg:space-y-4">
                    <div
                        class="flex justify-between items-center p-5 lg:p-6 bg-slate-50 rounded-2xl lg:rounded-3xl border border-slate-100 hover:border-blue-300 transition-all cursor-pointer group">
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-cloud-upload-alt text-slate-300 group-hover:text-blue-500 shrink-0"></i>
                            <div>
                                <p class="font-bold text-slate-700 uppercase text-[10px] lg:text-xs tracking-wider">
                                    Sinkronisasi Awan</p>
                                <p class="text-[9px] text-slate-400 font-bold uppercase mt-1 leading-none">Sinkronisasi
                                    Aktif</p>
                            </div>
                        </div>
                        <div class="w-10 lg:w-12 h-5 lg:h-6 bg-blue-600 rounded-full relative shrink-0">
                            <div class="absolute right-1 top-0.5 lg:top-1 w-4 h-4 bg-white rounded-full shadow-md"></div>
                        </div>
                    </div>

                    <div
                        class="flex justify-between items-center p-5 lg:p-6 bg-slate-50 rounded-2xl lg:rounded-3xl border border-slate-100 hover:border-blue-300 transition-all cursor-pointer group">
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-exclamation-triangle text-slate-300 group-hover:text-amber-500 shrink-0"></i>
                            <div>
                                <p class="font-bold text-slate-700 uppercase text-[10px] lg:text-xs tracking-wider">Penjaga
                                    Stok</p>
                                <p class="text-[9px] text-slate-400 font-bold uppercase mt-1 leading-none">Siaran Peringatan
                                </p>
                            </div>
                        </div>
                        <div class="w-10 lg:w-12 h-5 lg:h-6 bg-blue-600 rounded-full relative shrink-0">
                            <div class="absolute right-1 top-0.5 lg:top-1 w-4 h-4 bg-white rounded-full shadow-md"></div>
                        </div>
                    </div>

                    <div
                        class="flex justify-between items-center p-5 lg:p-6 bg-slate-50 opacity-50 rounded-2xl lg:rounded-3xl border border-slate-100 grayscale cursor-not-allowed">
                        <div class="flex items-center space-x-4">
                            <i class="fas fa-print text-slate-300 shrink-0"></i>
                            <div>
                                <p class="font-bold text-slate-700 uppercase text-[10px] lg:text-xs tracking-wider">Cetak
                                    Struk</p>
                                <p class="text-[9px] text-slate-400 font-bold uppercase mt-1 leading-none">Offline</p>
                            </div>
                        </div>
                        <div class="w-10 lg:w-12 h-5 lg:h-6 bg-slate-200 rounded-full relative shrink-0">
                            <div class="absolute left-1 top-0.5 lg:top-1 w-4 h-4 bg-white rounded-full shadow-md"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection