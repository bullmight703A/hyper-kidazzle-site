/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./*.{html,js}", "./components/**/*.{html,js}"],
    theme: {
        extend: {
            colors: {
                brand: {
                    gold: '#D4AF37', // Metallic gold for luxury
                    yellow: '#FFC107', // Playful warm yellow
                    blue: '#0056b3', // Trustworthy deep blue
                    cyan: '#00BCD4', // Vibrant cyan accent
                    cream: '#FAFAFA', // Soft luxury background
                    dark: '#1A202C', // Deep text color
                }
            },
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
                serif: ['Merriweather', 'serif'], // Or Outfit if preferred for "modern"
                display: ['Outfit', 'sans-serif'], // For premium headlines
            },
            container: {
                center: true,
                padding: '1rem',
                screens: {
                    sm: '640px',
                    md: '768px',
                    lg: '1024px',
                    xl: '1280px',
                    '2xl': '1400px',
                },
            },
            extend: {
                animation: {
                    'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
                    'float': 'float 6s ease-in-out infinite',
                },
                keyframes: {
                    fadeInUp: {
                        '0%': { opacity: '0', transform: 'translateY(20px)' },
                        '100%': { opacity: '1', transform: 'translateY(0)' },
                    },
                    float: {
                        '0%, 100%': { transform: 'translateY(0)' },
                        '50%': { transform: 'translateY(-10px)' },
                    }
                }
            }
        },
    },
    plugins: [],
}
