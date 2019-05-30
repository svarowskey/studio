<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>АС-Студия - изготовление и монтаж натяжных потолков в Омске и Омской области</title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/images/checked.png" type="image/png">
    <meta name="yandex-verification" content="1b2d7f2dfc8931b5"/>
    <meta name="description" content="Сайт о натяжных потолках в омске и омской области">
    <meta name="Keywords" content="потолки, натяжные потолки, натяжные потолки в омске,
  омск, потолок в омске, потолок, натяжной, натяжные, 55 потолоков, 55, potolkov, omsk, ceilings, ceiling, ремонт">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
  <?php wp_head(); ?>
</head>
<body>
<div class="success">Ваша заявка отправлена!</div>
<!-- Modal -->
<div class="modal fade" id="call" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Обратный звонок</h2>
                <h4>Заполните поля и мы перезвоним<br>Вам в ближайшее время</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <input type="hidden" class="type" value="call" name="type">
                    <input class="name" name="name" type="text" required placeholder="Ваше имя">
                    <input class="tel" name="tel" type="text" required placeholder="Ваш телефон">
                    <button>Перезвоните мне</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="zamer" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">ЗАКАЗАТЬ<br>БЕСПЛАТНЫЙ ЗАМЕР</h2>
                <h4>Оставьте заявку и мы перезвоним<br>Вам в ближайшее время</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <input type="hidden" class="type" value="zamer" name="type">
                    <input class="name" name="name" type="text" required placeholder="Ваше имя">
                    <input class="tel" name="tel" type="text" required placeholder="Ваш телефон">
                    <button>ОСТАВИТЬ ЗАЯВКУ</button>
                </form>
            </div>
        </div>
    </div>
</div>
<header>
    <div class="container-fluid">
        <div class="container">
            <div class="row headerRow no-margin">
                <div class="col-xl-4 col-sm-12 col-md-4 headerLogo">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.jpg" alt="#">
                </div>
                <div class="col-xl-4 col-sm-12 col-md-4 headerMiddle">
                    <a href="tel:+73812503405" class="phone phone_marginBottom">
                        <div class="phone__icon"></div>
                        <span class="phone__number">(3812) 503-405</span>
                    </a>
                </div>
                <div class="col-xl-4 col-sm-12 col-md-4 headerAddress">
                    <div class="addressContent">
                        <div class="addressContent__marker"></div>
                        <span class="addressContent__text">г. Омск, ул.Березовского, д. 19<br>
                potolkov@list.ru</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="menu">
        <div class="container">
            <div class="row">
                <button class="d-md-none navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px"
                         viewBox="0 0 124 124" xml:space="preserve">
                  <g><path d="M112,6H12C5.4,6,0,11.4,0,18s5.4,12,12,12h100c6.6,0,12-5.4,12-12S118.6,6,112,6z" fill="#FFFFFF"></path>
                      <path d="M112,50H12C5.4,50,0,55.4,0,62c0,6.6,5.4,12,12,12h100c6.6,0,12-5.4,12-12C124,55.4,118.6,50,112,50z"
                            fill="#FFFFFF"></path>
                      <path d="M112,94H12c-6.6,0-12,5.4-12,12s5.4,12,12,12h100c6.6,0,12-5.4,12-12S118.6,94,112,94z"
                            fill="#FFFFFF"></path></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
                        <g></g>
						</svg>
                </button>
                <div class="col-12 d-md-flex justify-content-between align-items-center collapse"
                     id="navbarToggleExternalContent">
                    <a class="smoothScroll menu__item" href=".types">Виды потолков</a>
                    <a class="smoothScroll menu__item" href=".design">Дизайн потолков</a>
                    <a class="smoothScroll menu__item" href=".ask">Ответы на вопросы</a>
                    <a class="smoothScroll menu__item" href=".reviews">Отзывы</a>
                    <a class="smoothScroll menu__item" href="footer">Контакты</a>
                </div>
            </div>
        </div>
    </nav>
</header>