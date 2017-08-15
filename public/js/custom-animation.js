jQuery(window).scroll(function() {
    jQuery('#pagearea .container').each(function(){
        var imagePos = jQuery(this).offset().top;
        var topOfWindow = jQuery(window).scrollTop();
        if (imagePos < topOfWindow+600) {
            jQuery(this).addClass("fadeInLeft");
        }
    });

    jQuery('.themefeatures .one_third').each(function(){
        var imagePos = jQuery(this).offset().top;
        var topOfWindow = jQuery(window).scrollTop();
        if (imagePos < topOfWindow+600) {
            jQuery(this).addClass("fadeInDown");
        }
    });

    jQuery('.blogpostwrap').each(function(){
        var imagePos = jQuery(this).offset().top;
        var topOfWindow = jQuery(window).scrollTop();
        if (imagePos < topOfWindow+600) {
            jQuery(this).addClass("fadeInRight");
        }
    });

    jQuery('.projectwrap').each(function(){
        var imagePos = jQuery(this).offset().top;
        var topOfWindow = jQuery(window).scrollTop();
        if (imagePos < topOfWindow+600) {
            jQuery(this).addClass("fadeInRight");
        }
    });

    jQuery('.shopwrap').each(function(){
        var imagePos = jQuery(this).offset().top;
        var topOfWindow = jQuery(window).scrollTop();
        if (imagePos < topOfWindow+600) {
            jQuery(this).addClass("fadeInLeft");
        }
    });


    jQuery('.tmnlwraparea').each(function(){
        var imagePos = jQuery(this).offset().top;
        var topOfWindow = jQuery(window).scrollTop();
        if (imagePos < topOfWindow+600) {
            jQuery(this).addClass("fadeInRight");
        }
    });


    jQuery('.advanced-srvces').each(function(){
        var imagePos = jQuery(this).offset().top;
        var topOfWindow = jQuery(window).scrollTop();
        if (imagePos < topOfWindow+600) {
            jQuery(this).addClass("fadeInDown");
        }
    });

    jQuery('.client-wrap').each(function(){
        var imagePos = jQuery(this).offset().top;
        var topOfWindow = jQuery(window).scrollTop();
        if (imagePos < topOfWindow+600) {
            jQuery(this).addClass("fadeInLeft");
        }
    });

    jQuery('.gallerywrap').each(function(){
        var imagePos = jQuery(this).offset().top;
        var topOfWindow = jQuery(window).scrollTop();
        if (imagePos < topOfWindow+600) {
            jQuery(this).addClass("fadeInRight");
        }
    });

    jQuery('.teamwrap').each(function(){
        var imagePos = jQuery(this).offset().top;
        var topOfWindow = jQuery(window).scrollTop();
        if (imagePos < topOfWindow+600) {
            jQuery(this).addClass("fadeInDown");
        }
    });

    jQuery('.skillwrap').each(function(){
        var imagePos = jQuery(this).offset().top;
        var topOfWindow = jQuery(window).scrollTop();
        if (imagePos < topOfWindow+600) {
            jQuery(this).addClass("fadeInLeft");
        }
    });

});