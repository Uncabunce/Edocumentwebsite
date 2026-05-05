<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>ESign Balikpapan - Portal Resmi</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link rel="icon" type="png" href="{{ asset('images/bpn_logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "secondary": "#CA8A04",
                        "on-primary": "#ffffff",
                        "surface": "#f8f9ff",
                        "background": "#f8f9ff",
                        "primary": "#001e40",
                        "dark-bg": "#0a0f18",
                        "dark-card": "#151b28",
                        "dark-input": "#1e2533"
                    },
                    fontFamily: {
                        "headline": ["Plus Jakarta Sans"],
                        "body": ["Plus Jakarta Sans"]
                    }
                }
            }
        }
    </script>
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; transition: background-color 0.3s ease; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .civic-gradient {
            background: linear-gradient(135deg, #001e40 0%, #003366 100%);
        }
        .dark .civic-gradient {
            background: linear-gradient(135deg, #111827 0%, #1e293b 100%);
        }
    </style>
</head>

<body class="min-h-[100dvh] flex items-center justify-center p-4 md:p-12 relative overflow-x-hidden bg-background dark:bg-dark-bg text-on-surface transition-colors duration-300">

    <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] bg-blue-500/10 rounded-full blur-[120px] -z-10"></div>
    <div class="absolute bottom-[-10%] left-[-10%] w-[30%] h-[30%] bg-secondary/10 rounded-full blur-[100px] -z-10"></div>

    <main class="w-full max-w-[1100px] flex flex-col md:flex-row items-stretch bg-white dark:bg-dark-card rounded-[2rem] overflow-hidden shadow-2xl dark:shadow-none border border-transparent dark:border-white/5">
        
        <section class="hidden md:flex flex-col justify-between p-12 w-1/2 civic-gradient text-on-primary relative">
            <div class="z-10">
                <span class="text-xs font-bold tracking-[0.2em] uppercase text-blue-200 mb-8 block">Portal Resmi Negara</span>
                <h1 class="text-5xl font-extrabold tracking-tighter leading-tight mb-4">ESign Balikpapan</h1>
                <p class="text-blue-100 text-lg font-light leading-relaxed max-w-xs">
                    Gerbang tunggal layanan administrasi digital dengan standar keamanan berdaulat.
                </p>
            </div>
            <div class="z-10 mt-auto">
                <div class="flex items-center gap-4 py-4 px-6 bg-white/10 backdrop-blur-md rounded-2xl border border-white/10">
                    <span class="material-symbols-outlined text-green-400">verified_user</span>
                    <span class="text-sm font-medium">Enkripsi End-to-End Tingkat Tinggi</span>
                </div>
            </div>
            <div class="absolute inset-0 opacity-20 pointer-events-none">
                <div class="absolute top-1/4 right-0 w-64 h-64 border border-white rounded-full translate-x-1/2"></div>
                <div class="absolute bottom-1/4 left-0 w-96 h-96 border border-white rounded-full -translate-x-1/2"></div>
            </div>
        </section>

        <section class="w-full md:w-1/2 p-8 md:p-16 flex flex-col justify-center bg-white dark:bg-dark-card">
            
            <div class="md:hidden mb-10 text-center">
                <span class="text-[10px] font-bold tracking-[0.2em] text-secondary dark:text-yellow-400 uppercase mb-2 block">Portal Resmi</span>
                <h2 class="text-3xl font-extrabold tracking-tighter text-primary dark:text-white">ESign Balikpapan</h2>
                <div class="h-1.5 w-12 bg-secondary mx-auto mt-3 rounded-full"></div>
            </div>

            <header class="mb-10 text-center md:text-left">
                <span class="hidden md:block text-[10px] font-bold tracking-[0.2em] text-secondary dark:text-yellow-400 uppercase mb-2">Masuk ke Akun</span>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white tracking-tight mb-2">Selamat Datang</h2>
                <p class="text-slate-500 dark:text-slate-400 text-sm">Silakan masukkan identitas digital Anda untuk mengakses layanan.</p>
            </header>

            <form class="space-y-6" action="http://edocumentweb.test/" method="GET">
                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest px-1" for="id_login">NIK / Email</label>
                    <div class="group relative">
                        <input class="w-full px-5 py-4 bg-slate-50 dark:bg-dark-input border-2 border-transparent rounded-2xl focus:ring-4 focus:ring-primary/5 focus:bg-white dark:focus:bg-dark-input focus:border-primary dark:focus:border-secondary transition-all text-slate-900 dark:text-white placeholder:text-slate-400" id="id_login" placeholder="Masukkan NIK atau Email" type="text"/>
                    </div>
                </div>

                <div class="space-y-2">
                    <div class="flex justify-between items-center px-1">
                        <label class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest" for="password">Kata Sandi</label>
                        <a class="text-xs font-bold text-primary dark:text-yellow-400 hover:underline" href="http://edocumentweb.test/reset-password">Lupa Sandi?</a>
                    </div>
                    <div class="group relative">
                        <input class="w-full px-5 py-4 bg-slate-50 dark:bg-dark-input border-2 border-transparent rounded-2xl focus:ring-4 focus:ring-primary/5 focus:bg-white dark:focus:bg-dark-input focus:border-primary dark:focus:border-secondary transition-all text-slate-900 dark:text-white placeholder:text-slate-400" id="password" placeholder="••••••••" type="password"/>
                    </div>
                </div>

                <div class="pt-4">
                    <button class="w-full py-4 px-6 civic-gradient text-white font-bold rounded-2xl shadow-xl shadow-primary/20 active:scale-[0.98] transition-all flex justify-center items-center gap-3 group" type="submit">
                        Log in 
                        <span class="material-symbols-outlined text-xl group-hover:translate-x-1 transition-transform">arrow_forward_ios</span>
                    </button>
                </div>
            </form>

            <footer class="mt-12 text-center text-[11px] text-slate-400 dark:text-slate-500">
                <p>© 2026 ESign Balikpapan — Digital Government Excellence</p>
                <div class="mt-4 flex justify-center gap-6">
                    <a class="hover:text-primary dark:hover:text-white transition-colors" href="#">Ketentuan</a>
                    <a class="hover:text-primary dark:hover:text-white transition-colors" href="https://www.komdigi.go.id/lainnya/kebijakan-privasi">Privasi</a>
                </div>
            </footer>
        </section>
    </main>

    <div class="fixed bottom-6 right-6 flex flex-col gap-3">
        <button onclick="toggleDarkMode()" class="w-12 h-12 rounded-full bg-white dark:bg-dark-card shadow-lg flex items-center justify-center text-slate-700 dark:text-yellow-400 border border-slate-100 dark:border-white/10 transition-all hover:scale-110">
            <span id="dark-icon" class="material-symbols-outlined">dark_mode</span>
        </button>
    </div>

    <script>
        const html = document.documentElement;
        const darkIcon = document.getElementById('dark-icon');

        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            html.classList.add('dark');
            darkIcon.innerText = 'light_mode';
        } else {
            html.classList.remove('dark');
            darkIcon.innerText = 'dark_mode';
        }

        function toggleDarkMode() {
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                localStorage.theme = 'light';
                darkIcon.innerText = 'dark_mode';
            } else {
                html.classList.add('dark');
                localStorage.theme = 'dark';
                darkIcon.innerText = 'light_mode';
            }
        }
    </script>
</body>
</html>