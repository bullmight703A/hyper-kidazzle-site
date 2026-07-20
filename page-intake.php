<?php
/**
 * Template Name: Parent Intake Page
 *
 * Master Parent Intake form merging Enrollment and IES fields with GHL and PDF generation sync.
 *
 * @package kidazzle
 */

get_header();
?>

<!-- Include Outfit Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>
  :root {
    --bg-dark: #0f172a;
    --card-bg: rgba(30, 41, 59, 0.7);
    --card-border: rgba(91, 192, 190, 0.2);
    --text-light: #f8fafc;
    --text-muted: #94a3b8;
    --primary: #06b6d4;
    --primary-hover: #0891b2;
    --accent: #eab308;
    --error: #ef4444;
    --success: #10b981;
  }
  
  .intake-section {
    background: #090d16;
    background-image: radial-gradient(circle at 10% 20%, rgba(6, 182, 212, 0.08) 0%, transparent 40%),
                      radial-gradient(circle at 90% 80%, rgba(234, 179, 8, 0.05) 0%, transparent 40%);
    color: var(--text-light);
    padding: 60px 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 80vh;
  }
  
  .intake-header {
    text-align: center;
    margin-bottom: 40px;
  }
  
  .intake-header h1 {
    font-size: 2.5rem;
    font-weight: 800;
    background: linear-gradient(135deg, #ffffff 0%, var(--primary) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 12px;
  }
  
  .intake-header p {
    color: var(--text-muted);
    font-size: 1.1rem;
  }
  
  .intake-container {
    width: 100%;
    max-width: 720px;
    background: var(--card-bg);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid var(--card-border);
    border-radius: 24px;
    padding: 40px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
    position: relative;
  }
  
  /* Progress Indicator */
  .intake-progress {
    display: flex;
    justify-content: space-between;
    margin-bottom: 40px;
    position: relative;
  }
  
  .intake-progress::before {
    content: '';
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
    height: 3px;
    background: rgba(255, 255, 255, 0.1);
    z-index: 1;
  }
  
  .intake-progress-line {
    position: absolute;
    top: 15px;
    left: 0;
    height: 3px;
    background: var(--primary);
    z-index: 2;
    transition: width 0.4s ease;
    width: 0%;
  }
  
  .intake-step {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: #1e293b;
    border: 2px solid rgba(255, 255, 255, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 14px;
    z-index: 3;
    transition: all 0.3s ease;
    color: var(--text-muted);
  }
  
  .intake-step.active {
    background: var(--primary);
    border-color: var(--primary);
    color: #0f172a;
    box-shadow: 0 0 15px rgba(6, 182, 212, 0.4);
  }
  
  .intake-step.completed {
    background: var(--success);
    border-color: var(--success);
    color: #0f172a;
  }
  
  /* Form Steps */
  .intake-form-step {
    display: none;
  }
  
  .intake-form-step.active {
    display: block;
    animation: intakeFadeIn 0.4s ease forwards;
  }
  
  .intake-step-title {
    font-size: 1.4rem;
    font-weight: 700;
    margin-bottom: 25px;
    color: var(--primary);
    border-left: 4px solid var(--primary);
    padding-left: 12px;
  }
  
  .intake-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
  }
  
  .intake-full-width {
    grid-column: span 2;
  }
  
  .intake-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
  }
  
  .intake-group label {
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }
  
  .intake-group input, .intake-group select, .intake-group textarea {
    background: rgba(15, 23, 42, 0.6);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 12px;
    padding: 14px 16px;
    color: var(--text-light);
    font-size: 1rem;
    transition: all 0.3s ease;
  }
  
  .intake-group input:focus, .intake-group select:focus, .intake-group textarea:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 10px rgba(6, 182, 212, 0.2);
    background: rgba(15, 23, 42, 0.8);
  }
  
  .intake-group input::placeholder {
    color: rgba(255, 255, 255, 0.2);
  }
  
  /* Buttons */
  .intake-buttons {
    display: flex;
    justify-content: space-between;
    margin-top: 40px;
    gap: 15px;
  }
  
  .intake-btn {
    padding: 14px 28px;
    border-radius: 12px;
    font-weight: 600;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    border: none;
  }
  
  .intake-btn-prev {
    background: transparent;
    color: var(--text-muted);
    border: 1px solid rgba(255, 255, 255, 0.1);
  }
  
  .intake-btn-prev:hover {
    background: rgba(255, 255, 255, 0.05);
    color: var(--text-light);
  }
  
  .intake-btn-next {
    background: var(--primary);
    color: #0f172a;
    box-shadow: 0 4px 14px rgba(6, 182, 212, 0.3);
  }
  
  .intake-btn-next:hover {
    background: var(--primary-hover);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(6, 182, 212, 0.45);
  }
  
  /* Signature Pad */
  .intake-sig-container {
    border: 1px dashed rgba(255, 255, 255, 0.2);
    border-radius: 14px;
    background: rgba(15, 23, 42, 0.8);
    position: relative;
    margin-bottom: 10px;
  }
  
  .intake-sig-canvas {
    width: 100%;
    height: 150px;
    cursor: crosshair;
    display: block;
  }
  
  .intake-sig-clear {
    position: absolute;
    bottom: 10px;
    right: 10px;
    background: rgba(239, 68, 68, 0.15);
    color: var(--error);
    border: 1px solid var(--error);
    padding: 6px 12px;
    font-size: 0.8rem;
    border-radius: 6px;
    cursor: pointer;
  }
  
  /* Success Screen */
  .intake-success {
    text-align: center;
    display: none;
  }
  
  .intake-success-icon {
    font-size: 4rem;
    color: var(--success);
    margin-bottom: 20px;
  }
  
  .intake-download-btn {
    display: inline-block;
    margin-top: 30px;
    background: var(--primary);
    color: #0f172a;
    padding: 14px 28px;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 14px rgba(6, 182, 212, 0.3);
  }
  
  .intake-download-btn:hover {
    background: var(--primary-hover);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(6, 182, 212, 0.4);
  }
  
  @keyframes intakeFadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
  }
  
  @media (max-width: 768px) {
    .intake-grid {
      grid-template-columns: 1fr;
    }
    .intake-full-width {
      grid-column: span 1;
    }
    .intake-container {
      padding: 24px;
    }
  }
</style>

<div class="intake-section">
  <div class="intake-header">
    <h1>KIDazzle Master parent intake</h1>
    <p>Consolidated Parent Enrollment &amp; CACFP Intake Portal</p>
  </div>

  <div class="intake-container">
    <div class="intake-progress">
      <div class="intake-progress-line" id="intakeProgressLine"></div>
      <div class="intake-step active" id="intakeStep1">1</div>
      <div class="intake-step" id="intakeStep2">2</div>
      <div class="intake-step" id="intakeStep3">3</div>
      <div class="intake-step" id="intakeStep4">4</div>
    </div>

    <form id="intakePortalForm">
      <!-- Step 1: Parent Details -->
      <div class="intake-form-step active" id="intakeFormStep1">
        <h3 class="intake-step-title">1. Parent / Guardian Details</h3>
        <div class="intake-grid">
          <div class="intake-group">
            <label for="parent_first_name">First Name</label>
            <input type="text" id="parent_first_name" placeholder="John" required/>
          </div>
          <div class="intake-group">
            <label for="parent_last_name">Last Name</label>
            <input type="text" id="parent_last_name" placeholder="Doe" required/>
          </div>
          <div class="intake-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" placeholder="john.doe@example.com" required/>
          </div>
          <div class="intake-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" placeholder="404-555-0199" required/>
          </div>
          <div class="intake-group intake-full-width">
            <label for="address">Street Address</label>
            <input type="text" id="address" placeholder="123 Kidazzle Way" required/>
          </div>
          <div class="intake-group">
            <label for="city">City</label>
            <input type="text" id="city" placeholder="Atlanta" required/>
          </div>
          <div class="intake-group">
            <div class="intake-grid" style="gap:10px;">
              <div class="intake-group">
                <label for="state">State</label>
                <input type="text" id="state" placeholder="GA" maxlength="2" required/>
              </div>
              <div class="intake-group">
                <label for="zip">Zip Code</label>
                <input type="text" id="zip" placeholder="30303" required/>
              </div>
            </div>
          </div>
          <div class="intake-group intake-full-width">
            <label for="employer">Employer / Business</label>
            <input type="text" id="employer" placeholder="Summit Logistics" required/>
          </div>
        </div>
      </div>

      <!-- Step 2: Child Details -->
      <div class="intake-form-step" id="intakeFormStep2">
        <h3 class="intake-step-title">2. Child Enrollment Details</h3>
        <div class="intake-grid">
          <div class="intake-group">
            <label for="child_first_name">Child First Name</label>
            <input type="text" id="child_first_name" placeholder="Jane" required/>
          </div>
          <div class="intake-group">
            <label for="child_last_name">Child Last Name</label>
            <input type="text" id="child_last_name" placeholder="Doe" required/>
          </div>
          <div class="intake-group">
            <label for="child_dob">Child Date of Birth</label>
            <input type="date" id="child_dob" required/>
          </div>
          <div class="intake-group">
            <label for="entrance_date">Desired Entrance Date</label>
            <input type="date" id="entrance_date" required/>
          </div>
          <div class="intake-group intake-full-width">
            <label for="location">Preferred Center Location</label>
            <select id="location" required>
              <option value="" disabled selected>Select location...</option>
              <option value="Summit Downtown ATL">Summit Downtown ATL</option>
              <option value="Summit Midtown">Summit Midtown</option>
              <option value="Summit Peachtree">Summit Peachtree</option>
              <option value="Hampton Center">Hampton Center</option>
              <option value="Memphis Center">Memphis Center</option>
              <option value="Summit North GA">Summit North GA</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Step 3: Income & Household -->
      <div class="intake-form-step" id="intakeFormStep3">
        <h3 class="intake-step-title">3. Household Income Eligibility</h3>
        <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 20px; line-height: 1.5;">
          The USDA Child and Adult Care Food Program (CACFP) requires income details to determine eligibility status. All information is secure and confidential.
        </p>
        <div class="intake-grid">
          <div class="intake-group">
            <label for="household_size">Total Household Size</label>
            <input type="number" id="household_size" min="1" max="20" placeholder="3" required/>
          </div>
          <div class="intake-group">
            <label for="monthly_income">Total Monthly Income ($)</label>
            <input type="number" id="monthly_income" min="0" placeholder="3500" required/>
          </div>
          <div class="intake-group intake-full-width">
            <label for="ssn">Last 4 Digits of Social Security Number (SSN)</label>
            <input type="text" id="ssn" placeholder="1234" maxlength="4" required/>
          </div>
        </div>
      </div>

      <!-- Step 4: Sign & Submit -->
      <div class="intake-form-step" id="intakeFormStep4">
        <h3 class="intake-step-title">4. Sign &amp; Submit</h3>
        <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 20px; line-height: 1.5;">
          I certify that all of the above information is true and correct and that all income is reported. I understand that center officials may verify the information.
        </p>
        
        <div class="intake-group intake-full-width" style="margin-bottom: 20px;">
          <label>Parent/Guardian Digital Signature</label>
          <div class="intake-sig-container">
            <canvas id="intakeSigCanvas" class="intake-sig-canvas"></canvas>
            <button type="button" class="intake-sig-clear" id="intakeSigClear">Clear</button>
          </div>
          <input type="text" id="sigText" placeholder="Type your full name to sign" required style="width:100%;"/>
        </div>

        <div class="intake-group intake-full-width" style="flex-direction:row; align-items:flex-start; gap:10px; margin-top:20px;">
          <input type="checkbox" id="consent_text" required style="width:20px; height:20px; margin-top:3px;"/>
          <label for="consent_text" style="text-transform:none; font-size:0.9rem; font-weight:normal; cursor:pointer;">
            By signing above, I consent to complete the Enrollment Package and Income Eligibility Statement (IES) digitally.
          </label>
        </div>
      </div>

      <div class="intake-buttons">
        <button type="button" class="intake-btn intake-btn-prev" id="intakeBtnPrev" style="display:none;">Back</button>
        <button type="button" class="intake-btn intake-btn-next" id="intakeBtnNext">Continue</button>
      </div>
    </form>

    <!-- Success Screen -->
    <div class="intake-success" id="intakeSuccessScreen">
      <div class="intake-success-icon">✓</div>
      <h2>Submission Successful!</h2>
      <p style="color: var(--text-muted); margin-top: 10px; line-height: 1.6;">
        Your unified parent enrollment package has been completed, signed digitally, and generated as a single package. We have also emailed the completed documents to you.
      </p>
      <a href="#" class="intake-download-btn" id="intakeDownloadBtn" target="_blank">Download Completed Packet</a>
    </div>
  </div>
</div>

<script>
  (function() {
    let currentStep = 1;
    const form = document.getElementById('intakePortalForm');
    const btnNext = document.getElementById('intakeBtnNext');
    const btnPrev = document.getElementById('intakeBtnPrev');
    const progressLine = document.getElementById('intakeProgressLine');
    const successScreen = document.getElementById('intakeSuccessScreen');
    
    const canvas = document.getElementById('intakeSigCanvas');
    const ctx = canvas.getContext('2d');
    let drawing = false;
    
    function resizeCanvas() {
      const rect = canvas.getBoundingClientRect();
      canvas.width = rect.width;
      canvas.height = rect.height;
      ctx.strokeStyle = '#06b6d4';
      ctx.lineWidth = 2.5;
      ctx.lineCap = 'round';
    }
    
    setTimeout(resizeCanvas, 500);
    window.addEventListener('resize', resizeCanvas);
    
    canvas.addEventListener('mousedown', (e) => {
      drawing = true;
      ctx.beginPath();
      ctx.moveTo(e.offsetX, e.offsetY);
    });
    canvas.addEventListener('mousemove', (e) => {
      if (!drawing) return;
      ctx.lineTo(e.offsetX, e.offsetY);
      ctx.stroke();
    });
    canvas.addEventListener('mouseup', () => drawing = false);
    canvas.addEventListener('mouseleave', () => drawing = false);
    
    canvas.addEventListener('touchstart', (e) => {
      drawing = true;
      const touch = e.touches[0];
      const rect = canvas.getBoundingClientRect();
      ctx.beginPath();
      ctx.moveTo(touch.clientX - rect.left, touch.clientY - rect.top);
      e.preventDefault();
    });
    canvas.addEventListener('touchmove', (e) => {
      if (!drawing) return;
      const touch = e.touches[0];
      const rect = canvas.getBoundingClientRect();
      ctx.lineTo(touch.clientX - rect.left, touch.clientY - rect.top);
      ctx.stroke();
      e.preventDefault();
    });
    canvas.addEventListener('touchend', () => drawing = false);
    
    document.getElementById('intakeSigClear').addEventListener('click', () => {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
    });
    
    function updateProgress() {
      for (let i = 1; i <= 4; i++) {
        const stepEl = document.getElementById('intakeStep' + i);
        if (i < currentStep) {
          stepEl.className = 'intake-step completed';
        } else if (i === currentStep) {
          stepEl.className = 'intake-step active';
        } else {
          stepEl.className = 'intake-step';
        }
      }
      
      const percent = ((currentStep - 1) / 3) * 100;
      progressLine.style.width = percent + '%';
      
      for (let i = 1; i <= 4; i++) {
        const section = document.getElementById('intakeFormStep' + i);
        if (section) {
          section.className = i === currentStep ? 'intake-form-step active' : 'intake-form-step';
        }
      }
      
      btnPrev.style.display = currentStep === 1 ? 'none' : 'block';
      btnNext.innerText = currentStep === 4 ? 'Submit & Generate Packet' : 'Continue';
      btnNext.style.background = currentStep === 4 ? 'var(--success)' : 'var(--primary)';
      
      if (currentStep === 4) {
        setTimeout(resizeCanvas, 100);
      }
    }
    
    function validateStep(stepNum) {
      const inputs = document.getElementById('intakeFormStep' + stepNum).querySelectorAll('input, select, textarea');
      let valid = true;
      for (const input of inputs) {
        if (!input.checkValidity()) {
          input.reportValidity();
          valid = false;
          break;
        }
      }
      return valid;
    }
    
    btnNext.addEventListener('click', async () => {
      if (!validateStep(currentStep)) return;
      
      if (currentStep < 4) {
        currentStep++;
        updateProgress();
      } else {
        const payload = {
          parent_first_name: document.getElementById('parent_first_name').value,
          parent_last_name: document.getElementById('parent_last_name').value,
          email: document.getElementById('email').value,
          phone: document.getElementById('phone').value,
          address: document.getElementById('address').value,
          city: document.getElementById('city').value,
          state: document.getElementById('state').value,
          zip: document.getElementById('zip').value,
          employer: document.getElementById('employer').value,
          child_first_name: document.getElementById('child_first_name').value,
          child_last_name: document.getElementById('child_last_name').value,
          child_dob: document.getElementById('child_dob').value,
          entrance_date: document.getElementById('entrance_date').value,
          location: document.getElementById('location').value,
          household_size: document.getElementById('household_size').value,
          monthly_income: document.getElementById('monthly_income').value,
          ssn: document.getElementById('ssn').value,
          signature: document.getElementById('sigText').value
        };
        
        btnNext.innerText = 'Processing...';
        btnNext.disabled = true;
        
        try {
          const res = await fetch('https://app.bullmight.com/api/kidazzle/intake', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(payload)
          });
          const result = await res.json();
          
          if (result.success) {
            form.style.display = 'none';
            document.querySelector('.intake-progress').style.display = 'none';
            btnNext.style.display = 'none';
            btnPrev.style.display = 'none';
            
            document.getElementById('intakeDownloadBtn').href = 'https://app.bullmight.com' + result.downloadUrl;
            successScreen.style.display = 'block';
          } else {
            alert('Submission failed: ' + (result.error || 'Unknown error'));
            btnNext.innerText = 'Submit & Generate Packet';
            btnNext.disabled = false;
          }
        } catch (e) {
          console.error(e);
          alert('Submission error. Please check your connection.');
          btnNext.innerText = 'Submit & Generate Packet';
          btnNext.disabled = false;
        }
      }
    });
    
    btnPrev.addEventListener('click', () => {
      if (currentStep > 1) {
        currentStep--;
        updateProgress();
      }
    });
  })();
</script>

<?php
get_footer();
