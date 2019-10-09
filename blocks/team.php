<div class="our-team--wrapper">
    <div class="our-team content-width-wrapper">

        <div data-aos="fade-in" class="our-team--header" id="team-header">
            <h2 class="white our-team--title"><?php the_field('title') ?></h2>
            <h4 class="white our-team--strapline-desktop"><?php the_field('strapline') ?></h4>
        </div>
        <div class="line-break line-break--flexy"></div>

        <h4 class="white our-team--strapline-mobile"><?php the_field('strapline') ?></h4>


        <div class="our-team-members">
            <?php

            $args = array(
                'post_type' => 'team_members',

            );
            $the_query = new WP_Query($args); ?>

            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <div data-aos="fade-in" class="our-team-member">
                        <div class="our-team-member--avatar">
                            <?php
                                    $image = get_field('avatar', get_the_ID());
                                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                    if ($image) {

                                        echo wp_get_attachment_image($image, $size);
                                    }
                                    ?>
                        </div>

                        <div class="our-team-member--content">

                            <h3 class="white"><?php the_title() ?></h3>
                            <h5 class="white"><?php the_field('job_title', get_the_ID()) ?></h5>

                            <div class="line-break line-break--sml"></div>

                            <p class="button-text white our-team-member--bio-btn-open">READ BIO +</p>

                            <p class="button-text white our-team-member--bio-btn-close">CLOSE BIO -</p>

                            <p class="white our-team-member--content-bio" i><?php the_field('bio', get_the_ID()) ?></p>

                            <div class="push-down"></div>

                            <div class="line-break line-break--flexy"></div>


                            <div class="our-team-member--content-social">

                                <?php if (get_field('twitter', get_the_ID())) : ?>
                                    <div class="our-team-member--content-social-twitter">
                                        <a href="<?php the_field('twitter', get_the_ID()) ?>" target="_blank">
                                            <?php echo file_get_contents(get_theme_file_uri("/images/graphics/svg/twitter-solo.svg")); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <?php if (get_field('linkedin_url', get_the_ID())) : ?>
                                    <div class="our-team-member--content-social-linkedin">
                                        <a href="<?php the_field('linkedin_url', get_the_ID()) ?>" target="_blank">
                                            <?php echo file_get_contents(get_theme_file_uri("/images/graphics/svg/linkedin-solo.svg")); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>



                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>