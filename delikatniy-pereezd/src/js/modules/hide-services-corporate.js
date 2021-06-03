function showClientsContent() {
    if($( window ).width() < '1280') {
        $('.corporate__clients').addClass('diactivated')
        } else {
            $('.corporate__clients').removeClass('diactivated')
        }
    if($( window ).width() > '1279') {
        $('.corporate__clients').removeClass('diactivated')
        $('.private__clients').removeClass('diactivated')
    }
}

$(window).on('load', showClientsContent)