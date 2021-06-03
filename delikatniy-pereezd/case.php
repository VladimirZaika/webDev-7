<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Template name: case */
 /* Assets ID: case */

get_header();
?>
<main class="main flex__center pt-from-88-to-103">
    <section class="section section__article flex__center">
        <div class="breadcrumb__wrap flex__center">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="current__page">Кейсы переезов</li>
                <li class="current__page">1-комнатная квартира, семья из 3-х человек</li>
            </ul>
        </div>
        <article class="article case__article flex__center pt-from-24-to-64">
            <a class="go-to__new-blank reverse flex__center" href="#">Все кейсы<span class="link__arrow flex__center"><span>.</span></span></a>
            <div class="article__body case__body flex__center mt-from-24-to-56">
                <div class="news__img flex__center">
                    <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/news-img-1.png" alt="">
                    </picture>
                </div>
                <div class="article__header case__header mt-from-24-to-56">
                    <h1 class="title">Однокомнатная квартира, семья из 2-х человек и кота</h1>
                </div>
                <div class="article__content case__content mt-from-32-to-56">
                    <div class="case__adress">
                        <span class="case__solid"></span>
                        <div class="case__adress--block">
                            <div class="case__adress--title flex__center">
                                <span class="case__address--circle mr-16">.</span>
                                <p class="block__title">Адрес А</p>
                            </div>
                            <div class="case__adress--text">
                                <p class="block__text block__text--darken">Мурино, бул. Менделеева, 10</p>
                                <p class="block__text mt-4">4 этаж Грузовой лифт</p>
                            </div>
                        </div>
                        <div class="distance__wrap">
                            <p>2 км</p>
                        </div>
                        <div class="case__adress--block">
                            <div class="case__adress--title flex__center">
                                <span class="case__address--circle orange mr-16">.</span>
                                <p class="block__title block__title--orange">Адрес Б</p>
                            </div>
                            <div class="case__adress--text">
                                <p class="block__text block__text--darken">Мурино, бул. Менделеева, 10</p>
                                <p class="block__text mt-4">4 этаж Грузовой лифт</p>
                            </div>
                        </div>
                    </div>
                    <div class="moving__stages--wrap mt-from-32-to-56">
                        <div class="subtitle__wrap mb-from-12-to-16">
                            <p class="block__title">Перечень имущества</p>
                        </div>
                        <div class="moving__stage--info stage__ul--info">
                            <ul class="stage__ul">
                                <li class="stage__li block__text">диван - книжка</li>
                                <li class="stage__li block__text mt-from-4-to-8">детская кроватка</li>
                                <li class="stage__li block__text mt-from-4-to-8">комод – 2 шт.</li>
                                <li class="stage__li block__text mt-from-4-to-8">холодильник (до 1,8 м.)</li>
                                <li class="stage__li block__text mt-from-4-to-8">стиральная машина</li>
                            </ul>
                            <ul class="stage__ul">
                                <li class="stage__li block__text">тумба под телевизор </li>
                                <li class="stage__li block__text mt-from-4-to-8">стол</li>
                                <li class="stage__li block__text mt-from-4-to-8">стулья – 4 шт.</li>
                                <li class="stage__li block__text mt-from-4-to-8">коробки- 18 шт.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="moving__stages--wrap mt-from-32-to-56">
                        <div class="subtitle__wrap mb-from-16-to-24">
                            <p class="block__title">Этапы переезда</p>
                        </div>
                        <div class="moving__stages--block">
                            <div class="moving__stage">
                                <span class="moving__stage--info">
                                    <div class="moving__stage--step">
                                        <p class="block__title block__title--orange">01</p>
                                    </div>
                                    <div class="moving__stage--text">
                                        <p class="block__text">Разборка мебели</p>
                                        <p class="block__text mt-4">Упаковка мебели и техники</p>
                                        <p class="block__text mt-4">Упаковка посуды и личных вещей</p>
                                    </div>
                                </span>
                                <span class="moving__stage--time">
                                    <p class="block__text text__lighten--mobile">2 ч</p>
                                </span>
                            </div>
                            <div class="moving__stage">
                                <span class="moving__stage--info">
                                    <div class="moving__stage--step">
                                        <p class="block__title block__title--orange">02</p>
                                    </div>
                                    <div class="moving__stage--text">
                                        <p class="block__text">Погрузка</p>
                                    </div>
                                </span>
                                <span class="moving__stage--time">
                                    <p class="block__text text__lighten--mobile">1 ч</p>
                                </span>
                            </div>
                            <div class="moving__stage">
                                <span class="moving__stage--info">
                                    <div class="moving__stage--step">
                                        <p class="block__title block__title--orange">03</p>
                                    </div>
                                    <div class="moving__stage--text">
                                        <p class="block__text">Перевозка</p>
                                    </div>
                                </span>
                                <span class="moving__stage--time">
                                    <p class="block__text text__lighten--mobile">30 мин</p>
                                </span>
                            </div>
                            <div class="moving__stage">
                                <span class="moving__stage--info">
                                    <div class="moving__stage--step">
                                        <p class="block__title block__title--orange">04</p>
                                    </div>
                                    <div class="moving__stage--text">
                                        <p class="block__text">Разгрузка</p>
                                    </div>
                                </span>
                                <span class="moving__stage--time">
                                    <p class="block__text text__lighten--mobile">1 ч</p>
                                </span>
                            </div>
                            <div class="moving__stage">
                                <span class="moving__stage--info">
                                    <div class="moving__stage--step">
                                        <p class="block__title block__title--orange">05</p>
                                    </div>
                                    <div class="moving__stage--text">
                                        <p class="block__text">Расстановка по местам</p>
                                        <p class="block__text mt-4">Распаковка мебели, техники и вещей</p>
                                        <p class="block__text mt-4">Сборка мебели</p>
                                        <p class="block__text mt-4">Навеска ТВ</p>
                                    </div>
                                </span>
                                <span class="moving__stage--time">
                                    <p class="block__text text__lighten--mobile">2 ч</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="moving__stages--wrap mt-from-32-to-56">
                        <div class="subtitle__wrap mb-16">
                            <p class="block__title">Решение</p>
                        </div>
                        <div class="decision__wrapper">
                            <div class="decision__stage">
                                <span class="stage__list--product">
                                    <p class="block__text">Автомобиль</p>
                                </span>
                                <span class="moving__stage--num flex__center">
                                    <p class="block__text text__lighten--mobile">10 м<sup>3</sup></p>
                                </span>
                            </div>
                        </div>
                        <div class="decision__wrapper mt-4">
                            <div class="decision__stage">
                                <span class="stage__list--product">
                                    <p class="block__text">Специалисты</p>
                                </span>
                                <span class="moving__stage--num flex__center">
                                    <p class="block__text text__lighten--mobile">3</p>
                                </span>
                            </div>
                        </div>
                        <div class="decision__wrapper mt-4">
                            <div class="decision__stage">
                                <span class="stage__list--product">
                                    <p class="block__text">Доставка инструментов и упаковки</p>
                                </span>
                                <span class="moving__stage--num flex__center">
                                    <p class="block__text text__lighten--mobile">1</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="moving__stages--wrap mt-from-32-to-56">
                        <div class="subtitle__wrap subtitle__wrap--packing mb-16">
                            <p class="block__title">Упаковка</p>
                            <p class="block__title block__title--desktop">Кол-во</p>
                        </div>
                        <div class="moving__stages--block">
                            <div class="moving__stage">
                                <span class="stage__list--product">
                                    <p class="block__text">Скотч лого</p>
                                </span>
                                <span class="moving__stage--num flex__center">
                                    <p class="block__text text__lighten--mobile">6</p>
                                </span>
                            </div>
                            <div class="moving__stage">
                                <span class="stage__list--product">
                                    <p class="block__text">Воздушно-пупырчатая пленка (м)</p>
                                </span>
                                <span class="moving__stage--num flex__center">
                                    <p class="block__text text__lighten--mobile">25</p>
                                </span>
                            </div>
                            <div class="moving__stage">
                                <span class="stage__list--product">
                                    <p class="block__text">Чулок (м)</p>
                                </span>
                                <span class="moving__stage--num flex__center">
                                    <p class="block__text text__lighten--mobile">6</p>
                                </span>
                            </div>
                            <div class="moving__stage">
                                <span class="stage__list--product">
                                    <p class="block__text">Стрейч (рулон)</p>
                                </span>
                                <span class="moving__stage--num flex__center">
                                    <p class="block__text text__lighten--mobile">3</p>
                                </span>
                            </div>
                            <div class="moving__stage">
                                <span class="stage__list--product">
                                    <p class="block__text">Картон (лист)</p>
                                </span>
                                <span class="moving__stage--num flex__center">
                                    <p class="block__text text__lighten--mobile">8</p>
                                </span>
                            </div>
                            <div class="moving__stage">
                                <span class="stage__list--product">
                                    <p class="block__text">Короба большие</p>
                                </span>
                                <span class="moving__stage--num flex__center">
                                    <p class="block__text text__lighten--mobile">15</p>
                                </span>
                            </div>
                            <div class="moving__stage">
                                <span class="stage__list--product">
                                    <p class="block__text">Коробка маленькие</p>
                                </span>
                                <span class="moving__stage--num flex__center">
                                    <p class="block__text text__lighten--mobile">10</p>
                                </span>
                            </div>
                            <div class="moving__stage">
                                <span class="stage__list--product">
                                    <p class="block__text">Бумага (кг)</p>
                                </span>
                                <span class="moving__stage--num flex__center">
                                    <p class="block__text text__lighten--mobile">2</p>
                                </span>
                            </div>
                            <div class="moving__stage">
                                <span class="stage__list--product">
                                    <p class="block__text">Скотч бумажный</p>
                                </span>
                                <span class="moving__stage--num flex__center">
                                    <p class="block__text text__lighten--mobile">1</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="moving__stages--wrap mt-from-32-to-56">
                        <div class="subtitle__wrap mb-from-16-to-24">
                            <p class="block__title">Результат</p>
                        </div>
                        <div class="stages__table">
                            <div class="stages__table--cell">
                                <div class="stages__th">
                                    <p class="block__text block__text--darken text__center--desktop">Время переезда</p>
                                </div>
                                <div class="stages__body">
                                    <p class="block__text text__center--desktop">6 ч 30 мин</p>
                                </div>
                            </div>
                            <div class="stages__table--cell">
                                <div class="stages__th">
                                    <p class="block__text block__text--darken text__center--desktop">Стоимость переезда</p>
                                </div>
                                <div class="stages__body">
                                    <p class="block__text text__center--desktop">11 705 руб</p>
                                </div>
                            </div>
                            <div class="stages__table--cell">
                                <div class="stages__th">
                                    <p class="block__text block__text--darken text__center--desktop">Стоимость упаковки</p>
                                </div>
                                <div class="stages__body">
                                    <p class="block__text text__center--desktop">6 250 руб</p>
                                </div>
                            </div>
                            <div class="stages__table--cell">
                                <div class="stages__th">
                                    <p class="block__text block__text--darken text__center--desktop">Навеска</p>
                                </div>
                                <div class="stages__body">
                                    <p class="block__text text__center--desktop">1 000 руб</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="section section__request pt-from-64-to-124">
        <div class="article__slider">
            <h2 class="subtitle text__center--mobile">Читайте также</h2>
            <div class="swiper-container article-slider pt-from-24-to-56 pb-24-mobile">
                <div class="swiper-wrapper">
                    <div class="swiper-slide custom__slide custom__slide--height">
                        <?php include(THEME_DIR . '/modules/moving-checklist.php'); ?>
                    </div>
                    <div class="swiper-slide custom__slide custom__slide--height">
                        <?php include(THEME_DIR . '/modules/moving-checklist.php'); ?>
                    </div>
                    <div class="swiper-slide custom__slide custom__slide--height">
                        <?php include(THEME_DIR . '/modules/moving-checklist.php'); ?>
                    </div>
                    <div class="swiper-slide custom__slide custom__slide--height">
                        <?php include(THEME_DIR . '/modules/moving-checklist.php'); ?>
                    </div>
                </div>
                <div class="swiper-pagination article-bullets mobile"></div>
            </div>
            <div class="pagination__wrap desktop flex__center">
                <div class="swiper__button--wrap flex__center">
                    <div class="swiper-button-prev flex__center article-button-prev">
                        <!-- slider-arrow-icon.svg -->
                        <svg viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5L12.5172 4.4569C12.6659 4.59845 12.75 4.79474 12.75 5C12.75 5.20526 12.6659 5.40155 12.5172 5.5431L12 5ZM0 4.25L12 4.25V5.75L0 5.75V4.25ZM12.5172 5.5431L8.31724 9.5431L7.28276 8.4569L11.4828 4.4569L12.5172 5.5431ZM11.4828 5.5431L7.28276 1.5431L8.31724 0.456897L12.5172 4.4569L11.4828 5.5431Z" fill="#F58220"/>
                        </svg>
                    </div>
                    <div class="swiper-button-next flex__center article-button-next">
                        <!-- slider-arrow-icon.svg -->
                        <svg viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5L12.5172 4.4569C12.6659 4.59845 12.75 4.79474 12.75 5C12.75 5.20526 12.6659 5.40155 12.5172 5.5431L12 5ZM0 4.25L12 4.25V5.75L0 5.75V4.25ZM12.5172 5.5431L8.31724 9.5431L7.28276 8.4569L11.4828 4.4569L12.5172 5.5431ZM11.4828 5.5431L7.28276 1.5431L8.31724 0.456897L12.5172 4.4569L11.4828 5.5431Z" fill="#F58220"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section pt-from-64-to-112">
        <?php include(THEME_DIR . '/blocks/contact-us-block.php'); ?>
    </section>
    <section class="section section__request pt-from-16-to-48">
        <?php include(THEME_DIR . '/blocks/request-block.php'); ?>
    </section>
</main>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/case.js"></script>
<?php
get_footer();
?>