<?

function img_count(){
  $query_img_args = array(
    'post_type' => 'attachment',
    'post_mime_type' =>array(
      'jpg|jpeg|jpe' => 'image/jpeg',
      'gif' => 'image/gif',
      'png' => 'image/png',
      ),
    'post_status' => 'inherit',
    'posts_per_page' => -1,
    );
  $query_img = new WP_Query( $query_img_args );
  return $query_img->post_count;
}

function word_count(){
  $query_word_args = array(
    'post_type' => 'attachment',
    'post_mime_type' => 'application/msword',
    'post_status' => 'inherit',
    'posts_per_page' => -1,
    );
  $query_word = new WP_Query( $query_word_args );
  return $query_word->post_count;
}

function mp3_count(){
  $query_mp3_args = array(
    'post_type' => 'attachment',
    'post_mime_type' => 'audio/mpeg',
    'post_status' => 'inherit',
    'posts_per_page' => -1,
    );
  $query_mp3 = new WP_Query( $query_mp3_args );
  return $query_mp3->post_count;
}

function ppt_count(){
  $query_ppt_args = array(
    'post_type' => 'attachment',
    'post_mime_type' => 'application/vnd.ms-powerpoint',
    'post_status' => 'inherit',
    'posts_per_page' => -1,
    );
  $query_ppt = new WP_Query( $query_ppt_args );
  return $query_ppt->post_count;
}

function xls_count(){
  $query_xls_args = array(
    'post_type' => 'attachment',
    'post_mime_type' => 'application/vnd.ms-excel',
    'post_status' => 'inherit',
    'posts_per_page' => -1,
    );
  $query_xls = new WP_Query( $query_xls_args );
  return $query_xls->post_count;
}

function zip_count(){
  $query_zip_args = array(
    'post_type' => 'attachment',
    'post_mime_type' =>array('zip' => 'application/zip'),
    'post_status' => 'inherit',
    'posts_per_page' => -1,
    );
  $query_zip = new WP_Query( $query_zip_args );
  return $query_zip->post_count;
}

function pdf_count(){
  $query_pdf_args = array(
    'post_type' => 'attachment',
    'post_mime_type' =>array('pdf' => 'application/pdf'),
    'post_status' => 'inherit',
    'posts_per_page' => -1,
    );
  $query_pdf = new WP_Query( $query_pdf_args );
  return $query_pdf->post_count;
}


/********************* debut widget MEDIA *******************/
add_action('wp_dashboard_setup', 'Custom_Dashboard_Widget_Media');
function Custom_Dashboard_Widget_Media() {
  if(of_get_option( 'opt_dashboard_widget_media' )){
    wp_add_dashboard_widget('Custom_Dashboard_Widget_Media', '<i class="fa fa-file"></i> Media', 'Custom_Dashboard_Widget_Media_get_content');
  }
}

add_action('admin_menu', 'Custom_Dashboard_Widget_Media_admin');
function Custom_Dashboard_Widget_Media_get_content() {

  echo '<ul>';
  echo '<li style="display: inline;">Zip ('. zip_count() . ") &nbsp;&nbsp;|&nbsp;&nbsp;</li>"; 
  echo '<li style="display: inline;">Photo ('. img_count() . ") &nbsp;&nbsp;|&nbsp;&nbsp;</li>";
  echo '<li style="display: inline;">Word ('. word_count() . ") &nbsp;&nbsp;|&nbsp;&nbsp;</li>"; 
  echo '<li style="display: inline;">Excel ('. xls_count() . ") &nbsp;&nbsp;|&nbsp;&nbsp;</li>"; 
  echo '<li style="display: inline;">Powerpoint ('. ppt_count() . ") &nbsp;&nbsp;|&nbsp;&nbsp;</li>"; 
  echo '<li style="display: inline;">Audio ('. mp3_count() . ") &nbsp;&nbsp;|&nbsp;&nbsp;</li>"; 
  echo '<li style="display: inline;">Pdf ('. pdf_count() . ")</li>"; 
  echo '<li>All ('. (zip_count()+img_count()+pdf_count()+word_count()+xls_count()+ppt_count()+mp3_count()) . ")</li>";    
  echo '</ul>';

  echo '<div class="progress">
  <div class="progress-bar progress-bar-success" style="width:'.(zip_count()*100)/(zip_count()+img_count()+pdf_count()+word_count()+xls_count()+ppt_count()+mp3_count()).'%">
    <span class="sr-only fa fa-file-archive-o"><br/>zip</span>
  </div>
  <div class="progress-bar progress-bar-warning" style="width:'.(img_count()*100)/(zip_count()+img_count()+pdf_count()+word_count()+xls_count()+ppt_count()+mp3_count()).'%">
    <span class="sr-only fa fa-file-image-o"><br/>photo</span>
  </div>
  <div class="progress-bar progress-bar-danger" style="width:'.(pdf_count()*100)/(zip_count()+img_count()+pdf_count()+word_count()+xls_count()+ppt_count()+mp3_count()).'%">
    <span class="sr-only fa fa-file-pdf-o"><br/>pdf</span>
  </div>
  <div class="progress-bar progress-bar-info" style="width:'.(word_count()*100)/(zip_count()+img_count()+pdf_count()+word_count()+xls_count()+ppt_count()+mp3_count()).'%">
    <span class="sr-only fa fa-file-word-o"><br/>doc</span>
  </div>
  <div class="progress-bar progress-bar-success" style="width:'.(xls_count()*100)/(zip_count()+img_count()+pdf_count()+word_count()+xls_count()+ppt_count()+mp3_count()).'%">
    <span class="sr-only fa fa-file-excel-o"><br/>xls</span>
  </div>
  <div class="progress-bar progress-bar-warning" style="width:'.(ppt_count()*100)/(zip_count()+img_count()+pdf_count()+word_count()+xls_count()+ppt_count()+mp3_count()).'%">
    <span class="sr-only fa fa-file-powerpoint-o"><br/>ppt</span>
  </div>
  <div class="progress-bar progress-bar-danger" style="width:'.(mp3_count()*100)/(zip_count()+img_count()+pdf_count()+word_count()+xls_count()+ppt_count()+mp3_count()).'%">
    <span class="sr-only fa fa-file-audio-o"><br/>mp3</span>
  </div>
</div>';

$query_images_args = array(
  'post_type' => 'attachment', 'post_mime_type' =>'image', 'post_status' => 'inherit', 'posts_per_page' => -1,
  );

$query_images = new WP_Query( $query_images_args );
$images = array();

echo '<ul id="flexiselDemo1">';

foreach ( $query_images->posts as $image) {
  echo '<li><img src="'.wp_get_attachment_url( $image->ID ).'" /><p style="font-size:9px;">'.time_elapsed_string($image->post_date_gmt, true).'</p></li>';
}
echo '</ul><div style="clear:both;"></div>';
}


function time_elapsed_string($datetime, $full = false) {
  $now = new DateTime;
  $ago = new DateTime($datetime);
  $diff = $now->diff($ago);

  $diff->w = floor($diff->d / 7);
  $diff->d -= $diff->w * 7;

  $string = array(
    'y' => 'year',
    'm' => 'month',
    'w' => 'week',
    'd' => 'day',
    'h' => 'hour',
    'i' => 'min',
    's' => 'sec',
    );
  foreach ($string as $k => &$v) {
    if ($diff->$k) {
      $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
    } else {
      unset($string[$k]);
    }
  }

  if (!$full) $string = array_slice($string, 0, 1);
  return $string ? implode(', ', $string) . ' ago' : 'just now';
}

/******************* end widget MEDIA *******************/

/* slider photo */
add_action( 'admin_enqueue_scripts', 'mw_enqueue_flexisel' );
function mw_enqueue_flexisel( $hook_suffix ) {
  wp_enqueue_script( 'flexisel', plugins_url('../js/jquery.flexisel.js', __FILE__ ), false, true );
}
/* slider photo */

