<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Template name: vacancies */
 /* Assets ID: vacancies */

get_header();
?>
<main class="main main__vacancies flex__center pt-from-88-to-103">
    <section class="section">
        <div class="breadcrumb__wrap flex__center">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="current__page">Вакансии</li>
            </ul>
        </div>
        <div class="action__block flex__center mt-from-24-to-32">
            <div class="action__block--text flex__center">
                <div class="paragraph__text--wrap">
                    <h1 class="title">Вакансии</h1>
                    <p class="block__text mt-from-8-to-16">У нас работают не просто грузчики, а многопрофильные специалисты, которые знают всё о переезде. Хотите стать частью нашей команды — откликнитесь на подходящую вакансию, пройдите отбор и приступайте к работе.</p>
                    <button class="button__orange button__hero flex__center desktop mt-40" type="button">Хочу работать</button>
                </div>
            </div>
            <div class="action__block--img flex__center">
                <picture class="flex__center">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/vacancies-hero.png" alt="">
                </picture>
            </div>
        </div>
        <button class="button__orange mobile flex__center desktop mt-24" type="button">Хочу работать</button>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/vacancies-block.php'); ?>
    </section>
</main>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/vacancies.js"></script>
<?php
get_footer();
?>