$(function() {
    if (performance.navigation.type == 1) {
        document.getElementById('square').value = '';
        document.getElementById('corners').value = '';
        document.getElementById('chandeliers').value = '';
        document.getElementById('dotLamps').value = '';
        document.getElementById('pipes').value = '';
    }

    $('.calculate-field').keyup(function(){
        if (this.value.match(/[^0-9]/g)) {
            this.value = this.value.replace(/[^0-9]/g, '');
        }
        document.getElementById('price').textContent = calcCost();
    });

    function calcCost() {
        var square = $('#square').val();
        var corners = $('#corners').val();
        var chandeliers = $('#chandeliers').val();
        var dotLamps = $('#dotLamps').val();
        var pipes = $('#pipes').val();
        return (square * 200) + (corners * 100) + (chandeliers * 300) + (dotLamps * 150) + (pipes * 150);
    }

    $('.ask-blocks .item h4').click(function(){
        var thisH4 = $(this),
            thisSpan = $('div', $(this).parent()),
            outherH4 = $('.ask-blocks .item h4').not(thisH4),
            outherSpan = $('.ask-blocks .item div').not(thisSpan);
        outherH4.removeClass('active');
        outherSpan.hide().removeClass('active');
        thisH4.toggleClass('active');
        thisSpan.fadeToggle().toggleClass('active');
    });
    ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init(){
        if( ($(window).width() <= 767)  ) {
            myMap = new ymaps.Map("map", {
                center: [54.982156, 73.321976],
                zoom: 16
            });
        } else {
            myMap = new ymaps.Map("map", {
                center: [54.982156, 73.321976],
                zoom: 16
            });
        }

        myPlacemark = new ymaps.Placemark([54.982400, 73.323485], {
            hintContent: 'Омск',
            balloonContent: 'г. Омск, ул. 70 Лет Октября, д. 20'
        });
        myMap.geoObjects.add(myPlacemark);
    }
    $('.up').click(function(e){
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 1000);
    });
    $("input.tel").click(function(){
        $(this).val('+7');
    });
    $(window).scroll(function() {
        var pos = 86;
        if( ($(window).width() <= 1199) || ($(window).width() >= 768) ) {
            pos = 150;
        }
        if( ($(window).width() <= 767) || ($(window).width() >= 576) ) {
            pos = 150;
        }
        if($(window).width() <= 575) {
            pos = 290;
        }

        if($(this).scrollTop() >= pos) {
            $('nav').addClass('stickytop');
        }
        else{
            $('nav').removeClass('stickytop');
        }
    });
    $('.smoothScroll').click(function(event) {
        event.preventDefault();
        var href=$(this).attr('href');
        var target=$(href);
        var top=target.offset().top;
        $('html,body').animate({
            scrollTop: top
        }, 1000);
    });

    $('.modal').on('hidden.bs.modal', function (e) {
        $('input:not(.type)', $(this)).val('');
    });
    $('form').submit(function(e){
        e.preventDefault();
        var form_data = {
            'name':$(".name", $(this)).val(),
            'tel':$(".tel", $(this)).val(),
            'price':$("#price", $(this)).val(),
            'square':$("#square", $(this)).val(),
            'type':$(".type", $(this)).val()
        };
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: form_data,
            success: function(){
                $('.modal').modal('hide');
                setTimeout(function() {
                    $('.success').fadeToggle();
                }, 1000);
                setTimeout(function() {
                    $('.success').fadeToggle();
                }, 2500);
            },
            error: function() {
                alert("Произошла какая то ошибка!");
            }
        });
    });
    new WOW().init();

    var $gallery = $('.gallery .first-type a').simpleLightbox();
    $gallery.on('show.simplelightbox')
        .on('shown.simplelightbox')
        .on('close.simplelightbox')
        .on('closed.simplelightbox')
        .on('change.simplelightbox')
        .on('next.simplelightbox')
        .on('prev.simplelightbox')
        .on('nextImageLoaded.simplelightbox')
        .on('prevImageLoaded.simplelightbox')
        .on('changed.simplelightbox')
        .on('nextDone.simplelightbox')
        .on('prevDone.simplelightbox')
        .on('error.simplelightbox', function(e){
            console.log('No image found, go to the next/prev');
            console.log(e);
        });
    var $gallery = $('.gallery .second-type a').simpleLightbox();
    $gallery.on('show.simplelightbox')
        .on('shown.simplelightbox')
        .on('close.simplelightbox')
        .on('closed.simplelightbox')
        .on('change.simplelightbox')
        .on('next.simplelightbox')
        .on('prev.simplelightbox')
        .on('nextImageLoaded.simplelightbox')
        .on('prevImageLoaded.simplelightbox')
        .on('changed.simplelightbox')
        .on('nextDone.simplelightbox')
        .on('prevDone.simplelightbox')
        .on('error.simplelightbox', function(e){
            console.log('No image found, go to the next/prev');
            console.log(e);
        });
    var $gallery = $('.gallery .third-type a').simpleLightbox();
    $gallery.on('show.simplelightbox')
        .on('shown.simplelightbox')
        .on('close.simplelightbox')
        .on('closed.simplelightbox')
        .on('change.simplelightbox')
        .on('next.simplelightbox')
        .on('prev.simplelightbox')
        .on('nextImageLoaded.simplelightbox')
        .on('prevImageLoaded.simplelightbox')
        .on('changed.simplelightbox')
        .on('nextDone.simplelightbox')
        .on('prevDone.simplelightbox')
        .on('error.simplelightbox', function(e){
            console.log('No image found, go to the next/prev');
            console.log(e);
        });
    var $gallery = $('.gallery .forth-type a').simpleLightbox();
    $gallery.on('show.simplelightbox')
        .on('shown.simplelightbox')
        .on('close.simplelightbox')
        .on('closed.simplelightbox')
        .on('change.simplelightbox')
        .on('next.simplelightbox')
        .on('prev.simplelightbox')
        .on('nextImageLoaded.simplelightbox')
        .on('prevImageLoaded.simplelightbox')
        .on('changed.simplelightbox')
        .on('nextDone.simplelightbox')
        .on('prevDone.simplelightbox')
        .on('error.simplelightbox', function(e){
            console.log('No image found, go to the next/prev');
            console.log(e);
        });

    $('#reviews-slider').slick({
        autoplay: 'true',
        nextArrow: '<div class="slick-next slick-controls-next slick-controls"></div>',
        prevArrow: '<div class="slick-prev slick-controls-prev slick-controls"></div>',

    });
    $('#advSlider').slick({
        autoplay: 'true',
        nextArrow: '<div class="slick-next slick-controls-next slick-controls"></div>',
        prevArrow: '<div class="slick-prev slick-controls-prev slick-controls"></div>',
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });
});