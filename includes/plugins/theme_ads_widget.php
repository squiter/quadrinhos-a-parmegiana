<?php
	// Add Theme 125x125 Ads
	class themezee_125Banner_Widget extends WP_Widget {
		function themezee_125Banner_Widget() {
			$widget_ops = array('classname' => 'theme_ads', 'description' => __('Show your 125x125 Ad Spots', 'themezee_lang') );
			$this->WP_Widget('theme_ads', 'zeeBanners 125x125', $widget_ops);
		}
	 
		function widget($args, $instance) {
			extract($args, EXTR_SKIP);
			$title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
			
			$pic = array();
			$url = array();
			$nr = range(1,6); 
			$i = 0;
			$n = 0;

			$options = get_option('themezee_options');
			if ( isset($options['themeZee_rotate']) and $options['themeZee_rotate'] == 'true' ) {
				shuffle($nr);
			}
			foreach ($nr as $number) {	
				if( isset($options['themeZee_ad_image_'.$number]) and $options['themeZee_ad_image_'.$number] != '' ) {
					$i++;
					$pic[$i] = esc_url($options['themeZee_ad_image_'.$number]);
					$url[$i] = esc_url( $options['themeZee_ad_url_'.$number]);
				}
			}
			
			// Output
			echo $before_widget;
			if ( !empty( $title ) ) { echo $before_title . $title . $after_title; };
		?>
			<div id="ads">
				<?php
				if(count($pic) > 0) {
					foreach($pic as $key) { 
						$n++;
				?>
					<a href="<?php echo $url[$n]; ?>"><img src="<?php echo $pic[$n]; ?>" alt="banner" /></a>
			<?php 
					} 
				}
				else {
					_e('Go to WP-Admin-> Appearance-> "Theme" Options to configure this widget', 'themezee_lang');
				}
			?>
			</div>
		<?php
			echo $after_widget;
		}
	 
		function update($new_instance, $old_instance) {
			$instance = $old_instance;
			$instance['title'] = esc_attr($new_instance['title']);
			return $instance;
		}
	 
		function form($instance) {
			$instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
			$title = esc_attr($instance['title']);
		?>
			<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'themezee_lang'); ?>: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
		<?php
		}
	}
	register_widget('themezee_125Banner_Widget');
?>