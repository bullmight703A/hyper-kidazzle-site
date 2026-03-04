const https = require('https');
const fs = require('fs');

const env = fs.readFileSync('.env', 'utf8').split('\n');
const envVars = {};
env.forEach(line => {
    if (line.trim() && !line.startsWith('#')) {
        const [key, value] = line.split('=');
        envVars[key.trim()] = value.trim();
    }
});

const SEARCH_ATLAS_API_KEY = envVars.SEARCH_ATLAS_API_KEY;

const data = JSON.stringify({
    keyword: 'WIMPER',
    limit: 5
});

const options = {
    hostname: 'api.searchatlas.com',
    path: '/v1/keywords/suggestions', // Ensure this matches wrapper path exactly
    method: 'POST',
    headers: {
        'Authorization': `Bearer ${SEARCH_ATLAS_API_KEY}`,
        'Content-Type': 'application/json',
        'Content-Length': data.length
    }
};

const req = https.request(options, (res) => {
    let responseData = '';

    res.on('data', (chunk) => {
        responseData += chunk;
    });

    res.on('end', () => {
        if (res.statusCode >= 200 && res.statusCode < 300) {
            console.log('Search Atlas API key is working. Status:', res.statusCode);
            try {
                console.log(JSON.parse(responseData));
            } catch (e) { }
        } else {
            console.log('Search Atlas Error Status:', res.statusCode);
            console.log(responseData);
        }
    });
});

req.on('error', (error) => {
    console.error('Error testing API key:', error);
});

req.write(data);
req.end();
