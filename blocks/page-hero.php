<div data-aos="fade-in" class="page-hero">

    <div class="page-hero--image">
        <div class="page-hero--bkg">
            <?php
            $image = get_field('image');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if ($image) {

                echo wp_get_attachment_image($image, $size);
            }
            ?>
        </div>
        <div class="content-width-wrapper  content-width-wrapper--no-padding">
            <h1><?php the_field('headline') ?></h1>
        </div>
    </div>
    <div class="page-hero--text--wrapper">

        <div class="page-hero--text content-width-wrapper">

            <div class="">


                <h4 class="white"><?php the_field('strapline') ?></h4>

                <?php if (get_field('do_you_want_a_button_here')) : ?>
                    <a href="<?php the_field('button_link') ?>" target="_blank" class="btn btn--white">
                        <span class="home-page-black-banner--btn">
                            <?php the_field('button_text') ?>
                        </span>
                    </a>
                <?php endif; ?>


            </div>
        </div>


    </div>
</div>