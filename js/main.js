jQuery(document).ready(function($) {
    // OWL CAROUSEL --- OWL CAROUSEL --- OWL CAROUSEL ---
    // OWL CAROUSEL --- OWL CAROUSEL --- OWL CAROUSEL ---
    // OWL CAROUSEL --- OWL CAROUSEL --- OWL CAROUSEL ---

    $('.owl-carousel').owlCarousel({
        loop: true,
        // margin: 2,
        items: 1,
        center: true,
        nav: true,
        // dots: false,
        // dotsEach: true,
        autoplay: false,
        // autoplayTimeout: 5000,
        // autoplaySpeed: 1000
    })

    // BIO SHOW/HIDE --- BIO SHOW/HIDE --- BIO SHOW/HIDE ---
    // BIO SHOW/HIDE --- BIO SHOW/HIDE --- BIO SHOW/HIDE ---
    // BIO SHOW/HIDE --- BIO SHOW/HIDE --- BIO SHOW/HIDE ---

    var bioBtnOpen = $('.our-team-member--bio-btn-open')
    var bioBtnClose = $('.our-team-member--bio-btn-close')
    var bio = $('.our-team-member--content-bio')

    bioBtnClose.hide()
    // bio.hide()

    bioBtnOpen.click(function() {
        $(this).fadeOut('fast', function() {
            $(this)
                .next()
                .fadeIn()
        })
        $(this)
            .siblings('.our-team-member--content-bio')
            .slideToggle('slow', function() {})
    })

    bioBtnClose.click(function() {
        $(this).fadeOut('fast', function() {
            $(this)
                .prev()
                .fadeIn()
        })
        $(this)
            .siblings('.our-team-member--content-bio')
            .slideToggle('slow', function() {})
    })

    // NAVIGATION MENU --- NAVIGATION MENU --- NAVIGATION MENU ---
    // NAVIGATION MENU --- NAVIGATION MENU --- NAVIGATION MENU ---
    // NAVIGATION MENU --- NAVIGATION MENU --- NAVIGATION MENU ---

    ///mobile navigation drop down
    var menuMobileOpenBtn = $('#menu-mobile-open-btn')
    var menuMobileCloseBtn = $('#menu-mobile-close-btn')
    var menuMobile = $('#menu-mobile')

    // menuMobile.hide()
    menuMobileCloseBtn.hide()

    menuMobileOpenBtn.click(function() {
        // menuMobileOpenBtn
        // menuMobile.slideToggle('slow', function() {})
        menuMobile.animate({ right: '0' })
        menuMobileOpenBtn.fadeOut('fast', function() {
            menuMobileCloseBtn.fadeIn()
        })
        // menuMobileCloseBtn.fadeIn()
    })

    menuMobileCloseBtn.click(function() {
        // menuMobile.slideToggle('slow', function() {})
        // menuMobile.animate({ width: 'toggle' })
        menuMobile.animate({ right: '-430px' })
        menuMobileCloseBtn.fadeOut('fast', function() {
            menuMobileOpenBtn.fadeIn()
        })
    })

    /* Sticky nav classes */

    //   mobile vars
    var navMobileWrapper = $('#nav-mobile-wrapper')
    var menuMobileOpenBtn = $('#menu-mobile-open-btn')
    var menuMobileLogoWhite = $('#nav-logo-white')
    var menuMobileLogoBlack = $('#nav-logo-black')

    // desktop vars
    var navDesktopLogoBlack = $('#nav-desktop-logo-img-black')
    var navDesktopLogoWhite = $('#nav-desktop-logo-img-white')
    var navDesktopWrapper = $('#nav-desktop-wrapper')
    var menuDesktopContainer = $('.menu-desktop-container')

    var lastScrollTop = 0
    var st = 0

    navMobileWrapper.addClass('nav-stick-to-top')

    $(window).on('scroll', function() {
        st = window.pageYOffset || document.documentElement.scrollTop

        if (st > lastScrollTop) {
            if (st >= 550) {
                navMobileWrapper.removeClass('nav-stick-to-top')
                navMobileWrapper.addClass('nav-show-as-fixed ')
                menuMobileOpenBtn.removeClass('burger-white')
                menuMobileOpenBtn.addClass('burger-black')
                menuMobileLogoWhite.removeClass('display-block')
                menuMobileLogoWhite.addClass('display-none')
                menuMobileLogoBlack.removeClass('display-none')
                menuMobileLogoBlack.addClass('display-block')

                navDesktopWrapper.removeClass('nav-stick-to-top')
                navDesktopWrapper.addClass('nav-show-as-fixed ')
                menuDesktopContainer.addClass('make-li-black')
                navDesktopLogoWhite.hide()
                navDesktopLogoBlack.fadeIn()
            }
        } else if (st < lastScrollTop) {
            if (st <= 650) {
                navMobileWrapper.addClass('nav-stick-to-top')
                navMobileWrapper.removeClass('nav-show-as-fixed ')
                menuMobileOpenBtn.removeClass('burger-black')
                menuMobileOpenBtn.addClass('burger-white')

                menuMobileLogoBlack.removeClass('display-block')
                menuMobileLogoBlack.addClass('display-none')
                menuMobileLogoWhite.removeClass('display-none')
                menuMobileLogoWhite.addClass('display-block')

                navDesktopWrapper.addClass('nav-stick-to-top')
                navDesktopWrapper.removeClass('nav-show-as-fixed ')
                menuDesktopContainer.removeClass('make-li-black')
                navDesktopLogoBlack.fadeOut()
                navDesktopLogoWhite.fadeIn()
            }
        }

        lastScrollTop = st <= 0 ? 0 : st
    })

    $(window).on('load', () => {
        // alert('load')
        let st = window.pageYOffset || document.documentElement.scrollTop
        if (st < 20) {
            navMobileWrapper.addClass('nav-stick-to-top')
            navMobileWrapper.removeClass('nav-show-as-fixed ')
            // menuMobileOpenBtn.removeClass('burger-black')
            // menuMobileOpenBtn.addClass('burger-white')

            // menuMobileLogoBlack.removeClass('display-block')
            // menuMobileLogoBlack.addClass('display-none')
            // menuMobileLogoWhite.removeClass('display-none')
            // menuMobileLogoWhite.addClass('display-block')

            navDesktopWrapper.addClass('nav-stick-to-top')
            navDesktopWrapper.removeClass('nav-show-as-fixed ')
            // menuDesktopContainer.removeClass('make-li-black')
            navDesktopLogoBlack.fadeOut()
            // navDesktopLogoWhite.fadeIn()
        }
    })

    ///THE END
})
