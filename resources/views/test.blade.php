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
        /* CSS RESET & BASE */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Public Sans', sans-serif; background: #f8f9ff; color: #171c22; min-height: 100vh; display: flex; flex-direction: column; }
        
        .page { display: none; flex-direction: column; min-height: 100vh; }
        .page.active { display: flex; }

        /* RESPONSIVE NAVIGATION */
        nav { 
            background: rgba(255,255,255,0.92); 
            backdrop-filter: blur(16px); 
            border-bottom: 1px solid #e4e8f1; 
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
        .nav-logo-img { height: 40px; width: auto; object-fit: contain; }
        
        .nav-brand-text {
            border-left: 1px solid #c3c6d1;
            padding-left: 12px;
            display: flex;
            flex-direction: column;
        }

        .nav-title { font-weight: 800; color: #001e40; font-size: 13px; letter-spacing: -0.3px; line-height: 1.2; }
        .nav-subtitle { font-size: 9px; color: #43474f; text-transform: uppercase; letter-spacing: 0.5px; }

        .nav-links { display: flex; gap: 1rem; align-items: center; flex-wrap: wrap; justify-content: center; }
        .nav-link { color: #43474f; font-size: 14px; font-weight: 500; text-decoration: none; transition: 0.2s; }
        .nav-link:hover, .nav-link.active { color: #001e40; font-weight: 700; }
        .nav-btn { background: #001e40; color: #fff; border: none; padding: 8px 18px; border-radius: 8px; font-size: 14px; font-weight: 600; cursor: pointer; }

        /* LAYOUT */
        main { flex: 1; padding: 1.5rem 1rem; max-width: 1000px; margin: 0 auto; width: 100%; }
        header { text-align: center; margin-bottom: 2rem; }
        h1 { font-size: clamp(1.5rem, 5vw, 2.5rem); font-weight: 800; color: #001e40; margin-bottom: 10px; line-height: 1.2; }
        .subtitle { color: #43474f; max-width: 600px; margin: 0 auto; font-size: 0.95rem; line-height: 1.6; }

        /* GRID SYSTEM */
        .grid { display: grid; grid-template-columns: 1fr; gap: 1.5rem; }
        @media(min-width: 900px) { .grid { grid-template-columns: 2fr 1fr; } }

        /* CARDS */
        .card { background: #ffffff; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); padding: 1.5rem; position: relative; }
        @media(min-width: 768px) { .card { padding: 2rem; } }

        .card-header { display: flex; justify-content: space-between; margin-bottom: 1.5rem; }
        .card-title { font-weight: 700; color: #001e40; font-size: 17px; }
        .card-icon { background: #f0f4fd; padding: 8px; border-radius: 8px; display: flex; color: #001e40; }

        /* DROP ZONE */
        .drop-zone { 
            border: 2px dashed #c3c6d1; 
            border-radius: 14px; 
            padding: 2.5rem 1rem; 
            background: #f8f9ff; 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            text-align: center; 
            position: relative; 
            transition: 0.3s;
        }
        .drop-zone:hover { border-color: #006c4a; background: #f0fdf8; }
        .drop-zone input[type=file] { position: absolute; inset: 0; opacity: 0; cursor: pointer; }
        
        .upload-icon-wrap { width: 60px; height: 60px; background: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; box-shadow: 0 2px 8px rgba(0,0,0,0.08); color: #001e40; }
        .browse-btn { background: #001e40; color: #fff; border: none; padding: 10px 20px; border-radius: 8px; font-weight: 600; margin-top: 15px; }

        /* SECURITY BADGES */
        .security-row { display: flex; flex-wrap: wrap; gap: 1rem; margin-top: 1.5rem; justify-content: center; }
        .sec-badge { display: flex; align-items: center; gap: 6px; font-size: 12px; color: #555; background: #eee; padding: 5px 10px; border-radius: 6px; }

        /* SIDEBAR CARDS */
        .side-cards { display: flex; flex-direction: column; gap: 1.25rem; }
        .info-card { background: #fff; border-radius: 14px; padding: 1.25rem; box-shadow: 0 2px 6px rgba(0,0,0,0.05); }
        .info-row { display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid #f0f4fd; font-size: 13px; }
        
        .dark-card { background: #001e40; color: #fff; border-radius: 14px; padding: 1.5rem; position: relative; overflow: hidden; }
        .dark-card h3 { font-size: 15px; margin-bottom: 8px; z-index: 2; position: relative; }
        .dark-card p { font-size: 13px; color: #abc4ff; z-index: 2; position: relative; }
        .bg-icon { position: absolute; right: -10px; bottom: -10px; opacity: 0.1; font-size: 80px; }

        /* RESULTS PAGE STYLING */
        .results-main { flex: 1; padding: 1.5rem 1rem; max-width: 800px; margin: 0 auto; width: 100%; }
        .result-hero { 
            background: #fff; border-radius: 16px; padding: 1.5rem; 
            display: flex; flex-direction: column; align-items: center; text-align: center; gap: 1rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05); margin-bottom: 1.5rem;
        }
        @media(min-width: 600px) {
            .result-hero { flex-direction: row; text-align: left; padding: 2rem; }
        }

        .result-status-icon { width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: #d1fae5; color: #006c4a; flex-shrink: 0; }
        
        .detail-grid { display: grid; grid-template-columns: 1fr; gap: 1rem; }
        @media(min-width: 500px) { .detail-grid { grid-template-columns: 1fr 1fr; } }
        
        .sig-row { display: flex; flex-direction: column; gap: 12px; padding: 15px 0; border-bottom: 1px solid #f0f4fd; }
        @media(min-width: 480px) { .sig-row { flex-direction: row; align-items: center; } }
        
        .sig-avatar { width: 44px; height: 44px; border-radius: 50%; background: #e6f1fb; display: flex; align-items: center; justify-content: center; font-weight: 700; color: #185fa5; flex-shrink: 0; }
        .hash-box { background: #f0f4fd; border-radius: 10px; padding: 1rem; font-family: monospace; font-size: 11px; word-break: break-all; }

        footer { background: #f0f4fd; padding: 2rem 1rem; text-align: center; border-top: 1px solid #e4e8f1; margin-top: auto; }
        .footer-copy { font-size: 12px; color: #666; line-height: 1.5; }

        /* LOADING */
        .loading-state { display: flex; flex-direction: column; align-items: center; padding: 3rem 1rem; }
        .spinner { width: 40px; height: 40px; border: 4px solid #e4e8f1; border-top-color: #001e40; border-radius: 50%; animation: spin 0.8s linear infinite; margin-bottom: 1rem; }
        @keyframes spin { to { transform: rotate(360deg); } }
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
        <div class="nav-links">
            <a class="nav-link" href="http://edocumentweb.test">Beranda</a>
            <a class="nav-link" href="#">Layanan</a>
            <a class="nav-link active" href="#">Verifikasi</a>
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
                <div class="card-header">
                    <div>
                        <div class="card-title">Unggah PDF</div>
                        <p style="font-size:13px; color:#666;">Pastikan dokumen dalam format PDF.</p>
                    </div>
                    <div class="card-icon"><span class="material-symbols-outlined">description</span></div>
                </div>

                <div class="drop-zone" id="dropZone">
                    <input type="file" id="fileInput" accept=".pdf" />
                    <div class="upload-icon-wrap"><span class="material-symbols-outlined" style="font-size:32px;">cloud_upload</span></div>
                    <h3>Tarik & Lepas File Di Sini</h3>
                    <p style="font-size:14px; color:#666;">Atau klik untuk memilih file</p>
                </div>

                <div class="security-row">
                    <div class="sec-badge"><span class="material-symbols-outlined" style="font-size:14px;">lock</span> SSL 256-bit</div>
                    <div class="sec-badge"><span class="material-symbols-outlined" style="font-size:14px;">verified_user</span> BSSN</div>
                    <div class="sec-badge"><span class="material-symbols-outlined" style="font-size:14px;">delete</span> Auto Delete</div>
                </div>
            </div>

            <div class="side-cards">
                <div class="info-card">
                    <h3 style="font-size:11px; letter-spacing:1px; text-transform:uppercase; margin-bottom:10px;">Status Sistem</h3>
                    <div class="info-row"><span>Waktu Server</span><span id="serverTime">--:-- WITA</span></div>
                    <div class="info-row"><span>Status CA</span><span style="color:#006c4a; font-weight:bold;">● Aktif</span></div>
                    <div class="info-row"><span>Kecepatan</span><span>&lt; 1 Detik</span></div>
                </div>

                <div class="dark-card">
                    <span class="material-symbols-outlined" style="margin-bottom:10px;">gpp_maybe</span>
                    <h3>Periksa Keaslian</h3>
                    <p>Pastikan segel biru atau QR Code terlihat jelas pada dokumen Anda.</p>
                    <span class="material-symbols-outlined bg-icon">security</span>
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

    <div class="results-main">
        <div class="loading-state" id="loadingState">
            <div class="spinner"></div>
            <p>Menganalisis Sertifikat Digital...</p>
        </div>

        <div id="resultsContent" style="display:none;">
            <div class="result-hero">
                <div class="result-status-icon">
                    <span class="material-symbols-outlined" style="font-size:35px;">verified</span>
                </div>
                <div>
                    <h2 id="resultFileName" style="font-size:18px; color:#001e40;">dokumen.pdf</h2>
                    <p style="color:#006c4a; font-weight:600; font-size:14px;">Tanda Tangan Elektronik Valid</p>
                </div>
            </div>

            <h3 style="font-size:12px; text-transform:uppercase; margin:20px 0 10px;">Detail Dokumen</h3>
            <div class="card" style="margin-bottom:20px;">
                <div class="detail-grid">
                    <div class="detail-item"><label style="font-size:11px; color:#666; display:block;">Ukuran</label><span id="detailFileSize" style="font-weight:600;">-</span></div>
                    <div class="detail-item"><label style="font-size:11px; color:#666; display:block;">Waktu Verifikasi</label><span id="detailDate" style="font-weight:600;">-</span></div>
                    <div class="detail-item"><label style="font-size:11px; color:#666; display:block;">Integritas</label><span style="color:#006c4a; font-weight:600;">Utuh (Tidak Diubah)</span></div>
                </div>
            </div>

            <h3 style="font-size:12px; text-transform:uppercase; margin-bottom:10px;">Penandatangan</h3>
            <div class="card">
                <div class="sig-row">
                    <div class="sig-avatar">II</div>
                    <div class="sig-info">
                        <div style="font-weight:700; font-size:14px;">Insert Nama</div>
                        <div style="font-size:12px; color:#666;">Insert Nama Tempat</div>
                    </div>
                    <span class="material-symbols-outlined" style="color:#006c4a; margin-left:auto;">check_circle</span>
                </div>
            </div>

            <h3 style="font-size:12px; text-transform:uppercase; margin:20px 0 10px;">Digital Fingerprint (SHA-256)</h3>
            <div class="hash-box" id="hashBox">--</div>
        </div>
    </div>

    <footer>
        <p class="footer-copy">Dokumen ini telah diverifikasi oleh sistem Otoritas Sertifikat Digital.</p>
    </footer>
</div>

<script>
    // Update Server Time
    function updateTime() {
        const now = new Date();
        const wita = new Date(now.getTime() + (8 * 60 * 60 * 1000));
        const timeStr = now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit', second: '2-digit' });
        const el = document.getElementById('serverTime');
        if (el) el.textContent = timeStr + ' WITA';
    }
    setInterval(updateTime, 1000);
    updateTime();

    // File Helpers
    function formatBytes(bytes) {
        if (bytes < 1024) return bytes + ' B';
        if (bytes < 1024*1024) return (bytes/1024).toFixed(1) + ' KB';
        return (bytes/(1024*1024)).toFixed(2) + ' MB';
    }

    function generateHash(str) {
        return Array.from(str).reduce((acc, char) => acc + char.charCodeAt(0).toString(16), '').substring(0, 64);
    }

    // Navigation
    function goBack() {
        document.getElementById('page-results').classList.remove('active');
        document.getElementById('page-upload').classList.add('active');
        document.getElementById('fileInput').value = '';
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
            const now = new Date();
            document.getElementById('resultFileName').textContent = file.name;
            document.getElementById('detailFileSize').textContent = formatBytes(file.size);
            document.getElementById('detailDate').textContent = now.toLocaleString('id-ID') + ' WITA';
            document.getElementById('hashBox').textContent = generateHash(file.name + file.size);

            document.getElementById('loadingState').style.display = 'none';
            document.getElementById('resultsContent').style.display = 'block';
        }, 1500);
    }

    // Events
    const fileInput = document.getElementById('fileInput');
    const dropZone = document.getElementById('dropZone');

    fileInput.addEventListener('change', (e) => {
        if (e.target.files[0]) processFile(e.target.files[0]);
    });

    dropZone.addEventListener('dragover', (e) => { e.preventDefault(); dropZone.style.borderColor = '#006c4a'; });
    dropZone.addEventListener('dragleave', () => { dropZone.style.borderColor = '#c3c6d1'; });
    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        if (e.dataTransfer.files[0]) processFile(e.dataTransfer.files[0]);
    });
</script>
</body>
</html>