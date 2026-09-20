import fs from 'node:fs';
import path from 'node:path';

const srcDir = 'C:\\Users\\TheStarRigel\\.gemini\\antigravity-ide\\brain\\c683ceb1-15f5-4044-97c3-7326c87553ff\\.user_uploaded';
const targetDir = 'c:\\Users\\TheStarRigel\\Desktop\\Wecon-Asia-Landing-Page\\public\\images\\events';

if (!fs.existsSync(targetDir)) {
    fs.mkdirSync(targetDir, { recursive: true });
}

// Copy the uploaded images with meaningful names
const map = {
    'media_1789890841376.png': 'series-list-ref.png',
    'media_1789890859548.png': 'upcoming-section-ref.png',
    'media_1789891868632.png': 'conferences-ref.png',
    'media_1789891885469.png': 'awards-ref.png',
    'media_1789891900777.png': 'past-events-ref.png'
};

for (const [orig, dest] of Object.entries(map)) {
    const srcFile = path.join(srcDir, orig);
    if (fs.existsSync(srcFile)) {
        fs.copyFileSync(srcFile, path.join(targetDir, dest));
        console.log(`Copied ${orig} -> ${dest}`);
    }
}
