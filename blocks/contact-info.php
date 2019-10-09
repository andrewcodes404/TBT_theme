<div class="contact--wrapper">

    <div class="contact content-width-wrapper">

        <div class="contact--flex-box">


            <div class="contact--flex-item1">
                <div class="contact--tel">
                    <h5>CALL US:</h5>
                    <div class="line-break line-break--sml"></div>

                    <p class="white link-white">
                        <a class="" href="tel:<?php the_field('telephone_number') ?>">
                            <?php the_field('telephone_number') ?>
                        </a>
                    </p>

                </div>

                <div class="contact--address">
                    <h5>VISIT US:</h5>
                    <div class="line-break line-break--sml"></div>
                    <p class="white"><?php the_field('address') ?></p>
                </div>
            </div>
            <div class="contact--flex-item2">
                <div class="contact--email">
                    <h5>EMAIL US:</h5>
                    <div class="line-break line-break--sml"></div>
                    <p class="white link-white">
                        <a href="mailto:  <?php the_field('email') ?>" target="_blank">
                            <?php the_field('email') ?>
                        </a>
                    </p>

                </div>

                <div class="contact--social">
                    <h5>CONNECT:</h5>
                    <div class="line-break line-break--sml"></div>
                    <!-- <h5><?php the_field('linkedin') ?></h5> -->

                    <div class="social-icons ">


                        <?php if (get_field('twitter')) : ?>
                            <div class="social-icon social-icon--twitter">
                                <a href="<?php the_field('twitter') ?>" target="_blank">
                                    <?php echo file_get_contents(get_theme_file_uri("/images/graphics/svg/twitter.svg")); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php if (get_field('linkedin')) : ?>
                            <div class="social-icon social-icon--linkedin">
                                <a href="<?php the_field('linkedin') ?>" target="_blank">
                                    <?php echo file_get_contents(get_theme_file_uri("/images/graphics/svg/linkedin3.svg")); ?>
                                </a>
                            </div>
                        <?php endif; ?>



                        <?php if (get_field('vimeo')) : ?>
                            <div class="social-icon social-icon--vimeo">
                                <a href="<?php the_field('linkedin') ?>" target="_blank">
                                    <?php echo file_get_contents(get_theme_file_uri("/images/graphics/svg/vimeo3.svg")); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>