<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Template name: online-application */
 /* Assets ID: online-application */

get_header();
?>
<main class="main main__vacancies main__application flex__center pt-from-88-to-103">
    <section class="section">
        <div class="breadcrumb__wrap desktop flex__center">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="current__page">Онлайн-заявка</li>
            </ul>
        </div>
        <div class="cases__header mt-from-24-to-112">
            <div class="article__content">
                <h1 class="title">Онлайн-заявка</h1>
                <p class="block__text mt-from-8-to-16">Выберите услугу, заполните форму и прикрепите список вещей или фотографии комнат — мы оценим ориентировочную стоимость работ и перезвоним в удобное время.</p>
            </div>
        </div>
    </section>
    <section class="section mt-from-48-to-80">
        <div class="online__application--wrap">
            <div class="button__select--wrap all__display button__reviews--wrap mb-from-48-to-56">
                <button class="button__select desktop button__step--one flex__center" type="button">1 шаг<span>&nbsp;— Что вы хотите заказать?</span></button>
                <button class="button__select desktop button__step--two flex__center ml-16" type="button">2 шаг<span>&nbsp;— Оформление заявки</span></button>
            </div>
        </div>
        <div class="step__one--wrap active">
            <div class="step__one mobile">
                <h2 class="subtitle application__subtitle mobile">Что вы хотите заказать?</h2>
                <form class="form__step--one" action="/" method="post">
                    <div class="accordion accordion__step--one">
                        <button class="button__accordion button__accordion--step flex__center" type="button">
                            <div class="accordion__title--wrap">
                            <p class="block__title accordion__title">Переезд квартиры (2)</p>
                            </div>
                            <div class="accordion__cross--wrap flex__center">
                                <span class="accordion__cross step__one--arrow"></span>
                            </div>
                        </button>
                        <div class="accordion__body">
                            <div class="input--radio--wrap flex__center">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Доставка курьером
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Собрать и разобрать мебель
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Доставить упаковку
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Упаковать вещи
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Оставить вещи не складе
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Выезд оценщика
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Обустройство — перестановка мебели, навеска картин, жалюзи, карнизов и т. п
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="button__orange go-to-step-2 flex__center mt-8" type="button">Далее</button>
                    <div class="accordion accordion__step--one mt-16">
                        <button class="button__accordion button__accordion--step flex__center" type="button">
                            <div class="accordion__title--wrap">
                            <p class="block__title accordion__title">Переезд офиса</p>
                            </div>
                            <div class="accordion__cross--wrap flex__center">
                                <span class="accordion__cross step__one--arrow"></span>
                            </div>
                        </button>
                        <div class="accordion__body">
                            <div class="input--radio--wrap flex__center">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Доставка курьером
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Собрать и разобрать мебель
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Доставить упаковку
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Упаковать вещи
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Оставить вещи не складе
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Выезд оценщика
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Обустройство — перестановка мебели, навеска картин, жалюзи, карнизов и т. п
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="accordion accordion__step--one mt-16">
                        <button class="button__accordion button__accordion--step flex__center" type="button">
                            <div class="accordion__title--wrap">
                            <p class="block__title accordion__title">Перевозка отдельных предметов</p>
                            </div>
                            <div class="accordion__cross--wrap flex__center">
                                <span class="accordion__cross step__one--arrow"></span>
                            </div>
                        </button>
                        <div class="accordion__body">
                            <div class="input--radio--wrap flex__center">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Доставка курьером
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Собрать и разобрать мебель
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Доставить упаковку
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Упаковать вещи
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Оставить вещи не складе
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Выезд оценщика
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Обустройство — перестановка мебели, навеска картин, жалюзи, карнизов и т. п
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="accordion accordion__step--one mt-16">
                        <button class="button__accordion button__accordion--step flex__center" type="button">
                            <div class="accordion__title--wrap">
                            <p class="block__title accordion__title">Сборка и разборка мебели</p>
                            </div>
                            <div class="accordion__cross--wrap flex__center">
                                <span class="accordion__cross step__one--arrow"></span>
                            </div>
                        </button>
                        <div class="accordion__body">
                            <div class="input--radio--wrap flex__center">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Доставка курьером
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Собрать и разобрать мебель
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Доставить упаковку
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Упаковать вещи
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Оставить вещи не складе
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Выезд оценщика
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Обустройство — перестановка мебели, навеска картин, жалюзи, карнизов и т. п
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="accordion accordion__step--one mt-16">
                        <button class="button__accordion button__accordion--step flex__center" type="button">
                            <div class="accordion__title--wrap">
                            <p class="block__title accordion__title">Хранение вещей</p>
                            </div>
                            <div class="accordion__cross--wrap flex__center">
                                <span class="accordion__cross step__one--arrow"></span>
                            </div>
                        </button>
                        <div class="accordion__body">
                            <div class="input--radio--wrap flex__center">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Доставка курьером
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Собрать и разобрать мебель
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Доставить упаковку
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Упаковать вещи
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Оставить вещи не складе
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Выезд оценщика
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Обустройство — перестановка мебели, навеска картин, жалюзи, карнизов и т. п
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="accordion accordion__step--one mt-16">
                        <button class="button__accordion button__accordion--step flex__center" type="button">
                            <div class="accordion__title--wrap">
                            <p class="block__title accordion__title">Иное</p>
                            </div>
                            <div class="accordion__cross--wrap flex__center">
                                <span class="accordion__cross step__one--arrow"></span>
                            </div>
                        </button>
                        <div class="accordion__body">
                            <div class="input--radio--wrap flex__center">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Погрузить и разгрузить вещи
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Собрать и разобрать мебель
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Доставить упаковку
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Упаковать вещи
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Оставить вещи не складе
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Выезд оценщика
                                </label>
                            </div>
                            <div class="input--radio--wrap flex__center mt-8">
                                <label class="step__label">
                                    <input class="step__checkbox" type="checkbox" name="step-check-box">
                                    Обустройство — перестановка мебели, навеска картин, жалюзи, карнизов и т. п
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="step__one desktop">
                <form class="form__step--one desktop" action="/" method="post">
                    <div class="step-one__btn--wrap">
                        <div class="input--radio--wrap flex__center">
                            <label class="button__select desktop step__label--radio desktop flex__center">
                                <input class="step__radio" type="radio" name="step-radio" id="apartment-moving-step">
                                Переезд квартиры (2)
                            </label>
                        </div>
                        <div class="input--radio--wrap flex__center ml-16">
                            <label class="button__select desktop step__label--radio flex__center">
                                <input class="step__radio" type="radio" name="step-radio" id="office-moving-step">
                                Переезд офиса
                            </label>
                        </div>
                        <div class="input--radio--wrap flex__center mt-16">
                            <label class="button__select desktop step__label--radio flex__center">
                                <input class="step__radio" type="radio" name="step-radio" id="transportation-individual-items">
                                Перевозка отдельных предметов
                            </label>
                        </div>
                        <div class="input--radio--wrap flex__center mt-16 mr-80">
                            <label class="button__select desktop step__label--radio flex__center">
                                <input class="step__radio" type="radio" name="step-radio" id="assembly-transportation-furniture">
                                Сборка и разборка мебели
                            </label>
                        </div>
                        <div class="input--radio--wrap flex__center mt-16">
                            <label class="button__select desktop step__label--radio flex__center">
                                <input class="step__radio" type="radio" name="step-radio" id="keeping-step">
                                Хранение вещей
                            </label>
                        </div>
                        <div class="input--radio--wrap flex__center mt-16 ml-16">
                            <label class="button__select desktop step__label--radio flex__center">
                                <input class="step__radio" type="radio" name="step-radio" id="other-step">
                                Иное
                            </label>
                        </div>
                    </div>
                    <div class="paragraph__block step-one__checkbox--block active" id="apartment-moving-block">
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Погрузить и разгрузить вещи
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Собрать и разобрать мебель
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Доставить упаковку
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Упаковать вещи
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Оставить вещи не складе
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Выезд оценщика
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Обустройство — перестановка мебели, навеска картин, жалюзи, карнизов и т. п
                            </label>
                        </div>
                    </div>
                    <div class="paragraph__block step-one__checkbox--block" id="office-moving-block">
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Погрузить и разгрузить вещи
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Собрать и разобрать мебель
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Доставить упаковку
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Упаковать вещи
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Оставить вещи не складе
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Выезд оценщика
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Обустройство — перестановка мебели, навеска картин, жалюзи, карнизов и т. п
                            </label>
                        </div>
                    </div>
                    <div class="paragraph__block step-one__checkbox--block" id="transportation-individual-items-block">
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Погрузить и разгрузить вещи
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Собрать и разобрать мебель
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Доставить упаковку
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Упаковать вещи
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Оставить вещи не складе
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Выезд оценщика
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Обустройство — перестановка мебели, навеска картин, жалюзи, карнизов и т. п
                            </label>
                        </div>
                    </div>
                    <div class="paragraph__block step-one__checkbox--block" id="assembly-transportation-block">
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Погрузить и разгрузить вещи
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Собрать и разобрать мебель
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Доставить упаковку
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Упаковать вещи
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Оставить вещи не складе
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Выезд оценщика
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Обустройство — перестановка мебели, навеска картин, жалюзи, карнизов и т. п
                            </label>
                        </div>
                    </div>
                    <div class="paragraph__block step-one__checkbox--block" id="keeping-block">
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Погрузить и разгрузить вещи
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Собрать и разобрать мебель
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Доставить упаковку
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Упаковать вещи
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Оставить вещи не складе
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Выезд оценщика
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Обустройство — перестановка мебели, навеска картин, жалюзи, карнизов и т. п
                            </label>
                        </div>
                    </div>
                    <div class="paragraph__block step-one__checkbox--block" id="other-block">
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Погрузить и разгрузить вещи
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Собрать и разобрать мебель
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Доставить упаковку
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Упаковать вещи
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Оставить вещи не складе
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Выезд оценщика
                            </label>
                        </div>
                        <div class="input--radio--wrap step__checkbox--desktop flex__center mt-8">
                            <label class="step__label">
                                <input class="step__checkbox" type="checkbox" name="step-check-box">
                                Обустройство — перестановка мебели, навеска картин, жалюзи, карнизов и т. п
                            </label>
                        </div>
                    </div>
                </form>
                <div class="form__step--btn__wrap mt-32">
                    <button class="button__orange go-to-step-2 flex__center" type="button">Далее</button>
                </div>
            </div>
        </div>
        <div class="step__two--wrap">
            <div class="step__two">
                <form class="form__step--two" id="form-cart" action="#" method="post">
                    <div class="form__checkout--section mb-from-24-to-56">
                        <h2 class="subtitle application__subtitle">Контактная информация</h2>
                        <div class="checkout__input--wrap step__two--input__wrap mt-from-16-to-24">
                            <input class="checkout__input step__two--contact__input" id="cart-input-name" type="text" placeholder="Ваше имя*" maxlength="32" pattern="[A-Za-zА-Яа-яЁё]{1,32}" required>
                            <div class="input__wrap checkout__tel--wrap step__two--contact__input">
                                <input class="request__input checkout__input" id="cart-input-tel" type="tel" name="request-tel" placeholder="+7 (___) ___-____" data-slots="_" maxlength="50" required>
                                <span class="mask checkout__mask" id="mask">Номер телефона*</span>
                                <p class="required__text" id="application-required-text">Заполните поле полностью</p>
                            </div>
                        </div>
                    </div>
                    <div class="form__checkout--section form__step-two--section pt-from-24-to-56 pb-from-24-to-56">
                        <div class="form__section--wrap">
                            <h2 class="subtitle application__subtitle">Откуда?</h2>
                            <div class="mt-from-16-to-24">
                                <input class="checkout__input mt-16" type="text" placeholder="Адрес (город, улица, дом)">
                                <input class="checkout__input mt-16" type="text" placeholder="Этаж">
                                <div class="step-two__radio--block mt-16">
                                    <p class="block__text text__lighten">Лифт</p>
                                    <div class="step-two__radio--wrap flex__center mt-8">
                                        <div class="input--radio--wrap flex__center">
                                            <input class="checkout__radio checkout__radio--contacts" type="radio" name="checkout-radio" id="checkout-radio-one">
                                            <label class="checkout__label step-two__label" for="checkout-radio-one">Грузовой</label>
                                        </div>
                                        <div class="input--radio--wrap flex__center ml-from-10-to-16">
                                            <input class="checkout__radio checkout__radio--contacts" type="radio" name="checkout-radio" id="checkout-radio-two">
                                            <label class="checkout__label step-two__label" for="checkout-radio-two">Пассажирский</label>
                                        </div>
                                        <div class="input--radio--wrap flex__center ml-from-10-to-16">
                                            <input class="checkout__radio checkout__radio--contacts" type="radio" name="checkout-radio" id="checkout-radio-three">
                                            <label class="checkout__label step-two__label" for="checkout-radio-three">Нет</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form__section--wrap">
                            <h2 class="subtitle application__subtitle">Куда?</h2>
                            <div class="mt-from-16-to-24">
                                <input class="checkout__input mt-16" type="text" placeholder="Адрес (город, улица, дом)">
                                <input class="checkout__input mt-16" type="text" placeholder="Этаж">
                                <div class="step-two__radio--block mt-16">
                                    <p class="block__text text__lighten">Лифт</p>
                                    <div class="step-two__radio--wrap flex__center mt-8">
                                        <div class="input--radio--wrap flex__center">
                                            <input class="checkout__radio checkout__radio--contacts" type="radio" name="checkout-radio-next" id="checkout-radio-four">
                                            <label class="checkout__label step-two__label" for="checkout-radio-four">Грузовой</label>
                                        </div>
                                        <div class="input--radio--wrap flex__center ml-from-10-to-16">
                                            <input class="checkout__radio checkout__radio--contacts" type="radio" name="checkout-radio-next" id="checkout-radio-five">
                                            <label class="checkout__label step-two__label" for="checkout-radio-five">Пассажирский</label>
                                        </div>
                                        <div class="input--radio--wrap flex__center ml-from-10-to-16">
                                            <input class="checkout__radio checkout__radio--contacts" type="radio" name="checkout-radio-next" id="checkout-radio-six">
                                            <label class="checkout__label step-two__label" for="checkout-radio-six">Нет</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form__section--wrap">
                            <h2 class="subtitle application__subtitle">Когда хотите переехать? </h2>
                            <div class="mt-from-16-to-24">
                                <div class="custom-select">
                                    <select>
                                        <option value="0">Выберите дату</option>
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
                                <div class="custom-select mt-16">
                                    <select>
                                        <option value="0">Выберите время</option>
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
                    </div>
                    <div class="form__checkout--section form__step-two--section border__none mt-from-24-to-56">
                        <div class="form__section--wrap  form__section--wide">
                            <div class="form__checkout--section">
                                <h2 class="subtitle application__subtitle">Комментарий к заявке</h2>
                                <div class="checkout__input--wrap checkout__address--wrap mt-from-16-to-24">
                                    <textarea class="checkout__textarea step__two--textarea" name="checkout-textarea" placeholder="Расскажите о переезде всё, что считаете важным. Например, нужно перевезти аквариум с игуаной или винный погреб"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form__section--wrap  form__section--medium">
                            <div class="form__checkout--section">
                                <h2 class="subtitle application__subtitle">Прикрепите фото, видео или список вещей</h2>
                                <div class="input__dowload--wrap mt-from-16-to-24">
                                    <label class="step__download--input flex__center">
                                        <input class="step__checkbox" id="download-input" type="file" accept=".jpg, .jpeg, .png, .txt, .docx" name="step-download">
                                        <span class="download__label--content text__center"><span>Нажмите, чтобы&nbsp;</span><span class="br mobile">прикрепить файл</span></span>
                                        <button class="clear__btn" type="button">&#10006;</button>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qcs__form--footer checkout__form--footer mt-from-24-to-56">
                        <input class="button__orange qcs flex__center" type="submit" value="Оформить заявку">
                        <div class="processing__data qcs flex__center">
                            <p class="processing__data--text text__center--mobile">Нажимая на кнопку «Оставить  заявку», вы даете согласие <a class="processing__data--link" href="#">на обработку персональных данных</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?php include(THEME_DIR . '/blocks/successful-purchase-block-application.php'); ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/online-application.js"></script>
<?php
get_footer();
?>