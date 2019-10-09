<div data-aos="fade-in" class="why-purpose content-width-wrapper">

    <h2><?php the_field('title') ?></h2>
    <div class="line-break line-break--sml"></div>
    <h6 class="why-purpose--strapline"><?php the_field('strapline') ?></h6>
    <div class="line-break line-break-flexy"></div>


    <div class="why-purpose--list-wrapper">
        <h5 class="why-purpose--list-title black"><?php the_field('list_title') ?></h5>



        <?php if (have_rows('list')) : ?>
            <div class="why-purpose--list">
                <?php while (have_rows('list')) : the_row();
                        $listItem = get_sub_field('list_item');
                        ?>

                    <div class="why-purpose--list-item">

                        <div class="the-hyphen"></div>
                        <h3><?php echo $listItem; ?></h3>

                    </div>
                <?php endwhile; ?>
            </div>

        <?php endif; ?>
    </div>

</div>