# Kidazzle WordPress Theme Setup

## Prerequisites
- WordPress installation (v6.0+)
- Node.js & NPM (for development/building CSS)
- ACF Pro (Recommended for structured content)

## Installation

1. **Copy Theme Folder**: Move the `kidazzle` folder to your WordPress themes directory: `/wp-content/themes/`.
2. **Activate Theme**: Go to **Appearance > Themes** in the WordPress Dashboard and activate "Kidazzle".
3. **Install Plugins**:
   - The theme may require *Advanced Custom Fields (ACF)* for certain page templates.
   - *TGM Plugin Activation* code is present but currently commented out in `functions.php`.

## Development

This theme uses **Tailwind CSS**. To make style changes:

1. Navigate to the theme directory:
   ```bash
   cd wp-content/themes/kidazzle
   ```
2. Install dependencies:
   ```bash
   npm install
   ```
3. Start development server (watches for changes):
   ```bash
   npm run dev
   ```
4. Build for production:
   ```bash
   npm run build
   ```

## Configuration

### Customizer
Go to **Appearance > Customize** to manage:
- **Header**: Logo width, top bar text, CTA buttons.
- **Footer**: Social links, contact info, copyright text.
- **Homepage**: Hero section, stats, program wizard, and other modular sections.
- **Locations**: Settings for the locations archive page.

### Menus
Set up your menus in **Appearance > Menus**:
- **Primary Menu**: Main header navigation.
- **Footer Menu**: Links in the footer area.
- **Mobile Menu**: (Optional) specific menu for mobile devices if different from primary.

## Key Templates
- `front-page.php`: Homepage layout (requires Customizer setup).
- `page-programs.php`: Programs archive.
- `page-locations.php`: Locations grid.
- `page-curriculum.php`: Curriculum information.
