/**
 * GoHighLevel On-Demand Modal Script
 * Intercepts clicks on .ghl-trigger elements and opens a modal with the GHL iframe.
 */
document.addEventListener('DOMContentLoaded', function() {
    // Inject the modal HTML structure into the body
    const modalHTML = `
        <div id="ghl-modal-overlay" class="ghl-modal-overlay">
            <div class="ghl-modal-container">
                <button id="ghl-modal-close" class="ghl-modal-close-btn" aria-label="Close modal">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                    </svg>
                </button>
                <div class="ghl-modal-loader"></div>
                <iframe id="ghl-modal-iframe" class="ghl-modal-iframe" scrolling="yes" title="Booking Form"></iframe>
            </div>
        </div>
    `;
    
    document.body.insertAdjacentHTML('beforeend', modalHTML);
    
    const overlay = document.getElementById('ghl-modal-overlay');
    const closeBtn = document.getElementById('ghl-modal-close');
    const iframe = document.getElementById('ghl-modal-iframe');
    
    // Function to open modal
    function openModal(url) {
        if (!url) return;
        
        // Show overlay first
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden'; // Prevent background scrolling
        
        // Then set iframe source so it starts loading while animating in
        iframe.src = url;
    }
    
    // Function to close modal
    function closeModal() {
        overlay.classList.remove('active');
        document.body.style.overflow = '';
        
        // Clear iframe source after animation finishes to reset memory
        setTimeout(() => {
            iframe.src = '';
        }, 300);
    }
    
    // Bind click events to all triggers
    const triggers = document.querySelectorAll('.ghl-trigger');
    triggers.forEach(trigger => {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            const url = this.getAttribute('data-ghl-url');
            if (url) {
                openModal(url);
            }
        });
    });
    
    // Bind close events
    closeBtn.addEventListener('click', closeModal);
    
    // Close on overlay background click
    overlay.addEventListener('click', function(e) {
        if (e.target === overlay) {
            closeModal();
        }
    });

    // Close on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && overlay.classList.contains('active')) {
            closeModal();
        }
    });
});
