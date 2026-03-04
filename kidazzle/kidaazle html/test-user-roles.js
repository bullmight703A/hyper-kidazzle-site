const https = require('https');

async function checkUserRoles(siteName, hostname, user, pass) {
    return new Promise((resolve) => {
        console.log(`\n[${siteName}] Checking roles for ${user} on ${hostname}...`);
        const auth = Buffer.from(`${user}:${pass}`).toString('base64');

        const options = {
            hostname: hostname,
            path: '/wp-json/wp/v2/users/me?context=edit',
            method: 'GET',
            headers: {
                'Authorization': 'Basic ' + auth,
                'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
                'Accept': 'application/json'
            }
        };

        const req = https.request(options, (res) => {
            let data = '';
            res.on('data', chunk => data += chunk);
            res.on('end', () => {
                if (res.statusCode === 200) {
                    try {
                        const json = JSON.parse(data);
                        console.log(`✅ [${siteName}] Success! User info retrieved.`);
                        console.log(`   ID: ${json.id}`);
                        console.log(`   Username: ${json.username}`);
                        console.log(`   Roles: ${json.roles ? json.roles.join(', ') : 'None/Hidden'}`);
                        console.log(`   Capabilities: ${json.capabilities ? Object.keys(json.capabilities).filter(k => json.capabilities[k]).length + ' total capabilities' : 'None'}`);
                        if (json.capabilities && !json.capabilities.publish_posts) {
                            console.log(`   ⚠️ WARNING: User lacks "publish_posts" capability!`);
                        }
                    } catch (e) {
                        console.log(`✅ [${siteName}] 200 OK, but failed to parse JSON.`);
                    }
                } else {
                    console.log(`❌ [${siteName}] FAILED! Status: ${res.statusCode}`);
                    console.log(`Response: ${data}`);
                }
                resolve();
            });
        });

        req.on('error', error => {
            console.error(`❌ [${siteName}] Network Error:`, error.message);
            resolve();
        });

        req.end();
    });
}

async function runTests() {
    console.log("Starting WordPress Role Checks...");

    // 1. Wimper site (iro-wp)
    await checkUserRoles(
        'Wimper',
        'www.thewimperprogram.com',
        'iro-wp',
        'SOst 4Vk3 rLge IW3V Rv5k Qe74'
    );

    // 2. Kidazzle site (wimperone)
    await checkUserRoles(
        'Kidazzle',
        'summer.kidazzle.com',
        'wimperone',
        'WGLF dfZP 5iCF A2PX qGU2 flxI'
    );

    console.log("\nChecks completed.");
}

runTests();
