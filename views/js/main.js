$(document).ready(function () {
    $('#navbar-side > ul > li > a').click(function () {
        var checkElement = $(this).next();
        $('#navbar-side li a').removeClass('active');
        $(this).closest('a').addClass('active');
        if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
            $(this).closest('a').removeClass('active');
            $(this).closest('a').addClass('nonactive');
            $('.nonactive b').addClass('fa-angle-left');
            $('.nonactive b').removeClass('fa-angle-down');
            checkElement.slideUp('normal');
        }
        if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
            $(this).closest('a').removeClass('nonactive');
            $('.active b').removeClass('fa-angle-left');
            $('.active b').addClass('fa-angle-down');
            $('#navbar-side ul ul:visible').slideUp('normal');
            checkElement.slideDown('normal');
        }
        if (checkElement.is('ul')) {
            return false;
        } else {
            return true;
        }
    });
    $('.minimize-menu').click(function () {
        $('.minimize-menu > i').removeClass('fa-chevron-circle-left');
        $('.minimize-menu > i').addClass('fa-chevron-circle-right');
        $('#navbar-side').css({ "width": "55px" });
        $('.menu-text').css({ "display": "none" });
        $('#navbar-side > ul > li > a > b').remove();
        $('.minimize-menu').addClass('maximize-menu');
    });
});