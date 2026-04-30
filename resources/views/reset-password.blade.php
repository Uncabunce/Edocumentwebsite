<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Lupa Kata Sandi - ESign Balikpapan</title>
    <link rel="icon" type="png" href="{{ asset('images/bpn_logo.png') }}">
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
                        "secondary": "#CA8A04",
                        "dark-bg": "#0a0f18",
                        "dark-card": "#151b28",
                        "dark-input": "#1e2533"
                    },
                    fontFamily: {
                        "display": ["Public Sans"],
                        "body": ["Public Sans"]
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .civic-gradient {
            background: linear-gradient(135deg, #001e40 0%, #003366 100%);
        }
        .dark .civic-gradient {
            background: linear-gradient(135deg, #111827 0%, #1e293b 100%);
        }
        body { transition: background-color 0.3s ease; }
    </style>
</head>

<body class="bg-[#f8f9ff] dark:bg-dark-bg text-slate-900 dark:text-white min-h-[100dvh] flex flex-col transition-colors duration-300">

    <div class="fixed inset-0 z-[-1] opacity-30 dark:opacity-20 overflow-hidden pointer-events-none">
        <div class="absolute top-[-10%] right-[-10%] w-[60%] h-[60%] rounded-full bg-blue-400/20 blur-[120px]"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[50%] h-[50%] rounded-full bg-emerald-400/20 blur-[120px]"></div>
    </div>

    <main class="flex-grow flex items-center justify-center px-4 py-8 md:px-6 md:py-12 relative">
        <div class="w-full max-w-lg">
            
            <div class="text-center mb-8 md:mb-10">
                <div class="inline-flex items-center justify-center mb-4">
                    <div class="w-14 h-14 md:w-16 md:h-16 rounded-2xl civic-gradient flex items-center justify-center shadow-xl shadow-primary/20">
                        <span class="material-symbols-outlined text-white text-3xl md:text-4xl" style="font-variation-settings: 'FILL' 1;">fingerprint</span>
                    </div>
                </div>
                <h2 class="text-primary dark:text-white font-display font-extrabold text-xl md:text-2xl tracking-tighter uppercase">ESign Balikpapan</h2>
                <div class="h-1 w-10 bg-secondary mx-auto mt-2 rounded-full"></div>
            </div>

            <div class="bg-white dark:bg-dark-card rounded-[2rem] shadow-2xl shadow-slate-200/50 dark:shadow-none border border-transparent dark:border-white/5 p-6 md:p-12 relative overflow-hidden">
                <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-secondary"></div>
                
                <header class="mb-8">
                    <h1 class="text-slate-900 dark:text-white font-display font-extrabold text-2xl md:text-3xl tracking-tight mb-3">Lupa Kata Sandi?</h1>
                    <p class="text-slate-500 dark:text-slate-400 leading-relaxed text-sm md:text-base">
                        Jangan khawatir. Masukkan email atau NIK Anda untuk menerima instruksi pemulihan.
                    </p>
                </header>

                <form class="space-y-6" onsubmit="return false;">
                    <div class="space-y-2">
                        <label class="block text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-widest px-1" for="recovery-identity">
                            Email atau NIK
                        </label>
                        <div class="relative group">
                            <input class="w-full bg-slate-50 dark:bg-dark-input border-2 border-transparent rounded-2xl py-4 px-5 pr-12 text-slate-900 dark:text-white focus:ring-4 focus:ring-primary/5 focus:bg-white dark:focus:bg-dark-input focus:border-primary dark:focus:border-secondary transition-all placeholder:text-slate-400" 
                                   id="recovery-identity" 
                                   name="recovery-identity" 
                                   placeholder="Contoh: 6471012345678901" 
                                   type="text"/>
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-slate-400 group-focus-within:text-primary dark:group-focus-within:text-secondary transition-colors">contact_mail</span>
                        </div>
                    </div>

                    <button class="w-full civic-gradient text-white py-4 px-6 rounded-2xl font-bold tracking-tight shadow-lg shadow-primary/20 hover:shadow-xl active:scale-[0.98] transition-all flex items-center justify-center gap-3 group" type="submit">
                        <span>Kirim Instruksi</span>
                        <span class="material-symbols-outlined text-xl group-hover:translate-x-1 transition-transform" style="font-variation-settings: 'FILL' 1;">send</span>
                    </button>
                </form>

                <div class="mt-10 pt-8 border-t border-slate-100 dark:border-white/5 text-center">
                    <a class="inline-flex items-center gap-2 text-primary dark:text-yellow-400 font-bold text-sm hover:underline group" href="http://edocumentweb.test/auth">
                        <span class="material-symbols-outlined text-lg group-hover:-translate-x-1 transition-transform">arrow_back</span>
                        Kembali ke Log in
                    </a>
                </div>
            </div>

            <p class="mt-8 text-center text-slate-500 dark:text-slate-500 text-xs md:text-sm px-4">
                Butuh bantuan? <a class="text-secondary dark:text-yellow-500 font-bold underline decoration-secondary/30 underline-offset-4" href="#">Hubungi Admin</a>
            </p>
        </div>
    </main>

    <footer class="w-full py-8 bg-white dark:bg-dark-card border-t border-slate-100 dark:border-white/5">
        <div class="flex flex-col md:flex-row justify-between items-center px-8 gap-4 w-full max-w-7xl mx-auto text-center md:text-left">
            <div class="space-y-1">
                <span class="font-bold text-primary dark:text-white">ESign Balikpapan</span>
                <p class="text-[11px] text-slate-400 uppercase tracking-wider">© 2026 Diskominfo Kota Balikpapan</p>
            </div>
            <div class="flex flex-wrap justify-center gap-6">
                <a class="text-xs text-slate-400 hover:text-primary dark:hover:text-white transition-colors" href="#">Pusat Bantuan</a>
                <a class="text-xs text-slate-400 hover:text-primary dark:hover:text-white transition-colors" href="https://www.komdigi.go.id/lainnya/kebijakan-privasi">Privasi</a>
            </div>
        </div>
    </footer>

    <div class="fixed bottom-6 right-6 flex flex-col gap-3">
        <button onclick="toggleDarkMode()" class="w-12 h-12 rounded-full bg-white dark:bg-dark-card shadow-xl flex items-center justify-center text-slate-700 dark:text-yellow-400 border border-slate-100 dark:border-white/10 transition-all hover:scale-110 active:scale-95">
            <span id="dark-icon" class="material-symbols-outlined">dark_mode</span>
        </button>
    </div>

    <script>
        const html = document.documentElement;
        const darkIcon = document.getElementById('dark-icon');

        // Check preference
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