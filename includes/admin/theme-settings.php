<?php
	
	function themezee_get_sections() {
		$themezee_sections = array();
		
		$themezee_sections[] = array("id" => "themeZee_main",
					"name" => __('Theme Settings', 'themezee_lang'));
					
		$themezee_sections[] = array("id" => "themeZee_slider",
					"name" => __('Featured Post Slider', 'themezee_lang'));
					
		$themezee_sections[] = array("id" => "themeZee_buttons",
					"name" => __('Social Media Buttons', 'themezee_lang'));
					
		$themezee_sections[] = array("id" => "themeZee_banner",
					"name" => __('125x125 Ad Spots', 'themezee_lang'));
		return $themezee_sections;
	}
	
	function themezee_get_settings() {
	
		$color_styles = array(
			'black.css' => __('Black', 'themezee_lang'),
			'blue.css' => __('Blue', 'themezee_lang'),
			'darkblue.css' => __('Darkblue', 'themezee_lang'),
			'darkgreen.css' => __('Darkgreen', 'themezee_lang'),
			'green.css' => __('Green', 'themezee_lang'),
			'grey.css' => __('Grey', 'themezee_lang'),
			'orange.css' => __('Orange', 'themezee_lang'),
			'purple.css' => __('Purple', 'themezee_lang'),
			'red.css' => __('Red', 'themezee_lang'),
			'yellow.css' => __('Yellow', 'themezee_lang'),
			'standard.css' => __('Standard', 'themezee_lang'),
			'custom-color' => __('Custom Color', 'themezee_lang'));

		$default_logo =  get_template_directory_uri() . '/images/logo.png';
		$default_banner = get_template_directory_uri() . '/images/ad_125x125.png';
		
		$themezee_settings = array();
	
		### MAIN SETTINGS
		#######################################################################################
		$themezee_settings[] = array("name" => "Logo",
						"desc" => __('Paste the full Image URL of your logo.', 'themezee_lang'),
						"id" => "themeZee_logo",
						"std" => $default_logo,
						"type" => "logo",
						"section" => "themeZee_main");	
								
		$themezee_settings[] = array("name" => __('Footer Content', 'themezee_lang'),
						"desc" => __('Enter here the content which is displayed in the footer.', 'themezee_lang'),
						"id" => "themeZee_footer",
						"std" => "Place your Footer Content here",
						"type" => "textarea",
						"section" => "themeZee_main");
							
		$themezee_settings[] = array("name" => "Theme Style",
						"desc" => __('Please select your color scheme here.', 'themezee_lang'),
						"id" => "themeZee_stylesheet",
						"std" => "standard.css",
						"type" => "select",
						'choices' => $color_styles,
						"section" => "themeZee_main"
						);
		
		$themezee_settings[] = array("name" => __('Custom Color', 'themezee_lang'),
						"desc" => __("Select a custom color here (You have to select the 'custom color' option above).", 'themezee_lang'),
						"id" => "themeZee_color",
						"std" => "000000",
						"type" => "colorpicker",
						"section" => "themeZee_main");

		$themezee_settings[] = array("name" => __('Custom CSS', 'themezee_lang'),
						"desc" => __('Insert your own custom css code into the head of the theme.', 'themezee_lang'),
						"id" => "themeZee_custom_css",
						"std" => "",
						"type" => "textarea",
						"section" => "themeZee_main");
						
		### POST SLIDER SETTINGS
		#######################################################################################
		$themezee_settings[] = array("name" => __('Show Post Slider?', 'themezee_lang'),
						"desc" => __('Check this if you want to show the Featured Post Slider.', 'themezee_lang'),
						"id" => "themeZee_show_slider",
						"std" => "false",
						"type" => "checkbox",
						"section" => "themeZee_slider");
						
		$themezee_settings[] = array("name" => __('Slider Title', 'themezee_lang'),
						"desc" => __('Enter here your headline which is displayed above the featured posts.', 'themezee_lang'),
						"id" => "themeZee_slider_title",
						"std" => "Featured Posts",
						"type" => "text",
						"section" => "themeZee_slider");
						
		$themezee_settings[] = array("name" => "Slider Effect",
						"desc" => "",
						"id" => "themeZee_slider_mode",
						"std" => "0",
						"type" => "radio",
						'choices' => array(
									0 => 'Horizontal Slider',
									1 => 'DropDown Slider',
									2 => 'Fade Slider'),
						"section" => "themeZee_slider"
						);

		$themezee_settings[] = array("name" => __('Slider Content', 'themezee_lang'),
						"desc" => "",
						"id" => "themeZee_slider_content",
						"std" => "0",
						"type" => "radio",
						'choices' => array(
									0 => __('Show latest posts', 'themezee_lang'),
									1 => __('Show latest posts from category "featured"', 'themezee_lang'),
									2 => __('Show latest posts with post_meta_key "featured"', 'themezee_lang'),
									3 => __('Show latest posts from custom category(enter ID below)', 'themezee_lang')),
						"section" => "themeZee_slider"
						);
						
		$themezee_settings[] = array("name" => __('category ID', 'themezee_lang'),
						"desc" => __("Please enter the category ID you'd like to include in the slideshow.(You have to tick the last option above)", 'themezee_lang'),
						"id" => "themeZee_slider_cat",
						"std" => "1",
						"type" => "text",
						"section" => "themeZee_slider");

		$themezee_settings[] = array("name" => __('Number of Posts', 'themezee_lang'),
						"desc" => __('Enter the number how much posts should be displayed in the post slider.', 'themezee_lang'),
						"id" => "themeZee_slider_limit",
						"std" => "5",
						"type" => "text",
						"section" => "themeZee_slider");
		
		### SOCIALMEDIA BUTTONS SETTINGS
		#######################################################################################

		$themezee_settings[] = array("name" => __('Activate SocialMedia Buttons?', 'themezee_lang'),
						"desc" => __('Check this to activate the SocialMedia Button Widget.', 'themezee_lang'),
						"id" => "themeZee_socialmedia_widget",
						"std" => "false",
						"type" => "checkbox",
						"section" => "themeZee_buttons");	
						
		$themezee_settings[] = array("name" => "RSS URL",
						"desc" => __('Enter your RSS URL (e.g. Feedburner Feed) here.', 'themezee_lang'),
						"id" => "themeZee_rss",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");
						
		$themezee_settings[] = array("name" => "Email",
						"desc" => __('Enter your Email URL (e.g. Feedburner Email Subscription) here.', 'themezee_lang'),
						"id" => "themeZee_email",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");
						
		$themezee_settings[] = array("name" => "Twitter",
						"desc" => __('Enter the URL to your Twitter Profile here.', 'themezee_lang'),
						"id" => "themeZee_twitter",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");
						
		$themezee_settings[] = array("name" => "Facebook",
						"desc" => __('Enter the URL to your Facebook Profile here.', 'themezee_lang'),
						"id" => "themeZee_facebook",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");
						
		$themezee_settings[] = array("name" => "Google+",
						"desc" => __('Enter the URL to your Google+ profile.', 'themezee_lang'),
						"id" => "themeZee_googleplus",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");
						
		$themezee_settings[] = array("name" => "Tumblr",
						"desc" => __('Enter the URL to your Tumblr Blog here.', 'themezee_lang'),
						"id" => "themeZee_tumblr",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");	
						
		$themezee_settings[] = array("name" => "LinkedIn",
						"desc" => __('Enter the URL to your LinkedIn Profile here.', 'themezee_lang'),
						"id" => "themeZee_linkedin",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");	
						
		$themezee_settings[] = array("name" => "Xing",
						"desc" => __('Enter the URL to your Xing Profile here.', 'themezee_lang'),
						"id" => "themeZee_xing",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");	
						
		$themezee_settings[] = array("name" => "Delicious",
						"desc" => __('Enter the URL to your Delicious Profile here.', 'themezee_lang'),
						"id" => "themeZee_delicious",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");
						
		$themezee_settings[] = array("name" => "Digg",
						"desc" => __('Enter the URL to your Digg Profile here.', 'themezee_lang'),
						"id" => "themeZee_digg",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");
						
		$themezee_settings[] = array("name" => "Flickr",
						"desc" => __('Enter the URL to your Flickr Profile here.', 'themezee_lang'),
						"id" => "themeZee_flickr",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");	
						
		$themezee_settings[] = array("name" => "Youtube",
						"desc" => __('Enter the URL to your Youtube Profile here.', 'themezee_lang'),
						"id" => "themeZee_youtube",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");
						
		$themezee_settings[] = array("name" => "Vimeo",
						"desc" => __('Enter the URL to your Vimeo Profile here.', 'themezee_lang'),
						"id" => "themeZee_vimeo",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_buttons");
						
		### 125x125 Banner SETTINGS
		#######################################################################################	
		
		$themezee_settings[] = array("name" => __('Rotate banners?', 'themezee_lang'),
						"desc" => __('Check this to randomly rotate the ad spots.', 'themezee_lang'),
						"id" => "themeZee_rotate",
						"std" => "false",
						"type" => "checkbox",
						"section" => "themeZee_banner");	

		$themezee_settings[] = array("name" => __('Ad Spot Image URL', 'themezee_lang') . ' #1',
						"desc" => __('Enter the image URL for this ad spot.', 'themezee_lang'),
						"id" => "themeZee_ad_image_1",
						"std" => $default_banner,
						"type" => "text",
						"section" => "themeZee_banner");
							
		$themezee_settings[] = array("name" =>  __('Ad Spot Destination', 'themezee_lang') . ' #1',
						"desc" => __('Enter the URL where this ad spot points to.', 'themezee_lang'),
						"id" => "themeZee_ad_url_1",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_banner");

		$themezee_settings[] = array("name" => __('Ad Spot Image URL', 'themezee_lang') . ' #2',
						"desc" => "",
						"id" => "themeZee_ad_image_2",
						"std" => $default_banner,
						"type" => "text",
						"section" => "themeZee_banner");
							
		$themezee_settings[] = array("name" => __('Ad Spot Destination', 'themezee_lang') . ' #2',
						"desc" => "",
						"id" => "themeZee_ad_url_2",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_banner");

		$themezee_settings[] = array("name" => __('Ad Spot Image URL', 'themezee_lang') . ' #3',
						"desc" => "",
						"id" => "themeZee_ad_image_3",
						"std" => $default_banner,
						"type" => "text",
						"section" => "themeZee_banner");
							
		$themezee_settings[] = array("name" => __('Ad Spot Destination', 'themezee_lang') . ' #3',
						"desc" => "",
						"id" => "themeZee_ad_url_3",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_banner");

		$themezee_settings[] = array("name" => __('Ad Spot Image URL', 'themezee_lang') . ' #4',
						"desc" => "",
						"id" => "themeZee_ad_image_4",
						"std" => $default_banner,
						"type" => "text",
						"section" => "themeZee_banner");
							
		$themezee_settings[] = array("name" => __('Ad Spot Destination', 'themezee_lang') . ' #4',
						"desc" => "",
						"id" => "themeZee_ad_url_4",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_banner");

		$themezee_settings[] = array("name" => __('Ad Spot Image URL', 'themezee_lang') . ' #5',
						"desc" => "",
						"id" => "themeZee_ad_image_5",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_banner");
							
		$themezee_settings[] = array("name" => __('Ad Spot Destination', 'themezee_lang') . ' #5',
						"desc" => "",
						"id" => "themeZee_ad_url_5",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_banner");

		$themezee_settings[] = array("name" => __('Ad Spot Image URL', 'themezee_lang') . ' #6',
						"desc" => "",
						"id" => "themeZee_ad_image_6",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_banner");
							
		$themezee_settings[] = array("name" => __('Ad Spot Destination', 'themezee_lang') . ' #6',
						"desc" => "",
						"id" => "themeZee_ad_url_6",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_banner");
						
		return $themezee_settings;
	}

?>