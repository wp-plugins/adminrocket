<?php

function optionsframework_option_name() {
	//This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'Arial' => __('Arial', 'options-framework'),
		'Comic Sans MS' => __('Comic Sans MS', 'options-framework'),
		'Trebuchet' => __('Trebuchet', 'options-framework'),
	);

	$google_faces = array(
		'ABeeZee, sans-serif' => 'ABeeZee',
		'Abril Fatface, serif' => 'Abril Fatface',
		'Alegreya, serif' => 'Alegreya',
		'Amatic SC, sans-serif' => 'Amatic SC',
		'Archivo Narrow, sans-serif' => 'Archivo Narrow',
		'Arvo, serif' => 'Arvo',
		'Bitter, sans-serif' => 'Bitter',
		'Boogaloo, sans-serif' => 'Boogaloo',
		'Bubblegum Sans, cursive' => 'Bubblegum Sans',
		'Cabin, sans-serif' => 'Cabin',
		'Cookie, cursive' => 'Cookie',
		'Copse, sans-serif' => 'Copse',
		'Cutive, serif' => 'Cutive',
		'Domine, serif' => 'Domine',
		'Droid Sans, sans-serif' => 'Droid Sans',
		'Droid Serif, serif' => 'Droid Serif',
		'Economica, sans-serif' => 'Economica',
		'Exo, sans-serif' => 'Exo',
		'Fjalla One, sans-serif' => 'Fjalla One',
		'Federo, sans-serif' => 'Federo',
		'Gabriela, serif' => 'Gabriela',
		'Gentium Book Basic, serif' => 'Gentium Book Basic',
		'Grand Hotel, cursive' => 'Grand Hotel',
		'Gudea, sans-serif' => 'Gudea',
		'Homenaje, sans-serif' => 'Homenaje',
		'Josefin Slab, sans-serif' => 'Josefin Slab',
		'Lato, sans-serif' => 'Lato',
		'Libre Baskerville, serif' => 'Libre Baskerville',
		'Lobster, cursive' => 'Lobster',
		'Lobster Two, cursive' => 'Lobster Two',
		'Lora, serif' => 'Lora',
		'Merriweather, sans-serif' => 'Merriweather',
		'Monda, sans-serif' => 'Monda',
		'Montserrat, sans-serif' => 'Montserrat',
		'Mouse Memoirs, sans-serif' => 'Mouse Memoirs',
		'Nobile, sans-serif' => 'Nobile',
		'Offside, cursive' => 'Offside',
		'Old Standard TT, serif' => 'Old Standard',
		'Open Sans, sans-serif' => 'Open Sans',
		'Oswald, sans-serif' => 'Oswald',
		'Pacifico, cursive' => 'Pacifico',
		'Patrick Hand SC, cursive' => 'Patrick Hand SC',
		'Playfair Display, sans-serif' => 'Playfair',
		'Poly, serif' => 'Poly',
		'PT Sans, sans-serif' => 'PT Sans',
		'PT Serif, serif' => 'PT Serif',
		'Quattrocento, serif' => 'Quattrocento',
		'Quicksand, sans-serif' => 'Quicksand',
		'Raleway, cursive' => 'Raleway',
		'Rancho, cursive' => 'Rancho',
		'Rambla, serif' => 'Rambla',
		'Rochester, cursive' => 'Rochester',
		'Roboto, sans-serif' => 'Roboto',
		'Rouge Script, cursive' => 'Rouge Script',
		'Rokkitt, serif' => 'Rokkit',
		'Sacramento, cursive' => 'Sacramento',
		'Sanchez, serif' => 'Sanchez',
		'Satisfy, cursive' => 'Satisfy',
		'Shadows Into Light Two, cursive' => 'Shadows Into Light Two',
		'Sintony, sans-serif' => 'Sintony',
		'Sofia, cursive' => 'Sofia',
		'Source Sans Pro, sans-serif' => 'Source Sans',
		'Sue Ellen Francisco, cursive' => 'Sue Ellen Francisco',
		'Titillium Web, sans-serif' => 'Titillium Web',
		'Ubuntu, sans-serif' => 'Ubuntu',
		'Varela, sans-serif' => 'Varela',
		'Vollkorn, serif' => 'Vollkorn',
		'Wire One, sans-serif' => 'Wire One',
		'Yanone Kaffeesatz, sans-serif' => 'Yanone Kaffeesatz'
	);

    $animation_orientation = array(
        'fadeInUp' => 'Up',
        'fadeInUpBig' => 'Up Big',
        'fadeInDown' => 'Down',
        'fadeInDownBig' => 'Down Big',
        'fadeInLeft' => 'Left',
        'fadeInLeftBig' => 'Left Big',
        'fadeInRight' => 'Right',
        'fadeInRightBig' => 'Right Big'
    );

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options-framework'),
		'two' => __('Pancake', 'options-framework'),
		'three' => __('Omelette', 'options-framework'),
		'four' => __('Crepe', 'options-framework'),
		'five' => __('Waffle', 'options-framework')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		// 'face' => 'georgia',
		// 'style' => 'bold',
		'color' => '#bada55' );

	// Typography Defaults
	$typography_titles = array(
		'face' => 'georgia',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		//'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		//'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	$wp_editor_settings = array(
			'wpautop' => true, // Default
			'textarea_rows' => 2,
			'media_buttons' => true
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	//*****************************************************
	//****************** LOGO *****************************
	//*****************************************************
	
		$options[] = array(
		'name' => __('Logo', 'options-framework'),
		'type' => 'heading' );

		$options[] = array(
		'name' => __('Your logo', 'options-framework'),
		'desc' => __('Upload your logo for Wordpress backend menu and login form', 'options-framework'),
		'id' => 'opt_body_logoupload',
		'type' => 'upload');

		$options[] = array(
		'name' => __('Width', 'options-framework'),
		'desc' => __('Width of your logo (example = 160)', 'options-framework'),
		'id' => 'opt_logo_width',
		'std' => '160',
		'class' => '',
		'type' => 'text');

		$options[] = array(
		'name' => __('Height', 'options-framework'),
		'desc' => __('Height of your logo (example = 75)', 'options-framework'),
		'id' => 'opt_logo_height',
		'std' => '75',
		'class' => '',
		'type' => 'text');

	//*****************************************************
	//****************** DESIGN GENERAL *******************
	//*****************************************************
	
		$options[] = array(
		'name' => __('Background', 'options-framework'),
		'type' => 'heading' );

		$options[] = array(
		'name' =>  __('Background-color', 'options-framework'),
		'desc' => __('Select your body background color for the backend', 'options-framework'),
		'id' => 'opt_body_bgc',
		'std' => '#dd3333',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Fullscreen background-image', 'options-framework'),
		'desc' => __('Upload your body background-image for the backend', 'options-framework'),
		'id' => 'opt_body_bgupload',
		'type' => 'upload');

		$options[] = array(
		'name' => __('Repeat pattern Background', 'options-framework'),
		'desc' => __('Upload your body pattern for repeat pattern background mode for the backend', 'options-framework'),
		'id' => 'opt_body_bguploadpattern',
		'type' => 'upload');

	//*****************************************************
	//****************** POSTBOX **************************
	//*****************************************************

		$options[] = array(
		'name' => __('Postbox', 'options-framework'),
		'type' => 'heading' );

		$options[] = array(
		'name' =>  __('Postbox background-color', 'options-framework'),
		'desc' => __('Change Postbox background-color', 'options-framework'),
		'id' => 'opt_postbox_bgc',
		'std' => '#FFFFFF',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Postbox background-color opacity', 'options-framework'),
		'desc' => __('Change postbox background color opacity (default = 0.8) 1 = disable opacity. Value between 0 and 1.', 'options-framework'),
		'id' => 'opt_postbox_bgopacity',
		'std' => '0.8',
		'class' => '',
		'type' => 'text');

		$options[] = array(
		'name' => __('Postbox radius', 'options-framework'),
		'desc' => __('Change Postbox radius (default = 5px)', 'options-framework'),
		'id' => 'opt_postbox_radius',
		'std' => '10px',
		'class' => '',
		'type' => 'text');
		
		//*****************************************************
		//****************** COLORS ***************************
		//*****************************************************
		

		$options[] = array(
		'name' => __('Colors', 'options-framework'),
		'type' => 'heading' );

		$options[] = array(
		'name' =>  __('Page Titles background-color', 'options-framework'),
		'desc' => __('Change page titles background-color', 'options-framework'),
		'id' => 'opt_h2_bgc',
		'std' => '#FFFFFF',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Page Titles background-color opacity', 'options-framework'),
		'desc' => __('Change page titles background-color opacity (default = 0.8) 1 = disable opacity. Value between 0 and 1.', 'options-framework'),
		'id' => 'opt_h2_bgopacity',
		'std' => '0.8',
		'class' => '',
		'type' => 'text');

		$options[] = array(
		'name' => __('Page Titles background-color corner radius', 'options-framework'),
		'desc' => __('Change page titles background-color corner radius (default = 5px)', 'options-framework'),
		'id' => 'opt_h2_radius',
		'std' => '10px',
		'class' => '',
		'type' => 'text');

		$options[] = array(
		'name' =>  __('Posts listing even delimiter background-color', 'options-framework'),
		'desc' => __('Change posts listing even delimiter background-color in all posts pages.', 'options-framework'),
		'id' => 'opt_posts_listing_bgc',
		'std' => '#FFFFFF',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Posts listing even delimiter background-color opacity', 'options-framework'),
		'desc' => __('Change posts listing even delimiter background-color opacity in all posts pages. (default = 0.8) 1 = disable opacity. Value between 0 and 1.', 'options-framework'),
		'id' => 'opt_posts_listing_bgopacity',
		'std' => '0.8',
		'class' => '',
		'type' => 'text');

		$options[] = array(
		'name' =>  __('Posts listing odd delimiter background-color', 'options-framework'),
		'desc' => __('Change posts listing odd delimiter background-color in all posts pages.', 'options-framework'),
		'id' => 'opt_posts_listing_second_bgc',
		'std' => '#FFFFFF',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Posts listing odd delimiter background-color opacity', 'options-framework'),
		'desc' => __('Change posts listing odd delimiter background-color opacity in all posts pages. (default = 0.8) 1 = disable opacity. Value between 0 and 1.', 'options-framework'),
		'id' => 'opt_posts_listing_second_bgopacity',
		'std' => '0.8',
		'class' => '',
		'type' => 'text');

		$options[] = array(
		'name' =>  __('Posts listing delimiter font color', 'options-framework'),
		'desc' => __('Change posts listing delimiter text color in all posts pages', 'options-framework'),
		'id' => 'opt_listing_fontcolor',
		'std' => '#000000',
		'type' => 'color' );

		$options[] = array(
			'name' =>  __('Dashboard texts font-color', 'options-framework'),
			'desc' => __('Change the dashboard text color in your Dashboard', 'options-framework'),
			'id' => 'opt_body_font_color',
			'std' => '#777777',
			'type' => 'color' );


		//*****************************************************
		//****************** BUTTONS **************************
		//*****************************************************
		

		$options[] = array(
		'name' => __('Buttons', 'options-framework'),
		'type' => 'heading' );

		$options[] = array(
		'name' =>  __('Background-color', 'options-framework'),
		'desc' => __('Change background color for all buttons in your backend', 'options-framework'),
		'id' => 'opt_button_bgc',
		'std' => '#dd9933',
		'type' => 'color' );

		$options[] = array(
		'name' =>  __('Font-color', 'options-framework'),
		'desc' => __('Change font color for all buttons in your backend', 'options-framework'),
		'id' => 'opt_button_color',
		'std' => '#FFFFFF',
		'type' => 'color' );


	//*****************************************************
	//****************** WP MENU **************************
	//*****************************************************
	
		$options[] = array(
		'name' => __('Menu', 'options-framework'),
		'type' => 'heading' );

		$options[] = array(
		'name' => __('Background-color opacity', 'options-framework'),
		'desc' => __('Change menu background color opacity (default = 0.8) 1 = disable opacity. Value between 0 and 1.', 'options-framework'),
		'id' => 'opt_wpmenu_opacity',
		'std' => '0.8',
		'class' => '',
		'type' => 'text');

		$options[] = array(
		'name' => __('Align Wordpress menu to the right of your screen', 'options-framework'),
		'desc' => __('Check this box to align the Wordpress menu to the right of your screenr', 'options-framework'),
		'id' => 'opt_wpmenu_right',
		'std' => '1',
		'type' => 'checkbox');

		$options[] = array(
		'name' =>  __('Background-color', 'options-framework'),
		'desc' => __('Change the menu background-color', 'options-framework'),
		'id' => 'opt_wpmenu_bg',
		'std' => '#FFFFFF',
		'type' => 'color' );

		$options[] = array(
		'name' =>  __('Background-color for the current element', 'options-framework'),
		'desc' => __('Change the current element background-color in the menu', 'options-framework'),
		'id' => 'opt_wpmenu_current_elemt',
		'std' => '#dd3333',
		'type' => 'color' );

		$options[] = array(
		'name' =>  __('Pictogram', 'options-framework'),
		'desc' => __('Change pictograms color from the menu', 'options-framework'),
		'id' => 'opt_wpmenu_picto',
		'std' => '#dd3333',
		'type' => 'color' );

		$options[] = array(
		'name' =>  __('Sub-menu font-color', 'options-framework'),
		'desc' => __('Change the submenu font-color', 'options-framework'),
		'id' => 'opt_wpmenu_submenu_fontcolor',
		'std' => '#bbbbbb',
		'type' => 'color' );

		$options[] = array(
		'name' =>  __('Sub-menu background-color', 'options-framework'),
		'desc' => __('Change the submenu background-color', 'options-framework'),
		'id' => 'opt_wpmenu_submenu_bg',
		'std' => '#dd9933',
		'type' => 'color' );

		$options[] = array(
		'name' =>  __('Font-color', 'options-framework'),
		'desc' => __('Change the font-color in the menu', 'options-framework'),
		'id' => 'opt_wpmenu_font',
		'std' => '#000000',
		'type' => 'color' );

		$options[] = array(
		'name' =>  __('Font-color for the current element', 'options-framework'),
		'desc' => __('Change the current element font color in the menu', 'options-framework'),
		'id' => 'opt_wpmenu_font_active',
		'std' => '#FFFFFF',
		'type' => 'color' );

	//*****************************************************
	//****************** WP ADMINBAR **********************
	//*****************************************************
	
		$options[] = array(
		'name' => __('AdminBar', 'options-framework'),
		'type' => 'heading' );

		$options[] = array(
		'name' => __('Background-color opacity', 'options-framework'),
		'desc' => __('Change Adminbar Background color opacity (default = 0.8) 1 = disable opacity. Value between 0 and 1.', 'options-framework'),
		'id' => 'opt_wpadminbar_opacity',
		'std' => '0.8',
		'class' => '',
		'type' => 'text');

		$options[] = array(
		'name' => __('Align Adminbar to the bottom of your screen', 'options-framework'),
		'desc' => __('Align adminbar to the bottom of your backend screen', 'options-framework'),
		'id' => 'opt_wpadminbar_bottom',
		'std' => '0',
		'type' => 'checkbox');

		$options[] = array(
		'name' => __('Hide', 'options-framework'),
		'desc' => __('Check this box to hide the adminbar', 'options-framework'),
		'id' => 'opt_wpadminbar_hide',
		'std' => '0',
		'type' => 'checkbox');

		$options[] = array(
		'name' => __('Select automatic width', 'options-framework'),
		'desc' => __('Check this box to fix automaticaly the adminbar width', 'options-framework'),
		'id' => 'opt_wpadminbar_width_auto',
		'std' => '0',
		'type' => 'checkbox');

		$options[] = array(
		'name' =>  __('Background-color', 'options-framework'),
		'desc' => __('Change the adminbar background-color', 'options-framework'),
		'id' => 'opt_wpadminbar_bgc',
		'std' => '#000000',
		'type' => 'color' );

		$options[] = array(
		'name' =>  __('Font-color', 'options-framework'),
		'desc' => __('Change the adminbar text color', 'options-framework'),
		'id' => 'opt_wpadminbar_txtc',
		'std' => '#FFFFFF',
		'type' => 'color' );

	//*****************************************************
	//**************** DASHBOARD **************************
	//*****************************************************
	
		$options[] = array(
		'name' => __('Dashboard', 'options-framework'),
		'type' => 'heading' );

			$options[] = array(
			'name' => __('Twitter account for Social Widget', 'options-framework'),
			'desc' => __('Change the twitter account for the Twitter feed', 'options-framework'),
			'id' => 'opt_social_tw',
			'std' => 'twitter',
			'class' => '',
			'type' => 'text');

			// $options[] = array(
			// 'name' => __('Facebook account', 'options-framework'),
			// 'desc' => __('Change the facebook account for the Facepile', 'options-framework'),
			// 'id' => 'opt_social_fb',
			// 'std' => 'FacebookDevelopers',
			// 'class' => '',
			// 'type' => 'text');


			$options[] = array(
			'name' => __('User Widget', 'options-framework'),
			'desc' => __('Enable the User Widget on Dashboard', 'options-framework'),
			'id' => 'opt_dashboard_widget_user',
			'std' => '0',
			'type' => 'checkbox');

			$options[] = array(
			'name' => __('Media Widget', 'options-framework'),
			'desc' => __('Enable the Media Widget on Dashboard', 'options-framework'),
			'id' => 'opt_dashboard_widget_media',
			'std' => '0',
			'type' => 'checkbox');

			$options[] = array(
			'name' => __('Social Widget', 'options-framework'),
			'desc' => __('Enable the Social Widget on Dashboard', 'options-framework'),
			'id' => 'opt_dashboard_widget_social',
			'std' => '0',
			'type' => 'checkbox');

			$options[] = array(
			'name' => __('Profil Widget', 'options-framework'),
			'desc' => __('Enable the Profil Widget on Dashboard', 'options-framework'),
			'id' => 'opt_dashboard_widget_profil',
			'std' => '0',
			'type' => 'checkbox');

			$options[] = array(
			'name' => __('Categories & meta Widget', 'options-framework'),
			'desc' => __('Enable the Categories and meta Widget on Dashboard', 'options-framework'),
			'id' => 'opt_dashboard_widget_category',
			'std' => '0',
			'type' => 'checkbox');

			$options[] = array(
			'name' => __('Custom Widget', 'options-framework'),
			'desc' => __('Enable the Custom Widget on Dashboard', 'options-framework'),
			'id' => 'opt_dashboard_widget_custom',
			'std' => '0',
			'type' => 'checkbox');

			$options[] = array(
			'name' => __('Custom widget title', 'options-framework'),
			'desc' => __('Your custom widget title here', 'options-framework'),
			'id' => 'opt_widget_dashboard_title',
			'std' => 'My Widget Title',
			'type' => 'text');

			$options[] = array(
			'name' => __('Custom widget content', 'options-framework'),
			'desc' => __('Your custom widget content here', 'options-framework'),
			'id' => 'opt_widget_dashboard_content',
			'type' => 'editor',
			'settings' => $wp_editor_settings );

			

	//*****************************************************
	//**************** FOOTER *****************************
	//*****************************************************
	
		$options[] = array(
		'name' => __('Footer', 'options-framework'),
		'type' => 'heading' );

		
		$options[] = array(
			'name' => __('Left column', 'options-framework'),
			'desc' => __('Enter your text for your backend footer left column', 'options-framework'),
			'id' => 'opt_footer_left',
			'type' => 'editor',
			'settings' => $wp_editor_settings );
		

		$options[] = array(
			'name' => __('Right colum', 'options-framework'),
			'desc' => __('Enter your text for your backend footer right column', 'options-framework'),
			'id' => 'opt_footer_right',
			'type' => 'editor',
			'settings' => $wp_editor_settings );

		$options[] = array(
			'name' =>  __('Font-color', 'options-framework'),
			'desc' => __('Change font color of your custom footer', 'options-framework'),
			'id' => 'opt_footer_font_color',
			'std' => '#777777',
			'type' => 'color' );

		

	//*****************************************************
	//**************** FONTS ******************************
	//*****************************************************
	
		$options[] = array(
		'name' => __('Fonts', 'options-framework'),
		'type' => 'heading' );

		
		$options[] = array(
	 	'name' => __('Titles', 'options-framework'),
	 	'desc' => __('Select a font for this html elements : h1,h2,h3,h4,h5,h6', 'options-framework'),
	 	'id' => 'opt_googlefont_title',
	 	'std' => 'Bitter',
	 	'type' => 'select',
	 	'class' => '', //mini, tiny, small
	 	'options' => $google_faces);

	 	$options[] = array(
	 	'name' => __('Menu', 'options-framework'),
	 	'desc' => __('Select a font for menu elements', 'options-framework'),
	 	'id' => 'opt_googlefont_menu',
	 	'std' => 'Lato',
	 	'type' => 'select',
	 	'class' => '', //mini, tiny, small
	 	'options' => $google_faces);


	//*****************************************************
	//**************** ANIMATIONS *************************
	//*****************************************************
	
		$options[] = array(
		'name' => __('Animations', 'options-framework'),
		'type' => 'heading' );
		
		$options[] = array(
		'name' => __('Animation', 'options-framework'),
		'desc' => __('Enable CSS3 Animation in all backend', 'options-framework'),
		'id' => 'opt_load_animate',
		'std' => '1',
		'type' => 'checkbox');

		$options[] = array(
	 	'name' => __('Direction', 'options-framework'),
	 	'desc' => __('Select your animation here', 'options-framework'),
	 	'id' => 'opt_animation_orientation',
	 	'std' => 'Down',
	 	'type' => 'select',
	 	'class' => '', //mini, tiny, small
	 	'options' => $animation_orientation);


	 //*****************************************************
	//**************** SECURITY *************************
	//*****************************************************
	
		$options[] = array(
		'name' => __('Security', 'options-framework'),
		'type' => 'heading' );

		$options[] = array(
		'name' => __('Remove Wordpress version on code', 'options-framework'),
		'desc' => __('Remove the wordpress version on html generated code', 'options-framework'),
		'id' => 'opt_login_hide_wpversion',
		'std' => '0',
		'type' => 'checkbox');

		$options[] = array(
		'name' => __('Hide errors on login page', 'options-framework'),
		'desc' => __('Hide all errors in login form', 'options-framework'),
		'id' => 'opt_login_hide_messages',
		'std' => '0',
		'type' => 'checkbox');

		$options[] = array(
		'name' => __('Hide Wordpress Core update', 'options-framework'),
		'desc' => __('Hide all Wordpress updates from backend menu', 'options-framework'),
		'id' => 'opt_login_hide_wpupdate',
		'std' => '0',
		'type' => 'checkbox');

		$options[] = array(
		'name' => __('Hide Theme update', 'options-framework'),
		'desc' => __('Hide all Themes updates from backend menu', 'options-framework'),
		'id' => 'opt_login_hide_wpupdate_theme',
		'std' => '0',
		'type' => 'checkbox');

		$options[] = array(
		'name' => __('Hide Plugin updates', 'options-framework'),
		'desc' => __('Hide all Plugins updates from backend menu', 'options-framework'),
		'id' => 'opt_login_hide_wpupdate_plugin',
		'std' => '0',
		'type' => 'checkbox');

		$options[] = array(
		'name' => __('Hide Updates from menu', 'options-framework'),
		'desc' => __('Hide Updates sub-menu from the Dashboard element in menu', 'options-framework'),
		'id' => 'opt_wpmenu_hide_updates',
		'std' => '0',
		'type' => 'checkbox');


	//*****************************************************
	//**************** CIRCULAR NAV ***********************
	//*****************************************************
	
		$options[] = array(
		'name' => __('CircularNav', 'options-framework'),
		'type' => 'heading' );

		$options[] = array(
		'name' => __('Enable CircularNav', 'options-framework'),
		'desc' => __('Enable Circular Navigation to Wordpress the backend', 'options-framework'),
		'id' => 'opt_circular_navigation',
		'std' => '1',
		'type' => 'checkbox');
		
		$options[] = array(
		'name' =>  __('Button background-color', 'options-framework'),
		'desc' => __('Change button background color for the Circle navigation plus button', 'options-framework'),
		'id' => 'opt_circular_navigation_button_bgc',
		'std' => '#dd9933',
		'type' => 'color' );

		$options[] = array(
		'name' =>  __('Button font-color', 'options-framework'),
		'desc' => __('Change button font color', 'options-framework'),
		'id' => 'opt_circular_navigation_button_font for the Circle navigation plus button',
		'std' => '#FFFFFF',
		'type' => 'color' );

		$options[] = array(
		'name' =>  __('Primary background-color', 'options-framework'),
		'desc' => __('Change the primary background color for the Circle navigation elements', 'options-framework'),
		'id' => 'opt_circular_navigation_submenu_bg_first',
		'std' => '#dd9933',
		'type' => 'color' );		

		$options[] = array(
		'name' =>  __('Secondary background-color', 'options-framework'),
		'desc' => __('Change the secondary background color for the Circle navigation elements', 'options-framework'),
		'id' => 'opt_circular_navigation_submenu_bg_second',
		'std' => '#dd3333',
		'type' => 'color' );	

		$options[] = array(
		'name' =>  __('Submenu font-color', 'options-framework'),
		'desc' => __('Change font color for Circle navigation elements', 'options-framework'),
		'id' => 'opt_circular_navigation_submenu_font',
		'std' => '#FFFFFF',
		'type' => 'color' );

		$options[] = array(
		'name' =>  __('Background overlay', 'options-framework'),
		'desc' => __('Change background color for Circle navigation overlay', 'options-framework'),
		'id' => 'opt_circular_overlay_bgc',
		'std' => '#000000',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Background overlay opacity', 'options-framework'),
		'desc' => __('Change overlay Background color opacity (default = 0.8) 1 = disable opacity. Value between 0 and 1.', 'options-framework'),
		'id' => 'opt_circular_overlay_opacity',
		'std' => '0.8',
		'class' => '',
		'type' => 'text');

	return $options;
}



