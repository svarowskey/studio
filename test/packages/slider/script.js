var slideIndex = 1; //Присваиваем индекс слайда по умолчанию
var slides = document.getElementsByClassName('mySlides'); //Получаем слайды
var dots = document.getElementsByClassName('dot'); //Получаем навигационные точки
var slider = document.getElementsByClassName('slider'); //Получаем контейнер слайдов
var numberText = document.getElementsByClassName('numberSlide'); //Получаем нумератор слайдов
var interval;
showSlides(slideIndex);
setSlideInterval();
setListeners();
setNumberSlides();
function plusSlides(n) {
    showSlides(slideIndex += n);
}
function currentSlide(n) {
    showSlides(slideIndex = n);
    clearInterval(interval);
    // setSlideInterval();
}
function setSlideInterval() {
    interval = setInterval(function () {
        plusSlides(1)
    }, 4000);
}
function showSlides(n) {
    var i;
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "flex";
    dots[slideIndex - 1].className += " active";
}
/** Функция устанавливает обработчики событий */
function setListeners() {
    slider[0].addEventListener('mouseover', function () {
        clearInterval(interval);
    });
    slider[0].addEventListener('mouseout', function () {
        setSlideInterval();
    });
    for (let j = 0; j < dots.length; j++) {
        dots[j].addEventListener('click', function () {
            currentSlide(j + 1);
        });
    }
    document.getElementsByClassName('prev')[0].addEventListener('click', function () {
        plusSlides(-1);
    });
    document.getElementsByClassName('next')[0].addEventListener('click', function () {
        plusSlides(1);
    });
}
/** Функция устанавливает нумерацию слайдов */
function setNumberSlides() {
    for (let j = 0; j < numberText.length; j++) {
        numberText[j].innerText = (j + 1) + "/" + numberText.length;
        console.log(numberText);
    }
}