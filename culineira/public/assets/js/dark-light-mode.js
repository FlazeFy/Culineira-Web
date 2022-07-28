function getTheme() {
    return localStorage.getItem('theme') || 'Light';
}
function saveTheme(theme) {
    localStorage.setItem('theme', theme);
}

const colorScheme = document.querySelector('meta[name="color-scheme"]');
function applyTheme(theme) {
    document.body.className = theme;
    colorScheme.content = theme;
}

function rotateTheme(theme) {
if (theme === 'Light') {
    return 'Dark'
}
    return 'Light';
}

const themeDisplay = document.getElementById('theme');
const themeToggler = document.getElementById('theme-toggle');

setTimeout(() => {
let theme = getTheme();
applyTheme(theme);
themeDisplay.innerText = theme;

themeToggler.onclick = () => {
    const newTheme = rotateTheme(theme);
    applyTheme(newTheme);
    themeDisplay.innerText = newTheme;
    saveTheme(newTheme);

    theme = newTheme;
}
}, 1000);
