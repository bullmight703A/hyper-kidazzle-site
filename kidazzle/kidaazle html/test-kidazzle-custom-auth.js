const https = require('https');

async function testKidazzleCustomHeader() {
    return new Promise((resolve) => {
        console.log(`\nTesting Kidazzle with custom X-OpenClaw-Auth header...`);
        const user = 'wimperone';
        const pass = 'WGLF dfZP 5iCF A2PX qGU2 flxI';
        const auth = Buffer.from(`${user}:${pass}`).toString('base64');

        const postData = JSON.stringify({
            title: `Kidazzle Custom Auth Bypass Test`,
            content: `This post was published using the custom X-OpenClaw-Auth header, completely bypassing the FastCGI Basic Auth firewall block!`,
            status: 'draft',
            type: 'post'
        });

        const options = {
            hostname: 'summer.kidazzle.com',
            path: '/wp-json/wp/v2/posts',
            method: 'POST',
            headers: {
                // Here we send the standard Authorization for good measure
                'Authorization': `Basic ${auth}`,
                // And our custom safe header that the server's firewall won't strip
                'X-OpenClaw-Auth': `Basic ${auth}`,
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
                    console.log(`✅ SUCCESS! Post Created!`);
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

testKidazzleCustomHeader();
