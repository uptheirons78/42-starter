<?php
/**
 * The main template file
 *
 * @package FortyTwoTheme
 */

get_header();

?>
	
  <?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title(); ?> <i class="las la-lg la-meteor"></i></h2>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php endif; ?>

<?php

get_footer();
