<?php
 /* Index template file. */
 /* @package delikatniy-pereezd\Template */
 /* Template name: 404 */
 /* Assets ID: 404 */

get_header();
?>
<main class="main main__404 flex__center pt-from-88-to-103">
    <section class="section section__article section__404 flex__center">
        <div class="icon__wrap--404">
            <svg viewBox="0 0 290 117" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M163.567 113.763C168.787 111.927 173.297 108.795 177.093 104.38L177.097 104.375C180.897 99.8488 183.865 93.8877 186.018 86.5141L186.019 86.5122C188.175 79.0192 189.247 69.6776 189.247 58.5V55.3144C189.247 44.9846 188.175 36.3304 186.016 29.3651C183.862 22.3087 180.892 16.6633 177.087 12.4535C173.29 8.14655 168.782 5.07129 163.566 3.23688C158.48 1.41056 152.968 0.5 147.034 0.5C141.099 0.5 135.534 1.4107 130.343 3.23606L130.34 3.23718C125.23 5.07226 120.775 8.14817 116.98 12.4538C113.176 16.6631 110.205 22.3078 108.052 29.3631C105.893 36.3287 104.82 44.9836 104.82 55.3144V58.5C104.82 69.6776 105.892 79.0192 108.049 86.5122L108.049 86.5141C110.202 93.8877 113.171 99.8488 116.97 104.375L116.974 104.38C120.77 108.794 125.225 111.926 130.34 113.763L130.343 113.764C135.534 115.589 141.099 116.5 147.034 116.5C152.968 116.5 158.481 115.589 163.567 113.763ZM163.567 113.763C163.566 113.763 163.565 113.764 163.564 113.764L163.398 113.292M163.567 113.763C163.567 113.763 163.567 113.763 163.567 113.763L163.398 113.292M163.398 113.292C158.371 115.097 152.916 116 147.034 116C141.151 116 135.643 115.097 130.509 113.292L176.714 12.7867C180.458 16.928 183.399 22.5028 185.538 29.5111C187.677 36.4132 188.747 45.0143 188.747 55.3144V58.5C188.747 69.6496 187.677 78.9409 185.538 86.374C183.399 93.7008 180.458 99.5942 176.714 104.054C172.971 108.408 168.532 111.487 163.398 113.292ZM0.5 89.0817V89.5817H1H55.8501V114.248V114.748H56.3501H75.6024H76.1024V114.248V89.5817H89.2394H89.7394V89.0817V72.5166V72.0166H89.2394H76.1024V2.75207V2.25207H75.6024H55.548H55.2992L55.1491 2.45055L0.601151 74.6043L0.5 74.7381V74.9058V89.0817ZM162.188 25.4997L162.188 25.4998L162.195 25.5095C164.281 28.3051 165.917 32.1115 167.083 36.9551L167.086 36.965C168.355 41.7936 168.995 47.9061 168.995 55.3144V58.5C168.995 66.7611 168.354 73.5138 167.083 78.7703L167.081 78.7796C165.913 84.0517 164.274 88.178 162.185 91.1857L162.183 91.1888C160.191 94.1027 157.906 96.1021 155.337 97.2246C152.727 98.3644 149.961 98.9349 147.034 98.9349C144.106 98.9349 141.34 98.3644 138.731 97.2246C136.16 96.1017 133.821 94.1013 131.723 91.187C129.737 88.1748 128.099 84.0454 126.825 78.7751C125.66 73.5153 125.073 66.7606 125.073 58.5V55.3144C125.073 47.9063 125.659 41.7918 126.822 36.9598C128.096 32.1155 129.732 28.3049 131.715 25.5047C133.812 22.6965 136.147 20.8016 138.715 19.7819L138.723 19.7788L138.731 19.7754C141.34 18.6356 144.106 18.0651 147.034 18.0651C149.961 18.0651 152.727 18.6356 155.337 19.7754L155.344 19.7788L155.352 19.7819C157.918 20.8008 160.199 22.6939 162.188 25.4997ZM200.261 89.0817V89.5817H200.761H255.611V114.248V114.748H256.111H275.363H275.863V114.248V89.5817H289H289.5V89.0817V72.5166V72.0166H289H275.863V2.75207V2.25207H275.363H255.309H255.06L254.91 2.45055L200.362 74.6043L200.261 74.7381V74.9058V89.0817ZM55.8501 26.224V72.0166H21.2566L55.8501 26.224ZM221.017 72.0166L255.611 26.224V72.0166H221.017Z" stroke="#EEEEEE"/>
            </svg>
        </div>
        <div class="text__block--404 section__article flex__center">
            <h1 class="title">Страница переехала</h1>
            <p class="block__text mt-from-8-to-16">Возможно, введен некорректный адрес или страница была удалена.</p>
            <button class="button__orange button__hero flex__center mt-from-24-to-40" type="button" data-toggle="modal" data-target="#order-call-modal">Заказать звонок</button>
        </div>
        <div class="img__block--404 flex__center">
            <picture class="flex__center">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/box-with-cart-hero.png" alt="">
            </picture>
        </div>
    </section>
</main>
<?php
get_footer();
?>