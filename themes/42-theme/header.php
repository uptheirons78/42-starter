<?php
/**
 * The template for displaying the header.
 *
 * @package FortyTwoTheme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>

		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'fortytwo-theme'); ?></a>

		<main id="main" role="main" tabindex="-1">

			<h1><?php bloginfo( 'name' ); ?></h1>