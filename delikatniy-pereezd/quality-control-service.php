<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Template name: quality-control-service */
 /* Assets ID: quality-control-service */

get_header();
?>
<main class="main flex__center pt-from-88-to-103">
    <section class="section">
        <div class="breadcrumb__wrap flex__center">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="current__page">Служба контроля качества</li>
            </ul>
        </div>
        <div class="action__block flex__center mt-from-24-to-32">
            <div class="action__block--text flex__center">
                <div class="paragraph__text--wrap">
                    <h1 class="title">Служба контроля качества</h1>
                    <p class="block__text mt-from-8-to-16">Чтобы быть лучшими не только на словах, в «Деликатном переезде» есть Служба контроля качества. Напишите нам, если у вас есть предложения или замечания о наших услугах.</p>
                    <button class="button__orange button__hero flex__center desktop mt-40" type="button">Написать в СКК</button>
                </div>
            </div>
            <div class="action__block--img flex__center">
                <picture class="flex__center">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/quality-control-service-hero.png" alt="">
                </picture>
            </div>
        </div>
        <button class="button__orange mobile flex__center desktop mt-24" type="button">Написать в СКК</button>
    </section>
    <section class="section pt-from-64-to-152">
        <div class="qcs__watch">
            <div class="tasks__subtitle--wrap">
                <h2 class="subtitle text__cente--mobile">Служба контроля качества следит, чтобы...</h2>
            </div>
            <div class="qcs__watch-steps">
                <div class="border__dashed qcs">.</div>
                <div class="paragraph__block paragraph__four-rules corporate qcs">
                    <div class="paragraph__cost--wrap qcs">
                        <div class="rule__count flex__center qcs">
                            <span class="rule__count--text">01</span>
                        </div>
                        <div class="paragraph__text--wrap qcs">
                            <p class="block__title">Переезд начинался вовремя и не растягивался надолго</p>
                        </div>
                    </div>
                </div>
                <div class="paragraph__block paragraph__four-rules corporate qcs mt-from-16-to-48">
                    <div class="paragraph__cost--wrap qcs">
                        <div class="rule__count flex__center qcs">
                            <span class="rule__count--text">02</span>
                        </div>
                        <div class="paragraph__text--wrap qcs">
                            <p class="block__title">Вещи были упакованы аккуратно и по нашим стандартам</p>
                        </div>
                    </div>
                </div>
                <div class="paragraph__block paragraph__four-rules corporate qcs mt-from-16-to-48">
                    <div class="paragraph__cost--wrap qcs">
                        <div class="rule__count flex__center qcs">
                            <span class="rule__count--text">03</span>
                        </div>
                        <div class="paragraph__text--wrap qcs">
                            <p class="block__title">Все специалисты были опрятны</p>
                        </div>
                    </div>
                </div>
                <div class="paragraph__block paragraph__four-rules corporate qcs mt-from-16-to-48">
                    <div class="paragraph__cost--wrap qcs">
                        <div class="rule__count flex__center qcs">
                            <span class="rule__count--text">04</span>
                        </div>
                        <div class="paragraph__text--wrap qcs">
                            <p class="block__title">Итоговая стоимость переезда была максимально приближена к первоначальному расчёту</p>
                        </div>
                    </div>
                </div>
                <div class="paragraph__block paragraph__four-rules corporate qcs mt-from-16-to-48">
                    <div class="paragraph__cost--wrap qcs">
                        <div class="rule__count flex__center qcs">
                            <span class="rule__count--text">05</span>
                        </div>
                        <div class="paragraph__text--wrap qcs">
                            <p class="block__title">Задачи внутри бригады распределялись эффективно и все сотрудники на месте были заняты делом</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section pt-from-64-to-152">
        <div class="qcs__request flex__center">
            <div class="qcs__request--wrap">
                <div class="qcs-request__subtitle--wrap">
                    <h2 class="subtitle mobile">Если у вас вопрос по переезду, то укажите следующие данные:</h2>
                    <h2 class="subtitle desktop">Написать в службу контроля качества</h2>
                </div>
                <form class="qcs__form mt-from-24-to-56" id="request-form" action="/" methode="post">
                    <div class="qcs__input--wrap">
                        <input class="qcs__input" type="text" placeholder="Номер договора*" required>
                        <input class="qcs__input" type="text" placeholder="Дата*" required>
                    </div>
                    <textarea class="qcs__textarea mt-16" placeholder="Если у вас вопрос по переезду, то укажите следующие данные, номер договора, дата, адрес отправления"></textarea>
                    <div class="qcs__form--footer mt-24">
                        <input class="button__orange qcs flex__center" type="submit" value="Отправить">
                        <div class="processing__data qcs flex__center">
                            <p class="processing__data--text text__center--mobile">Нажимая на кнопку «Оставить  заявку», вы даете согласие <a class="processing__data--link" href="#">на обработку персональных данных</a></p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="request__successful--purchase">
                <div class="request__successful--purchase__text--wrap">
                    <h2 class="subtitle text__center--mobile">Заявка отправлена успешно!</h2>
                    <p class="block__text text__center--mobile mt-from-8-to-16">Наш менеджер свяжется с вами в указанное время.</p>
                </div>
                <button class="button__orange button__purchase--request flex__center mt-24-mobile" type="button">Отправить ещё</button>
            </div>
        </div>
    </section>
</main>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/quality-controle-service.js"></script>
<?php
get_footer();
?>