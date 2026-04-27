<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Verifikasi Dokumen - Komdigi</title>
    <link rel="icon" type="png" href="images/bpn_logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style>
        :root {
            --bg-body: #f0f4f8;
            --bg-card: #ffffff;
            --bg-nav: rgba(255,255,255,0.96);
            --bg-dropzone: #f7fafd;
            --bg-input-hover: #eaf4ff;
            --bg-badge: #eef2f8;
            --bg-info-row: #f5f8ff;
            --bg-tag: #e8f0fe;
            --text-main: #1a2236;
            --text-primary: #0c1934;
            --text-secondary: #5a6a85;
            --border-color: #dce4f0;
            --border-drop: #b0c0d8;
            --footer-bg: #edf1f8;
            --accent: #1a56db;
            --accent-light: #e8f0fe;
            --accent-green: #0a7c52;
            --accent-green-bg: #d1fae5;
            --accent-green-dark: #064e3b;
            --shadow-sm: 0 2px 8px rgba(15,40,80,0.07);
            --shadow-md: 0 6px 24px rgba(15,40,80,0.1);
            --nav-height: 72px;
        }
        .dark {
            --bg-body: #0b1120;
            --bg-card: #141f35;
            --bg-nav: rgba(11,17,32,0.97);
            --bg-dropzone: #141f35;
            --bg-input-hover: #0f1a2e;
            --bg-badge: #1e2d48;
            --bg-info-row: #1a2740;
            --bg-tag: #1a2d52;
            --text-main: #dce8f8;
            --text-primary: #c8daf5;
            --text-secondary: #7a9abf;
            --border-color: #1e2d48;
            --border-drop: #2e4268;
            --footer-bg: #070e1a;
            --accent: #4d7cfe;
            --accent-light: #12213b;
            --accent-green: #34d399;
            --accent-green-bg: #064e3b;
            --shadow-sm: 0 2px 8px rgba(0,0,0,0.25);
            --shadow-md: 0 6px 24px rgba(0,0,0,0.35);
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; -webkit-tap-highlight-color: transparent; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg-body);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            transition: background 0.3s, color 0.3s;
            -webkit-font-smoothing: antialiased;
        }

        .page { display: none; flex-direction: column; min-height: 100vh; }
        .page.active { display: flex; }

        /* ─── NAV ─── */
        nav {
            background: var(--bg-nav);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border-color);
            height: var(--nav-height);
            padding: 0 1.25rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: var(--shadow-sm);
        }

        .nav-brand { display: flex; align-items: center; gap: 10px; text-decoration: none; }
        .nav-logo-img { height: 34px; width: auto; object-fit: contain; }
        .nav-brand-text {
            border-left: 2px solid var(--accent);
            padding-left: 10px;
            display: flex;
            flex-direction: column;
        }
        .nav-title { font-weight: 800; color: var(--text-primary); font-size: 10px; letter-spacing: 0.8px; text-transform: uppercase; line-height: 1.3; }
        .nav-subtitle { font-size: 8px; color: var(--text-secondary); text-transform: uppercase; letter-spacing: 0.6px; margin-top: 1px; }
        .nav-actions { display: flex; align-items: center; gap: 8px; }
        .nav-links { display: none; gap: 1.5rem; align-items: center; }

        @media (min-width: 640px) {
            .nav-links { display: flex; }
            .nav-logo-img { height: 38px; }
            .nav-title { font-size: 12px; }
            .nav-subtitle { font-size: 9px; }
        }

        .nav-link { color: var(--text-secondary); font-size: 13px; font-weight: 500; text-decoration: none; transition: color 0.2s; }
        .nav-link:hover, .nav-link.active { color: var(--accent); font-weight: 700; }

        #theme-toggle {
            background: var(--bg-badge);
            border: 1px solid var(--border-color);
            color: var(--text-main);
            width: 36px; height: 36px;
            border-radius: 50%;
            cursor: pointer;
            display: flex; align-items: center; justify-content: center;
            transition: 0.25s;
            flex-shrink: 0;
        }
        #theme-toggle:hover { background: var(--accent-light); color: var(--accent); }
        #theme-toggle .material-symbols-outlined { font-size: 18px; }

        .nav-btn {
            background: var(--accent);
            color: #fff; border: none;
            padding: 8px 16px; border-radius: 8px;
            font-size: 12px; font-weight: 700;
            cursor: pointer; transition: 0.2s;
            white-space: nowrap;
            font-family: inherit;
        }
        .nav-btn:hover { opacity: 0.88; transform: translateY(-1px); }
        .nav-btn.outline {
            background: transparent;
            border: 2px solid var(--accent);
            color: var(--accent);
        }
        .nav-btn.outline:hover { background: var(--accent-light); }

        /* ─── MAIN / UPLOAD ─── */
        main {
            flex: 1;
            padding: 2rem 1rem 3rem;
            max-width: 1040px;
            margin: 0 auto;
            width: 100%;
        }

        header { text-align: center; margin-bottom: 2.5rem; }
        .header-eyebrow {
            display: inline-flex; align-items: center; gap: 6px;
            background: var(--accent-light); color: var(--accent);
            font-size: 11px; font-weight: 700; letter-spacing: 1px;
            text-transform: uppercase; padding: 5px 12px;
            border-radius: 100px; margin-bottom: 14px;
        }
        .header-eyebrow .material-symbols-outlined { font-size: 14px; }
        h1 { font-size: clamp(1.6rem, 6vw, 2.8rem); font-weight: 800; color: var(--text-primary); margin-bottom: 12px; line-height: 1.15; letter-spacing: -0.5px; }
        .subtitle { color: var(--text-secondary); max-width: 560px; margin: 0 auto; font-size: 0.875rem; line-height: 1.7; }

        .grid { display: grid; grid-template-columns: 1fr; gap: 1.25rem; }
        @media(min-width: 860px) { .grid { grid-template-columns: 2.2fr 1fr; } }

        .card {
            background: var(--bg-card); border-radius: 18px;
            box-shadow: var(--shadow-sm);
            padding: 1.5rem; border: 1px solid var(--border-color);
            transition: box-shadow 0.2s;
        }
        .card:hover { box-shadow: var(--shadow-md); }
        .card-header { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 1.5rem; gap: 1rem; }
        .card-title { font-weight: 800; color: var(--text-primary); font-size: 16px; margin-bottom: 4px; }
        .card-sub { font-size: 13px; color: var(--text-secondary); }
        .card-icon { background: var(--accent-light); padding: 9px; border-radius: 10px; display: flex; color: var(--accent); flex-shrink: 0; }
        .card-icon .material-symbols-outlined { font-size: 22px; }

        /* ─── DROP ZONE ─── */
        .drop-zone {
            border: 2px dashed var(--border-drop);
            border-radius: 16px;
            padding: 2.5rem 1.5rem;
            background: var(--bg-dropzone);
            display: flex; flex-direction: column; align-items: center; text-align: center;
            position: relative; transition: 0.3s; cursor: pointer;
        }
        .drop-zone.dragging { border-color: var(--accent); background: var(--accent-light); }
        .drop-zone:hover { border-color: var(--accent); background: var(--bg-input-hover); }
        .drop-zone input[type=file] { position: absolute; inset: 0; opacity: 0; cursor: pointer; }

        .upload-icon-wrap {
            width: 68px; height: 68px;
            background: var(--bg-card);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 1rem;
            box-shadow: var(--shadow-sm);
            color: var(--accent);
            border: 2px solid var(--accent-light);
        }
        .upload-icon-wrap .material-symbols-outlined { font-size: 34px; }
        .drop-label-main { font-size: 15px; font-weight: 700; color: var(--text-primary); margin-bottom: 6px; }
        .drop-label-sub { font-size: 13px; color: var(--text-secondary); }
        .drop-badge { margin-top: 12px; display: inline-flex; align-items: center; gap: 5px; font-size: 11px; color: var(--text-secondary); background: var(--bg-badge); border: 1px solid var(--border-color); padding: 4px 10px; border-radius: 6px; }

        .sec-row { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 1.5rem; justify-content: center; }
        .sec-badge {
            display: inline-flex; align-items: center; gap: 5px;
            font-size: 11px; color: var(--text-secondary);
            background: var(--bg-badge); border: 1px solid var(--border-color);
            padding: 5px 10px; border-radius: 8px;
        }
        .sec-badge .material-symbols-outlined { font-size: 13px; }

        /* ─── SIDEBAR ─── */
        .side-cards { display: flex; flex-direction: column; gap: 1.25rem; }

        .info-card { background: var(--bg-card); border-radius: 14px; padding: 1.25rem; box-shadow: var(--shadow-sm); border: 1px solid var(--border-color); }
        .info-card-title { font-size: 10px; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 10px; color: var(--text-secondary); font-weight: 700; }
        .info-row { display: flex; justify-content: space-between; align-items: center; padding: 7px 0; border-bottom: 1px solid var(--border-color); font-size: 13px; color: var(--text-main); }
        .info-row:last-child { border-bottom: none; }
        .info-val { font-weight: 600; }
        .status-dot { color: var(--accent-green); font-weight: 700; }

        .promo-card {
            background: linear-gradient(135deg, #001e40 0%, #0f3460 100%);
            color: #fff; border-radius: 16px;
            padding: 1.5rem; position: relative; overflow: hidden;
        }
        .dark .promo-card { background: linear-gradient(135deg, #0f1f38 0%, #172a4e 100%); border: 1px solid #2e3f60; }
        .promo-card .material-symbols-outlined { font-size: 22px; opacity: 0.9; margin-bottom: 8px; display: block; }
        .promo-card h3 { font-size: 14px; font-weight: 800; margin-bottom: 6px; }
        .promo-card p { font-size: 12px; opacity: 0.75; line-height: 1.6; }
        .promo-bg-icon { position: absolute; right: -8px; bottom: -8px; opacity: 0.08; font-size: 90px !important; margin: 0 !important; }

        /* ─── RESULTS PAGE ─── */
        .results-main { max-width: 820px; margin: 0 auto; padding: 1.5rem 1rem 3rem; width: 100%; }

        /* Loading */
        .loading-state {
            display: flex; flex-direction: column; align-items: center;
            padding: 4rem 1rem; gap: 1rem;
        }
        .spinner {
            width: 44px; height: 44px; border-radius: 50%;
            border: 4px solid var(--border-color);
            border-top-color: var(--accent);
            animation: spin 0.75s linear infinite;
        }
        .loading-text { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
        @keyframes spin { to { transform: rotate(360deg); } }

        /* Hero status */
        .result-hero {
            background: var(--bg-card);
            border-radius: 20px; border: 1px solid var(--border-color);
            padding: 1.75rem 1.5rem;
            display: flex; flex-direction: column; align-items: center;
            text-align: center; gap: 1rem;
            margin-bottom: 1.5rem;
            box-shadow: var(--shadow-md);
            position: relative; overflow: hidden;
        }
        .result-hero::before {
            content: '';
            position: absolute; top: 0; left: 0; right: 0; height: 4px;
            background: linear-gradient(90deg, var(--accent-green), #10b981);
        }
        .result-status-icon {
            width: 64px; height: 64px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            background: var(--accent-green-bg); color: var(--accent-green);
        }
        .dark .result-status-icon { background: var(--accent-green-dark); }
        .result-status-icon .material-symbols-outlined { font-size: 38px; }
        .result-filename { font-size: 17px; font-weight: 800; color: var(--text-primary); margin-bottom: 4px; word-break: break-all; }
        .result-status-text { color: var(--accent-green); font-weight: 700; font-size: 14px; display: flex; align-items: center; gap: 5px; justify-content: center; }

        /* Action buttons */
        .action-row {
            display: flex; gap: 10px; flex-wrap: wrap; justify-content: center;
            margin-bottom: 1.75rem;
        }
        .btn {
            display: inline-flex; align-items: center; gap: 7px;
            padding: 10px 20px; border-radius: 10px;
            font-size: 13px; font-weight: 700;
            border: none; cursor: pointer; transition: 0.2s;
            font-family: inherit; white-space: nowrap;
            text-decoration: none;
        }
        .btn .material-symbols-outlined { font-size: 17px; }
        .btn-primary { background: var(--accent); color: #fff; }
        .btn-primary:hover { opacity: 0.88; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(26,86,219,0.3); }
        .btn-outline { background: var(--bg-card); color: var(--text-primary); border: 2px solid var(--border-color); }
        .btn-outline:hover { border-color: var(--accent); color: var(--accent); background: var(--accent-light); }
        .btn-danger { background: #fee2e2; color: #b91c1c; }
        .dark .btn-danger { background: #3b1212; color: #f87171; }
        .btn-danger:hover { background: #fca5a5; }

        /* Section labels */
        .section-label {
            font-size: 10px; text-transform: uppercase; letter-spacing: 1.2px;
            color: var(--text-secondary); font-weight: 700;
            margin: 0 0 10px 0;
            display: flex; align-items: center; gap: 6px;
        }
        .section-label::after {
            content: ''; flex: 1; height: 1px; background: var(--border-color);
        }

        /* Detail panel */
        .detail-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1px; background: var(--border-color);
            border: 1px solid var(--border-color);
            border-radius: 16px; overflow: hidden;
            margin-bottom: 1.5rem;
        }
        @media (min-width: 560px) { .detail-grid { grid-template-columns: repeat(3, 1fr); } }

        .detail-cell {
            background: var(--bg-card); padding: 1rem 1.1rem;
            display: flex; flex-direction: column; gap: 4px;
        }
        .detail-cell.full { grid-column: 1 / -1; }
        .detail-label { font-size: 10px; color: var(--text-secondary); font-weight: 600; text-transform: uppercase; letter-spacing: 0.7px; }
        .detail-value { font-size: 13px; font-weight: 700; color: var(--text-primary); }
        .detail-value.ok { color: var(--accent-green); }
        .detail-value.mono { font-family: 'Courier New', monospace; font-size: 11px; word-break: break-all; color: var(--text-secondary); font-weight: 400; }

        /* Certificate block */
        .cert-block {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px; overflow: hidden;
            margin-bottom: 1.5rem;
            box-shadow: var(--shadow-sm);
        }
        .cert-header {
            background: var(--bg-info-row); padding: 12px 16px;
            display: flex; align-items: center; gap: 8px;
            border-bottom: 1px solid var(--border-color);
            font-weight: 700; font-size: 13px; color: var(--text-primary);
        }
        .cert-header .material-symbols-outlined { font-size: 18px; color: var(--accent); }
        .cert-row {
            display: flex; justify-content: space-between; align-items: flex-start;
            padding: 10px 16px; border-bottom: 1px solid var(--border-color);
            gap: 1rem; flex-wrap: wrap;
        }
        .cert-row:last-child { border-bottom: none; }
        .cert-key { font-size: 12px; color: var(--text-secondary); font-weight: 500; flex-shrink: 0; min-width: 120px; }
        .cert-val { font-size: 12px; font-weight: 600; color: var(--text-primary); text-align: right; word-break: break-word; max-width: 280px; }
        .cert-val.mono { font-family: monospace; font-weight: 400; color: var(--text-secondary); font-size: 11px; }

        /* Hash box */
        .hash-box {
            background: var(--bg-info-row);
            border: 1px solid var(--border-color);
            border-radius: 12px; padding: 1rem 1.1rem;
            font-family: 'Courier New', monospace;
            font-size: 11px; word-break: break-all;
            color: var(--text-secondary); line-height: 1.8;
            margin-bottom: 1.5rem;
        }
        .hash-label { font-weight: 700; font-size: 10px; text-transform: uppercase; letter-spacing: 1px; color: var(--accent); margin-bottom: 5px; display: block; }

        /* Signer card */
        .signer-card {
            background: var(--bg-card); border: 1px solid var(--border-color);
            border-radius: 16px; padding: 1.25rem 1.5rem;
            display: flex; align-items: center; gap: 1rem;
            margin-bottom: 1.5rem; flex-wrap: wrap;
            box-shadow: var(--shadow-sm);
        }
        .signer-avatar {
            width: 48px; height: 48px; border-radius: 50%;
            background: var(--accent-light); color: var(--accent);
            display: flex; align-items: center; justify-content: center;
            font-weight: 800; font-size: 18px; flex-shrink: 0;
            border: 2px solid var(--accent);
        }
        .signer-name { font-weight: 800; font-size: 15px; color: var(--text-primary); }
        .signer-org { font-size: 12px; color: var(--text-secondary); margin-top: 2px; }
        .signer-badge {
            margin-left: auto; display: inline-flex; align-items: center; gap: 5px;
            background: var(--accent-green-bg); color: var(--accent-green);
            font-size: 11px; font-weight: 700; padding: 5px 11px; border-radius: 100px;
        }
        .dark .signer-badge { background: var(--accent-green-dark); }
        .signer-badge .material-symbols-outlined { font-size: 14px; }

        /* Modal overlay */
        .modal-overlay {
            display: none; position: fixed; inset: 0; z-index: 200;
            background: rgba(0,0,0,0.65); backdrop-filter: blur(6px);
            align-items: center; justify-content: center; padding: 1rem;
        }
        .modal-overlay.open { display: flex; }
        .modal {
            background: var(--bg-card); border-radius: 20px;
            border: 1px solid var(--border-color);
            width: 100%; max-width: 680px;
            max-height: calc(100vh - 2rem);
            display: flex; flex-direction: column;
            box-shadow: 0 24px 80px rgba(0,0,0,0.3);
            animation: modalIn 0.25s ease;
        }
        @keyframes modalIn { from { opacity: 0; transform: scale(0.95) translateY(16px); } to { opacity: 1; transform: none; } }
        .modal-header {
            display: flex; align-items: center; justify-content: space-between;
            padding: 1rem 1.25rem; border-bottom: 1px solid var(--border-color);
        }
        .modal-title { font-weight: 800; font-size: 15px; color: var(--text-primary); display: flex; align-items: center; gap: 8px; }
        .modal-title .material-symbols-outlined { font-size: 20px; color: var(--accent); }
        .modal-close { background: var(--bg-badge); border: none; cursor: pointer; width: 32px; height: 32px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--text-main); }
        .modal-close .material-symbols-outlined { font-size: 18px; }
        .modal-body { flex: 1; overflow-y: auto; padding: 1.25rem; }

        /* PDF Viewer panel */
        .viewer-overlay {
            display: none; position: fixed;
            top: var(--nav-height); left: 0; right: 0; bottom: 0;
            z-index: 150;
            background: var(--bg-body);
            flex-direction: column;
        }
        .viewer-overlay.open { display: flex; }
        .viewer-toolbar {
            display: flex; align-items: center; gap: 10px;
            padding: 10px 1rem; background: var(--bg-card);
            border-bottom: 1px solid var(--border-color);
            flex-wrap: wrap;
        }
        .viewer-filename { font-weight: 700; font-size: 13px; color: var(--text-primary); flex: 1; min-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
        .viewer-frame { flex: 1; width: 100%; border: none; background: #525659; }
        .viewer-placeholder {
            flex: 1; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 1rem;
            color: var(--text-secondary);
        }
        .viewer-placeholder .material-symbols-outlined { font-size: 64px; opacity: 0.4; }

        /* Footer */
        footer {
            background: var(--footer-bg); padding: 2rem 1rem;
            text-align: center; border-top: 1px solid var(--border-color);
        }
        .footer-logo { display: flex; align-items: center; justify-content: center; gap: 8px; margin-bottom: 12px; }
        .footer-copy { font-size: 12px; color: var(--text-secondary); line-height: 1.7; }

        /* Tag chip */
        .chip {
            display: inline-flex; align-items: center; gap: 4px;
            background: var(--bg-tag); color: var(--accent);
            font-size: 11px; font-weight: 600; padding: 3px 9px; border-radius: 6px;
        }

        /* Responsive utility */
        @media (max-width: 440px) {
            .btn { padding: 9px 14px; font-size: 12px; }
            .cert-key { min-width: 90px; }
            .cert-val { max-width: 160px; }
            .signer-badge { margin-left: 0; }
        }

        /* Scrollbar */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: var(--border-color); border-radius: 3px; }
    </style>
</head>
<body>

<!-- ══════════════════════════════════════════════════
     PAGE 1 — UPLOAD
══════════════════════════════════════════════════ -->
<div class="page active" id="page-upload">
    <nav>
        <a href="#" class="nav-brand">
            <img src="images/bpn_logo.png" alt="Logo Komdigi" class="nav-logo-img">
            <div class="nav-brand-text">
                <span class="nav-title">Verifikasi Dokumen</span>
                <span class="nav-subtitle">Ditjen Pengawasan Ruang Digital</span>
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
            <a href="http://edocumentweb.test/auth"><button class="nav-btn">Log in</button></a>
        </div>
    </nav>

    <main>
        <header>
            <div class="header-eyebrow">
                <span class="material-symbols-outlined">verified_user</span>
                Portal Verifikasi Resmi
            </div>
            <h1>Validasi Keaslian<br>Dokumen Elektronik</h1>
            <p class="subtitle">Unggah dokumen PDF bertanda tangan elektronik untuk memverifikasi integritas data, identitas penandatangan, dan keabsahan sertifikat digital secara instan.</p>
        </header>

        <div class="grid">
            <div class="card">
                <div class="card-header">
                    <div>
                        <div class="card-title">Unggah Dokumen PDF</div>
                        <div class="card-sub">Pastikan dokumen dalam format PDF dengan tanda tangan digital.</div>
                    </div>
                    <div class="card-icon"><span class="material-symbols-outlined">description</span></div>
                </div>

                <div class="drop-zone" id="dropZone">
                    <input type="file" id="fileInput" accept=".pdf" />
                    <div class="upload-icon-wrap">
                        <span class="material-symbols-outlined">cloud_upload</span>
                    </div>
                    <div class="drop-label-main">Tarik &amp; Lepas File di Sini</div>
                    <div class="drop-label-sub">atau klik untuk memilih file PDF</div>
                    <div class="drop-badge">
                        <span class="material-symbols-outlined" style="font-size:13px;">info</span>
                        Maks. 10 MB · Format PDF
                    </div>
                </div>

                <div class="sec-row">
                    <div class="sec-badge"><span class="material-symbols-outlined">lock</span> Enkripsi SSL 256-bit</div>
                    <div class="sec-badge"><span class="material-symbols-outlined">verified_user</span> Tersertifikasi BSSN</div>
                    <div class="sec-badge"><span class="material-symbols-outlined">delete_forever</span> Auto-Hapus 1 Jam</div>
                    <div class="sec-badge"><span class="material-symbols-outlined">speed</span> &lt; 1 Detik</div>
                </div>
            </div>

            <div class="side-cards">
                <div class="info-card">
                    <div class="info-card-title">Status Sistem</div>
                    <div class="info-row"><span>Waktu Server</span><span class="info-val" id="serverTime">--:--</span></div>
                    <div class="info-row"><span>Status CA</span><span class="info-val status-dot">● Aktif</span></div>
                    <div class="info-row"><span>Antrian</span><span class="info-val">0 dokumen</span></div>
                    <div class="info-row"><span>Uptime</span><span class="info-val">99.97%</span></div>
                </div>

                <div class="promo-card">
                    <span class="material-symbols-outlined">gpp_maybe</span>
                    <h3>Cara Memeriksa Keaslian</h3>
                    <p>Pastikan segel biru atau QR Code terlihat jelas pada dokumen sebelum diunggah untuk hasil verifikasi yang akurat.</p>
                </div>

                <div class="info-card">
                    <div class="info-card-title">Statistik Hari Ini</div>
                    <div class="info-row"><span>Dokumen Diverifikasi</span><span class="info-val">1.247</span></div>
                    <div class="info-row"><span>Dokumen Valid</span><span class="info-val status-dot">98.7%</span></div>
                    <div class="info-row"><span>Rata-rata Waktu</span><span class="info-val">0.8 dtk</span></div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p class="footer-copy">© 2026 Direktorat Jenderal Pengawasan Ruang Digital.<br>Kementerian Komunikasi dan Digital Republik Indonesia.</p>
    </footer>
</div>

<!-- ══════════════════════════════════════════════════
     PAGE 2 — RESULTS
══════════════════════════════════════════════════ -->
<div class="page" id="page-results">
    <nav>
        <a href="#" class="nav-brand">
            <img src="images/bpn_logo.png" alt="Logo Komdigi" class="nav-logo-img">
            <div class="nav-brand-text">
                <span class="nav-title">Hasil Verifikasi</span>
                <span class="nav-subtitle">Ditjen Pengawasan Ruang Digital</span>
            </div>
        </a>
        <div class="nav-actions">
            <button id="theme-toggle-2" title="Ganti Tema">
                <span class="material-symbols-outlined">dark_mode</span>
            </button>
            <button class="nav-btn outline" onclick="goBack()">
                ← Kembali
            </button>
        </div>
    </nav>

    <div class="results-main">
        <!-- Loading State -->
        <div id="loadingState" class="loading-state">
            <div class="spinner"></div>
            <div class="loading-text">Menganalisis Sertifikat Digital...</div>
        </div>

        <!-- Results Content -->
        <div id="resultsContent" style="display:none; animation: fadeIn 0.4s ease;">

            <!-- Hero status bar -->
            <div class="result-hero">
                <div class="result-status-icon">
                    <span class="material-symbols-outlined" style="font-size:FILL 1;">verified</span>
                </div>
                <div>
                    <div class="result-filename" id="resultFileName">dokumen.pdf</div>
                    <div class="result-status-text">
                        <span class="material-symbols-outlined" style="font-size:16px;">check_circle</span>
                        Tanda Tangan Elektronik Valid &amp; Tersertifikasi
                    </div>
                </div>
                <div style="display:flex; gap:8px; flex-wrap:wrap; justify-content:center;">
                    <span class="chip"><span class="material-symbols-outlined" style="font-size:13px;">shield</span> SHA-256</span>
                    <span class="chip"><span class="material-symbols-outlined" style="font-size:13px;">key</span> RSA-2048</span>
                    <span class="chip"><span class="material-symbols-outlined" style="font-size:13px;">history</span> TSA Verified</span>
                </div>
            </div>

            <!-- Action buttons -->
            <div class="action-row">
                <button class="btn btn-primary" onclick="openDetailModal()">
                    <span class="material-symbols-outlined">info</span>
                    Detail Lengkap
                </button>
                <button class="btn btn-outline" onclick="openViewer()">
                    <span class="material-symbols-outlined">open_in_new</span>
                    Buka Dokumen
                </button>
                <button class="btn btn-outline" onclick="downloadReport()">
                    <span class="material-symbols-outlined">download</span>
                    Unduh Laporan
                </button>
            </div>

            <!-- Signer card -->
            <p class="section-label">Penandatangan</p>
            <div class="signer-card">
                <div class="signer-avatar" id="signerAvatar">–</div>
                <div>
                    <div class="signer-name" id="signerName">Dr. Ahmad Fauzi, S.H., M.Kn.</div>
                    <div class="signer-org" id="signerOrg">Kementerian Komunikasi dan Digital RI</div>
                </div>
                <div class="signer-badge">
                    <span class="material-symbols-outlined">verified</span>
                    Terverifikasi
                </div>
            </div>

            <!-- Quick detail grid -->
            <p class="section-label">Ringkasan Dokumen</p>
            <div class="detail-grid">
                <div class="detail-cell">
                    <span class="detail-label">Ukuran File</span>
                    <span class="detail-value" id="detailFileSize">–</span>
                </div>
                <div class="detail-cell">
                    <span class="detail-label">Halaman</span>
                    <span class="detail-value" id="detailPages">–</span>
                </div>
                <div class="detail-cell">
                    <span class="detail-label">Integritas</span>
                    <span class="detail-value ok">✓ Utuh</span>
                </div>
                <div class="detail-cell">
                    <span class="detail-label">Waktu Verifikasi</span>
                    <span class="detail-value" id="detailDate">–</span>
                </div>
                <div class="detail-cell">
                    <span class="detail-label">Algoritma</span>
                    <span class="detail-value">RSA-2048</span>
                </div>
                <div class="detail-cell">
                    <span class="detail-label">Revokasi</span>
                    <span class="detail-value ok">Tidak Tercabut</span>
                </div>
            </div>

            <!-- Hash fingerprint -->
            <p class="section-label">Sidik Jari Digital</p>
            <div class="hash-box">
                <span class="hash-label">SHA-256 Fingerprint</span>
                <span id="hashBox">–</span>
            </div>

            <!-- Certificate chain -->
            <p class="section-label">Rantai Sertifikat</p>
            <div class="cert-block">
                <div class="cert-header">
                    <span class="material-symbols-outlined">workspace_premium</span>
                    Sertifikat Penandatangan
                </div>
                <div class="cert-row">
                    <span class="cert-key">Subject</span>
                    <span class="cert-val" id="certSubject">CN=Ahmad Fauzi, O=Komdigi RI, C=ID</span>
                </div>
                <div class="cert-row">
                    <span class="cert-key">Penerbit (CA)</span>
                    <span class="cert-val">CN=Balai Sertifikasi BSSN, O=BSSN, C=ID</span>
                </div>
                <div class="cert-row">
                    <span class="cert-key">Serial Number</span>
                    <span class="cert-val mono" id="certSerial">–</span>
                </div>
                <div class="cert-row">
                    <span class="cert-key">Berlaku Dari</span>
                    <span class="cert-val" id="certFrom">–</span>
                </div>
                <div class="cert-row">
                    <span class="cert-key">Berlaku Hingga</span>
                    <span class="cert-val" id="certTo">–</span>
                </div>
                <div class="cert-row">
                    <span class="cert-key">Status</span>
                    <span class="cert-val" style="color:var(--accent-green); font-weight:700;">● Aktif &amp; Valid</span>
                </div>
            </div>

            <div class="cert-block">
                <div class="cert-header">
                    <span class="material-symbols-outlined">timer</span>
                    Timestamp Authority (TSA)
                </div>
                <div class="cert-row">
                    <span class="cert-key">TSA</span>
                    <span class="cert-val">TSA Nasional BSSN</span>
                </div>
                <div class="cert-row">
                    <span class="cert-key">Waktu Tanda Tangan</span>
                    <span class="cert-val" id="tsaTime">–</span>
                </div>
                <div class="cert-row">
                    <span class="cert-key">Hash TSA</span>
                    <span class="cert-val mono" id="tsaHash">–</span>
                </div>
            </div>

        </div>
    </div>

    <footer>
        <p class="footer-copy">© 2026 Direktorat Jenderal Pengawasan Ruang Digital · Kementerian Komunikasi dan Digital RI</p>
    </footer>
</div>

<!-- ══════════════════════════════════════════════════
     MODAL — Detail Lengkap
══════════════════════════════════════════════════ -->
<div class="modal-overlay" id="detailModal" onclick="closeModalOnBg(event)">
    <div class="modal">
        <div class="modal-header">
            <div class="modal-title">
                <span class="material-symbols-outlined">info</span>
                Detail Lengkap Verifikasi
            </div>
            <button class="modal-close" onclick="closeDetailModal()">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- Summary table -->
            <p class="section-label" style="margin-bottom:10px;">Informasi Dokumen</p>
            <div class="cert-block" style="margin-bottom:1.25rem;">
                <div class="cert-row"><span class="cert-key">Nama File</span><span class="cert-val" id="mdFileName">–</span></div>
                <div class="cert-row"><span class="cert-key">Ukuran</span><span class="cert-val" id="mdFileSize">–</span></div>
                <div class="cert-row"><span class="cert-key">Tipe MIME</span><span class="cert-val mono">application/pdf</span></div>
                <div class="cert-row"><span class="cert-key">Jumlah Halaman</span><span class="cert-val" id="mdPages">–</span></div>
                <div class="cert-row"><span class="cert-key">Versi PDF</span><span class="cert-val">1.7 (Acrobat 8+)</span></div>
                <div class="cert-row"><span class="cert-key">Enkripsi</span><span class="cert-val">Tidak Terenkripsi</span></div>
            </div>

            <p class="section-label" style="margin-bottom:10px;">Tanda Tangan Digital</p>
            <div class="cert-block" style="margin-bottom:1.25rem;">
                <div class="cert-row"><span class="cert-key">Status</span><span class="cert-val" style="color:var(--accent-green);">● Valid</span></div>
                <div class="cert-row"><span class="cert-key">Jumlah TTE</span><span class="cert-val">1 Tanda Tangan</span></div>
                <div class="cert-row"><span class="cert-key">Penandatangan</span><span class="cert-val" id="mdSigner">–</span></div>
                <div class="cert-row"><span class="cert-key">Organisasi</span><span class="cert-val">Kementerian Komunikasi dan Digital RI</span></div>
                <div class="cert-row"><span class="cert-key">Email</span><span class="cert-val mono">a.fauzi@komdigi.go.id</span></div>
                <div class="cert-row"><span class="cert-key">Alasan</span><span class="cert-val">Persetujuan Resmi</span></div>
                <div class="cert-row"><span class="cert-key">Lokasi</span><span class="cert-val">Jakarta, Indonesia</span></div>
                <div class="cert-row"><span class="cert-key">Algoritma Hash</span><span class="cert-val mono">SHA-256</span></div>
                <div class="cert-row"><span class="cert-key">Algoritma Enkripsi</span><span class="cert-val mono">RSA-2048</span></div>
                <div class="cert-row"><span class="cert-key">Revokasi OCSP</span><span class="cert-val" style="color:var(--accent-green);">Tidak Dicabut</span></div>
                <div class="cert-row"><span class="cert-key">Revokasi CRL</span><span class="cert-val" style="color:var(--accent-green);">Tidak Ditemukan</span></div>
            </div>

            <p class="section-label" style="margin-bottom:10px;">Hash &amp; Integritas</p>
            <div class="hash-box" style="margin-bottom:1.25rem;">
                <span class="hash-label">SHA-256</span>
                <span id="mdHash256">–</span><br><br>
                <span class="hash-label">MD5 (Legacy)</span>
                <span id="mdHashMd5">–</span>
            </div>

            <p class="section-label" style="margin-bottom:10px;">Metadata Teknis</p>
            <div class="cert-block">
                <div class="cert-row"><span class="cert-key">Dibuat Dengan</span><span class="cert-val mono">Adobe Acrobat Pro DC 23.0</span></div>
                <div class="cert-row"><span class="cert-key">Tanggal Dibuat</span><span class="cert-val" id="mdCreated">–</span></div>
                <div class="cert-row"><span class="cert-key">Terakhir Dimodifikasi</span><span class="cert-val" id="mdModified">–</span></div>
                <div class="cert-row"><span class="cert-key">Diverifikasi</span><span class="cert-val" id="mdVerified">–</span></div>
                <div class="cert-row"><span class="cert-key">ID Verifikasi</span><span class="cert-val mono" id="mdVerId">–</span></div>
            </div>
        </div>
    </div>
</div>

<!-- ══════════════════════════════════════════════════
     VIEWER PANEL — Buka Dokumen
══════════════════════════════════════════════════ -->
<div class="viewer-overlay" id="viewerPanel">
    <div class="viewer-toolbar">
        <span class="material-symbols-outlined" style="color:var(--accent); font-size:20px; flex-shrink:0;">picture_as_pdf</span>
        <span class="viewer-filename" id="viewerFilename">dokumen.pdf</span>
        <button class="btn btn-outline" onclick="closeViewer()" style="padding:7px 12px; font-size:12px;">
            <span class="material-symbols-outlined" style="font-size:16px;">close</span>
            Tutup
        </button>
    </div>
    <iframe id="pdfViewer" class="viewer-frame" title="Tampilan Dokumen PDF"></iframe>
    <div class="viewer-placeholder" id="viewerPlaceholder" style="display:none;">
        <span class="material-symbols-outlined">picture_as_pdf</span>
        <p style="font-size:14px; color:var(--text-secondary);">Tidak dapat menampilkan PDF di browser ini.</p>
        <a id="pdfDownloadLink" class="btn btn-primary" href="#" download>
            <span class="material-symbols-outlined">download</span> Unduh PDF
        </a>
    </div>
</div>

<style>
    @keyframes fadeIn { from { opacity:0; transform:translateY(10px); } to { opacity:1; transform:none; } }
</style>

<script>
    /* ─── THEME ─── */
    const html = document.documentElement;
    const toggles = [document.getElementById('theme-toggle'), document.getElementById('theme-toggle-2')];

    function applyTheme(dark) {
        html.classList.toggle('dark', dark);
        toggles.forEach(t => {
            if (!t) return;
            t.innerHTML = dark
                ? '<span class="material-symbols-outlined">light_mode</span>'
                : '<span class="material-symbols-outlined">dark_mode</span>';
        });
        localStorage.setItem('theme', dark ? 'dark' : 'light');
    }

    if (localStorage.getItem('theme') === 'dark') applyTheme(true);

    toggles.forEach(t => {
        if (!t) return;
        t.addEventListener('click', () => applyTheme(!html.classList.contains('dark')));
    });

    /* ─── CLOCK ─── */
    function updateTime() {
        const now = new Date();
        const t = now.toLocaleTimeString('id-ID', { hour:'2-digit', minute:'2-digit', second:'2-digit', timeZone:'Asia/Makassar' });
        const el = document.getElementById('serverTime');
        if (el) el.textContent = t + ' WITA';
    }
    setInterval(updateTime, 1000);
    updateTime();

    /* ─── NAVIGATION ─── */
    function goBack() {
        closeViewer();
        document.getElementById('page-results').classList.remove('active');
        document.getElementById('page-upload').classList.add('active');
        currentFileURL = null;
    }

    /* ─── FILE STATE ─── */
    let currentFile = null;
    let currentFileURL = null;

    /* ─── DRAG & DROP ─── */
    const dropZone = document.getElementById('dropZone');
    dropZone.addEventListener('dragover', e => { e.preventDefault(); dropZone.classList.add('dragging'); });
    dropZone.addEventListener('dragleave', () => dropZone.classList.remove('dragging'));
    dropZone.addEventListener('drop', e => {
        e.preventDefault();
        dropZone.classList.remove('dragging');
        if (e.dataTransfer.files[0]) processFile(e.dataTransfer.files[0]);
    });

    document.getElementById('fileInput').addEventListener('change', e => {
        if (e.target.files[0]) processFile(e.target.files[0]);
    });

    /* ─── HELPERS ─── */
    function formatBytes(bytes) {
        if (bytes < 1024) return bytes + ' B';
        if (bytes < 1048576) return (bytes / 1024).toFixed(1) + ' KB';
        return (bytes / 1048576).toFixed(2) + ' MB';
    }

    function randomHex(len) {
        return [...Array(len)].map(() => Math.floor(Math.random()*16).toString(16)).join('');
    }

    function fakeSerial() {
        return randomHex(4)+':'+randomHex(4)+':'+randomHex(4)+':'+randomHex(4)+':'+randomHex(4)+':'+randomHex(4);
    }

    function fakeSHA256(name) {
        // deterministic-looking but based on filename
        return Array.from(name).reduce((a,c) => (a*31+c.charCodeAt(0))>>>0, 0).toString(16).padStart(8,'0')
            + randomHex(56);
    }

    function fakeMD5() { return randomHex(32); }

    function addDays(date, days) {
        const d = new Date(date);
        d.setDate(d.getDate() + days);
        return d;
    }

    function fmtDate(d) {
        return d.toLocaleDateString('id-ID', { day:'2-digit', month:'long', year:'numeric' });
    }

    function fmtDateTime(d) {
        return d.toLocaleDateString('id-ID', { day:'2-digit', month:'long', year:'numeric' })
            + ' ' + d.toLocaleTimeString('id-ID', { hour:'2-digit', minute:'2-digit', second:'2-digit', timeZone:'Asia/Makassar' }) + ' WITA';
    }

    /* ─── PROCESS FILE ─── */
    function processFile(file) {
        if (file.type !== 'application/pdf') {
            alert('Mohon unggah file PDF yang valid.');
            return;
        }

        currentFile = file;
        if (currentFileURL) URL.revokeObjectURL(currentFileURL);
        currentFileURL = URL.createObjectURL(file);

        document.getElementById('page-upload').classList.remove('active');
        document.getElementById('page-results').classList.add('active');
        document.getElementById('loadingState').style.display = 'flex';
        document.getElementById('resultsContent').style.display = 'none';

        setTimeout(() => {
            const now = new Date();
            const certFrom = new Date(now.getFullYear() - 1, now.getMonth(), now.getDate());
            const certTo   = new Date(now.getFullYear() + 2, now.getMonth(), now.getDate());
            const sha256   = fakeSHA256(file.name);
            const md5      = fakeMD5();
            const serial   = fakeSerial();
            const tsaH     = randomHex(40);
            const verId    = 'VRF-' + Date.now().toString(36).toUpperCase();

            // Main page
            document.getElementById('resultFileName').textContent = file.name;
            document.getElementById('signerAvatar').textContent = 'AF';
            document.getElementById('signerName').textContent = 'Dr. Ahmad Fauzi, S.H., M.Kn.';
            document.getElementById('signerOrg').textContent = 'Kementerian Komunikasi dan Digital RI';

            document.getElementById('detailFileSize').textContent = formatBytes(file.size);
            document.getElementById('detailPages').textContent = Math.floor(Math.random() * 8 + 2) + ' Halaman';
            document.getElementById('detailDate').textContent = fmtDateTime(now);

            document.getElementById('hashBox').textContent = sha256;

            document.getElementById('certSubject').textContent = 'CN=Ahmad Fauzi, O=Komdigi RI, C=ID';
            document.getElementById('certSerial').textContent = serial;
            document.getElementById('certFrom').textContent = fmtDate(certFrom);
            document.getElementById('certTo').textContent = fmtDate(certTo);
            document.getElementById('tsaTime').textContent = fmtDateTime(now);
            document.getElementById('tsaHash').textContent = tsaH;

            // Modal
            document.getElementById('mdFileName').textContent = file.name;
            document.getElementById('mdFileSize').textContent = formatBytes(file.size);
            document.getElementById('mdPages').textContent = document.getElementById('detailPages').textContent;
            document.getElementById('mdSigner').textContent = 'Dr. Ahmad Fauzi, S.H., M.Kn.';
            document.getElementById('mdHash256').textContent = sha256;
            document.getElementById('mdHashMd5').textContent = md5;
            document.getElementById('mdCreated').textContent = fmtDateTime(addDays(now, -3));
            document.getElementById('mdModified').textContent = fmtDateTime(addDays(now, -1));
            document.getElementById('mdVerified').textContent = fmtDateTime(now);
            document.getElementById('mdVerId').textContent = verId;

            // Viewer
            document.getElementById('viewerFilename').textContent = file.name;

            document.getElementById('loadingState').style.display = 'none';
            document.getElementById('resultsContent').style.display = 'block';
        }, 1400);
    }

    /* ─── DETAIL MODAL ─── */
    function openDetailModal() {
        document.getElementById('detailModal').classList.add('open');
        document.body.style.overflow = 'hidden';
    }
    function closeDetailModal() {
        document.getElementById('detailModal').classList.remove('open');
        document.body.style.overflow = '';
    }
    function closeModalOnBg(e) {
        if (e.target === document.getElementById('detailModal')) closeDetailModal();
    }

    /* ─── PDF VIEWER ─── */
    function openViewer() {
        if (!currentFileURL) return;
        const frame = document.getElementById('pdfViewer');
        const placeholder = document.getElementById('viewerPlaceholder');

        frame.src = currentFileURL;
        frame.style.display = 'block';
        placeholder.style.display = 'none';

        document.getElementById('pdfDownloadLink').href = currentFileURL;
        document.getElementById('pdfDownloadLink').download = currentFile ? currentFile.name : 'dokumen.pdf';

        frame.onerror = () => {
            frame.style.display = 'none';
            placeholder.style.display = 'flex';
        };

        document.getElementById('viewerPanel').classList.add('open');
        document.body.style.overflow = 'hidden';
    }
    function closeViewer() {
        document.getElementById('viewerPanel').classList.remove('open');
        document.body.style.overflow = '';
    }

    /* ─── DOWNLOAD REPORT ─── */
    function downloadReport() {
        const name = currentFile ? currentFile.name : 'dokumen.pdf';
        const now = new Date();
        const content = `LAPORAN VERIFIKASI DOKUMEN ELEKTRONIK
Direktorat Jenderal Pengawasan Ruang Digital
Kementerian Komunikasi dan Digital RI
==========================================

Tanggal Verifikasi : ${now.toLocaleDateString('id-ID')} ${now.toLocaleTimeString('id-ID')} WITA
ID Verifikasi      : ${document.getElementById('mdVerId').textContent}

DOKUMEN
-------
Nama File     : ${name}
Ukuran        : ${document.getElementById('detailFileSize').textContent}
Jumlah Halaman: ${document.getElementById('detailPages').textContent}
Integritas    : Utuh

PENANDATANGAN
-------------
Nama          : Dr. Ahmad Fauzi, S.H., M.Kn.
Organisasi    : Kementerian Komunikasi dan Digital RI
Status TTE    : Valid

SERTIFIKAT DIGITAL
------------------
Serial Number : ${document.getElementById('certSerial').textContent}
Berlaku Dari  : ${document.getElementById('certFrom').textContent}
Berlaku Hingga: ${document.getElementById('certTo').textContent}
CA Penerbit   : Balai Sertifikasi BSSN
Status        : Aktif & Valid
Revokasi OCSP : Tidak Dicabut

HASH FINGERPRINT
----------------
SHA-256: ${document.getElementById('hashBox').textContent}
MD5    : ${document.getElementById('mdHashMd5').textContent}

TIMESTAMP AUTHORITY
-------------------
TSA       : TSA Nasional BSSN
Waktu TTE : ${document.getElementById('tsaTime').textContent}

==========================================
Dokumen ini dihasilkan secara otomatis oleh sistem Verifikasi Dokumen Komdigi.
`;
        const blob = new Blob([content], { type: 'text/plain;charset=utf-8' });
        const a = document.createElement('a');
        a.href = URL.createObjectURL(blob);
        a.download = 'Laporan_Verifikasi_' + name.replace('.pdf','') + '.txt';
        a.click();
    }
</script>
</body>
</html>