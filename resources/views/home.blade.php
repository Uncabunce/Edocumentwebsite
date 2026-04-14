<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
@vite('resources/css/app.css')
@vite('resources/js/app.js')
<title>Tanda Tangan Digital Balikpapan - Keamanan Identitas Digital</title>
<link rel="icon" type="png" href="{{ asset('images/bpn_logo.png') }}">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
        body { font-family: 'Public Sans', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #001e40 0%, #003366 100%);
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(24px);
        }
    </style>
</head>
<body class="bg-surface text-on-surface selection:bg-secondary-container selection:text-on-secondary-container">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-white/85 backdrop-blur-xl shadow-sm">
<div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
<div class="text-lg font-bold text-blue-900 uppercase tracking-wider font-headline">
<div class="flex items-center gap-2">
<img src="images\bpn_logo.png" alt="Logo Komdigi" class="h-12 w-auto object-contain">
<span class="text-xl font-extrabold tracking-tight capitalize">ESign Balikpapan</span>
</div>
</div>
<div class="flex items-center gap-4">
<button class="hidden sm:block text-on-primary-fixed-variant font-medium px-4 py-2 hover:underline">FAQ</button>
<button class="bg-primary hover:bg-primary-container text-white px-6 py-2.5 rounded-xl font-semibold transition-all shadow-md">Login</button>
</div>
</div>
</nav>
<main class="pt-20">
<!-- Hero Section -->
<section class="relative overflow-hidden bg-primary py-24 lg:py-40">
<div class="absolute inset-0 opacity-20">
<img class="w-full h-full object-cover" data-alt="abstract architectural geometry of a modern government building with sharp lines and blue sky reflecting in glass windows" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5qRapTEtV4CZX-gdB7wc3ETCzbqN6pYZmguXa0RwTn8DybYDAvM2-dHSISgN9THzyNqSGMddYfZXALeJeqTMD7P3daD-fQUlZwfyRPzgwXaERkXlaLzDwAfLB6yJACWnTTIrDwDaQiSotBAoDLcokYseSCeM6GZ1EAXcnDwRExIaN3LtQ5z2alL1c3A31uG5Ieg4F25K09HScCCfwazXYKPwHcrfywK1wEBoXVSNHQqsibkxMMyYcjn1bAFudvXd_RcVMP1C7ITBb"/>
</div>
<div class="max-w-7xl mx-auto px-6 relative z-10 flex flex-col items-center text-center">
<div class="max-w-4xl">
<h1 class="text-5xl lg:text-8xl font-extrabold text-white leading-tight tracking-tighter mb-8">
                    Tanda tangan dengan mudah di ESign Balikpapan.
                </h1>
<p class="text-xl lg:text-2xl text-on-primary-container leading-relaxed mb-12 max-w-2xl mx-auto">
                    Solusi tanda tangan elektronik tersertifikasi untuk Pemerintah Kota Balikpapan. Percepat birokrasi dengan keamanan standar nasional.
                </p>
<div class="flex flex-wrap justify-center gap-6">
<button class="px-10 py-5 bg-secondary text-white rounded-xl font-bold flex items-center gap-3 hover:shadow-2xl hover:scale-105 transition-all">
<span class="material-symbols-outlined">edit_document</span>
                        Mulai Verifikasi
                    </button>
<button class="px-10 py-5 bg-white/10 text-white border border-white/20 rounded-xl font-bold backdrop-blur-sm hover:bg-white/20 hover:scale-105 transition-all">
                        Cek Panduan
                    </button>
</div>
</div>
</div>
</section>

<!-- Footer -->
<footer class="bg-slate-50 border-t border-slate-200 w-full mt-auto">
<div class="max-w-7xl mx-auto px-8 py-12 flex flex-col md:flex-row justify-between gap-8">
<div class="max-w-xs">
<div class="font-bold text-blue-900 mb-4 font-headline uppercase tracking-wider">Tanda Tangan Digital Balikpapan</div>
<p class="text-slate-500 text-sm leading-relaxed mb-6">Layanan sertifikasi elektronik resmi di bawah Dinas Komunikasi dan Informatika Pemerintah Kota Balikpapan.</p>
<div class="flex gap-4">
<span class="w-8 h-8 bg-slate-200 rounded-full flex items-center justify-center text-slate-600 material-symbols-outlined text-sm">public</span>
<span class="w-8 h-8 bg-slate-200 rounded-full flex items-center justify-center text-slate-600 material-symbols-outlined text-sm">mail</span>
</div>
</div>
<div class="grid grid-cols-2 gap-12">
<div>
<h5 class="text-primary font-bold text-sm mb-6 uppercase tracking-widest">Legalitas</h5>
<ul class="space-y-4">
<li><a class="text-slate-500 text-sm hover:text-emerald-500 underline transition-all" href="#">Undang-Undang ITE</a></li>
<li><a class="text-slate-500 text-sm hover:text-emerald-500 underline transition-all" href="#">PP Penyelenggaraan Sistem Elektronik</a></li>
<li><a class="text-slate-500 text-sm hover:text-emerald-500 underline transition-all" href="#">Kebijakan Privasi</a></li>
</ul>
</div>
<div>
<h5 class="text-primary font-bold text-sm mb-6 uppercase tracking-widest">Bantuan</h5>
<ul class="space-y-4">
<li><a class="text-slate-500 text-sm hover:text-emerald-500 underline transition-all" href="#">Kontak Resmi</a></li>
<li><a class="text-slate-500 text-sm hover:text-emerald-500 underline transition-all" href="#">Pusat Bantuan</a></li>
<li><a class="text-slate-500 text-sm hover:text-emerald-500 underline transition-all" href="#">FAQ</a></li>
</ul>
</div>
</div>
</div>
<div class="max-w-7xl mx-auto px-8 py-6 border-t border-slate-100 flex justify-between items-center text-slate-500 text-xs">
<p>© 2024 Pemerintah Kota Balikpapan. Hak Cipta Dilindungi Undang-Undang.</p>
<p>Versi 2.4.0</p>
</div>
</footer>
</body></html>