<?

//
// si radius pour les postbox
// 
add_action( 'admin_head', 'fb_radius_postbox' );
function fb_radius_postbox(){
    if(of_get_option( 'opt_postbox_radius' )){
     ?>
        <style type="text/css">
            .postbox, .postbox h3{
                -webkit-border-radius: <?php echo of_get_option( 'opt_postbox_radius', '0px' ) ?> !important;
                -moz-border-radius: <?php echo of_get_option( 'opt_postbox_radius', '0px' ) ?> !important;
                border-radius: <?php echo of_get_option( 'opt_postbox_radius', '0px' ) ?> !important;
            }
        </style>
    <?php 
    }
}


//
// si postbox background color
// 
add_action( 'admin_head', 'fb_background_postbox' );
function fb_background_postbox(){
    if(of_get_option( 'opt_postbox_bgc' )){
     ?>
        <style type="text/css">
            .postbox, .widgets-holder-wrap {
                    background:<?php echo of_get_option( 'opt_postbox_bgc', '#FFF' ) ?> !important;
                }
        </style>
    <?php 
    }
}
