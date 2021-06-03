<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Template name: packing-shop */
 /* Assets ID: packing-shop */

get_header();
?>
<main class="main flex__center pt-from-88-to-103">
    <section class="section">
        <div class="breadcrumb__wrap flex__center">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="current__page">Магазин упаковки</li>
            </ul>
        </div>
        <div class="action__block flex__center mt-from-24-to-32">
            <div class="action__block--text flex__center">
                <div class="paragraph__text--wrap">
                    <h1 class="title">Магазин упаковки</h1>
                    <p class="block__text mt-from-8-to-16">Фамильный фарфор, новая плазма и коллекция фикусов точно переживут переезд, если правильно их упаковать. Коробки, чехлы для одежды и другие товары можно купить у нас в магазине.</p>
                    <button class="button__orange button__hero flex__center desktop mt-40" type="button" data-toggle="modal" data-target="#order-call-modal">Заказать звонок</button>
                </div>
            </div>
            <div class="action__block--img flex__center">
                <picture class="flex__center">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/packing-shop-hero.png" alt="">
                </picture>
            </div>
        </div>
        <button class="button__orange mobile flex__center mt-24" data-toggle="modal" data-target="#order-call-modal">Заказать звонок</button>
    </section>
    <section class="section pt-from-64-to-152">
        <div class="shop__content flex__center">
            <div class="subtitle__wrap">
                <h2 class="subtitle mobile">Категории товаров</h2>
            </div>
            <div class="custom-select mobile mt-16">
                <div class="select-selected">Все</div>
                <div class="select-items select-hide">
                    <button class="button__select mobile all-products" type="button">Все</button>
                    <button class="button__select mobile button__carton-boxes" type="button">Картонные коробки</button>
                    <button class="button__select mobile button__moving-kits" type="button">Наборы для переезда</button>
                    <button class="button__select mobile button__air-bubble-wrap" type="button">Воздушно-пузырчатая плёнка</button>
                    <button class="button__select mobile button__stretch-film" type="button">Стрейч-пленка</button>
                    <button class="button__select mobile button__duct-tape" type="button">Клейкая лента</button>
                    <button class="button__select mobile button__related-products" type="button">Сопутствующие товары</button>
                </div>
            </div>
            <div class="subtitle__wrap">
                <div class="button__select--wrap desktop">
                    <button class="button__select desktop all-products flex__center" type="button">Все</button>
                    <button class="button__select desktop button__carton-boxes flex__center ml-16" type="button">Картонные коробки</button>
                    <button class="button__select desktop button__moving-kits flex__center ml-16" type="button">Наборы для переезда</button>
                    <button class="button__select desktop button__air-bubble-wrap flex__center ml-16" type="button">Воздушно-пузырчатая плёнка</button>
                    <button class="button__select desktop button__stretch-film flex__center ml-16" type="button">Стрейч-пленка</button>
                    <button class="button__select desktop button__duct-tape flex__center mt-16" type="button">Клейкая лента</button>
                    <button class="button__select desktop button__related-products flex__center mt-16 ml-16" type="button">Сопутствующие товары</button>
                </div>
            </div>
            <div class="shop__content--wrap carton-boxes">
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
            </div>
            <div class="shop__content--wrap moving-kits">
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
            </div>
            <div class="shop__content--wrap air-bubble-wrap">
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
            </div>
            <div class="shop__content--wrap stretch-film">
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
            </div>
            <div class="shop__content--wrap duct-tape">
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
            </div>
            <div class="shop__content--wrap related-products">
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
                <?php include(THEME_DIR . '/modules/product-card.php'); ?>
            </div>
        </div>
    </section>
    <section class="section pt-from-64-to-152">
        <h2 class="subtitle text__center--mobile mb-from-24-to-56">Акции</h2>
        <?php include(THEME_DIR . '/blocks/stock-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/contact-us-block.php'); ?>
    </section>
    <section class="section section__request pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/request-block.php'); ?>
    </section>
</main>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/packing-shop.js"></script>
<?php
get_footer();
?>