<?php
/**
 * Template Name: Georgia Pre-K Parent Portal
 *
 * Official KIDazzle Georgia Pre-K Document Upload & Compliance Portal
 *
 * @package kidazzle
 */

get_header();
?>

<!-- Google Fonts: Outfit & Inter -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
  :root {
    --prek-primary: #1e3a8a;
    --prek-primary-hover: #1d4ed8;
    --prek-primary-light: #eff6ff;
    --prek-accent: #f59e0b;
    --prek-accent-hover: #d97706;
    --prek-success: #10b981;
    --prek-success-light: #ecfdf5;
    --prek-danger: #ef4444;
    --prek-danger-light: #fef2f2;
    --prek-warning: #f59e0b;
    --prek-warning-light: #fffbeb;
    --prek-bg: #f8fafc;
    --prek-surface: #ffffff;
    --prek-border: #e2e8f0;
    --prek-text-main: #0f172a;
    --prek-text-muted: #64748b;
    --prek-radius: 16px;
    --prek-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
  }

  .prek-portal-wrapper {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    background: #f1f5f9;
    color: var(--prek-text-main);
    min-height: 80vh;
    padding: 40px 16px 80px;
  }

  .prek-container {
    max-width: 920px;
    margin: 0 auto;
  }

  /* Portal Hero Header */
  .portal-hero {
    background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #172554 100%);
    color: #ffffff;
    border-radius: var(--prek-radius);
    padding: 36px 32px;
    margin-bottom: 28px;
    box-shadow: var(--prek-shadow);
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
  }
  .portal-hero-title h1 {
    font-family: 'Outfit', sans-serif;
    font-size: 28px;
    font-weight: 800;
    letter-spacing: -0.5px;
    color: #ffffff;
    margin: 0 0 6px;
  }
  .portal-hero-title p {
    font-size: 14px;
    color: #93c5fd;
    margin: 0;
  }
  .portal-hero-badge {
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.25);
    padding: 8px 18px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 600;
    color: #f8fafc;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  /* Main Card */
  .prek-card {
    background: var(--prek-surface);
    border-radius: var(--prek-radius);
    padding: 32px;
    box-shadow: var(--prek-shadow);
    border: 1px solid var(--prek-border);
    margin-bottom: 24px;
  }

  /* Form Elements */
  .prek-form-group {
    margin-bottom: 22px;
  }
  .prek-form-label {
    display: block;
    font-weight: 600;
    font-size: 14px;
    margin-bottom: 8px;
    color: #1e293b;
  }
  .prek-form-control {
    width: 100%;
    padding: 14px 16px;
    border: 2px solid #cbd5e1;
    border-radius: 10px;
    font-size: 16px;
    background: #f8fafc;
    transition: all 0.2s ease;
    outline: none;
    box-sizing: border-box;
  }
  .prek-form-control:focus {
    border-color: #2563eb;
    background: #ffffff;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
  }
  .prek-btn-submit {
    background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
    color: white;
    font-weight: 700;
    font-size: 16px;
    padding: 15px 28px;
    border: none;
    border-radius: 10px;
    width: 100%;
    cursor: pointer;
    transition: all 0.2s ease;
    box-shadow: 0 4px 14px rgba(37, 99, 235, 0.3);
  }
  .prek-btn-submit:hover {
    background: linear-gradient(135deg, #1e40af 0%, #1d4ed8 100%);
    transform: translateY(-1px);
    box-shadow: 0 6px 20px rgba(37, 99, 235, 0.4);
  }

  /* Urgency Callout */
  .urgency-banner {
    background: #fffbeb;
    border-left: 5px solid #f59e0b;
    border-radius: 10px;
    padding: 18px 20px;
    margin-bottom: 24px;
    display: flex;
    gap: 14px;
    align-items: flex-start;
  }
  .urgency-banner h4 {
    font-family: 'Outfit', sans-serif;
    color: #92400e;
    font-size: 15px;
    font-weight: 700;
    margin: 0 0 4px;
  }
  .urgency-banner p {
    font-size: 13px;
    color: #78350f;
    margin: 0;
    line-height: 1.45;
  }

  /* Student Profile Banner */
  .profile-banner {
    background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);
    color: white;
    border-radius: var(--prek-radius);
    padding: 24px 28px;
    margin-bottom: 24px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 16px;
  }
  .profile-info h2 {
    font-family: 'Outfit', sans-serif;
    font-size: 22px;
    font-weight: 700;
    color: #ffffff;
    margin: 0 0 8px;
  }
  .profile-meta {
    display: flex;
    gap: 16px;
    font-size: 13px;
    color: #bfdbfe;
    flex-wrap: wrap;
  }
  .profile-meta strong {
    color: #ffffff;
  }
  .btn-logout {
    background: rgba(255, 255, 255, 0.15);
    border: 1px solid rgba(255, 255, 255, 0.3);
    color: white;
    padding: 8px 16px;
    border-radius: 8px;
    font-size: 12px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
  }
  .btn-logout:hover {
    background: rgba(255, 255, 255, 0.25);
  }

  /* Document Item Cards */
  .doc-item {
    border: 1px solid var(--prek-border);
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 16px;
    background: #ffffff;
    transition: all 0.2s;
  }
  .doc-item.missing {
    border-left: 5px solid #ef4444;
    background: #fffafa;
  }
  .doc-item.complete {
    border-left: 5px solid #10b981;
    background: #fcfdfc;
  }
  .doc-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 8px;
    flex-wrap: wrap;
    gap: 10px;
  }
  .doc-title {
    font-family: 'Outfit', sans-serif;
    font-weight: 700;
    font-size: 16px;
    color: #0f172a;
  }
  .status-badge {
    font-size: 12px;
    font-weight: 700;
    padding: 4px 12px;
    border-radius: 20px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }
  .badge-missing {
    background: #fef2f2;
    color: #b91c1c;
    border: 1px solid #fecaca;
  }
  .badge-complete {
    background: #ecfdf5;
    color: #047857;
    border: 1px solid #a7f3d0;
  }
  .badge-uploaded {
    background: #eff6ff;
    color: #1d4ed8;
    border: 1px solid #bfdbfe;
  }
  .doc-desc {
    font-size: 13px;
    color: #64748b;
    margin: 0 0 14px;
    line-height: 1.4;
  }

  /* Upload Dropzone */
  .upload-box {
    border: 2px dashed #93c5fd;
    background: #f8fafc;
    border-radius: 10px;
    padding: 20px 16px;
    text-align: center;
    cursor: pointer;
    transition: all 0.2s;
  }
  .upload-box:hover {
    border-color: #2563eb;
    background: #eff6ff;
  }
  .upload-box input[type="file"] {
    display: none;
  }
  .upload-prompt {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 6px;
    color: #3b82f6;
    font-size: 13px;
  }
  .file-selected-bar {
    display: none;
    margin-top: 12px;
    padding: 10px 14px;
    background: #eff6ff;
    border: 1px solid #bfdbfe;
    border-radius: 8px;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 10px;
    font-size: 13px;
  }
  .btn-upload-action {
    background: #10b981;
    color: white;
    font-weight: 700;
    font-size: 13px;
    padding: 8px 18px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.2s;
  }
  .btn-upload-action:hover {
    background: #059669;
  }
  .btn-download-appx {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #2563eb;
    color: #ffffff !important;
    text-decoration: none !important;
    padding: 10px 18px;
    border-radius: 8px;
    font-weight: 700;
    font-size: 13px;
    margin-bottom: 12px;
    box-shadow: 0 2px 6px rgba(37, 99, 235, 0.25);
    transition: all 0.2s;
  }
  .btn-download-appx:hover {
    background: #1d4ed8;
  }

  /* Toast Notification */
  .prek-toast {
    position: fixed;
    bottom: 30px;
    right: 30px;
    background: #0f172a;
    color: white;
    padding: 14px 22px;
    border-radius: 10px;
    font-size: 14px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.25);
    display: none;
    z-index: 99999;
    align-items: center;
    gap: 10px;
  }
  .prek-toast.show {
    display: flex;
    animation: toastSlide 0.3s ease-out;
  }
  .prek-toast.success { background: #065f46; border-left: 5px solid #10b981; }
  .prek-toast.error { background: #7f1d1d; border-left: 5px solid #ef4444; }
  .prek-toast.info { background: #1e3a8a; border-left: 5px solid #3b82f6; }

  @keyframes toastSlide {
    from { transform: translateY(30px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
  }

  /* Support Card */
  .help-card {
    background: #f8fafc;
    border: 1px solid var(--prek-border);
    border-radius: 12px;
    padding: 20px;
    font-size: 13px;
    color: #475569;
    line-height: 1.5;
  }
  .help-card strong { color: #0f172a; }
  .help-card a { color: #2563eb; text-decoration: underline; font-weight: 600; }
</style>

<div class="prek-portal-wrapper">
  <div class="prek-container">

    <!-- Header Hero Banner -->
    <div class="portal-hero">
      <div class="portal-hero-title">
        <h1>KIDazzle Georgia Pre-K Document Portal</h1>
        <p>Peachtree Summit Child Care Center &bull; Class 35485 &bull; DECAL Compliance Portal</p>
      </div>
      <div class="portal-hero-badge">
        <span>🛡️ Official State DECAL Portal</span>
      </div>
    </div>

    <!-- STEP 1: AUTHENTICATION / CHILD SELECTION -->
    <div id="auth-section" class="prek-card">
      <h2 style="font-family:'Outfit', sans-serif; font-size: 22px; font-weight: 700; margin-bottom: 8px; color: #0f172a;">
        Access Your Child's Student File
      </h2>
      <p style="font-size: 14px; color: #64748b; margin-bottom: 24px;">
        Select your enrolled child and enter their Date of Birth (Verification PIN) to view outstanding requirements and upload missing documents.
      </p>

      <form id="verify-form" onsubmit="handleVerify(event)">
        <div class="prek-form-group">
          <label class="prek-form-label" for="child-select">Select Enrolled Student:</label>
          <select id="child-select" class="prek-form-control" required>
            <option value="">-- Loading Enrolled Students... --</option>
          </select>
        </div>

        <div class="prek-form-group">
          <label class="prek-form-label" for="child-dob">Child's Date of Birth (Verification PIN):</label>
          <input type="text" id="child-dob" class="prek-form-control" placeholder="MM/DD/YYYY (e.g. 05/10/2022)" required>
          <small style="font-size: 12px; color: #64748b; margin-top: 6px; display: block;">
            🔒 Verification PIN matches your child's certified date of birth on file.
          </small>
        </div>

        <button type="submit" id="btn-verify" class="prek-btn-submit">
          Access Child File &amp; Upload Documents
        </button>
      </form>
    </div>

    <!-- STEP 2: PERSONALIZED UPLOAD DASHBOARD -->
    <div id="portal-section" style="display: none;">

      <!-- Child Profile Banner -->
      <div class="profile-banner">
        <div class="profile-info">
          <h2 id="disp-child-name">Loading...</h2>
          <div class="profile-meta">
            <span>Student ID: <strong id="disp-crm-id">--</strong></span>
            <span>Room: <strong id="disp-room">--</strong></span>
            <span>Parent/Guardian: <strong id="disp-parent-name">--</strong></span>
          </div>
        </div>
        <button type="button" class="btn-logout" onclick="logout()">Exit / Change Child</button>
      </div>

      <!-- State Compliance Deadline Warning -->
      <div class="urgency-banner">
        <div style="font-size: 24px; line-height: 1;">⚠️</div>
        <div>
          <h4>State DECAL Compliance Deadline: Tuesday, September 29, 2026</h4>
          <p>
            Georgia Bright from the Start regulations require all enrolled student files to be 100% complete within 30 calendar days of entry. You can take a clear photo from your smartphone camera or upload a PDF below.
          </p>
        </div>
      </div>

      <!-- Outstanding Documentation Required Card -->
      <div class="prek-card">
        <h3 style="font-family:'Outfit',sans-serif; font-size: 20px; font-weight: 700; color: #b91c1c; margin-bottom: 6px; display: flex; align-items: center; gap: 8px;">
          <span>📋</span> Outstanding Documentation Required
        </h3>
        <p style="font-size: 13px; color: #64748b; margin-bottom: 22px;">
          Please submit the missing items below. Files are instantly encrypted and saved directly into your child's official state audit file.
        </p>
        <div id="missing-docs-container"></div>
      </div>

      <!-- Verified Documents On File Card -->
      <div class="prek-card" style="background: #fcfdfd;">
        <h3 style="font-family:'Outfit',sans-serif; font-size: 18px; font-weight: 700; color: #047857; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
          <span>✅</span> Documents Verified &amp; On File
        </h3>
        <div id="verified-docs-container"></div>
      </div>

      <!-- Support Card -->
      <div class="help-card">
        <strong>Need assistance or have questions regarding your forms?</strong><br/>
        Center Director: <strong>Ms. Karen Harris</strong> &bull; Email: <a href="mailto:karenharris@kidazzle.com">karenharris@kidazzle.com</a> &bull; Phone: <strong>(404) 753-8884</strong><br/>
        KIDazzle Child Care &bull; Peachtree Summit Midtown &bull; 401 W Peachtree St NW, Atlanta, GA 30308
      </div>

    </div>

  </div>
</div>

<!-- Toast Element -->
<div id="prek-toast" class="prek-toast">
  <span id="prek-toast-msg">Document uploaded successfully</span>
</div>

<script>
  (function() {
    const API_BASE = 'https://kidazzle-webhook.bullmight.com/api/prek';
    let currentStudent = null;

    async function loadStudents() {
      try {
        const res = await fetch(`${API_BASE}/students-list`);
        const list = await res.json();
        const select = document.getElementById('child-select');
        select.innerHTML = '<option value="">-- Choose Enrolled Child --</option>';
        list.forEach(s => {
          const opt = document.createElement('option');
          opt.value = s.crm_id;
          opt.textContent = `${s.child_name} (${s.room})`;
          select.appendChild(opt);
        });

        // Check if child ID is passed in URL query param (?child=2609495 or ?id=2609495)
        const params = new URLSearchParams(window.location.search);
        const childParam = params.get('child') || params.get('id') || params.get('crm_id');
        const dobParam = params.get('dob') || params.get('pin');

        if (childParam) {
          select.value = childParam;
          if (dobParam) {
            document.getElementById('child-dob').value = dobParam;
            // Auto submit if both provided
            setTimeout(() => {
              document.getElementById('verify-form').dispatchEvent(new Event('submit'));
            }, 300);
          } else {
            document.getElementById('child-dob').focus();
          }
        }
      } catch (err) {
        console.error('Failed to load student list:', err);
        showToast('Unable to connect to student database. Please refresh.', 'error');
      }
    }

    window.handleVerify = async function(e) {
      e.preventDefault();
      const crmId = document.getElementById('child-select').value;
      const dob = document.getElementById('child-dob').value;
      const btn = document.getElementById('btn-verify');

      if (!crmId) {
        showToast('Please select your child from the dropdown.', 'error');
        return;
      }

      btn.textContent = 'Verifying Record...';
      btn.disabled = true;

      try {
        const res = await fetch(`${API_BASE}/verify-parent`, {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ crm_id: crmId, dob: dob })
        });
        const data = await res.json();

        if (res.ok && data.success) {
          currentStudent = data.student;
          renderPortal(data.student, data.uploads || []);
          document.getElementById('auth-section').style.display = 'none';
          document.getElementById('portal-section').style.display = 'block';
          window.scrollTo({ top: 0, behavior: 'smooth' });
          showToast(`Welcome! Viewing file for ${data.student.child_name}.`, 'success');
        } else {
          showToast(data.error || 'Verification failed. Please check the birth date.', 'error');
        }
      } catch (err) {
        console.error(err);
        showToast('Connection error. Please check your internet.', 'error');
      } finally {
        btn.textContent = 'Access Child File & Upload Documents';
        btn.disabled = false;
      }
    };

    function renderPortal(student, uploads) {
      document.getElementById('disp-child-name').textContent = student.child_name;
      document.getElementById('disp-crm-id').textContent = student.crm_id;
      document.getElementById('disp-room').textContent = student.room;
      document.getElementById('disp-parent-name').textContent = student.parent_name || 'Primary Guardian';

      const missingContainer = document.getElementById('missing-docs-container');
      const verifiedContainer = document.getElementById('verified-docs-container');
      missingContainer.innerHTML = '';
      verifiedContainer.innerHTML = '';

      const docConfig = [
        { key: 'birth_cert', title: 'Certified Birth Certificate', desc: 'Official state certificate verifying age requirement (Section 2.1).' },
        { key: 'residency', title: 'Proof of Georgia Residency', desc: 'Current electric/gas bill or lease agreement verifying GA address (Section 2.2).' },
        { key: 'form_3231', title: 'Form 3231 (Immunization Certificate)', desc: 'Official Georgia immunization certificate with valid expiration date (Section 3.11).' },
        { key: 'form_3300', title: 'Form 3300 (Screening Certificate)', desc: 'Ear, Eye, Dental, and Nutrition screening completed by clinician (Section 3.12).' },
        { key: 'ssn_card', title: 'Social Security Card or Waiver', desc: 'Child SSN card or Signed 30-day State SSN Waiver form (Section 2.3).' },
        { key: 'reg_form', title: 'Georgia Pre-K Registration Form', desc: 'Completed Bright from the Start Enrollment and Emergency contact packet.' },
        { key: 'appendix_d', title: 'Appendix D (Roster Form)', desc: 'Official GA DECAL Parent Consent and Family Information statement.' },
        { key: 'parent_id', title: 'Parent Photo Identification', desc: "Parent/guardian driver's license or government photo ID (Section 2.4)." },
        { key: 'income_ies', title: 'CACFP Income Eligibility Statement (IES)', desc: 'USDA food program income/SNAP category verification statement.' }
      ];

      let missingCount = 0;

      docConfig.forEach(cfg => {
        const val = (student[cfg.key] || '').toLowerCase();
        const isMissing = val.includes('missing') || val.includes('pending') || val.includes('partial') || val.includes('blank') || val.includes('update') || val.includes('action');
        const existingUpload = uploads.find(u => u.doc_type === cfg.title);

        if (isMissing && !existingUpload) {
          missingCount++;
          const item = document.createElement('div');
          item.className = 'doc-item missing';

          let appxButton = '';
          if (cfg.key === 'appendix_d' && student.appx_d_ready) {
            appxButton = `
              <div style="margin-bottom: 12px;">
                <a href="${API_BASE}${student.appx_d_download}" target="_blank" class="btn-download-appx">
                  📥 Download Pre-Filled Appendix D Form (PDF)
                </a>
                <span style="font-size: 11px; color: #64748b; display: block;">Print, sign, and snap a quick photo to upload below!</span>
              </div>
            `;
          }

          item.innerHTML = `
            <div class="doc-header">
              <span class="doc-title">${cfg.title}</span>
              <span class="status-badge badge-missing">Action Required</span>
            </div>
            <p class="doc-desc">${cfg.desc}</p>
            ${appxButton}
            <div class="upload-box" onclick="triggerPrekInput('${cfg.key}')">
              <input type="file" id="file-${cfg.key}" accept=".pdf,.png,.jpg,.jpeg,.heic" capture="environment" onchange="prekFileChosen('${cfg.key}', '${cfg.title}')">
              <div class="upload-prompt" id="prompt-${cfg.key}">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
                <span><strong>Tap to Take Photo or Upload File</strong></span>
                <span style="font-size: 11px; color: #64748b;">Accepts Camera Photos, JPG, PNG, and PDF</span>
              </div>
            </div>
            <div class="file-selected-bar" id="selected-${cfg.key}">
              <span id="fname-${cfg.key}" style="font-weight:600; color:#1e3a8a;">--</span>
              <button type="button" class="btn-upload-action" onclick="submitPrekUpload('${cfg.key}', '${cfg.title}')">Confirm &amp; Submit Document</button>
            </div>
          `;
          missingContainer.appendChild(item);
        } else {
          const item = document.createElement('div');
          item.className = 'doc-item complete';
          item.innerHTML = `
            <div class="doc-header">
              <span class="doc-title">${cfg.title}</span>
              <span class="status-badge ${existingUpload ? 'badge-uploaded' : 'badge-complete'}">
                ${existingUpload ? '✓ Received Today' : '✓ Verified On File'}
              </span>
            </div>
            <p class="doc-desc" style="margin:0;">
              ${existingUpload ? `Received: <strong>${existingUpload.original_filename}</strong> (${existingUpload.timestamp})` : cfg.desc}
            </p>
          `;
          verifiedContainer.appendChild(item);
        }
      });

      if (missingCount === 0) {
        missingContainer.innerHTML = `
          <div style="text-align: center; padding: 24px; color: #047857;">
            <div style="font-size: 36px; margin-bottom: 8px;">🎉</div>
            <strong style="font-size: 16px;">All Georgia Pre-K Requirements Are 100% Complete!</strong>
            <p style="font-size: 13px; color: #065f46; margin-top: 4px;">Thank you! Your child's official DECAL student file is in full state compliance.</p>
          </div>
        `;
      }
    }

    window.triggerPrekInput = function(key) {
      document.getElementById(`file-${key}`).click();
    };

    window.prekFileChosen = function(key, title) {
      const input = document.getElementById(`file-${key}`);
      if (input.files.length > 0) {
        const file = input.files[0];
        document.getElementById(`fname-${key}`).textContent = `📄 ${file.name} (${(file.size/1024).toFixed(1)} KB)`;
        document.getElementById(`selected-${key}`).style.display = 'flex';
      }
    };

    window.submitPrekUpload = async function(key, title) {
      const input = document.getElementById(`file-${key}`);
      if (!input.files || input.files.length === 0) return;

      const file = input.files[0];
      const formData = new FormData();
      formData.append('crm_id', currentStudent.crm_id);
      formData.append('doc_type', title);
      formData.append('file', file);

      showToast(`Uploading ${file.name}...`, 'info');

      try {
        const res = await fetch(`${API_BASE}/upload-document`, {
          method: 'POST',
          body: formData
        });
        const data = await res.json();

        if (res.ok && data.success) {
          showToast(data.message, 'success');
          // Re-fetch student file
          const vRes = await fetch(`${API_BASE}/verify-parent`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ crm_id: currentStudent.crm_id, dob: currentStudent.dob })
          });
          const vData = await vRes.json();
          renderPortal(vData.student, vData.uploads || []);
        } else {
          showToast(data.error || 'Upload failed. Please try again.', 'error');
        }
      } catch (err) {
        console.error(err);
        showToast('Network error during upload.', 'error');
      }
    };

    window.logout = function() {
      currentStudent = null;
      document.getElementById('portal-section').style.display = 'none';
      document.getElementById('auth-section').style.display = 'block';
      document.getElementById('child-dob').value = '';
      window.scrollTo({ top: 0, behavior: 'smooth' });
    };

    function showToast(msg, type) {
      const toast = document.getElementById('prek-toast');
      const msgEl = document.getElementById('prek-toast-msg');
      msgEl.textContent = msg;
      toast.className = `prek-toast show ${type || 'success'}`;
      setTimeout(() => {
        toast.className = 'prek-toast';
      }, 4500);
    }

    window.addEventListener('DOMContentLoaded', loadStudents);
  })();
</script>

<?php
get_footer();
