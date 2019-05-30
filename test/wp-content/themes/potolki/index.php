<?php get_header() ?>

<main>
  <!--Главная секция-->
  <section class="sale container-fluid saleBackImg">
    <div class="saleContent container">
      <div class="saleContentStocks">
        <div id="advSlider">
          <div>
            <div class="slider-item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/sale/1.jpg" alt="#">
            </div>
          </div>
          <div>
            <div class="slider-item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/sale/2.jpg" alt="#">
            </div>
          </div>
        </div>
      </div>
      <div class="saleContent__line"></div>
      <div class="saleMan row"></div>
    </div>
  </section>

  <!--Калькулятор-->
  <section class="calc">
    <div class="saleCalc ">
      <div class="saleCalcContent container">
        <span class="saleCalcContent__title row">Калькулятор</span>
        <div class="saleCalcContentBody row col-12">
          <div class="container no-padding">
            <div class="row">
              <div class="saleCalcContentBody__item col-xl-4">
                <label for="square">Общая пл. потолка (м2):</label>
                <input name="square" type="text" id="square" class="calculate-field"
                       placeholder="0">
              </div>
              <div class="saleCalcContentBody__item col-xl-4">
                <label for="corners">Кол-во углов:</label>
                <input type="text" name="corners" id="corners" class="calculate-field"
                       placeholder="0">
              </div>
              <div class="saleCalcContentBody__item col-xl-4">
                <label for="chandeliers">Люстры:</label>
                <input type="text" name="chandeliers" id="chandeliers" class="calculate-field"
                       placeholder="0">
              </div>
              <div class="saleCalcContentBody__item col-xl-4">
                <label for="dotLamps">Точечные светильники:</label>
                <input type="text" name="dotLamps" id="dotLamps" class="calculate-field"
                       placeholder="0">
              </div>
              <div class="saleCalcContentBody__item col-xl-4">
                <label for="pipes">Количество труб:</label>
                <input type="text" name="pipes" id="pipes" class="calculate-field"
                       placeholder="0">
              </div>
              <div class="saleCalcContentBody__item col-xl-4">
                <label for="price">Сумма: </label>
                <h3 id="price">0</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Замер-->
  <section class="measure">
    <div class="container">
      <div class="row">
        <div class="measure-wrap col-12">
          <div class="container">
            <div class="row">
              <div class="col-xl-8 col-md-6 col-sm-12 measure__title wow fadeInUp">Закажите бесплатный замер прямо
                сейчас!
              </div>
              <div class="col-xl-4 col-md-6 col-sm-12 measure-form wow fadeInUp">
                <div class="measure-form-titleWrap">
                  <span class="measure-form-titleWrap__title">ВЫЗВАТЬ ЗАМЕРЩИКА</span>
                  <span class="measure-form-titleWrap__subtitle">БЕСПЛАТНО УЖЕ СЕГОДНЯ!</span>
                </div>
                <div class="measure-form-blot">
                  <span class="measure-form-blot__text">+ скидки и акции</span>
                </div>
                <form method="post" class="measure-form-form">
                  <input type="hidden" class="type" value="zamer2" name="type">
                  <input type="text" name="tel" placeholder="Ваш телефон" required class="measure-form-form__text tel">
                  <button class="button measure-form-form__button_margin-top">Оставить заявку</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Виды потолков-->
  <section class="types">
    <div class="container">
      <div class="row">
        <div class="types__title col-xl-12 wow fadeInUp">ВИДЫ ПОТОЛКОВ</div>
        <div class="types-content">
          <div class="container">
            <div class="row gallery">
              <div class="type wow fadeInUp col-xl-3 col-sm-6 col-xs-6 col-6 matt-type" data-wow-duration="2s">
                <div class="item-img-wrap">
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/matt/1.jpg"> <img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/matt/1.jpg" alt="#"
                            title="" class="type__img"></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/matt/2.jpg"
                     class="hidden"><img src="<?php echo get_template_directory_uri() ?>/assets/images/types/matt/2.jpg"
                                         alt="#"
                                         title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/matt/3.jpg"
                     class="hidden"><img src="<?php echo get_template_directory_uri() ?>/assets/images/types/matt/3.jpg"
                                         alt="#"
                                         title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/matt/4.jpg"
                     class="hidden"><img src="<?php echo get_template_directory_uri() ?>/assets/images/types/matt/4.jpg"
                                         alt="#"
                                         title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/matt/5.jpg"
                     class="hidden"><img src="<?php echo get_template_directory_uri() ?>/assets/images/types/matt/5.jpg"
                                         alt="#"
                                         title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/matt/6.jpg"
                     class="hidden"><img src="<?php echo get_template_directory_uri() ?>/assets/images/types/matt/6.jpg"
                                         alt="#"
                                         title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/matt/7.jpg"
                     class="hidden"><img src="<?php echo get_template_directory_uri() ?>/assets/images/types/matt/7.jpg"
                                         alt="#"
                                         title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/matt/8.jpg"
                     class="hidden"><img src="<?php echo get_template_directory_uri() ?>/assets/images/types/matt/8.jpg"
                                         alt="#"
                                         title=""/></a>
                </div>
                <span class="type__title">Матовые</span>
              </div>
              <div class="type wow fadeInUp col-xl-3 col-sm-6 col-xs-6 col-6 satin-type" data-wow-duration="2s">
                <div class="item-img-wrap">
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/satin/1.jpg"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/satin/1.jpg" alt="#"
                            title="" class="type__img"></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/satin/2.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/satin/2.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/satin/3.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/satin/3.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/satin/4.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/satin/4.jpg" alt="#"
                            title=""/></a>
                </div>
                <span class="type__title">Сатиновые</span>
              </div>
              <div class="type wow fadeInUp col-xl-3 col-sm-6 col-xs-6 col-6 glossy-type" data-wow-duration="2s">
                <div class="item-img-wrap">
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/1.jpg"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/1.jpg" alt="#"
                            title="" class="type__img"></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/2.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/2.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/3.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/3.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/4.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/4.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/5.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/5.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/6.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/6.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/7.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/7.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/8.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/8.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/9.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/9.jpg" alt=#""
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/10.jpg" class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/glossy/10.jpg" alt="#"
                            title=""/></a>
                </div>
                <span class="type__title">Глянцевые</span>
              </div>
              <div class="type wow fadeInUp col-xl-3 col-sm-6 col-xs-6 col-6 photo-type" data-wow-duration="2s">
                <div class="item-img-wrap">
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/1.jpg"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/1.jpg" alt="#"
                            title="" class="type__img"></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/2.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/2.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/3.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/3.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/4.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/4.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/5.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/5.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/6.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/6.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/7.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/7.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/8.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/8.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/9.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/9.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/10.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/photo/10.jpg"
                            alt="#" title=""/></a>
                </div>
                <span class="type__title">Фотопечать</span>
              </div>
              <div class="type wow fadeInUp col-xl-3 col-sm-6 col-xs-6 col-6 multi-type" data-wow-duration="2s">
                <div class="item-img-wrap">
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/1.jpg"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/1.jpg" alt="#"
                            class="type__img"></a>

                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/2.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/2.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/3.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/3.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/4.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/4.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/5.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/5.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/6.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/6.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/7.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/7.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/8.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/8.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/9.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/9.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/10.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/multi/10.jpg" alt="#"
                            title=""/></a>
                </div>
                <span class="type__title">Многоуровневые</span>
              </div>
              <div class="type wow fadeInUp col-xl-3 col-sm-6 col-xs-6 col-6 light-type" data-wow-duration="2s">
                <div class="item-img-wrap">
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/light/1.jpg"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/light/1.jpg" alt="#"
                            title="" class="type__img"></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/light/2.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/light/2.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/light/3.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/light/3.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/light/4.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/light/4.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/light/5.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/light/5.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/light/6.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/light/6.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/light/7.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/light/7.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/light/8.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/light/8.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/light/9.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/light/9.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/light/10.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/light/10.jpg" alt="#"
                            title=""/></a>
                </div>
                <span class="type__title">Световые</span>
              </div>
              <div class="type wow fadeInUp col-xl-3 col-sm-6 col-xs-6 col-6 punch-type" data-wow-duration="2s">
                <div class="item-img-wrap">
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/punch/1.jpg"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/punch/1.jpg" alt="#"
                            title="" class="type__img"></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/punch/2.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/punch/2.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/punch/3.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/punch/3.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/punch/4.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/punch/4.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/punch/5.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/punch/5.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/punch/6.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/punch/6.jpg" alt="#"
                            title=""/></a>
                </div>
                <span class="type__title">Перфорированные</span>
              </div>
              <div class="type wow fadeInUp col-xl-3 col-sm-6 col-xs-6 col-6 fabric-type" data-wow-duration="2s">
                <div class="item-img-wrap">
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/fabric/1.jpg"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/fabric/1.jpg" alt="#"
                            title="" class="type__img"></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/fabric/2.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/fabric/2.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/fabric/3.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/fabric/3.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/fabric/4.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/fabric/4.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/fabric/5.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/fabric/5.jpg" alt="#"
                            title=""/></a>
                  <a href="<?php echo get_template_directory_uri() ?>/assets/images/types/fabric/6.jpg"
                     class="hidden"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/types/fabric/6.jpg" alt="#"
                            title=""/></a>
                </div>
                <span class="type__title">Тканевые</span>
              </div>
            </div>
          </div>
        </div>
        <div class="types-footer col-xl-12 types-footer_margin-top wow fadeInUp">
          <ul>
            <li class="types-footer__text">Бесплатный сервис</li>
            <li class="types-footer__text">С установкой</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!--Дизайн потолков-->
  <section class="design">
    <div class="container">
      <div class="row design-wrap">
        <div class="design_wrap_title">Дизайн потолков</div>
        <div id="designSlider" class="design-slider col-12 no-padding">
          <div>
            <div class="slide_content slide_main">
              <div class="slide_main_cover">
                <div class="slide_main_cover_top">
                  <span class="slide_main_cover_top_text">
                    <p>
                      Существует несколько наиболее распространенных способов оформления натяжных потолков и если расположить
                      их в порядке увеличения их стоимости, получится следующее: выделение участка подсветкой;
                      фотопечать; многоуровневые конструкции.
                    </p>
                  </span>
                </div>
                <div class="d-flex">
                  <div class="d-flex slide_main_images">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/design/image1.jpg" alt="slide image">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/design/image2.jpg" alt="slide image">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="slide_content slide_light">
              <div class="slide_container d-flex">
                <div class="d-flex slide_images">
                  <img class="slide_light_image1" src="<?php echo get_template_directory_uri() ?>/assets/images/design/slide-light-image1.jpg" alt="slide image">
                  <img class="slide_light_image2" src="<?php echo get_template_directory_uri() ?>/assets/images/design/slide-light-image2.jpg" alt="slide image">
                </div>
                <div class="slide_text">
                  <div class="slide_light_title">Световые “Парящие”линии</div>
                  <div class="slide_light_cover">
                    <span>
                      <p>
                        Светящиеся линии на потолке – один из самых новых способов светового оформления натяжной
                        конструкции, который предоставляет широкий спектр дизайнерских возможностей.
                        Светодиодная лента даже самой высокой мощности отличается экономичным энергопотреблением, не
                        нагревает полотно и предоставляет возможность организации основного или дополнительного освещения.
                      </p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="slide_content slide_photo">
              <div class="slide_container d-flex">
                <div class="d-flex slide_images">
                  <img class="slide_photo_image1" src="<?php echo get_template_directory_uri() ?>/assets/images/design/slide-photo-image1.jpg" alt="slide image">
                  <div class="d-flex slide_photo_sub">
                    <img class="slide_photo_image2" src="<?php echo get_template_directory_uri() ?>/assets/images/design/slide-photo-image2.jpg" alt="slide image">
                    <img class="slide_photo_image3" src="<?php echo get_template_directory_uri() ?>/assets/images/design/slide-photo-image3.jpg" alt="slide image">
                  </div>
                </div>
                <div class="slide_text">
                  <div class="slide_photo_title">Фотопечать в детскую</div>
                  <div class="slide_photo_cover">
                    <span class="slide_photo_cover_top_text">
                      <p>
                        Натяжной потолок с фотопечатью для детской комнаты действительно станет лучшим вариантом,
                        и в этом сходится большинство дизайнеров. Все дело в том, что покрытие позволяет оформить
                        помещение максимально красочно и весело, чего обычными обоями не добиться.
                      </p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="design-wrap__footer"></div>
      </div>
    </div>
  </section>

  <!--Часто задаваемые вопросы-->
  <section class="ask container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-12  wow fadeInUp" data-wow-duration="2s">
          <h2>Ответы на вопросы</h2>
          <h3>Можете задать вопросы по телефону <a href="tel:+73812503405">(3812) 503-405</a><br>или просто
            оставьте заявку и мы вам перезвоним</h3>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 ask-blocks wow fadeInLeft" data-wow-duration="2s">
              <div class="item item1">
                <h4>Как сильно опустится потолок?</h4>
                <div>Потолок опустится незначительно. Натяжные потолки монтируются на расстоянии 3 см от
                  существующего потолка, если у него нет сильных перепадов.
                </div>
              </div>
              <div class="item item2">
                <h4>Сколько стоит натяжной потолок?</h4>
                <div>Точная стоимость натяжного потолка будет известна после проведения замеров и уточнения
                  ваших пожеланий. Она складывается из следующих факторов: стоимость материалов, площадь
                  помещения, сложность и объем монтажа.
                </div>
              </div>
              <div class="item item3">
                <h4>Что случится с потолками, если нас затопят?</h4>
                <div>Наши потолки выдерживают до 100 л воды на квадратный метр.<br>Это спасёт ваш ремонт в
                  случае затопления сверху. Если это произойдёт, просто позвоните нам. Бригада оперативно
                  приедет и сольёт воду, сохранив целостность полотна.
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 ask-blocks ask-blocks2 wow fadeInRight" data-wow-duration="2s">
              <div class="item item4">
                <h4>Какой срок изготовления и установки?</h4>
                <div>От замера потолка до его полной установки 1-2 дня. На замер наша бригада может выехать
                  в течении часа или в любое время, когда вам удобно.
                </div>
              </div>
              <div class="item item5">
                <h4>Портится ли мебель и обои при монтаже?</h4>
                <div>При монтаже температура в помещении доводится до 60 градусов.<br>Мебель и другие
                  предметы интерьера при этом не портятся. Однако мы рекомендуем особенно ценные предметы
                  и комнатные растения вынести из помещения.
                </div>
              </div>
              <div class="item item6">
                <h4>Плюсы установки натяжных потолков?</h4>
                <div>Не нужно выравнивать потолок, никакой штукатурки, грунтовки, краски. Чистая комната без
                  мусора, быстрая установка, нет нужды перекрашивать, гарантия 10 лет.
                </div>
              </div>
            </div>
            <div class="col-12 wow fadeInUp" data-wow-duration="2s">
              <button data-toggle="modal" class="button" data-target="#zamer">ОСТАВИТЬ ЗАЯВКУ</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Отзывы-->
  <section class="reviews container-fluid wow fadeInUp">
    <div class="row no-margin">
      <div class="col-12 no-padding">
        <div id="reviews-slider">
          <div>
            <div class="reviews_slider_container">
              <!--<img src="images/avatar1.jpg" alt="">-->
              <div class="reviews_slider_container_text">
                <h4 class="reviews_slider_container_author">
                  Валентина Николаева
                </h4>
                <span class="reviews_slider_container_comment">
                                    Срочно были нужны потолки. Наткнулась в интернете на сайт, позвонила и записалась на
                                    замер, объяснила, что срочно надо. Через час приехал замерщик, приятный молодой человек,
                                    показал образцы материала, проконсультировал. Все быстренько померил, посчитал, цена
                                    понравилась, помог определиться с выбором светильников, заключили договор.
                                </span>
              </div>
            </div>
          </div>
          <div>
            <div class="reviews_slider_container">
              <!--<img src="images/avatar2.jpg" alt="">-->
              <div class="reviews_slider_container_text">
                <h4 class="reviews_slider_container_author">
                  Сергей Артемьев
                </h4>
                <span class="reviews_slider_container_comment">
                                    У нас был ограничен бюджет, поэтому выбирали очень долго. Вызвали несколько замерщиков.
                                    В этой компании оказалась самая хорошая цена, поэтому и остановили выбор на них. Ни
                                    грамма не пожалели. Всем рекомендую. Отдельно хочу поблагодарить бригаду монтажников.
                                    Все сделали аккуратно и быстро, спасибо огромное!
                                </span>
              </div>
            </div>
          </div>
          <div>
            <div class="reviews_slider_container">
              <!--<img src="images/avatar3.jpg" alt="">-->
              <div class="reviews_slider_container_text">
                <h4 class="reviews_slider_container_author">
                  Андрей Чудинов
                </h4>
                <span class="reviews_slider_container_comment">
                                    Хорошая компания. Заказывал натяжной потолок на кухню и в спальню. Получилось очень
                                    красиво и современно. Большой ассортимент и нормальные цены. Отношение к клиенту
                                    человечное. Сделали быстро, после себя убрали, ничего не испортили в квартире, хотя
                                    опасения были на этот счет, т.к. работа такая. В общем одни положительные эмоции.
                                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Характеристики-->
  <section class="characteristics container-fluid">
    <div class="row">
      <div class="col-12">
        <h2 class="wow fadeInDown" data-wow-duration="2s">Быстро! Чисто! Безопасно!</h2>
        <div class="row wow fadeInUp">
          <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-2 item item1" data-wow-duration="2s">
            <div class="img-block"><img src="<?php echo get_template_directory_uri() ?>/assets/images/characteristics/price.png" alt="icon"></div>
            <div class="desc">
              <h3>Выгодная цена</h3>
              <span>Лучшее соотношение цены и качества в Росии!</span>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-2 item item2" data-wow-duration="2s">
            <div class="img-block"><img src="<?php echo get_template_directory_uri() ?>/assets/images/characteristics/proff.png" alt="icon"></div>
            <div class="desc">
              <h3>Профессионализм</h3>
              <span>Опытная бригада монтажников и современное оборудование</span>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-2 item item3" data-wow-duration="2s">
            <div class="img-block"><img src="<?php echo get_template_directory_uri() ?>/assets/images/characteristics/assort.png" alt="icon"></div>
            <div class="desc">
              <h3>Богатый ассортимент</h3>
              <span>Более 3000 цветов, любые виды, любые фактуры</span>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-2 item item4" data-wow-duration="2s">
            <div class="img-block"><img src="<?php echo get_template_directory_uri() ?>/assets/images/characteristics/box.png" alt="icon"></div>
            <div class="desc">
              <h3>Лучшие материалы</h3>
              <span>Используем только  качественные экологичные плёнки БЕЗ запаха</span>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-2 item item5" data-wow-duration="2s">
            <div class="img-block"><img src="<?php echo get_template_directory_uri() ?>/assets/images/characteristics/medal.png" alt="icon"></div>
            <div class="desc">
              <h3>Гарантия 100 лет!</h3>
              <span>Наши потолки НЕ провисают НЕ выцветают и НЕ портятся</span>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-2 item item6" data-wow-duration="2s">
            <div class="img-block"><img src="<?php echo get_template_directory_uri() ?>/assets/images/characteristics/note.png" alt="icon"></div>
            <div class="desc">
              <h3>Заключение договора</h3>
              <span>Работаем официально, есть все необходимые сертификаты</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Вызов замерщика-->
  <section class="make-measure wow fadeInUp" data-wow-duration="2s">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 col-xl-7 make-measure-wrap">
          <span class="make-measure-wrap__title">Вызовите замерщика в любой день!</span>
          <span class="make-measure-wrap__desc">Произведём замер, поможем определиться с фактурой и цветом, рассчитаем точную стоимость.</span>
          <button class="button make-measure-wrap__button" data-toggle="modal" data-target="#zamer">ОСТАВИТЬ ЗАЯВКУ
          </button>
        </div>
      </div>
    </div>
  </section>

  <!--Карта-->
  <section id="map">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="places">
            <span class="places__address">
              тк. Триумф, 3 этаж <br>
              г. Омск, ул.Березовского, д. 19
            </span>
            <div class="places-phone">
              <img class="places-phone__img places-phone__img_margin-right" src="<?php echo get_template_directory_uri() ?>/assets/images/phone.png" alt="img">
              <a class="places-phone__link" href="tel:+73812503405">(3812) 503-405</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer() ?>
