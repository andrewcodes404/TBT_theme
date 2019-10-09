This is to setup a fetured post at the top of the page and then the other post listed below


<?php get_header(); ?>
<?php include "inc/nav.php" ?>

<main>
    <div class="hero container">
        <div class="hero__title-wrap">
            <h1 class="heading--xl reveal">
                <?php the_field('blog_home_hero_text', get_option('page_for_posts')); ?>
            </h1>

        </div>
    </div>



    <div class="thoughts container">
        <?php
        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 1, // Number of recent posts thumbnails to display
            'post_status' => 'publish' // Show only the published posts
        ));
        foreach ($recent_posts as $post) : ?>
            <a href="<?php echo get_permalink($post['ID']) ?>" class="thoughts__featured featured reveal" style="background-image: url(<?php echo get_the_post_thumbnail_url($post['ID']) ?>)">
                <div class="featured__text-wrap ">

                    <span class="heading--xxs">Featured</span>
                    <!-- <?php
                            $categories = wp_get_post_categories(get_the_ID());

                            echo '<span>';
                            foreach ($categories as $category) {
                                echo '<a>' . get_cat_name($category) . ', </a> ';
                            }
                            echo '</span>';
                            ?> -->


                    <h2 class="featured__title">
                        <?php echo $post['post_title'] ?>
                    </h2>

                </div>
            </a>




        <?php endforeach;
    wp_reset_query(); ?>


        <div class="thoughts__container">
            <div class="thoughts__col rellax" data-rellax-speed="2" data-rellax-percentage="0.5">

                <?php
                $query = new WP_Query(array('offset' => 1));

                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                        <a href="<?php the_permalink() ?>" class="thoughts__article reveal">
                            <div class="thoughts__img" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
                            <div class="thoughts__text-wrap">
                                <span class="heading--xxs">
                                    <?php echo get_the_category_list("   "); ?>
                                </span>
                                <h3 class="thoughts__title">
                                    <?php the_title(); ?>
                                </h3>
                            </div>
                        </a>

                    <?php endwhile;
            else : ?>
                    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>

            </div>
        </div>

    </div>
    <div class="banner">
        <?php include "inc/banner-talk.php" ?>
    </div>


</main>

<?php get_footer(); ?>