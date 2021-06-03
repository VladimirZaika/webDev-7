<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Template name: reviews */
 /* Assets ID: reviews */

get_header();
?>
<main class="main flex__center pt-from-88-to-103">
    <section class="section">
        <div class="breadcrumb__wrap flex__center">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="current__page">Отзывы</li>
            </ul>
        </div>
        <div class="action__block flex__center mt-from-24-to-32">
            <div class="action__block--text flex__center">
                <div class="paragraph__text--wrap offer__text--wrap">
                    <h1 class="title">О нас говорят</h1>
                    <p class="block__text mt-from-8-to-16">К нам возвращаются и советуют коллегам, родственникам и друзьям. Уже 350 частных клиентов и 170 компаний оставили отзывы. Следующий может быть вашим.</p>
                    <div class="btn__wrap btn__wrap--reviews mt-from-24-to-40">
                        <button class="button__orange button__reviews flex__center" type="button">Оставить отзыв</button>
                        <button class="button__white button__qcs flex__center" type="button">Написать в Службу контроля качества</button>
                    </div>
                </div>
            </div>
            <div class="action__block--img flex__center">
                <picture class="flex__center">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/partners-hero-new.png" alt="">
                </picture>
            </div>
        </div>
    </section>
    <section class="section section__reviews flex__center pt-from-48-to-80">
        <div class="custom-select mobile mb-8">
            <div class="select-selected">Отзывы частных клиентов</div>
            <div class="select-items select-hide">
                <button class="button__select mobile button__private" type="button">Отзывы частных клиентов</button>
                <button class="button__select mobile button__corporate" type="button">Отзывы компаний</button>
            </div>
        </div>
        <div class="button__select--wrap button__reviews--wrap desktop mb-8">
            <button class="button__select desktop button__private flex__center" type="button">Отзывы частных клиентов </button>
            <button class="button__select desktop button__corporate flex__center ml-16" type="button">Отзывы компаний</button>
        </div>
        <div class="news__content--wrap private__clients private__clients--reviews">
            <?php include(THEME_DIR . '/modules/customer-review.php'); ?>
            <?php include(THEME_DIR . '/modules/customer-review.php'); ?>
            <?php include(THEME_DIR . '/modules/customer-review.php'); ?>
            <?php include(THEME_DIR . '/modules/customer-review.php'); ?>
            <?php include(THEME_DIR . '/modules/customer-review.php'); ?>
            <?php include(THEME_DIR . '/modules/customer-review.php'); ?>
            <?php include(THEME_DIR . '/modules/customer-review.php'); ?>
            <?php include(THEME_DIR . '/modules/customer-review.php'); ?>
            <?php include(THEME_DIR . '/modules/customer-review.php'); ?>
        </div>
        <div class="news__content--wrap corporate__clients private__clients--reviews">
            <div class="corporate__review--wrap mt-from-16-to-48">
                <?php include(THEME_DIR . '/modules/corporate-review.php'); ?>
            </div>
            <div class="corporate__review--wrap mt-from-16-to-48">
                <?php include(THEME_DIR . '/modules/corporate-review-second.php'); ?>
            </div>
            <div class="corporate__review--wrap mt-from-16-to-48">
                <?php include(THEME_DIR . '/modules/corporate-review.php'); ?>
            </div>
            <div class="corporate__review--wrap mt-from-16-to-48">
                <?php include(THEME_DIR . '/modules/corporate-review-second.php'); ?>
            </div>
            <div class="corporate__review--wrap mt-from-16-to-48">
                <?php include(THEME_DIR . '/modules/corporate-review.php'); ?>
            </div>
            <div class="corporate__review--wrap mt-from-16-to-48">
                <?php include(THEME_DIR . '/modules/corporate-review-second.php'); ?>
            </div>
        </div>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/company-logo-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/contact-us-block.php'); ?>
    </section>
    <section class="section section__request pt-from-16-to-48">
        <?php include(THEME_DIR . '/blocks/request-block.php'); ?>
    </section>
</main>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/reviews.js"></script>
<?php
get_footer();
?>