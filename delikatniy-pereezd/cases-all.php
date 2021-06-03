<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Template name: cases-all */
 /* Assets ID: cases-all */

get_header();
?>
<main class="main flex__center pt-from-88-to-103">
    <section class="section">
        <div class="breadcrumb__wrap desktop flex__center">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="current__page">Кейсы переездов</li>
            </ul>
        </div>
        <div class="cases__header mt-from-24-to-112">
            <div class="article__content">
                <h1 class="title">Эти квартиры и офисы уже переехали с нами</h1>
                <p class="block__text mt-from-8-to-16">Каждый заказ рассчитывается индивидуально. Изучите реальные примеры выполненных переездов, чтобы оценить ориентировочную стоимость вашего.</p>
            </div>
        </div>
    </section>
    <section class="section section__reviews flex__center pt-from-48-to-80">
        <?php include(THEME_DIR . '/blocks/cases-all-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-112">
        <?php include(THEME_DIR . '/blocks/contact-us-block.php'); ?>
    </section>
    <section class="section section__request pt-from-16-to-48">
        <?php include(THEME_DIR . '/blocks/request-block.php'); ?>
    </section>
</main>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/cases-all.js"></script>
<?php
get_footer();
?>