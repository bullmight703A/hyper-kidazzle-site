const fs = require('fs');
const path = require('path');

const csvPath = '20251128_184707_sc-domain_chromaela.csv';
try {
    const content = fs.readFileSync(csvPath, 'utf8');
    const lines = content.split('\n');

    const keywordsBySlug = {};

    // Skip header
    for (let i = 1; i < lines.length; i++) {
        const line = lines[i].trim();
        if (!line) continue;

        // Handle quotes if present, otherwise split by comma
        // This regex matches quoted strings OR non-comma sequences
        const regex = /(?:^|,)(\"(?:[^\"]+|\"\")*\"|[^,]*)/g;
        let parts = [];
        let match;
        while ((match = regex.exec(line)) !== null) {
            let val = match[1];
            if (val.startsWith(',')) val = val.substring(1); // Remove leading comma from regex capture group issue if any
            // Actually the regex above captures the value including the leading comma if it's not at start
            // Let's stick to simple split for now as the data looked simple, but handle quotes manually if needed.
            // Better approach for this specific file format based on view:
            // It seems standard.
        }

        // Simple split fallback
        const simpleParts = line.split(',');
        let kw = simpleParts[0];
        let url = simpleParts[1];

        // Cleanup quotes
        if (kw && kw.startsWith('"') && kw.endsWith('"')) kw = kw.slice(1, -1);
        if (url && url.startsWith('"') && url.endsWith('"')) url = url.slice(1, -1);

        if (!kw || !url) continue;

        let slug = url.replace('https://chromaela.com/', '')
            .replace('http://www.chromaela.com/', '')
            .replace('https://www.chromaela.com/', '')
            .replace('http://chromaela.com/', '');

        slug = slug.replace(/\/$/, ''); // Remove trailing slash
        if (slug === '') slug = 'home';

        // Clean slug (remove query params)
        slug = slug.split('?')[0];

        if (!keywordsBySlug[slug]) {
            keywordsBySlug[slug] = [];
        }

        // Add keyword if not already present
        if (!keywordsBySlug[slug].includes(kw)) {
            keywordsBySlug[slug].push(kw);
        }
    }

    // Generate PHP array
    let phpOutput = "<?php\n\n/**\n * Auto-generated keyword mapping from CSV\n */\nreturn array(\n";
    for (const [slug, kws] of Object.entries(keywordsBySlug)) {
        // Limit to top 8 keywords per page
        const topKws = kws.slice(0, 8);
        // Escape single quotes in keywords
        const kwString = topKws.map(k => `'${k.replace(/'/g, "\\'")}'`).join(', ');
        phpOutput += `    '${slug}' => array(${kwString}),\n`;
    }
    phpOutput += ");\n";

    fs.writeFileSync('chroma-excellence-theme/inc/seo-keywords-data.php', phpOutput);
    console.log('Successfully generated chroma-excellence-theme/inc/seo-keywords-data.php');

} catch (err) {
    console.error('Error processing CSV:', err);
}
