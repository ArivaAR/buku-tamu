const overlay = document.getElementById('overlay');
const openOverlayBtn = document.getElementById('openOverlayBtn');
const overlayBackground = document.getElementById('overlayBackground');

openOverlayBtn.addEventListener('click', () => {
    overlay.classList.toggle('show');
    overlayBackground.classList.toggle('show');
});

overlayBackground.addEventListener('click', () => {
    overlay.classList.remove('show');
    overlayBackground.classList.remove('show');
});