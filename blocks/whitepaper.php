<div data-aos="fade-in" class="whitepaper content-width-wrapper">

    <?php

    $args = array(
        'post_type' => 'whitepaper',
        'posts_per_page' => 1
        // 'orderby' => 'date',
        // 'order'   => 'ASC',
    );
    $the_query = new WP_Query($args); ?>

    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>




            <div class="whitepaper--img">
                <?php
                        $image = get_field('image', get_the_ID());
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {

                            echo wp_get_attachment_image($image, $size);
                        }
                        ?>

            </div>

            <div class="whitepaper--title-mob">
                <h2> <?php the_title() ?> </h2>
                <div class="line-break line-break--sml"></div>
            </div>

            
            <div class="whitepaper-content-desk">
                <div class="whitepaper--title-desk">

                    <h2> <?php the_title() ?></h2>
                    <div class="line-break line-break--sml"></div>
                </div>

                <h6 class="whitepaper--text"> <?php the_field('strapline', get_the_ID()) ?> </h6>

                <div>

                    <a href="<?php the_field('download_file',  get_the_ID()) ?> " download class="btn btn--black">
                        <span>
                            DOWNLOAD
                        </span>

                    </a>
                </div>
            </div>






        <?php endwhile; ?>
    <?php endif; ?>







</div>