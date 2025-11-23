🎯 Overview

This repository contains the custom WordPress theme for Chroma Early Learning Academy, built for:

20+ locations

Multiple programs (Infants → After School)

A warm, premium brand experience

Fast editing via ACF Flexible Content

SEO, local SEO, and structured data

Tailwind CSS design system

Interactive curriculum radar, program wizard, and tour funnels

The theme is fully modular and designed for long-term scalability as Chroma expands across Metro Atlanta and beyond.

🧱 Tech Stack
Component	Choice	Reason
WordPress (Classic Theme)	Custom theme	Maximum control, scalability
ACF Pro	Options, CPT fields, Flexible Content	Marketer-friendly content management
Tailwind CSS	dist/app.css	Clean design system, rapid development
JavaScript	Vanilla JS + Chart.js	Curriculum interactivity
Bundler	Vite / NPM scripts	Tailwind + JS compilation
SEO Plugin	SearchAtlas / Yoast / RankMath	Canonical, sitemap, meta handling
📁 Folder Structure
chroma-ela/
  style.css
  functions.php
  front-page.php
  index.php
  page.php
  single.php
  single-program.php
  single-location.php
  single-team.php
  page-careers.php
  page-about.php

  /inc
    setup.php
    enqueue.php
    nav-menus.php
    cpt-program.php
    cpt-location.php
    cpt-team.php
    acf.php
    seo.php
    patterns.php

  /template-parts
    /hero
      home-hero.php
    /home
      programs.php
      curriculum.php
      locations-strip.php
      reviews.php
      about.php
      careers.php
      tour-cta.php
    /program
      header.php
      overview.php
      curriculum-focus.php
    /location
      header.php
      details.php
      map.php

  /resources
    /css
      app.css          // Tailwind entry
    /js
      app.js           // Main JS bundle

  /dist
    app.css            // Compiled Tailwind
    app.js             // Bundled JS

⚙️ Theme Initialization
functions.php

Loads all logic:

require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/nav-menus.php';
require get_template_directory() . '/inc/cpt-program.php';
require get_template_directory() . '/inc/cpt-location.php';
require get_template_directory() . '/inc/cpt-team.php';
require get_template_directory() . '/inc/acf.php';
require get_template_directory() . '/inc/seo.php';
require get_template_directory() . '/inc/patterns.php';

🏷️ Custom Post Types (CPTs)
Programs (program)

Age range

Tagline

Curriculum focus (Physical, Emotional, Social, Academic, Creative)

Features (repeater)

Offered locations (relationship)

SEO fields

Locations (location)

Address + phone

Hours

Ages served

Enrollment status (Now enrolling / Waitlist / Coming soon)

Google Maps embed

Programs served

Gallery

Team (team)

Role

Credentials

Location(s) served

⚙️ ACF: Content Model
1️⃣ Global Options

Under: Chroma Settings → ACF Options Page

Fields:

Logo (light/dark)

Phone & email

Corporate address

Header CTA text + link

Footer text

Social media links

Default meta description

OG image

Analytics IDs (GA4, Meta Pixel)

2️⃣ Front Page (Flexible Content)

Field group: Homepage Layout

Modules:

hero_warm

programs_wizard

curriculum_radar (interactive)

schedule_strip

locations_grid

reviews_strip

about_teaser

careers_teaser

tour_cta

faq_strip

Each module has its own subfields → loaded into template parts.

3️⃣ Program Fields

Age range

Tagline

Curriculum focus weighting

Features

Offered locations

Program photo/video

Meta fields

4️⃣ Locations Fields

Address / city / state / zip

County

Phone / email

Hours

Programs offered

Google Maps embed

Enrollment status

Hero image

Gallery

Schema overrides

🧩 Template System
front-page.php

Loops ACF Flexible Content:

if ( have_rows('home_layout') ):
  while ( have_rows('home_layout') ): the_row();
  
    if ( get_row_layout() == 'hero_warm' ):
      get_template_part('template-parts/hero/home-hero');

    elseif ( get_row_layout() == 'curriculum_radar' ):
      get_template_part('template-parts/home/curriculum');

    // etc...

  endwhile;
endif;


This makes homepage modular, reorderable, and marketer-editable.

🎨 Styling (Tailwind)
tailwind.config.js

Brand palette:

brand.cream, brand.ink

chroma.peach, chroma.mint, chroma.lilac, chroma.sun

Soft shadows

Rounded cards

Family-friendly shapes

Responsive breakpoints

Entry file:

resources/css/app.css

@tailwind base;
@tailwind components;
@tailwind utilities;

🧠 JavaScript

resources/js/app.js contains:

Navigation toggles (mobile drawer)

Scroll reveal utilities

Programs wizard logic

Timeline/schedule logic

Curriculum radar (Chart.js)

Marquee enhancements

Review slider controls

Bundled → dist/app.js.

🔍 SEO & Schema
Handled via:

add_theme_support('title-tag')

SEO plugin (canonical, sitemap, meta)

Custom schema in /inc/seo.php

Schema:
Global (Home)

@type: ChildCare

Name, URL, logo

SameAs social

AreaServed: Atlanta

Description

Location (single-location.php)

@type: ChildCare + LocalBusiness

Full address

Phone

Hours

Geo coordinates (optional)

Map link

Enrollment status

Program (optional)

EducationalOccupationalProgram

Age band

Description

🚀 Build Instructions
Install dependencies:
npm install

Start Tailwind watcher:
npm run dev

Build for production:
npm run build


Compiles into /dist.

📦 Deployment

Upload theme folder → Activate → Configure:

Add Programs (Infant, Toddler, Preschool, GA Pre-K)

Add Locations (all 19 campuses)

Add Team Members

Configure Chroma Settings (logo, phone, CTA)

Add homepage sections using ACF Flexible Content

🧪 Optional Enhancements

Multi-language (Polylang / WPML)

Waitlist / Enrollment form integration

AI assistant widget (lead pre-qualification)

Blog for parent education

Structured location sitemap

📝 License

Private proprietary theme for Chroma Early Learning Academy.

📞 Support / Next Steps

If you add new locations, programs, or sub-brands, the theme structure already supports:

Unlimited CPT entries

Unlimited new homepage layouts

Reusable template parts

Custom schema
