<?

/********************* start add image to posts listing *******************/
add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
function posts_columns($defaults){
    $defaults['riv_post_thumbs'] = __('Photo');
    return $defaults;
}
function posts_custom_columns($column_name, $id){
        if($column_name === 'riv_post_thumbs'){
        echo the_post_thumbnail( array(60, 60) );
    }
}

//remove comments and tags from post listing
add_filter('manage_posts_columns', 'remove_columns');
function remove_columns($columns) {
    unset($columns['comments']);
    //unset($columns['author']);
    unset($columns['tags']);
    return $columns;
}

//featured image in first column in posts listing
add_filter('manage_posts_columns', 'img_listing_first');
function img_listing_first( $defaults ){
  $colsstart = array_slice( $defaults, 0, 1, true );
  $colsend   = array_slice( $defaults, 1, null, true );

  $colls = array_merge(
    $colsstart,
    array( 'riv_post_thumbs' => __('Photo') ),
    $colsend
  );
  return $colls;
}
/********************* end add image to posts listing *******************/