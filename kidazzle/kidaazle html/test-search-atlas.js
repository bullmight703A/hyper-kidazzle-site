const fs = require('fs');

// Read environment variables
const env = fs.readFileSync('.env', 'utf8').split('\n');
const envVars = {};
env.forEach(line => {
    if (line.trim() && !line.startsWith('#')) {
        const [key, value] = line.split('=');
        envVars[key.trim()] = value.trim();
    }
});

const SEARCH_ATLAS_API_KEY = envVars.SEARCH_ATLAS_API_KEY;

async function testApiKey() {
    try {
        const response = await fetch('https://api.searchatlas.com/v1/keywords/suggestions', {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${SEARCH_ATLAS_API_KEY}`,
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                keyword: 'WIMPER',
                limit: 5
            })
        });

        const data = await response.json();
        
        if (response.ok) {
            console.log('API key is working:', data);
        } else {
            console.error('API error:', data);
        }
    } catch (error) {
        console.error('Error testing API key:', error);
    }
}

testApiKey();