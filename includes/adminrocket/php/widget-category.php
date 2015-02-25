<?

/********************* start widget CATEGORIES *******************/
add_action('wp_dashboard_setup', 'Custom_Dashboard_Widget_Cat');
function Custom_Dashboard_Widget_Cat() {
    if(of_get_option( 'opt_dashboard_widget_category' )){
    wp_add_dashboard_widget('Custom_Dashboard_Widget_Cat', '<i class="fa fa-tags"></i> Categories & Tags', 'Custom_Dashboard_Widget_Cat_get_content');
  }
}

add_action('admin_menu', 'Custom_Dashboard_Widget_Cat_admin');
function Custom_Dashboard_Widget_Cat_get_content() {
    $cat = get_query_var('cat');
    echo '<p style="font-weight:bold;">Categories:</p>';
    echo '<ul>';
    foreach(get_categories('orderby=name&show_count=1&title_li=0&style=list') as $category) {
        echo '<li class="parent-item" style="display: inline;">' . $category->name.' ('.$category->count.') &nbsp;&nbsp;|&nbsp;&nbsp;</li>';
    }
    echo '</ul>';

    if ( function_exists( 'wp_tag_cloud' ) ){
        echo '<p style="font-weight:bold;">Tags:</p>';
        echo '<ul>';
        echo '<li>'.wp_tag_cloud( 'smallest=10&largest=20' ).'</li>';
        echo '</ul>';
    }
}

/******************* end widget CATEGORIES *******************/