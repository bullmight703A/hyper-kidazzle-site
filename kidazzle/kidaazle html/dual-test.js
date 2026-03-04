const https = require('https');

async function testWPAPI(siteName, hostname, user, pass, method, path, postData = null) {
    return new Promise((resolve) => {
        console.log(`\n[${siteName}] Running Test: ${method} ${path}`);
        const auth = Buffer.from(`${user}:${pass}`).toString('base64');

        const options = {
            hostname: hostname,
            port: 443,
            path: path,
            method: method,
            headers: {
                'Authorization': `Basic ${auth}`,
                'Content-Type': 'application/json',
                'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36'
            }
        };

        if (postData) {
            options.headers['Content-Length'] = Buffer.byteLength(postData);
        }

        const req = https.request(options, (res) => {
            let data = '';
            res.on('data', chunk => data += chunk);
            res.on('end', () => {
                if (res.statusCode >= 200 && res.statusCode < 300) {
                    console.log(`✅ [${siteName}] SUCCESS! (Status: ${res.statusCode})`);
                    try {
                        const json = JSON.parse(data);
                        if (method === 'POST') console.log(`   Created Post ID: ${json.id}`);
                        else if (Array.isArray(json)) console.log(`   Retrieved ${json.length} items. First item ID: ${json[0]?.id}`);
                    } catch (e) { }
                } else {
                    console.log(`❌ [${siteName}] FAILED! (Status: ${res.statusCode})`);
                    console.log(`   Response: ${data}`);
                }
                resolve();
            });
        });

        req.on('error', error => {
            console.error(`❌ [${siteName}] Network Error:`, error.message);
            resolve();
        });

        if (postData) {
            req.write(postData);
        }
        req.end();
    });
}

async function runTests() {
    console.log("===========================================");
    console.log("   OPENCLAW DUAL CONNECTIVITY TESTS");
    console.log("===========================================\n");

    const wimperSite = 'n13jwn1zon.wpdns.site';
    const wimperUser = 'iro-wp';
    const wimperPass = 'SOst 4Vk3 rLge IW3V Rv5k Qe74';

    const kidazzleSite = 'wdi1ba00h7.wpdns.site';
    const kidazzleUser = 'wimperone';
    const kidazzlePass = 'WGLF dfZP 5iCF A2PX qGU2 flxI';

    const draftData = JSON.stringify({
        title: `OpenClaw Dual Test`,
        content: `Testing read/write capabilities automatically.`,
        status: 'draft',
        type: 'post'
    });

    // WIMPER TESTS
    console.log("--- WIMPER TESTS ---");
    // Test 1: Read
    await testWPAPI('Wimper', wimperSite, wimperUser, wimperPass, 'GET', '/wp-json/wp/v2/pages?per_page=1');
    // Test 2: Write
    await testWPAPI('Wimper', wimperSite, wimperUser, wimperPass, 'POST', '/wp-json/wp/v2/posts', draftData);


    // KIDAZZLE TESTS
    console.log("\n--- KIDAZZLE TESTS ---");
    // Test 1: Read
    await testWPAPI('Kidazzle', kidazzleSite, kidazzleUser, kidazzlePass, 'GET', '/wp-json/wp/v2/pages?per_page=1');
    // Test 2: Write
    await testWPAPI('Kidazzle', kidazzleSite, kidazzleUser, kidazzlePass, 'POST', '/wp-json/wp/v2/posts', draftData);

    // KIDAZZLE TEST 3: OpenClaw Controller check
    console.log("\n--- KIDAZZLE OPENCLAW CONTROLLER CHECK ---");
    await testWPAPI('Kidazzle', kidazzleSite, kidazzleUser, kidazzlePass, 'GET', '/wp-json/openclaw/v1/posts');

    console.log("\nAll tests completed.");
}

runTests();
