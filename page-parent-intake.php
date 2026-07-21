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
  
  .intake-step.skipped {
    background: #e2e8f0;
    border-color: #cbd5e1;
    color: #94a3b8;
    text-decoration: line-through;
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

  /* Inline radio/checkbox group */
  .intake-inline-choices {
    display: flex;
    gap: 20px;
    margin-top: 5px;
  }

  .intake-choice-item {
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
  }

  .intake-choice-item input[type="radio"], .intake-choice-item input[type="checkbox"] {
    width: 20px;
    height: 20px;
    cursor: pointer;
    margin: 0;
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

  /* Grid for permissions */
  .intake-perm-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
    background: #f8fafc;
    padding: 20px;
    border-radius: 16px;
    border: 1px solid #e2e8f0;
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
    border: 2px dashed #cbd5e1;
    border-radius: 14px;
    background: #f8fafc;
    position: relative;
    margin-bottom: 10px;
    overflow: hidden;
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
    background: #f1f5f9;
    color: var(--error);
    border: 1px solid #e2e8f0;
    padding: 6px 12px;
    font-size: 0.8rem;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 600;
  }
  
  .intake-sig-clear:hover {
    background: #ffe4e6;
  }
  
  /* Success Screen */
  .intake-success {
    text-align: center;
    display: none;
    padding: 20px 0;
  }
  
  .intake-success-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: #d1fae5;
    color: var(--success);
    font-size: 2.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 24px auto;
  }
  
  .intake-success h2 {
    font-size: 2rem;
    font-weight: 800;
    color: #023047;
    margin-bottom: 12px;
  }
  
  .intake-download-btn {
    display: inline-block;
    margin-top: 30px;
    background: var(--accent);
    color: #ffffff;
    padding: 16px 36px;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 700;
    font-size: 1.05rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 14px rgba(251, 133, 0, 0.3);
  }
  
  .intake-download-btn:hover {
    background: #e07a00;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(251, 133, 0, 0.4);
  }
  
  @keyframes intakeFadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
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
      padding: 24px 16px;
    }
    .intake-header h1 {
      font-size: 2.2rem;
    }
    .intake-perm-grid {
      grid-template-columns: 1fr;
    }
  }
</style>

<div class="intake-section">
  <div class="intake-header">
    <h1>KIDazzle Parent Intake</h1>
    <p>Consolidated Parent Enrollment &amp; CACFP Intake Portal</p>
  </div>

  <div class="intake-container">
    <div class="intake-progress">
      <div class="intake-progress-line" id="intakeProgressLine"></div>
      <div class="intake-step active" id="intakeStep1">1<span class="intake-step-label">Parent</span></div>
      <div class="intake-step" id="intakeStep2">2<span class="intake-step-label">Child</span></div>
      <div class="intake-step" id="intakeStep3">3<span class="intake-step-label">Infant</span></div>
      <div class="intake-step" id="intakeStep4">4<span class="intake-step-label">Medical</span></div>
      <div class="intake-step" id="intakeStep5">5<span class="intake-step-label">Topical</span></div>
      <div class="intake-step" id="intakeStep6">6<span class="intake-step-label">Income</span></div>
      <div class="intake-step" id="intakeStep7">7<span class="intake-step-label">Submit</span></div>
    </div>

    <form id="intakePortalForm">
      <!-- Step 1: Parent Details -->
      <div class="intake-form-step active" id="intakeFormStep1">
        <h3 class="intake-step-title">Parent / Guardian Details</h3>
        
        <div class="intake-sub-title">Primary Parent / Guardian #1</div>
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
            <input type="text" id="address" placeholder="123 Main St" required/>
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
                <input type="text" id="zip" placeholder="30310" required/>
              </div>
            </div>
          </div>
          <div class="intake-group intake-full-width">
            <label for="employer">Employer / Business</label>
            <input type="text" id="employer" placeholder="Summit Logistics" required/>
          </div>
        </div>

        <div class="intake-sub-section">
          <div class="intake-sub-title">Secondary Parent / Guardian #2 (Optional)</div>
          <div class="intake-grid">
            <div class="intake-group">
              <label for="parent2_first_name">First Name</label>
              <input type="text" id="parent2_first_name" placeholder="Jane"/>
            </div>
            <div class="intake-group">
              <label for="parent2_last_name">Last Name</label>
              <input type="text" id="parent2_last_name" placeholder="Doe"/>
            </div>
            <div class="intake-group">
              <label for="parent2_email">Email Address</label>
              <input type="email" id="parent2_email" placeholder="jane.doe@example.com"/>
            </div>
            <div class="intake-group">
              <label for="parent2_phone">Phone Number</label>
              <input type="tel" id="parent2_phone" placeholder="404-555-0200"/>
            </div>
            <div class="intake-group intake-full-width">
              <label for="parent2_employer">Employer / Business</label>
              <input type="text" id="parent2_employer" placeholder="Summit Logistics"/>
            </div>
          </div>
        </div>
      </div>

      <!-- Step 2: Child & Program Details -->
      <div class="intake-form-step" id="intakeFormStep2">
        <h3 class="intake-step-title">Child &amp; Program Details</h3>
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
          <div class="intake-group">
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
          <div class="intake-group">
            <label for="program_cost">Program Cost / Care Type</label>
            <select id="program_cost" required>
              <option value="" disabled selected>Select care option...</option>
              <option value="280">Full Time ($280 / week)</option>
              <option value="240">Part Time ($240 / week)</option>
              <option value="100">After School ($100 / week)</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Step 3: Infant Feeding Plan (Only active/required if child is under 12 months) -->
      <div class="intake-form-step" id="intakeFormStep3">
        <h3 class="intake-step-title">Infant Feeding Plan</h3>
        <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 20px; line-height: 1.6;">
          Since your child is under 1 year old, the state of Georgia requires a detailed infant feeding schedule.
        </p>
        
        <div class="intake-grid">
          <div class="intake-group">
            <label>Does child take bottle?</label>
            <div class="intake-inline-choices">
              <label class="intake-choice-item"><input type="radio" name="feeding_takes_bottle" value="yes" required> Yes</label>
              <label class="intake-choice-item"><input type="radio" name="feeding_takes_bottle" value="no"> No</label>
            </div>
          </div>
          
          <div class="intake-group">
            <label>Should bottle be warmed?</label>
            <div class="intake-inline-choices">
              <label class="intake-choice-item"><input type="radio" name="feeding_bottle_warmed" value="yes" required> Yes</label>
              <label class="intake-choice-item"><input type="radio" name="feeding_bottle_warmed" value="no"> No</label>
            </div>
          </div>
          
          <div class="intake-group">
            <label>Does child hold own bottle?</label>
            <div class="intake-inline-choices">
              <label class="intake-choice-item"><input type="radio" name="feeding_holds_bottle" value="yes" required> Yes</label>
              <label class="intake-choice-item"><input type="radio" name="feeding_holds_bottle" value="no"> No</label>
            </div>
          </div>

          <div class="intake-group">
            <label>Can child feed self?</label>
            <div class="intake-inline-choices">
              <label class="intake-choice-item"><input type="radio" name="feeding_feeds_self" value="yes" required> Yes</label>
              <label class="intake-choice-item"><input type="radio" name="feeding_feeds_self" value="no"> No</label>
            </div>
          </div>

          <div class="intake-group intake-full-width">
            <label>What types of food does child eat?</label>
            <div class="intake-inline-choices" style="flex-wrap: wrap;">
              <label class="intake-choice-item"><input type="checkbox" name="feeding_food_type" value="formula"> Formula</label>
              <label class="intake-choice-item"><input type="checkbox" name="feeding_food_type" value="baby_foods"> Baby Foods</label>
              <label class="intake-choice-item"><input type="checkbox" name="feeding_food_type" value="whole_milk"> Whole Milk</label>
              <label class="intake-choice-item"><input type="checkbox" name="feeding_food_type" value="table_foods"> Table Foods</label>
              <label class="intake-choice-item"><input type="checkbox" name="feeding_food_type" value="strained_foods"> Strained Foods</label>
              <label class="intake-choice-item"><input type="checkbox" name="feeding_food_type" value="other"> Other</label>
            </div>
          </div>

          <div class="intake-group">
            <label for="feeding_formula_type">Formula Type / Brand</label>
            <input type="text" id="feeding_formula_type" placeholder="Similac Sensitive" />
          </div>

          <div class="intake-group">
            <label for="feeding_formula_amount">Formula Amount (oz)</label>
            <input type="text" id="feeding_formula_amount" placeholder="8 oz" />
          </div>

          <div class="intake-group">
            <label>Does child take a pacifier?</label>
            <div class="intake-inline-choices">
              <label class="intake-choice-item"><input type="radio" name="feeding_pacifier" value="yes"> Yes</label>
              <label class="intake-choice-item"><input type="radio" name="feeding_pacifier" value="no"> No</label>
            </div>
          </div>

          <div class="intake-group">
            <label for="feeding_pacifier_when">When is pacifier given?</label>
            <input type="text" id="feeding_pacifier_when" placeholder="Nap time / Sleeping" />
          </div>

          <div class="intake-group">
            <label for="feeding_food_likes">Food Likes</label>
            <input type="text" id="feeding_food_likes" placeholder="Bananas, Applesauce" />
          </div>

          <div class="intake-group">
            <label for="feeding_food_dislikes">Food Dislikes</label>
            <input type="text" id="feeding_food_dislikes" placeholder="Peas" />
          </div>

          <div class="intake-group intake-full-width">
            <label for="feeding_solid_food_instructions">Solid Food Introduction Instructions</label>
            <textarea id="feeding_solid_food_instructions" rows="2" placeholder="E.g., Introduce soft foods slowly as requested by parent..."></textarea>
          </div>
        </div>
      </div>

      <!-- Step 4: Medical & Emergency Pickups -->
      <div class="intake-form-step" id="intakeFormStep4">
        <h3 class="intake-step-title">Medical &amp; Emergency Pickups</h3>
        
        <div class="intake-sub-title">Emergency Pickup Authorization #1</div>
        <div class="intake-grid">
          <div class="intake-group">
            <label for="emergency_name">Authorized Person Name</label>
            <input type="text" id="emergency_name" placeholder="Grandmother Mary" required/>
          </div>
          <div class="intake-group">
            <div class="intake-grid" style="gap:10px;">
              <div class="intake-group">
                <label for="emergency_relation">Relationship</label>
                <input type="text" id="emergency_relation" placeholder="Grandparent" required/>
              </div>
              <div class="intake-group">
                <label for="emergency_phone">Phone Number</label>
                <input type="tel" id="emergency_phone" placeholder="404-555-0177" required/>
              </div>
            </div>
          </div>
        </div>

        <div class="intake-sub-section">
          <div class="intake-sub-title">Primary Care Physician</div>
          <div class="intake-grid">
            <div class="intake-group">
              <label for="physician_name">Physician / Clinic Name</label>
              <input type="text" id="physician_name" placeholder="Dr. Smith Pediatric" required/>
            </div>
            <div class="intake-group">
              <label for="physician_phone">Physician Phone Number</label>
              <input type="tel" id="physician_phone" placeholder="404-555-0166" required/>
            </div>
          </div>
        </div>

        <div class="intake-sub-section">
          <div class="intake-sub-title">Medical Information &amp; Concerns</div>
          <div class="intake-grid">
            <div class="intake-group intake-full-width">
              <label for="medical_allergies">Pre-existing Allergies, Illness, or Health Concerns</label>
              <textarea id="medical_allergies" rows="3" placeholder="Enter any food/medication allergies, asthma details, or check 'None'..." required></textarea>
              <div style="margin-top: 5px; font-size: 0.9rem; color: var(--text-muted);">
                <input type="checkbox" id="no_allergies" style="width:16px; height:16px; display:inline-block; vertical-align:middle; margin-right:5px;"/>
                <label for="no_allergies" style="display:inline; text-transform:none; font-weight:normal; cursor:pointer;">My child has no pre-existing allergies or health concerns.</label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Step 5: Topical / External Preparations Permissions -->
      <div class="intake-form-step" id="intakeFormStep5">
        <h3 class="intake-step-title">Topical Preparations Authorization</h3>
        <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 20px; line-height: 1.6;">
          Check the items below that center staff are authorized to apply to your child as needed:
        </p>
        
        <div class="intake-perm-grid">
          <label class="intake-choice-item"><input type="checkbox" name="ext_perm" value="latex_gloves" checked> Latex Gloves</label>
          <label class="intake-choice-item"><input type="checkbox" name="ext_perm" value="band_aids" checked> Band-Aids</label>
          <label class="intake-choice-item"><input type="checkbox" name="ext_perm" value="medical_tape" checked> Medical Tape</label>
          <label class="intake-choice-item"><input type="checkbox" name="ext_perm" value="baby_wipes" checked> Baby Wipes</label>
          <label class="intake-choice-item"><input type="checkbox" name="ext_perm" value="diaper_ointment" checked> Diaper Ointment</label>
          <label class="intake-choice-item"><input type="checkbox" name="ext_perm" value="baby_powder"> Baby Powder</label>
          <label class="intake-choice-item"><input type="checkbox" name="ext_perm" value="baby_lotion"> Baby Lotion</label>
          <label class="intake-choice-item"><input type="checkbox" name="ext_perm" value="aquaphor"> Aquaphor</label>
          <label class="intake-choice-item"><input type="checkbox" name="ext_perm" value="vaseline"> Vaseline</label>
          <label class="intake-choice-item"><input type="checkbox" name="ext_perm" value="sunscreen" checked> Sunscreen</label>
          <label class="intake-choice-item"><input type="checkbox" name="ext_perm" value="insect_repellent"> Insect Repellent</label>
          <label class="intake-choice-item"><input type="checkbox" name="ext_perm" value="antiseptic_solution"> Antiseptic Solution</label>
          <label class="intake-choice-item"><input type="checkbox" name="ext_perm" value="anti_itch_cream"> Anti-Itch Cream</label>
          <label class="intake-choice-item"><input type="checkbox" name="ext_perm" value="antibacterial_ointment"> Antibacterial Ointment</label>
          <label class="intake-choice-item"><input type="checkbox" name="ext_perm" value="insect_sting_preparation"> Insect Sting Preparation</label>
        </div>
      </div>

      <!-- Step 6: Household Income -->
      <div class="intake-form-step" id="intakeFormStep6">
        <h3 class="intake-step-title">Household Income Eligibility (IES)</h3>
        <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 20px; line-height: 1.6;">
          The USDA Child and Adult Care Food Program (CACFP) requires income details to determine eligibility status. All information is secure and confidential.
        </p>
        <div class="intake-grid">
          <div class="intake-group">
            <label for="household_size">Total Household Size</label>
            <input type="number" id="household_size" min="1" max="20" placeholder="4" required/>
          </div>
          <div class="intake-group">
            <label for="monthly_income">Total Monthly Income ($)</label>
            <input type="number" id="monthly_income" min="0" placeholder="4500" required/>
          </div>
          <div class="intake-group intake-full-width">
            <label for="ssn">Last 4 Digits of Social Security Number (SSN)</label>
            <input type="text" id="ssn" placeholder="1234" maxlength="4" required/>
          </div>
        </div>
      </div>

      <!-- Step 7: Sign & Submit -->
      <div class="intake-form-step" id="intakeFormStep7">
        <h3 class="intake-step-title">Sign &amp; Submit</h3>
        <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 20px; line-height: 1.6;">
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

        <div class="intake-group intake-full-width" style="flex-direction:column; gap:10px; margin-top:20px;">
          <div style="display:flex; align-items:flex-start; gap:10px;">
            <input type="checkbox" id="consent_text" required style="width:20px; height:20px; margin-top:3px;"/>
            <label for="consent_text" style="text-transform:none; font-size:0.95rem; font-weight:normal; cursor:pointer; color: #475569;">
              By signing above, I consent to complete the Enrollment Package and Income Eligibility Statement (IES) digitally.
            </label>
          </div>
          <div style="display:flex; align-items:flex-start; gap:10px; margin-top:5px;">
            <input type="checkbox" id="consent_medical" required style="width:20px; height:20px; margin-top:3px;"/>
            <label for="consent_medical" style="text-transform:none; font-size:0.95rem; font-weight:normal; cursor:pointer; color: #475569;">
              <strong>Emergency Medical Authorization:</strong> I authorize KIDazzle Staff to contact my child's primary care physician and secure emergency medical treatment in case of a medical crisis.
            </label>
          </div>
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
    let isInfantMode = false;
    const form = document.getElementById('intakePortalForm');
    const btnNext = document.getElementById('intakeBtnNext');
    const btnPrev = document.getElementById('intakeBtnPrev');
    const progressLine = document.getElementById('intakeProgressLine');
    const successScreen = document.getElementById('intakeSuccessScreen');
    
    const canvas = document.getElementById('intakeSigCanvas');
    const ctx = canvas.getContext('2d');
    let drawing = false;
    
    function resizeCanvas() {
      if (currentStep !== 7) return;
      const rect = canvas.getBoundingClientRect();
      canvas.width = rect.width;
      canvas.height = rect.height;
      ctx.strokeStyle = '#0f172a'; // Realistic dark ink
      ctx.lineWidth = 2.5;
      ctx.lineCap = 'round';
    }
    
    // Infant Intake conditional display and step skip
    const childDobInput = document.getElementById('child_dob');
    
    function checkInfantStatus() {
      const dobVal = childDobInput.value;
      if (!dobVal) return;
      const dob = new Date(dobVal);
      const today = new Date();
      const ageInMonths = (today.getFullYear() - dob.getFullYear()) * 12 + (today.getMonth() - dob.getMonth());
      
      const step3Dot = document.getElementById('intakeStep3');
      if (ageInMonths >= 0 && ageInMonths < 12) {
        isInfantMode = true;
        step3Dot.className = currentStep === 3 ? 'intake-step active' : (currentStep > 3 ? 'intake-step completed' : 'intake-step');
        step3Dot.querySelector('.intake-step-label').style.textDecoration = 'none';
      } else {
        isInfantMode = false;
        step3Dot.className = 'intake-step skipped';
      }
    }
    
    childDobInput.addEventListener('change', checkInfantStatus);

    // Medical Allergies none checkbox handler
    const noAllergiesCheckbox = document.getElementById('no_allergies');
    const medicalAllergiesInput = document.getElementById('medical_allergies');
    
    noAllergiesCheckbox.addEventListener('change', () => {
      if (noAllergiesCheckbox.checked) {
        medicalAllergiesInput.value = 'None';
        medicalAllergiesInput.disabled = true;
      } else {
        medicalAllergiesInput.value = '';
        medicalAllergiesInput.disabled = false;
      }
    });

    function updateProgress() {
      // Manage step dots active/completed classes
      for (let i = 1; i <= 7; i++) {
        const stepEl = document.getElementById('intakeStep' + i);
        if (i === 3 && !isInfantMode) {
          stepEl.className = 'intake-step skipped';
          continue;
        }
        
        if (i < currentStep) {
          stepEl.className = 'intake-step completed';
        } else if (i === currentStep) {
          stepEl.className = 'intake-step active';
        } else {
          stepEl.className = 'intake-step';
        }
      }
      
      const percent = ((currentStep - 1) / 6) * 100;
      progressLine.style.width = percent + '%';
      
      for (let i = 1; i <= 7; i++) {
        const section = document.getElementById('intakeFormStep' + i);
        if (section) {
          section.className = i === currentStep ? 'intake-form-step active' : 'intake-form-step';
        }
      }
      
      btnPrev.style.display = currentStep === 1 ? 'none' : 'block';
      btnNext.innerText = currentStep === 7 ? 'Submit & Generate Packet' : 'Continue';
      btnNext.style.background = currentStep === 7 ? 'var(--success)' : 'var(--primary)';
      
      if (currentStep === 7) {
        setTimeout(resizeCanvas, 150);
      }
    }
    
    function validateStep(stepNum) {
      const stepEl = document.getElementById('intakeFormStep' + stepNum);
      if (!stepEl) return true;
      const inputs = stepEl.querySelectorAll('input, select, textarea');
      let valid = true;
      for (const input of inputs) {
        if (!input.checkValidity() && !input.disabled) {
          input.reportValidity();
          valid = false;
          break;
        }
      }
      return valid;
    }
    
    btnNext.addEventListener('click', async () => {
      if (!validateStep(currentStep)) return;
      
      // Determine next step
      let nextStep = currentStep + 1;
      if (nextStep === 3 && !isInfantMode) {
        // Skip step 3 (Infant Feeding Plan) if not an infant
        nextStep = 4;
      }
      
      if (currentStep < 7) {
        currentStep = nextStep;
        updateProgress();
      } else {
        // Collect checkbox lists
        const ext_permissions = [];
        document.querySelectorAll('input[name="ext_perm"]:checked').forEach(cb => {
          ext_permissions.push(cb.value);
        });

        const feeding_food_types = [];
        document.querySelectorAll('input[name="feeding_food_type"]:checked').forEach(cb => {
          feeding_food_types.push(cb.value);
        });

        // Determine infant feeding radios
        const getRadioValue = (name) => {
          const el = document.querySelector(`input[name="${name}"]:checked`);
          return el ? el.value : '';
        };

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
          
          parent2_first_name: document.getElementById('parent2_first_name').value,
          parent2_last_name: document.getElementById('parent2_last_name').value,
          parent2_email: document.getElementById('parent2_email').value,
          parent2_phone: document.getElementById('parent2_phone').value,
          parent2_employer: document.getElementById('parent2_employer').value,
          
          child_first_name: document.getElementById('child_first_name').value,
          child_last_name: document.getElementById('child_last_name').value,
          child_dob: document.getElementById('child_dob').value,
          entrance_date: document.getElementById('entrance_date').value,
          location: document.getElementById('location').value,
          program_cost: document.getElementById('program_cost').value,
          
          // Infant details
          feeding_takes_bottle: getRadioValue('feeding_takes_bottle'),
          feeding_bottle_warmed: getRadioValue('feeding_bottle_warmed'),
          feeding_holds_bottle: getRadioValue('feeding_holds_bottle'),
          feeding_feeds_self: getRadioValue('feeding_feeds_self'),
          feeding_food_types: JSON.stringify(feeding_food_types),
          feeding_formula_type: document.getElementById('feeding_formula_type').value,
          feeding_formula_amount: document.getElementById('feeding_formula_amount').value,
          feeding_pacifier: getRadioValue('feeding_pacifier'),
          feeding_pacifier_when: document.getElementById('feeding_pacifier_when').value,
          feeding_food_likes: document.getElementById('feeding_food_likes').value,
          feeding_food_dislikes: document.getElementById('feeding_food_dislikes').value,
          feeding_solid_food_instructions: document.getElementById('feeding_solid_food_instructions').value,
          
          emergency_name: document.getElementById('emergency_name').value,
          emergency_relation: document.getElementById('emergency_relation').value,
          emergency_phone: document.getElementById('emergency_phone').value,
          
          physician_name: document.getElementById('physician_name').value,
          physician_phone: document.getElementById('physician_phone').value,
          medical_allergies: document.getElementById('medical_allergies').value,
          
          // Topical Prep
          external_preparations_permissions: JSON.stringify(ext_permissions),
          
          household_size: document.getElementById('household_size').value,
          monthly_income: document.getElementById('monthly_income').value,
          ssn: document.getElementById('ssn').value,
          signature: document.getElementById('sigText').value
        };
        
        btnNext.innerText = 'Processing...';
        btnNext.disabled = true;
        
        try {
          const res = await fetch('https://iro.bullmight.com/api/kidazzle/intake', {
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
            
            document.getElementById('intakeDownloadBtn').href = 'https://iro.bullmight.com' + result.downloadUrl;
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
      let prevStep = currentStep - 1;
      if (prevStep === 3 && !isInfantMode) {
        prevStep = 2;
      }
      if (currentStep > 1) {
        currentStep = prevStep;
        updateProgress();
      }
    });

    // Signature drawing event handlers
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
  })();
</script>

<?php
get_footer();
