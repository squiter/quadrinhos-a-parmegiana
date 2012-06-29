<!DOCTYPE html><!-- HTML 5 -->
<html <?php language_attributes(); ?>>

<head prefix='og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#'>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta property="og:title" content="<?php if (is_home () || is_front_page() ) {
	    bloginfo('name');
	} elseif ( is_category() ) {
	     single_cat_title(); echo ' | ' ; bloginfo('name');
	} elseif (is_single() ) {
	    single_post_title();
	} elseif (is_page() ) {
	   single_post_title();  echo ' | ';   bloginfo('name');
	} else {
	    wp_title('',true);
	} ?>" />
	<meta property="og:type" content="<?php echo (is_single() || is_page()) ? "article" : "website";?>"	 />
	<meta property="og:url" content="<?php the_permalink(); ?>" />
  <meta property="og:image" content="<?php echo (strlen(brunno_pega_o_thumb_da_imagem()) > 0) ? brunno_pega_o_thumb_da_imagem() : "http://www.quadrinhosaparmegiana.com/wp-content/themes/qap/images/qap_twitter_logo.png" ?>" />
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="fb:admins" content="642180519,1060640654" />
	<meta property="fb:app_id" content="190751694364820" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<title><?php bloginfo('name'); if(is_home() || is_front_page()) { echo ' - '; bloginfo('description'); } else { wp_title(); } ?></title>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="fb-root"></div>
	<script src="http://connect.facebook.net/pt_BR/all.js#xfbml=1"></script>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

<div id="wrapper">

	<div id="header">

		<div id="head">
			<div id="logo">
				<?php
				$options = get_option('themezee_options');
				if ( isset($options['themeZee_logo']) and $options['themeZee_logo'] <> "" ) { ?>
					<a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url($options['themeZee_logo']); ?>" alt="Logo" /></a>
				<?php } else { ?>
					<a href="<?php echo home_url(); ?>/"><h1><?php bloginfo('name'); ?></h1></a>
				<?php } ?>
			</div>
			<div id="topnavi">
				<?php
				// Get Top Navigation out of Theme Options
					wp_nav_menu(array('theme_location' => 'top_navi', 'container' => false, 'echo' => true, 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 0));
				?>
			</div>
		</div>
	</div>

	<?php if( get_header_image() != '' ) : ?>
		<div id="custom_header">
			<img src="<?php echo get_header_image(); ?>" />
		</div>
	<?php endif; ?>

	<div id="navi">
		<?php
		// Get Main Navigation out of Theme Options
			wp_nav_menu(array('theme_location' => 'main_navi', 'container' => false, 'echo' => true, 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 0));
		?>
	</div>
	<div class="clear"></div>

	<div id="wrap">
