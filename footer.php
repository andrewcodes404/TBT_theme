<div style="flex:1"></div>


<div data-aos="fade-in" class="footer-wrapper">
    <footer>

        <div>
            <div class="footer-item footer-item-address">
                <h5>Get in touch</h5>
                <p class="link-white">
                    <a href="tel:44-7739-9541">+44 (020) 7739-9541</a>
                </p>
                <p class="link-white link-white--underline">
                    <a 
                    href="mailto:discuss@wearethebeautifultruth.com" target="_blank">discuss@wearethebeautifultruth.com</a>
                </p>

                <p class="white">The Beautiful Truth <br /> 73a Redchurch Street <br />London E2 7DJ <br />United Kingdom </p>

            </div>



            <div class="footer-item footer-item-social footer-item-social--mobile">
                <div class="social-icons">

                    <div class="social-icon social-icon--linkedin">
                        <a href="https://www.linkedin.com/company/the-beautiful-truth/" target="_blank">
                            <?php echo file_get_contents(get_theme_file_uri("/images/graphics/svg/linkedin3.svg")); ?>
                        </a>
                    </div>

                    <div class="social-icon social-icon--vimeo">
                        <a href="https://vimeo.com/connectedpictures" target="_blank">
                            <?php echo file_get_contents(get_theme_file_uri("/images/graphics/svg/vimeo3.svg")); ?>
                        </a>
                    </div>

                </div>


                <div class="connected-logo">
                    <a href="https://connectedpictures.com/" target="_blank">
                        <?php echo file_get_contents(get_theme_file_uri("/images/graphics/svg/connected-pictures.svg")); ?>
                    </a>
                </div>

                <p class="link-white link-white--underline">
                    <a href="https://thebeautifultruth.org.uk" target="_blank">thebeautifultruth.org.uk</a>
                </p>
            </div>


        </div>

        <div class="footer-item footer-item-newsletter">
            <h5 class="footer-title white">NEWSLETTER SIGN UP</h5>

            <?php echo do_shortcode("[ninja_form id=2]"); ?>

        </div>


        <div class="footer-item footer-item-social footer-item-social--desktop">
            <div class="social-icons">


                <div class="social-icon social-icon--linkedin">

                    <a href="https://www.linkedin.com/company/the-beautiful-truth" target="_blank">
                        <?php echo file_get_contents(get_theme_file_uri("/images/graphics/svg/linkedin3.svg")); ?>

                    </a>
                </div>
                <div class="social-icon social-icon--vimeo">
                    <a href="https://vimeo.com/connectedpictures" target="_blank">
                        <?php echo file_get_contents(get_theme_file_uri("/images/graphics/svg/vimeo3.svg")); ?>
                    </a>
                </div>
            </div>
            <div class="connected-logo">
                <a href="https://connectedpictures.com/" target="_blank">
                    <?php echo file_get_contents(get_theme_file_uri("/images/graphics/svg/connected-pictures.svg")); ?>
                </a>
            </div>

            <p class="link-white link-white--underline">
                <a href="https://thebeautifultruth.org.uk" target="_blank">thebeautifultruth.org.uk</a>
            </p>
        </div>
    </footer>
</div>

<div class="legal-banner--wrapper">
    <div class="legal-banner">
        <div class="policies">

            <a class="btn-arrow" href="<?php echo get_home_url(); ?>/privacy-policy">
                <small>Privacy Policy</small>
            </a>
            <a class="btn-arrow" href="<?php echo get_home_url(); ?>/cookie-policy">
                <small>Cookie Policy</small>
            </a>
        </div>
        <small>&copy; The Beautiful Truth 2019.</small>
    </div>
</div>




<?php wp_footer(); ?>
</body>

</html>