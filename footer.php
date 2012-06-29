	<div class="clear"></div>
	</div>
		<?php if(is_active_sidebar('sidebar-footer-left') or is_active_sidebar('sidebar-footer-center') or is_active_sidebar('sidebar-footer-right')) : ?>
		<div class="bottombar">
			<ul id="bottombar_left">
				<?php dynamic_sidebar('sidebar-footer-left'); ?>
			</ul>
			<ul id="bottombar_right">
				<?php dynamic_sidebar('sidebar-footer-right'); ?>
			</ul>
			<ul id="bottombar_center">
				<?php dynamic_sidebar('sidebar-footer-center'); ?>
			</ul>
			<div class="clear"></div>
		</div>
		<?php endif; ?>

		<div id="footer">
			<?php
				$options = get_option('themezee_options');
				if ( isset($options['themeZee_footer']) and $options['themeZee_footer'] <> "" ) {
					echo  $options['themeZee_footer']; }
			?>
			<div id="foot_navi">
				<?php
				// Get Footer Navigation out of Theme Options
					wp_nav_menu(array('theme_location' => 'foot_navi', 'container' => false, 'echo' => true, 'fallback_cb' => null, 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 1));
				?>
			</div>
		</div>
		<div class="clear"></div>
</div>
	<div class="credit_link"><a href="<?php echo THEMEZEE_INFO; ?>"><?php _e('Wordpress Theme by ThemeZee', 'themezee_lang'); ?></a></div>

	<!-- twitter script -->
	<script type="text/javascript" charset="utf-8">
    window.twttr = (function (d,s,id) {
      var t, js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return; js=d.createElement(s); js.id=id;
      js.src="//platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs);
      return window.twttr || (t = { _e: [], ready: function(f){ t._e.push(f) } });
    }(document, "script", "twitter-wjs"));
  </script>

	<?php wp_footer(); ?>

<script type="text/javascript">

	// GA

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25821217-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
