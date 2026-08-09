<?php
/**
 * Template Name: Employee Intake Page
 *
 * Master Employee Onboarding Intake form for new hires, mapping contracts and payroll setups.
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
    --bg-light: #FDFBF7;
    --card-bg: #ffffff;
    --card-border: #e2e8f0;
    --text-main: #1e293b;
    --text-muted: #64748b;
    --primary: #06b6d4;
    --primary-hover: #0891b2;
    --accent: #FB8500;
    --error: #ef4444;
    --success: #10b981;
  }
  
  .intake-section {
    background-color: var(--bg-light);
    color: var(--text-main);
    padding: 60px 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 80vh;
    font-family: 'Outfit', sans-serif;
  }
  
  .intake-header {
    text-align: center;
    margin-bottom: 40px;
  }
  
  .intake-header h1 {
    font-size: 2.8rem;
    font-weight: 800;
    color: #023047;
    margin-bottom: 12px;
  }
  
  .intake-header p {
    color: var(--text-muted);
    font-size: 1.15rem;
    max-width: 600px;
    margin: 0 auto;
  }
  
  .intake-container {
    width: 100%;
    max-width: 780px;
    background: var(--card-bg);
    border: 1px solid var(--card-border);
    border-radius: 24px;
    padding: 40px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
    position: relative;
  }
  
  /* Progress Indicator */
  .intake-progress {
    display: flex;
    justify-content: space-between;
    margin-bottom: 45px;
    position: relative;
  }
  
  .intake-progress::before {
    content: '';
    position: absolute;
    top: 18px;
    left: 0;
    right: 0;
    height: 4px;
    background: #f1f5f9;
    z-index: 1;
    border-radius: 2px;
  }
  
  .intake-progress-line {
    position: absolute;
    top: 18px;
    left: 0;
    height: 4px;
    background: var(--primary);
    z-index: 2;
    transition: width 0.4s ease;
    width: 0%;
    border-radius: 2px;
  }
  
  .intake-step {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: #f8fafc;
    border: 2px solid #e2e8f0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 14px;
    z-index: 3;
    transition: all 0.3s ease;
    color: var(--text-muted);
    position: relative;
  }
  
  .intake-step.active {
    background: var(--primary);
    border-color: var(--primary);
    color: #ffffff;
    box-shadow: 0 0 15px rgba(6, 182, 212, 0.3);
  }
  
  .intake-step.completed {
    background: var(--success);
    border-color: var(--success);
    color: #ffffff;
  }
  
  .intake-step-label {
    position: absolute;
    bottom: -22px;
    font-size: 10px;
    white-space: nowrap;
    color: var(--text-muted);
    font-weight: 600;
    text-transform: uppercase;
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
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 25px;
    color: #023047;
    border-left: 5px solid var(--primary);
    padding-left: 14px;
  }
  
  .intake-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
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
    font-weight: 700;
    color: #334155;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }
  
  .intake-group input, .intake-group select, .intake-group textarea {
    background: #ffffff;
    border: 1px solid #cbd5e1;
    border-radius: 12px;
    padding: 14px 16px;
    color: var(--text-main);
    font-size: 1rem;
    transition: all 0.3s ease;
    width: 100%;
    box-sizing: border-box;
  }
  
  .intake-group input:focus, .intake-group select:focus, .intake-group textarea:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 3px rgba(6, 182, 212, 0.15);
  }
  
  .intake-group input::placeholder {
    color: #94a3b8;
  }
  
  .intake-sub-section {
    border-top: 1px solid #e2e8f0;
    padding-top: 20px;
    margin-top: 10px;
  }
  
  .intake-sub-title {
    font-size: 1.1rem;
    font-weight: 700;
    color: #475569;
    margin-bottom: 15px;
  }
  
  /* Buttons */
  .intake-buttons {
    display: flex;
    justify-content: space-between;
    margin-top: 40px;
    gap: 15px;
  }
  
  .intake-btn {
    padding: 14px 32px;
    border-radius: 12px;
    font-weight: 700;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    border: none;
  }
  
  .intake-btn-prev {
    background: #f1f5f9;
    color: #475569;
    border: 1px solid #e2e8f0;
  }
  
  .intake-btn-prev:hover {
    background: #e2e8f0;
    color: #1e293b;
  }
  
  .intake-btn-next {
    background: var(--primary);
    color: #ffffff;
    box-shadow: 0 4px 14px rgba(6, 182, 212, 0.25);
  }
  
  .intake-btn-next:hover {
    background: var(--primary-hover);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(6, 182, 212, 0.4);
  }
  
  /* Signature Pad */
  .intake-sig-container {
    background: #f8fafc;
    border: 1px solid #cbd5e1;
    border-radius: 12px;
    overflow: hidden;
    position: relative;
    margin-top: 8px;
  }
  
  .intake-sig-canvas {
    width: 100%;
    height: 160px;
    cursor: crosshair;
    display: block;
    background: #ffffff;
  }
  
  .intake-sig-clear {
    position: absolute;
    bottom: 12px;
    right: 12px;
    background: #fee2e2;
    color: var(--error);
    border: 1px solid #fca5a5;
    padding: 6px 14px;
    font-size: 0.8rem;
    font-weight: 700;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.2s ease;
  }
  
  .intake-sig-clear:hover {
    background: #fecaca;
  }
  
  /* Success Screen */
  .intake-success {
    text-align: center;
    display: none;
    animation: intakeScaleUp 0.5s ease forwards;
    padding: 20px 0;
  }
  
  .intake-success-icon {
    font-size: 5rem;
    color: var(--success);
    margin-bottom: 25px;
  }
  
  .intake-success h2 {
    font-size: 2.2rem;
    font-weight: 800;
    color: #023047;
    margin-bottom: 15px;
  }
  
  .intake-downloads {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-top: 35px;
    align-items: center;
  }
  
  .intake-download-btn {
    display: inline-block;
    background: var(--primary);
    color: #ffffff;
    padding: 16px 36px;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 700;
    font-size: 1.05rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 14px rgba(6, 182, 212, 0.3);
    width: 100%;
    max-width: 340px;
    box-sizing: border-box;
  }
  
  .intake-download-btn:hover {
    background: var(--primary-hover);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(6, 182, 212, 0.4);
  }
  
  /* Animations */
  @keyframes intakeFadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
  }
  
  @keyframes intakeScaleUp {
    from { opacity: 0; transform: scale(0.95); }
    to { opacity: 1; transform: scale(1); }
  }
  
  @media (max-width: 768px) {
    .intake-grid {
      grid-template-columns: 1fr;
      gap: 16px;
    }
    .intake-full-width {
      grid-column: span 1;
    }
    .intake-container {
      padding: 24px;
    }
    .intake-step-label {
      display: none;
    }
  }
</style>

<section class="intake-section">
  <div class="intake-header">
    <h1>KIDazzle Employee Portal</h1>
    <p>Consolidated Onboarding Intake &amp; Hiring Verification Packets</p>
  </div>
  
  <div class="intake-container">
    <!-- Progress Indicator -->
    <div class="intake-progress">
      <div class="intake-progress-line" id="intakeProgressLine"></div>
      <div class="intake-step active" id="intakeStepIndicator1">
        1 <span class="intake-step-label">Personal</span>
      </div>
      <div class="intake-step" id="intakeStepIndicator2">
        2 <span class="intake-step-label">Position</span>
      </div>
      <div class="intake-step" id="intakeStepIndicator3">
        3 <span class="intake-step-label">Background</span>
      </div>
      <div class="intake-step" id="intakeStepIndicator4">
        4 <span class="intake-step-label">References</span>
      </div>
      <div class="intake-step" id="intakeStepIndicator5">
        5 <span class="intake-step-label">Signature</span>
      </div>
    </div>
    
    <form id="employeeIntakeForm">
      
      <!-- STEP 1: Personal details -->
      <div class="intake-form-step active" id="intakeFormStep1">
        <div class="intake-step-title">1. Personal Information</div>
        <div class="intake-grid">
          <div class="intake-group">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" placeholder="John" required/>
          </div>
          <div class="intake-group">
            <label for="middle_name">Middle Name</label>
            <input type="text" id="middle_name" placeholder="Robert"/>
          </div>
          <div class="intake-group">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" placeholder="Doe" required/>
          </div>
          <div class="intake-group">
            <label for="maiden_name">Maiden Name (If Applicable)</label>
            <input type="text" id="maiden_name" placeholder="Smith"/>
          </div>
          <div class="intake-group">
            <label for="gender">Gender</label>
            <select id="gender" required>
              <option value="" disabled selected>Select...</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          <div class="intake-group">
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" required/>
          </div>
          <div class="intake-group">
            <label for="ssn">Social Security Number</label>
            <input type="text" id="ssn" placeholder="000-00-0000" pattern="^\d{3}-\d{2}-\d{4}$" required title="Format: 000-00-0000"/>
          </div>
          <div class="intake-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" placeholder="john.doe@example.com" required/>
          </div>
          <div class="intake-group intake-full-width">
            <label for="address">Street Address</label>
            <input type="text" id="address" placeholder="123 Main St" required/>
          </div>
          <div class="intake-group">
            <label for="city">City</label>
            <input type="text" id="city" placeholder="Atlanta" required/>
          </div>
          <div class="intake-group">
            <div class="intake-grid" style="gap:12px;">
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
          <div class="intake-group">
            <label for="home_phone">Home Phone</label>
            <input type="tel" id="home_phone" placeholder="404-555-0100"/>
          </div>
          <div class="intake-group">
            <label for="mobile_phone">Mobile Phone</label>
            <input type="tel" id="mobile_phone" placeholder="404-555-0199" required/>
          </div>
        </div>
      </div>
      
      <!-- STEP 2: Position & Payroll Direct Deposit -->
      <div class="intake-form-step" id="intakeFormStep2">
        <div class="intake-step-title">2. Position &amp; Direct Deposit Setup</div>
        <div class="intake-grid">
          <div class="intake-group">
            <label for="position_desired">Position Desired</label>
            <input type="text" id="position_desired" placeholder="Lead Teacher" required/>
          </div>
          <div class="intake-group">
            <label for="location">Preferred Center Location</label>
            <select id="location" required>
              <option value="" disabled selected>Select location...</option>
              <option value="Summit Midtown">Summit Midtown (GSA)</option>
              <option value="AFC Downtown">AFC Downtown (GSA)</option>
              <option value="West End">West End</option>
              <option value="College Park">College Park</option>
              <option value="Hampton GA">Hampton GA</option>
              <option value="Miami/Doral Fl">Miami/Doral Fl</option>
              <option value="Memphis TN">Memphis TN</option>
            </select>
          </div>
          <div class="intake-group">
            <label for="hourly_rate">Desired Hourly Rate ($)</label>
            <input type="number" id="hourly_rate" step="0.01" placeholder="18.50" required/>
          </div>
          <div class="intake-group">
            <label for="start_date">Available Start Date</label>
            <input type="date" id="start_date" required/>
          </div>
          
          <div class="intake-group intake-full-width intake-sub-section">
            <div class="intake-sub-title">Direct Deposit Authorization</div>
          </div>
          
          <div class="intake-group">
            <label for="bank_routing">Bank Routing Number</label>
            <input type="text" id="bank_routing" placeholder="123456789" pattern="^\d{9}$" required title="9-digit Routing Number"/>
          </div>
          <div class="intake-group">
            <label for="bank_account">Bank Account Number</label>
            <input type="text" id="bank_account" placeholder="1234567890" required/>
          </div>
          
          <div class="intake-group intake-full-width intake-sub-section">
            <div class="intake-sub-title">Federal &amp; State W-4 Allowances</div>
          </div>
          
          <div class="intake-group">
            <label for="federal_filing_status">Federal Filing Status</label>
            <select id="federal_filing_status" required>
              <option value="Single">Single</option>
              <option value="Married">Married</option>
              <option value="Head of Household">Head of Household</option>
            </select>
          </div>
          <div class="intake-group">
            <div class="intake-grid" style="gap:12px;">
              <div class="intake-group">
                <label for="federal_allowance">Fed Allowance</label>
                <input type="number" id="federal_allowance" min="0" value="0" required/>
              </div>
              <div class="intake-group">
                <label for="state_allowance">State Allowance</label>
                <input type="number" id="state_allowance" min="0" value="0" required/>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- STEP 3: GSA Questionnaire (Background) -->
      <div class="intake-form-step" id="intakeFormStep3">
        <div class="intake-step-title">3. Federal Childcare &amp; GSA Questionnaire</div>
        <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 25px; line-height: 1.5;">
          This information is required for background checks at GSA-governed federal facilities (Summit, AFC). If you are not applying to Summit or AFC, you may skip these fields.
        </p>
        <div class="intake-grid">
          <div class="intake-group">
            <label for="suffix">Suffix (e.g. Jr, Sr)</label>
            <input type="text" id="suffix" placeholder="Jr."/>
          </div>
          <div class="intake-group">
            <label for="birth_city">City of Birth</label>
            <input type="text" id="birth_city" placeholder="Atlanta"/>
          </div>
          <div class="intake-group">
            <label for="birth_state">U.S. State of Birth</label>
            <input type="text" id="birth_state" placeholder="GA"/>
          </div>
          <div class="intake-group">
            <label for="birth_country">Country of Birth</label>
            <input type="text" id="birth_country" placeholder="United States"/>
          </div>
          <div class="intake-group">
            <label for="prior_investigation">Prior Investigation?</label>
            <select id="prior_investigation">
              <option value="No">No</option>
              <option value="Yes">Yes</option>
            </select>
          </div>
          <div class="intake-group">
            <label for="prior_investigation_date">Approximate Date</label>
            <input type="date" id="prior_investigation_date"/>
          </div>
          <div class="intake-group intake-full-width">
            <label for="prior_investigation_agency">Adjudicating Agency</label>
            <input type="text" id="prior_investigation_agency" placeholder="GSA, OPM, etc."/>
          </div>
          <div class="intake-group">
            <label for="us_citizen">U.S. Citizen?</label>
            <select id="us_citizen">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class="intake-group">
            <label for="country_citizenship">Country of Citizenship</label>
            <input type="text" id="country_citizenship" placeholder="United States"/>
          </div>
        </div>
      </div>
      
      <!-- STEP 4: References & Emergencies -->
      <div class="intake-form-step" id="intakeFormStep4">
        <div class="intake-step-title">4. References &amp; Emergency Contact</div>
        <div class="intake-grid">
          <div class="intake-group intake-full-width">
            <label for="prev_employer_1">Previous Employer Name</label>
            <input type="text" id="prev_employer_1" placeholder="Bright Horizons Daycare"/>
          </div>
          <div class="intake-group">
            <label for="prev_duties_1">Job Duties</label>
            <input type="text" id="prev_duties_1" placeholder="Lead infant caregiver"/>
          </div>
          <div class="intake-group">
            <label for="prev_reason_1">Reason for Leaving</label>
            <input type="text" id="prev_reason_1" placeholder="Career growth"/>
          </div>
          
          <div class="intake-group intake-full-width intake-sub-section">
            <div class="intake-sub-title">Emergency Contact Details</div>
          </div>
          
          <div class="intake-group">
            <label for="emergency_name">Contact Name</label>
            <input type="text" id="emergency_name" placeholder="Mary Doe" required/>
          </div>
          <div class="intake-group">
            <label for="emergency_phone">Contact Phone</label>
            <input type="tel" id="emergency_phone" placeholder="404-555-0155" required/>
          </div>
          <div class="intake-group intake-full-width">
            <label for="emergency_relation">Relationship to Employee</label>
            <input type="text" id="emergency_relation" placeholder="Spouse" required/>
          </div>
        </div>
      </div>
      
      <!-- STEP 5: Acknowledgements & Signature -->
      <div class="intake-form-step" id="intakeFormStep5">
        <div class="intake-step-title">5. Acknowledgement &amp; Direct Signature</div>
        
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; padding: 24px; border-radius: 16px; font-size: 0.95rem; line-height: 1.6; color: var(--text-muted); margin-bottom: 30px;">
          <p style="margin-bottom: 15px; color: var(--text-main); font-weight: 700;"><strong>Employee Handbook Acknowledgement:</strong></p>
          <p style="margin-bottom: 20px;">
            I acknowledge that I have received a copy of the KIDazzle Employee Handbook. I understand that I am responsible for reading and complying with the policies, standards, and practices outlined in the handbook.
          </p>
          <label style="display: flex; align-items: center; gap: 12px; cursor: pointer; color: var(--text-main); font-weight: 700; user-select: none;">
            <input type="checkbox" id="handbook_agree" required style="width: 20px; height: 20px; margin: 0; cursor: pointer;"/>
            I agree and acknowledge the terms of the Employee Handbook.
          </label>
        </div>
        
        <div class="intake-group intake-full-width">
          <label>Employee Signature (Sign below)</label>
          <div class="intake-sig-container">
            <canvas id="intakeSigCanvas" class="intake-sig-canvas"></canvas>
            <button type="button" class="intake-sig-clear" id="intakeSigClear">Clear</button>
          </div>
          <input type="text" id="sigText" placeholder="Type name to sign digitally" required style="margin-top: 15px;"/>
        </div>
      </div>
      
      <!-- Controls -->
      <div class="intake-buttons">
        <button type="button" class="intake-btn intake-btn-prev" id="intakeBtnPrev" style="display: none;">Back</button>
        <button type="button" class="intake-btn intake-btn-next" id="intakeBtnNext">Continue</button>
      </div>
      
    </form>
    
    <!-- Success Screen -->
    <div class="intake-success" id="intakeSuccessScreen">
      <div class="intake-success-icon">✓</div>
      <h2>Intake Packet Completed!</h2>
      <p style="color: var(--text-muted); font-size: 1.1rem; line-height: 1.6; max-width: 550px; margin: 15px auto 0;">
        Your onboarding documents and payroll direct deposit setup have been processed successfully. Your copies are ready for download below.
      </p>
      
      <div class="intake-downloads">
        <a href="#" class="intake-download-btn" id="downloadBtn" download>Download Hire Packet PDF</a>
        <a href="#" class="intake-download-btn" id="downloadDocxBtn" style="background: #475569; box-shadow: 0 4px 14px rgba(71, 85, 105, 0.3); display: none;" download>Download GSA CIW Word Doc</a>
      </div>
    </div>
    
  </div>
</section>

<script>
  (function() {
    const form = document.getElementById('employeeIntakeForm');
    const successScreen = document.getElementById('intakeSuccessScreen');
    const btnNext = document.getElementById('intakeBtnNext');
    const btnPrev = document.getElementById('intakeBtnPrev');
    const progressLine = document.getElementById('intakeProgressLine');
    
    let currentStep = 1;
    const totalSteps = 5;
    
    // Canvas signature drawing setup
    const canvas = document.getElementById('intakeSigCanvas');
    const ctx = canvas.getContext('2d');
    let drawing = false;
    
    function resizeCanvas() {
      const rect = canvas.getBoundingClientRect();
      canvas.width = rect.width;
      canvas.height = rect.height;
      ctx.strokeStyle = '#06b6d4';
      ctx.lineWidth = 3;
      ctx.lineCap = 'round';
    }
    
    window.addEventListener('resize', resizeCanvas);
    
    canvas.addEventListener('mousedown', (e) => {
      drawing = true;
      const rect = canvas.getBoundingClientRect();
      ctx.beginPath();
      ctx.moveTo(e.clientX - rect.left, e.clientY - rect.top);
    });
    
    canvas.addEventListener('mousemove', (e) => {
      if (!drawing) return;
      const rect = canvas.getBoundingClientRect();
      ctx.lineTo(e.clientX - rect.left, e.clientY - rect.top);
      ctx.stroke();
    });
    
    canvas.addEventListener('mouseup', () => drawing = false);
    canvas.addEventListener('mouseleave', () => drawing = false);
    
    // Touch support (fixed coordinates)
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
      for (let i = 1; i <= totalSteps; i++) {
        const stepEl = document.getElementById('intakeStepIndicator' + i);
        if (i < currentStep) {
          stepEl.className = 'intake-step completed';
        } else if (i === currentStep) {
          stepEl.className = 'intake-step active';
        } else {
          stepEl.className = 'intake-step';
        }
      }
      
      const percent = ((currentStep - 1) / (totalSteps - 1)) * 100;
      progressLine.style.width = percent + '%';
      
      for (let i = 1; i <= totalSteps; i++) {
        const stepSection = document.getElementById('intakeFormStep' + i);
        if (i === currentStep) {
          stepSection.className = 'intake-form-step active';
        } else {
          stepSection.className = 'intake-form-step';
        }
      }
      
      btnPrev.style.display = currentStep === 1 ? 'none' : 'block';
      
      if (currentStep === totalSteps) {
        btnNext.innerText = 'Submit Onboarding Packet';
        btnNext.style.background = 'var(--success)';
        btnNext.style.boxShadow = '0 4px 14px rgba(16, 185, 129, 0.3)';
      } else {
        btnNext.innerText = 'Continue';
        btnNext.style.background = 'var(--primary)';
        btnNext.style.boxShadow = '0 4px 14px rgba(6, 182, 212, 0.25)';
      }
      
      if (currentStep === totalSteps) {
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
      
      if (currentStep < totalSteps) {
        currentStep++;
        updateProgress();
      } else {
        // Collect form data
        const payload = {
          first_name: document.getElementById('first_name').value,
          middle_name: document.getElementById('middle_name').value,
          last_name: document.getElementById('last_name').value,
          maiden_name: document.getElementById('maiden_name').value,
          gender: document.getElementById('gender').value,
          dob: document.getElementById('dob').value,
          ssn: document.getElementById('ssn').value,
          email: document.getElementById('email').value,
          address: document.getElementById('address').value,
          city: document.getElementById('city').value,
          state: document.getElementById('state').value,
          zip: document.getElementById('zip').value,
          home_phone: document.getElementById('home_phone').value,
          mobile_phone: document.getElementById('mobile_phone').value,
          
          position_desired: document.getElementById('position_desired').value,
          location: document.getElementById('location').value,
          hourly_rate: document.getElementById('hourly_rate').value,
          start_date: document.getElementById('start_date').value,
          bank_routing: document.getElementById('bank_routing').value,
          bank_account: document.getElementById('bank_account').value,
          federal_filing_status: document.getElementById('federal_filing_status').value,
          federal_allowance: document.getElementById('federal_allowance').value,
          state_allowance: document.getElementById('state_allowance').value,
          
          suffix: document.getElementById('suffix').value,
          birth_city: document.getElementById('birth_city').value,
          birth_state: document.getElementById('birth_state').value,
          birth_country: document.getElementById('birth_country').value,
          prior_investigation: document.getElementById('prior_investigation').value,
          prior_investigation_date: document.getElementById('prior_investigation_date').value,
          prior_investigation_agency: document.getElementById('prior_investigation_agency').value,
          us_citizen: document.getElementById('us_citizen').value,
          country_citizenship: document.getElementById('country_citizenship').value,
          
          prev_employer_1: document.getElementById('prev_employer_1').value,
          prev_duties_1: document.getElementById('prev_duties_1').value,
          prev_reason_1: document.getElementById('prev_reason_1').value,
          emergency_name: document.getElementById('emergency_name').value,
          emergency_phone: document.getElementById('emergency_phone').value,
          emergency_relation: document.getElementById('emergency_relation').value,
          
          signature: document.getElementById('sigText').value,
          handbook_agreed: document.getElementById('handbook_agree').checked
        };
        
        btnNext.innerText = 'Processing documents...';
        btnNext.disabled = true;
        
        try {
          const res = await fetch('/api/kidazzle/employee-intake', {
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
            
            document.getElementById('downloadBtn').href = result.downloadUrl;
            if (result.downloadDocxUrl) {
              const docxBtn = document.getElementById('downloadDocxBtn');
              docxBtn.href = result.downloadDocxUrl;
              docxBtn.style.display = 'inline-block';
            }
            successScreen.style.display = 'block';
          } else {
            alert('Submission failed: ' + (result.error || 'Unknown error'));
            btnNext.innerText = 'Submit Onboarding Packet';
            btnNext.disabled = false;
          }
        } catch (e) {
          console.error(e);
          alert('Submission error. Please verify the server connection.');
          btnNext.innerText = 'Submit Onboarding Packet';
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
    
    // Initial resize
    setTimeout(resizeCanvas, 100);
  })();
</script>

<?php
get_footer();
