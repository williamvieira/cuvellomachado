$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top-0
            }, 1000, 'easeInOutExpo');
        event.preventDefault();
    });
});

$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("active");
    } else {
        $(".navbar-fixed-top").removeClass("active");
    }
});


