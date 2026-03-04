const https = require('https');

async function testOpenClawController() {
    return new Promise((resolve) => {
        console.log(`\nTesting Kidazzle OpenClaw Controller Plugin...`);
        const user = 'wimperone';
        const pass = 'WGLF dfZP 5iCF A2PX qGU2 flxI';
        const auth = Buffer.from(`${user}:${pass}`).toString('base64');

        const postData = JSON.stringify({
            title: `OpenClaw Controller Bypass Test`,
            content: `Testing if the custom openclaw/v1/posts endpoint accepts the WGLF App Password.`,
            status: 'draft',
            type: 'post'
        });

        const options = {
            hostname: 'summer.kidazzle.com',
            path: '/wp-json/openclaw/v1/posts',
            method: 'POST',
            headers: {
                'Authorization': `Basic ${auth}`,
                'Content-Type': 'application/json',
                'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
                'Content-Length': Buffer.byteLength(postData)
            }
        };

        const req = https.request(options, (res) => {
            let data = '';
            res.on('data', chunk => data += chunk);
            res.on('end', () => {
                console.log(`Status Code: ${res.statusCode}`);
                if (res.statusCode === 201) {
                    console.log(`✅ SUCCESS! Created via OpenClaw Controller!`);
                    try {
                        const json = JSON.parse(data);
                        console.log(`Created Post ID: ${json.id}`);
                    } catch (e) { }
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

        req.write(postData);
        req.end();
    });
}

testOpenClawController();
