$(document).ready(function() {

    var backgroundImage = $('#page-wrapper').css('background-image');
    var url = backgroundImage.replace(/.*\s?url\([\'\"]?/, '').replace(/[\'\"]?\).*/, '');
    var image = new Image();

    image.src = url;
    image.onload = function() {
        $('#main .inner').show();
    };
});