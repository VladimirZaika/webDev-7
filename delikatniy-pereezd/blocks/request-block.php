<div class="paragraph__block paragraph__request flex__center">
    <div class="request__wrapper active">
        <div class="request__text--wrap">
            <p class="block__title">Остались вопросы? Оставьте заявку!</p>
            <p class="block__text mt-8">Получите бесплатную консультацию, закажите выезд менеджера или узнайте стоимость переезда.</p>
        </div>
        <form class="request__form mt-from-24-to-32" name="request-form" id="request-form" action="/" method="post">
            <input id="input-hidden-request" type="hidden">
            <div class="input__wrap">
                <input class="request__input" type="tel" name="request-tel" id="request-input" placeholder="+7 (___) ___-____" data-slots="_" maxlength="50" pattern="\+7\s[\(][0-9]{3}[\)]\s[0-9]{3}[-][0-9]{4}" required>
                <span class="mask" id="mask">Номер телефона</span>
                <p class="required__text" id="request-error-text">Заполните поле полностью</p>
            </div>
            <div class="request__dropdown">
                <div class="dropdown__button flex__center">
                    <p class="request__title"><span class="desktop__element">Удобное</span> <span class="up">в</span>ремя для звонка</p>
                    <span class="request__arrow">.</span>
                </div>
                <div class="request__body--wrap">
                    <div class="request__dropdown-body">
                        <div class="dropdown__col day__col">
                            <div class="swiper-container day-swipe">
                                <div class="swiper-wrapper date-wrapper day-wrapper">
                                    <div class="swiper-slide call__time--slide day">Сегодня</div>
                                    <div class="swiper-slide call__time--slide day">Завтра</div>
                                    <div class="swiper-slide call__time--slide day">Чт, 28 января</div>
                                    <div class="swiper-slide call__time--slide day">Пт, 29 января</div>
                                    <div class="swiper-slide call__time--slide day">Сб, 30 января</div>
                                </div>
                                <div class="select__swiper--button">
                                    <div class="swiper-button-next flex__center button-request-next day-swipe-button-next"><span>.</span></div>
                                    <div class="swiper-button-prev flex__center button-request-prev day-swipe-button-prev"><span>.</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="time__col--wrap">
                            <div class="dropdown__col time__col">
                                <div class="swiper-container hour-swipe">
                                    <div class="swiper-wrapper date-wrapper hour-wrapper">
                                        <div class="swiper-slide call__time--slide hour">12</div>
                                        <div class="swiper-slide call__time--slide hour">13</div>
                                        <div class="swiper-slide call__time--slide hour">14</div>
                                        <div class="swiper-slide call__time--slide hour">15</div>
                                        <div class="swiper-slide call__time--slide hour">16</div>
                                    </div>
                                    <div class="select__swiper--button">
                                        <div class="swiper-button-next flex__center button-request-next hour-swipe-button-next"><span>.</span></div>
                                        <div class="swiper-button-prev flex__center button-request-prev hour-swipe-button-prev"><span>.</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown__col time__col">
                                <div class="swiper-container minute-swipe">
                                    <div class="swiper-wrapper date-wrapper minute-wrapper">
                                        <div class="swiper-slide call__time--slide minute">00</div>
                                        <div class="swiper-slide call__time--slide minute">15</div>
                                        <div class="swiper-slide call__time--slide minute">30</div>
                                        <div class="swiper-slide call__time--slide minute">45</div>
                                    </div>
                                    <div class="select__swiper--button">
                                        <div class="swiper-button-next flex__center button-request-next minute-swipe-button-next"><span>.</span></div>
                                        <div class="swiper-button-prev flex__center button-request-prev minute-swipe-button-prev"><span>.</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="button__orange button__request" type="submit">Заказать звонок</button>
        </form>
        <div class="processing__data flex__center mt-16">
            <p class="processing__data--text text__center--mobile">Нажимая на кнопку «Оставить  заявку», вы даете согласие <a class="processing__data--link" href="#">на обработку персональных данных</a></p>
        </div>
    </div>
    <div class="request__successful--purchase">
        <div class="request__successful--purchase__text--wrap">
            <h2 class="subtitle text__center--mobile">Заявка отправлена успешно!</h2>
            <p class="block__text text__center--mobile mt-from-8-to-16">Наш менеджер свяжется с вами в указанное время.</p>
        </div>
        <button class="button__orange button__purchase--request flex__center mt-24-mobile" type="button">Отправить ещё</button>
    </div>
</div>