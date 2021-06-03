<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Template name: moving */
 /* Assets ID: moving */

get_header();
?>
<main class="main flex__center pt-from-88-to-103">
    <section class="section">
        <div class="breadcrumb__wrap flex__center">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li><a href="#">Услуги</a></li>
                <li class="current__page">Переезд из Санкт-Петербурга в Москву</li>
            </ul>
        </div>
        <div class="action__block flex__center mt-from-24-to-32">
            <div class="action__block--text flex__center">
                <div class="paragraph__text--wrap">
                    <h1 class="title">Переезд из Петербурга в Москву</h1>
                    <p class="block__text mt-from-8-to-16">Меняете Северную столицу на Белокаменную — езжайте налегке, а мы перевезём вещи и, если нужно, оставим их у себя на складе.</p>
                    <button class="button__orange button__hero flex__center desktop mt-40" type="button" data-toggle="modal" data-target="#order-call-modal">Заказать звонок</button>
                </div>
            </div>
            <div class="action__block--img flex__center">
                <picture class="flex__center">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/moving-hero.png" alt="">
                </picture>
            </div>
        </div>
        <button class="button__orange mobile flex__center mt-24" data-toggle="modal" data-target="#order-call-modal">Заказать звонок</button>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/our-services-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/how-to-move-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/how-calculate-cost-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/about-cost-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-152">
        <h2 class="subtitle full__construction--subtitle mb-from-24-to-56">Мы можем перевезти ваши вещи сборным грузом, но лучше — «под ключ». Вот в чём разница</h2>
        <div class="full__construction mobile">
            <div class="swiper-container full-construction pb-24-mobile">
                <div class="swiper-wrapper">
                    <div class="swiper-slide custom__slide custom__slide--height">
                        <div class="paragraph__block paragraph__white paragraph__full-construction">
                            <div class="full-construction__th flex__center grey__bg">
                                <div class="full-construction__th--wrap flex__center">
                                    <div class="paragraph__icon flex__center">
                                        <!-- open-box-icon -->
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23.4118 30H4V11.1429M23.4118 30V11.1429M23.4118 30L28.7059 24.8571V16.2857M23.4118 11.1429H4M23.4118 11.1429L28.7059 6M23.4118 11.1429L28.7059 16.2857M4 11.1429L9.29412 6H28.7059M28.7059 6L34 11.1429L28.7059 16.2857M9.29412 16.2857H18.1176" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <p class="block__title text__orange--full-const ml-16 block__title--full-constraction">Упаковка</p>
                                </div>
                            </div>
                            <div class="full-construction__tbody">
                                <div class="full-construction__tbody--wrap">
                                    <p class="block__title text__orange--full-const">Сборный груз</p>
                                    <p class="block__text mt-4">Покупка коробок и упаковка вещей — на вас</p>
                                </div>
                            </div>
                            <div class="full-construction__tbody">
                                <div class="full-construction__tbody--wrap">
                                    <p class="block__title text__orange--full-const">«Под ключ»</p>
                                    <p class="block__text mt-4">Мы доставим всё необходимое и надёжно упакуем имущество</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide custom__slide custom__slide--height">
                        <div class="paragraph__block paragraph__white paragraph__full-construction">
                            <div class="full-construction__th flex__center grey__bg">
                                <div class="full-construction__th--wrap flex__center">
                                    <div class="paragraph__icon flex__center">
                                        <!-- instruments-icon -->
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.2609 17.6781L13.9404 18.9986L11.2993 21.6397C11.2993 21.6397 8.32672 20.8418 6.73104 21.6397C5.60272 22.2038 4.96518 22.7737 4.44689 23.9238C3.7582 25.4521 3.8847 26.7605 4.73241 28.2066C5.58011 29.6527 6.34622 30.4188 7.79231 31.2665C9.2384 32.1142 10.5469 32.2407 12.0751 31.552C13.2252 31.0337 13.7951 30.3962 14.3592 29.2679C15.1571 27.6722 14.3592 24.6996 14.3592 24.6996L17.0003 22.0585L17.6605 21.3983M17.2417 15.6973L17.902 15.0371L19.2225 13.7165L21.8635 11.0755C21.8635 11.0755 21.1118 7.81215 22.149 6.22169C23.538 4.09195 28.4304 4.50857 28.4304 4.50857L25.2897 7.64928L25.5447 10.4542L28.3496 10.7092L31.4904 7.56848C31.4904 7.56848 31.907 12.4609 29.7772 13.8499C28.1868 14.8871 24.9234 14.1354 24.9234 14.1354L22.2824 16.7765L20.9619 18.097" stroke="#F58220" stroke-width="1.3"/>
                                            <path d="M11.0804 24.9227L11.6574 27.0762L10.0809 28.6527L7.92741 28.0757L7.35037 25.9221L8.92687 24.3457L11.0804 24.9227Z" stroke="#F58220" stroke-width="1.3"/>
                                            <path d="M7.0395 10.7446L5.32639 6.74734L6.46847 5.60526L10.4657 7.31838L11.0368 9.03149L19.6023 17.597L22.8046 18.6645C22.9519 18.7136 23.0857 18.7963 23.1955 18.906L31.458 27.1686C31.8486 27.5591 31.8486 28.1923 31.458 28.5828L28.3039 31.7369C27.9134 32.1274 27.2803 32.1274 26.8897 31.7369L18.6272 23.4743C18.5174 23.3646 18.4347 23.2307 18.3856 23.0835L17.3182 19.8812L8.75262 11.3156L7.0395 10.7446Z" stroke="#F58220" stroke-width="1.3"/>
                                        </svg>
                                    </div>
                                    <p class="block__title text__orange--full-const ml-16 block__title--full-constraction">Разборка и сборка мебели</p>
                                </div>
                            </div>
                            <div class="full-construction__tbody">
                                <div class="full-construction__tbody--wrap">
                                    <p class="block__title text__orange--full-const">Сборный груз</p>
                                    <p class="block__text mt-4">Вы разбираете и собираете мебель сами</p>
                                </div>
                            </div>
                            <div class="full-construction__tbody">
                                <div class="full-construction__tbody--wrap">
                                    <p class="block__title text__orange--full-const">«Под ключ»</p>
                                    <p class="block__text mt-4">Мы возьмём это на себя, обещаем быть аккуратными</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide custom__slide custom__slide--height">
                        <div class="paragraph__block paragraph__white paragraph__full-construction">
                            <div class="full-construction__th flex__center grey__bg">
                                <div class="full-construction__th--wrap flex__center">
                                    <div class="paragraph__icon flex__center">
                                        <!-- wheelbarrow-icon -->
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.19922 3H4.75842L13.6564 27.375M17.2156 30.1875C17.2156 31.7408 16.0205 33 14.5462 33C13.072 33 11.8768 31.7408 11.8768 30.1875C11.8768 28.6342 13.072 27.375 14.5462 27.375C16.0205 27.375 17.2156 28.6342 17.2156 30.1875ZM17.2156 30.1875L34.1992 23.5752M10.0972 16.125L26.1136 10.5L30.5626 24.5625M7.29938 8.8327L15.0599 6.10718L17.2156 12.921M15.6215 18.9375L23.6297 16.125" stroke="#F58220" stroke-width="1.3"/>
                                        </svg>
                                    </div>
                                    <p class="block__title text__orange--full-const ml-16 block__title--full-constraction">Погрузка и разгрузка</p>
                                </div>
                            </div>
                            <div class="full-construction__tbody">
                                <div class="full-construction__tbody--wrap">
                                    <p class="block__title text__orange--full-const">Сборный груз</p>
                                    <p class="block__text mt-4">Вы делаете это сами или силами другой компании</p>
                                </div>
                            </div>
                            <div class="full-construction__tbody">
                                <div class="full-construction__tbody--wrap">
                                    <p class="block__title text__orange--full-const">«Под ключ»</p>
                                    <p class="block__text mt-4">Мы приедем в удобное время и сделаем всё за вас</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide custom__slide custom__slide--height">
                        <div class="paragraph__block paragraph__white paragraph__full-construction">
                            <div class="full-construction__th flex__center grey__bg">
                                <div class="full-construction__th--wrap flex__center">
                                    <div class="paragraph__icon flex__center">
                                        <!-- track-icon -->
                                        <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M30.7813 15.7116L31.8847 17.8063C31.9604 17.95 32 18.1099 32 18.2723V23.8421C32 24.3944 31.5523 24.8421 31 24.8421L28.4995 24.842M30.7813 15.7116L27.8283 11.2831C27.6428 11.0049 27.3306 10.8379 26.9963 10.8379H23.9139M30.7813 15.7116H24.9139C24.3617 15.7116 23.9139 15.2639 23.9139 14.7116V10.8379M23.9139 10.8379V9C23.9139 8.44771 23.4662 8 22.9139 8H5C4.44772 8 4 8.44772 4 9V23.8421C4 24.3944 4.44772 24.8421 5 24.8421H7.58073M13.6442 24.8418H22.2709M7.58073 24.8421C7.58073 26.5862 8.97984 28 10.7057 28C12.4316 28 13.8307 26.5862 13.8307 24.8421C13.8307 23.098 12.4316 21.6842 10.7057 21.6842C8.97984 21.6842 7.58073 23.098 7.58073 24.8421ZM28.5757 24.8421C28.5757 26.5862 27.1766 28 25.4507 28C23.7248 28 22.3257 26.5862 22.3257 24.8421C22.3257 23.098 23.7248 21.6842 25.4507 21.6842C27.1766 21.6842 28.5757 23.098 28.5757 24.8421Z" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <p class="block__title text__orange--full-const ml-16 block__title--full-constraction">Перевозка в Москву</p>
                                </div>
                            </div>
                            <div class="full-construction__tbody">
                                <div class="full-construction__tbody--wrap">
                                    <p class="block__title text__orange--full-const">Сборный груз</p>
                                    <p class="block__text mt-4">В автомобиле также будут вещи других клиентов</p>
                                </div>
                            </div>
                            <div class="full-construction__tbody">
                                <div class="full-construction__tbody--wrap">
                                    <p class="block__title text__orange--full-const">«Под ключ»</p>
                                    <p class="block__text mt-4">Мы везём только ваши вещи, на всё — один автомобиль</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide custom__slide custom__slide--height">
                        <div class="paragraph__block paragraph__white paragraph__full-construction">
                            <div class="full-construction__th flex__center grey__bg">
                                <div class="full-construction__th--wrap flex__center">
                                    <div class="paragraph__icon flex__center">
                                        <!-- calendar-icon -->
                                        <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M25 6V11.1111M11 6V11.1111M7.5 17.6481H12.75M7.5 21.0556H12.75M7.5 24.463H12.75M15.375 17.6481H20.625M15.375 21.0556H20.625M15.375 24.463H20.625M23.25 17.6481H28.5M23.25 21.0556H28.5M23.25 24.463H28.5M4.875 31H31.125C31.6082 31 32 30.6186 32 30.1481V9.40741C32 8.93694 31.6082 8.55556 31.125 8.55556H4.875C4.39175 8.55556 4 8.93694 4 9.40741V30.1481C4 30.6186 4.39175 31 4.875 31Z" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <p class="block__title text__orange--full-const ml-16 block__title--full-constraction">Сроки переезда</p>
                                </div>
                            </div>
                            <div class="full-construction__tbody">
                                <div class="full-construction__tbody--wrap">
                                    <p class="block__title text__orange--full-const">Сборный груз</p>
                                    <p class="block__text mt-4">От 2 до 6 дней, какое-то время груз пробудет в терминале</p>
                                </div>
                            </div>
                            <div class="full-construction__tbody">
                                <div class="full-construction__tbody--wrap">
                                    <p class="block__title text__orange--full-const">«Под ключ»</p>
                                    <p class="block__text mt-4">Сегодня грузим вещи и отправляем автомобиль, а завтра он уже в пункте Б</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide custom__slide custom__slide--height">
                        <div class="paragraph__block paragraph__white paragraph__full-construction">
                            <div class="full-construction__th flex__center grey__bg">
                                <div class="full-construction__th--wrap flex__center">
                                    <div class="paragraph__icon flex__center">
                                        <!-- clock-icon -->
                                        <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6.15385V9.38462M29.8462 18H26.6154M9.38462 18H6.15385M23.8978 23.8999L26.1823 26.1844M26.0517 9.96146L23.7672 12.246M11.6691 23.8999L9.38462 26.1844M9.51527 9.96146L11.7998 12.246M18 26.6154V29.8462M18 11.5385V18L21.2308 21.2308M32 18C32 25.732 25.732 32 18 32C10.268 32 4 25.732 4 18C4 10.268 10.268 4 18 4C25.732 4 32 10.268 32 18Z" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <p class="block__title text__orange--full-const ml-16 block__title--full-constraction">Прибытие автомобиля</p>
                                </div>
                            </div>
                            <div class="full-construction__tbody">
                                <div class="full-construction__tbody--wrap">
                                    <p class="block__title text__orange--full-const">Сборный груз</p>
                                    <p class="block__text mt-4">Интервал ожидания более 2 часов</p>
                                </div>
                            </div>
                            <div class="full-construction__tbody">
                                <div class="full-construction__tbody--wrap">
                                    <p class="block__title text__orange--full-const">«Под ключ»</p>
                                    <p class="block__text mt-4">Автомобиль приедет в течение 2 часов</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide custom__slide custom__slide--height">
                        <div class="paragraph__block paragraph__white paragraph__full-construction">
                            <div class="full-construction__th flex__center grey__bg">
                                <div class="full-construction__th--wrap flex__center">
                                    <div class="paragraph__icon flex__center">
                                        <!-- contract-icon -->
                                        <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M31 27V3C31 2.44772 30.5523 2 30 2H6C5.44772 2 5 2.44772 5 3V33C5 33.5523 5.44771 34 6 34H24M31 27L24 34M31 27H25C24.4477 27 24 27.4477 24 28V34M27 7H9M27 11H9M27 15H9M27 19H9M12 26.7L13.5 28.5L16 25.5M18 27C18 29.2091 16.2091 31 14 31C11.7909 31 10 29.2091 10 27C10 24.7909 11.7909 23 14 23C16.2091 23 18 24.7909 18 27Z" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <p class="block__title text__orange--full-const ml-16 block__title--full-constraction">Ответственность за имущество</p>
                                </div>
                            </div>
                            <div class="full-construction__tbody">
                                <div class="full-construction__tbody--wrap">
                                    <p class="block__title text__orange--full-const">Сборный груз</p>
                                    <p class="block__text mt-4">Застрахована только перевозка</p>
                                </div>
                            </div>
                            <div class="full-construction__tbody">
                                <div class="full-construction__tbody--wrap">
                                    <p class="block__title text__orange--full-const">«Под ключ»</p>
                                    <p class="block__text mt-4">Застрахованы все этапы переезда</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination full-construction-bullets mobile"></div>
                <div class="pagination__wrap desktop save__property--wrap flex__center">
                    <div class="swiper__button--wrap flex__center">
                        <div class="swiper-button-prev flex__center full-construction-button-prev">
                            <!-- slider-arrow-icon.svg -->
                            <svg viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 5L12.5172 4.4569C12.6659 4.59845 12.75 4.79474 12.75 5C12.75 5.20526 12.6659 5.40155 12.5172 5.5431L12 5ZM0 4.25L12 4.25V5.75L0 5.75V4.25ZM12.5172 5.5431L8.31724 9.5431L7.28276 8.4569L11.4828 4.4569L12.5172 5.5431ZM11.4828 5.5431L7.28276 1.5431L8.31724 0.456897L12.5172 4.4569L11.4828 5.5431Z" fill="#F58220"/>
                            </svg>
                        </div>
                        <div class="swiper-button-next flex__center full-construction-button-next">
                            <!-- slider-arrow-icon.svg -->
                            <svg viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 5L12.5172 4.4569C12.6659 4.59845 12.75 4.79474 12.75 5C12.75 5.20526 12.6659 5.40155 12.5172 5.5431L12 5ZM0 4.25L12 4.25V5.75L0 5.75V4.25ZM12.5172 5.5431L8.31724 9.5431L7.28276 8.4569L11.4828 4.4569L12.5172 5.5431ZM11.4828 5.5431L7.28276 1.5431L8.31724 0.456897L12.5172 4.4569L11.4828 5.5431Z" fill="#F58220"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full__construction desktop">
            <div class="full__construction--table">
                <div class="full-construction__table--wrap">
                    <div class="full-construction__th desktop flex__center grey__bg"></div>
                    <div class="full-construction__th desktop flex__center grey__bg">
                        <div class="full-construction__th--wrap flex__center">
                            <p class="block__title text__orange--full-const ml-16">Сборный груз</p>
                        </div>
                    </div>
                    <div class="full-construction__th desktop flex__center grey__bg">
                        <div class="full-construction__th--wrap flex__center">
                            <p class="block__title text__orange--full-const ml-16">«Под ключ»</p>
                        </div>
                    </div>
                </div>
                <div class="full-construction__table--wrap">
                    <div class="full-construction__tbody desktop">
                        <div class="full-construction__tbody--wrap flex__center">
                            <div class="paragraph__icon flex__center">
                                <!-- open-box-icon -->
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.4118 30H4V11.1429M23.4118 30V11.1429M23.4118 30L28.7059 24.8571V16.2857M23.4118 11.1429H4M23.4118 11.1429L28.7059 6M23.4118 11.1429L28.7059 16.2857M4 11.1429L9.29412 6H28.7059M28.7059 6L34 11.1429L28.7059 16.2857M9.29412 16.2857H18.1176" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="block__title text__orange--full-const ml-16">Упаковка</p>
                        </div>
                    </div>
                    <div class="full-construction__tbody desktop">
                        <div class="full-construction__tbody--wrap">
                            <p class="block__title">Покупка коробок и упаковка вещей — на вас</p>
                        </div>
                    </div>
                    <div class="full-construction__tbody desktop">
                        <div class="full-construction__tbody--wrap">
                            <p class="block__title">Мы доставим всё необходимое и надёжно упакуем имущество</p>
                        </div>
                    </div>
                </div>
                <div class="full-construction__table--wrap">
                    <div class="full-construction__tbody desktop grey__bg">
                        <div class="full-construction__tbody--wrap flex__center">
                            <div class="paragraph__icon flex__center">
                                <!-- instruments-icon -->
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.2609 17.6781L13.9404 18.9986L11.2993 21.6397C11.2993 21.6397 8.32672 20.8418 6.73104 21.6397C5.60272 22.2038 4.96518 22.7737 4.44689 23.9238C3.7582 25.4521 3.8847 26.7605 4.73241 28.2066C5.58011 29.6527 6.34622 30.4188 7.79231 31.2665C9.2384 32.1142 10.5469 32.2407 12.0751 31.552C13.2252 31.0337 13.7951 30.3962 14.3592 29.2679C15.1571 27.6722 14.3592 24.6996 14.3592 24.6996L17.0003 22.0585L17.6605 21.3983M17.2417 15.6973L17.902 15.0371L19.2225 13.7165L21.8635 11.0755C21.8635 11.0755 21.1118 7.81215 22.149 6.22169C23.538 4.09195 28.4304 4.50857 28.4304 4.50857L25.2897 7.64928L25.5447 10.4542L28.3496 10.7092L31.4904 7.56848C31.4904 7.56848 31.907 12.4609 29.7772 13.8499C28.1868 14.8871 24.9234 14.1354 24.9234 14.1354L22.2824 16.7765L20.9619 18.097" stroke="#F58220" stroke-width="1.3"/>
                                    <path d="M11.0804 24.9227L11.6574 27.0762L10.0809 28.6527L7.92741 28.0757L7.35037 25.9221L8.92687 24.3457L11.0804 24.9227Z" stroke="#F58220" stroke-width="1.3"/>
                                    <path d="M7.0395 10.7446L5.32639 6.74734L6.46847 5.60526L10.4657 7.31838L11.0368 9.03149L19.6023 17.597L22.8046 18.6645C22.9519 18.7136 23.0857 18.7963 23.1955 18.906L31.458 27.1686C31.8486 27.5591 31.8486 28.1923 31.458 28.5828L28.3039 31.7369C27.9134 32.1274 27.2803 32.1274 26.8897 31.7369L18.6272 23.4743C18.5174 23.3646 18.4347 23.2307 18.3856 23.0835L17.3182 19.8812L8.75262 11.3156L7.0395 10.7446Z" stroke="#F58220" stroke-width="1.3"/>
                                </svg>
                            </div>
                            <p class="block__title text__orange--full-const ml-16 block__title--full-constraction">Разборка и сборка мебели</p>
                        </div>
                    </div>
                    <div class="full-construction__tbody desktop grey__bg">
                        <div class="full-construction__tbody--wrap">
                            <p class="block__title">Вы разбираете и собираете мебель сами</p>
                        </div>
                    </div>
                    <div class="full-construction__tbody desktop grey__bg">
                        <div class="full-construction__tbody--wrap">
                            <p class="block__title">Мы возьмём это на себя, обещаем быть аккуратными</p>
                        </div>
                    </div>
                </div>
                <div class="full-construction__table--wrap">
                    <div class="full-construction__tbody desktop">
                        <div class="full-construction__tbody--wrap flex__center">
                            <div class="paragraph__icon flex__center">
                                <!-- wheelbarrow-icon -->
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.19922 3H4.75842L13.6564 27.375M17.2156 30.1875C17.2156 31.7408 16.0205 33 14.5462 33C13.072 33 11.8768 31.7408 11.8768 30.1875C11.8768 28.6342 13.072 27.375 14.5462 27.375C16.0205 27.375 17.2156 28.6342 17.2156 30.1875ZM17.2156 30.1875L34.1992 23.5752M10.0972 16.125L26.1136 10.5L30.5626 24.5625M7.29938 8.8327L15.0599 6.10718L17.2156 12.921M15.6215 18.9375L23.6297 16.125" stroke="#F58220" stroke-width="1.3"/>
                                </svg>
                            </div>
                            <p class="block__title text__orange--full-const ml-16 block__title--full-constraction">Погрузка и разгрузка</p>
                        </div>
                    </div>
                    <div class="full-construction__tbody desktop">
                        <div class="full-construction__tbody--wrap">
                            <p class="block__title">Вы делаете это сами или силами другой компании</p>
                        </div>
                    </div>
                    <div class="full-construction__tbody desktop">
                        <div class="full-construction__tbody--wrap">
                            <p class="block__title">Мы приедем в удобное время и сделаем всё за вас</p>
                        </div>
                    </div>
                </div>
                <div class="full-construction__table--wrap">
                    <div class="full-construction__tbody desktop grey__bg">
                        <div class="full-construction__tbody--wrap flex__center">
                            <div class="paragraph__icon flex__center">
                                <!-- track-icon -->
                                <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30.7813 15.7116L31.8847 17.8063C31.9604 17.95 32 18.1099 32 18.2723V23.8421C32 24.3944 31.5523 24.8421 31 24.8421L28.4995 24.842M30.7813 15.7116L27.8283 11.2831C27.6428 11.0049 27.3306 10.8379 26.9963 10.8379H23.9139M30.7813 15.7116H24.9139C24.3617 15.7116 23.9139 15.2639 23.9139 14.7116V10.8379M23.9139 10.8379V9C23.9139 8.44771 23.4662 8 22.9139 8H5C4.44772 8 4 8.44772 4 9V23.8421C4 24.3944 4.44772 24.8421 5 24.8421H7.58073M13.6442 24.8418H22.2709M7.58073 24.8421C7.58073 26.5862 8.97984 28 10.7057 28C12.4316 28 13.8307 26.5862 13.8307 24.8421C13.8307 23.098 12.4316 21.6842 10.7057 21.6842C8.97984 21.6842 7.58073 23.098 7.58073 24.8421ZM28.5757 24.8421C28.5757 26.5862 27.1766 28 25.4507 28C23.7248 28 22.3257 26.5862 22.3257 24.8421C22.3257 23.098 23.7248 21.6842 25.4507 21.6842C27.1766 21.6842 28.5757 23.098 28.5757 24.8421Z" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="block__title text__orange--full-const ml-16 block__title--full-constraction">Перевозка в Москву</p>
                        </div>
                    </div>
                    <div class="full-construction__tbody desktop grey__bg">
                        <div class="full-construction__tbody--wrap">
                            <p class="block__title">В автомобиле также будут вещи других клиентов</p>
                        </div>
                    </div>
                    <div class="full-construction__tbody desktop grey__bg">
                        <div class="full-construction__tbody--wrap">
                            <p class="block__title">Мы везём только ваши вещи, на всё — один автомобиль</p>
                        </div>
                    </div>
                </div>
                <div class="full-construction__table--wrap">
                    <div class="full-construction__tbody desktop">
                        <div class="full-construction__tbody--wrap flex__center">
                            <div class="paragraph__icon flex__center">
                                <!-- calendar-icon -->
                                <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25 6V11.1111M11 6V11.1111M7.5 17.6481H12.75M7.5 21.0556H12.75M7.5 24.463H12.75M15.375 17.6481H20.625M15.375 21.0556H20.625M15.375 24.463H20.625M23.25 17.6481H28.5M23.25 21.0556H28.5M23.25 24.463H28.5M4.875 31H31.125C31.6082 31 32 30.6186 32 30.1481V9.40741C32 8.93694 31.6082 8.55556 31.125 8.55556H4.875C4.39175 8.55556 4 8.93694 4 9.40741V30.1481C4 30.6186 4.39175 31 4.875 31Z" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="block__title text__orange--full-const ml-16 block__title--full-constraction">Сроки переезда</p>
                        </div>
                    </div>
                    <div class="full-construction__tbody desktop">
                        <div class="full-construction__tbody--wrap">
                            <p class="block__title">От 2 до 6 дней, какое-то время груз пробудет в терминале</p>
                        </div>
                    </div>
                    <div class="full-construction__tbody desktop">
                        <div class="full-construction__tbody--wrap">
                            <p class="block__title">Сегодня грузим вещи и отправляем автомобиль, а завтра он уже в пункте Б</p>
                        </div>
                    </div>
                </div>
                <div class="full-construction__table--wrap">
                    <div class="full-construction__tbody desktop grey__bg">
                        <div class="full-construction__tbody--wrap flex__center">
                            <div class="paragraph__icon flex__center">
                                <!-- clock-icon -->
                                <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 6.15385V9.38462M29.8462 18H26.6154M9.38462 18H6.15385M23.8978 23.8999L26.1823 26.1844M26.0517 9.96146L23.7672 12.246M11.6691 23.8999L9.38462 26.1844M9.51527 9.96146L11.7998 12.246M18 26.6154V29.8462M18 11.5385V18L21.2308 21.2308M32 18C32 25.732 25.732 32 18 32C10.268 32 4 25.732 4 18C4 10.268 10.268 4 18 4C25.732 4 32 10.268 32 18Z" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="block__title text__orange--full-const ml-16 block__title--full-constraction">Прибытие автомобиля</p>
                        </div>
                    </div>
                    <div class="full-construction__tbody desktop grey__bg">
                        <div class="full-construction__tbody--wrap">
                            <p class="block__title">Интервал ожидания более 2 часов</p>
                        </div>
                    </div>
                    <div class="full-construction__tbody desktop grey__bg">
                        <div class="full-construction__tbody--wrap">
                            <p class="block__title">Автомобиль приедет в течение 2 часов</p>
                        </div>
                    </div>
                </div>
                <div class="full-construction__table--wrap">
                    <div class="full-construction__tbody desktop">
                        <div class="full-construction__tbody--wrap flex__center">
                            <div class="paragraph__icon flex__center">
                                <!-- contract-icon -->
                                <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31 27V3C31 2.44772 30.5523 2 30 2H6C5.44772 2 5 2.44772 5 3V33C5 33.5523 5.44771 34 6 34H24M31 27L24 34M31 27H25C24.4477 27 24 27.4477 24 28V34M27 7H9M27 11H9M27 15H9M27 19H9M12 26.7L13.5 28.5L16 25.5M18 27C18 29.2091 16.2091 31 14 31C11.7909 31 10 29.2091 10 27C10 24.7909 11.7909 23 14 23C16.2091 23 18 24.7909 18 27Z" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="block__title text__orange--full-const ml-16 block__title--full-constraction">Ответственность за имущество</p>
                        </div>
                    </div>
                    <div class="full-construction__tbody desktop">
                        <div class="full-construction__tbody--wrap">
                            <p class="block__title">Застрахована только перевозка</p>
                        </div>
                    </div>
                    <div class="full-construction__tbody desktop">
                        <div class="full-construction__tbody--wrap">
                            <p class="block__title">Застрахованы все этапы переезда</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/they-talk-about-us-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/contact-us-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-152">
        <h2 class="subtitle text__center--mobile mb-from-24-to-56">Возможно, вам это пригодится</h2>
        <?php include(THEME_DIR . '/blocks/stock-block.php'); ?>
    </section>
    <section class="section pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/additional-information-block.php'); ?>
    </section>
    <section class="section section__request pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/request-block.php'); ?>
    </section>
</main>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/moving.js"></script>
<?php
get_footer();
?>