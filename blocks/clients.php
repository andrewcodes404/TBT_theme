<div data-aos="fade-in" class="clients content-width-wrapper">



    <div class="clients--title">
        <h3>Our Clients</h3>
        <div class="line-break line-break--sml"></div>

    </div>

    <div class="clients--img-wrapper">
        <?php

        $args = array(
            'post_type' => 'clients',
            'orderby' => 'date',
            'order'   => 'ASC',
        );
        $the_query = new WP_Query($args); ?>

        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>


                <div class="clients--img">
                    <img src="<?php the_field('client_image',  get_the_ID()); ?>" alt="" srcset="">
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</div>