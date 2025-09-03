//Lightbox
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll("img.lightbox").forEach(img => {
    img.addEventListener("click", () => {
      basicLightbox.create(`<img src="${img.src}" alt="">`).show()
    })
  })
})


//SEARCH
const userInput = document.getElementById('userInput');

if (userInput) { // Only run if the element exists
  userInput.addEventListener('input', function () {
    const query = this.value.toLowerCase();
    const images = document.querySelectorAll('.row .col-lg-2');

    console.log('Search query:', query); // Log the current search query

    images.forEach(col => {
      const img = col.querySelector('img');
      const altText = img ? img.getAttribute('alt').toLowerCase() : '';

      console.log('Image alt text:', altText); // Log the alt text being checked

      if (altText.includes(query)) {
        col.classList.remove('hidden'); // Show the element
        console.log('Displaying:', altText); // Log when an image is displayed
      } else {
        col.classList.add('hidden'); // Hide the element
        console.log('Hiding:', altText); // Log when an image is hidden
      }
    });
  });
}


console.log('foo');

