<?php get_header(); ?>
<?php include "inc/nav.php"; ?>

<h1 class="heading--lg">
    <?php single_cat_title(); ?>
</h1>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink() ?>" class="thoughts__featured featured reveal" style="background-image: url(<?php echo the_post_thumbnail_url() ?>)">
            <div class="featured__text-wrap ">

                <span class="heading--xxs">Featured</span>



                <h2 class="featured__title">
                    <?php echo the_title() ?>
                </h2>

            </div>
        </a>
    <?php endwhile;
else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>