document.addEventListener('DOMContentLoaded', function () {
    // --- Mobile Menu Toggle ---
    const menuButton = document.querySelector('button[aria-label="Open Menu"]');
    const closeButton = document.querySelector('button[aria-label="Close Menu"]');
    const mobileMenu = document.getElementById('mobile-menu');

    // Since the button toggles between icons, we might have a single button or two.
    // The React code uses a single button state. Let's assume we implement a single button in PHP.
    const toggleButton = document.getElementById('mobile-menu-toggle');

    if (toggleButton && mobileMenu) {
        toggleButton.addEventListener('click', function () {
            const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true';
            toggleButton.setAttribute('aria-expanded', !isExpanded);
            toggleButton.setAttribute('aria-label', !isExpanded ? 'Close Menu' : 'Open Menu');

            if (!isExpanded) {
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('block');
                // Icon switching logic (if using SVGs inline, toggle classes)
                document.getElementById('icon-menu').classList.add('hidden');
                document.getElementById('icon-close').classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('block');
                document.getElementById('icon-menu').classList.remove('hidden');
                document.getElementById('icon-close').classList.add('hidden');
            }
        });
    }

    // --- Sticky Header ---
    const nav = document.querySelector('nav[role="navigation"]');
    if (nav) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 20) {
                nav.classList.add('shadow-lg', 'py-2');
                nav.classList.remove('py-4');
            } else {
                nav.classList.remove('shadow-lg', 'py-2');
                nav.classList.add('py-4');
            }
        });
    }

    // --- Growth Journey Tabs (Home) ---
    const tabButtons = document.querySelectorAll('[role="tab"]');
    const tabPanels = document.querySelectorAll('[role="tabpanel"]'); // We might need to adjust markup to use tabpanels
    // Actually, the React code updates state `activeStage`. We need to replicate this.
    // We will assume the PHP outputs all stages but hides them, or we use data attributes.

    // Let's assume we output all 4 stages in the HTML with IDs like `stage-infants`, `stage-toddlers`, etc.
    // and only show the active one.

    tabButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Deactivate all
            tabButtons.forEach(btn => {
                btn.setAttribute('aria-selected', 'false');
                btn.classList.remove('bg-indigo-600', 'text-white', 'shadow-lg', 'ring-4', 'ring-indigo-200', 'scale-105');
                btn.classList.add('bg-white', 'text-gray-500', 'hover:bg-white', 'hover:text-indigo-600', 'border', 'border-gray-200');
            });

            // Activate clicked
            this.setAttribute('aria-selected', 'true');
            this.classList.remove('bg-white', 'text-gray-500', 'hover:bg-white', 'hover:text-indigo-600', 'border', 'border-gray-200');
            this.classList.add('bg-indigo-600', 'text-white', 'shadow-lg', 'ring-4', 'ring-indigo-200', 'scale-105');

            const targetId = this.getAttribute('data-target');

            // Hide all content sections
            document.querySelectorAll('.growth-stage-content').forEach(el => el.classList.add('hidden'));

            // Show target
            const targetContent = document.getElementById(targetId);
            if (targetContent) {
                targetContent.classList.remove('hidden');
                targetContent.classList.add('animate-fade-in');
            }
        });
    });
});
