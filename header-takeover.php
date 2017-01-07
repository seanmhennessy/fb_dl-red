<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<?php do_action( 'et_head_meta' ); ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<?php $template_directory_uri = get_template_directory_uri(); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( $template_directory_uri . '/js/html5.js"' ); ?>" type="text/javascript"></script>
	<![endif]-->

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<script><?php the_field('dataLayer_snippet'); ?></script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php the_field('gtm_container_code', 'options'); ?>
<div id="fluid-page-container" class="fluid-page-container">
	<div id="fluid-menu-takeover" class="fluid-menu-takeover">
		<div class="fluid-menu-takeover-container">
		<?php
				$fluid_wp_menu_nav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'echo' => false, 'items_wrap' => '%3$s' ) );
			?>
			<ul id="fluid-menu-takeover-items" class="fluid-menu neue bold75">
			<?php echo( $fluid_wp_menu_nav);?> 
			</ul>
		</div>
	</div>
	<header id="fluid-main-header" class="fluid-header">
		<?php
				$logo = ( $user_logo = et_get_option( 'divi_logo' ) ) && '' != $user_logo
					? $user_logo
					: $template_directory_uri . '/images/logo.png';
			?>
			<div id="fluid-logo-container" class="fluid-logo-container">
				<a href="/">
					<img src="<?php echo esc_attr( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" id="fluid-menu-logo">
				</a>
				<!-- <a href="/">
					<img src="/wp-content/uploads/2016/12/logo-blk.png" id="aux-fluid-menu-logo">
				</a> -->
			</div>
			<div class="fluid-toggle-container">
				<div id="fluid-menu-toggle">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<!-- <?php do_action( 'et_header_top' ); ?> -->
	</header> <!-- #main-header -->
	
	<div id="et-main-area">