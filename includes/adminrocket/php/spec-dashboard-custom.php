<?

add_action('wp_dashboard_setup', 'Custom_Dashboard_Widget_Design');
function Custom_Dashboard_Widget_Design() {
    $title = "Custom Content";
    if(strlen(of_get_option('opt_widget_dashboard_title')) > 0) {
        $title = stripslashes(of_get_option('opt_widget_dashboard_title'));
    }

    if(of_get_option( 'opt_dashboard_widget_custom' ))
        wp_add_dashboard_widget('Custom_Dashboard_Widget_Design', $title, 'Custom_Dashboard_Widget_Design_get_content');
}

add_action('admin_menu', 'Custom_Dashboard_Widget_Design_admin');
function Custom_Dashboard_Widget_Design_admin() {
    add_action('admin_init', 'Custom_Dashboard_Widget_Design_register_settings');
}

function Custom_Dashboard_Widget_Design_get_content() {
    $content = of_get_option('opt_widget_dashboard_content');
    if(strlen($content) == 0) {
        if(current_user_can('level_10')) {
            $content = "You should <a href='options-general.php?page=Custom_Dashboard_Widget_Design'>define</a> your custom content to go here.";
        } else {
            $content = "You should ask your admin to put some custom content here.";
        }
    }
    echo stripslashes($content);
}


//remove default dashboard widget wp
function Custom_Dashboard_Widget_Design_register_settings() {  
    register_setting('Custom_Dashboard_Widget_Design_group', 'shortname_widget_homepage_title');
    register_setting('Custom_Dashboard_Widget_Design_group', 'shortname_widget_homepage_content');
}
function remove_dashboard_meta() {
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
    }
add_action( 'admin_init', 'remove_dashboard_meta' );