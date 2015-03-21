	<footer class="site-footer">
		<div id="copyright">&copy; 2006-<?php echo date('Y'); ?> by Michael &quot;MiRo&quot; R.</div>
		<?php
		$args = array(
			'theme_location' => 'footer'
		);
		?>
		<?php wp_nav_menu( $args ); ?>		
	</footer>

	</div><!-- End content_container -->
</div><!-- End Container -->

<?php wp_footer(); ?>
</body>
</html>