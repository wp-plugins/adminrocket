<?

// START add new types in MEDIA
function custom_mime_types( $post_mime_types ) {
        $post_mime_types['application/msword'] = array( __( 'Word' ), __( 'Manage DOCs' ), _n_noop( 'Word <span class="count">(%s)</span>', 'DOC <span class="count">(%s)</span>' ) );
        $post_mime_types['application/vnd.ms-excel'] = array( __( 'Excel' ), __( 'Manage XLSs' ), _n_noop( 'Excel <span class="count">(%s)</span>', 'XLSs <span class="count">(%s)</span>' ) );
        $post_mime_types['application/pdf'] = array( __( 'PDF' ), __( 'Manage PDFs' ), _n_noop( 'PDF <span class="count">(%s)</span>', 'PDFs <span class="count">(%s)</span>' ) );
        $post_mime_types['application/zip'] = array( __( 'ZIP' ), __( 'Manage ZIPs' ), _n_noop( 'ZIP <span class="count">(%s)</span>', 'ZIPs <span class="count">(%s)</span>' ) );
        $post_mime_types['application/vnd.ms-powerpoint'] = array( __( 'Powerpoint' ), __( 'Manage Powerpoints' ), _n_noop( 'Powerpoint <span class="count">(%s)</span>', 'Powerpoints <span class="count">(%s)</span>' ) );
        return $post_mime_types;
}
add_filter( 'post_mime_types', 'custom_mime_types' );
// END add new types in MEDIA

