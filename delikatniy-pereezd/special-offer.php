<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Template name: special-offer */
 /* Assets ID: special-offer */

get_header();
?>
<main class="main flex__center pt-from-88-to-103">
    <section class="section">
        <div class="breadcrumb__wrap desktop flex__center">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="current__page">Спецпредложения</li>
            </ul>
        </div>
        <div class="cases__header mt-from-24-to-112">
            <div class="article__content">
                <h1 class="title">Наши спецпредложения</h1>
                <p class="block__text mt-from-8-to-16">Ознакомьтесь со скидками и акциями. Возможно, ваш переезд обойдётся дешевле.</p>
            </div>
        </div>
    </section>
    <section class="section mt-from-48-to-80">
        <div class="stock">
            <div class="action__block reverse reverse__desktop flex__center">
                <div class="action__block--text flex__center">
                    <div class="paragraph__text--wrap offer__text--wrap">
                        <p class="block__title">Помощь грузчиков от 1 950 ₽</p>
                        <p class="block__text mt-8">Акция действует ежедневно на услуги по разборке, сборке, перестановке мебели и погрузо-разгрузочные работы. В стоимость входит 2 часа работы 2 грузчиков. Дополнительный час работы 1-го специалиста — 450 р./час.</p>
                        <button class="button__orange button__hero flex__center mt-24" type="button" data-toggle="modal" data-target="#order-call-modal">Заказать звонок</button>
                    </div>
                </div>
                <div class="action__block--img reverse flex__center">
                    <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/stock-img-1.png" alt="">
                    </picture>
                </div>
            </div>
            <div class="action__block offer__reverse--mobile flex__center mt-from-16-to-48">
                <div class="action__block--text flex__center">
                    <div class="paragraph__text--wrap offer__text--wrap">
                        <p class="block__title">Помощь грузчиков от 1 950 ₽</p>
                        <p class="block__text mt-8">Акция действует ежедневно на услуги по разборке, сборке, перестановке мебели и погрузо-разгрузочные работы. В стоимость входит 2 часа работы 2 грузчиков. Дополнительный час работы 1-го специалиста — 450 р./час.</p>
                        <button class="button__orange button__hero flex__center mt-24" type="button" data-toggle="modal" data-target="#order-call-modal">Заказать звонок</button>
                    </div>
                </div>
                <div class="action__block--img offer__radius--mobile flex__center">
                    <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/stock-img-2.png" alt="">
                    </picture>
                </div>
            </div>
        </div>
        <div class="stock mt-from-16-to-48">
            <div class="action__block reverse reverse__desktop flex__center">
                <div class="action__block--text flex__center">
                    <div class="paragraph__text--wrap offer__text--wrap">
                        <p class="block__title">Помощь грузчиков от 1 950 ₽</p>
                        <p class="block__text mt-8">Акция действует ежедневно на услуги по разборке, сборке, перестановке мебели и погрузо-разгрузочные работы. В стоимость входит 2 часа работы 2 грузчиков. Дополнительный час работы 1-го специалиста — 450 р./час.</p>
                        <button class="button__orange button__hero flex__center mt-24" type="button" data-toggle="modal" data-target="#order-call-modal">Заказать звонок</button>
                    </div>
                </div>
                <div class="action__block--img reverse flex__center">
                    <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/stock-img-1.png" alt="">
                    </picture>
                </div>
            </div>
            <div class="action__block offer__reverse--mobile flex__center mt-from-16-to-48">
                <div class="action__block--text flex__center">
                    <div class="paragraph__text--wrap offer__text--wrap">
                        <p class="block__title">Помощь грузчиков от 1 950 ₽</p>
                        <p class="block__text mt-8">Акция действует ежедневно на услуги по разборке, сборке, перестановке мебели и погрузо-разгрузочные работы. В стоимость входит 2 часа работы 2 грузчиков. Дополнительный час работы 1-го специалиста — 450 р./час.</p>
                        <button class="button__orange button__hero flex__center mt-24" type="button" data-toggle="modal" data-target="#order-call-modal">Заказать звонок</button>
                    </div>
                </div>
                <div class="action__block--img offer__radius--mobile flex__center">
                    <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/stock-img-2.png" alt="">
                    </picture>
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
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/special-offer.js"></script>
<?php
get_footer();
?>