<div data-aos="fade-in" class="con-pict content-width-wrapper">

    <div class="con-pict-content">
        <div class="con-pict-content--item1">
            <h2><?php the_field('title') ?></h2>
            <div class="line-break line-break--sml"></div>
            <h6><?php the_field('sub_title') ?></h6>
            <p class="con-pict--text"><?php the_field('text') ?> </p>

        </div>
        <div class="con-pict--btn">
            <a href="<?php the_field('button_link') ?>" target="_blank" class="btn btn--black">
                <span>
                    <?php the_field('button_text') ?>
                </span>
            </a>
        </div>

    </div>
    <div class="line-break--flexy"></div>
    <div data-aos="fade-in" class="con-pict--video">

        <video muted autoplay loop controls>
            <source src="<?php the_field('video') ?>" type="video/mp4" />
            Sorry, your browser doesn't support embedded videos.
        </video>

    </div>

</div>
<div class="content-width-wrapper content-width-wrapper--no-padding">
    <div class="line-break line-break--lrg"></div>
</div>