<?

/********************* debut widget USERS *******************/
add_action('wp_dashboard_setup', 'Custom_Dashboard_Widget_Users');
function Custom_Dashboard_Widget_Users() {
  if(of_get_option( 'opt_dashboard_widget_user' )){
    wp_add_dashboard_widget('Custom_Dashboard_Widget_Users', '<i class="fa fa-users"></i> Users', 'Custom_Dashboard_Widget_Users_get_content');
  }
}

add_action('admin_menu', 'Custom_Dashboard_Widget_Users_admin');
function Custom_Dashboard_Widget_Users_get_content() {
  global $wp_roles;
  if(strlen($content) == 0) {
    $blogusers = get_users();
    $content = "<ul>";
    $count_posts = wp_count_posts();
    $count = $count_posts->publish;

    foreach ( $blogusers as $user ) {
      if($user->roles[0] != "subscriber"){  
        if($user->roles[0] == "administrator")
          $userprofil = "progress-bar-success";
        else if($user->roles[0] == "author")
          $userprofil = "progress-bar-info";
        else if($user->roles[0] == "editor")
          $userprofil = "progress-bar-danger";
        else
          $userprofil = "progress-bar-warning";

        $content .= '<li>';
        $content .= '<p style="float:left;">' . get_avatar( $user->user_email, 50 ).'</p>';       
        $content .= '<p style="float:left; margin-left:10px;">';
        $content .= '<span style="font-weight:bold;">'.esc_html( $user->display_name ).'</span><br/><span style="font-style:italic;">'.$user->roles[0].'</span>';
        if(get_user_meta( $user->ID, '_last_login', true ))
          $content .= '<br/><span style="font-size:11px;">Login: '.ago(get_user_meta( $user->ID, '_last_login', true )).'</span>';
        $content .= '</p>';
        $content .= '<div class="progress" style="float:right; width:50%; margin-top:25px;">';
        $content .= '<div class="progress-bar '.$userprofil.'" role="progressbar" aria-valuenow='.(count_user_posts($user->ID)*100)/$count.'
        aria-valuemin="0" aria-valuemax="100" style="width:'.(count_user_posts($user->ID)*100)/$count.'%">';
        $content .= count_user_posts( $user->ID ).'/'.$count;
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</li>';
        $content .= '<div style="clear:both;"></div>';
      }
    }
    $content .= "</ul>";
  }
  echo stripslashes($content);
}

function ago($time) { 
  $timediff=time()-$time; 
  $days=intval($timediff/86400);
  $remain=$timediff%86400;
  $hours=intval($remain/3600);
  $remain=$remain%3600;
  $mins=intval($remain/60);
  $secs=$remain%60;

  if ($secs>=0) $timestring = "0m ".$secs."s";
  if ($mins>0) $timestring = $mins."m ".$secs."s";
  if ($hours>0) $timestring = $hours."h ".$mins."m";
  if ($days>0) $timestring = $days."d ".$hours."h";

  return $timestring; 
}
/******************* fin widget USERS *******************/