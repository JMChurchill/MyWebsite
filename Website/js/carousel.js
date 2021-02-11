//carousel
const carouselSlide = document.querySelector('.carousel-items');
const carouselImages = document.querySelectorAll('.carousel-Item');

//btns
const prevBtn = document.querySelector('#btnPreviousBox');
const nextBtn = document.querySelector('#btnNextBox');

//Counter
let counter = 1;
const size = carouselImages[0].clientWidth;

carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

//btn listeners

nextBtn.addEventListener('click',()=>{
    if (counter >= carouselImages.length -1) return;
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter++;
    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    console.log('test next');
});

prevBtn.addEventListener('click',()=>{
    if (counter <= 0) return;
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter--;
    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    console.log('test prev');
});


carouselSlide.addEventListener('transitionend',()=>{
    if (carouselImages[counter].id === 'lastClone'){
        carouselSlide.style.transition = 'none';
        counter = carouselImages.length-6;
        carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }
    if (carouselImages[counter].id === 'firstClone'){
        console.log(counter)
        carouselSlide.style.transition = 'none';
        counter = carouselImages.length-counter-4;
        carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }
});

