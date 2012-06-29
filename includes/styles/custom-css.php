<?php 
add_action('wp_head', 'themezee_include_custom_css');
function themezee_include_custom_css() {
	
	echo '<style type="text/css">';
	$options = get_option('themezee_options');
	if ( $options['themeZee_stylesheet'] == "custom-color" ) {
		echo '
			a, a:link, a:visited,
			#sidebar ul li h2,
			#logo h1,
			#navi ul li a:hover,
			.postmeta a:link, .postmeta a:visited,
			.postinfo a:link, .postinfo a:visited,
			#comments a:link, #comments a:visited, #respond a:link, #respond a:visited,
			.bottombar ul li h2
			{
				color: #'.esc_attr($options['themeZee_color']).';
			}
			.post h2, .attachment h2,
			.post h2 a:link, .post h2 a:visited
			{
				color: #'.esc_attr($options['themeZee_color']).';
			}
			#sidebar ul li ul, #sidebar ul li div,
			#topnavi ul li a:hover,
			#topnavi ul li ul,
			#navi,
			.more-link,
			.arh,
			#slide_panel,
			#comments h3, #respond h3,
			.bypostauthor .fn,
			.wp-pagenavi .current,
			.bottombar ul li ul, .bottombar ul li div
			{
				background: #'.esc_attr($options['themeZee_color']).';
			}
			#wrapper {
				border-top: 7px solid #'.esc_attr($options['themeZee_color']).';
				border-bottom: 7px solid #'.esc_attr($options['themeZee_color']).';
			}
			.sticky {
				border-left: 4px solid #'.esc_attr($options['themeZee_color']).';
			}
			.postmeta {
				border-top: 1px dotted #'.esc_attr($options['themeZee_color']).';
				border-bottom: 1px dotted #'.esc_attr($options['themeZee_color']).';
			}
			.commentlist li {
				border-top: 1px dotted #'.esc_attr($options['themeZee_color']).';
			}
			#comments .children li {
				border-left: 2px solid #'.esc_attr($options['themeZee_color']).';
			}
		';
		}
	if ( $options['themeZee_custom_css'] <> "" ) { echo esc_attr($options['themeZee_custom_css']); }
	echo '</style>';
}
