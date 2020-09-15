$ = jQuery.noConflict();
// A $( document ).ready() block.
$( document ).ready(function() {
    $('.mobile-menu a').on('click', function() {
        $('nav.site-nav').toggle('slow');
    })

    var breakpoint = 768;
    $(winodw).resize(function() {
        if($(document).width() >= breakpoint) {
            $('nav.site-nav').show();
        } else {
            $('nav.site-nav').hide();
        }
    })
});