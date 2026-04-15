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
* { box-sizing: border-box; margin: 0; padding: 0; }
body { font-family: 'Public Sans', sans-serif; background: #f8f9ff; color: #171c22; min-height: 100vh; display: flex; flex-direction: column; }
.page { display: none; flex-direction: column; min-height: 100vh; }
.page.active { display: flex; }

/* Global Navigation Style */
nav { 
    background: rgba(255,255,255,0.92); 
    backdrop-filter: blur(16px); 
    border-bottom: 1px solid #e4e8f1; 
    padding: 0 2rem; 
    height: 70px; 
    display: flex; 
    align-items: center; 
    justify-content: space-between; 
    position: sticky; 
    top: 0; 
    z-index: 50; 
}
.nav-brand { 
    display: flex; 
    align-items: center; 
    gap: 12px; 
    text-decoration: none;
}
.nav-logo-img { 
    height: 42px; /* Ukuran logo disesuaikan */
    width: auto;
    object-fit: contain;
}
.nav-brand-text {
    border-left: 1px solid #c3c6d1;
    padding-left: 12px;
    margin-left: 4px;
    display: flex;
    flex-direction: column;
}
.nav-title { 
    font-weight: 800; 
    color: #001e40; 
    font-size: 14px; 
    letter-spacing: -0.3px;
    line-height: 1.2;
}
.nav-subtitle {
    font-size: 10px;
    color: #43474f;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.nav-links { display: flex; gap: 1.5rem; align-items: center; }
.nav-link { color: #43474f; font-size: 14px; font-weight: 500; text-decoration: none; cursor: pointer; }
.nav-link:hover { color: #001e40; }
.nav-link.active { color: #001e40; font-weight: 700; border-bottom: 2px solid #006c4a; padding-bottom: 2px; }
.nav-btn { background: #001e40; color: #fff; border: none; padding: 8px 20px; border-radius: 8px; font-size: 14px; font-weight: 600; cursor: pointer; font-family: 'Public Sans', sans-serif; }

/* Layout & Main Content */
main { flex: 1; padding: 3rem 1.5rem; max-width: 960px; margin: 0 auto; width: 100%; }
header { text-align: center; margin-bottom: 2.5rem; }
.badge { display: inline-block; background: #82f5c1; color: #005137; font-size: 10px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 4px 12px; border-radius: 20px; margin-bottom: 1rem; }
h1 { font-size: clamp(1.8rem, 4vw, 2.8rem); font-weight: 800; color: #001e40; margin-bottom: 0.75rem; }
.subtitle { color: #43474f; max-width: 520px; margin: 0 auto; line-height: 1.7; font-size: 1rem; }

/* Components */
.grid { display: grid; grid-template-columns: 1fr; gap: 1.25rem; }
@media(min-width:768px) { .grid { grid-template-columns: 2fr 1fr; } }
.card { background: #ffffff; border-radius: 16px; box-shadow: 0 1px 4px rgba(0,0,0,0.07); padding: 2rem; position: relative; overflow: hidden; }
.card::before { content: ''; position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: #006c4a; border-radius: 4px 0 0 4px; }
.card-header { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 1.5rem; }
.card-title { font-weight: 700; color: #001e40; font-size: 17px; }
.card-sub { font-size: 13px; color: #43474f; margin-top: 2px; }
.card-icon { background: #f0f4fd; padding: 10px; border-radius: 10px; display: flex; }
.card-icon span { color: #001e40; font-size: 22px; }

.drop-zone { border: 2px dashed #c3c6d1; border-radius: 14px; padding: 3rem 2rem; background: #f8f9ff; display: flex; flex-direction: column; align-items: center; text-align: center; cursor: pointer; transition: all 0.2s; position: relative; }
.drop-zone:hover, .drop-zone.drag-over { border-color: #006c4a; background: #f0fdf8; }
.drop-zone input[type=file] { position: absolute; inset: 0; opacity: 0; cursor: pointer; width: 100%; height: 100%; }
.upload-icon-wrap { width: 72px; height: 72px; background: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.25rem; box-shadow: 0 2px 8px rgba(0,0,0,0.08); }
.upload-icon-wrap span { color: #001e40; font-size: 36px; }
.drop-zone h3 { font-size: 16px; font-weight: 700; color: #001e40; margin-bottom: 6px; }
.drop-zone p { color: #43474f; font-size: 14px; margin-bottom: 1rem; }
.browse-btn { background: #001e40; color: #fff; border: none; padding: 10px 28px; border-radius: 8px; font-size: 14px; font-weight: 600; cursor: pointer; font-family: 'Public Sans', sans-serif; pointer-events: none; }

.security-row { display: flex; flex-wrap: wrap; gap: 1rem; margin-top: 1.25rem; }
.sec-badge { display: flex; align-items: center; gap: 5px; font-size: 12px; color: #43474f; }
.sec-badge span { font-size: 14px; color: #737780; }

.side-cards { display: flex; flex-direction: column; gap: 1.25rem; }
.info-card { background: #fff; border-radius: 14px; padding: 1.5rem; box-shadow: 0 1px 4px rgba(0,0,0,0.07); }
.info-card h3 { font-size: 11px; font-weight: 700; color: #001e40; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 1rem; }
.info-row { display: flex; justify-content: space-between; align-items: center; padding: 10px 0; border-bottom: 1px solid #f0f4fd; }
.info-row:last-child { border-bottom: none; }
.info-label { font-size: 13px; color: #43474f; }
.info-val { font-size: 13px; font-weight: 700; color: #001e40; }
.status-dot { width: 8px; height: 8px; border-radius: 50%; background: #006c4a; display: inline-block; margin-left: 4px; }

.dark-card { background: #001e40; color: #fff; border-radius: 14px; padding: 1.5rem; position: relative; overflow: hidden; }
.dark-card h3 { font-weight: 700; font-size: 15px; margin-bottom: 8px; }
.dark-card p { font-size: 13px; color: #799dd6; line-height: 1.6; }
.dark-card .bg-icon { position: absolute; right: -20px; bottom: -20px; opacity: 0.08; font-size: 90px; color: #fff; pointer-events: none; }

footer { background: #f0f4fd; border-top: 1px solid #e4e8f1; padding: 2rem 1.5rem; text-align: center; }
.footer-copy { font-size: 13px; color: #43474f; }

/* Results Styling */
.results-main { flex: 1; padding: 2rem 1.5rem; max-width: 780px; margin: 0 auto; width: 100%; }
.back-btn { display: inline-flex; align-items: center; gap: 6px; background: none; border: 1px solid #c3c6d1; padding: 8px 16px; border-radius: 8px; font-size: 14px; font-weight: 500; color: #001e40; cursor: pointer; margin-bottom: 1.75rem; font-family: 'Public Sans', sans-serif; transition: background 0.15s; }
.back-btn:hover { background: #f0f4fd; }
.result-hero { background: #ffffff; border-radius: 16px; padding: 2rem; box-shadow: 0 1px 4px rgba(0,0,0,0.07); margin-bottom: 1.25rem; display: flex; align-items: flex-start; gap: 1.25rem; }
.result-status-icon { width: 56px; height: 56px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.status-valid { background: #d1fae5; }
.status-valid span { color: #006c4a; font-size: 28px; }
.result-hero-info h2 { font-size: 20px; font-weight: 800; color: #001e40; margin-bottom: 4px; }
.result-hero-info p { font-size: 14px; color: #43474f; }
.result-tag { display: inline-flex; align-items: center; gap: 5px; background: #d1fae5; color: #005137; font-size: 12px; font-weight: 700; padding: 4px 12px; border-radius: 20px; margin-top: 10px; }
.section-title { font-size: 13px; font-weight: 700; color: #001e40; letter-spacing: 1.5px; text-transform: uppercase; margin: 1.5rem 0 0.75rem; }
.detail-card { background: #ffffff; border-radius: 14px; padding: 1.5rem; box-shadow: 0 1px 4px rgba(0,0,0,0.07); margin-bottom: 1rem; }
.detail-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
@media(max-width:500px) { .detail-grid { grid-template-columns: 1fr; } }
.detail-item label { font-size: 12px; color: #737780; display: block; margin-bottom: 3px; }
.detail-item span { font-size: 14px; font-weight: 600; color: #001e40; word-break: break-all; }
.sig-row { display: flex; align-items: center; gap: 12px; padding: 12px 0; border-bottom: 1px solid #f0f4fd; }
.sig-row:last-child { border-bottom: none; }
.sig-avatar { width: 40px; height: 40px; border-radius: 50%; background: #e6f1fb; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 14px; font-weight: 700; color: #185fa5; }
.sig-info { flex: 1; }
.sig-name { font-size: 14px; font-weight: 600; color: #001e40; }
.sig-role { font-size: 12px; color: #43474f; }
.sig-time { font-size: 12px; color: #737780; }
.sig-check { color: #006c4a; font-size: 20px; }
.hash-box { background: #f0f4fd; border-radius: 10px; padding: 1rem; font-family: monospace; font-size: 12px; color: #001e40; word-break: break-all; line-height: 1.6; }

.loading-state { display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 3rem; gap: 1rem; }
.spinner { width: 40px; height: 40px; border: 3px solid #e4e8f1; border-top-color: #001e40; border-radius: 50%; animation: spin 0.8s linear infinite; }
@keyframes spin { to { transform: rotate(360deg); } }
.progress-bar { width: 200px; height: 4px; background: #e4e8f1; border-radius: 4px; overflow: hidden; }
.progress-fill { height: 100%; background: #006c4a; border-radius: 4px; animation: progress 1.8s ease-out forwards; }
@keyframes progress { from { width: 0; } to { width: 100%; } }
</style>
</head>
<body>

<div class="page active" id="page-upload">
  <nav>
    <a href="#" class="nav-brand">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Logo_Kementerian_Komunikasi_dan_Digital_Republik_Indonesia_%282024_full_version%29.svg/1024px-Logo_Kementerian_Komunikasi_dan_Digital_Republik_Indonesia_%282024_full_version%29.svg.png" alt="Logo Komdigi" class="nav-logo-img">
      <div class="nav-brand-text">
        <span class="nav-title">VERIFIKASI DOKUMEN</span>
        <span class="nav-subtitle">DIREKTORAT JENDERAL PRD</span>
      </div>
    </a>
    <div class="nav-links">
      <a class="nav-link">Beranda</a>
      <a class="nav-link">Layanan</a>
      <a class="nav-link active">Verifikasi</a>
      <button class="nav-btn">Login</button>
    </div>
  </nav>

  <main>
    <header>
      <span class="badge">Keamanan Digital</span>
      <h1>Validasi Keaslian Dokumen</h1>
      <p class="subtitle">Unggah dokumen PDF bertanda tangan elektronik Anda untuk memverifikasi integritas data dan identitas penandatangan secara instan.</p>
    </header>

    <div class="grid">
      <div class="card">
        <div class="card-header">
          <div>
            <div class="card-title">Unggah PDF</div>
            <div class="card-sub">Pastikan dokumen dalam format PDF standar.</div>
          </div>
          <div class="card-icon">
            <span class="material-symbols-outlined">description</span>
          </div>
        </div>

        <div class="drop-zone" id="dropZone">
          <input type="file" id="fileInput" accept=".pdf,application/pdf" />
          <div class="upload-icon-wrap">
            <span class="material-symbols-outlined">cloud_upload</span>
          </div>
          <h3>Tarik &amp; Lepas File Di Sini</h3>
          <p>Atau klik untuk menelusuri dari perangkat Anda</p>
          <button class="browse-btn">Pilih Dokumen PDF</button>
        </div>

        <div class="security-row">
          <div class="sec-badge">
            <span class="material-symbols-outlined">lock</span> Enkripsi SSL 256-bit
          </div>
          <div class="sec-badge">
            <span class="material-symbols-outlined">verified_user</span> Standar BSSN
          </div>
          <div class="sec-badge">
            <span class="material-symbols-outlined">delete</span> Dokumen dihapus otomatis
          </div>
        </div>
      </div>

      <div class="side-cards">
        <div class="info-card">
          <h3>Informasi Sistem</h3>
          <div class="info-row">
            <span class="info-label">Waktu Server</span>
            <span class="info-val" id="serverTime">--:--:-- WITA</span>
          </div>
          <div class="info-row">
            <span class="info-label">Status CA</span>
            <span class="info-val" style="color:#006c4a;">Aktif <span class="status-dot"></span></span>
          </div>
          <div class="info-row">
            <span class="info-label">Kecepatan Verifikasi</span>
            <span class="info-val">&lt; 2 Detik</span>
          </div>
        </div>

        <div class="dark-card">
          <span class="material-symbols-outlined" style="font-size:28px;margin-bottom:12px;display:block;">gpp_maybe</span>
          <h3>Periksa Keaslian</h3>
          <p>Pastikan segel biru atau barcode terlihat jelas di bagian bawah dokumen digital Anda.</p>
          <span class="material-symbols-outlined bg-icon">security</span>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <p class="footer-copy">© 2026 Direktorat Jenderal Pengawasan Ruang Digital. Kementerian Komunikasi dan Digital.</p>
  </footer>
</div>

<div class="page" id="page-results">
  <nav>
    <a href="#" class="nav-brand">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Logo_Kementerian_Komunikasi_dan_Digital_Republik_Indonesia_%282024_full_version%29.svg/1024px-Logo_Kementerian_Komunikasi_dan_Digital_Republik_Indonesia_%282024_full_version%29.svg.png" alt="Logo Komdigi" class="nav-logo-img">
      <div class="nav-brand-text">
        <span class="nav-title">VERIFIKASI DOKUMEN</span>
        <span class="nav-subtitle">DIREKTORAT JENDERAL PRD</span>
      </div>
    </a>
    <div class="nav-links">
      <a class="nav-link">Beranda</a>
      <a class="nav-link active">Verifikasi</a>
      <button class="nav-btn">Login</button>
    </div>
  </nav>

  <div class="results-main">
    <button class="back-btn" onclick="goBack()">
      <span class="material-symbols-outlined" style="font-size:16px;">arrow_back</span> Kembali
    </button>

    <div class="loading-state" id="loadingState">
      <div class="spinner"></div>
      <p>Memverifikasi dokumen...</p>
      <div class="progress-bar"><div class="progress-fill" id="progressFill"></div></div>
    </div>

    <div id="resultsContent" style="display:none;">
      <div class="result-hero">
        <div class="result-status-icon status-valid">
          <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1;">verified</span>
        </div>
        <div class="result-hero-info">
          <h2 id="resultFileName">dokumen.pdf</h2>
          <p>Tanda tangan elektronik terdeteksi dan valid</p>
          <div class="result-tag">
            <span class="material-symbols-outlined" style="font-size:14px;font-variation-settings:'FILL' 1;">check_circle</span>
            Dokumen Autentik
          </div>
        </div>
      </div>

      <div class="section-title">Detail Dokumen</div>
      <div class="detail-card">
        <div class="detail-grid">
          <div class="detail-item">
            <label>Nama File</label>
            <span id="detailFileName">—</span>
          </div>
          <div class="detail-item">
            <label>Ukuran File</label>
            <span id="detailFileSize">—</span>
          </div>
          <div class="detail-item">
            <label>Tanggal Unggah</label>
            <span id="detailDate">—</span>
          </div>
          <div class="detail-item">
            <label>Format</label>
            <span>PDF / Adobe Acrobat</span>
          </div>
          <div class="detail-item">
            <label>Status Integritas</label>
            <span style="color:#006c4a;">✓ Tidak Dimodifikasi</span>
          </div>
          <div class="detail-item">
            <label>Versi Tanda Tangan</label>
            <span>CAdES-BES Level 2</span>
          </div>
        </div>
      </div>

      <div class="section-title">Penandatangan</div>
      <div class="detail-card">
        <div class="sig-row">
          <div class="sig-avatar">AS</div>
          <div class="sig-info">
            <div class="sig-name">Ahmad Setiawan, S.Kom</div>
            <div class="sig-role">Kepala Bidang Teknologi — Dinas Kominfo Balikpapan</div>
            <div class="sig-time" id="sigTime">—</div>
          </div>
          <span class="material-symbols-outlined sig-check" style="font-variation-settings:'FILL' 1;">check_circle</span>
        </div>
        <div class="sig-row">
          <div class="sig-avatar" style="background:#f0fdf8;color:#006c4a;">RH</div>
          <div class="sig-info">
            <div class="sig-name">Rini Handayani, M.T.</div>
            <div class="sig-role">Sekretaris Daerah — Kota Balikpapan</div>
            <div class="sig-time" id="sigTime2">—</div>
          </div>
          <span class="material-symbols-outlined sig-check" style="font-variation-settings:'FILL' 1;">check_circle</span>
        </div>
      </div>

      <div class="section-title">Hash Dokumen (SHA-256)</div>
      <div class="detail-card">
        <div class="hash-box" id="hashBox">—</div>
      </div>
    </div>
  </div>

  <footer>
    <p class="footer-copy">© 2026 Direktorat Jenderal Pengawasan Ruang Digital. Kementerian Komunikasi dan Digital.</p>
  </footer>
</div>

<script>
// (Sama dengan script sebelumnya namun memastikan navigasi sinkron)
function updateTime() {
  const now = new Date();
  const wita = new Date(now.getTime() + (8 * 60 * 60 * 1000));
  const h = String(wita.getUTCHours()).padStart(2,'0');
  const m = String(wita.getUTCMinutes()).padStart(2,'0');
  const s = String(wita.getUTCSeconds()).padStart(2,'0');
  const el = document.getElementById('serverTime');
  if (el) el.textContent = h + ':' + m + ':' + s + ' WITA';
}
updateTime();
setInterval(updateTime, 1000);

function formatBytes(bytes) {
  if (bytes < 1024) return bytes + ' B';
  if (bytes < 1024*1024) return (bytes/1024).toFixed(1) + ' KB';
  return (bytes/(1024*1024)).toFixed(2) + ' MB';
}

function generateFakeHash(name) {
  let h = '';
  const chars = '0123456789abcdef';
  let seed = name.length;
  for (let i = 0; i < 64; i++) {
    seed = (seed * 1664525 + 1013904223) & 0xffffffff;
    h += chars[Math.abs(seed) % 16];
  }
  return h;
}

function goBack() {
  document.getElementById('page-results').classList.remove('active');
  document.getElementById('page-upload').classList.add('active');
  document.getElementById('fileInput').value = '';
}

function processFile(file) {
  if (!file || file.type !== 'application/pdf') {
    alert('Harap unggah file PDF yang valid.');
    return;
  }

  document.getElementById('page-upload').classList.remove('active');
  document.getElementById('page-results').classList.add('active');

  const now = new Date();
  const dateStr = now.toLocaleDateString('id-ID', { day:'2-digit', month:'long', year:'numeric' });
  const timeStr = now.toLocaleTimeString('id-ID', { hour:'2-digit', minute:'2-digit' });
  
  document.getElementById('loadingState').style.display = 'flex';
  document.getElementById('resultsContent').style.display = 'none';

  setTimeout(() => {
    document.getElementById('resultFileName').textContent = file.name;
    document.getElementById('detailFileName').textContent = file.name;
    document.getElementById('detailFileSize').textContent = formatBytes(file.size);
    document.getElementById('detailDate').textContent = dateStr + ', ' + timeStr + ' WITA';
    document.getElementById('sigTime').textContent = dateStr + ' ' + timeStr + ' WITA';
    document.getElementById('sigTime2').textContent = dateStr + ' ' + timeStr + ' WITA';
    document.getElementById('hashBox').textContent = generateFakeHash(file.name + file.size);

    document.getElementById('loadingState').style.display = 'none';
    document.getElementById('resultsContent').style.display = 'block';
  }, 2000);
}

const fileInput = document.getElementById('fileInput');
const dropZone = document.getElementById('dropZone');

fileInput.addEventListener('change', function() {
  if (this.files && this.files[0]) processFile(this.files[0]);
});

dropZone.addEventListener('dragover', (e) => { e.preventDefault(); dropZone.classList.add('drag-over'); });
dropZone.addEventListener('dragleave', () => { dropZone.classList.remove('drag-over'); });
dropZone.addEventListener('drop', (e) => {
  e.preventDefault();
  dropZone.classList.remove('drag-over');
  if (e.dataTransfer.files[0]) processFile(e.dataTransfer.files[0]);
});
</script>
</body>
</html>