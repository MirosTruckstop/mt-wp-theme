	<footer class="site-footer">
		<div id="copyright">&copy; 2006-<?php echo date('Y'); ?> <?php echo get_option('copyright'); ?></div>
		<?php wp_nav_menu(array(
			'theme_location' => 'footer'
		)); ?>		
	</footer>

	</div><!-- .content_container -->
</div><!-- .Container -->

<?php wp_footer(); ?>

</body>
</html>