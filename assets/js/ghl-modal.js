/**
 * K.Ai (KIDazzle AI) On-Demand Admissions & Booking Modal Script
 * Intercepts clicks on .kai-trigger and .ghl-trigger elements and opens a modal with K.Ai concierge.
 */
document.addEventListener('DOMContentLoaded', function() {
    // Inject the modal HTML structure into the body
    const modalHTML = `
        <div id="ghl-modal-overlay" class="ghl-modal-overlay">
            <div class="ghl-modal-container">
                <div style="background: linear-gradient(135deg, #1e1b4b 0%, #312e81 100%); color: #ffffff; padding: 12px 20px; display: flex; align-items: center; justify-content: space-between; border-bottom: 2px solid #f59e0b; border-radius: 1.5rem 1.5rem 0 0;">
                    <div style="display: flex; align-items: center; gap: 8px; font-weight: 800; font-size: 13px; color: #fcd34d;">
                        <span style="width: 8px; height: 8px; border-radius: 50%; background: #10b981; display: inline-block;"></span>
                        K.Ai — KIDazzle AI Admissions Concierge
                    </div>
                </div>
                <button id="ghl-modal-close" class="ghl-modal-close-btn" aria-label="Close modal">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                    </svg>
                </button>
                <div class="ghl-modal-loader"></div>
                <iframe id="ghl-modal-iframe" class="ghl-modal-iframe" scrolling="yes" title="K.Ai Admissions Portal"></iframe>
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
    
    // Bind click events to all triggers (.kai-trigger and .ghl-trigger)
    const triggers = document.querySelectorAll('.kai-trigger, .ghl-trigger');
    triggers.forEach(trigger => {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            const url = this.getAttribute('data-kai-url') || this.getAttribute('data-ghl-url');
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

    // Listen for K.Ai / GHL iframe form submissions and appointment bookings
    window.addEventListener('message', function(event) {
        if (!event.data) return;
        const msg = typeof event.data === 'string' ? event.data : JSON.stringify(event.data);
        if (msg.includes('form-submitted') || msg.includes('ghl-form-submitted') || msg.includes('lead-submitted')) {
            if (typeof gtag === 'function') {
                gtag('event', 'generate_lead', {
                    event_category: 'engagement',
                    event_label: 'K.Ai Modal Form Submit'
                });
            }
            if (typeof fbq === 'function') {
                fbq('track', 'Lead');
            }
        }
        if (msg.includes('booking') || msg.includes('appointment')) {
            if (typeof gtag === 'function') {
                gtag('event', 'book_tour', {
                    event_category: 'conversion',
                    event_label: 'K.Ai Calendar Booking'
                });
            }
            if (typeof fbq === 'function') {
                fbq('track', 'Schedule');
            }
        }
    });

    // Track click-to-call conversions
    document.querySelectorAll('a[href^="tel:"]').forEach(telLink => {
        telLink.addEventListener('click', function() {
            if (typeof gtag === 'function') {
                gtag('event', 'click_to_call', {
                    event_category: 'contact',
                    event_label: this.getAttribute('href')
                });
            }
        });
    });
});
