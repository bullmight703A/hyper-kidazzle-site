const https = require('https');

// Wimper Credentials
const WP_SITE_URL = 'n13jwn1zon.wpdns.site';
const WP_USER = 'iro-wp';
const WP_APP_PASSWORD = 'SOst 4Vk3 rLge IW3V Rv5k Qe74';

const auth = Buffer.from(`${WP_USER}:${WP_APP_PASSWORD}`).toString('base64');
const postData = JSON.stringify({
    title: `Masterchef Agent Header Test`,
    content: `Testing if the WAF blocked the OpenClaw User-Agent.`,
    status: 'draft',
    type: 'post'
});

const options = {
    hostname: WP_SITE_URL,
    port: 443,
    path: '/wp-json/wp/v2/posts',
    method: 'POST',
    headers: {
        'Authorization': `Basic ${auth}`,
        'Content-Type': 'application/json',
        'User-Agent': 'MASTERCHEF/1.0',
        'Content-Length': Buffer.byteLength(postData)
    }
};

const req = https.request(options, (res) => {
    let data = '';
    res.on('data', (chunk) => data += chunk);
    res.on('end', () => {
        console.log('Status code:', res.statusCode);
        console.log(data);
    });
});

req.on('error', (error) => {
    console.error('Request failed:', error);
});

req.write(postData);
req.end();
