<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( has_post_thumbnail() ) { ?>
	<div class="evc-bli-image evc-ib-zoom">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( $image_proportions ); ?>
			<?php echo extensive_vc_get_module_template_part( 'shortcodes', 'blog-list', 'templates/parts/date', 'simple', $params ); ?>
		</a>
	</div>
<?php }
