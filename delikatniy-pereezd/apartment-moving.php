<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Template name: apartment-moving */
 /* Assets ID: apartment-moving */

get_header();
?>
<main class="main flex__center pt-from-88-to-103">
    <section class="section">
        <div class="breadcrumb__wrap flex__center">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li><a href="#">Услуги</a></li>
                <li class="current__page">Квартирный переезд</li>
            </ul>
        </div>
        <div class="action__block flex__center mt-from-24-to-32">
            <div class="action__block--text flex__center">
                <div class="paragraph__text--wrap">
                    <h1 class="title">Квартирный переезд</h1>
                    <p class="block__text mt-from-8-to-16">Планируйте новоселье, а мы упакуем вещи, аккуратно их перевезём и красиво расставим</p>
                    <button class="button__orange button__hero flex__center desktop mt-40" type="button" data-toggle="modal" data-target="#order-call-modal">Заказать звонок</button>
                </div>
            </div>
            <div class="action__block--img flex__center">
                <picture class="flex__center">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/services-hero.png" alt="">
                </picture>
            </div>
        </div>
        <button class="button__orange mobile flex__center mt-24" data-toggle="modal" data-target="#order-call-modal">Заказать звонок</button>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/our-services-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/how-to-move-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/how-calculate-cost-block.php'); ?>
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
        <h2 class="subtitle text__center--mobile mb-from-24-to-56">Возможно, вам это пригодится</h2>
        <?php include(THEME_DIR . '/blocks/stock-block.php'); ?>
    </section>
    <section class="section section__reviews flex__center pt-from-64-to-152">
        <div class="subtitle__wrap mb-from-24-to-56">
            <h2 class="subtitle">Перевезли эти квартиры — <br>перевезём и вашу</h2>
        </div>
        <?php include(THEME_DIR . '/blocks/cases-all-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/our-advice-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/additional-information-block.php'); ?>
    </section>
    <section class="section section__request pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/request-block.php'); ?>
    </section>
</main>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/apartment-moving.js"></script>
<?php
get_footer();
?>