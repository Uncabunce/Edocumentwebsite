<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Tanda Tangan Digital Balikpapan - Keamanan Identitas Digital</title>
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
<div class="flex items-center gap-2 text-primary">
<span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 1">verified</span>
<span class="text-xl font-extrabold tracking-tight capitalize">SignaturBP</span>
</div>
</div>
<div class="hidden md:flex items-center gap-8">
<a class="text-blue-900 font-semibold border-b-2 border-emerald-500 pb-1 font-medium transition-colors" href="#">Beranda</a>
<a class="text-slate-600 font-medium hover:text-blue-700 transition-colors" href="#">Layanan</a>
<a class="text-slate-600 font-medium hover:text-blue-700 transition-colors" href="#">Panduan</a>
</div>
<div class="flex items-center gap-4">
<button class="hidden sm:block text-on-primary-fixed-variant font-medium px-4 py-2 hover:underline">Verifikasi Dokumen</button>
<button class="bg-primary hover:bg-primary-container text-white px-6 py-2.5 rounded-xl font-semibold transition-all shadow-md">Mulai</button>
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
<span class="inline-block px-3 py-1 bg-secondary-container text-on-secondary-container text-xs font-bold tracking-widest uppercase rounded-full mb-8">Resmi &amp; Terenkripsi</span>
<h1 class="text-5xl lg:text-8xl font-extrabold text-white leading-tight tracking-tighter mb-8">
                    Keabsahan Hukum dalam Genggaman Digital.
                </h1>
<p class="text-xl lg:text-2xl text-on-primary-container leading-relaxed mb-12 max-w-2xl mx-auto">
                    Solusi tanda tangan elektronik tersertifikasi untuk Pemerintah Kota Balikpapan. Percepat birokrasi dengan keamanan standar nasional.
                </p>
<div class="flex flex-wrap justify-center gap-6">
<button class="px-10 py-5 bg-secondary text-white rounded-xl font-bold flex items-center gap-3 hover:shadow-2xl hover:scale-105 transition-all">
<span class="material-symbols-outlined">edit_document</span>
                        Mulai Tanda Tangan
                    </button>
<button class="px-10 py-5 bg-white/10 text-white border border-white/20 rounded-xl font-bold backdrop-blur-sm hover:bg-white/20 hover:scale-105 transition-all">
                        Cek Dokumen
                    </button>
</div>
</div>
</div>
</section>
<!-- Keunggulan (Bento Grid) -->
<section class="py-24 bg-surface">
<div class="max-w-7xl mx-auto px-6">
<div class="mb-16">
<p class="text-secondary font-bold tracking-widest uppercase text-sm mb-2">Mengapa Kami</p>
<h2 class="text-4xl font-extrabold text-primary tracking-tight">Keunggulan Layanan</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="md:col-span-2 bg-surface-container-low p-10 rounded-2xl flex flex-col justify-between border-l-4 border-secondary">
<div>
<div class="w-12 h-12 bg-secondary/10 text-secondary rounded-lg flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-3xl" data-weight="fill">verified_user</span>
</div>
<h3 class="text-2xl font-bold text-primary mb-4">Sertifikasi Elektronik Nasional</h3>
<p class="text-on-surface-variant text-lg leading-relaxed max-w-md">
                            Menjamin integritas dokumen dan identitas penandatangan dengan standar keamanan tingkat tinggi yang diakui secara hukum di Indonesia.
                        </p>
</div>
<div class="mt-8 flex gap-2">
<span class="px-3 py-1 bg-surface-container-highest rounded-full text-xs font-semibold text-primary">BSRE Certified</span>
<span class="px-3 py-1 bg-surface-container-highest rounded-full text-xs font-semibold text-primary">UU ITE Compliance</span>
</div>
</div>
<div class="bg-primary text-white p-10 rounded-2xl">
<div class="w-12 h-12 bg-white/10 text-secondary-fixed rounded-lg flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-3xl">bolt</span>
</div>
<h3 class="text-2xl font-bold mb-4">Efisiensi Tanpa Batas</h3>
<p class="text-blue-100/70 text-lg leading-relaxed">
                        Proses penandatanganan hitungan detik, di mana saja, kapan saja tanpa perlu tatap muka.
                    </p>
</div>
<div class="bg-surface-container-lowest p-10 rounded-2xl shadow-sm border border-outline-variant/20">
<div class="w-12 h-12 bg-secondary-container/30 text-secondary rounded-lg flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-3xl">cloud_done</span>
</div>
<h3 class="text-xl font-bold text-primary mb-3">Arsip Terpusat</h3>
<p class="text-on-surface-variant leading-relaxed">
                        Penyimpanan dokumen digital yang aman dan mudah diakses kembali untuk kebutuhan audit.
                    </p>
</div>
<div class="md:col-span-2 bg-surface-container-high p-10 rounded-2xl flex items-center gap-8 overflow-hidden relative">
<div class="relative z-10 w-full md:w-1/2">
<h3 class="text-2xl font-bold text-primary mb-4">Ramah Lingkungan</h3>
<p class="text-on-surface-variant text-lg">
                            Kurangi penggunaan kertas dan dukung inisiatif Smart City Balikpapan menuju masa depan hijau.
                        </p>
</div>
<div class="absolute right-0 top-0 h-full w-1/2 hidden md:block">
<img class="h-full w-full object-cover opacity-40 mix-blend-multiply" data-alt="a lush green urban park with modern white buildings in the background under clear blue skies representing a sustainable city" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3WJ3LdjMFaqvxECP4kZva98m38neoQOONRvSv7nz1GUHzB01QiSC1Y_D4p0ncDrfxmZ5iFDE3vhLlC9fLasJ0Pg7v99BFyUcokXeZCWruQISTubsoD9zkQuIsLsPSu9Py06Sr3XNlJWGNeAwlHfQfYf5HW3pK4ZbeUPqN8c5ULMxaf7arPytWprBoZjdVszYMzbxVeIGcyawlLGq7dBcBD7tsTbm8n4hKMN8EYrf5wT8NsGFevv9MAwj3guuU4bJi2VRnPxOzjJ--"/>
</div>
</div>
</div>
</div>
</section>
<!-- Cara Kerja (Step Visual) -->
<section class="py-24 bg-surface-container-low">
<div class="max-w-7xl mx-auto px-6 text-center">
<div class="max-w-2xl mx-auto mb-20">
<h2 class="text-4xl font-extrabold text-primary mb-6">Hanya dengan 3 Langkah</h2>
<p class="text-on-surface-variant text-lg">Prosedur sederhana untuk menjamin keamanan dokumen Anda secara legal.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-12">
<div class="relative">
<div class="w-20 h-20 bg-primary text-white rounded-2xl flex items-center justify-center mx-auto mb-8 shadow-xl">
<span class="material-symbols-outlined text-4xl">upload_file</span>
</div>
<h4 class="text-xl font-bold text-primary mb-4">1. Unggah Dokumen</h4>
<p class="text-on-surface-variant">Unggah berkas PDF yang ingin Anda tanda tangani ke sistem kami yang aman.</p>
<div class="hidden md:block absolute top-10 -right-6 text-outline-variant">
<span class="material-symbols-outlined text-4xl">trending_flat</span>
</div>
</div>
<div class="relative">
<div class="w-20 h-20 bg-secondary text-white rounded-2xl flex items-center justify-center mx-auto mb-8 shadow-xl">
<span class="material-symbols-outlined text-4xl">fingerprint</span>
</div>
<h4 class="text-xl font-bold text-primary mb-4">2. Verifikasi Identitas</h4>
<p class="text-on-surface-variant">Gunakan passphrase atau biometrik untuk memverifikasi identitas digital Anda.</p>
<div class="hidden md:block absolute top-10 -right-6 text-outline-variant">
<span class="material-symbols-outlined text-4xl">trending_flat</span>
</div>
</div>
<div>
<div class="w-20 h-20 bg-primary-container text-white rounded-2xl flex items-center justify-center mx-auto mb-8 shadow-xl">
<span class="material-symbols-outlined text-4xl">download_done</span>
</div>
<h4 class="text-xl font-bold text-primary mb-4">3. Unduh &amp; Selesai</h4>
<p class="text-on-surface-variant">Dokumen terverifikasi siap diunduh dan dibagikan dengan kekuatan hukum penuh.</p>
</div>
</div>
</div>
</section>
<!-- Statistik -->
<section class="py-24 bg-primary text-white overflow-hidden relative">
<div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-12">
<div class="md:w-1/2">
<h2 class="text-4xl font-extrabold mb-6 leading-tight">Kepercayaan Publik dalam Angka</h2>
<p class="text-blue-100/70 text-xl mb-8">Pemerintah Kota Balikpapan terus bertransformasi menuju pelayanan publik digital yang prima.</p>
<button class="px-8 py-3 bg-white text-primary rounded-xl font-bold hover:bg-blue-50 transition-colors">Lihat Laporan Transparansi</button>
</div>
<div class="md:w-1/2 grid grid-cols-2 gap-4">
<div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/10 text-center">
<p class="text-4xl lg:text-5xl font-black text-secondary-fixed mb-2">25K+</p>
<p class="text-sm font-bold uppercase tracking-widest text-blue-200">Dokumen Terverifikasi</p>
</div>
<div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/10 text-center">
<p class="text-4xl lg:text-5xl font-black text-secondary-fixed mb-2">12K+</p>
<p class="text-sm font-bold uppercase tracking-widest text-blue-200">Pengguna Aktif</p>
</div>
<div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/10 text-center">
<p class="text-4xl lg:text-5xl font-black text-secondary-fixed mb-2">99.9%</p>
<p class="text-sm font-bold uppercase tracking-widest text-blue-200">Uptime Layanan</p>
</div>
<div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/10 text-center">
<p class="text-4xl lg:text-5xl font-black text-secondary-fixed mb-2">0</p>
<p class="text-sm font-bold uppercase tracking-widest text-blue-200">Pelanggaran Data</p>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="py-24 bg-surface">
<div class="max-w-5xl mx-auto px-6">
<div class="bg-surface-container-high rounded-3xl p-12 text-center relative overflow-hidden">
<div class="absolute top-0 right-0 w-64 h-64 bg-secondary/5 rounded-full -mr-32 -mt-32"></div>
<h2 class="text-3xl md:text-5xl font-black text-primary mb-6">Siap Mengamankan Dokumen Anda?</h2>
<p class="text-on-surface-variant text-xl mb-10 max-w-2xl mx-auto">Gabung dengan ribuan aparatur dan warga yang telah beralih ke tanda tangan digital yang sah.</p>
<div class="flex flex-col sm:flex-row justify-center gap-4">
<button class="px-10 py-4 bg-primary text-white rounded-xl font-bold shadow-lg hover:-translate-y-1 transition-all">Daftar Sekarang</button>
<button class="px-10 py-4 bg-surface-container-lowest text-primary border border-outline-variant/30 rounded-xl font-bold hover:bg-white transition-all">Pelajari Panduan</button>
</div>
</div>
</div>
</section>
</main>
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