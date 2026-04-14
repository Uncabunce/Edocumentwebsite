<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Verifikasi Dokumen - Tanda Tangan Digital Balikpapan</title>
<link rel="icon" type="png" href="{{ asset('images/bpn_logo.png') }}">
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "inverse-surface": "#2c3137",
                        "on-secondary-fixed-variant": "#005137",
                        "primary": "#001e40",
                        "on-secondary-fixed": "#002114",
                        "primary-fixed-dim": "#a7c8ff",
                        "surface": "#f8f9ff",
                        "surface-container-low": "#f0f4fd",
                        "surface-dim": "#d6dae3",
                        "tertiary": "#002316",
                        "secondary-container": "#82f5c1",
                        "on-surface": "#171c22",
                        "on-tertiary-fixed": "#002114",
                        "secondary-fixed": "#85f8c4",
                        "error": "#ba1a1a",
                        "on-surface-variant": "#43474f",
                        "on-primary-fixed": "#001b3c",
                        "surface-container-highest": "#dee3eb",
                        "secondary": "#006c4a",
                        "on-primary": "#ffffff",
                        "on-secondary-container": "#00714e",
                        "secondary-fixed-dim": "#68dba9",
                        "surface-container-lowest": "#ffffff",
                        "surface-tint": "#3a5f94",
                        "surface-container-high": "#e4e8f1",
                        "background": "#f8f9ff",
                        "primary-container": "#003366",
                        "outline": "#737780",
                        "on-secondary": "#ffffff",
                        "surface-bright": "#f8f9ff",
                        "tertiary-container": "#003b27",
                        "surface-variant": "#dee3eb",
                        "on-primary-container": "#799dd6",
                        "tertiary-fixed": "#85f8c4",
                        "inverse-primary": "#a7c8ff",
                        "inverse-on-surface": "#edf1fa",
                        "error-container": "#ffdad6",
                        "tertiary-fixed-dim": "#68dba9",
                        "on-error-container": "#93000a",
                        "surface-container": "#eaeef7",
                        "on-tertiary-container": "#35ae7f",
                        "on-tertiary-fixed-variant": "#005137",
                        "primary-fixed": "#d5e3ff",
                        "outline-variant": "#c3c6d1",
                        "on-tertiary": "#ffffff",
                        "on-primary-fixed-variant": "#1f477b",
                        "on-background": "#171c22",
                        "on-error": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "fontFamily": {
                        "headline": ["Public Sans"],
                        "body": ["Public Sans"],
                        "label": ["Public Sans"]
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
        body { font-family: 'Public Sans', sans-serif; }
    </style>
</head>
<body class="bg-background text-on-surface flex flex-col min-h-screen">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-white/85 dark:bg-slate-900/85 backdrop-blur-xl shadow-sm h-20">
<div class="flex justify-between items-center max-w-7xl mx-auto px-6 h-full">
<div class="flex items-center gap-2">
<img src="images\bpn_logo.png" alt="Logo Komdigi" class="h-12 w-auto object-contain">
<span class="text-xl font-extrabold tracking-tight capitalize">ESign Balikpapan</span>
</div>
<div class="hidden md:flex gap-8 items-center">
<a class="text-slate-600 dark:text-slate-400 font-medium hover:text-blue-700 dark:hover:text-blue-300 transition-colors" href="http://edocumentweb.test">Beranda</a>
<a class="text-slate-600 dark:text-slate-400 font-medium hover:text-blue-700 dark:hover:text-blue-300 transition-colors" href="#">Layanan</a>
<a class="text-slate-600 dark:text-slate-400 font-medium hover:text-blue-700 dark:hover:text-blue-300 transition-colors" href="#">Panduan</a>
<div class="flex gap-4 items-center ml-4">
<button class="text-blue-900 dark:text-white font-semibold border-b-2 border-emerald-500 pb-1 hover:text-blue-700 transition-colors">Verifikasi Dokumen</button>
<button class="bg-primary hover:bg-primary-container text-on-primary px-6 py-2 rounded-lg font-semibold transition-all shadow-md">Login</button>
</div>
</div>
</div>
</nav>
<!-- Main Content Canvas -->
<main class="flex-grow pt-32 pb-16 px-6">
<div class="max-w-4xl mx-auto">
<!-- Hero Header Section -->
<header class="text-center mb-12">
<span class="text-secondary font-bold tracking-widest text-[10px] uppercase block mb-3">KEAMANAN DIGITAL</span>
<h1 class="text-4xl md:text-5xl font-extrabold text-primary tracking-tight mb-4">Validasi Keaslian Dokumen</h1>
<p class="text-on-surface-variant max-w-2xl mx-auto text-lg leading-relaxed">
                    Unggah dokumen PDF bertanda tangan elektronik Anda untuk memverifikasi integritas data dan identitas penandatangan secara instan.
                </p>
</header>
<!-- Verification Bento Grid Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
<!-- Central Upload Card -->
<div class="lg:col-span-8 bg-surface-container-lowest rounded-xl shadow-sm p-8 flex flex-col relative overflow-hidden group">
<div class="absolute top-0 left-0 w-1 h-full bg-secondary"></div>
<div class="mb-6 flex justify-between items-start">
<div>
<h2 class="text-xl font-bold text-primary">Panel Unggah PDF</h2>
<p class="text-sm text-on-surface-variant">Pastikan dokumen dalam format PDF standar.</p>
</div>
<div class="bg-surface-container-high p-2 rounded-lg">
<span class="material-symbols-outlined text-primary" data-icon="description">description</span>
</div>
</div>
<!-- Drop Zone -->
<div class="border-2 border-dashed border-outline-variant/40 rounded-xl p-12 bg-surface-container-low transition-all hover:bg-surface-container-high/50 flex flex-col items-center justify-center text-center cursor-pointer">
<div class="w-20 h-20 bg-surface-container-lowest rounded-full flex items-center justify-center mb-6 shadow-sm">
<span class="material-symbols-outlined text-primary text-4xl" data-icon="cloud_upload">cloud_upload</span>
</div>
<h3 class="text-lg font-bold text-primary mb-2">Tarik &amp; Lepas File Di Sini</h3>
<p class="text-on-surface-variant mb-6">Atau klik untuk menelusuri dari perangkat Anda</p>
<button class="bg-primary text-on-primary px-8 py-3 rounded-lg font-bold flex items-center gap-2 transition-all hover:scale-[1.02] active:scale-[0.98]">
                            Pilih Dokumen
                            <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
<div class="mt-6 flex items-center gap-4 text-xs text-on-surface-variant">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]" data-icon="lock" style="font-variation-settings: 'FILL' 1;">lock</span> Enkripsi SSL 256-bit</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]" data-icon="verified_user">verified_user</span> Standar BSSN</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]" data-icon="delete">delete</span> Dokumen dihapus otomatis</span>
</div>
</div>
<!-- Info/Status Side Card -->
<div class="lg:col-span-4 flex flex-col gap-6">
<!-- Quick Statistics / Integrity Check -->
<div class="bg-surface-container-low rounded-xl p-6 flex flex-col justify-between">
<div>
<h3 class="text-sm font-bold text-primary uppercase tracking-wider mb-4">Informasi Sistem</h3>
<div class="space-y-4">
<div class="flex justify-between items-center border-b border-outline-variant/20 pb-3">
<span class="text-on-surface-variant text-sm">Waktu Server</span>
<span class="text-primary font-bold text-sm">14:22:10 WITA</span>
</div>
<div class="flex justify-between items-center border-b border-outline-variant/20 pb-3">
<span class="text-on-surface-variant text-sm">Status CA</span>
<span class="flex items-center gap-1 text-secondary font-bold text-sm">
                                        Aktif <span class="w-2 h-2 rounded-full bg-secondary"></span>
</span>
</div>
<div class="flex justify-between items-center">
<span class="text-on-surface-variant text-sm">Kecepatan Verifikasi</span>
<span class="text-primary font-bold text-sm">&lt; 2 Detik</span>
</div>
</div>
</div>
</div>
<!-- Security Banner -->
<div class="bg-primary text-on-primary rounded-xl p-6 relative overflow-hidden">
<div class="relative z-10">
<span class="material-symbols-outlined text-3xl mb-4" data-icon="gpp_maybe">gpp_maybe</span>
<h3 class="font-bold mb-2">Periksa Keaslian</h3>
<p class="text-xs text-on-primary-container leading-relaxed">
                                Pastikan segel biru atau barcode terlihat jelas di bagian bawah dokumen digital Anda.
                            </p>
</div>
<div class="absolute -right-8 -bottom-8 opacity-10">
<span class="material-symbols-outlined text-[120px]" data-icon="security" style="font-variation-settings: 'FILL' 1;">security</span>
</div>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-slate-50 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800 w-full mt-auto">
<div class="max-w-7xl mx-auto px-8 py-12 flex flex-col md:flex-row justify-between gap-8 font-public-sans text-sm leading-relaxed">
<div class="flex flex-col gap-4">
<div class="font-bold text-blue-900 dark:text-white text-lg">Tanda Tangan Digital</div>
<p class="max-w-xs text-slate-500 dark:text-slate-400">
                    Layanan resmi Pemerintah Kota Balikpapan untuk otentikasi dan integritas dokumen digital yang berlandaskan hukum.
                </p>
<p class="text-slate-500 dark:text-slate-400 mt-4 italic">
                    © 2024 Pemerintah Kota Balikpapan. Hak Cipta Dilindungi Undang-Undang.
                </p>
</div>
<div class="grid grid-cols-2 gap-x-12 gap-y-4">
<a class="text-slate-500 dark:text-slate-400 hover:text-emerald-500 underline transition-all" href="#">Undang-Undang ITE</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-emerald-500 underline transition-all" href="#">PP Penyelenggaraan Sistem Elektronik</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-emerald-500 underline transition-all" href="#">Kebijakan Privasi</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-emerald-500 underline transition-all" href="#">Kontak Resmi</a>
</div>
</div>
</footer>
</body></html>