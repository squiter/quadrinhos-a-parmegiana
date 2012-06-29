<?php

// Theme Name
define('THEMEZEE_NAME', 'zeeBusiness');
define('THEMEZEE_INFO', 'http://themezee.com/zeebusiness');

// Brunno teste
function brunno_pega_o_thumb_da_imagem() {
	$files = get_children('post_parent='.get_the_ID().'&post_type=attachment&post_mime_type=image');
	if($files) :
		$keys = array_reverse(array_keys($files));
		$j=0;
		$num = $keys[$j];
		$image=wp_get_attachment_image($num, 'large', false);
		$imagepieces = explode('"', $image);
		$imagepath = $imagepieces[1];
		$thumb=wp_get_attachment_thumb_url($num);
		return $thumb;
	endif;
}



//Content Width
$content_width = 480;

//Load Default Styles and Scripts for the Frontend
add_action('wp_enqueue_scripts', 'themezee_enqueue_scripts');
function themezee_enqueue_scripts() {
	// Register and Enqueue Stylesheet
	wp_register_style('zee_stylesheet', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('zee_stylesheet');

	// Register Font
	wp_register_style('zee_main_font', 'http://fonts.googleapis.com/css?family=Nobile');
	wp_enqueue_style('zee_main_font');

	// Register and Enqueue Javascripts
	wp_enqueue_script('jquery');

	wp_register_script('zee_jquery-ui-min', get_template_directory_uri() .'/includes/js/jquery-ui-1.8.11.custom.min.js', array('jquery'));
	wp_enqueue_script('zee_jquery-ui-min');

	wp_register_script('zee_jquery-easing', get_template_directory_uri() .'/includes/js/jquery.easing.1.3.js', array('jquery', 'zee_jquery-ui-min'));
	wp_enqueue_script('zee_jquery-easing');

	wp_register_script('zee_jquery-cycle', get_template_directory_uri() .'/includes/js/jquery.cycle.all.min.js', array('jquery', 'zee_jquery-easing'));
	wp_enqueue_script('zee_jquery-cycle');

	wp_register_script('zee_slidemenu', get_template_directory_uri() .'/includes/js/jquery.slidemenu.js', array('jquery'));
	wp_enqueue_script('zee_slidemenu');


	// Social Tracker JS
	wp_register_script('socialtrack', get_template_directory_uri() .'/includes/js/socialtrack.js', array(), false, true);
	wp_enqueue_script('socialtrack');
}
locate_template('/includes/js/jscript.php', true);
locate_template('/includes/styles/custom-css.php', true);

// init Localization
load_theme_textdomain('themezee_lang', TEMPLATEPATH . '/includes/lang');

// include Admin Files
locate_template('/includes/admin/theme-functions.php', true);
locate_template('/includes/admin/theme-settings.php', true);
locate_template('/includes/admin/theme-admin.php', true);

// Add Theme Functions
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
add_custom_background();
add_editor_style();

// Add Custom Header
define('HEADER_TEXTCOLOR', '');
define('HEADER_IMAGE', get_stylesheet_directory_uri() . '/images/default_header.jpg');
define('HEADER_IMAGE_WIDTH', 900);
define('HEADER_IMAGE_HEIGHT', 140);
define('NO_HEADER_TEXT', true );

function themezee_header_style() {
    ?><style type="text/css">
		#custom_header img {
			margin: 0;
			width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
        }
    </style><?php
}
function themezee_admin_header_style() {
    ?><style type="text/css">
        #headimg {
            width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
        }
    </style><?php
}
add_custom_image_header('themezee_header_style', 'themezee_admin_header_style');

// Register Sidebars
register_sidebar(array('name' => 'Sidebar Blog','id' => 'sidebar-blog'));
register_sidebar(array('name' => 'Sidebar Pages','id' => 'sidebar-pages'));
register_sidebar(array('name' => 'Footer Left','id' => 'sidebar-footer-left'));
register_sidebar(array('name' => 'Footer Center','id' => 'sidebar-footer-center'));
register_sidebar(array('name' => 'Footer Right','id' => 'sidebar-footer-right'));

// Register Menus
register_nav_menu( 'top_navi', 'Top Navigation' );
register_nav_menu( 'main_navi', 'Main Navigation' );
register_nav_menu( 'foot_navi', 'Footer Navigation' );

// include Plugin Files
locate_template('/includes/plugins/theme_socialmedia_widget.php', true);
locate_template('/includes/plugins/theme_ads_widget.php', true);

// Functions for correct html5 Validation
function themezee_html5_gallery($content)
{
	return str_replace('[gallery', '[gallery itemtag="div" icontag="span" captiontag="p"', $content);
}
add_filter('the_content', 'themezee_html5_gallery');
add_filter('gallery_style', create_function('$a', 'return preg_replace("%<style type=\'text/css\'>(.*?)</style>%s", "", $a);'));

function themezee_html5_embed($return, $data, $url)
{
	$search = '|></embed>|is';
	$replace = ' />';
	return preg_replace( $search, $replace, $return );
}
add_filter( 'oembed_dataparse', 'themezee_html5_embed', 10, 3);

function themezee_html5_elements($content)
{
	$content = str_replace('<acronym', '<abbr', $content);
	$content = str_replace('</acronym', '</abbr', $content);
	$content = str_replace('<big', '<span class="big_tag"', $content);
	$content = str_replace('</big', '</span', $content);
	$content = str_replace('<tt', '<span class="tt_tag"', $content);
	$content = str_replace('</tt', '</span', $content);
	return $content;
}
add_filter('the_content', 'themezee_html5_elements');
add_filter('comment_text', 'themezee_html5_elements');

?>
