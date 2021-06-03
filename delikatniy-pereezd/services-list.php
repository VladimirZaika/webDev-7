<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Template name: services-list */
 /* Assets ID: services-list */

get_header();
?>
<main class="main flex__center pt-from-88-to-103">
    <section class="section">
        <div class="breadcrumb__wrap desktop flex__center">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="current__page">Услуги</li>
            </ul>
        </div>

        <div class="services__list--wrap mt-from-24-to-112">
            <h1 class="title mb-from-24-to-56">Услуги</h1>
            <div class="custom-select mobile">
                <div class="select-selected">Частным клиентам</div>
                <div class="select-items select-hide">
                    <button class="button__select mobile button__private" type="button">Частным клиентам</button>
                    <button class="button__select mobile button__corporate" type="button">Корпоративным клиентам</button>
                </div>
            </div>
            <div class="services__footer--import">
                <?php include(THEME_DIR . '/blocks/services-block.php'); ?>
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
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/services-list.js"></script>
<?php
get_footer();
?>