/*!
 * Flatize v0.0.1 (https://flatize.ga)
 * Copyright - 2017 - Flatize©
 * Licensed under MIT (https://github.com/PHClement/Flatize/blob/master/LICENSE)
 */


// ScrollTop

function scrollToElement(id) {
    $(document).ready(function () {
        $('html, body').animate({
            scrollTop: ($(id).offset().top)
        },500);
    });
}