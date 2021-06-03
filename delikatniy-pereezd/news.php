<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Template name: news */
 /* Assets ID: news */

get_header();
?>
<main class="main flex__center pt-from-88-to-103">
    <section class="section">
        <div class="breadcrumb__wrap flex__center">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="current__page" id="news-breadcrumb">Новости</li>
                <li class="current__page diactivated" id="blog-breadcrumb">Блог</li>
            </ul>
        </div>
        <div class="action__block flex__center mt-from-24-to-32">
            <div class="action__block--text flex__center">
                <div class="paragraph__text--wrap" id="news-header">
                    <h1 class="title">Новости</h1>
                    <p class="block__text mt-from-8-to-16">Узнайте об изменениях в графике работы, актуальных событиях и наших достижениях.</p>
                </div>
                <div class="paragraph__text--wrap diactivated" id="blog-header">
                    <h1 class="title">Что ещё нужно знать о переезде</h1>
                    <p class="block__text mt-from-8-to-16">Это наш блог. Здесь мы рассказываем, как устроить переезд и не сойти с ума.</p>
                </div>
            </div>
            <div class="action__block--img flex__center">
                <picture class="flex__center">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/news-hero.png" alt="">
                </picture>
            </div>
        </div>
    </section>
    <section class="section flex__center pt-from-64-to-152">
        <div class="news__content flex__center">
            <div class="custom-select mobile mt-16">
                <div class="select-selected">Новости</div>
                <div class="select-items select-hide">
                    <button class="button__select mobile button__news" type="button">Новости</button>
                    <button class="button__select mobile button__mms" type="button">СМИ о нас</button>
                    <button class="button__select mobile button__blog" type="button">Блог</button>
                </div>
            </div>
            <div class="news__categories--wrap mobile mt-8 diactivated">
                <?php include(THEME_DIR . '/modules/news-categories.php'); ?>
            </div>
            <div class="button__desktop--wrapper">
                <div class="button__select--wrap desktop button__news--wrap">
                    <button class="button__select desktop button__news flex__center" type="button">Новости</button>
                    <button class="button__select desktop button__mms flex__center ml-16" type="button">СМИ о нас</button>
                    <button class="button__select desktop button__blog flex__center ml-16" type="button">Блог</button>
                </div>
                <div class="news__categories--wrap desktop diactivated">
                    <?php include(THEME_DIR . '/modules/news-categories.php'); ?>
                </div>
            </div>
            <div class="news__content--wrap news-wrap">
                <?php include(THEME_DIR . '/modules/news-card.php'); ?>
                <?php include(THEME_DIR . '/modules/news-card-second.php'); ?>
                <?php include(THEME_DIR . '/modules/news-card-third.php'); ?>
                <?php include(THEME_DIR . '/modules/news-card.php'); ?>
                <?php include(THEME_DIR . '/modules/news-card-second.php'); ?>
                <?php include(THEME_DIR . '/modules/news-card-third.php'); ?>
                <?php include(THEME_DIR . '/modules/news-card.php'); ?>
                <?php include(THEME_DIR . '/modules/news-card-second.php'); ?>
                <?php include(THEME_DIR . '/modules/news-card-third.php'); ?>
            </div>
            <div class="news__content--wrap mms-wrap diactivated">
                <?php include(THEME_DIR . '/modules/news-card.php'); ?>
                <?php include(THEME_DIR . '/modules/news-card-second.php'); ?>
                <?php include(THEME_DIR . '/modules/news-card-third.php'); ?>
                <?php include(THEME_DIR . '/modules/news-card.php'); ?>
                <?php include(THEME_DIR . '/modules/news-card-second.php'); ?>
                <?php include(THEME_DIR . '/modules/news-card-third.php'); ?>
                <?php include(THEME_DIR . '/modules/news-card.php'); ?>
                <?php include(THEME_DIR . '/modules/news-card-second.php'); ?>
                <?php include(THEME_DIR . '/modules/news-card-third.php'); ?>
            </div>
            <div class="news__content--wrap blog-wrap diactivated">
                <?php include(THEME_DIR . '/modules/blog-card-apartment.php'); ?>
                <?php include(THEME_DIR . '/modules/blog-card-office.php'); ?>
                <?php include(THEME_DIR . '/modules/blog-card-apartment.php'); ?>
                <?php include(THEME_DIR . '/modules/blog-card-apartment.php'); ?>
                <?php include(THEME_DIR . '/modules/blog-card-office.php'); ?>
                <?php include(THEME_DIR . '/modules/blog-card-apartment.php'); ?>
                <?php include(THEME_DIR . '/modules/blog-card-apartment.php'); ?>
                <?php include(THEME_DIR . '/modules/blog-card-office.php'); ?>
                <?php include(THEME_DIR . '/modules/blog-card-apartment.php'); ?>
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
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/news.js"></script>
<?php
get_footer();
?>