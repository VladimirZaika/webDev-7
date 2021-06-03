<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Template name: corporate-service */
 /* Assets ID: corporate-service */

get_header();
?>
<main class="main flex__center pt-from-88-to-103">
    <section class="section">
        <div class="breadcrumb__wrap flex__center">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li><a href="#">Услуги</a></li>
                <li class="current__page">Корпоративное обслуживание</li>
            </ul>
        </div>
        <div class="action__block flex__center mt-from-24-to-32">
            <div class="action__block--text flex__center">
                <div class="paragraph__text--wrap">
                    <h1 class="title">Корпоративное обслуживание</h1>
                    <p class="block__text mt-from-8-to-16">Заключаем один договор на все услуги и фиксируем тарифы на срок до 3 лет</p>
                    <button class="button__orange button__hero flex__center desktop mt-40" type="button" data-toggle="modal" data-target="#order-call-modal">Заказать звонок</button>
                </div>
            </div>
            <div class="action__block--img flex__center">
                <picture class="flex__center">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/corporate-service-hero.png" alt="">
                </picture>
            </div>
        </div>
        <button class="button__orange mobile flex__center mt-24" data-toggle="modal" data-target="#order-call-modal">Заказать звонок</button>
    </section>
    <section class="section pt-from-64-to-152">
        <div class="our__services">
            <h2 class="subtitle text__center--mobile">Все услуги — по одному договору</h2>
            <div class="swiper-container corporate-service pt-from-24-to-56 pb-24-mobile">
                <div class="swiper-wrapper">
                    <div class="swiper-slide custom__slide">
                        <div class="task__link--img our__services--img flex__center" href="#">
                            <div class="img__bg img__bg--our-services">.</div>
                            <div class="img__text img__text--our-services">
                                <p>Перемещение имущества</p>
                                <p class="mt-4">из одного кабинета</p>
                                <p class="mt-4">в другой</p>
                            </div>
                            <picture class="flex__center">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/our-services-1.png" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide custom__slide">
                        <div class="task__link--img our__services--img flex__center" href="#">
                            <div class="img__bg img__bg--our-services">.</div>
                            <div class="img__text img__text--our-services">
                                <p>Перевозки имущества</p>
                                <p class="mt-4">между офисами</p>
                                <p class="mt-4">и городами России</p>
                            </div>
                            <picture class="flex__center">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/our-services-2.png" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide custom__slide">
                        <div class="task__link--img our__services--img flex__center" href="#">
                            <div class="img__bg img__bg--our-services">.</div>
                            <div class="img__text img__text--our-services">
                                <p>Сборка и разборка мебели</p>
                                <p class="mt-4">и оборудования</p>
                            </div>
                            <picture class="flex__center">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/our-services-3.png" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-slide custom__slide">
                        <div class="task__link--img our__services--img flex__center" href="#">
                            <div class="img__bg img__bg--our-services">.</div>
                            <div class="img__text img__text--our-services">
                                <p>Перемещение имущества</p>
                                <p class="mt-4">из одного кабинета</p>
                                <p class="mt-4">в другой</p>
                            </div>
                            <picture class="flex__center">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/our-services-1.png" alt="">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination corporate-service-bullets mobile"></div>
            </div>
            <div class="pagination__wrap desktop flex__center">
                <div class="swiper__button--wrap flex__center">
                    <div class="swiper-button-prev flex__center corporate-service-button-prev">
                        <!-- slider-arrow-icon.svg -->
                        <svg viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5L12.5172 4.4569C12.6659 4.59845 12.75 4.79474 12.75 5C12.75 5.20526 12.6659 5.40155 12.5172 5.5431L12 5ZM0 4.25L12 4.25V5.75L0 5.75V4.25ZM12.5172 5.5431L8.31724 9.5431L7.28276 8.4569L11.4828 4.4569L12.5172 5.5431ZM11.4828 5.5431L7.28276 1.5431L8.31724 0.456897L12.5172 4.4569L11.4828 5.5431Z" fill="#F58220"/>
                        </svg>
                    </div>
                    <div class="swiper-button-next flex__center corporate-service-button-next">
                        <!-- slider-arrow-icon.svg -->
                        <svg viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5L12.5172 4.4569C12.6659 4.59845 12.75 4.79474 12.75 5C12.75 5.20526 12.6659 5.40155 12.5172 5.5431L12 5ZM0 4.25L12 4.25V5.75L0 5.75V4.25ZM12.5172 5.5431L8.31724 9.5431L7.28276 8.4569L11.4828 4.4569L12.5172 5.5431ZM11.4828 5.5431L7.28276 1.5431L8.31724 0.456897L12.5172 4.4569L11.4828 5.5431Z" fill="#F58220"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section pt-from-64-to-152">
        <div class="paragraph__container flex__center">
            <h2 class="subtitle corporate-service__subtitle">Деликатное корпоративное обслуживание — это как?</h2>
            <div class="paragraph__main--wrap flex__center mt-from-24-to-56">
                <div class="paragraph__wrap">
                    <div class="paragraph__block paragraph__grey paragraph__corporate-service">
                        <div class="how-to-move__text--wrap">
                            <p class="block__title">Закрепляем за вами бригаду</p>
                            <p class="block__text mt-8">Если захотите, обслуживать вашу компанию будут всегда одни и те же специалисты «Деликатного переезда».</p>
                        </div>
                        <div class="paragraph__img--wrap man__with--boxes man__with--boxes-corporate-service">
                            <picture>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/man-with-boxes-fullsize.png" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="paragraph__block paragraph__grey paragraph__corporate-service">
                        <div class="how-to-move__text--wrap">
                            <p class="block__title">Несём ответственность перед вами и третьими лицами</p>
                            <p class="block__text mt-8">Надёжно упаковываем имущество и предельно аккуратны с интерьером: защищаем стены, напольные покрытия и лифты во время работ.</p>
                        </div>
                        <div class="paragraph__img--wrap box">
                            <picture>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/box.png" alt="">
                            </picture>
                            <div class="paragraph__img--wrap box__blur">
                                <picture>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/box-blur.png" alt="">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="paragraph__wrap mt-from-16-to-48">
                    <div class="paragraph__block paragraph__white">
                        <div class="paragraph__icon flex__center">
                            <!-- payment-icon -->
                            <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M31 27V3C31 2.44772 30.5523 2 30 2H6C5.44772 2 5 2.44772 5 3V33C5 33.5523 5.44771 34 6 34H24M31 27L24 34M31 27H25C24.4477 27 24 27.4477 24 28V34" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                <path d="M17 10.5V7H20.25C21.2165 7 22 7.7835 22 8.75C22 9.7165 21.2165 10.5 20.25 10.5H17ZM17 10.5V12.75M17 10.5H15M17 15V12.75M17 12.75H20.5M17 12.75H15M24 19H12M9 30L13.6859 28.296C14.0816 28.1521 14.5 28.4452 14.5 28.8663C14.5 29.3509 15.0401 29.6399 15.4433 29.3711L19 27M27 23H9" stroke="#F58220" stroke-width="1.3"/>
                            </svg>
                        </div>
                        <div class="paragraph__text--wrap">
                            <p class="block__title mt-from-16-to-24">Не требуем предоплату</p>
                            <p class="block__text mt-8">Её не нужно вносить, чтобы мы начали работать.</p>
                        </div>
                    </div> 
                    <button class="button__white show-all" type="button">Показать ещё</button>
                    <div class="paragraph__wrap mobile">
                        <div class="paragraph__block paragraph__white">
                            <div class="paragraph__icon flex__center">
                                <!-- checklist-icon -->
                                <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30 2H6C5.44772 2 5 2.44772 5 3V33C5 33.5523 5.44771 34 6 34H24H30C30.5523 34 31 33.5523 31 33V27V3C31 2.44772 30.5523 2 30 2Z" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                    <path d="M28 21H15" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                    <path d="M28 10H15" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                    <path d="M28 16H15" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                    <path d="M28 27H15" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                    <path d="M9 20.2L10.5 22L13 19" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                    <path d="M9 9.2L10.5 11L13 8" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                    <path d="M9 15.2L10.5 17L13 14" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                    <path d="M9 26.2L10.5 28L13 25" stroke="#F58220" stroke-width="1.3" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="paragraph__text--wrap">
                                <p class="block__title mt-from-16-to-24">Помогаем экономить</p>
                                <p class="block__text mt-8">С нами выгоднее благодаря комплексу услуг и единым тарифам, которые можно зафиксировать на срок до 3 лет.</p>
                            </div>
                        </div>
                        <div class="paragraph__block paragraph__white">
                            <div class="paragraph__icon flex__center">
                                <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M28.5907 17.9584C27.0472 8.41198 25.2317 5.98788 17.1058 6.00005M28.5907 17.9584H25.8022V26.0592H28.5907M28.5907 17.9584V26.0592M28.5907 17.9584C29.9213 17.9584 31 18.9666 31 20.2103V24.1826C31 25.219 30.1011 26.0592 28.9923 26.0592L28.5907 26.0592M7.40927 17.9584C8.95279 8.41198 11.7312 5.98788 18.8942 6.00005M7.40927 17.9584H10.1978V26.0592H7.40927M7.40927 17.9584V26.0592M7.40927 17.9584C6.07867 17.9584 5 18.9666 5 20.2103V24.1826C5 25.219 5.89889 26.0592 7.00772 26.0592L7.40927 26.0592M19.8571 27.6022L21.0952 29.9167C21.0952 29.9167 24.8316 30.4625 27.2929 28.7595C28.694 27.79 28.5309 26.0592 28.5309 26.0592" stroke="#F58220" stroke-width="1.3"/>
                                </svg>
                            </div>
                            <div class="paragraph__text--wrap">
                                <p class="block__title mt-from-16-to-24">Назначаем персонального менеджера </p>
                                <p class="block__text mt-8">К нему можно обратиться с любым вопросом — он координирует работу всех служб «Деликатного переезда» и всегда на связи.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section pt-from-64-to-152">
        <div class="all__recurces">
            <h2 class="subtitle corporate-service__subtitle">Все ресурсы для обслуживания — на нашей стороне</h2>
        </div>
        <div class="all__recurces--wrap flex__center mt-from-24-to-56">
            <div class="recurce">
                <div class="recerce__text flex__center">
                    <p>Штатные специалисты</p>
                </div>
                <div class="recerce__img">
                    <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/all-recurces-1.png" alt="">
                    </picture>
                </div>
            </div>
            <div class="recurce">
                <div class="recerce__text flex__center">
                    <p>Упаковочные материалы</p>
                </div>
                <div class="recerce__img">
                    <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/all-recurces-2.png" alt="">
                    </picture>
                </div>
            </div>
            <div class="recurce">
                <div class="recerce__text flex__center">
                    <p>Автопарк под ваши нужды</p>
                </div>
                <div class="recerce__img">
                    <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/all-recurces-3.png" alt="">
                    </picture>
                </div>
            </div>
            <div class="recurce">
                <div class="recerce__text flex__center">
                    <p>Склад ответственного хранения</p>
                </div>
                <div class="recerce__img">
                    <picture class="flex__center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/all-recurces-4.png" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <section class="section pt-from-64-to-152">
        <div class="about__cost">
            <h2 class="subtitle">Как узнать условия сотрудничества?</h2>
            <div class="about__cost--wrap flex__center mt-from-24-to-56">
                <div class="paragraph__block paragraph__cost paragraph__terms-of-cooperation">
                    <div class="paragraph__cost--wrap">
                        <div class="cost__icon flex__center">
                        <picture class="flex__center">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/phone.png" alt="">
                        </picture>
                        </div>
                        <div class="paragraph__text--wrap mt-from-16-to-24">
                            <p class="block__title mt-from-16-to-24">Позвонить </p>
                            <p class="block__text mt-8">Обсудите нужные вам услуги и другие подробности по телефону.</p>
                        </div>
                    </div>
                    <div class="paragraph__contacts flex__center mt-16">
                        <a class="tel" href="tel:+78122103288">
                            <span class="tel__text header__text">+7 (812) 210-32-88</span>
                        </a>
                    </div>
                </div>
                <div class="paragraph__block paragraph__cost paragraph__terms-of-cooperation">
                    <div class="paragraph__cost--wrap">
                        <div class="cost__icon flex__center">
                            <picture class="flex__center">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/mail-img.png" alt="">
                            </picture>
                        </div>
                        <div class="paragraph__text--wrap mt-from-16-to-24">
                            <p class="block__title mt-from-16-to-24">Написать</p>
                            <p class="block__text mt-8">Наша почта — <br><a class="terms-of-cooperation__link" href="mailto:hello@spb-pereezd.ru">hello@spb-pereezd.ru</a>. В мессенджерах и соцсетях тоже отвечаем.</p>
                        </div>
                    </div>
                    <div class="paragraph__contacts flex__center mt-16">
                        <div class="social__block cost__social--block">
                            <a class="social__icon cost__social flex__center" href="#">
                                <!-- viber-icon.svg -->
                                <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 2.5C5.86433 2.5 2.5 5.86433 2.5 10C2.5 11.4109 2.89202 12.7805 3.63567 13.9698C3.33942 15.0077 2.80433 16.971 2.79856 16.9914C2.77087 17.093 2.80058 17.2014 2.87644 17.2744C2.95231 17.3474 3.06192 17.3734 3.16173 17.3428L6.13462 16.4284C7.29914 17.1299 8.63269 17.5 10 17.5C14.1357 17.5 17.5 14.1357 17.5 10C17.5 5.86433 14.1357 2.5 10 2.5ZM10 16.9231C8.69644 16.9231 7.42663 16.5588 6.3276 15.8699C6.28115 15.8408 6.22779 15.8261 6.17442 15.8261C6.14587 15.8261 6.11731 15.8304 6.08962 15.8388L3.49375 16.6378C3.68442 15.9417 4.02712 14.6967 4.22587 14.0041C4.24894 13.9239 4.23596 13.8374 4.19067 13.7673C3.46202 12.6461 3.07692 11.3434 3.07692 10C3.07692 6.18279 6.18279 3.07692 10 3.07692C13.8172 3.07692 16.9231 6.18279 16.9231 10C16.9231 13.8172 13.8172 16.9231 10 16.9231Z" fill="#F58220"/>
                                    <path d="M10 16.9231C8.69644 16.9231 7.42663 16.5588 6.3276 15.8699C6.28115 15.8408 6.22779 15.8261 6.17442 15.8261C6.14587 15.8261 6.11731 15.8304 6.08962 15.8388L3.49375 16.6378C3.68442 15.9417 4.02712 14.6967 4.22587 14.0041C4.24894 13.9239 4.23596 13.8374 4.19067 13.7673C3.46202 12.6461 3.07692 11.3434 3.07692 10C3.07692 6.18279 6.18279 3.07692 10 3.07692C13.8172 3.07692 16.9231 6.18279 16.9231 10C16.9231 13.8172 13.8172 16.9231 10 16.9231Z" fill="#F58220"/>
                                    <path d="M14.0988 11.4949C13.6682 11.2543 13.3015 11.0131 13.0339 10.8371C12.8295 10.7029 12.6819 10.606 12.5736 10.5513C12.2711 10.3994 12.0418 10.5067 11.9545 10.5954C11.9435 10.6064 11.9338 10.6184 11.9254 10.6311C11.6111 11.1053 11.2008 11.5589 11.0806 11.5833C10.9418 11.5615 10.2922 11.19 9.64645 10.6491C8.9872 10.0965 8.57243 9.56732 8.51155 9.20688C8.93448 8.76899 9.08681 8.49349 9.08681 8.17998C9.08681 7.85685 8.33752 6.50776 8.20199 6.37142C8.06599 6.23484 7.75969 6.21349 7.2915 6.30735C7.24648 6.3165 7.20495 6.3388 7.17229 6.37142C7.11561 6.42844 5.78918 7.78879 6.4195 9.43755C7.11141 11.2471 8.88736 13.3504 11.1516 13.692C11.4089 13.7308 11.6501 13.75 11.8759 13.75C13.2079 13.75 13.9941 13.0758 14.2155 11.7384C14.232 11.6406 14.1851 11.543 14.0988 11.4949ZM11.2209 13.2279C8.82648 12.8667 7.31833 10.4804 6.85503 9.26906C6.39548 8.06758 7.24298 6.99633 7.45573 6.75415C7.62882 6.72459 7.81101 6.71215 7.88706 6.72412C8.04592 6.94635 8.596 7.99178 8.62026 8.17998C8.62026 8.30318 8.58037 8.47472 8.10541 8.95273C8.06155 8.99662 8.03706 9.05622 8.03706 9.11864C8.03706 10.3474 10.6134 12.052 11.0697 12.052C11.4665 12.052 11.9839 11.3811 12.2785 10.9439C12.2956 10.9446 12.3243 10.9504 12.3651 10.9711C12.4491 11.0136 12.5946 11.1091 12.7787 11.2302C13.0218 11.39 13.3446 11.6021 13.7258 11.822C13.5527 12.6597 13.0689 13.5071 11.2209 13.2279Z" fill="white"/>
                                    <path d="M11.2209 13.2279C8.82648 12.8667 7.31833 10.4804 6.85503 9.26906C6.39548 8.06758 7.24298 6.99633 7.45573 6.75415C7.62882 6.72459 7.81101 6.71215 7.88706 6.72412C8.04592 6.94635 8.596 7.99178 8.62026 8.17998C8.62026 8.30318 8.58037 8.47472 8.10541 8.95273C8.06155 8.99662 8.03706 9.05622 8.03706 9.11864C8.03706 10.3474 10.6134 12.052 11.0697 12.052C11.4665 12.052 11.9839 11.3811 12.2785 10.9439C12.2956 10.9446 12.3243 10.9504 12.3651 10.9711C12.4491 11.0136 12.5946 11.1091 12.7787 11.2302C13.0218 11.39 13.3446 11.6021 13.7258 11.822C13.5527 12.6597 13.0689 13.5071 11.2209 13.2279Z" fill="white"/>
                                </svg>
                            </a>
                            <a class="social__icon cost__social flex__center" href="#">
                                <!-- whatsapp-icon.svg -->
                                <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.3948 5.8465L17.3902 5.82803C17.0168 4.31836 15.3332 2.69841 13.7871 2.36139L13.7697 2.3578C11.2689 1.88073 8.73333 1.88073 6.23312 2.3578L6.21517 2.36139C4.66959 2.69841 2.98603 4.31836 2.61208 5.82803L2.60797 5.8465C2.1463 7.9548 2.1463 10.0929 2.60797 12.2012L2.61208 12.2196C2.97008 13.6649 4.52827 15.2104 6.01665 15.6354V17.3206C6.01665 17.9306 6.75994 18.2301 7.18263 17.79L8.89005 16.0152C9.26036 16.0359 9.63088 16.0474 10.0014 16.0474C11.2602 16.0474 12.5196 15.9284 13.7697 15.6899L13.7871 15.6863C15.3332 15.3493 17.0168 13.7293 17.3902 12.2197L17.3948 12.2012C17.8565 10.0929 17.8565 7.9548 17.3948 5.8465ZM16.0437 11.8954C15.7943 12.8803 14.516 14.1048 13.5004 14.331C12.1707 14.5838 10.8305 14.6919 9.49165 14.6548C9.46503 14.6541 9.43943 14.6644 9.42087 14.6835C9.23086 14.8785 8.1742 15.9633 8.1742 15.9633L6.84817 17.3242C6.75122 17.4252 6.58092 17.3565 6.58092 17.217V14.4253C6.58092 14.3792 6.54798 14.34 6.50269 14.3311C6.50294 14.3312 6.50243 14.3311 6.50269 14.3311C5.48701 14.1049 4.20844 12.8803 3.95862 11.8954C3.54311 9.9897 3.54311 8.05786 3.95862 6.15218C4.20844 5.16728 5.48624 3.94282 6.50192 3.7166C8.82413 3.27493 11.1787 3.27493 13.5004 3.7166C14.5165 3.94282 15.7943 5.16728 16.0437 6.15218C16.4596 8.05791 16.4596 9.98975 16.0437 11.8954Z" fill="#F58220"/>
                                    <path d="M16.0437 11.8954C15.7943 12.8803 14.516 14.1048 13.5004 14.331C12.1707 14.5838 10.8305 14.6919 9.49165 14.6548C9.46503 14.6541 9.43943 14.6644 9.42087 14.6835L8.1742 15.9633L6.84817 17.3242C6.75122 17.4252 6.58092 17.3565 6.58092 17.217V14.4253C6.58092 14.3792 6.54798 14.34 6.50269 14.3311C5.48701 14.1049 4.20844 12.8803 3.95862 11.8954C3.54311 9.9897 3.54311 8.05786 3.95862 6.15218C4.20844 5.16728 5.48624 3.94282 6.50192 3.7166C8.82413 3.27493 11.1787 3.27493 13.5004 3.7166C14.5165 3.94282 15.7943 5.16728 16.0437 6.15218C16.4596 8.05791 16.4596 9.98975 16.0437 11.8954Z" fill="#F58220"/>
                                    <path d="M12.2156 13.1832C12.0594 13.1358 11.9106 13.1039 11.7724 13.0466C10.3404 12.4525 9.02248 11.686 7.97854 10.511C7.38488 9.84289 6.92023 9.08857 6.52745 8.29029C6.34119 7.91172 6.18422 7.51832 6.02423 7.12749C5.87834 6.77108 6.09322 6.40287 6.31949 6.13433C6.53181 5.88231 6.80502 5.68943 7.1009 5.54729C7.33184 5.43634 7.55965 5.5003 7.72831 5.69605C8.09293 6.11925 8.42785 6.5641 8.69905 7.05465C8.86582 7.35638 8.82006 7.7252 8.51782 7.93054C8.44436 7.98046 8.37742 8.03904 8.30899 8.09541C8.24897 8.14481 8.1925 8.19472 8.15136 8.26161C8.07615 8.38401 8.07256 8.52836 8.12099 8.66142C8.49371 9.68572 9.12194 10.4822 10.1529 10.9112C10.3179 10.9798 10.4836 11.0598 10.6736 11.0376C10.9919 11.0004 11.095 10.6513 11.318 10.4689C11.536 10.2906 11.8146 10.2883 12.0495 10.4369C12.2843 10.5855 12.5121 10.7451 12.7384 10.9064C12.9605 11.0647 13.1817 11.2195 13.3867 11.4C13.5837 11.5735 13.6516 11.8012 13.5406 12.0367C13.3375 12.468 13.0419 12.8268 12.6155 13.0559C12.4951 13.1205 12.3513 13.1414 12.2156 13.1832C12.0594 13.1357 12.3513 13.1414 12.2156 13.1832Z" fill="white"/>
                                    <path d="M10.0018 5.05547C11.8749 5.10794 13.4133 6.35102 13.743 8.20284C13.7992 8.51837 13.8192 8.84097 13.8441 9.16122C13.8547 9.29593 13.7784 9.42391 13.633 9.42566C13.4829 9.42745 13.4153 9.30183 13.4056 9.16717C13.3863 8.90063 13.3729 8.63291 13.3362 8.36858C13.1423 6.97325 12.0296 5.81887 10.6408 5.57115C10.4318 5.53386 10.2179 5.52406 10.0062 5.50185C9.87234 5.4878 9.69706 5.47969 9.66741 5.31334C9.64253 5.17386 9.76026 5.0628 9.89306 5.05567C9.92918 5.05367 9.96549 5.05531 10.0018 5.05547C11.8749 5.10794 9.96549 5.05531 10.0018 5.05547Z" fill="white"/>
                                    <path d="M12.8519 8.74533C12.8489 8.76872 12.8472 8.82371 12.8335 8.87552C12.7838 9.06357 12.4987 9.08712 12.4331 8.89732C12.4136 8.84099 12.4107 8.77692 12.4106 8.71629C12.4099 8.31956 12.3237 7.92324 12.1236 7.57806C11.918 7.22329 11.6038 6.92506 11.2353 6.74459C11.0124 6.63548 10.7714 6.56767 10.5272 6.52725C10.4205 6.5096 10.3126 6.49888 10.2053 6.48395C10.0753 6.4659 10.0059 6.38305 10.0121 6.25496C10.0178 6.13493 10.1056 6.0486 10.2364 6.05598C10.6662 6.0804 11.0814 6.1733 11.4636 6.37567C12.2407 6.78722 12.6847 7.43684 12.8142 8.30428C12.8201 8.34357 12.8295 8.3825 12.8325 8.42195C12.8398 8.51936 12.8445 8.61688 12.8519 8.74533C12.8489 8.76872 12.8445 8.61688 12.8519 8.74533Z" fill="white"/>
                                    <path d="M11.6875 8.69812C11.5308 8.70094 11.4469 8.6142 11.4308 8.47052C11.4195 8.37033 11.4106 8.26882 11.3867 8.17135C11.3397 7.9794 11.2376 7.8015 11.0761 7.68388C10.9999 7.62832 10.9135 7.58785 10.823 7.56174C10.7081 7.52855 10.5887 7.53768 10.474 7.50957C10.3495 7.47905 10.2806 7.3782 10.3002 7.26135C10.318 7.15501 10.4214 7.07201 10.5376 7.08042C11.2638 7.13285 11.7829 7.50829 11.8569 8.3632C11.8622 8.42353 11.8683 8.48729 11.8549 8.545C11.832 8.6438 11.7589 8.6933 11.6875 8.69812C11.5308 8.70094 11.7589 8.6933 11.6875 8.69812Z" fill="white"/>
                                </svg>
                            </a>
                            <a class="social__icon cost__social flex__center" href="#">
                                <!-- vk-icon.svg -->
                                <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.9728 11.318C14.7135 10.9832 14.7877 10.8342 14.9728 10.535C14.9761 10.5316 17.116 7.5076 17.3364 6.48208L17.3378 6.48139C17.4473 6.10767 17.3378 5.83301 16.808 5.83301H15.0549C14.6087 5.83301 14.4029 6.06872 14.2927 6.33245C14.2927 6.33245 13.4001 8.51742 12.1374 9.93375C11.7299 10.343 11.5415 10.4742 11.319 10.4742C11.2095 10.4742 11.0391 10.343 11.0391 9.96928V6.48139C11.0391 6.03319 10.9142 5.83301 10.5447 5.83301H7.78824C7.50831 5.83301 7.34196 6.04208 7.34196 6.2368C7.34196 6.66177 7.9733 6.75947 8.03877 7.95512V10.5493C8.03877 11.1178 7.93789 11.2223 7.71408 11.2223C7.11816 11.2223 5.67176 9.02847 4.81462 6.5176C4.64159 6.03046 4.47256 5.83369 4.02295 5.83369H2.26924C1.76885 5.83369 1.66797 6.06941 1.66797 6.33313C1.66797 6.79909 2.26389 9.11593 4.43916 12.1768C5.88889 14.2661 7.93054 15.3982 9.7878 15.3982C10.9042 15.3982 11.0404 15.1468 11.0404 14.7143C11.0404 12.7179 10.9396 12.5293 11.4987 12.5293C11.758 12.5293 12.2042 12.6605 13.2464 13.6683C14.4376 14.8633 14.6334 15.3982 15.3001 15.3982H17.0532C17.5529 15.3982 17.8061 15.1468 17.6604 14.6508C17.3271 13.6075 15.0743 11.4615 14.9728 11.318Z" fill="#F58220"/>
                                </svg>
                            </a>
                            <a class="social__icon cost__social flex__center" href="#">
                                <!-- instagram-icon.svg -->
                                <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.4619 6.91005C17.4267 6.11304 17.2978 5.56511 17.1132 5.09031C16.9226 4.58633 16.6296 4.13511 16.2456 3.76002C15.8704 3.37908 15.4161 3.08308 14.9179 2.89559C14.4403 2.71096 13.8951 2.58207 13.0979 2.54693C12.2948 2.50881 12.0398 2.5 10.0029 2.5C7.96599 2.5 7.71104 2.50881 6.9109 2.54395C6.11373 2.57909 5.56569 2.70809 5.09092 2.89261C4.58673 3.08308 4.13542 3.3761 3.76026 3.76002C3.37925 4.13511 3.0833 4.5893 2.89566 5.08745C2.711 5.56511 2.58209 6.11007 2.54694 6.90708C2.50882 7.71004 2.5 7.96495 2.5 10.0015C2.5 12.038 2.50882 12.2929 2.54396 13.0929C2.57911 13.8899 2.70813 14.4379 2.8928 14.9127C3.0833 15.4166 3.37925 15.8679 3.76026 16.243C4.13542 16.6239 4.5897 16.9199 5.08794 17.1074C5.56569 17.292 6.11076 17.4209 6.90803 17.456C7.70806 17.4913 7.96313 17.5 10.0001 17.5C12.037 17.5 12.2919 17.4913 13.0921 17.456C13.8892 17.4209 14.4373 17.292 14.9121 17.1074C15.9203 16.7176 16.7175 15.9206 17.1073 14.9127C17.2919 14.435 17.4209 13.8899 17.456 13.0929C17.4912 12.2929 17.5 12.038 17.5 10.0015C17.5 7.96495 17.497 7.71004 17.4619 6.91005ZM16.1108 13.0343C16.0785 13.7669 15.9555 14.1625 15.8529 14.4262C15.6008 15.0797 15.0821 15.5983 14.4285 15.8504C14.1647 15.9529 13.7662 16.076 13.0363 16.1081C12.245 16.1434 12.0077 16.1521 10.0059 16.1521C8.00412 16.1521 7.76381 16.1434 6.97535 16.1081C6.24264 16.076 5.84698 15.9529 5.58321 15.8504C5.25796 15.7302 4.9619 15.5397 4.72159 15.2906C4.47247 15.0474 4.28197 14.7544 4.16176 14.4292C4.05918 14.1654 3.93611 13.7669 3.90394 13.0373C3.86867 12.2461 3.85997 12.0087 3.85997 10.0073C3.85997 8.00593 3.86867 7.76567 3.90394 6.97747C3.93611 6.24491 4.05918 5.84932 4.16176 5.5856C4.28197 5.26029 4.47247 4.9644 4.72457 4.72403C4.96773 4.47496 5.26082 4.28449 5.58618 4.16442C5.84996 4.06186 6.2486 3.93881 6.97833 3.90653C7.76965 3.87139 8.00709 3.86257 10.0088 3.86257C12.0135 3.86257 12.2508 3.87139 13.0393 3.90653C13.772 3.93881 14.1677 4.06186 14.4314 4.16442C14.7567 4.28449 15.0528 4.47496 15.2931 4.72403C15.5422 4.96726 15.7327 5.26029 15.8529 5.5856C15.9555 5.84932 16.0785 6.24777 16.1108 6.97747C16.146 7.76865 16.1548 8.00593 16.1548 10.0073C16.1548 12.0087 16.146 12.2431 16.1108 13.0343Z" fill="#F58220"/>
                                    <path d="M16.1108 13.0343C16.0785 13.7669 15.9555 14.1625 15.8529 14.4262C15.6008 15.0797 15.0821 15.5983 14.4285 15.8504C14.1647 15.9529 13.7662 16.076 13.0363 16.1081C12.245 16.1434 12.0077 16.1521 10.0059 16.1521C8.00412 16.1521 7.76381 16.1434 6.97535 16.1081C6.24264 16.076 5.84698 15.9529 5.58321 15.8504C5.25796 15.7302 4.9619 15.5397 4.72159 15.2906C4.47247 15.0474 4.28197 14.7544 4.16176 14.4292C4.05918 14.1654 3.93611 13.7669 3.90394 13.0373C3.86867 12.2461 3.85997 12.0087 3.85997 10.0073C3.85997 8.00593 3.86867 7.76567 3.90394 6.97747C3.93611 6.24491 4.05918 5.84932 4.16176 5.5856C4.28197 5.26029 4.47247 4.9644 4.72457 4.72403C4.96773 4.47496 5.26082 4.28449 5.58618 4.16442C5.84996 4.06186 6.2486 3.93881 6.97833 3.90653C7.76965 3.87139 8.00709 3.86257 10.0088 3.86257C12.0135 3.86257 12.2508 3.87139 13.0393 3.90653C13.772 3.93881 14.1677 4.06186 14.4314 4.16442C14.7567 4.28449 15.0528 4.47496 15.2931 4.72403C15.5422 4.96726 15.7327 5.26029 15.8529 5.5856C15.9555 5.84932 16.0785 6.24777 16.1108 6.97747C16.146 7.76865 16.1548 8.00593 16.1548 10.0073C16.1548 12.0087 16.146 12.2431 16.1108 13.0343Z" fill="#F58220"/>
                                    <path d="M10 6.25C7.92972 6.25 6.25 7.92961 6.25 10C6.25 12.0704 7.92972 13.75 10 13.75C12.0704 13.75 13.75 12.0704 13.75 10C13.75 7.92961 12.0704 6.25 10 6.25ZM10 12.4325C8.65691 12.4325 7.56747 11.3432 7.56747 10C7.56747 8.6568 8.65691 7.56747 10 7.56747C11.3432 7.56747 12.4325 8.6568 12.4325 10C12.4325 11.3432 11.3432 12.4325 10 12.4325Z" fill="white"/>
                                    <path d="M15.25 5.875C15.25 6.49626 14.7463 7 14.1249 7C13.5037 7 13 6.49626 13 5.875C13 5.25359 13.5037 4.75 14.1249 4.75C14.7463 4.75 15.25 5.25359 15.25 5.875Z" fill="white"/>
                                </svg>
                            </a>
                            <a class="social__icon cost__social flex__center" href="#">
                                <!-- email-icon.svg -->
                                <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.9813 5.71387L12.668 9.99939L16.9813 14.2849C17.0592 14.1219 17.1065 13.9418 17.1065 13.7494V6.24939C17.1065 6.05698 17.0592 5.87684 16.9813 5.71387Z" fill="#F58220"/>
                                    <path d="M15.8554 5H4.13318C3.94077 5 3.76063 5.04731 3.59766 5.12528L9.11051 10.6104C9.59795 11.0978 10.3906 11.0978 10.8781 10.6104L16.3909 5.12528C16.2279 5.04731 16.0478 5 15.8554 5Z" fill="#F58220"/>
                                    <path d="M3.012 5.71387C2.93402 5.87684 2.88672 6.05698 2.88672 6.24939V13.7494C2.88672 13.9418 2.93402 14.122 3.012 14.2849L7.3253 9.99939L3.012 5.71387Z" fill="#F58220"/>
                                    <path d="M12.0776 10.5898L11.4673 11.2002C10.6551 12.0124 9.33348 12.0124 8.52129 11.2002L7.91096 10.5898L3.59766 14.8754C3.76063 14.9533 3.94077 15.0006 4.13318 15.0006H15.8554C16.0478 15.0006 16.2279 14.9533 16.3909 14.8754L12.0776 10.5898Z" fill="#F58220"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="paragraph__block paragraph__cost paragraph__terms-of-cooperation">
                    <div class="paragraph__cost--wrap">
                        <div class="cost__icon flex__center">
                            <picture class="flex__center">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/car.png" alt="">
                            </picture>
                        </div>
                        <div class="paragraph__text--wrap mt-from-16-to-24">
                            <p class="block__title mt-from-16-to-24">Вызвать менеджера</p>
                            <p class="block__text mt-8">Это необходимо, чтобы провести переговоры и подписать бумаги.</p>
                        </div>
                    </div>
                    <div class="paragraph__contacts flex__center mt-16">
                        <a class="go-to__new-blank flex__center" href="#">Все услуги <span class="link__arrow flex__center"><span>.</span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section__four-rules flex__center mt-from-64-to-152">
        <div class="section__wrap four-rules">
            <div class="four__rules mobile">
                <h2 class="subtitle text__center--mobile flex__center">Свяжитесь с нами, а дальше мы…</h2>
                <div class="swiper-container four-step mt-24 pb-24">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide custom__slide custom__slide--height">
                            <div class="paragraph__block paragraph__four-rules corporate">
                                <div class="paragraph__cost--wrap">
                                    <div class="rule__count flex__center">
                                        <span class="rule__count--text">01</span>
                                    </div>
                                    <div class="paragraph__text--wrap mt-16">
                                        <p class="block__title block__title--four-step">Отправим вам образец договора</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide custom__slide custom__slide--height">
                            <div class="paragraph__block paragraph__four-rules corporate">
                                <div class="paragraph__cost--wrap">
                                    <div class="rule__count flex__center">
                                        <span class="rule__count--text">02</span>
                                    </div>
                                    <div class="paragraph__text--wrap mt-16">
                                        <p class="block__title block__title--four-step">Встретимся и обсудим условия</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide custom__slide custom__slide--height">
                            <div class="paragraph__block paragraph__four-rules corporate">
                                <div class="paragraph__cost--wrap">
                                    <div class="rule__count flex__center">
                                        <span class="rule__count--text">03</span>
                                    </div>
                                    <div class="paragraph__text--wrap mt-16">
                                        <p class="block__title block__title--four-step">Подпишем договор</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide custom__slide custom__slide--height">
                            <div class="paragraph__block paragraph__four-rules corporate">
                                <div class="paragraph__cost--wrap">
                                    <div class="rule__count flex__center">
                                        <span class="rule__count--text">04</span>
                                    </div>
                                    <div class="paragraph__text--wrap mt-16">
                                        <p class="block__title block__title--four-step">Начнём работать</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination four-step-bullets"></div>
                </div>
            </div>
            <div class="four__rules desktop">
                <h2 class="subtitle subtitle__four--rules flex__center">Свяжитесь с нами, а дальше мы…</h2>
                <div class="four__rules--wrap">
                    <div class="border__dashed corporate">.</div>
                    <div class="paragraph__four-rules desktop corporate">
                        <div class="rule__count desktop corporate flex__center">
                            <span class="rule__count--text">01</span>
                        </div>
                        <div class="paragraph__text--wrap desktop">
                            <p class="block__title">Отправим вам образец договора</p>
                        </div>
                    </div>
                    <div class="paragraph__four-rules desktop corporate mt-48">
                        <div class="rule__count desktop corporate flex__center">
                            <span class="rule__count--text">02</span>
                        </div>
                        <div class="paragraph__text--wrap desktop">
                            <p class="block__title">Встретимся и обсудим условия</p>
                        </div>
                    </div>
                    <div class="paragraph__four-rules desktop corporate mt-48">
                        <div class="rule__count desktop corporate flex__center">
                            <span class="rule__count--text">03</span>
                        </div>
                        <div class="paragraph__text--wrap desktop">
                            <p class="block__title">Подпишем договор</p>
                        </div>
                    </div>
                    <div class="paragraph__four-rules desktop corporate mt-48">
                        <div class="rule__count desktop corporate flex__center">
                            <span class="rule__count--text">04</span>
                        </div>
                        <div class="paragraph__text--wrap desktop">
                            <p class="block__title">Начнём работать</p>
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
    <section class="section section__request pt-from-64-to-152">
        <?php include(THEME_DIR . '/blocks/request-block.php'); ?>
    </section>
</main>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/corporate-service.js"></script>
<?php
get_footer();
?>