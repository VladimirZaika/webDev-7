<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Template name: cart */
 /* Assets ID: cart */

get_header();
?>
<div class="cart__mobile--wrap">
    <?php include(THEME_DIR . '/modules/cart-module.php'); ?>
</div>
<main class="main main__cart main__application flex__center pt-from-88-to-103">
    <section class="section section__cart">
        <div class="breadcrumb__wrap desktop flex__center">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="current__page">Оформление заказа</li>
            </ul>
        </div>
        <div class="total__block top pb-24">
            <div class="total__sum">
                <div class="products"><span>Товаров на сумму</span></div>
                <div class="products sum"><span class="cart-sum">1800</span><span>&nbsp;руб</span></div>
            </div>
            <button class="button__white flex__center edit-cart mt-16" type="button">Редактировать корзину</button>
        </div>
        <div class="cart__wrapper mt-from-24-to-112">
            <div class="checkout">
                <h1 class="title">Оформление заказа</h1>
                <form class="form__checkout mt-from-24-to-56" id="form-cart" action="#" method="post">
                    <div class="form__checkout--section">
                        <h2 class="block__title">Контактная информация</h2>
                        <div class="checkout__input--wrap mt-from-16-to-24">
                            <input class="checkout__input" id="cart-input-name" type="text" placeholder="Ваше имя*" maxlength="32" pattern="[A-Za-zА-Яа-яЁё]{1,32}" required>
                            <div class="input__wrap checkout__tel--wrap">
                                <input class="request__input checkout__input" id="cart-input-tel" type="tel" name="request-tel" placeholder="+7 (___) ___-____" data-slots="_" maxlength="50" data-slots="_" pattern="\+7\s[\(][0-9]{3}[\)]\s[0-9]{3}[-][0-9]{4}" required>
                                <span class="mask checkout__mask" id="mask">Номер телефона*</span>
                                <p class="required__text" id="application-required-text">Заполните поле полностью</p>
                            </div>
                        </div>
                    </div>
                    <div class="form__checkout--section mt-from-24-to-56">
                        <h2 class="block__title">Способ доставки</h2>
                        <div class="checkout__input--wrap checkout__radio--wrap mt-from-16-to-24">
                            <div class="input--radio--wrap flex__center">
                                <input class="checkout__radio" type="radio" name="checkout-radio" id="checkout-radio-first">
                                <label class="checkout__label" for="checkout-radio-first">Доставка курьером</label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <input class="checkout__radio" type="radio" name="checkout-radio" id="checkout-radio-second">
                                <label class="checkout__label" for="checkout-radio-second">Самовывоз;  г. Санкт-Петербург, Петергофское шоссе, д. 74, лит. Б.</label>
                            </div>
                        </div>
                    </div>
                    <div class="pickup" id="pickup-active">
                        <div class="form__checkout--section mt-from-24-to-56">
                            <h2 class="block__title">Время доставки</h2>
                            <div class="checkout__input--wrap checkout__select--wrap mt-from-16-to-24">
                                <div class="custom-select">
                                    <select>
                                        <option value="0">Выберите дату доставки</option>
                                        <option value="1">Сегодня</option>
                                        <option value="2">Завтра</option>
                                        <option value="3">Чт, 28 января</option>
                                        <option value="4">Пт, 29 января</option>
                                        <option value="5">Сб, 30 января</option>
                                        <option value="1">Сегодня</option>
                                        <option value="2">Завтра</option>
                                        <option value="3">Чт, 28 января</option>
                                        <option value="4">Пт, 29 января</option>
                                        <option value="5">Сб, 30 января</option>
                                    </select>
                                </div>
                                <div class="custom-select">
                                    <select>
                                        <option value="0">Выберите время доставки</option>
                                        <option value="1">с 7:00 до 13:00</option>
                                        <option value="2">с 13:00 до 15:00</option>
                                        <option value="3">с 15:00 до 17:00</option>
                                        <option value="4">с 15:00 до 17:00</option>
                                        <option value="5">с 15:00 до 17:00</option>
                                        <option value="1">с 7:00 до 13:00</option>
                                        <option value="2">с 13:00 до 15:00</option>
                                        <option value="3">с 15:00 до 17:00</option>
                                        <option value="4">с 15:00 до 17:00</option>
                                        <option value="5">с 15:00 до 17:00</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form__checkout--section mt-from-24-to-56">
                            <h2 class="block__title">Адрес доставки</h2>
                            <div class="checkout__input--wrap checkout__address--wrap mt-from-16-to-24">
                                <input class="checkout__input" type="text" placeholder="Город">
                                <input class="checkout__input" type="text" placeholder="Улица, дом, корпус">
                                <input class="checkout__input" type="text" placeholder="Квартира">
                            </div>
                        </div>
                    </div>
                    <div class="form__checkout--section mt-from-24-to-56">
                        <h2 class="block__title">Комментарий</h2>
                        <div class="checkout__input--wrap checkout__address--wrap mt-from-16-to-24">
                            <textarea class="checkout__textarea" name="checkout-textarea" placeholder="Оставьте комментарий к заказу"></textarea>
                        </div>
                        <p class="block__text mt-from-16-to-24">Оплата заказа осуществляется наличными при получении или по счёту.</p>
                    </div>
                    <div class="total__block mt-24">
                        <div class="total__sum bottom">
                            <div class="products">Итого</div>
                            <div class="products sum"><span>2100</span><span>&nbsp;руб</span></div>
                        </div>
                        <p class="processing__data--text total__text mt-16">При заказе от 2 885 руб. бесплатная доставка в пределах КАД. Уточняйте подробности у менеджера.</p>
                        <button class="button__white flex__center edit-cart mt-16" type="button">Редактировать корзину</button>
                    </div>
                    <div class="qcs__form--footer checkout__form--footer mt-from-16-to-32">
                        <input class="button__orange qcs flex__center" type="submit" value="Оформить заказ">
                        <div class="processing__data qcs flex__center">
                            <p class="processing__data--text text__center--mobile">Нажимая на кнопку «Оставить  заявку», вы даете согласие <a class="processing__data--link" href="#">на обработку персональных данных</a></p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="cart__desktop--wrap">
                <?php include(THEME_DIR . '/modules/cart-module.php'); ?>
            </div>
        </div>
    </section>
</main>
<?php include(THEME_DIR . '/blocks/successful-purchase-block.php'); ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/cart.js"></script>
<?php
get_footer();
?>