<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Template name: about-company */
 /* Assets ID: about-company */

get_header();
?>
<main class="main flex__center pt-from-88-to-103">
    <section class="section">
        <div class="breadcrumb__wrap flex__center">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="current__page">О компании</li>
            </ul>
        </div>
        <div class="action__block flex__center mt-from-24-to-32">
            <div class="action__block--text flex__center">
                <div class="paragraph__text--wrap">
                    <h1 class="title">О компании</h1>
                    <p class="block__text mt-from-8-to-16">С самого основания в 2000 году мы брали пример с лучших, чтобы самим стать образцом для подражания</p>
                </div>
            </div>
            <div class="action__block--img flex__center">
                <picture class="flex__center">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/about-company-hero.png" alt="">
                </picture>
            </div>
        </div>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/how-to-move-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-152">
        <div class="numbers">
            <h2 class="subtitle pb-8">«Деликатный переезд» в цифрах</h2>
            <div class="numbers__wrap flex__center">
                <div class="numbers__block--wrap">
                    <div class="numbers__block first flex__center mt-from-16-to-48">
                        <p class="numbers__title">200</p>
                        <p class="block__text mt-4">специалистов работают в компани</p>
                    </div>
                    <div class="numbers__block flex__center mt-from-16-to-48">
                        <p class="numbers__title">24</p>
                        <p class="block__text mt-4">часа в сутки перевозим квартиры и офисы</p>
                    </div>
                </div>
                <div class="numbers__block--wrap reverse">
                    <div class="numbers__block flex__center mt-from-16-to-48">
                        <p class="numbers__title">16 000</p>
                        <p class="block__text mt-4">офисов переехали с нами</p>
                    </div>
                    <div class="numbers__block flex__center mt-from-16-to-48">
                        <p class="numbers__title">40 000</p>
                        <p class="block__text mt-4">квартир перевезли</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section pt-from-64-to-152">
        <div class="who__are--we">
            <h2 class="subtitle text__center--mobile">Кто мы</h2>
            <div class="swiper-container stuff pt-from-24-to-56 pb-24-mobile">
                <div class="swiper-wrapper">
                    <div class="swiper-slide custom__slide custom__slide--height">
                        <div class="paragraph__block paragraph__stuff">
                            <div class="additional__info--img">
                                <picture class="flex__center">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/stuff.png" alt="">
                                </picture>
                            </div>
                            <div class="additional__info--wrap mt-from-16-to-24">
                                <p class="block__title">«Цитата —  текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.»</p>
                                <p class="name mt-8">Иван Алексеев</p>
                                <p class="position">Должность</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide custom__slide custom__slide--height">
                        <div class="paragraph__block paragraph__stuff">
                            <div class="additional__info--img">
                                <picture class="flex__center">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/stuff.png" alt="">
                                </picture>
                            </div>
                            <div class="additional__info--wrap mt-from-16-to-24">
                                <p class="block__title">«Цитата —  текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.»</p>
                                <p class="name mt-8">Иван Алексеев</p>
                                <p class="position">Должность</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide custom__slide custom__slide--height">
                        <div class="paragraph__block paragraph__stuff">
                            <div class="additional__info--img">
                                <picture class="flex__center">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/stuff.png" alt="">
                                </picture>
                            </div>
                            <div class="additional__info--wrap mt-from-16-to-24">
                                <p class="block__title">«Цитата —  текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.»</p>
                                <p class="name mt-8">Иван Алексеев</p>
                                <p class="position">Должность</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide custom__slide custom__slide--height">
                        <div class="paragraph__block paragraph__stuff">
                            <div class="additional__info--img">
                                <picture class="flex__center">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/stuff.png" alt="">
                                </picture>
                            </div>
                            <div class="additional__info--wrap mt-from-16-to-24">
                                <p class="block__title">«Цитата —  текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.»</p>
                                <p class="name mt-8">Иван Алексеев</p>
                                <p class="position">Должность</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination stuff-bullets mobile"></div>
            </div>
            <div class="pagination__wrap desktop flex__center">
                <div class="swiper__button--wrap flex__center">
                    <div class="swiper-button-prev flex__center stuff-button-prev">
                        <!-- slider-arrow-icon.svg -->
                        <svg viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5L12.5172 4.4569C12.6659 4.59845 12.75 4.79474 12.75 5C12.75 5.20526 12.6659 5.40155 12.5172 5.5431L12 5ZM0 4.25L12 4.25V5.75L0 5.75V4.25ZM12.5172 5.5431L8.31724 9.5431L7.28276 8.4569L11.4828 4.4569L12.5172 5.5431ZM11.4828 5.5431L7.28276 1.5431L8.31724 0.456897L12.5172 4.4569L11.4828 5.5431Z" fill="#F58220"/>
                        </svg>
                    </div>
                    <div class="swiper-button-next flex__center stuff-button-next">
                        <!-- slider-arrow-icon.svg -->
                        <svg viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5L12.5172 4.4569C12.6659 4.59845 12.75 4.79474 12.75 5C12.75 5.20526 12.6659 5.40155 12.5172 5.5431L12 5ZM0 4.25L12 4.25V5.75L0 5.75V4.25ZM12.5172 5.5431L8.31724 9.5431L7.28276 8.4569L11.4828 4.4569L12.5172 5.5431ZM11.4828 5.5431L7.28276 1.5431L8.31724 0.456897L12.5172 4.4569L11.4828 5.5431Z" fill="#F58220"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/contact-us-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/they-talk-about-us-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-152">
        <div class="customer__reviews">
            <h2 class="subtitle text__center--mobile">Отзывы частных клиентов</h2>
            <div class="swiper-container customer-reviews pt-from-24-to-56 pb-24-mobile">
                <div class="swiper-wrapper">
                    <div class="swiper-slide custom__slide custom__slide--height">
                        <div class="paragraph__block paragraph__white paragraph__customer">
                            <div class="customer__reviews--wrap">
                                <time class="date">12.10.2020</time>
                                <p class="block__text mt-8">Добрый день! Обращались за услугами этой компании в связи с тем, сто надо было куда-то деть мебель на время ремонта. Очень порадовала оперативность сотрудников, сразу видно...</p>
                                <p class="block__title mt-16">Арина Смирнова</p>
                                <a class="go-to__new-blank flex__center mt-16" href="#">Читать полностью <span class="link__arrow flex__center"><span>.</span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide custom__slide custom__slide--height">
                        <div class="paragraph__block paragraph__white paragraph__customer">
                            <div class="customer__reviews--wrap">
                                <time class="date">12.10.2020</time>
                                <p class="block__text mt-8">Добрый день! Обращались за услугами этой компании в связи с тем, сто надо было куда-то деть мебель на время ремонта. Очень порадовала оперативность сотрудников, сразу видно...</p>
                                <p class="block__title mt-16">Арина Смирнова</p>
                                <a class="go-to__new-blank flex__center mt-16" href="#">Читать полностью <span class="link__arrow flex__center"><span>.</span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide custom__slide custom__slide--height">
                        <div class="paragraph__block paragraph__white paragraph__customer">
                            <div class="customer__reviews--wrap">
                                <time class="date">12.10.2020</time>
                                <p class="block__text mt-8">Добрый день! Обращались за услугами этой компании в связи с тем, сто надо было куда-то деть мебель на время ремонта. Очень порадовала оперативность сотрудников, сразу видно...</p>
                                <p class="block__title mt-16">Арина Смирнова</p>
                                <a class="go-to__new-blank flex__center mt-16" href="#">Читать полностью <span class="link__arrow flex__center"><span>.</span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide custom__slide custom__slide--height">
                        <div class="paragraph__block paragraph__white paragraph__customer">
                            <div class="customer__reviews--wrap">
                                <time class="date">12.10.2020</time>
                                <p class="block__text mt-8">Добрый день! Обращались за услугами этой компании в связи с тем, сто надо было куда-то деть мебель на время ремонта. Очень порадовала оперативность сотрудников, сразу видно...</p>
                                <p class="block__title mt-16">Арина Смирнова</p>
                                <a class="go-to__new-blank flex__center mt-16" href="#">Читать полностью <span class="link__arrow flex__center"><span>.</span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination customer-bullets mobile"></div>
            </div>
            <div class="pagination__wrap desktop flex__center">
                <div class="swiper__button--wrap flex__center">
                    <div class="swiper-button-prev flex__center customer-button-prev">
                        <!-- slider-arrow-icon.svg -->
                        <svg viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5L12.5172 4.4569C12.6659 4.59845 12.75 4.79474 12.75 5C12.75 5.20526 12.6659 5.40155 12.5172 5.5431L12 5ZM0 4.25L12 4.25V5.75L0 5.75V4.25ZM12.5172 5.5431L8.31724 9.5431L7.28276 8.4569L11.4828 4.4569L12.5172 5.5431ZM11.4828 5.5431L7.28276 1.5431L8.31724 0.456897L12.5172 4.4569L11.4828 5.5431Z" fill="#F58220"/>
                        </svg>
                    </div>
                    <div class="swiper-button-next flex__center customer-button-next">
                        <!-- slider-arrow-icon.svg -->
                        <svg viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5L12.5172 4.4569C12.6659 4.59845 12.75 4.79474 12.75 5C12.75 5.20526 12.6659 5.40155 12.5172 5.5431L12 5ZM0 4.25L12 4.25V5.75L0 5.75V4.25ZM12.5172 5.5431L8.31724 9.5431L7.28276 8.4569L11.4828 4.4569L12.5172 5.5431ZM11.4828 5.5431L7.28276 1.5431L8.31724 0.456897L12.5172 4.4569L11.4828 5.5431Z" fill="#F58220"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/additional-information-block.php'); ?>
    </section>
    <section class="section section__request pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/request-block.php'); ?>
    </section>
</main>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/about-company.js"></script>
<?php
get_footer();
?>