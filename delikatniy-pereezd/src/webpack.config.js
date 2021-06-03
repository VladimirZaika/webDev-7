var Encore = require('@symfony/webpack-encore');

Encore

    .addEntry('assets', './js/modules/assets.js')
    .addEntry('js/app', './js/app.js')
    .addStyleEntry('css/app', './styles/app.scss')
    .addEntry('js/landing', './js/landing.js')
    .addEntry('js/apartment-moving', './js/apartment-moving.js')
    .addEntry('js/keeping', './js/keeping.js')
    .addEntry('js/moving', './js/moving.js')
    .addEntry('js/corporate-service', './js/corporate-service.js')
    .addEntry('js/packing-shop', './js/packing-shop.js')
    .addEntry('js/price', './js/price.js')
    .addEntry('js/about-company', './js/about-company.js')
    .addEntry('js/vacancies', './js/vacancies.js')
    .addEntry('js/partners', './js/partners.js')
    .addEntry('js/news', './js/news.js')
    .addEntry('js/article', './js/article.js')
    .addEntry('js/cart', './js/cart.js')
    .addEntry('js/services-list', './js/services-list.js')
    .addEntry('js/reviews', './js/reviews.js')
    .addEntry('js/cases-all', './js/cases-all.js')
    .addEntry('js/case', './js/case.js')
    .addEntry('js/special-offer', './js/special-offer.js')
    .addEntry('js/online-application', './js/online-application.js')
    .addEntry('js/faq', './js/faq.js')
    .addEntry('js/contacts', './js/contacts.js')
    .addEntry('js/individual-review', './js/individual-review.js')
    .addEntry('js/quality-controle-service', './js/quality-controle-service.js')

    /*
     * FEATURE CONFIG
     *
     * Enable & configure other features below. For a full
     * list of features, see:
     * https://symfony.com/doc/current/frontend.html#adding-more-features
     */
    .setOutputPath('../assets/')
    .setPublicPath('/') // (just keep as is)
    .configureImageRule(
        {
            filename: 'img/[name][ext]'
        }, 
        // (rule) => {
        //  console.log(rule);
        // }
    )
    .configureFontRule(
        {
            filename: 'fonts/[name][ext]'
        }
    )
    .cleanupOutputBeforeBuild()
    .disableSingleRuntimeChunk()
    .enableVersioning(false)

    // enables @babel/preset-env polyfills
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = 3;
    })

    .enableSassLoader()
    .autoProvideVariables({
        $: 'jquery',
        jQuery: 'jquery',
        'window.jQuery': 'jquery',
    })
;

module.exports = Encore.getWebpackConfig();
