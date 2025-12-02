# Audit 2: HTML to WordPress File Mapping

This document provides exact file mappings between HTML reference files and WordPress template files.

---

## PAGE TEMPLATE MAPPINGS

### 1. Homepage
```
HTML Reference:     html-samples/homepage.html (2,044 lines)
WordPress Template: chroma-excellence-theme/front-page.php

Template Parts Used:
├── template-parts/home/hero.php
├── template-parts/home/prismpath-expertise.php
├── template-parts/home/stats-strip.php
├── template-parts/home/programs-wizard.php
├── template-parts/home/curriculum-chart.php
├── template-parts/home/schedule-tabs.php
├── template-parts/home/parent-reviews.php (not in HTML reference)
├── template-parts/home/locations-preview.php
├── template-parts/home/tour-cta.php
└── template-parts/home/faq.php
```

**HTML Sections to Match:**
- Lines 136-190: Hero section
- Lines 192-240: Prismpath expertise (bento grid)
- Lines 242-261: Stats strip
- Lines 263-XXX: Programs wizard
- Lines XXX-XXX: Curriculum radar chart
- Lines XXX-XXX: Schedule tabs
- Lines XXX-XXX: Locations preview
- Lines XXX-XXX: Tour CTA
- Lines XXX-XXX: FAQ section

---

### 2. About Page
```
HTML Reference:     html-samples/about.html (376 lines)
WordPress Template: chroma-excellence-theme/page-about.php (needs verification)
Possible Alternative: page.php with conditional content
```

**HTML Sections to Match:**
- Hero with title
- Lines 130-138: Mission/Purpose statement (blue background)
- Lines 141-178: "Our Story" section + stats grid
- "The Chroma Standard" section
- Leadership team grid
- "Giving Back" community section

**Required Anchor IDs:**
- #our-story
- #chroma-standard
- #leadership
- #giving-back

---

### 3. Programs Archive
```
HTML Reference:     html-samples/programs-archive.html (328 lines)
WordPress Template: chroma-excellence-theme/archive-program.php
```

**Key Elements:**
- Hero section
- Program filtering/navigation
- Program card grid
- Age range indicators
- Color-coded program cards

---

### 4. Programs Single
```
HTML Reference:     html-samples/programs-single.html (196 lines)
WordPress Template: chroma-excellence-theme/single-program.php
```

**Key Elements:**
- Hero with program color
- Age range badge
- Program overview
- Daily schedule
- Curriculum highlights
- Enrollment CTA
- Related programs

---

### 5. Locations Archive
```
HTML Reference:     html-samples/locations-archive.html (479 lines)
WordPress Template: chroma-excellence-theme/page-locations.php
```

**Key Elements:**
- Interactive map (if present)
- Location card grid
- Filtering by city/area
- "Find Nearest Location" feature
- CTA buttons

---

### 6. Locations Single
```
HTML Reference:     html-samples/locations-single.html (485 lines)
WordPress Template: chroma-excellence-theme/single-location.php
```

**Key Elements:**
- Hero section with location image
- Address and hours
- Campus features grid
- Director's welcome (if present)
- Programs at this location
- Map embed
- Tour booking section
- School pickup information

**WordPress Enhancements (not in HTML):**
- Image carousel (recently added)
- Virtual tour embed (recently added)

---

### 7. Contact Page
```
HTML Reference:     html-samples/contact.html (180 lines)
WordPress Template: chroma-excellence-theme/page-contact.php (needs verification)
```

**Key Elements:**
- Hero section
- Contact form
- Office locations
- Tour booking section (ID: #tour)
- Map
- Contact information
- Social links

---

### 8. Parents Page
```
HTML Reference:     html-samples/parents.html (383 lines)
WordPress Template: chroma-excellence-theme/page-parents.php (needs verification)
Possible Alternative: Custom page template
```

**Key Elements:**
- Parent resources
- Parent portal login
- Testimonials
- FAQ for parents
- Communication tools info

---

### 9. Curriculum Page
```
HTML Reference:     html-samples/curriculum.html (251 lines)
WordPress Template: chroma-excellence-theme/page-curriculum.php (needs verification)
```

**Key Elements:**
- Curriculum overview
- Developmental domains
- Teaching approach
- Assessment methods
- Sample activities

---

### 10. Careers Page
```
HTML Reference:     html-samples/careers.html (130 lines)
WordPress Template: chroma-excellence-theme/page-careers.php (needs verification)
```

**Key Elements:**
- Careers hero
- Why work here
- Open positions
- Application form/link
- Benefits overview

---

### 11. Employers Page
```
HTML Reference:     html-samples/employers.html (129 lines)
WordPress Template: chroma-excellence-theme/page-employers.php (needs verification)
```

**Key Elements:**
- Employer partnerships
- Corporate benefits
- Enrollment options
- Contact for businesses

---

### 12. Privacy Policy
```
HTML Reference:     html-samples/privacy.html (67 lines)
WordPress Template: chroma-excellence-theme/page-privacy.php (needs verification)
```

**Key Elements:**
- Legal content
- Privacy sections
- Contact information

---

### 13. Newsroom/Blog Archive
```
HTML Reference:     html-samples/newsroom-sample.html (89 lines)
WordPress Template: chroma-excellence-theme/archive.php
Alternative:        chroma-excellence-theme/archive-post.php
```

**Key Elements:**
- Blog post grid
- Featured post
- Categories/filters
- Pagination

---

### 14. Blog Post Single
```
HTML Reference:     html-samples/story-single-sample.html (122 lines)
WordPress Template: chroma-excellence-theme/single.php
Alternative:        chroma-excellence-theme/single-post.php
```

**Key Elements:**
- Article hero image
- Post content
- Author info
- Share buttons
- Related posts
- Comments (if enabled)

---

### 15. 404 Error Page
```
HTML Reference:     html-samples/404.html (42 lines)
WordPress Template: chroma-excellence-theme/404.php
```

**Key Elements:**
- Error message
- Search functionality
- Helpful links
- CTA to homepage

---

### 16. Acquisitions Page
```
HTML Reference:     html-samples/acquisitions.html (89 lines)
WordPress Template: chroma-excellence-theme/page-acquisitions.php (needs verification)
```

**Key Elements:**
- Acquisition information
- Form or contact info
- FAQ section

---

## GLOBAL TEMPLATES

### Header
```
HTML Reference:     Inline in each .html file (lines 83-133 typically)
WordPress Template: chroma-excellence-theme/header.php
```

**Key Elements:**
- Logo and brand
- Desktop navigation
- Mobile menu
- Book a Tour CTA button

**HTML Navigation Links:**
- Programs
- Prismpath™
- Curriculum
- A Day in the Life
- Locations
- FAQ

**WordPress Navigation Links (Current):**
- Programs
- About Us (with dropdown: Our Story, The Chroma Standard, Leadership, Giving Back)
- Locations
- Contact

**DISCREPANCY:** Navigation structure completely different!

---

### Footer
```
HTML Reference:     Inline at bottom of each .html file
WordPress Template: chroma-excellence-theme/footer.php
```

**Key Elements:**
- Logo and tagline
- Quick Links column
- Contact column (phone, email, address)
- Social media column
- Legal links (Privacy, Terms)

**Recent WordPress Changes:**
- Made customizable via Customizer
- Added Twitter/X and YouTube support

---

## JAVASCRIPT FILES

### HTML Reference
```
Inline <script> tags in HTML files
- Programs wizard interaction
- Curriculum chart (Chart.js)
- Schedule tabs switching
- Mobile menu toggle
- Smooth scroll
```

### WordPress Implementation
```
File: chroma-excellence-theme/assets/js/main.js

Implemented:
- Mobile navigation toggle
- Mobile dropdown accordion
- Programs wizard (data-wizard-age)
- Curriculum chart (needs Chart.js verification)
- Schedule tabs
- Location carousel
- Parent reviews carousel

Recently Removed:
- Duplicate legacy code (lines 251-404 deleted)
```

**Action Required:**
- Verify Chart.js is enqueued in functions.php
- Compare wizard logic line-by-line
- Check tab switching animation timing

---

## CSS FILES

### HTML Reference
```
Uses: Tailwind CDN (inline config)
File: Inline <style> tags + Tailwind CDN
```

### WordPress Implementation
```
Source: chroma-excellence-theme/assets/css/input.css
Compiled: chroma-excellence-theme/assets/css/main.css
Config: chroma-excellence-theme/tailwind.config.js
Build: PostCSS via package.json
```

**Tailwind Config Comparison Needed:**
- Color palette (brand.ink, brand.cream, chroma.*)
- Font families (Outfit, Playfair Display)
- Border radius extensions (4xl, 5xl)
- Box shadow utilities (soft, card)
- Animation utilities

---

## HELPER FILES (WordPress Only)

These have no HTML equivalents but support dynamic content:

```
chroma-excellence-theme/inc/acf-homepage.php
├── chroma_home_hero()
├── chroma_home_stats()
├── chroma_home_program_wizard()
├── chroma_home_schedule_tracks() (pulls from Program CPT)
├── chroma_home_parent_reviews()
├── chroma_home_locations_preview()
├── chroma_home_faq()
└── Other helper functions

chroma-excellence-theme/inc/cpt-programs.php (Programs Custom Post Type)
chroma-excellence-theme/inc/cpt-locations.php (Locations Custom Post Type)
chroma-excellence-theme/inc/cpt-team.php (Team Members Custom Post Type)

chroma-excellence-theme/inc/customizer-home.php (Homepage Customizer settings)
chroma-excellence-theme/inc/customizer-header.php (Header Customizer settings)
chroma-excellence-theme/inc/customizer-footer.php (Footer Customizer settings)
```

---

## VERIFICATION CHECKLIST

Use this checklist to systematically verify each page:

### For Each Page:
- [ ] WordPress template file exists
- [ ] All HTML sections present in WordPress
- [ ] Section order matches HTML
- [ ] Headings match word-for-word
- [ ] Copy/content matches (or is intentionally different)
- [ ] CSS classes match
- [ ] Color usage matches
- [ ] Spacing/padding matches
- [ ] Responsive breakpoints match
- [ ] Animations present and match timing
- [ ] Interactive elements function correctly
- [ ] Images load and have correct aspect ratios
- [ ] CTAs link to correct destinations
- [ ] Anchor IDs present for smooth scroll

---

## FILES THAT NEED CREATION/VERIFICATION

Based on HTML references, these WordPress files may need to be created or verified:

**Potentially Missing:**
- [ ] page-about.php (or using page.php?)
- [ ] page-contact.php (or using page.php?)
- [ ] page-parents.php
- [ ] page-curriculum.php
- [ ] page-careers.php
- [ ] page-employers.php
- [ ] page-privacy.php (or using page.php?)
- [ ] page-acquisitions.php
- [ ] archive-post.php (or using archive.php?)

**Need to Check:**
- [ ] Does 404.php match 404.html?
- [ ] Does single.php match story-single-sample.html?
- [ ] Are all template parts in template-parts/home/ complete?

---

## RECOMMENDED AUDIT PROCESS

1. **Start with Homepage:** Most complex, sets the standard
2. **Verify Global Elements:** Header and Footer affect all pages
3. **Single Templates:** Programs and Locations (high traffic)
4. **Archive Templates:** Programs and Locations listings
5. **Utility Pages:** About, Contact, Parents
6. **Marketing Pages:** Careers, Employers, Acquisitions
7. **Blog/News:** Archive and single post templates
8. **Error Pages:** 404

For each page:
1. Open HTML reference in browser
2. Open WordPress page in browser
3. Compare side-by-side visually
4. Inspect HTML structure with DevTools
5. Document differences
6. Create fix list with line numbers
7. Implement fixes
8. Re-test

---

**END OF FILE MAPPING**
