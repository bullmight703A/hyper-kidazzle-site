<?php
/**
 * KIDazzle VIP Campus Tour & Parent Welcome Pack Concierge Engine
 * 
 * Injects:
 * 1. Floating VIP Concierge Badge
 * 2. Interactive Campus Tour Booking Modal
 * 3. Visitor Telemetry & GHL Auto-Sync
 */
?>
<!-- KIDazzle Autonomous Visitor Tracking & Tour Capture Engine -->
<style>
  #kd-concierge-pill {
    position: fixed;
    bottom: 24px;
    right: 24px;
    z-index: 99999;
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    color: #0f172a;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    font-weight: 800;
    font-size: 14px;
    padding: 14px 22px;
    border-radius: 9999px;
    box-shadow: 0 10px 25px -5px rgba(245, 158, 11, 0.5), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border: 2px solid #ffffff;
  }
  #kd-concierge-pill:hover {
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 15px 30px -5px rgba(245, 158, 11, 0.65);
    background: linear-gradient(135deg, #fbbf24 0%, #d97706 100%);
  }
  #kd-concierge-pill .pulse-dot {
    width: 10px;
    height: 10px;
    background-color: #0f172a;
    border-radius: 9999px;
    animation: kdPulse 2s infinite;
  }
  @keyframes kdPulse {
    0% { transform: scale(0.95); opacity: 1; }
    50% { transform: scale(1.4); opacity: 0.4; }
    100% { transform: scale(0.95); opacity: 1; }
  }

  /* Tour Modal Backdrop */
  #kd-tour-modal {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 100000;
    background: rgba(15, 23, 42, 0.75);
    backdrop-filter: blur(8px);
    align-items: center;
    justify-content: center;
    padding: 16px;
    font-family: 'Inter', sans-serif;
  }
  #kd-tour-card {
    background: #ffffff;
    max-width: 520px;
    width: 100%;
    border-radius: 2rem;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    overflow: hidden;
    position: relative;
    border: 1px solid rgba(226, 232, 240, 0.8);
    animation: kdSlideUp 0.35s ease-out;
  }
  @keyframes kdSlideUp {
    from { opacity: 0; transform: translateY(20px) scale(0.97); }
    to { opacity: 1; transform: translateY(0) scale(1); }
  }
  .kd-modal-header {
    background: linear-gradient(135deg, #1e1b4b 0%, #312e81 100%);
    color: #ffffff;
    padding: 24px 28px;
    position: relative;
  }
  .kd-modal-close {
    position: absolute;
    top: 20px;
    right: 20px;
    background: rgba(255, 255, 255, 0.15);
    color: #ffffff;
    border: none;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.2s;
  }
  .kd-modal-close:hover {
    background: rgba(255, 255, 255, 0.3);
  }
  .kd-modal-body {
    padding: 28px;
  }
  .kd-input-group {
    margin-bottom: 16px;
    text-align: left;
  }
  .kd-input-group label {
    display: block;
    font-size: 13px;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 6px;
  }
  .kd-input-group input, .kd-input-group select {
    width: 100%;
    padding: 12px 14px;
    border: 1.5px solid #cbd5e1;
    border-radius: 12px;
    font-size: 14px;
    color: #0f172a;
    outline: none;
    box-sizing: border-box;
    transition: border-color 0.2s, box-shadow 0.2s;
  }
  .kd-input-group input:focus, .kd-input-group select:focus {
    border-color: #f59e0b;
    box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.2);
  }
  .kd-btn-submit {
    width: 100%;
    background: #f59e0b;
    color: #0f172a;
    font-weight: 800;
    font-size: 15px;
    padding: 14px;
    border-radius: 14px;
    border: none;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(245, 158, 11, 0.35);
    transition: all 0.2s;
  }
  .kd-btn-submit:hover {
    background: #d97706;
    transform: translateY(-1px);
  }
</style>

<!-- Floating Concierge Pill -->
<div id="kd-concierge-pill" onclick="kdOpenTourModal()">
  <span class="pulse-dot"></span>
  <span>📅 Schedule Campus Tour & Parent Guide</span>
</div>

<!-- Tour Booking & Lead Capture Modal -->
<div id="kd-tour-modal" onclick="if(event.target===this) kdCloseTourModal()">
  <div id="kd-tour-card">
    <div class="kd-modal-header">
      <button class="kd-modal-close" onclick="kdCloseTourModal()">&times;</button>
      <div style="display:flex; align-items:center; gap:8px; margin-bottom:8px;">
        <span style="background:#f59e0b; color:#0f172a; font-size:11px; font-weight:900; padding:3px 10px; border-radius:999px; text-transform:uppercase;">Now Enrolling 2026-2027</span>
      </div>
      <h3 style="margin:0; font-size:22px; font-weight:800; line-height:1.25;">Book Your VIP Campus Tour</h3>
      <p style="margin:6px 0 0 0; font-size:13px; color:#cbd5e1;">Experience our research-backed Creative Curriculum® and chef nutrition.</p>
    </div>
    
    <div class="kd-modal-body" id="kd-modal-content">
      <form id="kd-lead-form" onsubmit="kdSubmitLead(event)">
        <div class="kd-input-group">
          <label>Parent / Guardian Full Name</label>
          <input type="text" id="kd-name" placeholder="e.g. Jessica Taylor" required />
        </div>
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
          <div class="kd-input-group">
            <label>Email Address</label>
            <input type="email" id="kd-email" placeholder="name@example.com" required />
          </div>
          <div class="kd-input-group">
            <label>Phone Number</label>
            <input type="tel" id="kd-phone" placeholder="(404) 000-0000" required />
          </div>
        </div>
        <div class="kd-input-group">
          <label>Select Preferred Campus</label>
          <select id="kd-campus">
            <option value="Peachtree Summit Center (Midtown Atlanta)">Peachtree Summit Center (Midtown Atlanta)</option>
            <option value="West End Center (Atlanta)">West End Center (Atlanta)</option>
            <option value="College Park Center">College Park Center (Phoenix Blvd)</option>
            <option value="Hampton FAA Center">Hampton FAA Center (Burks Rd)</option>
            <option value="Atlanta Federal Center (AFC)">Atlanta Federal Center (Downtown)</option>
            <option value="Memphis FAA Center">Memphis FAA Center (Tennessee)</option>
            <option value="Tailwinds Doral Center">Tailwinds Doral Center (Miami, FL)</option>
          </select>
        </div>
        <div class="kd-input-group">
          <label>Child Age / Program</label>
          <select id="kd-age">
            <option value="Georgia Lottery Pre-K (4 Years Old)">Georgia Lottery Pre-K (Free GA Lottery)</option>
            <option value="Preschool (3 Years Old)">Preschool (3 Years Old)</option>
            <option value="Early Preschool (2 Years Old)">Early Preschool (2 Years Old)</option>
            <option value="Toddler (1-Year-Old)">Toddler (1-Year-Old)</option>
            <option value="Infant (6 wks - 12 mos)">Infant (6 Weeks – 12 Months)</option>
            <option value="School-Age Before & After">School-Age Before & After Care</option>
          </select>
        </div>
        <button type="submit" class="kd-btn-submit" id="kd-btn-text">🚀 Confirm Tour & Get Welcome Pack</button>
        <p style="font-size:11px; color:#64748b; margin-top:10px; text-align:center;">🔒 We respect your privacy. Instant confirmation via Email & SMS.</p>
      </form>
    </div>
  </div>
</div>

<script>
  // Persistent Visitor UUID
  let kdVisitorId = localStorage.getItem('kd_visitor_uuid');
  if (!kdVisitorId) {
    kdVisitorId = 'kd_' + Math.random().toString(36).substring(2, 12) + '_' + Date.now();
    localStorage.setItem('kd_visitor_uuid', kdVisitorId);
  }

  // API Base Resolution: point to edge server
  const kdApiBase = window.location.hostname.includes('bullmight') ? '' : 'https://kidazzle.bullmight.com';

  // Pre-fill email or phone from URL if visitor clicked campaign link
  const kdUrlParams = new URLSearchParams(window.location.search);
  const kdUrlEmail = kdUrlParams.get('email');
  const kdUrlPhone = kdUrlParams.get('phone');
  if (kdUrlEmail) localStorage.setItem('kd_known_email', kdUrlEmail);

  // Send Visitor Telemetry Ping
  fetch(kdApiBase + '/api/visitor-ping', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      visitorId: kdVisitorId,
      referrer: document.referrer,
      url: window.location.href,
      email: kdUrlEmail || localStorage.getItem('kd_known_email') || '',
      phone: kdUrlPhone || '',
      utmSource: kdUrlParams.get('utm_source') || '',
      utmCampaign: kdUrlParams.get('utm_campaign') || ''
    })
  }).catch(() => {});

  function kdOpenTourModal() {
    document.getElementById('kd-tour-modal').style.display = 'flex';
    const knownEmail = localStorage.getItem('kd_known_email');
    if (knownEmail && document.getElementById('kd-email')) {
      document.getElementById('kd-email').value = knownEmail;
    }
  }

  function kdCloseTourModal() {
    document.getElementById('kd-tour-modal').style.display = 'none';
  }

  async function kdSubmitLead(e) {
    e.preventDefault();
    const btn = document.getElementById('kd-btn-text');
    btn.disabled = true;
    btn.innerText = 'Connecting to Campus Director...';

    const payload = {
      name: document.getElementById('kd-name').value,
      email: document.getElementById('kd-email').value,
      phone: document.getElementById('kd-phone').value,
      campus: document.getElementById('kd-campus').value,
      childAge: document.getElementById('kd-age').value,
      visitorId: kdVisitorId,
      utmSource: kdUrlParams.get('utm_source') || 'website-lead'
    };

    try {
      const res = await fetch(kdApiBase + '/api/capture-lead', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(payload)
      });
      const data = await res.json();

      if (data.success) {
        localStorage.setItem('kd_known_email', payload.email);
        localStorage.setItem('kd_lead_captured', 'true');
        
        // Render Success Card
        document.getElementById('kd-modal-content').innerHTML = `
          <div style="text-align:center; padding:16px 8px;">
            <div style="font-size:48px; margin-bottom:12px;">🎉</div>
            <h4 style="font-size:22px; font-weight:800; color:#0f172a; margin:0 0 8px 0;">You're Confirmed, ${payload.name}!</h4>
            <p style="font-size:14px; color:#475569; line-height:1.5; margin:0 0 16px 0;">
              Your tour request for <strong>${payload.campus}</strong> has been received! Our Campus Director will call you at <strong>${payload.phone}</strong> shortly.
            </p>
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:14px; padding:14px; margin-bottom:20px; text-align:left;">
              <div style="font-weight:700; color:#0f172a; font-size:13px; margin-bottom:4px;">📬 What happens next:</div>
              <div style="font-size:12px; color:#64748b;">1. Your official Parent Welcome Guide has been sent to <strong>${payload.email}</strong>.</div>
              <div style="font-size:12px; color:#64748b;">2. Operating Hours: <strong>7:00 AM – 5:30 PM</strong> (Operating hours depend upon location).</div>
            </div>
            <a href="tel:8774101002" style="display:inline-block; width:100%; background:#1e1b4b; color:#ffffff; font-weight:700; padding:12px; border-radius:12px; text-decoration:none; box-sizing:border-box;">📞 Need Immediate Assistance? Call (877) 410-1002</a>
          </div>
        `;
      } else {
        alert(data.error || 'Submission failed. Please try again.');
        btn.disabled = false;
        btn.innerText = '🚀 Confirm Tour & Get Welcome Pack';
      }
    } catch (err) {
      alert('Network error. Please call us at (877) 410-1002.');
      btn.disabled = false;
      btn.innerText = '🚀 Confirm Tour & Get Welcome Pack';
    }
  }

  // Hook standard "Schedule A Tour" header and footer links to open our modal!
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('a[href*="schedule"], a[href*="tour"], a[href*="contact"]').forEach(el => {
      const href = el.getAttribute('href') || '';
      const text = el.innerText ? el.innerText.toLowerCase() : '';
      if (href === '/schedule-a-tour/' || href === '/contact-us/' || text.includes('schedule a tour')) {
        el.addEventListener('click', (ev) => {
          ev.preventDefault();
          kdOpenTourModal();
        });
      }
    });
  });
</script>
