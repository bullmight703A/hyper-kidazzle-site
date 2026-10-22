<?php
/**
 * Template Name: Accreditation & Quality Standards Portal
 * Description: Official digital archive of Environment Rating Scales (ERS, ITERS-3, ECERS-3), GELDS pedagogical frameworks, DECAL diapering & health protocols, and inclusive classroom materials for all KIDazzle early learning campuses.
 *
 * @package kidazzle
 */

get_header();
?>

<!-- Include Outfit Font & Custom Styles for Accreditation Portal -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
  :root {
    --accred-primary: #023047;
    --accred-primary-dark: #011d2b;
    --accred-primary-light: #0d4b6e;
    --accred-accent: #f59e0b;
    --accred-accent-hover: #d97706;
    --accred-accent-light: #fef3c7;
    --accred-secondary: #0284c7;
    --accred-secondary-light: #e0f2fe;
    --accred-emerald: #10b981;
    --accred-emerald-light: #ecfdf5;
    --accred-purple: #8b5cf6;
    --accred-purple-light: #f5f3ff;
    --accred-rose: #f43f5e;
    --accred-rose-light: #fff1f2;
    --accred-text: #0f172a;
    --accred-text-muted: #64748b;
    --accred-border: #e2e8f0;
    --accred-surface: #ffffff;
    --accred-surface-subtle: #f8fafc;
    --accred-radius-xl: 24px;
    --accred-radius-lg: 16px;
    --accred-radius-md: 12px;
    --accred-radius-sm: 8px;
    --accred-shadow-sm: 0 1px 3px rgba(15, 23, 42, 0.06);
    --accred-shadow-md: 0 8px 24px -6px rgba(2, 48, 71, 0.08), 0 4px 8px -4px rgba(15, 23, 42, 0.04);
    --accred-shadow-lg: 0 20px 40px -12px rgba(2, 48, 71, 0.14), 0 0 1px 1px rgba(0, 0, 0, 0.04);
    --accred-shadow-hover: 0 24px 48px -10px rgba(2, 48, 71, 0.18), 0 0 0 1px rgba(2, 132, 199, 0.2);
  }

  .accreditation-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    background: #f8fafc;
    background-image: 
      radial-gradient(at 10% 15%, rgba(2, 132, 199, 0.06) 0px, transparent 50%),
      radial-gradient(at 90% 20%, rgba(245, 158, 11, 0.06) 0px, transparent 50%),
      radial-gradient(at 50% 90%, rgba(16, 185, 129, 0.04) 0px, transparent 60%);
    color: var(--accred-text);
    padding: 32px 20px 80px 20px;
    line-height: 1.55;
  }

  .accred-container {
    max-width: 1320px;
    margin: 0 auto;
    width: 100%;
  }

  /* Hero Banner */
  .accred-hero {
    background: linear-gradient(135deg, #023047 0%, #0d4b6e 60%, #0369a1 100%);
    border-radius: var(--accred-radius-xl);
    padding: 38px 44px;
    color: #ffffff;
    margin-bottom: 28px;
    position: relative;
    overflow: hidden;
    box-shadow: var(--accred-shadow-lg);
  }

  .accred-hero::after {
    content: '';
    position: absolute;
    right: -80px;
    bottom: -100px;
    width: 380px;
    height: 380px;
    background: radial-gradient(circle, rgba(245, 158, 11, 0.25) 0%, transparent 70%);
    pointer-events: none;
    border-radius: 50%;
  }

  .accred-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 6px;
    background: linear-gradient(90deg, #f59e0b 0%, #38bdf8 50%, #10b981 100%);
  }

  .accred-hero-content {
    position: relative;
    z-index: 2;
    max-width: 880px;
  }

  .accred-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(8px);
    padding: 5px 14px;
    border-radius: 999px;
    font-size: 0.8rem;
    font-weight: 600;
    color: #38bdf8;
    margin-bottom: 14px;
    border: 1px solid rgba(255, 255, 255, 0.15);
  }

  .accred-hero-title {
    font-family: 'Outfit', sans-serif;
    font-size: 2.3rem;
    font-weight: 800;
    line-height: 1.2;
    letter-spacing: -0.5px;
    margin-bottom: 12px;
    color: #ffffff;
  }

  .accred-hero-title span {
    background: linear-gradient(90deg, #fbbf24 0%, #38bdf8 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .accred-hero-desc {
    font-size: 1.05rem;
    color: #e0f2fe;
    margin-bottom: 24px;
    line-height: 1.6;
  }

  /* Stats Bar */
  .accred-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 16px;
    padding-top: 18px;
    border-top: 1px solid rgba(255, 255, 255, 0.15);
  }

  .accred-stat-box {
    display: flex;
    align-items: center;
    gap: 14px;
  }

  .accred-stat-icon {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.12);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    color: #fbbf24;
    flex-shrink: 0;
  }

  .accred-stat-number {
    font-family: 'Outfit', sans-serif;
    font-size: 1.45rem;
    font-weight: 700;
    color: #ffffff;
    line-height: 1;
  }

  .accred-stat-label {
    font-size: 0.78rem;
    color: #bae6fd;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-top: 4px;
    font-weight: 600;
  }

  /* Campus Strip */
  .accred-campus-strip {
    background: var(--accred-surface);
    border-radius: var(--accred-radius-lg);
    padding: 16px 20px;
    margin-bottom: 28px;
    border: 1px solid var(--accred-border);
    box-shadow: var(--accred-shadow-sm);
  }

  .accred-campus-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 12px;
    flex-wrap: wrap;
    gap: 10px;
  }

  .accred-campus-title {
    font-family: 'Outfit', sans-serif;
    font-size: 0.92rem;
    font-weight: 700;
    color: var(--accred-primary);
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .accred-campus-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
  }

  .accred-campus-pill {
    font-size: 0.78rem;
    font-weight: 600;
    padding: 6px 12px;
    border-radius: 999px;
    background: var(--accred-surface-subtle);
    border: 1px solid var(--accred-border);
    color: var(--accred-text);
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: all 0.2s ease;
  }

  .accred-campus-pill:hover {
    background: var(--accred-secondary-light);
    border-color: var(--accred-secondary);
    color: var(--accred-secondary);
  }

  .accred-campus-pill i {
    color: var(--accred-secondary);
    font-size: 0.72rem;
  }

  /* Control Panel */
  .accred-control-panel {
    background: var(--accred-surface);
    border-radius: var(--accred-radius-lg);
    padding: 24px;
    border: 1px solid var(--accred-border);
    box-shadow: var(--accred-shadow-md);
    margin-bottom: 28px;
  }

  .accred-control-top {
    display: flex;
    gap: 16px;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-bottom: 20px;
  }

  .accred-search-wrapper {
    position: relative;
    flex: 1;
    min-width: 280px;
  }

  .accred-search-icon {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--accred-text-muted);
    font-size: 1rem;
    pointer-events: none;
  }

  .accred-search-input {
    width: 100%;
    padding: 13px 44px 13px 46px;
    border: 1.5px solid var(--accred-border);
    border-radius: var(--accred-radius-md);
    font-family: inherit;
    font-size: 0.95rem;
    color: var(--accred-text);
    background: var(--accred-surface-subtle);
    transition: all 0.2s ease;
    outline: none;
  }

  .accred-search-input:focus {
    background: #ffffff;
    border-color: var(--accred-secondary);
    box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.15);
  }

  .accred-search-clear {
    position: absolute;
    right: 14px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: var(--accred-text-muted);
    cursor: pointer;
    font-size: 0.9rem;
    display: none;
    padding: 4px;
  }

  .accred-dropdowns {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
  }

  .accred-select {
    padding: 11px 16px;
    border: 1.5px solid var(--accred-border);
    border-radius: var(--accred-radius-md);
    font-family: inherit;
    font-size: 0.88rem;
    color: var(--accred-text);
    background: var(--accred-surface-subtle);
    cursor: pointer;
    outline: none;
    transition: all 0.2s ease;
    font-weight: 500;
  }

  .accred-select:focus {
    border-color: var(--accred-secondary);
    background: #ffffff;
    box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.15);
  }

  /* Category Navigation Tabs */
  .accred-category-tabs {
    display: flex;
    gap: 8px;
    overflow-x: auto;
    padding-bottom: 4px;
    scrollbar-width: thin;
  }

  .accred-category-tab {
    background: var(--accred-surface-subtle);
    border: 1px solid var(--accred-border);
    color: var(--accred-text-muted);
    padding: 10px 18px;
    border-radius: 999px;
    font-family: 'Outfit', sans-serif;
    font-size: 0.88rem;
    font-weight: 600;
    cursor: pointer;
    white-space: nowrap;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.2s ease;
  }

  .accred-category-tab:hover {
    background: #f1f5f9;
    color: var(--accred-primary);
  }

  .accred-category-tab.active {
    background: var(--accred-primary);
    color: #ffffff;
    border-color: var(--accred-primary);
    box-shadow: 0 4px 12px rgba(2, 48, 71, 0.2);
  }

  .accred-category-count {
    font-size: 0.72rem;
    background: rgba(0, 0, 0, 0.08);
    padding: 2px 7px;
    border-radius: 999px;
  }

  .accred-category-tab.active .accred-category-count {
    background: rgba(255, 255, 255, 0.25);
    color: #ffffff;
  }

  /* Results Header */
  .accred-results-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    padding: 0 4px;
  }

  .accred-results-count {
    font-size: 0.92rem;
    color: var(--accred-text-muted);
    font-weight: 600;
  }

  .accred-results-count strong {
    color: var(--accred-primary);
  }

  .accred-download-note {
    font-size: 0.82rem;
    color: var(--accred-text-muted);
    display: flex;
    align-items: center;
    gap: 6px;
  }

  /* Document Grid */
  .accred-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(370px, 1fr));
    gap: 22px;
    margin-bottom: 40px;
  }

  /* Document Card */
  .accred-card {
    background: var(--accred-surface);
    border-radius: var(--accred-radius-lg);
    border: 1px solid var(--accred-border);
    box-shadow: var(--accred-shadow-sm);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: all 0.28s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
  }

  .accred-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--accred-shadow-hover);
    border-color: rgba(2, 132, 199, 0.4);
  }

  .accred-top-accent {
    height: 4px;
    width: 100%;
  }

  .accred-accent-ers { background: linear-gradient(90deg, #f59e0b, #d97706); }
  .accred-accent-pedagogy { background: linear-gradient(90deg, #8b5cf6, #6d28d9); }
  .accred-accent-health { background: linear-gradient(90deg, #10b981, #059669); }
  .accred-accent-classroom { background: linear-gradient(90deg, #0284c7, #0369a1); }
  .accred-accent-diversity { background: linear-gradient(90deg, #f43f5e, #be123c); }

  .accred-card-body {
    padding: 22px 24px;
    display: flex;
    flex-direction: column;
    flex: 1;
  }

  .accred-meta-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 8px;
    margin-bottom: 14px;
    flex-wrap: wrap;
  }

  .accred-pill-cat {
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 4px 10px;
    border-radius: 999px;
    display: inline-flex;
    align-items: center;
    gap: 5px;
  }

  .accred-cat-ers { background: var(--accred-accent-light); color: #b45309; }
  .accred-cat-pedagogy { background: var(--accred-purple-light); color: #6d28d9; }
  .accred-cat-health { background: var(--accred-emerald-light); color: #047857; }
  .accred-cat-classroom { background: var(--accred-secondary-light); color: #0369a1; }
  .accred-cat-diversity { background: var(--accred-rose-light); color: #be123c; }

  .accred-pill-target {
    font-size: 0.72rem;
    font-weight: 600;
    padding: 4px 10px;
    border-radius: 999px;
    background: var(--accred-surface-subtle);
    border: 1px solid var(--accred-border);
    color: var(--accred-text-muted);
  }

  .accred-icon-header {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    margin-bottom: 12px;
  }

  .accred-icon {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
    flex-shrink: 0;
    margin-top: 2px;
  }

  .accred-icon.ers { background: var(--accred-accent-light); color: #d97706; }
  .accred-icon.pedagogy { background: var(--accred-purple-light); color: #7c3aed; }
  .accred-icon.health { background: var(--accred-emerald-light); color: #059669; }
  .accred-icon.classroom { background: var(--accred-secondary-light); color: #0284c7; }
  .accred-icon.diversity { background: var(--accred-rose-light); color: #e11d48; }

  .accred-title {
    font-family: 'Outfit', sans-serif;
    font-size: 1.15rem;
    font-weight: 700;
    color: var(--accred-text);
    line-height: 1.35;
    letter-spacing: -0.2px;
  }

  .accred-desc {
    font-size: 0.88rem;
    color: #475569;
    line-height: 1.5;
    margin-bottom: 18px;
    flex: 1;
  }

  .accred-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    margin-bottom: 20px;
  }

  .accred-tag {
    font-size: 0.72rem;
    color: #64748b;
    background: #f1f5f9;
    padding: 3px 9px;
    border-radius: 6px;
    font-weight: 500;
  }

  /* Card Footer */
  .accred-card-footer {
    padding: 16px 24px;
    background: var(--accred-surface-subtle);
    border-top: 1px solid var(--accred-border);
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
  }

  .accred-file-details {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.78rem;
    color: var(--accred-text-muted);
    font-weight: 600;
  }

  .accred-format-badge {
    background: #fee2e2;
    color: #dc2626;
    font-size: 0.68rem;
    font-weight: 800;
    padding: 2px 6px;
    border-radius: 4px;
    letter-spacing: 0.4px;
  }

  .accred-actions {
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .accred-btn-preview {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 7px 12px;
    border-radius: var(--accred-radius-sm);
    border: 1px solid var(--accred-border);
    background: #ffffff;
    color: var(--accred-text);
    font-size: 0.82rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
    text-decoration: none;
  }

  .accred-btn-preview:hover {
    background: var(--accred-secondary-light);
    border-color: var(--accred-secondary);
    color: var(--accred-secondary);
  }

  .accred-btn-download {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 7px 14px;
    border-radius: var(--accred-radius-sm);
    border: none;
    background: var(--accred-primary);
    color: #ffffff;
    font-size: 0.82rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
    text-decoration: none;
    box-shadow: 0 2px 6px rgba(2, 48, 71, 0.2);
  }

  .accred-btn-download:hover {
    background: var(--accred-primary-light);
    transform: translateY(-1px);
    box-shadow: 0 4px 10px rgba(2, 48, 71, 0.3);
  }

  /* Modal PDF Viewer */
  .accred-modal {
    position: fixed;
    inset: 0;
    background: rgba(15, 23, 42, 0.85);
    backdrop-filter: blur(8px);
    z-index: 99999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 24px;
  }

  .accred-modal.active {
    display: flex;
  }

  .accred-modal-box {
    background: #ffffff;
    width: 100%;
    max-width: 1100px;
    height: 90vh;
    border-radius: var(--accred-radius-lg);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.2);
  }

  .accred-modal-header {
    background: var(--accred-primary);
    color: #ffffff;
    padding: 16px 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
  }

  .accred-modal-title {
    font-family: 'Outfit', sans-serif;
    font-size: 1.15rem;
    font-weight: 700;
  }

  .accred-modal-actions {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .accred-modal-btn {
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: #ffffff;
    padding: 7px 12px;
    border-radius: 8px;
    font-size: 0.82rem;
    font-weight: 600;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    text-decoration: none;
    transition: all 0.2s ease;
  }

  .accred-modal-btn:hover {
    background: rgba(255, 255, 255, 0.22);
    color: #ffffff;
  }

  .accred-modal-close {
    background: rgba(239, 68, 68, 0.2);
    border: 1px solid rgba(239, 68, 68, 0.4);
    color: #fca5a5;
    width: 34px;
    height: 34px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.2s ease;
  }

  .accred-modal-close:hover {
    background: rgba(239, 68, 68, 0.4);
    color: #ffffff;
  }

  .accred-modal-body {
    flex: 1;
    width: 100%;
    height: 100%;
    background: #525659;
  }

  .accred-iframe {
    width: 100%;
    height: 100%;
    border: none;
  }

  /* Empty state */
  .accred-empty {
    grid-column: 1 / -1;
    text-align: center;
    padding: 60px 20px;
    background: #ffffff;
    border-radius: var(--accred-radius-lg);
    border: 1px dashed var(--accred-border);
  }

  @media (max-width: 768px) {
    .accred-hero {
      padding: 26px 20px;
    }
    .accred-hero-title {
      font-size: 1.7rem;
    }
    .accred-grid {
      grid-template-columns: 1fr;
    }
    .accred-modal-box {
      height: 95vh;
      max-width: 100%;
    }
  }
</style>

<div class="accreditation-wrapper">
  <div class="accred-container">

    <!-- Hero Banner -->
    <section class="accred-hero">
      <div class="accred-hero-content">
        <div class="accred-pill">
          <i class="fa-solid fa-shield-halved"></i>
          <span>Official Educator & Evaluator Accreditation Hub</span>
        </div>
        <h1 class="accred-hero-title">Classroom Accreditation & <span>Quality Standards</span></h1>
        <p class="accred-hero-desc">
          Official digital archive of Environment Rating Scales (ERS, ITERS-3, ECERS-3), GELDS pedagogical frameworks, DECAL diapering & health protocols, printable center labels, and cultural inclusion readers for all KIDazzle learning campuses.
        </p>

        <!-- Stats Bar -->
        <div class="accred-stats">
          <div class="accred-stat-box">
            <div class="accred-stat-icon"><i class="fa-solid fa-file-pdf"></i></div>
            <div>
              <div class="accred-stat-number">21</div>
              <div class="accred-stat-label">Approved PDFs</div>
            </div>
          </div>
          <div class="accred-stat-box">
            <div class="accred-stat-icon"><i class="fa-solid fa-layer-group"></i></div>
            <div>
              <div class="accred-stat-number">5</div>
              <div class="accred-stat-label">Core Pillars</div>
            </div>
          </div>
          <div class="accred-stat-box">
            <div class="accred-stat-icon"><i class="fa-solid fa-school"></i></div>
            <div>
              <div class="accred-stat-number">7</div>
              <div class="accred-stat-label">Accredited Campuses</div>
            </div>
          </div>
          <div class="accred-stat-box">
            <div class="accred-stat-icon"><i class="fa-solid fa-check-double"></i></div>
            <div>
              <div class="accred-stat-number">100%</div>
              <div class="accred-stat-label">State Audit Ready</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Campus Strip -->
    <div class="accred-campus-strip">
      <div class="accred-campus-header">
        <div class="accred-campus-title">
          <i class="fa-solid fa-location-dot"></i>
          <span>Accredited Across 7 KIDazzle Campus Locations:</span>
        </div>
        <span style="font-size: 0.78rem; color: var(--accred-text-muted);">Serving Metro Atlanta, Hampton, Memphis & Miami</span>
      </div>
      <div class="accred-campus-pills">
        <span class="accred-campus-pill"><i class="fa-solid fa-building"></i> Peachtree Summit (Downtown Atlanta)</span>
        <span class="accred-campus-pill"><i class="fa-solid fa-building"></i> West End Center (Atlanta, GA)</span>
        <span class="accred-campus-pill"><i class="fa-solid fa-building"></i> College Park Center (Airport Hub)</span>
        <span class="accred-campus-pill"><i class="fa-solid fa-building"></i> Hampton FAA Center (Henry County)</span>
        <span class="accred-campus-pill"><i class="fa-solid fa-building"></i> Atlanta Federal Center / AFC</span>
        <span class="accred-campus-pill"><i class="fa-solid fa-building"></i> Memphis FAA Center (Tennessee)</span>
        <span class="accred-campus-pill"><i class="fa-solid fa-building"></i> Tailwinds Doral (Miami, FL)</span>
      </div>
    </div>

    <!-- Control Panel: Search & Filters -->
    <section class="accred-control-panel">
      <div class="accred-control-top">
        <div class="accred-search-wrapper">
          <i class="fa-solid fa-magnifying-glass accred-search-icon"></i>
          <input type="text" id="wpSearchInput" class="accred-search-input" placeholder="Search by title, keyword, standard, or ECERS item..." autocomplete="off">
          <button id="wpSearchClear" class="accred-search-clear" title="Clear search"><i class="fa-solid fa-xmark"></i></button>
        </div>

        <div class="accred-dropdowns">
          <select id="wpLevelFilter" class="accred-select">
            <option value="all">All Age Groups & Roles</option>
            <option value="infants">Infants & Toddlers (0-36 mo)</option>
            <option value="prek">Preschool & Pre-K (3-5 yr)</option>
            <option value="school-age">School-Age & K-3rd</option>
            <option value="staff">Teachers & Directors</option>
            <option value="classroom">Classroom Setup & Walls</option>
          </select>

          <select id="wpSortFilter" class="accred-select">
            <option value="priority">Sort: Star 3 Priority</option>
            <option value="title-asc">Sort: Title (A-Z)</option>
            <option value="size-desc">Sort: File Size (Largest)</option>
            <option value="size-asc">Sort: File Size (Smallest)</option>
          </select>
        </div>
      </div>

      <!-- Category Filter Tabs -->
      <div class="accred-category-tabs" id="wpCategoryTabs">
        <button class="accred-category-tab active" data-category="all">
          <i class="fa-solid fa-border-all"></i>
          <span>All Resources</span>
          <span class="accred-category-count" id="wp-count-all">21</span>
        </button>
        <button class="accred-category-tab" data-category="ers">
          <i class="fa-solid fa-star-half-stroke"></i>
          <span>ERS & Rating Scales</span>
          <span class="accred-category-count" id="wp-count-ers">5</span>
        </button>
        <button class="accred-category-tab" data-category="pedagogy">
          <i class="fa-solid fa-comments"></i>
          <span>Teacher Pedagogy</span>
          <span class="accred-category-count" id="wp-count-pedagogy">2</span>
        </button>
        <button class="accred-category-tab" data-category="health">
          <i class="fa-solid fa-pump-soap"></i>
          <span>Health & Sanitation</span>
          <span class="accred-category-count" id="wp-count-health">3</span>
        </button>
        <button class="accred-category-tab" data-category="classroom">
          <i class="fa-solid fa-shapes"></i>
          <span>Classroom & Labels</span>
          <span class="accred-category-count" id="wp-count-classroom">3</span>
        </button>
        <button class="accred-category-tab" data-category="diversity">
          <i class="fa-solid fa-book-open-reader"></i>
          <span>Diversity & Books</span>
          <span class="accred-category-count" id="wp-count-diversity">8</span>
        </button>
      </div>
    </section>

    <!-- Results Status Bar -->
    <div class="accred-results-bar">
      <div class="accred-results-count" id="wpResultsCount">Showing <strong>21 of 21</strong> accreditation documents</div>
      <div class="accred-download-note">
        <i class="fa-solid fa-circle-info"></i>
        <span>Click <strong>Quick View</strong> to preview inside browser or <strong>Download PDF</strong> for local print.</span>
      </div>
    </div>

    <!-- Document Cards Grid -->
    <section class="accred-grid" id="wpDocGrid">
      <!-- Rendered dynamically -->
    </section>

  </div>
</div>

<!-- In-Browser Modal PDF Viewer -->
<div class="accred-modal" id="wpPdfModal" role="dialog" aria-modal="true">
  <div class="accred-modal-box">
    <div class="accred-modal-header">
      <div style="display: flex; align-items: center; gap: 12px; overflow: hidden;">
        <i class="fa-solid fa-file-pdf" style="color: #fca5a5; font-size: 1.3rem;"></i>
        <div>
          <div class="accred-modal-title" id="wpModalTitle">Document Title</div>
          <div style="font-size: 0.78rem; color: #93c5fd;" id="wpModalSubtitle">Category • File Size</div>
        </div>
      </div>
      <div class="accred-modal-actions">
        <a href="#" id="wpModalNewTabBtn" class="accred-modal-btn" target="_blank" rel="noopener">
          <i class="fa-solid fa-arrow-up-right-from-square"></i>
          <span>Open in Tab</span>
        </a>
        <a href="#" id="wpModalDownloadBtn" class="accred-modal-btn" download>
          <i class="fa-solid fa-download"></i>
          <span>Download</span>
        </a>
        <button class="accred-modal-close" id="wpModalCloseBtn" title="Close preview (Esc)">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
    </div>
    <div class="accred-modal-body">
      <iframe id="wpPdfFrame" class="accred-iframe" title="PDF Preview"></iframe>
    </div>
  </div>
</div>

<script>
  // WordPress Theme Document Base Path
  window.KIDAZZLE_WP_DOCS_BASE = "<?php echo esc_url(get_template_directory_uri() . '/assets/docs/accreditation/'); ?>";

  // 21 Documents Database
  const WP_DOCUMENTS = [
    {
      id: "ecers-review",
      title: "ECERS Comprehensive Classroom Review",
      filename: "ECERS_Comprehensive_Classroom_Review.pdf",
      category: "ers",
      categoryName: "ERS & Rating Scales",
      targetLevel: "Preschool & Pre-K (3-5 yr)",
      targetKey: "prek",
      size: "97 KB",
      sizeBytes: 99309,
      accentClass: "accred-accent-ers",
      catClass: "accred-cat-ers",
      iconClass: "ers",
      icon: "fa-star-half-stroke",
      priority: 1,
      description: "Early Childhood Environment Rating Scale (ECERS-3) self-assessment protocol, spatial arrangement audit, learning materials checklist, and staff scoring metrics.",
      tags: ["ECERS-3", "Quality Rated", "Classroom Audit", "Pre-K Standards"]
    },
    {
      id: "ers-print-ready",
      title: "ERS Print-Ready Classroom Standards Guide",
      filename: "ERS_Print_Ready_Standards_Guide.pdf",
      category: "ers",
      categoryName: "ERS & Rating Scales",
      targetLevel: "All Classrooms & Teaching Staff",
      targetKey: "staff",
      size: "4.9 MB",
      sizeBytes: 5118335,
      accentClass: "accred-accent-ers",
      catClass: "accred-cat-ers",
      iconClass: "ers",
      icon: "fa-book-bookmark",
      priority: 2,
      description: "Official printable classroom reference binder for Environment Rating Scales compliance, teacher-child interaction ratios, and activity station requirements.",
      tags: ["ERS Standards", "Print Ready", "Classroom Binder", "Compliance"]
    },
    {
      id: "iters-wall",
      title: "ITERS Classroom Wall Display & Care Prompts",
      filename: "ITERS_Classroom_Wall_Display.pdf",
      category: "ers",
      categoryName: "ERS & Rating Scales",
      targetLevel: "Infants & Toddlers (0-36 mo)",
      targetKey: "infants",
      size: "4.9 MB",
      sizeBytes: 5114972,
      accentClass: "accred-accent-ers",
      catClass: "accred-cat-ers",
      iconClass: "ers",
      icon: "fa-baby",
      priority: 3,
      description: "High-visibility wall-mountable reference cards for Infant/Toddler Environment Rating Scale (ITERS-3) items, diapering sanitation steps, and responsive caregiving.",
      tags: ["ITERS-3", "Wall Poster", "Infants", "Toddlers"]
    },
    {
      id: "k3-framework",
      title: "K-3rd & Lower Elementary 4x4 Learning Framework",
      filename: "K3_and_Lower_4x4_Learning_Framework.pdf",
      category: "ers",
      categoryName: "ERS & Rating Scales",
      targetLevel: "School-Age & K-3rd Grade",
      targetKey: "school-age",
      size: "1.1 MB",
      sizeBytes: 1111477,
      accentClass: "accred-accent-ers",
      catClass: "accred-cat-ers",
      iconClass: "ers",
      icon: "fa-cubes",
      priority: 4,
      description: "Core 4x4 matrix curriculum alignment for early elementary enrichment, STEM centers, literacy rotations, and structured project-based learning.",
      tags: ["K-3 Framework", "Curriculum", "STEM", "Enrichment"]
    },
    {
      id: "ers-wall-signs",
      title: "ERS Classroom Wall Signs & Station Occupancy Markers",
      filename: "ERS_Classroom_Wall_Signs.pdf",
      category: "ers",
      categoryName: "ERS & Rating Scales",
      targetLevel: "All Classrooms & Wall Signs",
      targetKey: "classroom",
      size: "19.0 MB",
      sizeBytes: 19877562,
      accentClass: "accred-accent-ers",
      catClass: "accred-cat-ers",
      iconClass: "ers",
      icon: "fa-signs-post",
      priority: 5,
      description: "Large-format printable classroom signage designating maximum occupancy, learning goals, center boundaries, and cleanup protocols for state evaluators.",
      tags: ["Wall Signs", "Center Badges", "State Evaluator Ready", "Print Ready"]
    },
    {
      id: "strive-five-en",
      title: "Strive for FIVE Pedagogical Protocol (English)",
      filename: "Strive_for_Five_Pedagogical_Protocol_EN.pdf",
      category: "pedagogy",
      categoryName: "Teacher Pedagogy",
      targetLevel: "Lead Educators & Staff",
      targetKey: "staff",
      size: "83 KB",
      sizeBytes: 85146,
      accentClass: "accred-accent-pedagogy",
      catClass: "accred-cat-pedagogy",
      iconClass: "pedagogy",
      icon: "fa-comments",
      priority: 6,
      description: "Turn-taking verbal interaction framework: minimum 5-exchange back-and-forth conversational scaffolding to build executive function, vocabulary, and cognitive development.",
      tags: ["Strive for 5", "Language Scaffolding", "Conversational Turns", "GELDS"]
    },
    {
      id: "strive-five-es",
      title: "Protocolo Pedagógico Strive for FIVE (Español)",
      filename: "Strive_for_Five_Pedagogical_Protocol_ES.pdf",
      category: "pedagogy",
      categoryName: "Teacher Pedagogy",
      targetLevel: "Educadores Bilingües / Dual Language",
      targetKey: "staff",
      size: "214 KB",
      sizeBytes: 218822,
      accentClass: "accred-accent-pedagogy",
      catClass: "accred-cat-pedagogy",
      iconClass: "pedagogy",
      icon: "fa-language",
      priority: 7,
      description: "Guía metodológica oficial de interacción verbal recíproca (mínimo 5 intercambios comunicativos) para educadores bilingües y aulas de inmersión dual.",
      tags: ["Strive for 5", "Bilingual", "Español", "GELDS Dual Language"]
    },
    {
      id: "decal-diapering-handwashing",
      title: "DECAL Diapering & Handwashing Standard Procedure",
      filename: "DECAL_Diapering_and_Handwashing_Procedure_Standard.pdf",
      category: "health",
      categoryName: "Health & Sanitation",
      targetLevel: "Infants, Toddlers & Twos Staff",
      targetKey: "infants",
      size: "85 KB",
      sizeBytes: 86902,
      accentClass: "accred-accent-health",
      catClass: "accred-cat-health",
      iconClass: "health",
      icon: "fa-hand-holding-droplet",
      priority: 8,
      description: "Georgia Department of Early Care and Learning (DECAL) mandatory step-by-step sanitation protocol for changing tables, bleach sanitization dilution, and glove disposal.",
      tags: ["DECAL Compliance", "Diapering Protocol", "Sanitation Standard", "Bright from Start"]
    },
    {
      id: "handwashing-poster",
      title: "Handwashing Classroom Sink Wall Poster",
      filename: "Handwashing_Classroom_Sink_Wall_Poster.pdf",
      category: "health",
      categoryName: "Health & Sanitation",
      targetLevel: "Children & Staff (All Sink Stations)",
      targetKey: "classroom",
      size: "511 KB",
      sizeBytes: 523628,
      accentClass: "accred-accent-health",
      catClass: "accred-cat-health",
      iconClass: "health",
      icon: "fa-pump-soap",
      priority: 9,
      description: "Child-friendly visual sequence for proper handwashing with warm running water, soap lathering (20 seconds), disposable paper towel use, and faucet turn-off technique.",
      tags: ["Handwashing", "Sink Poster", "Visual Guide", "Hygiene Standard"]
    },
    {
      id: "decal-diapering-table",
      title: "DECAL Diapering Table Sanitizing Protocol & Chemical Spray Routine",
      filename: "DECAL_Diapering_Table_Sanitizing_Protocol.pdf",
      category: "health",
      categoryName: "Health & Sanitation",
      targetLevel: "Infant/Toddler Staff & Monitors",
      targetKey: "infants",
      size: "44 KB",
      sizeBytes: 45306,
      accentClass: "accred-accent-health",
      catClass: "accred-cat-health",
      iconClass: "health",
      icon: "fa-spray-can-sparkles",
      priority: 10,
      description: "Two-step cleaning and sanitizing protocol (soapy water spray wipe + bleach solution air-dry 2 minutes) adhering to Bright from the Start rule 591-1-1.",
      tags: ["Diapering Table", "Two-Step Sanitizing", "Bleach Protocol", "Rule 591-1-1"]
    },
    {
      id: "classroom-learning-areas",
      title: "Classroom Learning Areas Setup & Architectural Guide",
      filename: "Classroom_Learning_Areas_Setup_Guide.pdf",
      category: "classroom",
      categoryName: "Classroom & Labels",
      targetLevel: "Directors, Staff & Room Layout",
      targetKey: "classroom",
      size: "5.1 MB",
      sizeBytes: 5305864,
      accentClass: "accred-accent-classroom",
      catClass: "accred-cat-classroom",
      iconClass: "classroom",
      icon: "fa-diagram-project",
      priority: 11,
      description: "Definitive room blueprint defining boundaries for 8 core learning centers: Dramatic Play, Blocks, Cozy Reading Book Nook, Art, Math/Manipulatives, Writing, and Science.",
      tags: ["Room Setup", "Learning Centers", "ECERS Spatial Layout", "Architectural Blueprint"]
    },
    {
      id: "classroom-center-labels",
      title: "Classroom Center & Toy Bin Environmental Print Labels",
      filename: "Classroom_Center_and_Toy_Bin_Labels.pdf",
      category: "classroom",
      categoryName: "Classroom & Labels",
      targetLevel: "All Classrooms & Storage Shelves",
      targetKey: "classroom",
      size: "14.8 MB",
      sizeBytes: 15549642,
      accentClass: "accred-accent-classroom",
      catClass: "accred-cat-classroom",
      iconClass: "classroom",
      icon: "fa-tags",
      priority: 12,
      description: "Dual pictorial and text labels for classroom shelving, manipulative bins, book baskets, and block centers supporting environmental print literacy and child autonomy.",
      tags: ["Bin Labels", "Environmental Print", "Independence", "Lamination Ready"]
    },
    {
      id: "editable-center-labels",
      title: "11 Editable Classroom Center Labels & Station Signs",
      filename: "11_Editable_Classroom_Center_Labels_and_Stations.pdf",
      category: "classroom",
      categoryName: "Classroom & Labels",
      targetLevel: "Customizable Center Signage",
      targetKey: "classroom",
      size: "989 KB",
      sizeBytes: 1013173,
      accentClass: "accred-accent-classroom",
      catClass: "accred-cat-classroom",
      iconClass: "classroom",
      icon: "fa-pen-to-square",
      priority: 13,
      description: "Modular editable classroom station signs (Reading, Writing, Art, Math, Blocks, Science, Dramatic Play, Music, Sensory, Calm Down Corner) ready for center customization.",
      tags: ["Editable Labels", "Center Stations", "Customizable", "Print Ready"]
    },
    {
      id: "world-cultures-book",
      title: "World Cultures Classroom Diversity Book & Activity Collection",
      filename: "World_Cultures_Classroom_Diversity_Book.pdf",
      category: "diversity",
      categoryName: "Diversity & Books",
      targetLevel: "Pre-K & School-Age Classrooms",
      targetKey: "prek",
      size: "8.4 MB",
      sizeBytes: 8784204,
      accentClass: "accred-accent-diversity",
      catClass: "accred-cat-diversity",
      iconClass: "diversity",
      icon: "fa-earth-americas",
      priority: 14,
      description: "Curated multicultural learning book showcasing global traditions, native clothing, world music, geography, and international celebrations to foster global citizenship.",
      tags: ["World Cultures", "Diversity", "Multicultural", "ECERS Item 28"]
    },
    {
      id: "science-ocean-book",
      title: "Science Center: Water World & Ocean Exploration Book",
      filename: "Science_Center_Water_World_Ocean_Book.pdf",
      category: "diversity",
      categoryName: "Diversity & Books",
      targetLevel: "Science & Sensory Centers (Ages 2-5)",
      targetKey: "prek",
      size: "6.8 MB",
      sizeBytes: 7177449,
      accentClass: "accred-accent-diversity",
      catClass: "accred-cat-diversity",
      iconClass: "diversity",
      icon: "fa-water",
      priority: 15,
      description: "Marine biology and water exploration visual reader designed for sensory table integration, sink-or-float experiments, and STEM nature observation.",
      tags: ["Science Center", "Ocean Exploration", "Sensory Reader", "STEM Units"]
    },
    {
      id: "diverse-families-book",
      title: "Diverse Families Classroom Inclusion Book",
      filename: "Diverse_Families_Classroom_Inclusion_Book.pdf",
      category: "diversity",
      categoryName: "Diversity & Books",
      targetLevel: "All Classrooms (Infant through Pre-K)",
      targetKey: "all",
      size: "14.5 MB",
      sizeBytes: 15174825,
      accentClass: "accred-accent-diversity",
      catClass: "accred-cat-diversity",
      iconClass: "diversity",
      icon: "fa-people-roof",
      priority: 16,
      description: "Positive representation of varied family structures (multigenerational, adoptive, single-parent, blended) meeting Quality Rated Star 3 social-emotional benchmarks.",
      tags: ["Family Structures", "Inclusion", "Social-Emotional", "Quality Rated"]
    },
    {
      id: "good-manners-book",
      title: "Good Manners & Social Skills Classroom Guidebook",
      filename: "Good_Manners_and_Social_Skills_Book.pdf",
      category: "diversity",
      categoryName: "Diversity & Books",
      targetLevel: "Toddler, Preschool & Pre-K",
      targetKey: "prek",
      size: "14.1 MB",
      sizeBytes: 14791921,
      accentClass: "accred-accent-diversity",
      catClass: "accred-cat-diversity",
      iconClass: "diversity",
      icon: "fa-hands-holding-child",
      priority: 17,
      description: "Interactive picture book and group time discussion prompts reinforcing sharing, gentle hands, emotional self-regulation, polite phrases, and empathy.",
      tags: ["Social-Emotional", "Good Manners", "Empathy", "GELDS SED"]
    },
    {
      id: "community-helpers-book",
      title: "Community Helpers & Career Discovery Book",
      filename: "Community_Helpers_Career_Discovery_Book.pdf",
      category: "diversity",
      categoryName: "Diversity & Books",
      targetLevel: "Dramatic Play & Social Studies",
      targetKey: "prek",
      size: "12.1 MB",
      sizeBytes: 12672855,
      accentClass: "accred-accent-diversity",
      catClass: "accred-cat-diversity",
      iconClass: "diversity",
      icon: "fa-helmet-safety",
      priority: 18,
      description: "Visual reader introducing children to community helpers: doctors, firefighters, postal carriers, sanitation workers, pilots, and urban planners.",
      tags: ["Community Helpers", "Career Exploration", "Dramatic Play", "Social Studies"]
    },
    {
      id: "differing-abilities-book",
      title: "Differing Abilities & Adaptive Inclusion Classroom Book",
      filename: "Differing_Abilities_and_Inclusion_Book.pdf",
      category: "diversity",
      categoryName: "Diversity & Books",
      targetLevel: "Special Needs & Adaptive Inclusion",
      targetKey: "all",
      size: "1.2 MB",
      sizeBytes: 1237091,
      accentClass: "accred-accent-diversity",
      catClass: "accred-cat-diversity",
      iconClass: "diversity",
      icon: "fa-wheelchair",
      priority: 19,
      description: "Adaptive inclusion guidebook highlighting children with varying physical, sensory, and learning abilities, encouraging peer support, sign language, and accessibility.",
      tags: ["Differing Abilities", "Inclusion", "Accessibility", "Universal Design"]
    },
    {
      id: "african-american-pictures",
      title: "African American Culture Picture Cards & Wall Flashcards",
      filename: "African_American_Culture_Picture_Cards.pdf",
      category: "diversity",
      categoryName: "Diversity & Books",
      targetLevel: "Classroom Display & Cultural Units",
      targetKey: "classroom",
      size: "6.6 MB",
      sizeBytes: 6972411,
      accentClass: "accred-accent-diversity",
      catClass: "accred-cat-diversity",
      iconClass: "diversity",
      icon: "fa-image",
      priority: 20,
      description: "High-resolution visual picture cards celebrating African American leaders, inventors, educators, musicians, and artists for daily classroom integration.",
      tags: ["African American Culture", "Picture Cards", "Black History Year-Round", "ECERS Item 28"]
    },
    {
      id: "african-american-verbiage",
      title: "African American Culture Teaching Verbiage & Discussion Prompts",
      filename: "African_American_Culture_Teaching_Verbiage.pdf",
      category: "diversity",
      categoryName: "Diversity & Books",
      targetLevel: "Educator Lesson Plans & Circle Time",
      targetKey: "staff",
      size: "5.8 MB",
      sizeBytes: 6070390,
      accentClass: "accred-accent-diversity",
      catClass: "accred-cat-diversity",
      iconClass: "diversity",
      icon: "fa-book-open",
      priority: 21,
      description: "Teacher reference scripts, vocabulary definitions, and developmentally appropriate discussion prompts to guide cultural circle time and storytelling.",
      tags: ["Teaching Scripts", "Cultural Verbiage", "Circle Time", "GELDS Alignment"]
    }
  ];

  function getWpDocUrl(filename) {
    if (window.KIDAZZLE_WP_DOCS_BASE) {
      return window.KIDAZZLE_WP_DOCS_BASE + encodeURIComponent(filename);
    }
    return '/accreditation/docs/' + encodeURIComponent(filename);
  }

  // Filter State
  let wpCategory = 'all';
  let wpSearch = '';
  let wpLevel = 'all';
  let wpSort = 'priority';

  const wpDocGrid = document.getElementById('wpDocGrid');
  const wpSearchInput = document.getElementById('wpSearchInput');
  const wpSearchClear = document.getElementById('wpSearchClear');
  const wpLevelFilter = document.getElementById('wpLevelFilter');
  const wpSortFilter = document.getElementById('wpSortFilter');
  const wpCategoryTabs = document.getElementById('wpCategoryTabs');
  const wpResultsCount = document.getElementById('wpResultsCount');

  // Modal
  const wpPdfModal = document.getElementById('wpPdfModal');
  const wpPdfFrame = document.getElementById('wpPdfFrame');
  const wpModalTitle = document.getElementById('wpModalTitle');
  const wpModalSubtitle = document.getElementById('wpModalSubtitle');
  const wpModalNewTabBtn = document.getElementById('wpModalNewTabBtn');
  const wpModalDownloadBtn = document.getElementById('wpModalDownloadBtn');
  const wpModalCloseBtn = document.getElementById('wpModalCloseBtn');

  function renderWpDocs() {
    let filtered = WP_DOCUMENTS.filter(doc => {
      if (wpCategory !== 'all' && doc.category !== wpCategory) return false;
      if (wpLevel !== 'all' && doc.targetKey !== wpLevel && doc.targetKey !== 'all') return false;
      if (wpSearch.trim() !== '') {
        const q = wpSearch.toLowerCase().trim();
        const matchTitle = doc.title.toLowerCase().includes(q);
        const matchDesc = doc.description.toLowerCase().includes(q);
        const matchCat = doc.categoryName.toLowerCase().includes(q);
        const matchTags = doc.tags.some(t => t.toLowerCase().includes(q));
        if (!matchTitle && !matchDesc && !matchCat && !matchTags) return false;
      }
      return true;
    });

    if (wpSort === 'priority') filtered.sort((a, b) => a.priority - b.priority);
    else if (wpSort === 'title-asc') filtered.sort((a, b) => a.title.localeCompare(b.title));
    else if (wpSort === 'size-desc') filtered.sort((a, b) => b.sizeBytes - a.sizeBytes);
    else if (wpSort === 'size-asc') filtered.sort((a, b) => a.sizeBytes - b.sizeBytes);

    wpResultsCount.innerHTML = `Showing <strong>${filtered.length} of ${WP_DOCUMENTS.length}</strong> accreditation documents`;

    if (filtered.length === 0) {
      wpDocGrid.innerHTML = `
        <div class="accred-empty">
          <i class="fa-solid fa-folder-open" style="font-size: 3rem; color: #94a3b8; margin-bottom: 12px;"></i>
          <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.3rem; color: var(--accred-primary); margin-bottom: 6px;">No Documents Found</h3>
          <p style="color: #64748b;">No documents match "${wpEscape(wpSearch)}". Try another search term or filter.</p>
        </div>
      `;
      return;
    }

    let html = '';
    filtered.forEach(doc => {
      const docUrl = getWpDocUrl(doc.filename);
      const tags = doc.tags.map(t => `<span class="accred-tag">#${wpEscape(t)}</span>`).join('');

      html += `
        <article class="accred-card">
          <div class="accred-top-accent ${doc.accentClass}"></div>
          <div class="accred-card-body">
            <div class="accred-meta-row">
              <span class="accred-pill-cat ${doc.catClass}">
                <i class="fa-solid ${doc.icon}"></i>
                ${wpEscape(doc.categoryName)}
              </span>
              <span class="accred-pill-target">${wpEscape(doc.targetLevel)}</span>
            </div>

            <div class="accred-icon-header">
              <div class="accred-icon ${doc.iconClass}">
                <i class="fa-solid ${doc.icon}"></i>
              </div>
              <h3 class="accred-title">${wpEscape(doc.title)}</h3>
            </div>

            <p class="accred-desc">${wpEscape(doc.description)}</p>
            <div class="accred-tags">${tags}</div>
          </div>

          <div class="accred-card-footer">
            <div class="accred-file-details">
              <span class="accred-format-badge">PDF</span>
              <span>${doc.size}</span>
            </div>
            <div class="accred-actions">
              <button type="button" class="accred-btn-preview" onclick="openWpPreview('${doc.id}')">
                <i class="fa-solid fa-eye"></i>
                <span>Quick View</span>
              </button>
              <a href="${docUrl}" class="accred-btn-download" download="${wpEscape(doc.filename)}" title="Download PDF">
                <i class="fa-solid fa-download"></i>
                <span>Download</span>
              </a>
            </div>
          </div>
        </article>
      `;
    });

    wpDocGrid.innerHTML = html;
  }

  window.openWpPreview = function(docId) {
    const doc = WP_DOCUMENTS.find(d => d.id === docId);
    if (!doc) return;

    const docUrl = getWpDocUrl(doc.filename);
    wpModalTitle.textContent = doc.title;
    wpModalSubtitle.textContent = `${doc.categoryName} • ${doc.targetLevel} • ${doc.size}`;
    wpModalNewTabBtn.href = docUrl;
    wpModalDownloadBtn.href = docUrl;
    wpModalDownloadBtn.setAttribute('download', doc.filename);

    wpPdfFrame.src = docUrl + '#toolbar=1&navpanes=0';
    wpPdfModal.classList.add('active');
    document.body.style.overflow = 'hidden';
  };

  function closeWpModal() {
    wpPdfModal.classList.remove('active');
    wpPdfFrame.src = 'about:blank';
    document.body.style.overflow = '';
  }

  wpModalCloseBtn.addEventListener('click', closeWpModal);
  wpPdfModal.addEventListener('click', (e) => {
    if (e.target === wpPdfModal) closeWpModal();
  });
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && wpPdfModal.classList.contains('active')) closeWpModal();
  });

  wpCategoryTabs.addEventListener('click', (e) => {
    const tab = e.target.closest('.accred-category-tab');
    if (!tab) return;
    document.querySelectorAll('.accred-category-tab').forEach(t => t.classList.remove('active'));
    tab.classList.add('active');
    wpCategory = tab.dataset.category;
    renderWpDocs();
  });

  wpSearchInput.addEventListener('input', (e) => {
    wpSearch = e.target.value;
    wpSearchClear.style.display = wpSearch ? 'block' : 'none';
    renderWpDocs();
  });

  wpSearchClear.addEventListener('click', () => {
    wpSearchInput.value = '';
    wpSearch = '';
    wpSearchClear.style.display = 'none';
    renderWpDocs();
    wpSearchInput.focus();
  });

  wpLevelFilter.addEventListener('change', (e) => {
    wpLevel = e.target.value;
    renderWpDocs();
  });

  wpSortFilter.addEventListener('change', (e) => {
    wpSort = e.target.value;
    renderWpDocs();
  });

  function wpEscape(str) {
    if (!str) return '';
    return String(str)
      .replace(/&/g, '&amp;')
      .replace(/</g, '&lt;')
      .replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;')
      .replace(/'/g, '&#039;');
  }

  renderWpDocs();
</script>

<?php
get_footer();
?>
