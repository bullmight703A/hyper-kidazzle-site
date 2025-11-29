const fs = require('fs');
const path = require('path');

const files = [
    'about-us-mobile.json',
    'careers-mobile.json',
    'employers-mobile.json',
    'newsroom-mobile.json',
    'stories-mobile.json'
];

console.log('# LCP Analysis\n');

files.slice(0, 1).forEach(file => {
    const filePath = path.join('lighthouse-reports', file);
    if (fs.existsSync(filePath)) {
        const data = JSON.parse(fs.readFileSync(filePath, 'utf8'));
        console.log(`\n### Image Requests for ${file}`);

        const requests = data.audits['network-requests'].details.items;
        requests.filter(r => r.resourceType === 'Image').forEach(r => {
            console.log(`- URL: ${r.url}`);
            console.log(`  - Transfer Size: ${(r.transferSize / 1024).toFixed(2)} KB`);
            console.log(`  - Resource Size: ${(r.resourceSize / 1024).toFixed(2)} KB`);
            console.log(`  - Start Time: ${r.networkRequestTime} | End Time: ${r.networkEndTime}`);
        });
    }
});
