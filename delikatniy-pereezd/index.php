<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Assets ID: lending */

get_header();
?>
<main class="main flex__center">
    <section class="section flex__center landing__hero">
        <div class="section__wrap flex__center hero">
            <div class="swiper-container swiper-hero">
                <div class="swiper-wrapper">
                    <div class="swiper-slide custom__slide">
                        <div class="landing__hero--content">
                            <div class="landing__text--wrap flex__center">
                                <h1 class="title hero__title">Переезжайте легко, заботы мы берём на себя</h1>
                                <p class="sub__text">Работаем по договору, приезжаем вовремя и бережём ваши вещи как свои</p>
                                <button class="button__orange button__hero desktop flex__center mt-40" type="button" data-toggle="modal" data-target="#order-call-modal">Заказать звонок</button>
                            </div>
                            <div class="landing__img--wrap flex__center">
                                <picture>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/box-with-cart-hero.png" alt="">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide custom__slide">
                        <div class="landing__hero--content">
                            <div class="landing__text--wrap flex__center">
                                <h1 class="title hero__title">Переезжайте легко, заботы мы берём на себя</h1>
                                <p class="sub__text">Работаем по договору, приезжаем вовремя и бережём ваши вещи как свои</p>
                                <button class="button__orange button__hero desktop flex__center mt-40" type="button" data-toggle="modal" data-target="#order-call-modal">Заказать звонок</button>
                            </div>
                            <div class="landing__img--wrap flex__center">
                                <picture>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/box-with-cart-hero.png" alt="">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide custom__slide">
                        <div class="landing__hero--content">
                            <div class="landing__text--wrap flex__center">
                                <h1 class="title hero__title">Переезжайте легко, заботы мы берём на себя</h1>
                                <p class="sub__text">Работаем по договору, приезжаем вовремя и бережём ваши вещи как свои</p>
                                <button class="button__orange button__hero desktop flex__center mt-40" type="button" data-toggle="modal" data-target="#order-call-modal">Заказать звонок</button>
                            </div>
                            <div class="landing__img--wrap flex__center">
                                <picture>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/box-with-cart-hero.png" alt="">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide custom__slide">
                        <div class="landing__hero--content">
                            <div class="landing__text--wrap flex__center">
                                <h1 class="title hero__title">Переезжайте легко, заботы мы берём на себя</h1>
                                <p class="sub__text">Работаем по договору, приезжаем вовремя и бережём ваши вещи как свои</p>
                                <button class="button__orange button__hero desktop flex__center mt-40" type="button" data-toggle="modal" data-target="#order-call-modal">Заказать звонок</button>
                            </div>
                            <div class="landing__img--wrap flex__center">
                                <picture>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/box-with-cart-hero.png" alt="">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__pagination--wrap flex__center">
                <div class="swiper__button--wrap flex__center">
                    <div class="swiper-button-prev flex__center hero-button-prev">
                        <!-- slider-arrow-icon.svg -->
                        <svg viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5L12.5172 4.4569C12.6659 4.59845 12.75 4.79474 12.75 5C12.75 5.20526 12.6659 5.40155 12.5172 5.5431L12 5ZM0 4.25L12 4.25V5.75L0 5.75V4.25ZM12.5172 5.5431L8.31724 9.5431L7.28276 8.4569L11.4828 4.4569L12.5172 5.5431ZM11.4828 5.5431L7.28276 1.5431L8.31724 0.456897L12.5172 4.4569L11.4828 5.5431Z" fill="#F58220"/>
                        </svg>
                    </div>
                    <div class="swiper-button-next flex__center hero-button-next">
                        <!-- slider-arrow-icon.svg -->
                        <svg viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5L12.5172 4.4569C12.6659 4.59845 12.75 4.79474 12.75 5C12.75 5.20526 12.6659 5.40155 12.5172 5.5431L12 5ZM0 4.25L12 4.25V5.75L0 5.75V4.25ZM12.5172 5.5431L8.31724 9.5431L7.28276 8.4569L11.4828 4.4569L12.5172 5.5431ZM11.4828 5.5431L7.28276 1.5431L8.31724 0.456897L12.5172 4.4569L11.4828 5.5431Z" fill="#F58220"/>
                        </svg>
                    </div>
                </div>
                <div class="hero-progressbar__wrap">
                    <div class="hero-progressbar" id="hero-progressbar"></div>
                </div>
                <div class="swiper-pagination swiper-count flex__center"></div>
            </div>
            <button class="button__orange button__hero mobile flex__center" type="button" data-toggle="modal" data-target="#order-call-modal">Заказать звонок</button>
        </div>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/how-to-move-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-152">
        <div class="tasks">
                <div class="task__img flex__center desktop" href="#">
                    <div class="task__img--static">
                        <picture class="flex__center">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/tasks-block-desktop.png" alt="">
                        </picture>
                    </div>
                    <div class="task__img--wrap" id="office-moving-img">
                        <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/tasks-block-2.png" alt="">
                        </picture>
                    </div>
                    <div class="task__img--wrap" id="furniture-transportation-img">
                        <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/tasks-block-3.png" alt="">
                        </picture>
                    </div>
                    <div class="task__img--wrap" id="packing-img">
                        <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/tasks-block-4.png" alt="">
                        </picture>
                    </div>
                    <div class="task__img--wrap" id="keeping-img">
                        <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/tasks-block-5.png" alt="">
                        </picture>
                    </div>
                    <div class="task__img--wrap" id="furniture-assembly-img">
                        <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/tasks-block-6.png" alt="">
                        </picture>
                    </div>
                </div>
            <div class="tasks__subtitle--wrap">
                <h2 class="subtitle">Переезд «под ключ» или отдельные услуги — всё зависит от ваших задач</h2>
                <div class="tasks__links--block flex__center mt-56">
                    <div class="tasks__links--wrap">
                        <a class="task__link flex__center" id="apartment-moving-btn" href="#">Квартирный переезд</a>
                        <a class="task__link flex__center" id="office-moving-btn" href="#">Офисный переезд</a>
                    </div>
                    <div class="tasks__links--wrap mt-16">
                        <a class="task__link flex__center" id="furniture-transportation-btn" href="#">Перевозка мебели</a>
                        <a class="task__link flex__center" id="packing-btn" href="#">Упаковка</a>
                    </div>
                    <div class="tasks__links--wrap mt-16">
                        <a class="task__link flex__center" id="keeping-btn" href="#">Хранение на складе</a>
                        <a class="task__link flex__center" id="furniture-assembly-btn" href="#">Сборка мебели</a>
                    </div>
                    <a class="go-to__new-blank flex__center mt-56" href="#">Все услуги <span class="link__arrow flex__center"><span>.</span></span></a>
                </div>
            </div>
            <div class="tasks__links--block mobile mt-24">
                <a class="task__link--img flex__center" href="#">
                    <div class="img__bg">.</div>
                    <div class="img__text">
                        <p>Квартирный переезд</p>
                    </div>
                    <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/tasks-block-1.png" alt="">
                    </picture>
                </a>
                <a class="task__link--img flex__center" href="#">
                    <div class="img__bg">.</div>
                    <div class="img__text">
                        <p>Офисный переезд</p>
                    </div>
                    <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/tasks-block-2.png" alt="">
                    </picture>
                </a>
                <a class="task__link--img flex__center mt-16" href="#">
                    <div class="img__bg">.</div>
                    <div class="img__text">
                        <p>Перевозка мебели</p>
                    </div>
                    <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/tasks-block-3.png" alt="">
                    </picture>
                </a>
                <a class="task__link--img flex__center mt-16" href="#">
                    <div class="img__bg">.</div>
                    <div class="img__text">
                        <p>Упаковка</p>
                    </div>
                    <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/tasks-block-4.png" alt="">
                    </picture>
                </a>
                <a class="task__link--img flex__center mt-16" href="#">
                    <div class="img__bg">.</div>
                    <div class="img__text">
                        <p>Хранение на складе</p>
                    </div>
                    <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/tasks-block-5.png" alt="">
                    </picture>
                </a>
                <a class="task__link--img flex__center mt-16" href="#">
                    <div class="img__bg">.</div>
                    <div class="img__text">
                        <p>Сборка мебели</p>
                    </div>
                    <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/tasks-block-6.png" alt="">
                    </picture>
                </a>

                <a class="button__white flex__center mt-24" href="#">Все услуги</a>
            </div>
        </div>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/about-cost-block.php'); ?>
    </section>
    <section class="section section__four-rules flex__center mt-from-64-to-152">
        <div class="section__wrap four-rules">
            <?php include(THEME_DIR . '/blocks/four-rules-block.php'); ?>
        </div>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/they-talk-about-us-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/contact-us-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/additional-information-block.php'); ?>
    </section>
    <section class="section section__request pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/request-block.php'); ?>
    </section>
</main>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/landing.js"></script>
<?php
get_footer();
?>
