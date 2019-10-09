<div data-aos="fade-in"  class="home-page-hero">

	<div class="hero-logo">
		<img src="<?php echo get_template_directory_uri(); ?>/images/graphics/svg/logo-white.svg" alt="">
	</div>

	<div class="hero-strapline">
		<q class="white"><?php the_field('strapline') ?></q>
	</div>


	<div class="home-page-hero--bkg">
		<?php
		$image = get_field('image');
		$size = 'full'; // (thumbnail, medium, large, full or custom size)
		if ($image) {

			echo wp_get_attachment_image($image, $size);
		}
		?>
	</div>


	<div class="home-page-hero--video">

		<div class="video-wrapper">
			<video muted autoplay loop>
				<source src="<?php the_field('video_mp4') ?>" type="video/mp4" />
				Sorry, your browser doesn't support embedded videos.
			</video>

		</div>
	</div>





	<div class="scroll-icon scroll-mouse">
		<img src="<?php echo get_template_directory_uri(); ?>/images/graphics/scroll-mouse.png" alt="">
	</div>

	<div class="scroll-icon scroll-hand">
		<img src="<?php echo get_template_directory_uri(); ?>/images/graphics/scroll-hand.png" alt="">
	</div>

</div>