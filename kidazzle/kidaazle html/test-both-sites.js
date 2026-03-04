const https = require('https');

async function testAuth(name, hostname, user, pass) {
    return new Promise((resolve) => {
        console.log(`Testing ${name} (${hostname}) with user: ${user}`);
        const auth = Buffer.from(`${user}:${pass}`).toString('base64');

        const options = {
            hostname: hostname,
            path: '/wp-json/wp/v2/users/me',
            method: 'GET',
            headers: {
                'Authorization': 'Basic ' + auth,
                'User-Agent': 'OpenClaw-Testing',
                'Accept': 'application/json'
            }
        };

        const req = https.request(options, (res) => {
            let data = '';
            res.on('data', chunk => data += chunk);
            res.on('end', () => {
                console.log(`--- Result for ${name} (${hostname} | User: ${user}) ---`);
                console.log(`Status Code: ${res.statusCode}`);

                try {
                    const json = JSON.parse(data);
                    if (res.statusCode === 200) {
                        console.log(`✅ SUCCESS! Authenticated as: ${json.name} (ID: ${json.id})`);
                        console.log(`Description: ${json.description.substring(0, 50)}...`);
                    } else {
                        console.log(`❌ FAILED! Error code: ${json.code} | Message: ${json.message}`);
                    }
                } catch (e) {
                    console.log(`❌ FAILED! Non-JSON response received. First 100 chars:`);
                    console.log(data.substring(0, 100));
                }
                console.log(`-------------------------------------------------\n`);
                resolve();
            });
        });

        req.on('error', error => {
            console.error(`\nNetwork Error for ${name}: ${error.message}\n`);
            resolve();
        });

        req.end();
    });
}

async function run() {
    // 1. Test Wimper
    await testAuth('Wimper', 'n13jwn1zon.wpdns.site', 'iro-wp', '559y RxUj K2qw sEby R4G2 Z5X7');

    // 2. Test Kidazzle (Email format)
    await testAuth('Kidazzle', 'wdi1ba00h7.wpdns.site', 'roberthill@kidazzle.com', 'LUeqqoh@dzZY)V$bh#gA*TA3');

    // 3. Test Kidazzle (Username guess 1)
    await testAuth('Kidazzle', 'wdi1ba00h7.wpdns.site', 'roberthill', 'LUeqqoh@dzZY)V$bh#gA*TA3');

    // 4. Test Kidazzle (Username guess 2)
    await testAuth('Kidazzle', 'wdi1ba00h7.wpdns.site', 'robert', 'LUeqqoh@dzZY)V$bh#gA*TA3');
}

run();
