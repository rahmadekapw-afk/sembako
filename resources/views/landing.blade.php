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
            border-top-left-radius: 80px;
            border-top-right-radius: 40px;
            border-bottom-right-radius: 80px;
            border-bottom-left-radius: 40px;
        }

        /* Specific card container shapes */
        .card-shape {
            border-radius: 20px;
        }

        /* Marquee Animation */
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .animate-marquee {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 40s linear infinite;
        }
    </style>
</head>

<body id="home" class="bg-white text-slate-800 antialiased">

    <!-- Top Bar -->
    <div class="bg-footer-bg text-white py-2 overflow-hidden whitespace-nowrap text-xs font-light">
        <div class="container mx-auto">
            <div class="animate-marquee">
                <span>Toko Sembako • Layanan Pengantaran Cepat • Sembako Pro • Stok Segar Setiap Hari • Harga Terbaik
                    Langsung dari Petani • </span>
                <span>Toko Sembako • Layanan Pengantaran Cepat • Sembako Pro • Stok Segar Setiap Hari • Harga Terbaik
                    Langsung dari Petani • </span>
            </div>
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
                    <a href="#home" class="hover:text-primary transition-colors">Beranda</a>
                    <a href="#features" class="hover:text-primary transition-colors">Produk</a>
                    <a href="#promo" class="hover:text-primary transition-colors">Promo</a>
                    <a href="#about" class="hover:text-primary transition-colors">Tentang Kami</a>
                    <a href="#contact" class="hover:text-primary transition-colors">Kontak</a>
                </div>

                <!-- Action Button -->
                <div class="flex items-center">
                    <button id="openLoginModal"
                        class="px-6 py-2.5 bg-primary text-white rounded-md text-sm font-bold shadow-lg hover:bg-opacity-90 transition-all">
                        Login
                    </button>
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
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('pos.terminal') }}"
                            class="inline-block px-10 py-4 bg-secondary text-white rounded-full font-bold shadow-lg hover:shadow-xl hover:bg-opacity-90 transition-all text-lg">
                            Mulai Belanja Sekarang
                        </a>
                        <button onclick="toggleLoginModal()"
                            class="inline-block px-10 py-4 bg-white text-primary border-2 border-primary rounded-full font-bold shadow-md hover:bg-slate-50 transition-all text-lg lg:hidden">
                            Login
                        </button>
                    </div>
                </div>

                <!-- Hero Image -->
                <div class="relative flex justify-center lg:justify-end">
                    <div
                        class="w-full max-w-lg aspect-square bg-slate-200 overflow-hidden hero-shape shadow-2xl relative">
                        <img src="{{ asset('storage/hero/orang.png') }}" alt="Fresh Groceries"
                            class="w-full h-full object-cover">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 md:py-24 bg-white">
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
                <div id="promo"
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

    <!-- About Section -->
    <section id="about" class="py-16 md:py-24 bg-light-bg">
        <div class="container mx-auto px-4 md:px-12">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <div
                        class="w-full aspect-video bg-white rounded-[2.5rem] p-8 shadow-xl flex items-center justify-center border border-white/50">
                        <div class="flex items-center space-x-4">
                            <div
                                class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center text-white text-3xl">
                                <i class="fas fa-store"></i>
                            </div>
                            <div>
                                <h4 class="text-2xl font-black text-primary uppercase tracking-tight">Panen Segar</h4>
                                <p class="text-slate-500 font-medium">Mitra Sembako Kepercayaan Anda</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#003d7a] mb-6">Tentang Kami</h2>
                    <p class="text-slate-600 leading-relaxed mb-6 font-medium">
                        Panen Segar adalah penyedia produk sembako dan sayuran berkualitas yang berkomitmen untuk
                        memberikan kemudahan bagi masyarakat dalam memenuhi kebutuhan harian.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-10 h-10 bg-white rounded-xl shadow-sm flex items-center justify-center text-primary flex-shrink-0">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900">Kualitas Utama</h4>
                                <p class="text-sm text-slate-500">Kami menjamin setiap produk yang sampai ke tangan Anda
                                    adalah yang terbaik.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-10 h-10 bg-white rounded-xl shadow-sm flex items-center justify-center text-primary flex-shrink-0">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900">Pengiriman Cepat</h4>
                                <p class="text-sm text-slate-500">Layanan antar yang efisien untuk menjaga produk tetap
                                    segar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-footer-bg text-white py-12">
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

    <!-- Login Modal -->
    <div id="loginModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <!-- Overlay -->
            <div id="modalOverlay" class="fixed inset-0 transition-opacity bg-slate-900/60 backdrop-blur-sm"
                aria-hidden="true"></div>

            <!-- Modal Panel -->
            <div
                class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white shadow-2xl rounded-3xl sm:my-8 sm:align-middle sm:max-w-md sm:w-full">
                <div class="px-8 pt-10 pb-8 bg-white">
                    <div class="flex flex-col items-center mb-8">
                        <div
                            class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center text-white mb-4 shadow-lg">
                            <i class="fas fa-shopping-basket text-2xl"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-slate-900">Selamat Datang Kembali</h2>
                        <p class="text-slate-500 text-sm mt-1">Silakan login ke akun Anda</p>
                    </div>

                    <form action="{{ route('login') }}" method="POST" class="space-y-5">
                        @csrf
                        <div>
                            <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Email /
                                Username</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input type="text" id="email" name="email" required
                                    class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                                    placeholder="Masukkan email atau username">
                            </div>
                        </div>

                        <div>
                            <label for="password"
                                class="block text-sm font-semibold text-slate-700 mb-2">Password</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" id="password" name="password" required
                                    class="w-full pl-11 pr-7 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                                    placeholder="Masukkan password">
                                <button type="button" onclick="togglePassword()"
                                    class="absolute inset-y-0 right-0 flex items-center pr-4 text-slate-400 hover:text-primary transition-colors">
                                    <i id="eyeIcon" class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="checkbox" name="remember"
                                    class="w-4 h-4 text-primary border-slate-300 rounded focus:ring-primary/20">
                                <span class="text-sm text-slate-600">Ingat Saya</span>
                            </label>
                            <a href="#" class="text-sm font-semibold text-primary hover:text-opacity-80">Lupa
                                Password?</a>
                        </div>

                        <button type="submit"
                            class="w-full py-4 bg-primary text-white font-bold rounded-xl shadow-lg shadow-primary/30 hover:bg-opacity-95 transform active:scale-[0.98] transition-all mt-4">
                            Masuk Sekarang
                        </button>
                    </form>
                </div>

                <div class="px-8 py-6 bg-slate-50 border-t border-slate-100 text-center">
                    <p class="text-sm text-slate-600">
                        Belum punya akun? <a href="#" class="font-bold text-primary hover:underline">Hubungi Admin</a>
                    </p>
                </div>

                <!-- Close Button -->
                <button id="closeLoginModal"
                    class="absolute top-4 right-4 p-2 text-slate-400 hover:text-slate-600 transition-colors">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('loginModal');
            const openBtn = document.getElementById('openLoginModal');
            const closeBtn = document.getElementById('closeLoginModal');
            const overlay = document.getElementById('modalOverlay');

            function toggleModal() {
                modal.classList.toggle('hidden');
                if (!modal.classList.contains('hidden')) {
                    document.body.style.overflow = 'hidden';
                } else {
                    document.body.style.overflow = '';
                }
            }

            if (openBtn) openBtn.addEventListener('click', toggleModal);
            if (closeBtn) closeBtn.addEventListener('click', toggleModal);
            if (overlay) overlay.addEventListener('click', toggleModal);

            // Escape key to close
            window.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && modal && !modal.classList.contains('hidden')) {
                    toggleModal();
                }
            });
        });

        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>