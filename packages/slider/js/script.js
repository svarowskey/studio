window.onload = function () {
    document.getElementById('slider-left').onclick = sliderLeft;
    document.getElementById('slider-right').onclick = sliderRight;
    var polosa = document.getElementById('polosa');
    var images = polosa.children;
    var left = 0;
    setInterval(function () {
        sliderLeft();
    }, 2000);
    function sliderLeft() {
        left = left - 450;
        if (left < -900) {
            left = 0;
        }
        polosa.style.left = left + 'px';
    }
    function sliderRight() {
        left = left + 450;
        if (left > 0) {
            left = -900;
        }
        polosa.style.left = left + 'px';
    }
    console.log(images[0].width);
};