<div data-aos="fade-in"  class="quote-banner">

    <div class="quote-banner--content">
        <q><?php the_field('quote_banner_text') ?></q>
         <div class="line-break  line-break--sml"></div>
        <h5><?php the_field('quote_banner_citation') ?></h5>
    </div>

    <div class="quote-banner--bkg">
        <?php
        $image = get_field('quote_banner_background_image');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if ($image) {

            echo wp_get_attachment_image($image, $size);
        }
        ?>
    </div>
</div>