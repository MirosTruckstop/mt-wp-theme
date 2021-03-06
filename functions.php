<?php
/**
 * Theme name
 */
define('MT_THEME_NAME', 'mt-wp-theme');

/**
 * Enqueue scripts and styles.
 */
function mtTheme_scripts() {
	wp_enqueue_style(MT_THEME_NAME.'-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mtTheme_scripts');

if (!function_exists('mtTheme_setup')) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */	
function mtTheme_setup() {
	
	// get the the role object
	$role_object = get_role('editor');
	// add $cap capability to this role object
	$role_object->add_cap('edit_theme_options');
	
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain(MT_THEME_NAME, get_template_directory() . '/languages');

	// Register navigation menus
	register_nav_menus(array(
		'primary' => __('Primary Menu', MT_THEME_NAME),
		'footer' => __('Footer Links Menu', MT_THEME_NAME),
	));

	add_theme_support('title-tag');
}
endif; // mtTheme_setup
add_action('after_setup_theme', 'mtTheme_setup');

if (is_admin()) :
function mtTheme_admin_menus() {
	add_submenu_page('themes.php', 'mtTheme '.__('Settings'), __('Settings'), 'manage_options', 'mtTheme-settings', 'mtTheme_page_settings');

	add_action('admin_init', 'mtTheme_register_setting');
}
add_action('admin_menu', 'mtTheme_admin_menus');

function mtTheme_register_setting() {
	register_setting('mtTheme-settings', 'author');
	register_setting('mtTheme-settings', 'description');
	register_setting('mtTheme-settings', 'keywords');
	register_setting('mtTheme-settings', 'copyright');	
}
endif; // is_admin

function mtTheme_page_settings() {
?>
<div class="wrap">
    <h2>MT-Theme <?php _e('Settings'); ?></h2>
    <form method="post" action="options.php">
		<?php settings_fields('mtTheme-settings'); ?>
		<?php do_settings_sections('mtTheme-settings'); ?>
        <table class="form-table">
            <tr>
                <th><?php _e('Author'); ?></th>
                <td><input type="text" name="author" class="regular-text" value="<?php echo esc_attr( get_option('author') ); ?>" /></td>
            </tr>
            <tr>
                <th><?php _e('Description'); ?></th>
                <td><textarea name="description" rows="4" style="width: 500px;"><?php echo esc_attr( get_option('description') ); ?></textarea></td>
            </tr>
            <tr>
                <th><?php _e('Keywords'); ?></th>
                <td><textarea name="keywords" rows="10" style="width: 500px;"><?php echo esc_attr( get_option('keywords') ); ?></textarea></td>
            </tr>
            <tr>
                <th><?php _e('Copyright'); ?></th>
                <td><input type="text" name="copyright" class="regular-text" value="<?php echo esc_attr( get_option('copyright') ); ?>" /></td>
            </tr>				
        </table>
		<?php submit_button(); ?>
    </form>
</div>
<?php
}

function mtTheme_the_breadcrumb() {
	$items = apply_filters('mtTheme_breadcrumb_items', array());
	if (is_array($items) && !empty($items)) {
		echo '<div id="link_leiste" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';

		foreach ($items as $link => $label) {
			echo '<a href="'.$link.'" itemprop="url"><span itemprop="title">'.$label.'</span></a>';
			if (!empty($link)) {
				echo '&nbsp;>&nbsp;';
			}
		}
		echo '</div>';
	}
}
add_action('mtTheme_the_breadcrumb', 'mtTheme_the_breadcrumb');