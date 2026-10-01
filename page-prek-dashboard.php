<?php
/**
 * Template Name: Georgia Pre-K Compliance Dashboard
 *
 * Real-Time Cockpit tracking DECAL compliance, student dossiers, and parent uploads
 *
 * @package kidazzle
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KIDazzle | Georgia Lottery Pre-K DECAL Compliance & Parent Upload Cockpit</title>
  <meta name="description" content="Executive Real-Time Compliance Dashboard tracking DECAL state audit readiness, parent document uploads, and student dossiers for Class 35485.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg: #0b1329;
      --card-bg: #131f3d;
      --card-border: rgba(255, 255, 255, 0.08);
      --card-hover: #18274d;
      --text: #f8fafc;
      --text-muted: #94a3b8;
      --primary: #3b82f6;
      --primary-light: #60a5fa;
      --accent: #d97706;
      --accent-light: #fbbf24;
      --success: #10b981;
      --success-bg: rgba(16, 185, 129, 0.15);
      --warning: #f59e0b;
      --warning-bg: rgba(245, 158, 11, 0.15);
      --danger: #ef4444;
      --danger-bg: rgba(239, 68, 68, 0.15);
      --info: #06b6d4;
      --info-bg: rgba(6, 182, 212, 0.15);
      --radius: 14px;
      --shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.3);
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: var(--bg);
      color: var(--text);
      line-height: 1.5;
      padding-bottom: 60px;
    }

    .container {
      max-width: 1440px;
      margin: 0 auto;
      padding: 24px 20px;
    }

    /* Top Navigation / Header */
    header {
      background: linear-gradient(180deg, rgba(16, 26, 53, 0.95) 0%, rgba(11, 19, 41, 0.9) 100%);
      border-bottom: 1px solid var(--card-border);
      backdrop-filter: blur(12px);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .header-inner {
      max-width: 1440px;
      margin: 0 auto;
      padding: 16px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 16px;
    }

    .brand-group {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .brand-logo-badge {
      width: 44px;
      height: 44px;
      border-radius: 12px;
      background: linear-gradient(135deg, #d97706, #ef4444);
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
      font-size: 20px;
      color: #ffffff;
      box-shadow: 0 4px 14px rgba(217, 119, 6, 0.35);
    }

    .brand-text h1 {
      font-size: 20px;
      font-weight: 800;
      letter-spacing: -0.02em;
      color: #ffffff;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .brand-text p {
      font-size: 13px;
      color: var(--text-muted);
    }

    .header-actions {
      display: flex;
      align-items: center;
      gap: 10px;
      flex-wrap: wrap;
    }

    .live-pulse {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 12px;
      font-weight: 600;
      color: var(--success);
      background: var(--success-bg);
      padding: 6px 12px;
      border-radius: 20px;
      border: 1px solid rgba(16, 185, 129, 0.3);
    }

    .pulse-dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: var(--success);
      box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7);
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); }
      70% { transform: scale(1); box-shadow: 0 0 0 8px rgba(16, 185, 129, 0); }
      100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
    }

    .btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 13px;
      font-weight: 600;
      padding: 8px 16px;
      border-radius: 8px;
      cursor: pointer;
      text-decoration: none;
      transition: all 0.2s ease;
      border: none;
    }

    .btn-primary {
      background: linear-gradient(135deg, #2563eb, #1d4ed8);
      color: #fff;
      box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
    }
    .btn-primary:hover { background: #1d4ed8; transform: translateY(-1px); }

    .btn-gold {
      background: linear-gradient(135deg, #d97706, #b45309);
      color: #fff;
      box-shadow: 0 4px 12px rgba(217, 119, 6, 0.3);
    }
    .btn-gold:hover { background: #b45309; transform: translateY(-1px); }

    .btn-outline {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid var(--card-border);
      color: var(--text);
    }
    .btn-outline:hover { background: rgba(255, 255, 255, 0.1); }

    /* KPI Cards */
    .kpi-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 16px;
      margin: 24px 0;
    }

    .kpi-card {
      background: var(--card-bg);
      border: 1px solid var(--card-border);
      border-radius: var(--radius);
      padding: 18px 20px;
      box-shadow: var(--shadow);
      position: relative;
      overflow: hidden;
      transition: transform 0.2s ease;
    }
    .kpi-card:hover { transform: translateY(-2px); }

    .kpi-title {
      font-size: 13px;
      color: var(--text-muted);
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      margin-bottom: 6px;
    }

    .kpi-value {
      font-size: 32px;
      font-weight: 800;
      color: #ffffff;
      line-height: 1;
      margin-bottom: 6px;
    }

    .kpi-sub {
      font-size: 12px;
      color: var(--text-muted);
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .kpi-tag {
      display: inline-block;
      padding: 2px 8px;
      border-radius: 4px;
      font-size: 11px;
      font-weight: 700;
    }

    /* Tabs & Search Filter */
    .filter-bar {
      background: var(--card-bg);
      border: 1px solid var(--card-border);
      border-radius: var(--radius);
      padding: 14px 18px;
      margin-bottom: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 14px;
    }

    .filter-tabs {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
    }

    .filter-pill {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid var(--card-border);
      color: var(--text-muted);
      font-size: 13px;
      font-weight: 600;
      padding: 6px 14px;
      border-radius: 20px;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .filter-pill:hover, .filter-pill.active {
      background: var(--primary);
      color: #ffffff;
      border-color: var(--primary);
    }

    .search-box {
      position: relative;
      min-width: 260px;
    }

    .search-box input {
      width: 100%;
      background: rgba(11, 19, 41, 0.8);
      border: 1px solid var(--card-border);
      border-radius: 8px;
      padding: 8px 12px 8px 36px;
      color: #fff;
      font-size: 13px;
      outline: none;
    }
    .search-box input:focus { border-color: var(--primary); }

    .search-icon {
      position: absolute;
      left: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--text-muted);
      font-size: 14px;
    }

    /* Roster Table Card */
    .table-card {
      background: var(--card-bg);
      border: 1px solid var(--card-border);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      overflow: hidden;
    }

    .table-header-bar {
      padding: 16px 20px;
      border-bottom: 1px solid var(--card-border);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .table-title {
      font-size: 16px;
      font-weight: 700;
      color: #fff;
    }

    .table-responsive {
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 13px;
      text-align: left;
    }

    th {
      background: rgba(11, 19, 41, 0.5);
      color: var(--text-muted);
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.04em;
      font-size: 11px;
      padding: 12px 16px;
      border-bottom: 1px solid var(--card-border);
    }

    td {
      padding: 14px 16px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.04);
      vertical-align: middle;
    }

    tr:hover td {
      background: var(--card-hover);
    }

    .student-cell {
      font-weight: 700;
      color: #ffffff;
      font-size: 14px;
    }

    .student-meta {
      font-size: 12px;
      color: var(--text-muted);
      margin-top: 2px;
    }

    .parent-cell {
      font-weight: 600;
      color: #e2e8f0;
    }

    .contact-sub {
      font-size: 11px;
      color: var(--text-muted);
      margin-top: 2px;
    }

    /* Status Badges */
    .badge {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      padding: 4px 10px;
      border-radius: 6px;
      font-size: 12px;
      font-weight: 700;
      white-space: nowrap;
    }

    .badge-success { background: var(--success-bg); color: var(--success); border: 1px solid rgba(16, 185, 129, 0.3); }
    .badge-warning { background: var(--warning-bg); color: var(--warning); border: 1px solid rgba(245, 158, 11, 0.3); }
    .badge-danger { background: var(--danger-bg); color: var(--danger); border: 1px solid rgba(239, 68, 68, 0.3); }
    .badge-info { background: var(--info-bg); color: var(--info); border: 1px solid rgba(6, 182, 212, 0.3); }

    /* Checklist Grid Icons */
    .chk-grid {
      display: flex;
      gap: 4px;
      flex-wrap: wrap;
      max-width: 220px;
    }

    .chk-pill {
      font-size: 10px;
      font-weight: 700;
      padding: 2px 6px;
      border-radius: 4px;
      cursor: default;
    }
    .chk-ok { background: rgba(16, 185, 129, 0.2); color: #10b981; }
    .chk-missing { background: rgba(239, 68, 68, 0.2); color: #f87171; }
    .chk-pending { background: rgba(245, 158, 11, 0.2); color: #fbbf24; }

    /* Uploads indicator */
    .upload-indicator {
      display: flex;
      flex-direction: column;
      gap: 2px;
    }
    .upload-tag {
      font-size: 12px;
      font-weight: 700;
      color: #38bdf8;
    }
    .upload-time {
      font-size: 11px;
      color: var(--text-muted);
    }
    .doc-chips-container {
      display: flex;
      flex-direction: column;
      gap: 4px;
      margin: 4px 0;
    }
    .doc-chip {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      font-size: 11px;
      font-weight: 600;
      color: #38bdf8;
      background: rgba(56, 189, 248, 0.12);
      border: 1px solid rgba(56, 189, 248, 0.28);
      padding: 3px 8px;
      border-radius: 6px;
      text-decoration: none;
      transition: all 0.2s ease;
      max-width: 220px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    .doc-chip:hover {
      background: rgba(56, 189, 248, 0.28);
      border-color: #38bdf8;
      color: #ffffff;
      transform: translateX(2px);
    }

    /* Actions */
    .action-group {
      display: flex;
      gap: 6px;
      align-items: center;
    }

    .btn-sm {
      padding: 5px 10px;
      font-size: 11px;
      border-radius: 6px;
    }

    /* Activity Stream Drawer */
    .activity-section {
      margin-top: 32px;
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 20px;
    }
    @media (max-width: 900px) {
      .activity-section { grid-template-columns: 1fr; }
    }

    .activity-card {
      background: var(--card-bg);
      border: 1px solid var(--card-border);
      border-radius: var(--radius);
      padding: 20px;
      box-shadow: var(--shadow);
    }

    .activity-item {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      padding: 12px 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.04);
    }
    .activity-item:last-child { border-bottom: none; }

    .activity-icon {
      width: 32px;
      height: 32px;
      border-radius: 8px;
      background: rgba(59, 130, 246, 0.15);
      color: var(--primary-light);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      flex-shrink: 0;
    }

    .activity-content {
      flex: 1;
    }
    .activity-title {
      font-weight: 700;
      font-size: 13px;
      color: #fff;
    }
    .activity-meta {
      font-size: 11px;
      color: var(--text-muted);
    }

    /* Quick Links Box */
    .quick-links-card {
      background: var(--card-bg);
      border: 1px solid var(--card-border);
      border-radius: var(--radius);
      padding: 20px;
    }
    .quick-link-btn {
      display: block;
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid var(--card-border);
      padding: 12px 14px;
      border-radius: 8px;
      margin-bottom: 10px;
      text-decoration: none;
      color: #fff;
      transition: all 0.2s ease;
    }
    .quick-link-btn:hover {
      background: var(--card-hover);
      border-color: var(--primary);
    }
    .quick-link-title {
      font-weight: 700;
      font-size: 13px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .quick-link-desc {
      font-size: 11px;
      color: var(--text-muted);
      margin-top: 2px;
    }
  </style>
</head>
<body>

  <!-- Top Navigation -->
  <header>
    <div class="header-inner">
      <div class="brand-group">
        <div class="brand-logo-badge">KD</div>
        <div class="brand-text">
          <h1>Pre-K DECAL Compliance Cockpit</h1>
          <p>KIDazzle Peachtree Summit &bull; GA Lottery Pre-K (Site ID: 33915) &bull; Class 35485</p>
        </div>
      </div>
      <div class="header-actions">
        <div class="live-pulse">
          <div class="pulse-dot"></div>
          <span>LIVE AUTO-SYNC</span>
        </div>
        <a id="btn-master-dossiers" href="/api/prek/download-all-dossiers" class="btn btn-primary" title="Download Master Printable Binder">
          📥 Master Dossier Binder (47 pgs)
        </a>
        <a id="btn-master-notices" href="/api/prek/download-master-notices" class="btn btn-gold" title="Download 20-page Deficiency Notices">
          📄 Master Notices (20 pgs)
        </a>
        <a id="btn-compliance-excel" href="/api/prek/download-compliance-excel" class="btn btn-outline" title="Download Master Excel Roster">
          📊 Excel Roster
        </a>
        <a href="/shorts/prek_video_review.html" target="_blank" class="btn btn-outline" title="Open Pre-K Attendance Video Review">
          🎬 Attendance Video
        </a>
        <button onclick="fetchData()" class="btn btn-outline" title="Refresh Live Data">
          🔄 Refresh
        </button>
      </div>
    </div>
  </header>

  <main class="container">

    <!-- KPI Summary Row -->
    <section class="kpi-grid">
      <div class="kpi-card">
        <div class="kpi-title">Total Pre-K Students</div>
        <div class="kpi-value" id="kpi-total">21</div>
        <div class="kpi-sub">Room 7 Enrolled Class & Verified Applicants</div>
      </div>
      <div class="kpi-card" style="border-top: 3px solid var(--success);">
        <div class="kpi-title">100% DECAL Compliant</div>
        <div class="kpi-value" style="color: var(--success);" id="kpi-compliant">3</div>
        <div class="kpi-sub" id="kpi-compliant-sub"><span class="kpi-tag badge-success">Audit-Ready</span> Coss-DeJessus, Hood, Partee</div>
      </div>
      <div class="kpi-card" style="border-top: 3px solid var(--warning);">
        <div class="kpi-title">Near Complete (1–2 Pending)</div>
        <div class="kpi-value" style="color: var(--warning);" id="kpi-near">9</div>
        <div class="kpi-sub">Primarily Form 3300 / SSN Cards</div>
      </div>
      <div class="kpi-card" style="border-top: 3px solid var(--danger);">
        <div class="kpi-title">Action Needed (3+ Docs)</div>
        <div class="kpi-value" style="color: var(--danger);" id="kpi-action">9</div>
        <div class="kpi-sub">Deficiency Notices Ready</div>
      </div>
      <div class="kpi-card" style="border-top: 3px solid var(--info);">
        <div class="kpi-title">Parent Uploads Processed</div>
        <div class="kpi-value" style="color: var(--info);" id="kpi-uploads">17</div>
        <div class="kpi-sub" id="kpi-uploads-sub">17 Files Received across 8 Students</div>
      </div>
    </section>

    <!-- Filters & Search Bar -->
    <div class="filter-bar">
      <div class="filter-tabs">
        <button class="filter-pill active" onclick="setFilter('all', this)" id="tab-all">All Students (21)</button>
        <button class="filter-pill" onclick="setFilter('uploads', this)" id="tab-uploads">Uploads Received (8)</button>
        <button class="filter-pill" onclick="setFilter('compliant', this)" id="tab-compliant">100% Compliant (3)</button>
        <button class="filter-pill" onclick="setFilter('near', this)" id="tab-near">Near Complete (9)</button>
        <button class="filter-pill" onclick="setFilter('action', this)" id="tab-action">Needs Action (9)</button>
        <button class="filter-pill" onclick="setFilter('f3300', this)" id="tab-f3300">Form 3300 Pending</button>
      </div>
      <div class="search-box">
        <span class="search-icon">🔍</span>
        <input type="text" id="search-input" placeholder="Search student, parent, or ID..." oninput="filterData()">
      </div>
    </div>

    <!-- Student Roster Table -->
    <div class="table-card">
      <div class="table-header-bar">
        <div class="table-title">Enrolled Pre-K Students Compliance Matrix</div>
        <div id="table-count-label" style="font-size: 13px; color: var(--text-muted);">Showing 21 students</div>
      </div>
      <div class="table-responsive">
        <table>
          <thead>
            <tr>
              <th>Student Details</th>
              <th>Parent(s) / Guardian</th>
              <th>Compliance Standing</th>
              <th>Parent Uploads</th>
              <th>DECAL 10-Point Checklist</th>
              <th style="text-align: right;">Action</th>
            </tr>
          </thead>
          <tbody id="roster-tbody">
            <tr>
              <td colspan="6" style="text-align: center; padding: 40px; color: var(--text-muted);">
                Loading live Pre-K student database...
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Activity Section -->
    <div class="activity-section">
      <!-- Live Parent Upload Feed -->
      <div class="activity-card">
        <h3 style="font-size: 16px; font-weight: 700; color: #fff; margin-bottom: 16px;">
          📡 Real-Time Parent Upload Activity Feed
        </h3>
        <div id="activity-feed-list">
          <!-- Populated by JS -->
        </div>
      </div>

      <!-- Quick Executive Actions & Reference -->
      <div class="quick-links-card">
        <h3 style="font-size: 16px; font-weight: 700; color: #fff; margin-bottom: 16px;">
          ⚡ Executive File Actions
        </h3>
        
        <a id="link-master-dossiers" href="/api/prek/download-all-dossiers" class="quick-link-btn">
          <div class="quick-link-title">
            <span>📥 Master Printable Binder (47 pgs)</span>
            <span>&rarr;</span>
          </div>
          <div class="quick-link-desc">All verified student uploads with official cover sheets</div>
        </a>

        <a id="link-master-notices" href="/api/prek/download-master-notices" class="quick-link-btn">
          <div class="quick-link-title">
            <span>📄 Master Deficiency Notices (20 pgs)</span>
            <span>&rarr;</span>
          </div>
          <div class="quick-link-desc">Complete classroom notice packet with mobile upload QR codes</div>
        </a>

        <a id="link-compliance-excel" href="/api/prek/download-compliance-excel" class="quick-link-btn">
          <div class="quick-link-title">
            <span>📊 Master DECAL Excel Roster</span>
            <span>&rarr;</span>
          </div>
          <div class="quick-link-desc">Audit spreadsheet with checklist checks, dates, and contacts</div>
        </a>

        <a href="/shorts/prek_video_review.html" target="_blank" class="quick-link-btn">
          <div class="quick-link-title">
            <span>🎬 Pre-K 8:00 AM Attendance Video</span>
            <span>&nearr;</span>
          </div>
          <div class="quick-link-desc">Robert Hill 73s video briefing with subtitles & isolate voice</div>
        </a>

        <a href="/portal" target="_blank" class="quick-link-btn">
          <div class="quick-link-title">
            <span>📱 Open Parent Upload Portal</span>
            <span>&nearr;</span>
          </div>
          <div class="quick-link-desc">Mobile phone upload interface (Master PIN: 000000 / 999999)</div>
        </a>
      </div>
    </div>

  </main>

  <script>
    let allStudents = [];
    let currentFilter = 'all';

    const API_BASE = (window.location.origin.includes('localhost') || window.location.origin.includes('bullmight.com'))
      ? ''
      : 'https://kidazzle-webhook.bullmight.com';

    function initStaticLinks() {
      if (API_BASE) {
        ['btn-master-dossiers', 'link-master-dossiers'].forEach(id => {
          const el = document.getElementById(id);
          if (el) el.href = `${API_BASE}/api/prek/download-all-dossiers`;
        });
        ['btn-master-notices', 'link-master-notices'].forEach(id => {
          const el = document.getElementById(id);
          if (el) el.href = `${API_BASE}/api/prek/download-master-notices`;
        });
        ['btn-compliance-excel', 'link-compliance-excel'].forEach(id => {
          const el = document.getElementById(id);
          if (el) el.href = `${API_BASE}/api/prek/download-compliance-excel`;
        });
      }
    }

    async function fetchData() {
      try {
        const res = await fetch(`${API_BASE}/api/prek/admin-overview`);
        if (!res.ok) throw new Error('Failed to fetch data');
        const data = await res.json();
        allStudents = data.students || [];
        
        // Update KPIs
        document.getElementById('kpi-total').innerText = data.total_students || allStudents.length;
        document.getElementById('kpi-compliant').innerText = data.compliant_count || 0;
        document.getElementById('kpi-near').innerText = data.near_complete_count || 0;
        document.getElementById('kpi-action').innerText = data.action_needed_count || 0;
        document.getElementById('kpi-uploads').innerText = data.total_uploads || 0;

        // Dynamic Subtitles
        const compliantList = allStudents.filter(s => s.status.includes('100%') || s.missing_count === 0);
        if (compliantList.length > 0) {
          const names = compliantList.map(s => s.child_name.split(',')[0]).join(', ');
          document.getElementById('kpi-compliant-sub').innerHTML = `<span class="kpi-tag badge-success">Audit-Ready</span> ${names}`;
        }

        const uploadedStudentsCount = allStudents.filter(s => s.uploads_received > 0).length;
        document.getElementById('kpi-uploads-sub').innerText = `${data.total_uploads || 16} Files across ${uploadedStudentsCount} Students`;

        // Update Dynamic Tab Badges
        const f3300Count = allStudents.filter(s => (s.missing_items || []).some(m => m.includes('3300'))).length;
        document.getElementById('tab-all').innerText = `All Students (${allStudents.length})`;
        document.getElementById('tab-uploads').innerText = `Uploads Received (${uploadedStudentsCount})`;
        document.getElementById('tab-compliant').innerText = `100% Compliant (${data.compliant_count || 0})`;
        document.getElementById('tab-near').innerText = `Near Complete (${data.near_complete_count || 0})`;
        document.getElementById('tab-action').innerText = `Needs Action (${data.action_needed_count || 0})`;
        document.getElementById('tab-f3300').innerText = `Form 3300 Pending (${f3300Count})`;

        filterData();

        // Render Recent Activity Feed
        renderActivityFeed(data.recent_audit_logs || []);
      } catch (err) {
        console.error('Error loading dashboard data:', err);
      }
    }

    function setFilter(filter, el) {
      currentFilter = filter;
      document.querySelectorAll('.filter-pill').forEach(p => p.classList.remove('active'));
      el.classList.add('active');
      filterData();
    }

    function filterData() {
      const q = (document.getElementById('search-input').value || '').toLowerCase().trim();
      
      let filtered = allStudents.filter(s => {
        // Search filter
        const matchSearch = !q || 
          s.child_name.toLowerCase().includes(q) || 
          (s.parent_name || '').toLowerCase().includes(q) || 
          (s.crm_id + '').includes(q);

        if (!matchSearch) return false;

        // Tab filter
        if (currentFilter === 'all') return true;
        if (currentFilter === 'uploads') return s.uploads_received > 0;
        if (currentFilter === 'compliant') return s.status.includes('100%') || s.missing_count === 0;
        if (currentFilter === 'near') return s.missing_count > 0 && s.missing_count <= 2;
        if (currentFilter === 'action') return s.missing_count > 2;
        if (currentFilter === 'f3300') return (s.missing_items || []).some(m => m.includes('3300'));
        return true;
      });

      renderTable(filtered);
    }

    function renderTable(students) {
      const tbody = document.getElementById('roster-tbody');
      document.getElementById('table-count-label').innerText = `Showing ${students.length} of ${allStudents.length} students`;

      if (students.length === 0) {
        tbody.innerHTML = `<tr><td colspan="6" style="text-align: center; padding: 30px; color: var(--text-muted);">No students match your criteria.</td></tr>`;
        return;
      }

      tbody.innerHTML = students.map(s => {
        // Status Badge
        let badgeHtml = '';
        if (s.status.includes('100%') || s.missing_count === 0) {
          badgeHtml = `<span class="badge badge-success">✓ 100% DECAL Compliant</span>`;
        } else if (s.missing_count <= 2) {
          badgeHtml = `<span class="badge badge-warning">⚠ Near Complete (${s.missing_count} Pending)</span>`;
        } else {
          badgeHtml = `<span class="badge badge-danger">✕ Action Needed (${s.missing_count} Missing)</span>`;
        }

        // Uploads Indicator & Individual Document Chips
        let uploadHtml = '';
        if (s.uploads_received > 0 && s.uploaded_documents && s.uploaded_documents.length > 0) {
          const docChips = s.uploaded_documents.map(doc => {
            const docUrl = doc.download_url && doc.download_url.startsWith('http') ? doc.download_url : `${API_BASE}${doc.download_url}`;
            return `<a href="${docUrl}" target="_blank" class="doc-chip" title="Click to view & print ${doc.original_filename || doc.doc_type} (${doc.timestamp})">📄 ${doc.doc_type} ↗</a>`;
          }).join('');
          
          uploadHtml = `
            <div class="upload-indicator">
              <span class="upload-tag" style="margin-bottom: 4px;">📄 ${s.uploads_received} File${s.uploads_received > 1 ? 's' : ''} Uploaded</span>
              <div class="doc-chips-container">${docChips}</div>
              <span class="upload-time" style="margin-top: 4px;">Latest: ${s.latest_upload ? s.latest_upload.split(' ')[0] : 'Verified'}</span>
            </div>
          `;
        } else if (s.uploads_received > 0) {
          uploadHtml = `
            <div class="upload-indicator">
              <span class="upload-tag">📄 ${s.uploads_received} File${s.uploads_received > 1 ? 's' : ''} Uploaded</span>
              <span class="upload-time">Latest: ${s.latest_upload ? s.latest_upload.split(' ')[0] : 'Verified'}</span>
            </div>
          `;
        } else {
          uploadHtml = `<span style="color: var(--text-muted); font-size: 12px;">Awaiting upload</span>`;
        }

        // Checklist mini badges
        const chk = s.checklist || {};
        const chkItems = [
          { label: 'REG', val: chk.reg_form },
          { label: 'APX-D', val: chk.appendix_d },
          { label: 'BIRTH', val: chk.birth_cert },
          { label: 'SSN', val: chk.ssn_card },
          { label: 'RESID', val: chk.residency },
          { label: 'ID', val: chk.parent_id },
          { label: '3231', val: chk.form_3231 },
          { label: '3300', val: chk.form_3300 },
          { label: 'CACFP', val: chk.income_ies }
        ];

        const chkHtml = chkItems.map(item => {
          const v = (item.val || '').toLowerCase();
          let cls = 'chk-missing';
          let sym = '✕';
          if (v.includes('on file') || v.includes('complete') || v.includes('received') || v.includes('uploaded') || v.includes('verified')) { 
            cls = 'chk-ok'; 
            sym = '✓'; 
          } else if (v.includes('pending') || v.includes('partial') || v.includes('discrepancy')) { 
            cls = 'chk-pending'; 
            sym = '⏳'; 
          }
          return `<span class="chk-pill ${cls}" title="${item.label}: ${item.val}">${sym} ${item.label}</span>`;
        }).join('');

        // Action Buttons
        let dossierBtn = '';
        if (s.uploads_received > 0) {
          const dUrl = s.dossier_url && s.dossier_url.startsWith('http') ? s.dossier_url : `${API_BASE}/api/prek/download-dossier/${s.crm_id}`;
          dossierBtn = `<a href="${dUrl}" target="_blank" class="btn btn-sm btn-primary" title="Download & Print Current Dossier (${s.uploads_received} Document${s.uploads_received > 1 ? 's' : ''} On File)">🖨️ Dossier (${s.uploads_received})</a>`;
        } else {
          dossierBtn = `<button class="btn btn-sm btn-outline" style="opacity: 0.4;" disabled title="No documents uploaded yet">🖨️ Dossier</button>`;
        }

        const portalBase = window.location.origin.includes('kidazzle.com') ? 'https://kidazzle.com/prek-portal' : `${window.location.origin}/portal`;
        const portalLink = `${portalBase}?child=${s.crm_id}`;

        return `
          <tr>
            <td>
              <div class="student-cell">${s.child_name}</div>
              <div class="student-meta">ID: <strong>${s.crm_id}</strong> &bull; DOB: ${s.dob || '08/29/22'} &bull; ${s.room}</div>
            </td>
            <td>
              <div class="parent-cell">${s.parent_name || 'Guardian on File'}</div>
              <div class="contact-sub">📞 ${s.phone || 'Phone on file'} &bull; ✉️ ${s.email || 'N/A'}</div>
            </td>
            <td>
              ${badgeHtml}
              ${s.missing_count > 0 ? `<div style="font-size: 11px; color: #f87171; margin-top: 4px;">Pending: ${s.missing_items.join(', ')}</div>` : ''}
            </td>
            <td>
              ${uploadHtml}
            </td>
            <td>
              <div class="chk-grid">${chkHtml}</div>
            </td>
            <td style="text-align: right;">
              <div class="action-group" style="justify-content: flex-end;">
                ${dossierBtn}
                <button onclick="copyPortalLink('${portalLink}')" class="btn btn-sm btn-outline" title="Copy Parent Mobile Upload Link">
                  🔗 Link
                </button>
                <a href="${portalLink}" target="_blank" class="btn btn-sm btn-outline" title="Test Parent Portal">
                  ↗ Portal
                </a>
              </div>
            </td>
          </tr>
        `;
      }).join('');
    }

    function renderActivityFeed(logs) {
      const feed = document.getElementById('activity-feed-list');
      if (!logs || logs.length === 0) {
        feed.innerHTML = `<div style="color: var(--text-muted); font-size: 13px;">No recent upload activity recorded.</div>`;
        return;
      }

      feed.innerHTML = logs.slice(0, 10).map(log => `
        <div class="activity-item">
          <div class="activity-icon">📄</div>
          <div class="activity-content">
            <div class="activity-title">${log.child_name || log.student_name || 'Student'} (ID: ${log.crm_id})</div>
            <div style="font-size: 12px; color: #38bdf8; font-weight: 600;">Uploaded: ${log.doc_type}</div>
            <div class="activity-meta">File: ${log.saved_filename || log.filename || 'Document'} &bull; Time: ${log.timestamp}</div>
          </div>
        </div>
      `).join('');
    }

    function copyPortalLink(url) {
      navigator.clipboard.writeText(url).then(() => {
        alert('Parent Upload Portal Link copied to clipboard:\n' + url);
      }).catch(() => {
        prompt('Copy Parent Upload Link:', url);
      });
    }

    // Initial Setup & Real-Time Polling Every 6 Seconds
    initStaticLinks();
    fetchData();
    setInterval(fetchData, 6000);
  </script>
</body>
</html>
