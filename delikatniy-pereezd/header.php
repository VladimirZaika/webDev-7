<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initialscale=l.0">
        <title>Delicate move</title>
        <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/app.css">
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="header flex__center">
            <div class="header__wrapper flex__center">
                <a class="burger__button flex__center" id="burger-button" href="#">
                    <div class="burger__button--content flex__center">
                        <div class="point one-of-nine">.</div>
                        <div class="point two-of-nine">.</div>
                        <div class="point three-of-nine">.</div>
                        <div class="point four-of-nine">.</div>
                        <div class="point five-of-nine">.</div>
                        <div class="point six-of-nine">.</div>
                        <div class="point seven-of-nine">.</div>
                        <div class="point height-of-nine">.</div>
                        <div class="point nine-of-nine">.</div>
                    </div>
                </a>
                <div class="desktop__content flex__center" id="desktop-content">
                    <nav class="nav flex__center">
                        <a class="header__text flex__center" href="#">Услуги</a>
                        <a class="header__text flex__center" href="#">Онлайн-заявка</a>
                        <a class="header__text flex__center" href="#">Цены</a>
                        <a class="header__text flex__center" href="#">Отзывы</a>
                        <a class="header__text flex__center" href="#">Упаковка</a>
                        <a class="header__text flex__center" href="#">О компании</a>
                    </nav>
                    <a class="tel flex__center" href="tel:+78122103288">
                        <div>
                            <p class="tel__text header__text">+7 (812) 210-32-88</p>
                            <p class="mt-4 work__time">с 9:00 до 21:00 без выходных</p>
                        </div>
                    </a>
                    <button class="request__call flex__center" type="button" data-toggle="modal" data-target="#order-call-modal">
                        <span class="request__call--text header__text">Заказать звонок</span>
                    </button>
                </div>
                <a class="logo__block flex__center" href="#">
                    <div class="header__logo--wrap">
                        <?php include(THEME_DIR . '/blocks/logo-block.php'); ?>
                    </div>
                </a>
            </div>
            <a class="shopping__cart--block flex__center" href="#">
                <div class="shopping__cart--icon">
                    <!-- bag-icon.svg -->
                    <svg viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.1618 9.06552C20.1051 8.4236 19.8214 7.83516 19.3675 7.40721C18.9136 6.97926 18.3178 6.71179 17.6086 6.71179H16.1051V5.48144C16.1051 4.14409 15.5377 2.94048 14.6015 2.08458C13.6654 1.20193 12.3888 0.666992 10.9987 0.666992C9.58026 0.666992 8.30366 1.20193 7.39586 2.08458C6.45969 2.94048 5.89232 4.14409 5.89232 5.48144V6.71179H4.38877C3.67955 6.71179 3.0838 6.97926 2.6299 7.40721C2.176 7.83516 1.89231 8.4236 1.83558 9.06552L0.332031 24.8997C0.332031 24.9799 0.332031 25.0602 0.332031 25.0869C0.332031 25.6754 0.58735 26.237 1.04125 26.6382C1.46678 27.0127 2.03416 27.2802 2.6299 27.3337H2.65827C2.74338 27.3337 2.82849 27.3337 2.88522 27.3337H19.1122C19.1689 27.3337 19.254 27.3337 19.3391 27.3337C19.9632 27.2802 20.5306 27.0127 20.9561 26.6382C21.41 26.237 21.6654 25.6754 21.6654 25.0602C21.6654 25.0067 21.6654 24.9532 21.6654 24.8729L20.1618 9.06552ZM7.4526 5.48144C7.4526 4.54529 7.84976 3.71614 8.50224 3.10096C9.15473 2.48578 10.0342 2.11133 11.0271 2.11133C12.02 2.11133 12.8994 2.48578 13.5519 3.10096C14.2044 3.71614 14.6015 4.54529 14.6015 5.48144V6.71179H7.4526V5.48144ZM20.0767 25.0869C20.0767 25.3009 19.9916 25.4881 19.8214 25.6219C19.6512 25.7823 19.3959 25.8893 19.1689 25.9161C19.1689 25.9161 19.1405 25.9161 19.0838 25.9161H2.88522C2.82849 25.9161 2.80012 25.9161 2.80012 25.9161H2.77175C2.51643 25.8893 2.28948 25.7823 2.11927 25.6219C1.94905 25.4881 1.86395 25.3009 1.86395 25.0869V25.0067L3.36749 9.19926C3.39586 8.90504 3.53771 8.63757 3.73629 8.45034C3.9065 8.28986 4.13345 8.18287 4.38877 8.18287H5.89232V11.446C5.89232 11.8472 6.23274 12.1682 6.65827 12.1682C7.0838 12.1682 7.42423 11.8472 7.42423 11.446V8.18287H14.5164V11.446C14.5164 11.8472 14.8569 12.1682 15.2824 12.1682C15.7079 12.1682 16.0483 11.8472 16.0483 11.446V8.18287H17.5519C17.8072 8.18287 18.0342 8.28986 18.2044 8.45034C18.403 8.63757 18.5448 8.90504 18.5732 9.19926L20.0767 25.0334V25.0869Z" stroke="#F5F5F5" stroke-width="0.3"/>
                    </svg>
                </div>
                <div class="cart__count--block flex__center">
                    <span class="cart__count">1</span>
                </div>
            </a>
            <div class="burger__menu" id="burger-menu">
                <div class="burger__wrapper">
                    <div class="burger__header">
                        <div class="burger__header--content">
                            <a class="tel" href="tel:+78122103288">
                                <span class="tel__text header__text">+7 (812) 210-32-88</span>
                            </a>
                            <div class="reception__block mt-4">
                                Время приёма звонков: каждый <br>день с 09:00 до 21:00
                            </div>
                        </div>
                    </div>
                    <div class="burger__body">
                        <div class="burger__body--block one-third mt-32">
                            <a class="burger__block--title" href="#">Услуги</a>
                            <div class="burger__links--wrapper">
                                <a class="burger__link mt-from-12-to-16" href="#">Квартирный переезд</a>
                                <a class="burger__link mt-8" href="#">Офисный переезд</a>
                                <a class="burger__link mt-8" href="#">Перевозка мебели</a>
                                <a class="burger__link mt-8" href="#">Сборка мебели</a>
                                <a class="burger__link mt-8" href="#">Временное хранение</a>
                                <a class="burger__link mt-8" href="#">Корпоративное обслуживание</a>
                                <a class="burger__link text__orange desktop mt-8" href="#">Все услуги</a>
                            </div>
                        </div>
                        <div class="burger__body--block two-third">
                            <div class="burger__blocks-wrapper">
                                <div class="burger__block mt-32">
                                    <a class="burger__block--title" href="#">О компании</a>
                                    <div class="burger__links--wrapper">
                                        <a class="burger__link mt-from-12-to-16" href="#">Новости</a>
                                        <a class="burger__link mt-8" href="#">Статьи</a>
                                        <a class="burger__link mt-8" href="#">Блог</a>
                                        <a class="burger__link mt-8" href="#">Вакансии</a>
                                        <a class="burger__link mt-8" href="#">Контакты</a>
                                    </div>
                                </div>
                                <div class="burger__block mt-32">
                                    <a class="burger__block--title" href="#">Цены</a>
                                    <div class="burger__links--wrapper">
                                        <a class="burger__link mt-from-12-to-16" href="#">Акции</a>
                                        <a class="burger__link mt-8" href="#">Скидки</a>
                                    </div>
                                    <div class="burger__block mt-32">
                                        <a class="burger__block--title" href="#">Отзывы</a>
                                        <div class="burger__links--wrapper">
                                            <a class="burger__link mt-from-12-to-16" href="#">Контроль качества</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="burger__block only__titles mt-32">
                                <div class="block__title--wrap">
                                    <a class="burger__block--title">Магазин упаковки</a>
                                    <a class="burger__block--title mt-from-12-to-16">Кейсы переездов</a>
                                </div>
                                <div class="block__title--wrap">
                                    <a class="burger__block--title">Онлайн заявка</a>
                                    <a class="burger__block--title mt-from-12-to-16">Вопрос-ответ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="burger__footer">
                        <a class="burger__contacts" href="tel:+78122103288">+7 (812) 210-32-88</a>
                        <a class="burger__contacts burger__mail" href="mailto:hello@spb-pereezd.ru">hello@spb-pereezd.ru</a>
                        <button class="button__orange burger-menu flex__center" type="button" type="button" data-toggle="modal" data-target="#order-call-modal">Заказать звонок</button>
                        <div class="burger__wrap--social">
                            <?php include(THEME_DIR . '/blocks/social-block.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>  