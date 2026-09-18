import fs from 'node:fs';
import path from 'node:path';
import { fileURLToPath } from 'node:url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);
const rootDir = path.resolve(__dirname, '..');

const distDir = path.join(rootDir, 'dist');
const publicDir = path.join(rootDir, 'public');
const viewsDir = path.join(rootDir, 'resources', 'views');

// Clean or create dist directory
if (fs.existsSync(distDir)) {
    fs.rmSync(distDir, { recursive: true, force: true });
}
fs.mkdirSync(distDir, { recursive: true });

// Copy public/images to dist/images if exists
const imagesSrc = path.join(publicDir, 'images');
const imagesDest = path.join(distDir, 'images');
if (fs.existsSync(imagesSrc)) {
    fs.cpSync(imagesSrc, imagesDest, { recursive: true });
    console.log('✓ Copied images to dist/images');
}

// Copy public/favicon.ico and robots.txt
for (const file of ['favicon.ico', 'robots.txt']) {
    const srcFile = path.join(publicDir, file);
    if (fs.existsSync(srcFile)) {
        fs.copyFileSync(srcFile, path.join(distDir, file));
        console.log(`✓ Copied ${file} to dist/`);
    }
}

// Copy public/build/assets to dist/assets
const buildAssetsSrc = path.join(publicDir, 'build', 'assets');
const distAssetsDest = path.join(distDir, 'assets');
if (fs.existsSync(buildAssetsSrc)) {
    fs.cpSync(buildAssetsSrc, distAssetsDest, { recursive: true });
    console.log('✓ Copied compiled assets to dist/assets');
}

// Find CSS and JS entry files from manifest
const manifestPath = path.join(publicDir, 'build', 'manifest.json');
let cssFilename = '';
let jsFilename = '';

if (fs.existsSync(manifestPath)) {
    const manifest = JSON.parse(fs.readFileSync(manifestPath, 'utf8'));
    if (manifest['resources/css/app.css']?.file) {
        cssFilename = path.basename(manifest['resources/css/app.css'].file);
    }
    if (manifest['resources/js/app.js']?.file) {
        jsFilename = path.basename(manifest['resources/js/app.js'].file);
    }
}

// Read welcome.blade.php
const bladePath = path.join(viewsDir, 'welcome.blade.php');
let html = fs.readFileSync(bladePath, 'utf8');

// 1. Replace html lang tag
html = html.replace(/<html\s+lang="\{\{[^}]+\}\}">/i, '<html lang="en">');

// 2. Replace @vite directive with actual links
let assetTags = '';
if (cssFilename) {
    assetTags += `<link rel="stylesheet" href="./assets/${cssFilename}">\n    `;
}
if (jsFilename) {
    assetTags += `<script type="module" src="./assets/${jsFilename}"></script>`;
}
html = html.replace(/@vite\(\[[^\]]+\]\)/g, assetTags.trim());

// 3. Replace background url asset helper
html = html.replace(/url\(['"]\{\{\s*asset\(['"]([^'"]+)['"]\)\s*\}\}['"]\)/g, "url('$1')");

// 4. Replace img src asset helper with query versions: {{ asset('...') }}?v={{ ... }}
html = html.replace(/src="\{\{\s*asset\(['"]([^'"]+)['"]\)\s*\}\}\?v=\{\{[^}]+\}\}"/g, 'src="$1"');
html = html.replace(/src="\{\{\s*asset\(['"]([^'"]+)['"]\)\s*\}\}"/g, 'src="$1"');

// 5. Replace auth/route blocks with static explore button
const authRegex = /@if\s*\(Route::has\('login'\)\)[\s\S]*?@endif/g;
html = html.replace(authRegex, (match) => {
    if (match.includes('id="nav-explore-btn"')) {
        return '<a href="#brands" class="nav-cta-btn" id="nav-explore-btn">Explore Our Brands <span class="cta-arrow">&rarr;</span></a>';
    }
    return '<a href="#brands" class="nav-cta-btn">Explore Our Brands <span class="cta-arrow">&rarr;</span></a>';
});

// Write to dist/index.html
const indexHtmlPath = path.join(distDir, 'index.html');
fs.writeFileSync(indexHtmlPath, html, 'utf8');
console.log('✓ Successfully generated dist/index.html');
