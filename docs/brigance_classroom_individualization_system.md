# 🎓 Technical Spec & Implementation Breakdown: Brigance Classroom Individualization Engine

**System Architecture & Age-Structured Assessment Integration Specifications**  
**LOCATION SCOPE:** **Summit Center ONLY (Pilot / Testing Phase)**  
**Target Classrooms (Summit Location):** Summit Infant, Summit Toddler (13-24m), Summit 2-Year-Old, Summit 3-Year-Old, Summit Pre-K (4yo)  
**Integration Stack:** Teacher Web Form / Mobile Questionnaire → Brigance Skill Matrix Scorer → AI Lesson Plan Dispatcher (`kidazzle_lesson_plan_weekly_dispatch.js`) → Summit Classroom Weekly Curriculum Reports

---

## 🧪 1. Pilot & Testing Phase Scope (Summit Location)

> [!IMPORTANT]
> **TESTING PHASE CONSTRAINT:** Lesson plan generation, Brigance questionnaire linkage, and individualization prompt enrichment are currently restricted exclusively to the **Summit Location** (`location_id: "summit"`). 
> All other locations remain on standard static curriculum templates until Summit pilot testing achieves 100% verification.

### Pilot Key Capabilities:
1. **Summit Age-Structured Teacher Screener:** Enables Summit teachers to conduct fast, 3-minute developmental assessments per child across 5 key domains.
2. **Dynamic Skill Gap Identification:** Identifies specific developmental milestones (Emerging, Mastery, Needs Support) for Summit students.
3. **Summit AI Lesson Plan Enrichment:** Feeds Summit student skill profiles into the Anthropic/Gemini Lesson Plan Prompt Engine via the Summit n8n Gold Standard Gateway (`bullmight-n8n-u46728.vm.elestio.app`).
4. **Parent Progress Transparency:** Generates automated weekly parent updates for Summit families demonstrating how classroom activities directly target their child's specific developmental goals.

---

## 📐 2. Brigance Developmental Domains by Age Group (Summit Roster)

The questionnaire is partitioned into **5 Core Developmental Domains**, customized per age group for Summit classrooms:

```
+-------------------------------------------------------------------------+
|                  BRIGANCE DEVELOPMENTAL DOMAINS                         |
+-------------------+--------------------+--------------------+-----------+
| 1. Physical /     | 2. Language &      | 3. Cognitive /     | 4. Self-  |
|    Motor          |    Communication   |    Literacy        |    Help   |
+-------------------+--------------------+--------------------+-----------+
|                   5. Social-Emotional / Behavior                    |
+-------------------------------------------------------------------------+
```

### Age Group Taxonomies & Target Milestones:

#### A. Summit Infant Room (0 – 12 Months)
- **Physical/Motor:** Tummy time head lift (90°), rolling over, sitting unassisted, pincer grasp development.
- **Language:** Cooing/babbling, responds to name vocalizations, turns head toward familiar voices.
- **Cognitive:** Object permanence tracking, reaches for dangling toys, cause-and-effect rattle play.
- **Self-Help/Social:** Holds bottle/cup assistance, smiles responsively, self-soothing behaviors.

#### B. Summit Toddler Room (13 – 24 Months)
- **Physical/Motor:** Walking independently, climbing stairs with assistance, stacking 3–4 blocks.
- **Language:** Single words (10–20 words), points to requested objects/pictures, follows 1-step directions.
- **Cognitive:** Shape sorting (circle/square), imitates household gestures, explores container fill-and-dump.
- **Social/Self-Help:** Uses spoon with minimal spills, waves bye-bye, parallel play with peers.

#### C. Summit 2-Year-Old Room
- **Physical/Motor:** Jumping with both feet, holding crayon with fingers (palmar grasp), threading large beads.
- **Language:** 2–3 word phrases, names common body parts, asks "what's that?".
- **Cognitive:** Primary color recognition (Red, Blue, Yellow), matching identical objects, 3-piece puzzle completion.
- **Social/Self-Help:** Expresses emotions verbally ("happy/sad"), assists with hand washing, basic turn-taking.

#### D. Summit 3-Year-Old Room
- **Physical/Motor:** Standing on one foot (3s), using child scissors (snapping paper), drawing a circle.
- **Language:** Complete sentences (4–5 words), understands spatial prepositions (in, on, under).
- **Cognitive:** Counting 1–5 objects with 1-to-1 correspondence, pattern recognition (AB AB).
- **Social/Self-Help:** Dressing assistance (pulls up pants), cooperative play in sensory centers, identifying feelings.

#### E. Summit Pre-K / 4-Year-Old Room
- **Physical/Motor:** Hopping on one foot, tripod pencil grip, cutting along straight lines.
- **Language:** Phonemic awareness (rhyming words), retelling simple story sequences, letter recognition (10+ letters).
- **Cognitive:** Counting to 10+, shape identification (triangle, rectangle, oval), classification by multiple attributes.
- **Social/Self-Help:** Independent bathroom routine, conflict resolution with words, collaborative group project play.

---

## 🔄 3. End-to-End System Data Flow (Summit Pilot)

```mermaid
graph TD
    A["Summit Teacher Completes Brigance Screener"] -->|Submit JSON (location: summit)| B["Brigance Scoring Engine"]
    B -->|Calculate Skill Levels| C["Update Summit Roster DB"]
    C --> D["Summit Weekly Lesson Plan Cron Dispatcher"]
    D -->|Inject Summit Class Roster Skill Gaps| E["Anthropic / Gemini AI Prompt Engine (Summit n8n)"]
    E -->|Generate Individualized Curriculum| F["Summit Classroom Master Lesson Plan"]
    F --> G["Teacher Portal Display & PDF Download"]
    F --> H["Summit Parent Individualization Email"]
```

---

## 🛠️ 4. AI Lesson Plan Prompt Injection Schema (Summit Sandbox)

When the weekly lesson plan generator executes (`kidazzle_lesson_plan_weekly_dispatch.js`), it verifies `location === 'summit'` during the testing phase and injects the following payload:

```json
{
  "testing_phase": true,
  "location_id": "summit",
  "location_name": "KIDazzle Summit Location",
  "classroom": "Summit 2 Year Old Room",
  "week_of": "2026-07-27",
  "theme": "Water Wonders & Summer Science",
  "classroom_brigance_summary": {
    "total_students": 12,
    "focus_areas": [
      {
        "domain": "Fine Motor",
        "status": "Emerging",
        "target_students_count": 4,
        "recommended_activity": "Large bead stringing and sponge squeeze water play"
      },
      {
        "domain": "Language - Prepositions",
        "status": "Needs Support",
        "target_students_count": 5,
        "recommended_activity": "Under the sea obstacle course (in, on, under, behind)"
      }
    ]
  }
}
```

---

## 📋 5. Teacher Screener Location Guard (`page-brigance-screener.php`)

```javascript
// Testing Phase Location Guard
const ACTIVE_TESTING_LOCATION = "summit";

function validateScreenerSubmission(formData) {
  if (formData.location_id !== ACTIVE_TESTING_LOCATION) {
    console.warn(`[Pilot Guard] Location ${formData.location_id} is currently locked. Individualized AI Lesson Plans are active ONLY for Summit location during testing phase.`);
    return {
      status: "pilot_locked",
      message: "Brigance AI Lesson Plan individualization is currently in Testing Phase for SUMMIT LOCATION ONLY."
    };
  }
  return submitBriganceAssessment(formData);
}
```

---

## 🛡️ 6. Verification & Pilot Testing Checklist

- [x] Location filter set to `summit` strictly during testing phase.
- [ ] Summit teacher form validates all age-appropriate questions before saving.
- [ ] Summit student profiles updated in under 500ms.
- [ ] Weekly lesson plan dispatcher executes successfully for Summit classrooms via Summit n8n gateway (`bullmight-n8n-u46728.vm.elestio.app`).
- [ ] Non-Summit locations remain safely bypassed from testing phase pipelines.
