<?

/********************* debut widget TWITTER *******************/
add_action('wp_dashboard_setup', 'Custom_Dashboard_Widget_Twitter');
function Custom_Dashboard_Widget_Twitter() {
  if(of_get_option( 'opt_dashboard_widget_social' )){
    wp_add_dashboard_widget('Custom_Dashboard_Widget_Twitter', '<i class="fa fa-twitter"></i> Social', 'Custom_Dashboard_Widget_Twitter_get_content');
  }
}
add_action('admin_menu', 'Custom_Dashboard_Widget_Twitter_admin');
function Custom_Dashboard_Widget_Twitter_get_content() {
	//TW
	if(of_get_option( 'opt_social_tw' )){
        $urlTw = 'https://twitter.com/'.of_get_option( "opt_social_tw" );
        echo '<a class="twitter-timeline" href="'.$urlTw.'" data-screen-name="'.of_get_option( 'opt_social_tw' ).'" data-widget-id="554733740766019584">Tweets de @'.of_get_option( 'opt_social_tw' ).'</a>';
    }
}
/******************* fin widget TWITTER *******************/
