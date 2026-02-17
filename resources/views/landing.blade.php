<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panen Segar - Sembako & Sayur Segar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#003d7a', // Darker blue like in the image
                        'secondary': '#349ee0', // Vibrant blue for the button
                        'light-bg': '#eaf4ff', // Light blue background for hero
                        'footer-bg': '#002b5c', // Footer blue
                    },
                fontFamily: {
                        'sans': ['Outfit', 'Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap');

        body {
            font-family: 'Outfit', sans-serif;
        }

        .hero-shape {
            border-top-left-radius: 40px;
            border-top-right-radius: 120px;
            border-bottom-right-radius: 120px;
            border-bottom-left-radius: 40px;
        }

        /* Specific card container shapes */
        .card-shape {
            border-radius: 20px;
        }
    </style>
</head>

<body class="bg-white text-slate-800 antialiased">

    <!-- Top Bar -->
    <div class="bg-footer-bg text-white py-2 px-4 text-xs font-light text-right">
        <div class="container mx-auto">
            <span>Toko Sembako • Layanan Pengantaran Cepat • Sembako Pro</span>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="bg-white border-b border-slate-100">
        <div class="container mx-auto px-4 md:px-12 py-6">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-10 bg-primary rounded-lg flex items-center justify-center text-white">
                        <i class="fas fa-shopping-basket text-xl"></i>
                    </div>
                    <div class="flex flex-col -space-y-1">
                        <span class="text-xl font-black tracking-tight text-primary leading-none">PANEN</span>
                        <span class="text-xl font-black tracking-tight text-primary leading-none ml-0.5">SEGAR</span>
                    </div>
                </div>

                <!-- Nav Links -->
                <div class="hidden lg:flex items-center space-x-10 text-sm font-semibold text-slate-600">
                    <a href="#" class="hover:text-primary transition-colors">Beranda</a>
                    <a href="#" class="text-primary border-b-2 border-primary pb-1">Produk</a>
                    <a href="#" class="hover:text-primary transition-colors">Promo</a>
                    <a href="#" class="hover:text-primary transition-colors">Tentang Kami</a>
                    <a href="#" class="hover:text-primary transition-colors">Kontak</a>
                </div>

                <!-- Action Button -->
                <div class="flex items-center">
                    <a href="{{ route('pos.dashboard') }}"
                        class="px-6 py-2.5 bg-primary text-white rounded-md text-sm font-bold shadow-lg hover:bg-opacity-90 transition-all">
                        Login POS
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-light-bg py-12 md:py-20">
        <div class="container mx-auto px-4 md:px-12">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="max-w-xl">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-[#003d7a] leading-tight mb-8">
                        Kebutuhan Pokok Segar & Terjangkau Langsung ke Rumah Anda!
                    </h1>
                    <button
                        class="px-10 py-4 bg-secondary text-white rounded-full font-bold shadow-lg hover:shadow-xl hover:bg-opacity-90 transition-all text-lg">
                        Mulai Belanja Sekarang
                    </button>
                </div>

                <!-- Hero Image -->
                <div class="relative flex justify-center lg:justify-end">
                    <div class="w-full max-w-lg aspect-square bg-slate-200 overflow-hidden hero-shape shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80&w=1000"
                            alt="Fresh Groceries" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 md:px-12">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div
                    class="bg-white p-10 flex flex-col items-center text-center shadow-[0_0_50px_rgba(0,0,0,0.05)] card-shape hover:translate-y-[-5px] transition-transform">
                    <div class="mb-6">
                        <div class="w-20 h-20 bg-blue-50 rounded-2xl flex items-center justify-center">
                            <i class="fas fa-box-open text-3xl text-primary"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4">Sembako Lengkap</h3>
                    <p class="text-slate-500 leading-relaxed text-sm">
                        Beras, minyak, gula, tepung, dan kebutuhan pokok dapur lainnya.
                    </p>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white p-10 flex flex-col items-center text-center shadow-[0_0_50px_rgba(0,0,0,0.05)] card-shape hover:translate-y-[-5px] transition-transform">
                    <div class="mb-6">
                        <div class="w-20 h-20 bg-blue-50 rounded-2xl flex items-center justify-center">
                            <i class="fas fa-carrot text-3xl text-primary"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4">Sayur & Buah Segar</h3>
                    <p class="text-slate-500 leading-relaxed text-sm">
                        Pilihan terbaik langsung dari petani lokal, dijamin segar setiap hari.
                    </p>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-white p-10 flex flex-col items-center text-center shadow-[0_0_50px_rgba(0,0,0,0.05)] card-shape hover:translate-y-[-5px] transition-transform">
                    <div class="mb-6">
                        <div class="w-20 h-20 bg-blue-50 rounded-2xl flex items-center justify-center">
                            <i class="fas fa-tag text-3xl text-primary"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4">Promo Spesial</h3>
                    <p class="text-slate-500 leading-relaxed text-sm">
                        Dapatkan penawaran menarik setiap hari hanya untuk Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-footer-bg text-white py-12">
        <div class="container mx-auto px-4 md:px-12">
            <div class="flex flex-col md:flex-row justify-between items-center gap-8">
                <!-- Footer Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-8 bg-white rounded-md flex items-center justify-center text-footer-bg">
                        <i class="fas fa-shopping-basket text-lg"></i>
                    </div>
                    <div class="flex flex-col -space-y-1">
                        <span class="text-lg font-black tracking-tight leading-none">PANEN</span>
                        <span class="text-lg font-black tracking-tight leading-none ml-0.5">SEGAR</span>
                    </div>
                </div>

                <div class="text-sm font-light text-slate-300">
                    &copy; 2024 Panen Segar. Semua hak dilindungi.
                </div>

                <div class="flex items-center space-x-6 text-xl">
                    <a href="#" class="hover:text-secondary transition-colors"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="hover:text-secondary transition-colors"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-secondary transition-colors"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>