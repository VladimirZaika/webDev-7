<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Template name: contacts */
 /* Assets ID: contacts */

get_header();
?>
<main class="main flex__center pt-from-88-to-103">
    <section class="section">
        <div class="breadcrumb__wrap desktop flex__center">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="current__page">Контакты</li>
            </ul>
        </div>
        <div class="cases__header mt-from-24-to-112">
            <div class="article__content">
                <h1 class="title">Контакты </br>в Санкт-Петербурге</h1>
            </div>
        </div>
    </section>
    <section class="section mt-from-48-to-80">
        <div class="map__wrapper flex__center">
            <div class="contacts__information">
                <a class="contacts__information--block" href="#">
                    <p class="contacts__title">Телефон</p>
                    <p class="block__title mt-4">+7 (812) 210-32-88</p>
                </a>
                <a class="contacts__information--block mt-16" href="#">
                    <p class="contacts__title">Почта</p>
                    <p class="block__title mt-4">+7 (812) 210-32-88</p>
                </a>
                <address class="contacts__address mt-16">
                    <p class="contacts__title">Адрес офиса</p>
                    <p class="block__title mt-4">Санкт-Петербург, 196 084, Детский пер., д. 5, офис 316</p>
                </address>
                <address class="contacts__address mt-16">
                    <p class="contacts__title">Адрес склада</p>
                    <p class="block__title mt-4">Санкт-Петербург, 198206, Петергофское шоссе, д. 74, лит. Б.</p>
                </address>
                <div class="working__time mt-from-24-to-40">
                    <div class="working__time--wrap">
                        <p class="contacts__title">Время приёма звонков: каждый день с 09:00 до 21:00</p>
                    </div>
                    <div class="working__time--wrap">
                        <p class="contacts__title">Время работы офиса: понедельник – пятница с 09:00 до 19:00</p>
                    </div>
                </div>
            </div>
            <div class="map" id="map-petersburg"></div>
        </div>
    </section>
    <section class="section section__article flex__center mt-from-48-to-112">
        <div class="subtitle__wrap mb-from-8-to-16">
            <h2 class="subtitle">Руководители отделов</h2>
        </div>
        <div class="head__department--wrap">
            <div class="head__department mt-from-16-to-40">
                <p class="block__text">Руководитель Службы Контроля Качества, принимает предложения и замечания о качестве услуг.</p>
                <a class="go-to__new-blank flex__center mt-16" href="#">Написать на почту <span class="link__arrow flex__center"><span>.</span></span></a>
            </div>
            <div class="head__department mt-from-16-to-40">
                <p class="block__text">Руководитель отдела по работе с клиентами, отвечает на вопросы о стоимости услуг и взаимодействии с менеджерами компании.</p>
                <a class="go-to__new-blank flex__center mt-16" href="#">Написать на почту <span class="link__arrow flex__center"><span>.</span></span></a>
            </div>
            <div class="head__department mt-from-16-to-40">
                <p class="block__text">Руководитель отдела маркетинга, ждёт предложений о производстве рекламной продукции и совместных акциях.</p>
                <a class="go-to__new-blank flex__center mt-16" href="#">Написать на почту <span class="link__arrow flex__center"><span>.</span></span></a>
            </div>
            <div class="head__department mt-from-16-to-40">
                <p class="block__text">Руководитель производственного отдела, рассматривает предложения о сотрудничестве (упаковка, транспорт, грузчики).</p>
                <a class="go-to__new-blank flex__center mt-16" href="#">Написать на почту <span class="link__arrow flex__center"><span>.</span></span></a>
            </div>
            <div class="head__department mt-from-16-to-40">
                <p class="block__text">Генеральный директор.</p>
                <a class="go-to__new-blank flex__center mt-16" href="#">Написать на почту <span class="link__arrow flex__center"><span>.</span></span></a>
            </div>
        </div>
    </section>
    <section class="section section__requisites mt-from-48-to-112 pt-from-48-to-112">
        <h2 class="subtitle mb-from-8-to-16">Наши реквизиты</h2>
        <div class="requisites__wrapper">
            <div class="requisites large mt-from-16-to-40">
                <div class="requisites__block">
                    <p class="block__title">Наименование организации</p>
                    <p class="block__text mt-4">ООО «Деликатный переезд Северо-Запад»</p>
                </div>
                <div class="requisites__block mt-16">
                    <p class="block__title">Юр. адрес:</p>
                    <p class="block__text mt-4">196084, г. Санкт-Петербург, Детский пер., д. 5, лит. А, оф. 316.</p>
                </div>
                <div class="requisites__block mt-16">
                    <p class="block__title">Факт. адрес:</p>
                    <p class="block__text mt-4">196084, г. Санкт-Петербург, Детский пер., д. 5, лит. А, оф. 316.</p>
                </div>
                <div class="requisites__block mt-16">
                    <p class="block__title">Расчётный счёт</p>
                    <p class="block__text mt-4">40 702 810 422 120 001 089 в ФИЛИАЛ ПАО «БАНК УРАЛСИБ» В Г.САНКТ-ПЕТЕРБУРГ</p>
                </div>
            </div>
            <div class="requisites medium mt-from-16-to-40">
                <div class="requisites__block">
                    <p class="block__title">Корреспондентский счёт</p>
                    <p class="block__text mt-4">30101810800000000706</p>
                </div>
                <div class="requisites__block mt-16">
                    <p class="block__title">ИНН</p>
                    <p class="block__text mt-4">7810704209</p>
                </div>
                <div class="requisites__block mt-16">
                    <p class="block__title">Генеральный директор</p>
                    <p class="block__text mt-4">Алеев Дамир Рашидович</p>
                </div>
            </div>
            <div class="requisites small mt-from-16-to-40">
                <div class="requisites__block">
                    <p class="block__title">БИК</p>
                    <p class="block__text mt-4">044030706</p>
                </div>
                <div class="requisites__block mt-16">
                    <p class="block__title">КПП</p>
                    <p class="block__text mt-4">781001001</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section pt-from-48-to-112">
        <div class="qcs__request flex__center">
            <div class="qcs__request--wrap">
                <div class="custom-select mobile mb-24">
                    <div class="select-selected select-selected__contacts">Задать вопрос</div>
                    <div class="select-items select-hide">
                        <button class="button__select mobile text__left" type="button">Задать вопрос</button>
                        <button class="button__select mobile text__left" type="button">Оставить отзыв</button>
                        <button class="button__select mobile text__left" type="button">Написать в Службу контроля качества</button>
                    </div>
                </div>
                <div class="button__select--wrap button__reviews--wrap desktop mb-56">
                    <button class="button__select desktop button__select--contacts button__form--question flex__center" type="button">Задать вопрос</button>
                    <button class="button__select desktop button__select--contacts button__form--review flex__center ml-16" type="button">Оставить отзыв</button>
                    <button class="button__select desktop button__select--contacts button__form--qcs flex__center ml-16" type="button">Написать в Службу контроля качества</button>
                </div>
                <form class="qcs__form contacts__form mt-from-24-to-56" id="request-form" action="/" methode="post">
                    <div class="qcs__input--wrap">
                        <input class="qcs__input" type="text" placeholder="Ваше имя*" maxlength="32" pattern="[A-Za-zА-Яа-яЁё]{1,32}" required>
                        <div class="input__wrap checkout__tel--wrap">
                            <input class="request__input" id="request-input" type="tel" name="request-tel" placeholder="+7 (___) ___-____" data-slots="_" maxlength="50" pattern="\+7\s[\(][0-9]{3}[\)]\s[0-9]{3}[-][0-9]{4}" required>
                            <span class="mask" id="mask">Номер телефона*</span>
                            <p class="required__text" id="request-error-text">Заполните поле полностью</p>
                        </div>
                    </div>
                    <textarea class="qcs__textarea contacts__textarea mt-16" placeholder="Сообщение"></textarea>
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
    <section class="section pt-from-64-to-112">
        <div class="article__header mb-32-desktop">
            <h2 class="subtitle">Наши филиалы</h2>
            <p class="block__text mt-from-8-to-16">Кроме Санкт-Петербурга, мы работаем в Москве, Ростове-на-Дону и Нижнем Новгороде.</p>
        </div>
        <div class="branches__wrapper">
            <div class="branches mt-24">
                <p class="block__title">Москва</p>
                <ul class="branches__ul mt-from-8-to-16">
                    <li class="branches__li block__text">Ул. Орджоникидзе д. 11, стр. 1а</li>
                    <li class="branches__li block__text mt-4">pereezd.ru</li>
                    <li class="branches__li block__text mt-4">+7 (495) 921-30-18</li>
                </ul>
            </div>
            <div class="branches mt-24">
                <p class="block__title">Ростов-на-Дону</p>
                <ul class="branches__ul mt-from-8-to-16">
                    <li class="branches__li block__text">ул. Нансена, 107/1</li>
                    <li class="branches__li block__text mt-4">pereezd-rostovnadonu.ru</li>
                    <li class="branches__li block__text mt-4">+7 (863) 255-62-02</li>
                </ul>
            </div>
            <div class="branches mt-24">
                <p class="block__title">Нижний Новгород </p>
                <ul class="branches__ul mt-from-8-to-16">
                    <li class="branches__li block__text">ул. Родионова, 171С</li>
                    <li class="branches__li block__text mt-4">pereezd-nnovgorod.ru</li>
                    <li class="branches__li block__text mt-4">+7 (831) 280-83-62</li>
                </ul>
            </div>
        </div>
    </section>
</main>
<script src="https://api-maps.yandex.ru/2.1/?apikey=08491468-2c76-49c3-8329-6027bb931532&lang=ru_RU"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/contacts.js"></script>
<?php
get_footer();
?>