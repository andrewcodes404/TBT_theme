<div class="two-col--background" style="background-color: <?php the_field('background_color') ?>">


    <div data-aos="fade-in" class="two-col  two-col<?php the_field('row_direction') ?> content-width-wrapper">


        <div class="two-col--img">

            <div  class="two-col--img-abs two-col--img-abs<?php the_field('row_direction') ?>">


                <?php
                $image = get_field('image');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                    echo wp_get_attachment_image($image, $size);
                }
                ?>

            </div>

        </div>


        <div class="two-col--text--wrapper two-col--text--wrapper<?php the_field('row_direction') ?>">

            <div class="two-col--text">

                <h2><?php the_field('title') ?></h2>
                <div class="line-break line-break--sml"></div>

                <?php if (get_field('strapline')) : ?>
                    <h6><?php the_field('strapline') ?></h6>
                <?php endif; ?>

                <?php if (get_field('text')) : ?>
                    <p><?php the_field('text') ?></p>
                <?php endif; ?>


                <?php if (get_field('link_button_text')) : ?>
                    <a href="<?php the_field('link_button_url') ?>" class="btn btn--black">
                        <span>
                            <?php the_field('link_button_text') ?>
                        </span>

                    </a>
                <?php endif; ?>

            </div>


        </div>



    </div>





</div>