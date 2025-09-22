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

// Grab all filter buttons (desktop + mobile)
const filterBtns = document.querySelectorAll('.filter-btn');

// Helper to update button styles
function setActiveBtn(filter) {
    filterBtns.forEach(btn => {
        btn.classList.remove('btn-secondary', 'btn-outline-secondary');
        btn.classList.add('btn-outline-secondary');

        if (btn.dataset.filter === filter) {
            btn.classList.remove('btn-outline-secondary');
            btn.classList.add('btn-secondary');
        }
    });
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

// Attach events to filter buttons
filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const filter = btn.dataset.filter;

        if (filter === 'all') {
            showAllCols();
        } else {
            filterByClass(`show-${filter}`);
        }

        setActiveBtn(filter);
        console.log(`${filter} button clicked`);
    });
});

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
