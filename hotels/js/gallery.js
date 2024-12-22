const imageWrapper = document.querySelector('.image-wrapper');
const images = document.querySelectorAll('.image');
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');

let counter = 0;
let imageWidth = images[0].clientWidth;

nextButton.addEventListener('click', () => {
    if (counter < images.length - 1) {
        counter++;
        imageWidth = images[counter].clientWidth; // Update image width
        imageWrapper.style.transform = `translateX(-${counter * imageWidth}px)`;
    }
});

prevButton.addEventListener('click', () => {
    if (counter > 0) {
        counter--;
        imageWidth = images[counter].clientWidth; // Update image width
        imageWrapper.style.transform = `translateX(-${counter * imageWidth}px)`;
    }
});


