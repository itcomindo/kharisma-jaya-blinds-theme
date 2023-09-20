//add event listener, js will run when page is loaded
document.addEventListener('DOMContentLoaded', function () {
    jQuery(function () {
        /**
        =========================
        * jQuery Start below this
        *=========================
        */
        var header = jQuery('header');
        //when page scroll 100px add class sticky to header.
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 100) {
                jQuery('header#header').addClass('sticky animate__fadeInDown');
            } else {
                jQuery('header#header').removeClass('sticky animate__fadeInDown');
            }
        });
        /**
        =========================
        * Remove unsed category
        *=========================
        */
        jQuery("#catlist ul li.blog").remove();
        jQuery("#catlist ul li.produk").remove();
        jQuery("#catlist ul li.produk-lainnya").remove();
        /**
        =========================
        * Mobile Menu
        *=========================
        */
        jQuery('#menu-trigger').click(function () {
            jQuery('.menu-header-menu-container').addClass('show');
            jQuery(this).slideUp();
        });
        jQuery('.menu-header-menu-container').click(function () {
            jQuery('.menu-header-menu-container.show').removeClass('show');
            jQuery('#menu-trigger').slideDown();
        });
        /**
        =========================
        * Conditionally load scripts
        *=========================
        */
        var body = jQuery('body');
        if (jQuery(body).hasClass('home')) {
            //for home page
            mm_flickity_options();
            mm_browse_by_category();
        }
        /**
        =========================
        * Function to load flickity
        *=========================
        */
        function mm_flickity_options() {
            jQuery('#hero-card-wr').flickity({
                // options
                cellAlign: 'center',
                contain: true,
                wrapAround: true,
                autoPlay: false,
                // prevNextButtons: false,
                pageDots: false,
            });
            jQuery('#testi-card-wr').flickity({
                // options
                cellAlign: 'center',
                contain: true,
                wrapAround: true,
                autoPlay: 3000,
                // prevNextButtons: false,
                pageDots: false,
            });
        }

        /**
        =========================
        * Browse by category
        *=========================
        */
        function mm_browse_by_category() {
            jQuery('#hero-left').click(function () {
                jQuery('#hero-left #catlist').toggleClass('show');
                jQuery('#hero-left').toggleClass('show');
            });
        }
        /**
        =========================
        * Whatsapp box
        *=========================
        */
        jQuery('#openwabox.sleep').slideUp();
        // jQuery('#openwabox').slideUp();
        jQuery('#openwabox').click(function () {
            jQuery(this).slideUp();
            jQuery('#wabox-wr').removeClass('sleep').addClass('show');
            jQuery('#closewabox').slideDown();
            jQuery('#wabox-btn-wr').addClass('animate__fadeInUp');
        });
        jQuery('#closewabox').click(function () {
            jQuery(this).slideUp();
            jQuery('#wabox-wr').removeClass('show').addClass('sleep');
            jQuery('#openwabox').slideDown();
            jQuery('#wabox-btn-wr').removeClassClass('animate__fadeInUp');
            // jQuery('.wabox').delay(1000).slideUp();
        });

        /**
        =========================
        * jQuery End above this
        *=========================
        */
    });
});