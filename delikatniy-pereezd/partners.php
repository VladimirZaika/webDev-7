<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Template name: partners */
 /* Assets ID: partners */

get_header();
?>
<main class="main main__vacancies flex__center pt-from-88-to-103">
    <section class="section">
        <div class="breadcrumb__wrap flex__center">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="current__page">Партнёры</li>
            </ul>
        </div>
        <div class="action__block flex__center mt-from-24-to-32">
            <div class="action__block--text flex__center">
                <div class="paragraph__text--wrap">
                    <h1 class="title">Партнёры</h1>
                    <p class="block__text mt-from-8-to-16">Любому бизнесу требуются надежные и проверенные партнеры. А при переезде потребность в привлечении внешних услуг возрастает. Новое место, новое окружение, новые задачи. А значит — отделка и дизайн, новая мебель, уборка, подключение техники. Для того чтобы Ваш бизнес существовал комфортно — наши партнеры подготовили для Вас специальные предложения.</p>
                </div>
            </div>
            <div class="action__block--img flex__center">
                <picture class="flex__center">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/partners-hero-new.png" alt="">
                </picture>
            </div>
        </div>
    </section>
    <section class="section section__partners flex__center pt-from-48-to-104">
        <div class="partners">
            <?php include(THEME_DIR . '/modules/partners-card.php'); ?>
            <?php include(THEME_DIR . '/modules/partners-card.php'); ?>
            <?php include(THEME_DIR . '/modules/partners-card.php'); ?>
            <?php include(THEME_DIR . '/modules/partners-card.php'); ?>
            <?php include(THEME_DIR . '/modules/partners-card.php'); ?>
            <?php include(THEME_DIR . '/modules/partners-card.php'); ?>
            <?php include(THEME_DIR . '/modules/partners-card.php'); ?>
            <?php include(THEME_DIR . '/modules/partners-card.php'); ?>
        </div>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/contact-us-block.php'); ?>
    </section>
    <section class="section section__request pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/request-block.php'); ?>
    </section>
</main>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/partners.js"></script>
<?php
get_footer();
?>