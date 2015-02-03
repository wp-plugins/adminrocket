<?php
/**
 * Plugin Name: AdminRocket
 * Plugin URI: http://bnotteghem.com/adminrocket
 * Description: AdminRocket allows you to customize your wordpress backoffice with available themes or your own settings. Offer a personalized dashboard to your customers!
 * Version:     1.1
 * Author:      Ben NOTTEGHEM
 * Author URI:  http://bnotteghem.com
 * Text Domain: adminrocket
 * Domain Path: /languages
 * License: GPL2
 */

//
//GIT RELEASE ZIP file (without .git folder)
//git archive master --format=zip --output=../adminrocket-1.0.zip
//

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

//
// load JS / CSS files just in backend
//
add_action( 'admin_init', 'import_scripts_backend' );
function import_scripts_backend() {

	//Add custom CSS
	wp_enqueue_style('admin-custom', plugins_url('includes/adminrocket/css/wp-admin-custom.css', __FILE__));
	wp_enqueue_style('progress', plugins_url('includes/adminrocket/css/progress.css', __FILE__));
	wp_enqueue_style('button', plugins_url('includes/adminrocket/css/button.css', __FILE__));
	wp_enqueue_style('adminbar', plugins_url('includes/adminrocket/css/adminbar.css', __FILE__));
	wp_enqueue_style('flexisel', plugins_url('includes/adminrocket/css/flexisel.css', __FILE__));
    
    //if Animate css enable
	if(of_get_option( 'opt_animation_orientation' )){
		wp_enqueue_script("opt_animation_title", plugins_url()."/adminrocket/includes/adminrocket/js/animate-".of_get_option( 'opt_animation_orientation' ).".js", false, "1.0");
	}
	else{
		wp_enqueue_script("opt_animation_title", plugins_url()."/adminrocket/includes/adminrocket/js/animate.js", false, "1.0");
	}

	//if load Circular Navigation script
	if(of_get_option( 'opt_circular_navigation' )){
		wp_enqueue_script("circularscript", plugins_url()."/adminrocket/includes/adminrocket/js/circular-navigation.js", false, "1.0");
		wp_enqueue_style('circular', plugins_url('includes/adminrocket/css/circular.navigation.css', __FILE__));
	}

	 //Add custom JS
	wp_enqueue_script("admin-custom", plugins_url()."/adminrocket/includes/adminrocket/js/admin-custom.js", false, "1.0");

    //Add font awesome
	wp_enqueue_style('fontawesome', "http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css");

	//if Circular Navigation enable
	wp_enqueue_script("modern", plugins_url()."/adminrocket/includes/adminrocket/js/modernizr-2.6.2.min.js", false, "1.0");
	wp_enqueue_script("polyfills", plugins_url()."/adminrocket/includes/adminrocket/js/polyfills.js", false, "1.0");

    //if Animate css enable
	wp_enqueue_style('animate', plugins_url('includes/adminrocket/css/animate.css', __FILE__));

}

//
//init option framework
//
function optionsframework_init() {

	//  If user can't edit theme options, exit
	if ( !current_user_can( 'edit_theme_options' ) )
		return;

	// Load translation files
	load_plugin_textdomain( 'options-framework', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

	// Loads the required Options Framework classes.
	require plugin_dir_path( __FILE__ ) . 'includes/class-options-framework.php';
	require plugin_dir_path( __FILE__ ) . 'includes/class-options-framework-admin.php';
	require plugin_dir_path( __FILE__ ) . 'includes/class-options-interface.php';
	require plugin_dir_path( __FILE__ ) . 'includes/class-options-media-uploader.php';
	require plugin_dir_path( __FILE__ ) . 'includes/class-options-sanitization.php';

	//add custom PHP func
	require plugin_dir_path( __FILE__ ) . 'includes/adminrocket/php/spec-footer.php';
	require plugin_dir_path( __FILE__ ) . 'includes/adminrocket/php/spec-menu-right.php';
	require plugin_dir_path( __FILE__ ) . 'includes/adminrocket/php/spec-admin-bar.php';
	require plugin_dir_path( __FILE__ ) . 'includes/adminrocket/php/spec-postbox.php';
	require plugin_dir_path( __FILE__ ) . 'includes/adminrocket/php/spec-img-to-listing.php';
	require plugin_dir_path( __FILE__ ) . 'includes/adminrocket/php/spec-dashboard-custom.php';
	require plugin_dir_path( __FILE__ ) . 'includes/adminrocket/php/spec-general.php';
	require plugin_dir_path( __FILE__ ) . 'includes/adminrocket/php/spec-wpmenu.php';
	require plugin_dir_path( __FILE__ ) . 'includes/adminrocket/php/spec-media.php';

	//add custom DASHBOARD WIDGET 
	require plugin_dir_path( __FILE__ ) . 'includes/adminrocket/php/widget-profil.php';
	require plugin_dir_path( __FILE__ ) . 'includes/adminrocket/php/widget-user.php';
	require plugin_dir_path( __FILE__ ) . 'includes/adminrocket/php/widget-social.php';
	require plugin_dir_path( __FILE__ ) . 'includes/adminrocket/php/widget-media.php';
	require plugin_dir_path( __FILE__ ) . 'includes/adminrocket/php/widget-category.php';

	// Instantiate the main plugin class.
	$options_framework = new Options_Framework;
	$options_framework->init();

	// Instantiate the options page.
	$options_framework_admin = new Options_Framework_Admin;
	$options_framework_admin->init();

	// Instantiate the media uploader class
	$options_framework_media_uploader = new Options_Framework_Media_Uploader;
	$options_framework_media_uploader->init();

	// get the the role object + add $cap capability to this role object
	// $editor = get_role('editor');
	// $editor->add_cap('edit_theme_options');

	// $author = get_role('author');
	// $author->add_cap('edit_theme_options');

	// $contributor = get_role('contributor');
	// $contributor->add_cap('edit_theme_options');

}
add_action( 'init', 'optionsframework_init', 20 );


// Just for demo online version
// block user DEMO/DEMO contributor
// remove menu element

// add_action( 'admin_init', 'posts_for_current_contributor' );
// function posts_for_current_contributor() {
//     if ( current_user_can( 'contributor' ) ) {
//         //remove_menu_page('edit.php'); // Posts
// 		remove_menu_page('upload.php'); // Media
// 		remove_menu_page('link-manager.php'); // Links
// 		//remove_menu_page('edit-comments.php'); // Comments
// 		remove_menu_page('edit.php?post_type=page'); // Pages
// 		remove_menu_page('plugins.php'); // Plugins
// 		remove_menu_page('themes.php'); // Appearance
// 		remove_menu_page('users.php'); // Users
// 		remove_menu_page('profile.php'); // Users
// 		remove_menu_page('tools.php'); // Tools
// 		remove_menu_page('options-general.php'); // Settings
//    }

// }



/**
 * Helper function to return the theme option value.
 * If no value has been saved, it returns $default.
 * Needed because options are saved as serialized strings.
 *
 * Not in a class to support backwards compatibility in themes.
 */

if ( ! function_exists( 'of_get_option' ) ) :

	function of_get_option( $name, $default = false ) {
		$config = get_option( 'optionsframework' );

		if ( ! isset( $config['id'] ) ) {
			return $default;
		}

		$options = get_option( $config['id'] );

		if ( isset( $options[$name] ) ) {
			return $options[$name];
		}

		return $default;
	}

	endif;




//
	/********** start export ************/
//

/**
 * Register the plugin menu Position
 */
function pwsix_register_settings() {
	register_setting( 'pwsix_settings_group', 'settings' );
}
add_action( 'admin_init', 'pwsix_register_settings' );

/**
 * Register the settings page
 */
function pwsix_settings_menu() {
	//add_theme_page( __( 'Import/Export' ), __( 'Import/Export' ), 'edit_theme_options', 'settings', 'pwsix_settings_page' );
	add_menu_page('AdminRocket', 'AdminRocket', 'manage_options', 'options-framework','optionsframework_page', 'dashicons-art');
	add_submenu_page( 'options-framework', 'Import/Export', 'Import/Export', 'manage_options', 'settings', 'pwsix_settings_page');
}
add_action( 'admin_menu', 'pwsix_settings_menu' );

/**
 * Render the settings page
 */
function pwsix_settings_page() {

	$themenametp = get_option( 'stylesheet' );
	$themenametp = preg_replace("/\W/", "_", strtolower($themenametp) );
	$options = get_option( $themenametp );

	?>
	<div class="wrap">
		<h2>Import & Export AdminRocket Themes</h2>
		<div class="metabox-holder">
			<div class="postbox">
				<h3><span><?php _e( 'Export Settings' ); ?></span></h3>
				<div class="inside">
					<p><?php _e( 'Export the plugin settings for this site as a .json file. This allows you to easily import the configuration into another site.' ); ?></p>
					<form method="post">
						<p><input type="hidden" name="pwsix_action" value="export_settings" /></p>
						<p>
							<?php wp_nonce_field( 'pwsix_export_nonce', 'pwsix_export_nonce' ); ?>
							<?php submit_button( __( 'Export' ), 'secondary', 'submit', false ); ?>
						</p>
					</form>
				</div><!-- .inside -->
			</div><!-- .postbox -->

			<div class="postbox">
				<h3><span><?php _e( 'Import Settings' ); ?></span></h3>
				<div class="inside">
					<p><?php _e( 'Import the plugin settings from a .json file. This file can be obtained by exporting the settings on another site using the form above.' ); ?></p>
					<form method="post" enctype="multipart/form-data">
						<p>
							<input type="file" name="import_file"/>
						</p>
						<p>
							<input type="hidden" name="pwsix_action" value="import_settings" />
							<?php wp_nonce_field( 'pwsix_import_nonce', 'pwsix_import_nonce' ); ?>
							<?php submit_button( __( 'Import' ), 'secondary', 'submit', false ); ?>
						</p>
					</form>
				</div><!-- .inside -->
			</div><!-- .postbox -->
		</div><!-- .metabox-holder -->
	</div><!--end .wrap-->
	<?php
}

/**
 * Process a settings export that generates a .json file of the shop settings
 */
function pwsix_process_settings_export() {

	if( empty( $_POST['pwsix_action'] ) || 'export_settings' != $_POST['pwsix_action'] )
		return;

	if( ! wp_verify_nonce( $_POST['pwsix_export_nonce'], 'pwsix_export_nonce' ) )
		return;

	if( ! current_user_can( 'manage_options' ) )
		return;

	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	$settings = get_option( $themename );

	ignore_user_abort( true );

	nocache_headers();
	header( 'Content-Type: application/json; charset=utf-8' );
	header( 'Content-Disposition: attachment; filename=pwsix-settings-export-' . date( 'm-d-Y' ) . '.json' );
	header( "Expires: 0" );

	echo json_encode( $settings );
	exit;
}
add_action( 'admin_init', 'pwsix_process_settings_export' );

/**
 * Process a settings import from a json file
 */
function pwsix_process_settings_import() {

	if( empty( $_POST['pwsix_action'] ) || 'import_settings' != $_POST['pwsix_action'] )
		return;

	if( ! wp_verify_nonce( $_POST['pwsix_import_nonce'], 'pwsix_import_nonce' ) )
		return;

	if( ! current_user_can( 'manage_options' ) )
		return;

	$extension = end( explode( '.', $_FILES['import_file']['name'] ) );

	if( $extension != 'json' ) {
		wp_die( __( 'Please upload a valid .json file' ) );
	}

	$import_file = $_FILES['import_file']['tmp_name'];

	if( empty( $import_file ) ) {
		wp_die( __( 'Please upload a file to import' ) );
	}

	// Retrieve the settings from the file and convert the json object to an array.
	$settings = (array) json_decode( file_get_contents( $import_file ) );
	$themenametpl = get_option( 'stylesheet' );
	$themenametpl = preg_replace("/\W/", "_", strtolower($themenametpl) );
	update_option( $themenametpl, $settings );

	wp_safe_redirect( admin_url( 'themes.php?page=options-framework' ) ); exit;

}
add_action( 'admin_init', 'pwsix_process_settings_import' );


//
/********** end export ************/
//



//
// start login screen
//

//we need the date in login process
/**
 * WordPress - Store timestamp of a user's last login as user meta
 */
function user_last_login( $user_login, $user ){
	update_user_meta( $user->ID, '_last_login', time() );
}

add_action( 'wp_login', 'user_last_login', 10, 2 );

// login screen
function my_loginlogo() {
	if(of_get_option( 'opt_body_logoupload' )){
		echo '<style type="text/css">
		h1 a {
			background-image: url(' . of_get_option( 'opt_body_logoupload', '' ).') !important;
		}
	</style>';
}
if(of_get_option( 'opt_body_bgupload' )){
	echo '<style type="text/css">
	body{
		background-image: url('.of_get_option( 'opt_body_bgupload', '' ).') !important;
		background-size: 100% !important;
		background-repeat: no-repeat !important;
		background-attachment: fixed !important;
		-webkit-background-size: cover !important; 
		background-size: cover !important;
	}
</style>';
}
if(of_get_option( 'opt_body_bgc' )){
	echo '<style type="text/css">
	body{
		background: '.of_get_option( "opt_body_bgc", "" ).';
	}
</style>';
}
if(of_get_option( 'opt_body_bguploadpattern' )){
	echo '<style type="text/css">
	body{
		background-image: url('.of_get_option( 'opt_body_bguploadpattern', '' ).') !important;
		background-repeat: repeat !important;
	}
</style>';
}
}
add_action('login_head', 'my_loginlogo');

//
// end login screen
//






//
// start backend security
//

add_action( 'init', 'fb_wp_hide_version' );
function fb_wp_hide_version(){
	if(of_get_option( 'opt_login_hide_wpversion' )){
		remove_action('wp_head','wp_generator'); 
	}
}

add_action( 'init', 'fb_wp_hide_errormessage' );
function fb_wp_hide_errormessage(){
	if(of_get_option( 'opt_login_hide_messages' )){
		add_filter('login_errors',create_function('$a', "return null;")); 
	}
}

add_action( 'init', 'fb_wp_hide_wpupdate' );
function fb_wp_hide_wpupdate(){
	if(of_get_option( 'opt_login_hide_wpupdate' )){
		add_filter('pre_site_transient_update_core', create_function('$a', "return null;")); 
	}
}

add_action( 'init', 'fb_wp_hide_theme_update' );
function fb_wp_hide_theme_update(){
	if(of_get_option( 'opt_login_hide_wpupdate_theme' )){
		remove_action('load-update-core.php', 'wp_update_themes'); add_filter('pre_site_transient_update_themes', create_function('$a', "return null;")); 
	}
}

add_action( 'init', 'fb_wp_hide_plugin_update' );
function fb_wp_hide_plugin_update(){
	if(of_get_option( 'opt_login_hide_wpupdate_plugin' )){
		remove_action('load-update-core.php', 'wp_update_plugins'); add_filter('pre_site_transient_update_plugins', create_function('$a', "return null;")); 
	}
}

add_action( 'admin_init', 'wp_hide_update_wpmenu' );
function wp_hide_update_wpmenu() {
	if(of_get_option( 'opt_wpmenu_hide_updates' )){
    	remove_submenu_page( 'index.php', 'update-core.php' );
    }
}

//
// end backend security
//





//
// fix background position with adminbar
//
add_action( 'admin_head', 'fb_wp_adminbar_bgbody' );
function fb_wp_adminbar_bgbody(){
	if(of_get_option( 'opt_wpadminbar_bottom' )){
		echo '<style type="text/css">
	    #wpcontent {
		margin: -32px 160px 0 0px !important;
		padding-top: 32px !important;
	}
#adminmenuwrap{
	margin-top:43px !important;
}
</style>';
}
}



