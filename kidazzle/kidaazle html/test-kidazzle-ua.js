const https = require('https');

async function testKidazzleUrlAuth() {
    return new Promise((resolve) => {
        console.log(`\nTesting Kidazzle with URL-Embedded Auth...`);
        const user = 'wimperone';
        const pass = 'WGLF dfZP 5iCF A2PX qGU2 flxI';

        // Pass the credentials directly in the hostname formatting to force NodeJS to encode them in the URL or Basic Auth 
        const options = {
            hostname: 'wdi1ba00h7.wpdns.site',
            path: '/wp-json/wp/v2/users/me?context=edit',
            method: 'GET',
            auth: `${user}:${pass}`, // Let Node's https module handle the auth natively
            headers: {
                'Accept': 'application/json',
                'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'
            }
        };

        const req = https.request(options, (res) => {
            let data = '';
            res.on('data', chunk => data += chunk);
            res.on('end', () => {
                console.log(`Status Code: ${res.statusCode}`);
                if (res.statusCode === 200) {
                    console.log(`✅ SUCCESS! Authenticated via URL Auth! Data length: ${data.length}`);
                } else {
                    console.log(`❌ FAILED! ${data}`);
                }
                resolve();
            });
        });

        req.on('error', error => {
            console.error(`❌ Network Error:`, error.message);
            resolve();
        });

        req.end();
    });
}

testKidazzleUrlAuth();
