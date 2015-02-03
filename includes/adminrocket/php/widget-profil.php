<?

/********************* debut widget PROFIL *******************/
add_action('wp_dashboard_setup', 'Custom_Dashboard_Widget_Profil');
function Custom_Dashboard_Widget_Profil() {
  if(of_get_option( 'opt_dashboard_widget_profil' )){
    wp_add_dashboard_widget('Custom_Dashboard_Widget_Profil', '<i class="fa fa-user"></i> Profil', 'Custom_Dashboard_Widget_Profil_get_content');
  }
}

add_action('admin_menu', 'Custom_Dashboard_Widget_Profil_admin');
function Custom_Dashboard_Widget_Profil_get_content() {
      global $current_user;
      get_currentuserinfo();
      echo '<ul>';
      echo '<p style="float:left; margin:0; padding:0; margin-right:10px;">'. get_avatar( $current_user->user_email, 90 )."</p>";
      echo '<li><strong>' . $current_user->user_login . "</strong></li>";
      echo '<li>Firstname: ' . $current_user->user_firstname . "</li>";
      echo '<li>Lastname: ' . $current_user->user_lastname . "</li>";
      echo '<li>Email: ' . $current_user->user_email . "</li>";
      echo '</ul>';
      echo '<div style="clear:both;"></div>';
}
/******************* fin widget PROFIL *******************/
