<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Verifikasi Dokumen - Komdigi</title>
    <link rel="icon" type="png" href="images/Logo_Kementerian_Komunikasi_dan_Digital_Republik_Indonesia_(2024_full_version).svg.png">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style>
        /* CSS VARIABLES FOR DARK MODE */
        :root {
            --bg-body: #f8f9ff;
            --bg-card: #ffffff;
            --bg-nav: rgba(255, 255, 255, 0.92);
            --bg-dropzone: #f8f9ff;
            --bg-input-hover: #f0fdf8;
            --bg-badge: #eee;
            --bg-info-row: #f0f4fd;
            --text-main: #171c22;
            --text-primary: #001e40;
            --text-secondary: #43474f;
            --border-color: #e4e8f1;
            --border-drop: #c3c6d1;
            --footer-bg: #f0f4fd;
        }

        .dark {
            --bg-body: #0f172a;
            --bg-card: #1e293b;
            --bg-nav: rgba(15, 23, 42, 0.9);
            --bg-dropzone: #1e293b;
            --bg-input-hover: #0f172a;
            --bg-badge: #334155;
            --bg-info-row: #334155;
            --text-main: #f1f5f9;
            --text-primary: #cbd5e1;
            --text-secondary: #94a3b8;
            --border-color: #334155;
            --border-drop: #475569;
            --footer-bg: #0b1120;
        }

        /* BASE STYLES */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body { 
            font-family: 'Public Sans', sans-serif; 
            background: var(--bg-body); 
            color: var(--text-main); 
            min-height: 100vh; 
            display: flex; 
            flex-direction: column; 
            transition: background 0.3s, color 0.3s;
        }
        
        .page { display: none; flex-direction: column; min-height: 100vh; }
        .page.active { display: flex; }

        /* NAVIGATION */
        nav { 
            background: var(--bg-nav); 
            backdrop-filter: blur(16px); 
            border-bottom: 1px solid var(--border-color); 
            padding: 1rem; 
            display: flex; 
            flex-direction: column;
            align-items: center; 
            gap: 15px;
            position: sticky; 
            top: 0; 
            z-index: 50; 
        }

        @media(min-width: 768px) {
            nav { 
                flex-direction: row; 
                justify-content: space-between; 
                height: 80px; 
                padding: 0 2rem;
            }
        }

        .nav-brand { display: flex; align-items: center; gap: 12px; text-decoration: none; }
        .nav-logo-img { height: 35px; sm:height: 40px; width: auto; object-fit: contain; }
        
        .nav-brand-text {
            border-left: 1px solid var(--border-drop);
            padding-left: 12px;
            display: flex;
            flex-direction: column;
        }

        .nav-title { font-weight: 800; color: var(--text-primary); font-size: 11px; sm:font-size: 13px; letter-spacing: -0.3px; line-height: 1.2; }
        .nav-subtitle { font-size: 8px; sm:font-size: 9px; color: var(--text-secondary); text-transform: uppercase; letter-spacing: 0.5px; }

        .nav-actions { display: flex; align-items: center; gap: 8px; }
        .nav-links { display: flex; gap: 0.75rem; sm:gap: 1rem; align-items: center; flex-wrap: wrap; justify-content: center; }
        .nav-link { color: var(--text-secondary); font-size: 13px; sm:font-size: 14px; font-weight: 500; text-decoration: none; transition: 0.2s; }
        .nav-link:hover, .nav-link.active { color: var(--text-primary); font-weight: 700; }
        
        /* DARK MODE TOGGLE */
        #theme-toggle {
            background: var(--bg-badge);
            border: none;
            color: var(--text-main);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s;
        }

        .nav-btn { background: #001e40; color: #fff; border: none; padding: 8px 14px; sm:padding: 8px 18px; border-radius: 8px; font-size: 13px; sm:font-size: 14px; font-weight: 600; cursor: pointer; }
        .dark .nav-btn { background: #3b82f6; }

        /* MAIN CONTENT */
        main { flex: 1; padding: 1.5rem 1rem; max-width: 1000px; margin: 0 auto; width: 100%; }
        header { text-align: center; margin-bottom: 2rem; }
        h1 { font-size: clamp(1.4rem, 5vw, 2.5rem); font-weight: 800; color: var(--text-primary); margin-bottom: 10px; line-height: 1.2; }
        .subtitle { color: var(--text-secondary); max-width: 600px; margin: 0 auto; font-size: 0.9rem; sm:font-size: 0.95rem; line-height: 1.6; }

        .grid { display: grid; grid-template-columns: 1fr; gap: 1.5rem; }
        @media(min-width: 900px) { .grid { grid-template-columns: 2fr 1fr; } }

        /* CARDS */
        .card { background: var(--bg-card); border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); padding: 1.5rem; border: 1px solid var(--border-color); }
        .card-title { font-weight: 700; color: var(--text-primary); font-size: 17px; }
        .card-icon { background: var(--bg-info-row); padding: 8px; border-radius: 8px; display: flex; color: var(--text-primary); }

        /* DROP ZONE */
        .drop-zone { 
            border: 2px dashed var(--border-drop); 
            border-radius: 14px; 
            padding: 2.5rem 1rem; 
            background: var(--bg-dropzone); 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            text-align: center; 
            position: relative; 
            transition: 0.3s;
        }
        .drop-zone:hover { border-color: #006c4a; background: var(--bg-input-hover); }
        .drop-zone input[type=file] { position: absolute; inset: 0; opacity: 0; cursor: pointer; }
        
        .upload-icon-wrap { width: 60px; height: 60px; background: var(--bg-card); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; box-shadow: 0 2px 8px rgba(0,0,0,0.08); color: var(--text-primary); }

        /* SIDEBAR */
        .info-card { background: var(--bg-card); border-radius: 14px; padding: 1.25rem; box-shadow: 0 2px 6px rgba(0,0,0,0.05); border: 1px solid var(--border-color); }
        .info-row { display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid var(--border-color); font-size: 13px; color: var(--text-main); }
        
        .dark-card { background: #001e40; color: #fff; border-radius: 14px; padding: 1.5rem; position: relative; overflow: hidden; }
        .dark .dark-card { background: #1e293b; border: 1px solid #334155; }

        /* SECURITY BADGES */
        .sec-badge { display: flex; align-items: center; gap: 6px; font-size: 11px; color: var(--text-secondary); background: var(--bg-badge); padding: 5px 10px; border-radius: 6px; }

        /* RESULTS STYLING */
        .result-hero { background: var(--bg-card); border-radius: 16px; border: 1px solid var(--border-color); }
        .result-status-icon { background: #d1fae5; color: #006c4a; }
        .dark .result-status-icon { background: #064e3b; color: #34d399; }
        .hash-box { background: var(--bg-info-row); color: var(--text-secondary); border-radius: 10px; padding: 1rem; font-family: monospace; font-size: 11px; word-break: break-all; }

        footer { background: var(--footer-bg); padding: 2rem 1rem; text-align: center; border-top: 1px solid var(--border-color); margin-top: auto; }
        .footer-copy { font-size: 12px; color: var(--text-secondary); line-height: 1.5; }

        /* LOADING */
        .spinner { border: 4px solid var(--border-color); border-top-color: #3b82f6; }
    </style>
</head>
<body>

<div class="page active" id="page-upload">
    <nav>
        <a href="#" class="nav-brand">
            <img src="images/penyelenggara-sertifikat-elektronik.9fd08b9e.png" alt="Logo Komdigi" class="nav-logo-img">
            <div class="nav-brand-text">
                <span class="nav-title">VERIFIKASI DOKUMEN</span>
                <span class="nav-subtitle">DIREKTORAT JENDERAL PRD</span>
            </div>
        </a>
        <div class="nav-actions">
            <div class="nav-links">
                <a class="nav-link" href="http://edocumentweb.test">Beranda</a>
                <a class="nav-link active" href="#">Verifikasi</a>
            </div>
            <button id="theme-toggle" title="Ganti Tema">
                <span class="material-symbols-outlined">dark_mode</span>
            </button>
            <button class="nav-btn">Login</button>
        </div>
    </nav>

    <main>
        <header>
            <h1>Validasi Keaslian Dokumen</h1>
            <p class="subtitle">Unggah dokumen PDF bertanda tangan elektronik untuk memverifikasi integritas data dan identitas penandatangan secara instan.</p>
        </header>

        <div class="grid">
            <div class="card">
                <div class="card-header" style="display:flex; justify-content:space-between; margin-bottom:1.5rem;">
                    <div>
                        <div class="card-title">Unggah PDF</div>
                        <p style="font-size:13px; color:var(--text-secondary);">Pastikan dokumen dalam format PDF.</p>
                    </div>
                    <div class="card-icon"><span class="material-symbols-outlined">description</span></div>
                </div>

                <div class="drop-zone" id="dropZone">
                    <input type="file" id="fileInput" accept=".pdf" />
                    <div class="upload-icon-wrap"><span class="material-symbols-outlined" style="font-size:32px;">cloud_upload</span></div>
                    <h3 style="font-size: 16px;">Tarik & Lepas File Di Sini</h3>
                    <p style="font-size:14px; color:var(--text-secondary);">Atau klik untuk memilih file</p>
                </div>

                <div class="security-row" style="display:flex; flex-wrap:wrap; gap:0.5rem; margin-top:1.5rem; justify-content:center;">
                    <div class="sec-badge"><span class="material-symbols-outlined" style="font-size:14px;">lock</span> SSL 256-bit</div>
                    <div class="sec-badge"><span class="material-symbols-outlined" style="font-size:14px;">verified_user</span> BSSN</div>
                    <div class="sec-badge"><span class="material-symbols-outlined" style="font-size:14px;">delete</span> Auto Delete</div>
                </div>
            </div>

            <div class="side-cards" style="display:flex; flex-direction:column; gap:1.25rem;">
                <div class="info-card">
                    <h3 style="font-size:11px; letter-spacing:1px; text-transform:uppercase; margin-bottom:10px; color:var(--text-secondary);">Status Sistem</h3>
                    <div class="info-row"><span>Waktu Server</span><span id="serverTime">--:-- WITA</span></div>
                    <div class="info-row"><span>Status CA</span><span style="color:#006c4a; font-weight:bold;">● Aktif</span></div>
                    <div class="info-row"><span>Kecepatan</span><span>&lt; 1 Detik</span></div>
                </div>

                <div class="dark-card">
                    <span class="material-symbols-outlined" style="margin-bottom:10px;">gpp_maybe</span>
                    <h3>Periksa Keaslian</h3>
                    <p style="font-size:13px; opacity:0.8;">Pastikan segel biru atau QR Code terlihat jelas pada dokumen Anda.</p>
                    <span class="material-symbols-outlined" style="position:absolute; right:-10px; bottom:-10px; opacity:0.1; font-size:80px;">security</span>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p class="footer-copy">© 2026 Direktorat Jenderal Pengawasan Ruang Digital.<br>Kementerian Komunikasi dan Digital.</p>
    </footer>
</div>

<div class="page" id="page-results">
    <nav>
        <a href="#" class="nav-brand">
            <img src="images/penyelenggara-sertifikat-elektronik.9fd08b9e.png" alt="Logo Komdigi" class="nav-logo-img">
            <div class="nav-brand-text">
                <span class="nav-title">HASIL VERIFIKASI</span>
                <span class="nav-subtitle">DIREKTORAT JENDERAL PRD</span>
            </div>
        </a>
        <button class="nav-btn" onclick="goBack()">Kembali</button>
    </nav>

    <div class="results-main" style="max-width:800px; margin:0 auto; padding:2rem 1rem; width:100%;">
        <div id="loadingState" style="display:flex; flex-direction:column; align-items:center; padding:3rem 1rem;">
            <div class="spinner" style="width:40px; height:40px; border-radius:50%; animation:spin 0.8s linear infinite; margin-bottom:1rem;"></div>
            <p>Menganalisis Sertifikat Digital...</p>
        </div>

        <div id="resultsContent" style="display:none;">
            <div class="result-hero" style="padding:1.5rem; display:flex; flex-direction:column; align-items:center; text-align:center; gap:1rem; margin-bottom:1.5rem; box-shadow:0 4px 12px rgba(0,0,0,0.05);">
                <div class="result-status-icon" style="width:60px; height:60px; border-radius:50%; display:flex; align-items:center; justify-content:center;">
                    <span class="material-symbols-outlined" style="font-size:35px;">verified</span>
                </div>
                <div>
                    <h2 id="resultFileName" style="font-size:18px; color:var(--text-primary);">dokumen.pdf</h2>
                    <p style="color:#006c4a; font-weight:600; font-size:14px;">Tanda Tangan Elektronik Valid</p>
                </div>
            </div>

            <h3 style="font-size:12px; text-transform:uppercase; margin:20px 0 10px; color:var(--text-secondary);">Detail Dokumen</h3>
            <div class="card" style="margin-bottom:20px;">
                <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(150px, 1fr)); gap:1rem;">
                    <div><label style="font-size:11px; color:var(--text-secondary); display:block;">Ukuran</label><span id="detailFileSize" style="font-weight:600;">-</span></div>
                    <div><label style="font-size:11px; color:var(--text-secondary); display:block;">Waktu Verifikasi</label><span id="detailDate" style="font-weight:600;">-</span></div>
                    <div><label style="font-size:11px; color:var(--text-secondary); display:block;">Integritas</label><span style="color:#006c4a; font-weight:600;">Utuh</span></div>
                </div>
            </div>

            <h3 style="font-size:12px; text-transform:uppercase; margin-bottom:10px; color:var(--text-secondary);">Digital Fingerprint (SHA-256)</h3>
            <div class="hash-box" id="hashBox">--</div>
        </div>
    </div>
</div>

<script>
    // Theme Logic
    const themeToggle = document.getElementById('theme-toggle');
    const html = document.documentElement;

    // Check saved theme
    if (localStorage.getItem('theme') === 'dark') {
        html.classList.add('dark');
        themeToggle.innerHTML = '<span class="material-symbols-outlined">light_mode</span>';
    }

    themeToggle.addEventListener('click', () => {
        html.classList.toggle('dark');
        const isDark = html.classList.contains('dark');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
        themeToggle.innerHTML = isDark ? 
            '<span class="material-symbols-outlined">light_mode</span>' : 
            '<span class="material-symbols-outlined">dark_mode</span>';
    });

    // Update Server Time
    function updateTime() {
        const now = new Date();
        const timeStr = now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit', second: '2-digit' });
        const el = document.getElementById('serverTime');
        if (el) el.textContent = timeStr + ' WITA';
    }
    setInterval(updateTime, 1000);
    updateTime();

    // Navigation & Processing
    function goBack() {
        document.getElementById('page-results').classList.remove('active');
        document.getElementById('page-upload').classList.add('active');
    }

    function processFile(file) {
        if (!file || file.type !== 'application/pdf') {
            alert('Mohon unggah file PDF.');
            return;
        }
        document.getElementById('page-upload').classList.remove('active');
        document.getElementById('page-results').classList.add('active');
        document.getElementById('loadingState').style.display = 'flex';
        document.getElementById('resultsContent').style.display = 'none';

        setTimeout(() => {
            document.getElementById('resultFileName').textContent = file.name;
            document.getElementById('detailFileSize').textContent = (file.size / 1024).toFixed(1) + ' KB';
            document.getElementById('detailDate').textContent = new Date().toLocaleString('id-ID') + ' WITA';
            document.getElementById('hashBox').textContent = btoa(file.name).substring(0, 32).toLowerCase() + "...";
            document.getElementById('loadingState').style.display = 'none';
            document.getElementById('resultsContent').style.display = 'block';
        }, 1200);
    }

    const fileInput = document.getElementById('fileInput');
    fileInput.addEventListener('change', (e) => { if (e.target.files[0]) processFile(e.target.files[0]); });
</script>

<style>
    @keyframes spin { to { transform: rotate(360deg); } }
</style>
</body>
</html>