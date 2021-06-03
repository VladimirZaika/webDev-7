<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Template name: individual-review */
 /* Assets ID: individual-review */

get_header();
?>
<main class="main flex__center pt-from-88-to-103">
    <section class="section section__article flex__center">
        <div class="breadcrumb__wrap flex__center">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li><a href="#">Отзывы</a></li>
                <li class="current__page" id="article-name"></li>
            </ul>
        </div>
        <article class="article flex__center pt-from-24-to-64">
            <div class="article__header">
                <a class="go-to__new-blank reverse flex__center" href="#">Все отзывы<span class="link__arrow flex__center"><span>.</span></span></a>
                <div class="mt-from-16-to-24">
                    <time class="date date__news">12.10.2020</time>
                </div>
                <h1 class="title mt-from-16-to-24" id="title-name">Арина Смирнова</h1>
            </div>
            <div class="article__body flex__center mt-from-24-to-56">
                <div class="article__content">
                    <p class="block__text">Любому бизнесу требуются надежные и проверенные партнеры. А при переезде потребность в привлечении внешних услуг возрастает. Новое место, новое окружение, новые задачи. А значит - отделка и дизайн, новая мебель, уборка, подключение техники. Для того чтобы Ваш бизнес существовал комфортно – наши партнеры подготовили для Вас специальные предложения.</p>
                    <p class="block__text mt-24">Любому бизнесу требуются надежные и проверенные партнеры. А при переезде потребность в привлечении внешних услуг возрастает. Новое место, новое окружение, новые задачи. А значит - отделка и дизайн, новая мебель, уборка, подключение техники. Для того чтобы Ваш бизнес существовал комфортно – наши партнеры подготовили для Вас специальные предложения.</p>
                </div>
            </div>
        </article>
    </section>
    <section class="section pt-from-64-to-152">
        <div class="article__slider">
            <h2 class="subtitle text__center--mobile">Читайте также</h2>
            <div class="swiper-container article-slider pt-from-24-to-56 pb-24-mobile">
                <div class="swiper-wrapper">
                    <div class="swiper-slide custom__slide">
                        <?php include(THEME_DIR . '/modules/customer-review.php'); ?>
                    </div>
                    <div class="swiper-slide custom__slide">
                        <?php include(THEME_DIR . '/modules/customer-review.php'); ?>
                    </div>
                    <div class="swiper-slide custom__slide">
                        <?php include(THEME_DIR . '/modules/customer-review.php'); ?>
                    </div>
                    <div class="swiper-slide custom__slide">
                        <?php include(THEME_DIR . '/modules/customer-review.php'); ?>
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
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/contact-us-block.php'); ?>
    </section>
    <section class="section section__request pt-from-16-to-48">
        <?php include(THEME_DIR . '/blocks/request-block.php'); ?>
    </section>
</main>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/individual-review.js"></script>
<?php
get_footer();
?>