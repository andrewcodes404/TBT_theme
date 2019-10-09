<?php 

// SimplePie ---  http://simplepie.org/wiki/reference/simplepie_item/start


// Get RSS Feed(s)
include_once(ABSPATH . WPINC . '/feed.php');
// Get a SimplePie feed object from the specified feed source.
$rss = fetch_feed('https://thebeautifultruth.org.uk');
$maxitems = 0;
if (!is_wp_error($rss)) : // Checks that the object is created correctly
    // Figure out how many total items there are, but limit it to 5. 
    $maxitems = $rss->get_item_quantity(3);
    // Build an array of all the items, starting with element 0 (first element).
    $rss_items = $rss->get_items(0, $maxitems);

endif;
?>


<?php

// loop through the background posts and grab the image IDs to make an array
$query = new WP_Query(array('post_type' => 'rss_backgrounds',));
$posts = $query->posts;
foreach ($posts as $post) {
    $imageID = get_field('image', $post->ID);
    $imageIDS[] =  $imageID;
    $index = -1;
}

// Now randomise that array
shuffle($imageIDS);
// echo var_dump($imageIDS)
?>


<div data-aos="fade-in" class="rss">

    <?php if ($maxitems == 0) : ?>
        <p><?php _e('No items', 'my-text-domain'); ?></p>
    <?php else : ?>
        <div class="owl-carousel owl-theme">
            <?php foreach ($rss_items as $item) :  ?>

                <!-- add 1 to sum each time -->
                <?php $index++ ?>

                <div class="rss--wrapper">

                    <div class="rss--background">

                        <!-- use $index to call the next item in the randomised imageIDS array§ -->
                        <?php
                                $image = $imageIDS[$index];
                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                if ($image) {
                                    echo wp_get_attachment_image($image, $size);
                                }
                                ?>
                    </div>

                    <div class="rss--item">

                        <?php if ($category = $item->get_category()) : ?>

                            <div class="rss--item-category">
                                <?php if ($category = $item->get_category()) {
                                                echo $category->get_label();
                                            } ?>
                            </div>

                        <?php endif; ?>

                        <h5 class="black rss--item-title"><?php echo esc_html($item->get_title()); ?></h5>

                        <?php if ($category = $item->get_description()) : ?>

                            <div class="rss--item-desc">
                                <?php
                                            // $desc =  esc_html($item->get_description());
                                            $desc =  $item->get_description();
                                            $start = strpos($desc, '<p>');
                                            $end = strpos($desc, '</p>', $start);
                                            $paragraph = substr($desc, $start, $end - $start + 4);
                                            echo preg_replace('/\s+?(\S+)?$/', '', substr($paragraph, 0, 120)) . '...';
                                            ?>
                            </div>


                        <?php endif; ?>

                        <div class="rss--item-btn">
                            <a href="<?php echo esc_url($item->get_permalink()); ?>" target="_blank" class="btn btn--black  ">
                                <span>
                                    READ MORE
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>