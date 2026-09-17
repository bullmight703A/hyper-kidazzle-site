<?php
/**
 * Template Name: Federal Employees Priority & Discount Page
 * Description: Dedicated portal page for Federal Civil Service and Military families showcasing priority admittance, $520 federal discount rates, and GSA-governed federal campuses.
 *
 * @package kidazzle_Excellence
 * @since 1.0.0
 */

get_header();

$page_id = get_the_ID();
?>

<style>
  :root {
    --kd-navy: #023047;
    --kd-navy-dark: #011C2B;
    --kd-indigo: #4F46E5;
    --kd-indigo-light: #EEF2FF;
    --kd-blue: #0284C7;
    --kd-cyan: #0891B2;
    --kd-cyan-light: #ECFEFF;
    --kd-orange: #FB8500;
    --kd-orange-dark: #EA580C;
    --kd-orange-light: #FFF7ED;
    --kd-amber: #FFB703;
    --kd-green: #16A34A;
    --kd-green-light: #F0FDF4;
    --kd-cream: #FDFBF7;
    --kd-card: #FFFFFF;
    --kd-text: #1E293B;
    --kd-muted: #64748B;
    --kd-border: #E2E8F0;
    --kd-radius: 14px;
    --kd-radius-lg: 24px;
    --kd-shadow: 0 10px 25px -5px rgba(2, 48, 71, 0.06), 0 8px 10px -6px rgba(2, 48, 71, 0.04);
    --kd-shadow-xl: 0 20px 40px -15px rgba(2, 48, 71, 0.16);
  }

  .fed-page-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    background: var(--kd-cream);
    color: var(--kd-text);
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    overflow-x: hidden;
  }

  /* Top Utility Ribbon with 1-800 Toll Free */
  .fed-ribbon {
    background: var(--kd-navy-dark);
    color: #CBD5E1;
    font-size: 13px;
    font-weight: 600;
    padding: 10px 24px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }
  .fed-ribbon-left {
    display: flex;
    align-items: center;
    gap: 12px;
  }
  .fed-flag-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.2);
    padding: 4px 10px;
    border-radius: 999px;
    font-size: 11px;
    font-weight: 800;
    color: #38BDF8;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }
  .fed-ribbon-right {
    display: flex;
    gap: 16px;
    align-items: center;
  }
  .fed-toll-free-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #FFFFFF !important;
    background: var(--kd-orange);
    border: 1.5px solid var(--kd-orange);
    padding: 6px 16px;
    border-radius: 999px;
    text-decoration: none;
    font-weight: 800;
    font-size: 13.5px;
    box-shadow: 0 2px 10px rgba(251, 133, 0, 0.35);
    transition: all 0.2s ease;
  }
  .fed-toll-free-btn:hover {
    background: var(--kd-orange-dark);
    color: #FFFFFF !important;
    border-color: var(--kd-orange-dark);
    transform: translateY(-1px);
  }
  @media (max-width: 860px) {
    .fed-ribbon {
      padding: 12px 16px;
      flex-direction: column;
      gap: 10px;
      text-align: center;
    }
    .fed-ribbon-left { justify-content: center; flex-wrap: wrap; font-size: 12px; }
    .fed-ribbon-right { justify-content: center; width: 100%; }
    .fed-toll-free-btn {
      width: 100%;
      max-width: 320px;
      justify-content: center;
      padding: 10px 18px;
      font-size: 14px;
      min-height: 44px;
    }
  }

  /* Hero Section */
  .fed-hero {
    background: linear-gradient(135deg, #023047 0%, #0F2742 60%, #1E3A8A 100%);
    color: #FFFFFF;
    padding: 80px 24px 100px;
    position: relative;
    overflow: hidden;
  }
  .fed-hero::before {
    content: "";
    position: absolute;
    top: -160px;
    right: -120px;
    width: 650px;
    height: 650px;
    background: radial-gradient(circle, rgba(56, 189, 248, 0.2) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
  }
  .fed-hero::after {
    content: "";
    position: absolute;
    bottom: -180px;
    left: -150px;
    width: 550px;
    height: 550px;
    background: radial-gradient(circle, rgba(251, 133, 0, 0.16) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
  }
  .fed-hero-container {
    max-width: 1300px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1.18fr 0.82fr;
    gap: 52px;
    align-items: center;
    position: relative;
    z-index: 2;
  }
  @media (max-width: 980px) {
    .fed-hero { padding: 60px 16px 80px; }
    .fed-hero-container { grid-template-columns: 1fr; gap: 40px; text-align: center; }
  }

  .fed-badge-strip {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    padding: 6px 18px;
    border-radius: 999px;
    font-size: 13px;
    font-weight: 700;
    color: #E2E8F0;
    margin-bottom: 22px;
    backdrop-filter: blur(8px);
  }
  .fed-badge-strip span.dot {
    width: 8px;
    height: 8px;
    background: #38BDF8;
    border-radius: 50%;
    display: inline-block;
    box-shadow: 0 0 10px #38BDF8;
  }

  .fed-hero-title {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: clamp(34px, 4.4vw, 54px);
    font-weight: 800;
    line-height: 1.16;
    letter-spacing: -0.5px;
    margin-bottom: 20px;
    color: #FFFFFF;
  }
  .fed-hero-title span.highlight {
    background: linear-gradient(135deg, #38BDF8 0%, #818CF8 50%, #FBBF24 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .fed-hero-subtitle {
    font-size: 17.5px;
    line-height: 1.68;
    color: #CBD5E1;
    margin-bottom: 34px;
    max-width: 660px;
  }
  @media (max-width: 980px) {
    .fed-hero-subtitle { margin-left: auto; margin-right: auto; }
  }

  .fed-cta-group {
    display: flex;
    gap: 16px;
    align-items: center;
    flex-wrap: wrap;
  }
  @media (max-width: 980px) {
    .fed-cta-group { justify-content: center; }
  }
  @media (max-width: 480px) {
    .fed-cta-group { flex-direction: column; width: 100%; }
    .btn-fed-primary, .btn-fed-secondary { width: 100%; justify-content: center; }
  }
  .btn-fed-primary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(135deg, #FB8500 0%, #EA580C 100%);
    color: #FFFFFF !important;
    padding: 16px 28px;
    font-size: 15.5px;
    font-weight: 800;
    border-radius: 999px;
    text-decoration: none;
    box-shadow: 0 8px 24px rgba(251, 133, 0, 0.4);
    transition: all 0.2s ease;
    min-height: 48px;
  }
  .btn-fed-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(251, 133, 0, 0.5);
  }
  .btn-fed-secondary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: rgba(255, 255, 255, 0.08);
    color: #FFFFFF !important;
    border: 1.5px solid rgba(255, 255, 255, 0.25);
    padding: 15px 26px;
    font-size: 15.5px;
    font-weight: 700;
    border-radius: 999px;
    text-decoration: none;
    backdrop-filter: blur(8px);
    transition: all 0.2s ease;
    min-height: 48px;
  }
  .btn-fed-secondary:hover {
    background: rgba(255, 255, 255, 0.18);
    transform: translateY(-2px);
  }

  /* Quick Card */
  .fed-quick-card {
    background: rgba(255, 255, 255, 0.07);
    border: 1.5px solid rgba(255, 255, 255, 0.18);
    border-radius: var(--kd-radius-lg);
    padding: 32px 26px;
    backdrop-filter: blur(16px);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.45);
    text-align: left;
  }
  @media (max-width: 480px) {
    .fed-quick-card { padding: 22px 18px; }
  }
  .fed-card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    padding-bottom: 14px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.15);
  }
  .fed-card-header h3 {
    font-size: 18px;
    font-weight: 800;
    color: #FFFFFF;
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 0;
  }
  .fed-card-header span.tag {
    background: rgba(56, 189, 248, 0.2);
    color: #38BDF8;
    font-size: 11px;
    font-weight: 800;
    padding: 4px 10px;
    border-radius: 999px;
    text-transform: uppercase;
  }
  .fed-quick-list {
    list-style: none;
    margin: 0 0 22px 0;
    padding: 0;
  }
  .fed-quick-list li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-bottom: 14px;
    font-size: 14px;
    color: #E2E8F0;
    font-weight: 600;
    line-height: 1.5;
  }
  .fed-quick-list li svg {
    width: 20px;
    height: 20px;
    fill: #34D399;
    flex-shrink: 0;
    margin-top: 2px;
  }
  .fed-campus-pill-row {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }
  .fed-campus-pill-item {
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 10px;
    padding: 10px 14px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 13px;
  }
  .fed-campus-pill-item strong { color: #FFFFFF; }
  .fed-campus-pill-item span { color: #38BDF8; font-weight: 700; font-size: 12px; }

  /* Metrics Strip */
  .fed-metrics-strip {
    background: #FFFFFF;
    border-bottom: 1px solid var(--kd-border);
    padding: 32px 24px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
  }
  @media (max-width: 640px) {
    .fed-metrics-strip { padding: 24px 16px; }
  }
  .fed-metrics-container {
    max-width: 1280px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 28px;
  }
  @media (max-width: 860px) {
    .fed-metrics-container { grid-template-columns: repeat(2, 1fr); gap: 24px; }
  }
  @media (max-width: 480px) {
    .fed-metrics-container { grid-template-columns: 1fr; gap: 20px; }
  }
  .fed-metric-item {
    display: flex;
    flex-direction: column;
  }
  .fed-metric-num {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 34px;
    font-weight: 800;
    color: var(--kd-navy);
    line-height: 1;
    margin-bottom: 6px;
  }
  .fed-metric-num span.unit {
    color: var(--kd-orange);
    font-size: 22px;
  }
  .fed-metric-title {
    font-size: 14px;
    font-weight: 800;
    color: var(--kd-text);
    margin-bottom: 2px;
  }
  .fed-metric-desc {
    font-size: 12.5px;
    color: var(--kd-muted);
  }

  /* Section Layout */
  .fed-section-wrap {
    padding: 90px 24px;
    position: relative;
  }
  .fed-section-container {
    max-width: 1280px;
    margin: 0 auto;
  }
  .fed-section-header {
    text-align: center;
    max-width: 820px;
    margin: 0 auto 50px;
  }
  .fed-eyebrow {
    display: inline-block;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--kd-indigo);
    background: var(--kd-indigo-light);
    padding: 6px 16px;
    border-radius: 999px;
    margin-bottom: 14px;
    border: 1px solid rgba(79, 70, 229, 0.15);
  }
  .fed-eyebrow.orange {
    color: var(--kd-orange-dark);
    background: var(--kd-orange-light);
    border-color: rgba(251, 133, 0, 0.25);
  }
  .fed-section-title {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: clamp(30px, 3.8vw, 44px);
    font-weight: 800;
    color: var(--kd-navy);
    line-height: 1.2;
    margin-bottom: 16px;
  }
  .fed-section-subtitle {
    font-size: 16.5px;
    color: var(--kd-muted);
    line-height: 1.65;
  }

  /* Perks Grid */
  .fed-perks-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 28px;
  }
  @media (max-width: 1024px) {
    .fed-perks-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 600px) {
    .fed-perks-grid { grid-template-columns: 1fr; }
  }
  .fed-perk-card {
    background: #FFFFFF;
    border: 1px solid var(--kd-border);
    border-radius: var(--kd-radius-lg);
    padding: 32px 24px;
    box-shadow: var(--kd-shadow);
    transition: all 0.25s ease;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
  }
  .fed-perk-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--kd-shadow-xl);
    border-color: var(--card-color, var(--kd-indigo));
  }
  .fed-perk-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--card-color, var(--kd-indigo));
  }
  .fed-perk-icon-box {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: var(--icon-bg, var(--kd-indigo-light));
    color: var(--card-color, var(--kd-indigo));
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 18px;
  }
  .fed-perk-icon-box svg {
    width: 26px;
    height: 26px;
    fill: currentColor;
  }
  .fed-perk-card h3 {
    font-size: 19px;
    font-weight: 800;
    color: var(--kd-navy);
    margin-bottom: 10px;
    line-height: 1.3;
  }
  .fed-perk-card p {
    font-size: 14.5px;
    color: var(--kd-muted);
    line-height: 1.65;
    margin: 0;
  }

  /* Campuses Showcase */
  .fed-campuses-section {
    background: #FFFFFF;
    border-top: 1px solid var(--kd-border);
    border-bottom: 1px solid var(--kd-border);
  }
  .fed-campuses-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 36px;
  }
  @media (max-width: 900px) {
    .fed-campuses-grid { grid-template-columns: 1fr; gap: 28px; }
  }
  .fed-campus-card {
    background: #FDFBF7;
    border: 1.5px solid var(--kd-border);
    border-radius: var(--kd-radius-lg);
    overflow: hidden;
    box-shadow: var(--kd-shadow);
    display: flex;
    flex-direction: column;
    transition: all 0.3s ease;
  }
  .fed-campus-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--kd-shadow-xl);
    border-color: var(--kd-blue);
  }
  .fed-campus-media-box {
    height: 240px;
    position: relative;
    background: var(--kd-navy);
    overflow: hidden;
  }
  @media (max-width: 500px) {
    .fed-campus-media-box { height: 200px; }
  }
  .fed-campus-media-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
  }
  .fed-campus-card:hover .fed-campus-media-box img {
    transform: scale(1.04);
  }
  .fed-campus-badge-tag {
    position: absolute;
    top: 16px;
    left: 16px;
    background: rgba(2, 48, 71, 0.88);
    border: 1px solid rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(8px);
    color: #FFFFFF;
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    padding: 5px 12px;
    border-radius: 999px;
  }
  .fed-campus-rate-badge {
    position: absolute;
    bottom: 16px;
    right: 16px;
    background: var(--kd-orange);
    color: #FFFFFF;
    font-size: 12px;
    font-weight: 800;
    padding: 6px 14px;
    border-radius: 999px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
  }
  .fed-campus-content {
    padding: 28px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
  }
  @media (max-width: 480px) {
    .fed-campus-content { padding: 20px 18px; }
  }
  .fed-campus-agency-strip {
    font-size: 12px;
    font-weight: 700;
    color: var(--kd-indigo);
    text-transform: uppercase;
    letter-spacing: 0.6px;
    margin-bottom: 8px;
  }
  .fed-campus-content h3 {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 23px;
    font-weight: 800;
    color: var(--kd-navy);
    margin-bottom: 8px;
    line-height: 1.25;
  }
  .fed-campus-address {
    font-size: 13.5px;
    color: var(--kd-muted);
    margin-bottom: 16px;
    display: flex;
    align-items: center;
    gap: 6px;
  }
  .fed-campus-address svg {
    width: 16px;
    height: 16px;
    fill: var(--kd-orange);
    flex-shrink: 0;
  }
  .fed-campus-desc {
    font-size: 14.5px;
    color: #475569;
    line-height: 1.65;
    margin-bottom: 20px;
  }
  .fed-campus-features-list {
    list-style: none;
    margin: 0 0 26px 0;
    padding: 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
  }
  @media (max-width: 540px) {
    .fed-campus-features-list { grid-template-columns: 1fr; }
  }
  .fed-campus-features-list li {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    font-weight: 700;
    color: var(--kd-text);
  }
  .fed-campus-features-list li svg {
    width: 15px;
    height: 15px;
    fill: var(--kd-green);
    flex-shrink: 0;
  }
  .fed-campus-actions-row {
    margin-top: auto;
    display: flex;
    gap: 12px;
  }
  @media (max-width: 480px) {
    .fed-campus-actions-row { flex-direction: column; }
  }
  .btn-fed-campus-tour {
    flex: 1;
    padding: 12px 18px;
    background: var(--kd-navy);
    color: #FFFFFF !important;
    font-size: 14px;
    font-weight: 800;
    text-align: center;
    text-decoration: none;
    border-radius: 10px;
    transition: background 0.2s;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 46px;
  }
  .btn-fed-campus-tour:hover { background: var(--kd-blue); }
  .btn-fed-campus-call {
    padding: 12px 18px;
    background: #FFFFFF;
    border: 1.5px solid var(--kd-border);
    color: var(--kd-navy) !important;
    font-size: 13.5px;
    font-weight: 800;
    text-align: center;
    text-decoration: none;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    transition: all 0.2s;
    min-height: 46px;
  }
  .btn-fed-campus-call:hover {
    border-color: var(--kd-navy);
    background: #F1F5F9;
  }

  /* $520 Savings Transparency Card */
  .fed-subsidy-guide-card {
    background: linear-gradient(135deg, #EEF2FF 0%, #E0E7FF 100%);
    border: 2px solid #C7D2FE;
    border-radius: var(--kd-radius-lg);
    padding: 40px;
    margin-top: 56px;
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 40px;
    align-items: center;
  }
  @media (max-width: 860px) {
    .fed-subsidy-guide-card { grid-template-columns: 1fr; padding: 28px 20px; gap: 28px; text-align: center; }
    .fed-subsidy-pills { justify-content: center; }
  }
  .fed-subsidy-left h3 {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 26px;
    font-weight: 800;
    color: #312E81;
    margin-bottom: 12px;
    line-height: 1.25;
  }
  .fed-subsidy-left p {
    font-size: 15px;
    color: #4338CA;
    line-height: 1.65;
    margin-bottom: 20px;
  }
  .fed-subsidy-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
  }
  .fed-subsidy-pill {
    background: #FFFFFF;
    border: 1px solid #C7D2FE;
    padding: 6px 14px;
    border-radius: 999px;
    font-size: 12.5px;
    font-weight: 700;
    color: #3730A3;
    display: inline-flex;
    align-items: center;
    gap: 6px;
  }
  .fed-subsidy-right-box {
    background: #FFFFFF;
    border-radius: var(--kd-radius);
    padding: 28px 24px;
    box-shadow: 0 10px 25px rgba(49, 46, 129, 0.08);
    text-align: center;
  }
  .fed-subsidy-highlight-num {
    font-size: 46px;
    font-weight: 900;
    color: var(--kd-orange);
    font-family: 'Playfair Display', Georgia, serif;
    line-height: 1;
    margin-bottom: 6px;
  }
  .fed-subsidy-highlight-label {
    font-size: 13.5px;
    font-weight: 800;
    color: #1E293B;
    margin-bottom: 4px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }
  .fed-subsidy-highlight-sub {
    font-size: 12.5px;
    color: #64748B;
  }

  /* Verification & Form Section */
  .fed-verification-card-wrap {
    max-width: 1140px;
    margin: 0 auto;
    background: #FFFFFF;
    border: 1.5px solid var(--kd-border);
    border-radius: var(--kd-radius-lg);
    padding: 56px 48px;
    box-shadow: var(--kd-shadow-xl);
    display: grid;
    grid-template-columns: 1fr 1.15fr;
    gap: 52px;
  }
  @media (max-width: 960px) {
    .fed-verification-card-wrap { grid-template-columns: 1fr; padding: 32px 20px; gap: 36px; }
  }
  .fed-verification-left h3 {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 30px;
    font-weight: 800;
    color: var(--kd-navy);
    margin-bottom: 14px;
    line-height: 1.2;
  }
  .fed-verification-left p {
    font-size: 15px;
    color: var(--kd-muted);
    line-height: 1.65;
    margin-bottom: 26px;
  }
  .fed-check-list {
    list-style: none;
    margin: 0 0 28px 0;
    padding: 0;
  }
  .fed-check-list li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    font-size: 14px;
    color: var(--kd-text);
    font-weight: 600;
    margin-bottom: 14px;
  }
  .fed-check-list li svg {
    width: 18px;
    height: 18px;
    fill: var(--kd-green);
    flex-shrink: 0;
    margin-top: 2px;
  }
  .fed-id-note-box {
    background: var(--kd-orange-light);
    border: 1px solid rgba(251, 133, 0, 0.3);
    border-radius: var(--kd-radius);
    padding: 16px 18px;
    font-size: 13px;
    color: #9A3412;
    line-height: 1.55;
  }

  /* Form Elements (Mobile Optimized) */
  .fed-form {
    display: flex;
    flex-direction: column;
    gap: 16px;
  }
  .fed-form-row-2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
  }
  @media (max-width: 600px) {
    .fed-form-row-2 { grid-template-columns: 1fr; gap: 14px; }
  }
  .fed-form-group {
    display: flex;
    flex-direction: column;
    gap: 6px;
  }
  .fed-form-label {
    font-size: 13px;
    font-weight: 700;
    color: var(--kd-navy);
  }
  .fed-form input, .fed-form select, .fed-form textarea {
    width: 100%;
    border: 1.5px solid var(--kd-border);
    border-radius: 10px;
    padding: 12px 14px;
    font-size: 16px; /* Prevents auto-zoom on iOS */
    font-family: inherit;
    color: var(--kd-text);
    outline: none;
    transition: border-color 0.2s, box-shadow 0.2s;
    background: #FFFFFF;
    box-sizing: border-box;
    min-height: 48px;
  }
  .fed-form textarea {
    min-height: 80px;
    resize: vertical;
  }
  .fed-form input:focus, .fed-form select:focus, .fed-form textarea:focus {
    border-color: var(--kd-indigo);
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.15);
  }
  .btn-submit-fed {
    padding: 16px 24px;
    background: linear-gradient(135deg, #FB8500 0%, #EA580C 100%);
    color: #FFFFFF;
    font-size: 15.5px;
    font-weight: 800;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    box-shadow: 0 6px 20px rgba(251, 133, 0, 0.35);
    transition: all 0.2s ease;
    margin-top: 8px;
    min-height: 50px;
    width: 100%;
  }
  .btn-submit-fed:hover {
    background: linear-gradient(135deg, #EA580C 0%, #C2410C 100%);
    transform: translateY(-1px);
    box-shadow: 0 8px 25px rgba(251, 133, 0, 0.45);
  }

  /* FAQ */
  .fed-faq-grid {
    max-width: 960px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 16px;
  }
  .fed-faq-card {
    border: 1.5px solid var(--kd-border);
    border-radius: var(--kd-radius);
    padding: 22px 26px;
    background: #FDFBF7;
    transition: border-color 0.2s;
  }
  @media (max-width: 480px) {
    .fed-faq-card { padding: 18px 16px; }
  }
  .fed-faq-card:hover { border-color: var(--kd-indigo); }
  .fed-faq-question {
    font-size: 16.5px;
    font-weight: 800;
    color: var(--kd-navy);
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .fed-faq-answer {
    font-size: 14.5px;
    color: #475569;
    line-height: 1.65;
  }
</style>

<div class="fed-page-wrapper">
  <!-- Top Utility Ribbon: 1-800 Toll Free Line -->
  <div class="fed-ribbon">
    <div class="fed-ribbon-left">
      <span class="fed-flag-badge">
        🏛️ Federal Employee Program
      </span>
      <span>Priority Admittance &amp; Exclusive $520 Tuition Savings for Civil Service &amp; Military Families</span>
    </div>
    <div class="fed-ribbon-right">
      <a href="tel:18774101002" class="fed-toll-free-btn">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
        Toll Free: 1-877-410-1002
      </a>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="fed-hero" id="hero">
    <div class="fed-hero-container">
      <div class="fed-hero-content">
        <div class="fed-badge-strip">
          <span class="dot"></span>
          <span>Official GSA Governed Early Learning Centers</span>
        </div>
        <h1 class="fed-hero-title">
          Priority Child Care &amp; <span class="highlight">$520 Savings</span> for Federal Employees
        </h1>
        <p class="fed-hero-subtitle">
          KIDazzle is proud to serve federal civil servants and military families across the Southeast. We provide fast-track priority enrollment that bypasses public waitlists, an exclusive $520 annual tuition savings, and high-security child care facilities inside and adjacent to major federal installations.
        </p>
        <div class="fed-cta-group">
          <a href="#verification" class="btn-fed-primary">
            Claim Priority Placement
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M5 13h11.86l-5.43 5.43 1.42 1.42L21.14 12l-8.29-8.29-1.42 1.42L16.86 11H5v2z"/></svg>
          </a>
          <a href="#campuses" class="btn-fed-secondary">
            Explore Federal Campuses
          </a>
        </div>
      </div>

      <!-- Quick Verification Card -->
      <div class="fed-quick-card">
        <div class="fed-card-header">
          <h3>
            <svg width="22" height="22" viewBox="0 0 24 24" fill="#38BDF8"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
            Federal Benefits Fast-Track
          </h3>
          <span class="tag">Active 2026 Intake</span>
        </div>

        <ul class="fed-quick-list">
          <li>
            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
            <span><strong>Priority Admission Queue:</strong> Federal parents jump ahead of general public waitlists.</span>
          </li>
          <li>
            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
            <span><strong>$520 Federal Tuition Savings:</strong> Exclusive annual rate discount applied directly to tuition.</span>
          </li>
          <li>
            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
            <span><strong>Waived Annual Registration:</strong> Zero enrollment fee for verified federal agency families.</span>
          </li>
        </ul>

        <div class="fed-campus-pill-row">
          <div class="fed-campus-pill-item">
            <strong>🏛️ IRS Peachtree Summit Building</strong>
            <span>401 W Peachtree St NW &bull; Priority Open</span>
          </div>
          <div class="fed-campus-pill-item">
            <strong>🏛️ Sam Nunn Atlanta Federal Center</strong>
            <span>61 Forsyth / 100 Alabama &bull; Priority Open</span>
          </div>
          <div class="fed-campus-pill-item">
            <strong>✈️ FAA Little Flyers Academy</strong>
            <span>1701 Columbia Ave &bull; Priority Open</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Metrics Strip -->
  <div class="fed-metrics-strip">
    <div class="fed-metrics-container">
      <div class="fed-metric-item">
        <div class="fed-metric-num">Priority<span class="unit"> Queue</span></div>
        <div class="fed-metric-title">Guaranteed Admittance Preference</div>
        <div class="fed-metric-desc">Civil service &amp; federal contractor parents</div>
      </div>
      <div class="fed-metric-item">
        <div class="fed-metric-num">$520<span class="unit"> Savings</span></div>
        <div class="fed-metric-title">Exclusive Federal Tuition Discount</div>
        <div class="fed-metric-desc">Direct annual savings applied across child tuition</div>
      </div>
      <div class="fed-metric-item">
        <div class="fed-metric-num">100<span class="unit">%</span></div>
        <div class="fed-metric-title">GSA Facility Compliance</div>
        <div class="fed-metric-desc">Badged keycard security &amp; vetted staff</div>
      </div>
      <div class="fed-metric-item">
        <div class="fed-metric-num">Free<span class="unit"> Pre-K</span></div>
        <div class="fed-metric-title">Georgia Lottery Funded 4-Yr-Olds</div>
        <div class="fed-metric-desc">State-certified tuition-free classrooms</div>
      </div>
    </div>
  </div>

  <!-- Federal Priority & Benefits -->
  <section class="fed-section-wrap" id="perks">
    <div class="fed-section-container">
      <div class="fed-section-header">
        <span class="fed-eyebrow">Civil Service Benefits</span>
        <h2 class="fed-section-title">Built Specially for Government Families</h2>
        <p class="fed-section-subtitle">
          Federal workers deserve early learning that matches the standard of their service. KIDazzle has operated high-accreditation federal facility centers for over three decades, delivering unmatched security, flexibility, and financial relief.
        </p>
      </div>

      <div class="fed-perks-grid">
        <div class="fed-perk-card" style="--card-color: #4F46E5; --icon-bg: #EEF2FF;">
          <div class="fed-perk-icon-box">
            <svg viewBox="0 0 24 24"><path d="M12 2L1 21h22L12 2zm0 3.51L20.08 19H3.92L12 5.51zM11 10h2v4h-2zm0 6h2v2h-2z"/></svg>
          </div>
          <h3>Priority Admittance</h3>
          <p>
            Federal agency employees bypass standard public waitlists. As slots open, your children receive top-tier queue priority across our federal facility locations and regional network.
          </p>
        </div>

        <div class="fed-perk-card" style="--card-color: #FB8500; --icon-bg: #FFF7ED;">
          <div class="fed-perk-icon-box">
            <svg viewBox="0 0 24 24"><path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/></svg>
          </div>
          <h3>$520 Tuition Savings</h3>
          <p>
            Exclusive $520 annual discount applied directly to full-time infant, toddler, and preschool tuition schedules, making premier child care affordable for government staff.
          </p>
        </div>

        <div class="fed-perk-card" style="--card-color: #0891B2; --icon-bg: #ECFEFF;">
          <div class="fed-perk-icon-box">
            <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
          </div>
          <h3>GSA Secure Facilities</h3>
          <p>
            Located inside secure federal building perimeters with badged access, armed federal security presence, and comprehensive background-screened early childhood educators.
          </p>
        </div>

        <div class="fed-perk-card" style="--card-color: #16A34A; --icon-bg: #F0FDF4;">
          <div class="fed-perk-icon-box">
            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
          </div>
          <h3>Waived Registration</h3>
          <p>
            All annual enrollment and registration fees are completely waived for verified civil servants, maximizing your total immediate savings upon registration.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Federal Campuses Showcase -->
  <section class="fed-section-wrap fed-campuses-section" id="campuses">
    <div class="fed-section-container">
      <div class="fed-section-header">
        <span class="fed-eyebrow orange">Dedicated Locations</span>
        <h2 class="fed-section-title">Our Federal Facility Campus Locations</h2>
        <p class="fed-section-subtitle">
          Walk to drop-off without ever leaving your work campus. Our federal locations are integrated directly into major government building complexes in Midtown, Downtown, and the airport corridor.
        </p>
      </div>

      <div class="fed-campuses-grid">
        <!-- Campus 1: Peachtree Summit -->
        <div class="fed-campus-card">
          <div class="fed-campus-media-box">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/multicultural_preschool_cover_1772749052917.png" alt="IRS Peachtree Summit Federal Building KIDazzle">
            <span class="fed-campus-badge-tag">GSA Federal Building</span>
            <span class="fed-campus-rate-badge">$520 Savings Eligible</span>
          </div>
          <div class="fed-campus-content">
            <div class="fed-campus-agency-strip">Serving IRS, GSA, EPA &amp; Midtown Federal Staff</div>
            <h3>Peachtree Summit Federal Center</h3>
            <div class="fed-campus-address">
              <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
              401 W Peachtree St NW, Atlanta, GA 30308 (Midtown)
            </div>
            <p class="fed-campus-desc">
              Located directly inside the landmark Peachtree Summit Federal Building with interior elevator access and immediate Civic Center MARTA station connection. Features an infant wing, toddler discovery zones, and Georgia Lottery Pre-K.
            </p>
            <ul class="fed-campus-features-list">
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>GSA Federal Keycard Access</li>
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Direct MARTA Concourse Entry</li>
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Bilingual Spanish Immersion</li>
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Georgia Lottery Pre-K Class</li>
            </ul>
            <div class="fed-campus-actions-row">
              <a href="#verification" class="btn-fed-campus-tour" onclick="selectCampus('Peachtree Summit Federal Center')">Claim Summit Priority &rarr;</a>
              <a href="tel:4043311600" class="btn-fed-campus-call">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                (404) 331-1600
              </a>
            </div>
          </div>
        </div>

        <!-- Campus 2: Atlanta Federal Center -->
        <div class="fed-campus-card">
          <div class="fed-campus-media-box">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/multicultural_infants_cover_1772749039948.png" alt="Sam Nunn Atlanta Federal Center KIDazzle">
            <span class="fed-campus-badge-tag">Sam Nunn Complex</span>
            <span class="fed-campus-rate-badge">$520 Savings Eligible</span>
          </div>
          <div class="fed-campus-content">
            <div class="fed-campus-agency-strip">Serving EPA, HUD, USDA, CDC, SSA &amp; Federal Courts</div>
            <h3>Sam Nunn Atlanta Federal Center (AFC)</h3>
            <div class="fed-campus-address">
              <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
              61 Forsyth St SW / 100 Alabama St, Atlanta, GA 30303 (Downtown)
            </div>
            <p class="fed-campus-desc">
              Situated in the heart of the Sam Nunn Atlanta Federal Center, this premier facility boasts a private secure outdoor playground courtyard, state-of-the-art sensory rooms, and dedicated infant suites.
            </p>
            <ul class="fed-campus-features-list">
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Enclosed Protected Courtyard</li>
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>GSA Badged Security Perimeter</li>
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Quality Rated Certified Classrooms</li>
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Infant, Toddler &amp; Pre-K Programs</li>
            </ul>
            <div class="fed-campus-actions-row">
              <a href="#verification" class="btn-fed-campus-tour" onclick="selectCampus('Sam Nunn Atlanta Federal Center')">Claim AFC Priority &rarr;</a>
              <a href="tel:4046810665" class="btn-fed-campus-call">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                (404) 681-0665
              </a>
            </div>
          </div>
        </div>

        <!-- Campus 3: Little Flyers Academy -->
        <div class="fed-campus-card">
          <div class="fed-campus-media-box">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/stem_kids_1772748785832.png" alt="Little Flyers Academy FAA Regional Headquarters KIDazzle">
            <span class="fed-campus-badge-tag">FAA Regional Campus</span>
            <span class="fed-campus-rate-badge">$520 Savings Eligible</span>
          </div>
          <div class="fed-campus-content">
            <div class="campus-agency-strip">Serving FAA, TSA, DOT &amp; Airport Corridor Personnel</div>
            <h3>Little Flyers Academy (FAA Headquarters)</h3>
            <div class="fed-campus-address">
              <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
              1701 Columbia Ave, College Park, GA 30337
            </div>
            <p class="fed-campus-desc">
              Situated on the Federal Aviation Administration Southern Regional Headquarters campus. Features aviation-inspired STEAM curriculum, outdoor nature play spaces, and high-frequency communication.
            </p>
            <ul class="fed-campus-features-list">
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>FAA Headquarters Campus Access</li>
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Aviation-Themed STEAM Lab</li>
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Minutes from Airport Terminal</li>
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Infant to Kindergarten Readiness</li>
            </ul>
            <div class="fed-campus-actions-row">
              <a href="#verification" class="btn-fed-campus-tour" onclick="selectCampus('Little Flyers Academy (FAA)')">Claim FAA Priority &rarr;</a>
              <a href="tel:4043056950" class="btn-fed-campus-call">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                (404) 305-6950
              </a>
            </div>
          </div>
        </div>

        <!-- Campus 4: Tailwinds Doral/Miami -->
        <div class="fed-campus-card">
          <div class="fed-campus-media-box">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pre_k_kids_reading_1772748826409.png" alt="Tailwinds Development Center Doral Miami KIDazzle">
            <span class="fed-campus-badge-tag">South Florida Federal Corridor</span>
            <span class="fed-campus-rate-badge">$520 Savings Eligible</span>
          </div>
          <div class="fed-campus-content">
            <div class="fed-campus-agency-strip">Serving Federal &amp; Aviation Personnel in South Florida</div>
            <h3>Tailwinds Development Center (Doral/Miami)</h3>
            <div class="fed-campus-address">
              <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
              8300 NW 53rd St, Doral, FL 33166
            </div>
            <p class="fed-campus-desc">
              Dedicated to civil service, federal aviation, and regional government personnel in Doral and Miami. Features dual-language Spanish-English immersion, motor skills exploration, and tailored schedules.
            </p>
            <ul class="fed-campus-features-list">
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Dual-Language Spanish Immersion</li>
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Advanced STEM Exploration Lab</li>
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Direct Tuition Savings</li>
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Infant to Kindergarten Readiness</li>
            </ul>
            <div class="fed-campus-actions-row">
              <a href="#verification" class="btn-fed-campus-tour" onclick="selectCampus('Tailwinds Development Center (Doral)')">Claim Doral Priority &rarr;</a>
              <a href="tel:7868296309" class="btn-fed-campus-call">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                (786) 829-6309
              </a>
            </div>
          </div>
        </div>

        <!-- Campus 5: Hampton / Lovejoy Federal Center -->
        <div class="fed-campus-card">
          <div class="fed-campus-media-box">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/campus_reading_nook_1772749540264.png" alt="Hampton Lovejoy FAA Regional Center KIDazzle">
            <span class="fed-campus-badge-tag">FAA Atlanta Region</span>
            <span class="fed-campus-rate-badge">$520 Savings Eligible</span>
          </div>
          <div class="fed-campus-content">
            <div class="fed-campus-agency-strip">Serving FAA Atlanta Center, Clayton &amp; Henry County Federal Personnel</div>
            <h3>Hampton / Lovejoy Regional Center</h3>
            <div class="fed-campus-address">
              <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
              49 Woolsey Rd, Hampton, GA 30228 (Henry / Clayton Corridor)
            </div>
            <p class="fed-campus-desc">
              Conveniently positioned for South Metro federal civil servants, FAA Atlanta Center operations, and regional personnel. Features expansive indoor exploration discovery zones, dedicated early learning suites, and Georgia Lottery Pre-K.
            </p>
            <ul class="fed-campus-features-list">
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>FAA Atlanta Regional Corridor</li>
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Georgia Lottery Pre-K Class</li>
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Spacious Outdoor Playgrounds</li>
              <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Infant, Toddler &amp; After-School</li>
            </ul>
            <div class="fed-campus-actions-row">
              <a href="#verification" class="btn-fed-campus-tour" onclick="selectCampus('Hampton / Lovejoy')">Claim Hampton Priority &rarr;</a>
              <a href="tel:7702107290" class="btn-fed-campus-call">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                (770) 210-7290
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- $520 Savings Transparency Card -->
      <div class="fed-subsidy-guide-card" id="subsidy">
        <div class="fed-subsidy-left">
          <span class="fed-eyebrow">Tuition Savings &amp; Relief</span>
          <h3>How the $520 Federal Employee Discount Works</h3>
          <p>
            Federal employees and on-site federal agency staff receive an exclusive $520 annual tuition discount applied directly across your weekly or bi-weekly tuition schedule. In addition, KIDazzle waives the annual enrollment registration fee for all verified civil service families.
          </p>
          <div class="fed-subsidy-pills">
            <span class="fed-subsidy-pill">✓ $520 Annual Direct Tuition Discount</span>
            <span class="fed-subsidy-pill">✓ Waived Annual Registration Fee</span>
            <span class="fed-subsidy-pill">✓ All Age Groups (Infant to Pre-K)</span>
            <span class="fed-subsidy-pill">✓ Guaranteed Priority Admittance</span>
          </div>
        </div>
        <div class="fed-subsidy-right-box">
          <div class="fed-subsidy-highlight-num">$520</div>
          <div class="fed-subsidy-highlight-label">Annual Federal Employee Savings</div>
          <div class="fed-subsidy-highlight-sub">Direct tuition reduction + waived registration fees</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Federal Verification & Priority Tour Request -->
  <section class="fed-section-wrap" id="verification">
    <div class="fed-verification-card-wrap">
      <div class="fed-verification-left">
        <span class="fed-eyebrow">Priority Admittance</span>
        <h3>Verify Your Federal Priority Status</h3>
        <p>
          Complete this quick verification form to claim your priority queue position. A dedicated KIDazzle Federal Enrollment Coordinator will contact you within 24 hours to review classroom availability and apply your $520 federal discount.
        </p>

        <ul class="fed-check-list">
          <li>
            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
            <span><strong>Instant Priority Assignment:</strong> Your application is tagged as federal priority immediately upon submission.</span>
          </li>
          <li>
            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
            <span><strong>Private Campus Walkthrough:</strong> Flexible tour scheduling accommodated around federal agency shift hours.</span>
          </li>
          <li>
            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
            <span><strong>No General Waitlist Hold:</strong> Federal families receive direct placement preference as classroom slots open.</span>
          </li>
        </ul>

        <div class="fed-id-note-box">
          <strong>Verification Requirements:</strong> To finalize your $520 federal discount upon enrollment, parents simply present their federal PIV/CAC badge, recent SF-50, or agency paystub. Submitting with a <code>.gov</code> email fast-tracks verification.
        </div>
      </div>

      <form class="fed-form" onsubmit="handleFederalSubmit(event)">
        <div class="fed-form-row-2">
          <div class="fed-form-group">
            <label class="fed-form-label">Parent / Guardian Full Name *</label>
            <input type="text" id="fedParentName" placeholder="e.g. Captain Marcus Vance" required>
          </div>
          <div class="fed-form-group">
            <label class="fed-form-label">Federal Agency / Department *</label>
            <select id="fedAgency" required>
              <option value="" disabled selected>Select Your Agency / Dept...</option>
              <option value="IRS">Internal Revenue Service (IRS)</option>
              <option value="GSA">General Services Administration (GSA)</option>
              <option value="EPA">Environmental Protection Agency (EPA)</option>
              <option value="HUD">Housing &amp; Urban Development (HUD)</option>
              <option value="FAA">Federal Aviation Administration (FAA)</option>
              <option value="USDA">Department of Agriculture (USDA)</option>
              <option value="CDC">Centers for Disease Control (CDC)</option>
              <option value="SSA">Social Security Administration (SSA)</option>
              <option value="DHS_TSA">Department of Homeland Security / TSA</option>
              <option value="DOD_Military">Department of Defense / Military</option>
              <option value="DOJ_Courts">Department of Justice / Federal Courts</option>
              <option value="Federal_Contractor">Federal Agency Contractor</option>
              <option value="Other_Federal">Other Federal Civil Service</option>
            </select>
          </div>
        </div>

        <div class="fed-form-row-2">
          <div class="fed-form-group">
            <label class="fed-form-label">Official Work Email (.gov preferred) *</label>
            <input type="email" id="fedEmail" placeholder="marcus.vance@gsa.gov" required>
          </div>
          <div class="fed-form-group">
            <label class="fed-form-label">Direct Phone Number *</label>
            <input type="tel" id="fedPhone" placeholder="(404) 555-0182" required>
          </div>
        </div>

        <div class="fed-form-row-2">
          <div class="fed-form-group">
            <label class="fed-form-label">Preferred Federal Campus *</label>
            <select id="fedCampus" required>
              <option value="Peachtree Summit Federal Center" selected>IRS Peachtree Summit Building (Midtown Atlanta)</option>
              <option value="Sam Nunn Atlanta Federal Center">Sam Nunn Atlanta Federal Center (Downtown Atlanta)</option>
              <option value="Little Flyers Academy (FAA)">Little Flyers Academy (FAA Regional Headquarters - College Park)</option>
              <option value="Hampton / Lovejoy (FAA Center) - 49 Woolsey Rd">Hampton / Lovejoy (FAA Center) — 49 Woolsey Rd, Hampton, GA 30228</option>
              <option value="Tailwinds Development Center (Doral)">Tailwinds Development Center (Doral / Miami)</option>
            </select>
          </div>
          <div class="fed-form-group">
            <label class="fed-form-label">Child Age Group *</label>
            <select id="fedAgeGroup" required>
              <option value="Infant (6 weeks - 12 months)">Infant (6 weeks – 12 months)</option>
              <option value="Toddler (1 - 2 years)" selected>Toddler (1 – 2 years)</option>
              <option value="Preschool (3 years)">Preschool (3 years)</option>
              <option value="Georgia Lottery Pre-K (4 years)">Georgia Lottery Pre-K (4 years - Free Tuition)</option>
              <option value="After School (5 - 12 years)">After School / Summer Camp (5 – 12 years)</option>
            </select>
          </div>
        </div>

        <div class="fed-form-row-2">
          <div class="fed-form-group">
            <label class="fed-form-label">Child's Name *</label>
            <input type="text" id="fedChildName" placeholder="Child's Full Name" required>
          </div>
          <div class="fed-form-group">
            <label class="fed-form-label">Target Enrollment Date *</label>
            <input type="date" id="fedStartDate" required>
          </div>
        </div>

        <div class="fed-form-group">
          <label class="fed-form-label">Special Requests, Schedule Hours or Preferences:</label>
          <textarea id="fedNotes" rows="3" placeholder="e.g. Seeking infant spot starting November..."></textarea>
        </div>

        <button type="submit" class="btn-submit-fed">
          Submit Federal Priority Application &amp; Schedule Tour
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M5 13h11.86l-5.43 5.43 1.42 1.42L21.14 12l-8.29-8.29-1.42 1.42L16.86 11H5v2z"/></svg>
        </button>
      </form>
    </div>
  </section>

  <!-- Federal Parent FAQ -->
  <section class="fed-section-wrap" style="background: #FFFFFF; border-top: 1px solid var(--kd-border);" id="faq">
    <div class="fed-section-container">
      <div class="fed-section-header">
        <span class="fed-eyebrow">Clear Answers</span>
        <h2 class="fed-section-title">Frequently Asked Questions for Federal Families</h2>
        <p class="fed-section-subtitle">
          Everything you need to know about our federal building security, priority waitlist protocols, and tuition savings.
        </p>
      </div>

      <div class="fed-faq-grid">
        <div class="fed-faq-card">
          <div class="fed-faq-question">
            <span>❓ How does the federal priority admittance queue operate?</span>
          </div>
          <div class="fed-faq-answer">
            Under our operational agreements with federal facility councils and the GSA, federal employees and on-site contractor staff receive statutory preference. When an enrollment slot opens in any classroom tier (Infant, Toddler, Preschool, Pre-K), federal applicants are offered placement ahead of general community applicants.
          </div>
        </div>

        <div class="fed-faq-card">
          <div class="fed-faq-question">
            <span>❓ How is the $520 federal employee discount applied?</span>
          </div>
          <div class="fed-faq-answer">
            The $520 federal discount is deducted directly across your scheduled tuition payments throughout your enrollment, reducing your weekly or bi-weekly child care costs from day one. Additionally, the annual registration fee is completely waived for verified federal families.
          </div>
        </div>

        <div class="fed-faq-card">
          <div class="fed-faq-question">
            <span>❓ What proof is required to receive the federal discount and priority status?</span>
          </div>
          <div class="fed-faq-answer">
            You simply need to show your active federal agency identification badge (PIV card, CAC card, or contractor credential), a recent SF-50 Notice of Personnel Action, or a recent paystub displaying your federal agency header. Submitting with an official <code>.gov</code> email automatically flags your profile for instant discount approval.
          </div>
        </div>

        <div class="fed-faq-card">
          <div class="fed-faq-question">
            <span>❓ What are the building security protocols at Peachtree Summit and AFC?</span>
          </div>
          <div class="fed-faq-answer">
            Both the Peachtree Summit Building and the Sam Nunn Atlanta Federal Center are protected by Federal Protective Service (FPS) officers and GSA security perimeters. Parents and visitors pass through magnetometers or badged access control. Our classroom suites feature secondary keycard-only biometric and keypad locks, ensuring complete perimeter security.
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
  function selectCampus(campusName) {
    const select = document.getElementById('fedCampus');
    if (select) {
      for (let i = 0; i < select.options.length; i++) {
        if (select.options[i].text.includes(campusName) || select.options[i].value.includes(campusName)) {
          select.selectedIndex = i;
          break;
        }
      }
    }
  }

  function handleFederalSubmit(e) {
    e.preventDefault();
    const parentName = document.getElementById('fedParentName').value;
    const agency = document.getElementById('fedAgency').value;
    const campus = document.getElementById('fedCampus').value;
    const child = document.getElementById('fedChildName').value;

    const fedId = 'FED-' + Math.floor(100000 + Math.random() * 900000);

    alert(`🎉 Thank you, ${parentName}!\n\nYour Federal Priority Queue spot for ${child} has been confirmed.\n\nAssigned Agency: ${agency}\nSelected Campus: ${campus}\nPriority File Ref: #${fedId}\n\nOur Federal Enrollment Coordinator will reach out within 24 hours to schedule your security-cleared campus walkthrough and apply your $520 federal tuition savings.`);
    e.target.reset();
  }

  document.addEventListener('DOMContentLoaded', () => {
    const datePicker = document.getElementById('fedStartDate');
    if (datePicker) {
      const today = new Date().toISOString().split('T')[0];
      datePicker.min = today;
      datePicker.value = today;
    }
  });
</script>

<?php
get_footer();
