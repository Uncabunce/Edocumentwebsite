<!DOCTYPE html>
<html lang="id" id="root-html">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Tanda Tangan Digital Balikpapan - Keamanan Identitas Digital</title>
<link rel="icon" type="png" href="{{ asset('images/bpn_logo.png') }}">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
  tailwind.config = {
    darkMode: "class",
    theme: {
      extend: {
        "colors": {
          "inverse-surface": "#2c3137",
          "on-secondary-fixed-variant": "#005137",
          "primary": "#00326A",
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
          "secondary": "#CA8A04",
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
          "headline": ["Plus Jakarta Sans"],
          "body": ["Plus Jakarta Sans"],
          "label": ["Plus Jakarta Sans"]
        }
      },
    },
  }
</script>
<style>
  body { font-family: 'Plus Jakarta Sans', sans-serif; transition: background-color 0.3s, color 0.3s; }
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

  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  @keyframes fadeIn {
    from { opacity: 0; }
    to   { opacity: 1; }
  }

  .anim-fade-up {
    opacity: 0;
    animation: fadeUp 0.7s cubic-bezier(0.22, 1, 0.36, 1) forwards;
  }
  .anim-fade-in {
    opacity: 0;
    animation: fadeIn 0.6s ease forwards;
  }

  .delay-1 { animation-delay: 0.10s; }
  .delay-2 { animation-delay: 0.25s; }
  .delay-3 { animation-delay: 0.40s; }
  .delay-4 { animation-delay: 0.55s; }

  nav {
    transition: background 0.35s ease, box-shadow 0.35s ease, backdrop-filter 0.35s ease;
  }
  nav.scrolled {
    background: rgba(255,255,255,0.97) !important;
    box-shadow: 0 2px 16px rgba(0,30,64,0.10);
  }
  .dark nav.scrolled {
    background: rgba(23, 28, 34, 0.95) !important;
    box-shadow: 0 4px 20px rgba(0,0,0,0.4);
  }

  nav button, nav a {
    transition: color 0.2s ease, opacity 0.2s ease;
  }

  .hero-btn-primary {
    transition: transform 0.22s cubic-bezier(0.22,1,0.36,1),
                box-shadow 0.22s ease,
                background 0.2s ease;
  }
  .hero-btn-primary:hover {
    transform: translateY(-2px) scale(1.03);
    box-shadow: 0 12px 32px rgba(0,108,74,0.35);
  }
  .hero-btn-primary:active { transform: scale(0.97); }

  .hero-btn-ghost {
    transition: transform 0.22s cubic-bezier(0.22,1,0.36,1),
                background 0.2s ease,
                border-color 0.2s ease;
  }
  .hero-btn-ghost:hover {
    transform: translateY(-2px) scale(1.03);
    background: rgba(255,255,255,0.22);
  }
  .hero-btn-ghost:active { transform: scale(0.97); }

  .nav-login-btn {
    transition: transform 0.2s cubic-bezier(0.22,1,0.36,1),
                box-shadow 0.2s ease,
                background 0.2s ease;
  }
  .nav-login-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 6px 18px rgba(0,30,64,0.25);
  }
  .nav-login-btn:active { transform: scale(0.96); }

  .reveal {
    opacity: 0;
    transform: translateY(32px);
    transition: opacity 0.65s cubic-bezier(0.22,1,0.36,1),
                transform 0.65s cubic-bezier(0.22,1,0.36,1);
  }
  .reveal.visible {
    opacity: 1;
    transform: translateY(0);
  }
  @keyframes crossFade {
    0% { opacity: 0; }
    5% { opacity: 1; }
    20% { opacity: 1; }
    25% { opacity: 0; }
    100% { opacity: 0; }
  }

  .hero-img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-cover: cover;
    opacity: 0;
    animation: crossFade 20s linear infinite;
  }

  .img-1 { animation-delay: 0s; }
  .img-2 { animation-delay: 5s; }
  .img-3 { animation-delay: 10s; }
  .img-4 { animation-delay: 15s; }

  nav.scrolled { background: rgba(255,255,255,0.97) !important; box-shadow: 0 2px 16px rgba(0,30,64,0.10); }
  .dark nav.scrolled { background: rgba(23, 28, 34, 0.95) !important; box-shadow: 0 4px 20px rgba(0,0,0,0.4); }

  .hero-btn-primary:hover { transform: translateY(-2px) scale(1.03); box-shadow: 0 12px 32px rgba(202,138,4,0.35); }
  .reveal { opacity: 0; transform: translateY(32px); transition: all 0.65s cubic-bezier(0.22,1,0.36,1); }
  .reveal.visible { opacity: 1; transform: translateY(0); }

  footer a { transition: color 0.2s ease; }
</style>
</head>
<body class="bg-surface text-on-surface dark:bg-inverse-surface dark:text-surface-container-lowest selection:bg-secondary-container selection:text-on-secondary-container">

<nav id="navbar" class="fixed top-0 w-full z-50 bg-white/85 dark:bg-on-surface/90 backdrop-blur-xl shadow-sm">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 h-20 flex justify-between items-center gap-2">
    
    <div class="anim-fade-in delay-1 flex items-center gap-2 flex-shrink-0">
      <img src="images/bpn_logo.png" alt="Logo" class="h-8 sm:h-10 md:h-12 w-auto object-contain">
      <span class="text-sm sm:text-lg md:text-xl font-extrabold tracking-tight capitalize text-blue-900 dark:text-primary-fixed-dim whitespace-nowrap">
        ESign Balikpapan
      </span>
    </div>

    <div class="anim-fade-in delay-2 flex items-center gap-1 sm:gap-4 flex-shrink-0">
      <button id="dark-mode-toggle" class="p-2 rounded-full hover:bg-surface-container-high dark:hover:bg-primary-container transition-colors flex items-center justify-center">
        <span id="dark-mode-icon" class="material-symbols-outlined text-primary dark:text-white text-xl sm:text-2xl">dark_mode</span>
      </button>

      <a href="#faq-section">
        <button class="text-on-primary-fixed-variant dark:text-surface-variant text-xs sm:text-base font-medium px-1 sm:px-4 py-2 hover:text-secondary hover:underline">
          FAQ
        </button>
      </a>
      <a href="http://edocumentweb.test/auth"><button class="nav-login-btn bg-primary dark:bg-secondary hover:bg-primary-container text-white px-3 sm:px-6 py-2 sm:py-2.5 rounded-xl text-xs sm:text-base font-semibold shadow-md">
        Log in
      </button></a>
    </div>
  </div>
</nav>

<main class="pt-20">
  <section class="relative overflow-hidden bg-primary py-24 lg:py-40">
    <div class="absolute inset-0 opacity-25 z-0">
      <img class="hero-img img-1" alt="BPN 1" src="images/fb-img-1544930552936-5c84b5b0ab12ae4d7e24c403.jpg"/>
      <img class="hero-img img-2" alt="BPN 2" src="images/kotabalikpapan.jpg"/>
      <img class="hero-img img-3" alt="BPN 3" src="images/Pemkot-Balikpapan-Rencanakan-Efisiensi-Anggaran-Rp150-Miliar.jpg"/>
      <img class="hero-img img-4" alt="BPN 4" src="images/duskbalikpapan.jpg"/>
    </div>
    <div class="max-w-7xl mx-auto px-6 relative z-20 flex flex-col items-center text-center">
      <div class="max-w-4xl">
        <h1 class="anim-fade-up delay-1 text-4xl sm:text-5xl lg:text-8xl font-extrabold text-white leading-tight tracking-tighter mb-8">
          Tanda tangan dengan mudah di ESign Balikpapan.
        </h1>
        <p class="anim-fade-up delay-2 text-lg sm:text-xl lg:text-2xl text-on-primary-container leading-relaxed mb-12 max-w-2xl mx-auto">
          Solusi tanda tangan elektronik tersertifikasi untuk Pemerintah Kota Balikpapan. Percepat birokrasi dengan keamanan standar nasional.
        </p>
        <div class="anim-fade-up delay-3 flex flex-wrap justify-center gap-4 sm:gap-6">
          <a href="http://edocumentweb.test/verification" class="w-full sm:w-auto">
            <button class="hero-btn-primary w-full px-10 py-5 bg-secondary text-white rounded-xl font-bold flex items-center justify-center gap-3">
              <span class="material-symbols-outlined">edit_document</span>
              Mulai Verifikasi
            </button>
          </a>
          <a href="http://edocumentweb.test/guide"><button class="hero-btn-ghost w-full sm:w-auto px-10 py-5 bg-white/10 text-white border border-white/20 rounded-xl font-bold backdrop-blur-sm">
            Cek Panduan
          </button></a>
        </div>
      </div>
    </div>
  </section>

<section id="faq-section" class="py-24 bg-surface-container-low dark:bg-on-surface/50 relative overflow-hidden">
  <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/4 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
  
  <div class="max-w-7xl mx-auto px-6 relative z-10">
    <div class="flex flex-col lg:flex-row gap-16">
      
      <div class="lg:w-1/3">
        <div class="sticky top-32">
          <span class="inline-block px-4 py-1.5 mb-4 text-xs font-bold tracking-widest text-secondary uppercase bg-secondary/10 rounded-full">
            Bantuan & Dukungan
          </span>
          <h2 class="text-4xl sm:text-5xl font-extrabold text-primary dark:text-primary-fixed-dim tracking-tight mb-6">
            Punya <br class="hidden lg:block">Pertanyaan?
          </h2>
          <p class="text-on-surface-variant dark:text-outline-variant text-lg leading-relaxed mb-8">
            Kami telah merangkum beberapa informasi penting untuk membantu Anda memahami layanan ESign Balikpapan lebih baik.
          </p>
          <div class="p-6 bg-white dark:bg-primary-container/30 rounded-2xl border border-outline-variant/30 shadow-sm">
            <p class="text-sm font-medium text-on-surface mb-3 dark:text-white">Masih butuh bantuan?</p>
            <a href="https://helpdesk.balikpapan.go.id/" class="text-secondary font-bold flex items-center gap-2 hover:gap-3 transition-all">
              Hubungi Helpdesk <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
          </div>
        </div>
      </div>

      <div class="lg:w-2/3 space-y-4">
        
        <details class="group bg-white dark:bg-primary-container/20 rounded-2xl border border-outline-variant/20 shadow-sm transition-all duration-300 hover:border-secondary/50 open:ring-1 open:ring-secondary/30">
          <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
            <div class="flex items-center gap-4">
              <span class="material-symbols-outlined text-secondary bg-secondary/10 p-2 rounded-lg">info</span>
              <h3 class="text-lg font-bold text-primary dark:text-white">Apa itu ESign Balikpapan?</h3>
            </div>
            <span class="material-symbols-outlined text-outline group-open:rotate-180 transition-transform duration-300">expand_more</span>
          </summary>
          <div class="px-6 pb-6 ml-14 text-on-surface-variant dark:text-surface-variant leading-relaxed border-t border-outline-variant/10 pt-4">
            ESIGN adalah sistem tanda tangan elektronik yang memudahkan proses penandatanganan dokumen secara digital di Kota Balikpapan. Dengan ESIGN, Anda dapat menandatangani dokumen dengan mudah, aman, dan cepat tanpa perlu mencetak atau memindai dokumen.
          </div>
        </details>

        <details class="group bg-white dark:bg-primary-container/20 rounded-2xl border border-outline-variant/20 shadow-sm transition-all duration-300 hover:border-secondary/50 open:ring-1 open:ring-secondary/30">
          <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
            <div class="flex items-center gap-4">
              <span class="material-symbols-outlined text-secondary bg-secondary/10 p-2 rounded-lg">gavel</span>
              <h3 class="text-lg font-bold text-primary dark:text-white">Apakah tanda tangan ini sah secara hukum?</h3>
            </div>
            <span class="material-symbols-outlined text-outline group-open:rotate-180 transition-transform duration-300">expand_more</span>
          </summary>
          <div class="px-6 pb-6 ml-14 text-on-surface-variant dark:text-surface-variant leading-relaxed border-t border-outline-variant/10 pt-4">
            Ya, sangat sah. Layanan kami telah sesuai dengan <span class="font-semibold text-primary dark:text-primary-fixed-dim">UU No. 11 Tahun 2008</span> tentang ITE serta <span class="font-semibold text-primary dark:text-primary-fixed-dim">PP No. 71 Tahun 2019</span>. Sertifikat elektronik memiliki kekuatan hukum yang setara dengan tanda tangan basah.
          </div>
        </details>

        <details class="group bg-white dark:bg-primary-container/20 rounded-2xl border border-outline-variant/20 shadow-sm transition-all duration-300 hover:border-secondary/50 open:ring-1 open:ring-secondary/30">
          <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
            <div class="flex items-center gap-4">
              <span class="material-symbols-outlined text-secondary bg-secondary/10 p-2 rounded-lg">verified_user</span>
              <h3 class="text-lg font-bold text-primary dark:text-white">Bagaimana cara memverifikasi dokumen?</h3>
            </div>
            <span class="material-symbols-outlined text-outline group-open:rotate-180 transition-transform duration-300">expand_more</span>
          </summary>
          <div class="px-6 pb-6 ml-14 text-on-surface-variant dark:text-surface-variant leading-relaxed border-t border-outline-variant/10 pt-4">
            Anda dapat menggunakan fitur <span class="italic">"Verifikasi Dokumen"</span> di portal ini dengan mengunggah file PDF. Sistem akan memeriksa validitas sertifikat dan memastikan isi dokumen tidak berubah sejak ditandatangani.
          </div>
        </details>

        <details class="group bg-white dark:bg-primary-container/20 rounded-2xl border border-outline-variant/20 shadow-sm transition-all duration-300 hover:border-secondary/50 open:ring-1 open:ring-secondary/30">
          <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
            <div class="flex items-center gap-4">
              <span class="material-symbols-outlined text-secondary bg-secondary/10 p-2 rounded-lg">payments</span>
              <h3 class="text-lg font-bold text-primary dark:text-white">Apakah layanan ini gratis?</h3>
            </div>
            <span class="material-symbols-outlined text-outline group-open:rotate-180 transition-transform duration-300">expand_more</span>
          </summary>
          <div class="px-6 pb-6 ml-14 text-on-surface-variant dark:text-surface-variant leading-relaxed border-t border-outline-variant/10 pt-4">
            Layanan ini <span class="font-bold text-emerald-600 dark:text-secondary-fixed">GRATIS</span> bagi ASN di lingkungan Pemerintah Kota Balikpapan dan masyarakat untuk kebutuhan administrasi publik tertentu sesuai kebijakan transformasi digital kota.
          </div>
        </details>

        <details class="group bg-white dark:bg-primary-container/20 rounded-2xl border border-outline-variant/20 shadow-sm transition-all duration-300 hover:border-secondary/50 open:ring-1 open:ring-secondary/30">
          <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
            <div class="flex items-center gap-4">
              <span class="material-symbols-outlined text-secondary bg-secondary/10 p-2 rounded-lg">badge</span>
              <h3 class="text-lg font-bold text-primary dark:text-white">Apa yang dibutuhkan untuk mendaftar?</h3>
            </div>
            <span class="material-symbols-outlined text-outline group-open:rotate-180 transition-transform duration-300">expand_more</span>
          </summary>
          <div class="px-6 pb-6 ml-14 text-on-surface-variant dark:text-surface-variant leading-relaxed border-t border-outline-variant/10 pt-4">
            <ul class="list-disc space-y-2">
              <li><span class="font-medium">Warga:</span> KTP-el valid dan nomor ponsel aktif.</li>
              <li><span class="font-medium">ASN:</span> Verifikasi data kepegawaian resmi (Si-ASN/SIMPEG).</li>
            </ul>
          </div>
        </details>

      </div>
    </div>
  </div>
</section>

  <footer class="reveal bg-slate-50 dark:bg-on-surface border-t border-slate-200 dark:border-outline/20 w-full mt-auto">
    <div class="max-w-7xl mx-auto px-8 py-12 flex flex-col md:flex-row justify-between gap-8">
      <div class="max-w-xs">
        <div class="font-bold text-blue-900 dark:text-primary-fixed-dim mb-4 font-headline uppercase tracking-wider">Tanda Tangan Digital Balikpapan</div>
        <p class="text-slate-500 dark:text-outline-variant text-sm leading-relaxed mb-6">Layanan sertifikasi elektronik resmi di bawah Dinas Komunikasi dan Informatika Pemerintah Kota Balikpapan.</p>
        <div class="flex gap-4">
          <span class="w-8 h-8 bg-slate-200 dark:bg-primary-container rounded-full flex items-center justify-center text-slate-600 dark:text-white material-symbols-outlined text-sm cursor-pointer hover:bg-slate-300 transition-colors duration-200">public</span>
          <span class="w-8 h-8 bg-slate-200 dark:bg-primary-container rounded-full flex items-center justify-center text-slate-600 dark:text-white material-symbols-outlined text-sm cursor-pointer hover:bg-slate-300 transition-colors duration-200">mail</span>
        </div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-12">
        <div>
          <h5 class="text-primary dark:text-white font-bold text-sm mb-6 uppercase tracking-widest">Legalitas</h5>
          <ul class="space-y-4">
            <li><a class="text-slate-500 dark:text-outline-variant text-sm hover:text-emerald-500 underline transition-colors duration-200" href="https://peraturan.bpk.go.id/Details/37582/uu-no-19-tahun-2016">Undang-Undang ITE</a></li>
            <li><a class="text-slate-500 dark:text-outline-variant text-sm hover:text-emerald-500 underline transition-colors duration-200" href="https://jdih.komdigi.go.id/produk_hukum/view/id/695/t/peraturan+pemerintah+nomor+71+tahun+2019">PP Penyelenggaraan Sistem Elektronik</a></li>
            <li><a class="text-slate-500 dark:text-outline-variant text-sm hover:text-emerald-500 underline transition-colors duration-200" href="https://www.komdigi.go.id/lainnya/kebijakan-privasi">Kebijakan Privasi</a></li>
          </ul>
        </div>
        <div>
          <h5 class="text-primary dark:text-white font-bold text-sm mb-6 uppercase tracking-widest">Bantuan</h5>
          <ul class="space-y-4">
            <li><a class="text-slate-500 dark:text-outline-variant text-sm hover:text-emerald-500 underline transition-colors duration-200" href="#">Kontak Resmi</a></li>
            <li><a class="text-slate-500 dark:text-outline-variant text-sm hover:text-emerald-500 underline transition-colors duration-200" href="https://helpdesk.balikpapan.go.id/">Pusat Bantuan</a></li>
            <li><a class="text-slate-500 dark:text-outline-variant text-sm hover:text-emerald-500 underline transition-colors duration-200" href="#faq-section">FAQ</a></li>
          </ul> 
        </div>
      </div>
    </div>
    <div class="max-w-7xl mx-auto px-8 py-6 border-t border-slate-100 dark:border-outline/10 flex flex-col sm:flex-row justify-between items-center text-slate-500 dark:text-outline-variant text-xs gap-4">
      <p>© 2026 Pemerintah Kota Balikpapan. Hak Cipta Dilindungi Undang-Undang.</p>
      <p>Versi 0.9.5</p>
    </div>
  </footer>
</main>

<script>
  const darkToggle = document.getElementById('dark-mode-toggle');
  const darkIcon = document.getElementById('dark-mode-icon');
  const htmlRoot = document.getElementById('root-html');

  if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    htmlRoot.classList.add('dark');
    darkIcon.innerText = 'light_mode';
  } else {
    htmlRoot.classList.remove('dark');
    darkIcon.innerText = 'dark_mode';
  }

  darkToggle.addEventListener('click', () => {
    htmlRoot.classList.toggle('dark');
    if (htmlRoot.classList.contains('dark')) {
      localStorage.setItem('theme', 'dark');
      darkIcon.innerText = 'light_mode';
    } else {
      localStorage.setItem('theme', 'light');
      darkIcon.innerText = 'dark_mode';
    }
  });

  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 20);
  }, { passive: true });

  const revealEls = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });
  revealEls.forEach(el => observer.observe(el));
</script>
</body>
</html>