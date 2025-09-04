console.log('scripts.js loaded!');

// LIGHTBOX
document.querySelectorAll("img.lightbox").forEach(img => {
    img.addEventListener("click", () => {
        basicLightbox.create(`<img src="${img.src}" alt="">`).show();
    });
});

// ALT TO TITLE
document.querySelectorAll('.col-lg-2 img').forEach(img => {
    const altText = img.getAttribute('alt');
    if (altText) {
        img.setAttribute('title', altText);
    }
});

// FILTERS
const allCols = document.querySelectorAll('.col-lg-2');

// Get all filter buttons
const filterBtns = [
    document.getElementById('show-all'),
    document.getElementById('show-collabs'),
    document.getElementById('show-swatches'),
    document.getElementById('show-originals')
];

// Helper to update button styles
function setActiveBtn(activeBtn) {
    filterBtns.forEach(btn => {
        if (btn) {
            btn.classList.remove('btn-secondary', 'btn-outline-secondary');
            btn.classList.add('btn-outline-secondary');
        }
    });
    if (activeBtn) {
        activeBtn.classList.remove('btn-outline-secondary');
        activeBtn.classList.add('btn-secondary');
    }
}

function showAllCols() {
    allCols.forEach(col => col.classList.remove('d-none'));
}

function filterByClass(className) {
    allCols.forEach(col => {
        const img = col.querySelector('img');
        if (img && img.classList.contains(className)) {
            col.classList.remove('d-none');
            console.log('SHOW:', img.src);
        } else {
            col.classList.add('d-none');
            if (img) console.log('HIDE:', img.src);
        }
    });
}

// ALL button
const showAllBtn = document.getElementById('show-all');
if (showAllBtn) {
    showAllBtn.addEventListener('click', function() {
        showAllCols();
        setActiveBtn(showAllBtn);
        console.log('All button clicked');
    });
}

// COLLABS button
const showCollabsBtn = document.getElementById('show-collabs');
if (showCollabsBtn) {
    showCollabsBtn.addEventListener('click', function() {
        filterByClass('show-collabs');
        setActiveBtn(showCollabsBtn);
        console.log('Collabs button clicked');
    });
}

// SWATCHES button
const showSwatchesBtn = document.getElementById('show-swatches');
if (showSwatchesBtn) {
    showSwatchesBtn.addEventListener('click', function() {
        filterByClass('show-swatches');
        setActiveBtn(showSwatchesBtn);
        console.log('Swatches button clicked');
    });
}

// ORIGINALS button
const showOriginalsBtn = document.getElementById('show-originals');
if (showOriginalsBtn) {
    showOriginalsBtn.addEventListener('click', function() {
        filterByClass('show-originals');
        setActiveBtn(showOriginalsBtn);
        console.log('Originals button clicked');
    });
}

// SEARCH (use d-none for hiding)
const userInput = document.getElementById('userInput');
if (userInput) {
    userInput.addEventListener('input', function () {
        const query = this.value.toLowerCase();
        allCols.forEach(col => {
            const img = col.querySelector('img');
            const altText = img ? img.getAttribute('alt').toLowerCase() : '';
            const fileName = img ? img.src.split('/').pop().toLowerCase() : '';
            // Show if alt text or file name includes query
            col.classList.remove('d-none');
            if (!altText.includes(query) && !fileName.includes(query)) {
                col.classList.add('d-none');
            }
        });
    });
}

console.log('Script loaded');