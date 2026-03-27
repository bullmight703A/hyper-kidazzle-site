const Jimp = require('jimp');
const path = require('path');
const fs = require('fs');

const directory = path.join(__dirname, 'assets', 'img', 'brigance');
const files = fs.readdirSync(directory);

async function compressImages() {
    for (const file of files) {
        if (file.endsWith('.png')) {
            const filepath = path.join(directory, file);
            console.log(`Compressing ${file}...`);
            try {
                const image = await Jimp.read(filepath);
                
                // If width is larger than 1200px, resize it down to 1200px width keeping aspect ratio
                if (image.bitmap.width > 1200) {
                    image.resize(1200, Jimp.AUTO);
                }
                
                // Write over the original file
                await image.writeAsync(filepath);
                console.log(`Successfully compressed ${file}`);
            } catch (err) {
                console.error(`Failed to compress ${file}:`, err);
            }
        }
    }
}

compressImages();
