jQuery(document).ready(function(jQuery){
    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 700,
        //grab the "back to top" link
        jQueryback_to_top = jQuery('.js-back-to-top');

    //hide or show the "back to top" link
    jQuery(window).scroll(function(){
        ( jQuery(this).scrollTop() > offset ) ? jQueryback_to_top.addClass('back-to-top-is-visible') : jQueryback_to_top.removeClass('back-to-top-is-visible back-to-top-fade-out');
        if( jQuery(this).scrollTop() > offset_opacity ) {
            jQueryback_to_top.addClass('back-to-top-fade-out');
        }
    });

    //smooth scroll to top
    jQueryback_to_top.on('click', function(event){
        event.preventDefault();
        jQuery('body,html').animate({
            scrollTop: 0 ,
            }, scroll_top_duration
        );
    });
});
