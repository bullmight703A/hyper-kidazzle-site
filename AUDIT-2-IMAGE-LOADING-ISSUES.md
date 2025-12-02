# Audit 2: Image & Media Loading Issues Report

**Date**: 2025-11-26
**Focus**: Homepage images, videos, and icons not loading properly
**Reported Issue**: Bento box (Prismpath section) and other homepage images not loading

---

## Executive Summary

✅ **Bento Box (Prismpath Section)**: NO ISSUES FOUND - Correctly uses Font Awesome icons, not images
🔴 **Hero Video**: Missing file
🔴 **Schedule Tab Images**: Missing because Programs lack featured images
🟢 **Font Awesome Icons**: All working correctly
🟢 **Locations Section**: No images needed (uses emojis)

---

## Detailed Findings

### 1. Bento Box (Prismpath Section) - ✅ NO ISSUES

**User Report**: "bento box don't have the proper image loading"
**Investigation**: The Prismpath section (bento grid) is working CORRECTLY.

**File**: `template-parts/home/prismpath-expertise.php`

**Finding**: Both the HTML reference and WordPress implementation use **Font Awesome icons** (not images) for the bento box cards:
- Card 1 (Blue): `<i class="fa-solid fa-shapes">` + `<i class="fa-brands fa-connectdevelop">`
- Card 2 (Red): `<i class="fa-solid fa-heart">` + `<i class="fa-solid fa-user-check">`
- Card 3 (Green): `<i class="fa-solid fa-apple-whole">`
- Card 4 (White): `<i class="fa-solid fa-shield-halved">`

**HTML Reference** (line 216-256 in `html-samples/homepage.html`):
```html
<section id="prismpath" class="py-24 px-4 lg:px-6 bg-white relative overflow-hidden">
  <!-- Uses Font Awesome icons, NO images -->
  <div class="md:col-span-7 bg-chroma-blue...">
    <i class="fa-solid fa-shapes"></i>
    <i class="fa-brands fa-connectdevelop"></i>
  </div>
</section>
```

**WordPress Implementation** (same structure):
```php
<div class="absolute top-0 right-0 p-10 opacity-10 text-8xl">
  <i class="fa-solid fa-shapes"></i>
</div>
```

**Status**: ✅ **CORRECT** - No images needed or expected

---

### 2. Hero Video - 🔴 CRITICAL ISSUE

**File**: `template-parts/home/hero.php` (line 64)
**Issue**: Missing video file

**Code**:
```php
<video autoplay muted playsinline loop class="w-full h-full object-cover">
  <source src="<?php echo get_template_directory_uri(); ?>/assets/video/hero-classroom.mp4" type="video/mp4" />
</video>
```

**Expected Path**: `/chroma-excellence-theme/assets/video/hero-classroom.mp4`
**Actual Status**: ❌ File does not exist

**HTML Reference**: Uses `hero-classroom.mp4` (line 173-175)

**Impact**: Video section displays browser default video placeholder or nothing

**Fix Required**:
1. **Option A**: Upload `hero-classroom.mp4` to `/assets/video/` directory (2 minutes)
2. **Option B**: Use featured image from homepage settings instead (2 minutes)

**Priority**: CRITICAL (already documented in AUDIT-2-FINAL-ACCURATE-REPORT.md)

---

### 3. Schedule Tab Images - 🔴 CRITICAL ISSUE

**File**: `template-parts/home/schedule-tabs.php` (lines 64-69)
**Issue**: Program posts don't have featured images set

**Code**:
```php
<div class="rounded-[3rem] overflow-hidden shadow-2xl h-[320px] md:h-[400px] bg-chroma-blueLight">
  <?php if ( ! empty( $track['image'] ) ) : ?>
    <img src="<?php echo esc_url( $track['image'] ); ?>" alt="<?php echo esc_attr( $track['title'] ); ?>" class="w-full h-full object-cover" />
  <?php else : ?>
    <div class="w-full h-full flex items-center justify-center text-chroma-blueDark/60 text-5xl">
      <i class="fa-solid fa-image"></i> <!-- PLACEHOLDER SHOWN -->
    </div>
  <?php endif; ?>
</div>
```

**Root Cause**: Images come from Program post featured images
**Source**: `inc/acf-homepage.php` (line 96)
```php
// Get featured image URL
$image_url = get_the_post_thumbnail_url( $post_id, 'large' );
```

**HTML Reference**: Each schedule tab has classroom photos (lines 384, 419, 454):
- Infant tab: `photo-1555252333-9f8e92e65df9` (infant classroom)
- Toddler tab: `photo-1503454537195-1dcabb73ffb9` (toddler classroom)
- Pre-K tab: `photo-1503919545874-86c1d9a04595` (pre-k classroom)

**Current Status**: Programs exist but have NO featured images, so placeholder icons show instead

**Impact**: Schedule tabs show placeholder icon (`fa-image`) instead of classroom photos

**Fix Required**:
1. Set featured images for each Program post:
   - Infant Care program → Infant classroom photo
   - Toddler Program → Toddler classroom photo
   - Preschool Program → Preschool classroom photo
   - Pre-K Prep → Pre-K classroom photo
   - GA Pre-K → Pre-K classroom photo
   - After-School → After-school room photo

2. Image Requirements:
   - Recommended size: 800x800px (square or 4:3 ratio)
   - Format: JPG or PNG
   - Quality: High resolution for display at 400px height

**Priority**: CRITICAL (affects user experience significantly)

**Time Estimate**: 10-15 minutes (upload 3-6 images, assign to programs)

---

### 4. Font Awesome Icons - ✅ NO ISSUES

**Version**: Font Awesome 6.4.0 (Free)
**Enqueued**: `functions.php` line ~50

**Icons Used on Homepage**:
- Hero: `fa-graduation-cap`
- Prismpath: `fa-shapes`, `fa-connectdevelop`, `fa-heart`, `fa-user-check`, `fa-apple-whole`, `fa-shield-halved`
- Stats: Various icons per stat
- Programs: `fa-baby`, `fa-child`, `fa-school`, etc.
- Schedule: Timeline badges (text-based)
- Locations: Emoji-based (no icons)
- FAQ: `fa-chevron-down`

**Status**: ✅ All icons loading correctly

---

### 5. Locations Section - ✅ NO ISSUES

**File**: `template-parts/home/locations-preview.php`
**Design**: Uses **emojis** for region headers (not images):
- 🍑 Cobb County
- 🌳 Gwinnett County
- 🏙️ North Metro
- ⛰️ South Metro

**HTML Reference**: Same design (line 470-475)

**Status**: ✅ **CORRECT** - No images needed

---

## Summary Table

| Section | Expected Media | Current Status | Issue | Priority |
|---------|---------------|----------------|-------|----------|
| Bento Box (Prismpath) | Font Awesome Icons | ✅ Working | None | N/A |
| Hero Section | Video file | ❌ Missing | File doesn't exist | 🔴 Critical |
| Schedule Tabs | 3-6 classroom photos | ❌ Missing | Programs lack featured images | 🔴 Critical |
| Font Awesome Icons | Icons | ✅ Working | None | N/A |
| Locations | Emojis | ✅ Working | None | N/A |

---

## Root Cause Analysis

### Why Images Appear "Not Loading"

1. **Hero Video**: File path points to non-existent video file → Browser shows nothing or default player
2. **Schedule Tabs**: Code checks `if ( ! empty( $track['image'] ) )` → Returns false → Shows placeholder icon
3. **Bento Box**: **User confusion** - This section correctly uses icons, not images (per design)

### Image Loading Architecture

The WordPress theme uses multiple image sources:
- **Featured Images** → Schedule tabs (from Program posts)
- **Theme Assets** → Hero video (from `/assets/video/`)
- **Font Awesome CDN** → All icons (working)
- **Emojis** → Locations section (working)
- **No Images** → Bento box (correct - uses icons)

---

## Recommended Fixes

### Fix 1: Hero Video (2 minutes)

**Option A - Upload Video**:
```bash
# Upload hero-classroom.mp4 to:
/chroma-excellence-theme/assets/video/hero-classroom.mp4
```

**Option B - Use Featured Image**:
Edit `template-parts/home/hero.php` line 64:
```php
<?php
$hero_video = get_template_directory_uri() . '/assets/video/hero-classroom.mp4';
$hero_image = get_theme_mod('chroma_home_hero_image');

if (file_exists(get_template_directory() . '/assets/video/hero-classroom.mp4')) : ?>
  <video autoplay muted playsinline loop class="w-full h-full object-cover">
    <source src="<?php echo esc_url($hero_video); ?>" type="video/mp4" />
  </video>
<?php elseif ($hero_image) : ?>
  <img src="<?php echo esc_url($hero_image); ?>" class="w-full h-full object-cover" alt="Chroma classroom" />
<?php endif; ?>
```

### Fix 2: Schedule Tab Images (10-15 minutes)

**Step 1**: Obtain classroom photos (use Unsplash or client photos):
- Infant classroom (800x800px)
- Toddler classroom (800x800px)
- Preschool classroom (800x800px)
- Pre-K classroom (800x800px)
- After-school room (800x800px)

**Step 2**: Upload as featured images:
1. Go to WordPress Admin → Programs → Edit each program
2. Set Featured Image for each program post
3. Recommended images:
   - https://unsplash.com/photos/photo-1555252333-9f8e92e65df9 (Infant)
   - https://unsplash.com/photos/photo-1503454537195-1dcabb73ffb9 (Toddler)
   - https://unsplash.com/photos/photo-1503919545874-86c1d9a04595 (Pre-K)

**Step 3**: Verify images appear in schedule tabs

### No Fix Needed: Bento Box (0 minutes)

The Prismpath bento grid is **working correctly**. It uses Font Awesome icons by design, matching the HTML reference exactly. No images are missing or needed.

---

## Testing Checklist

After applying fixes:

- [ ] Hero video plays on page load (or featured image displays)
- [ ] Schedule tabs show classroom photos (not placeholder icons)
- [ ] All Font Awesome icons render properly
- [ ] No broken image placeholders anywhere on homepage
- [ ] Images are high quality and properly sized
- [ ] Images load quickly (< 1 second)

---

## Additional Notes

### Clarification on "Bento Box"

The user reported that the "bento box don't have the proper image loading." However:

1. **HTML Reference**: Uses Font Awesome icons only (no images)
2. **WordPress Theme**: Uses same Font Awesome icons (matching reference)
3. **Design Intent**: Bento cards use colored backgrounds + icons, not photos

**Conclusion**: If the user expected images in the bento box, this is a **design clarification issue**, not a technical bug. The WordPress implementation is **correct per the HTML reference**.

If images ARE desired in the bento box (design change), that would require:
- Updating the data structure in `chroma_home_prismpath_panels()`
- Adding image fields to the Customizer or ACF
- Modifying `prismpath-expertise.php` template to display images

---

## Files Modified (if fixes applied)

- `template-parts/home/hero.php` - Hero video/image fallback
- Various Program posts - Featured images added

---

## Related Audit Reports

- **AUDIT-2-FINAL-ACCURATE-REPORT.md** - Homepage issues (documents hero video)
- **AUDIT-2-MEDIA-ASSETS.md** - Videos, photos, icons audit
- **AUDIT-2-FINAL-COMPREHENSIVE-SUMMARY.md** - Complete theme audit

---

**End of Report**
