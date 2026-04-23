<!DOCTYPE html>
<html class="light scroll-smooth" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>ESign Balikpapan - Panduan</title>
    <link rel="icon" type="png" href="images/bpn_logo.png">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#001e40",
                        "secondary": "#006c4a",
                        "surface": "#f8f9ff",
                        "on-surface": "#171c22",
                        "on-surface-variant": "#43474f",
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        slideDown: {
                            '0%': { opacity: '0', transform: 'translateY(-10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    },
                    animation: {
                        fadeInUp: 'fadeInUp 0.6s ease-out forwards',
                        slideDown: 'slideDown 0.3s ease-out forwards',
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        
        /* Transisi Global untuk Dark Mode & Hover */
        * {
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform;
            transition-duration: 300ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }

        body { font-family: 'Public Sans', sans-serif; }
        
        .animate-delay-100 { animation-delay: 100ms; }
        .animate-delay-200 { animation-delay: 200ms; }
        .animate-delay-300 { animation-delay: 300ms; }
    </style>
</head>

<body class="bg-surface text-on-surface antialiased dark:bg-slate-950 dark:text-slate-200 overflow-x-hidden">

<nav class="bg-white/80 backdrop-blur-md dark:bg-slate-900/80 sticky top-0 z-50 shadow-sm border-b border-slate-200 dark:border-slate-800">
    <div class="flex justify-between items-center px-4 md:px-8 h-20 max-w-screen-2xl mx-auto">
        <div class="flex items-center gap-3 flex-shrink-0 hover:scale-105 transition-transform cursor-pointer">
            <img src="images/bpn_logo.png" alt="Logo" class="h-10 w-auto object-contain">
            <span class="text-lg md:text-xl font-extrabold tracking-tight text-blue-900 dark:text-blue-400">
                ESign Balikpapan
            </span>
        </div>

        <div class="hidden md:flex items-center space-x-8 font-medium">
            <a class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-white relative group" href="http://edocumentweb.test">
                Beranda
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary dark:bg-blue-400 transition-all group-hover:w-full"></span>
            </a>
            <a class="text-secondary dark:text-green-400 font-bold border-b-2 border-secondary pb-1" href="#">Panduan</a>
            
            <button onclick="toggleDarkMode()" class="group p-2 rounded-xl bg-slate-100 dark:bg-slate-800 hover:bg-primary hover:text-white transition-all duration-500">
                <span id="dark-icon" class="material-symbols-outlined block group-hover:rotate-[360deg] transition-transform duration-700">dark_mode</span>
            </button>

            <a href="http://edocumentweb.test/auth"><button class="bg-primary dark:bg-blue-700 text-white px-6 py-2.5 rounded-lg font-semibold hover:ring-4 hover:ring-blue-500/30 active:scale-95">Log in</button></a>
        </div>

        <div class="flex md:hidden items-center gap-3">
            <button onclick="toggleDarkMode()" class="p-2 rounded-lg bg-slate-100 dark:bg-slate-800">
                <span id="dark-icon-mobile" class="material-symbols-outlined text-2xl">dark_mode</span>
            </button>
            <button onclick="toggleMobileMenu()" class="p-2 text-primary dark:text-white">
                <span id="menu-icon" class="material-symbols-outlined text-3xl">menu</span>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 px-6 py-8 space-y-6 animate-slideDown">
        <a class="block text-lg font-medium text-slate-600 dark:text-slate-300" href="http://edocumentweb.test">Beranda</a>
        <a class="block text-lg font-bold text-secondary dark:text-green-400" href="#">Panduan</a>
        <hr class="border-slate-100 dark:border-slate-800">
        <a href="http://edocumentweb.test/auth" class="block w-full text-center bg-primary dark:bg-blue-700 text-white py-4 rounded-xl font-bold shadow-lg">Log in</a>
    </div>
</nav>

<div class="max-w-screen-2xl mx-auto flex flex-col">
    <main class="w-full">
        <section class="px-6 py-16 md:py-32 relative">
            <div class="max-w-4xl mx-auto relative z-10 text-center md:text-left opacity-0 animate-fadeInUp">
                <h1 class="text-4xl md:text-7xl font-extrabold text-primary dark:text-white tracking-tighter leading-tight mb-8">
                    Panduan Penggunaan <br class="hidden md:block"> <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-900 to-secondary dark:from-blue-400 dark:to-green-400">ESign Balikpapan</span>
                </h1>
                <p class="text-lg md:text-xl text-on-surface-variant dark:text-slate-400 leading-relaxed mb-10 max-w-2xl">
                    Selamat datang di ekosistem tanda tangan digital masa depan. Kelola dokumen secara aman, legal, dan sepenuhnya digital.
                </p>
                <div class="flex flex-col sm:flex-row justify-center md:justify-start gap-4">
                    <a href="https://helpdesk.balikpapan.go.id/download_attachment.php?kb_att=6" class="group w-full sm:w-auto">
                        <button class="w-full bg-primary dark:bg-blue-700 text-white px-10 py-5 rounded-2xl font-bold shadow-xl hover:shadow-primary/20 dark:hover:shadow-blue-500/20 hover:-translate-y-1 active:scale-95 flex items-center justify-center gap-3">
                            Unduh Panduan Lengkap <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">download</span>
                        </button>
                    </a>
                </div>
            </div>
            
            <div class="absolute right-0 top-0 w-96 h-96 bg-blue-400/10 dark:bg-blue-600/5 blur-[100px] rounded-full -z-10 animate-pulse"></div>
        </section>

        <section class="px-6 py-20 bg-slate-50 dark:bg-slate-900/30">
            <div class="max-w-7xl mx-auto">
                <div class="mb-16 text-center opacity-0 animate-fadeInUp animate-delay-100">
                    <h2 class="text-3xl md:text-5xl font-bold text-primary dark:text-white mb-4 tracking-tight">Alur Kerja Digital</h2>
                    <p class="text-on-surface-variant dark:text-slate-400 text-lg">Hanya butuh beberapa menit untuk mulai menandatangani secara sah.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="group bg-white dark:bg-slate-800 p-8 rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700 hover:shadow-2xl hover:border-secondary dark:hover:border-blue-500 hover:-translate-y-2 opacity-0 animate-fadeInUp animate-delay-100">
                        <div class="w-14 h-14 bg-blue-50 dark:bg-slate-700 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                            <span class="material-symbols-outlined text-3xl text-primary dark:text-blue-400">fingerprint</span>
                        </div>
                        <span class="text-xs font-bold text-secondary dark:text-green-400 uppercase tracking-widest">Langkah 01</span>
                        <h3 class="text-2xl font-bold text-primary dark:text-white mt-2 mb-4">Registrasi</h3>
                        <p class="text-sm text-on-surface-variant dark:text-slate-400 leading-relaxed">
                            Input NIK Anda. Sistem kami terhubung langsung dengan database kependudukan nasional.
                        </p>
                    </div>

                    <div class="group bg-white dark:bg-slate-800 p-8 rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700 hover:shadow-2xl hover:border-secondary dark:hover:border-blue-500 hover:-translate-y-2 opacity-0 animate-fadeInUp animate-delay-200">
                        <div class="w-14 h-14 bg-blue-50 dark:bg-slate-700 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                            <span class="material-symbols-outlined text-3xl text-primary dark:text-blue-400">face</span>
                        </div>
                        <span class="text-xs font-bold text-secondary dark:text-green-400 uppercase tracking-widest">Langkah 02</span>
                        <h3 class="text-2xl font-bold text-primary dark:text-white mt-2 mb-4">Autentikasi</h3>
                        <p class="text-sm text-on-surface-variant dark:text-slate-400 leading-relaxed">
                            Amankan sertifikat Anda dengan verifikasi wajah (Liveness Detection) yang sangat ketat.
                        </p>
                    </div>

                    <div class="group bg-white dark:bg-slate-800 p-8 rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700 hover:shadow-2xl hover:border-secondary dark:hover:border-blue-500 hover:-translate-y-2 opacity-0 animate-fadeInUp animate-delay-300">
                        <div class="w-14 h-14 bg-blue-50 dark:bg-slate-700 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                            <span class="material-symbols-outlined text-3xl text-primary dark:text-blue-400">draw</span>
                        </div>
                        <span class="text-xs font-bold text-secondary dark:text-green-400 uppercase tracking-widest">Langkah 03</span>
                        <h3 class="text-2xl font-bold text-primary dark:text-white mt-2 mb-4">E-Signing</h3>
                        <p class="text-sm text-on-surface-variant dark:text-slate-400 leading-relaxed">
                            Letakkan tanda tangan visual Anda pada dokumen PDF. Proses enkripsi dimulai seketika.
                        </p>
                    </div>

                    <div class="group bg-white dark:bg-slate-800 p-8 rounded-3xl shadow-sm border border-slate-100 dark:border-slate-700 hover:shadow-2xl hover:border-secondary dark:hover:border-blue-500 hover:-translate-y-2 opacity-0 animate-fadeInUp animate-delay-300">
                        <div class="w-14 h-14 bg-blue-50 dark:bg-slate-700 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                            <span class="material-symbols-outlined text-3xl text-primary dark:text-blue-400">verified_user</span>
                        </div>
                        <span class="text-xs font-bold text-secondary dark:text-green-400 uppercase tracking-widest">Langkah 04</span>
                        <h3 class="text-2xl font-bold text-primary dark:text-white mt-2 mb-4">Validasi</h3>
                        <p class="text-sm text-on-surface-variant dark:text-slate-400 leading-relaxed">
                            Dapatkan dokumen tersertifikasi BSrE yang diakui secara hukum di seluruh Indonesia.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<footer class="bg-white dark:bg-slate-950 w-full mt-20 border-t border-slate-100 dark:border-slate-800">
    <div class="py-16 px-6 max-w-screen-2xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center gap-12 text-center md:text-left">
            <div>
                <p class="font-extrabold text-primary dark:text-white mb-3 text-2xl tracking-tighter">ESign Balikpapan</p>
                <p class="text-slate-500 text-sm max-w-sm">Layanan sertifikasi elektronik resmi di bawah Dinas Komunikasi dan Informatika Pemerintah Kota Balikpapan.</p>
            </div>
            <div class="flex flex-wrap justify-center gap-10 text-sm font-semibold">
                <a class="text-slate-400 hover:text-primary dark:hover:text-blue-400 transition-colors" href="#">Kebijakan Privasi</a>
                <a class="text-slate-400 hover:text-primary dark:hover:text-blue-400 transition-colors" href="#">Bantuan</a>
                <a class="text-slate-400 hover:text-primary dark:hover:text-blue-400 transition-colors" href="#">Kontak Kami</a>
            </div>
        </div>
        <div class="mt-12 pt-8 border-t border-slate-50 dark:border-slate-900 text-center text-slate-400 text-xs tracking-widest uppercase">
            © 2026 DINAS KOMUNIKASI DAN INFORMATIKA KOTA BALIKPAPAN
        </div>
    </div>
</footer>

<script>
    // Logic Dark Mode dengan transisi ikon yang mulus
    function toggleDarkMode() {
        const html = document.documentElement;
        const isDark = html.classList.toggle('dark');
        const icon = document.getElementById('dark-icon');
        const iconMobile = document.getElementById('dark-icon-mobile');
        
        const newIcon = isDark ? 'light_mode' : 'dark_mode';
        
        // Animasi pergantian teks ikon
        [icon, iconMobile].forEach(el => {
            el.style.opacity = '0';
            setTimeout(() => {
                el.innerText = newIcon;
                el.style.opacity = '1';
            }, 150);
        });
        
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
    }

    if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
        document.getElementById('dark-icon').innerText = 'light_mode';
        document.getElementById('dark-icon-mobile').innerText = 'light_mode';
    }

    // Logic Mobile Menu dengan rotasi ikon
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        const icon = document.getElementById('menu-icon');
        const isHidden = menu.classList.toggle('hidden');
        
        icon.innerText = isHidden ? 'menu' : 'close';
        icon.style.transform = isHidden ? 'rotate(0deg)' : 'rotate(90deg)';
    }
</script>
</body>
</html>