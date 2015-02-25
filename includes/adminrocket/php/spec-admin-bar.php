<?

//
// move admin bar to bottom
// 
add_action( 'admin_head', 'fb_move_admin_bar' );
function fb_move_admin_bar(){
    if(of_get_option( 'opt_wpadminbar_bottom' )){
       ?>
       <style type="text/css">
        body.admin-bar #wphead {
            padding-top: 0;
        }
        body.admin-bar #footer {
            padding-bottom: 28px;
        }
        #wpadminbar {
            top: auto !important;
            bottom: 0;
        }
        #wpadminbar .quicklinks .menupop ul {
            bottom: 100px;
        }
        #wpadminbar .ab-submenu, #wp-admin-bar-wp-logo{
            display:none;
        }
        #wpcontent {
            padding-top: 0px !important;
        }
        #adminmenuwrap{
            margin-top:10px !important;
        }
        #wpfooter {
            margin-bottom: 40px;
        }
    </style>
    <?php 
}
else{
    ?>
    <style type="text/css">
        #wpcontent {
            margin-top: -32px;
            padding-top: 32px;
        }
        #adminmenuwrap{
            margin-top:43px;
        }

    </style>
    <?php 
}
}

//
// remove admin bar to bottom
// 
add_action( 'admin_head', 'fb_remove_admin_bar' );
function fb_remove_admin_bar(){
    if(of_get_option( 'opt_button_bgc' )){
       ?>
       <style type="text/css">
        .CustomButtonWP, .button, .wrap h2 a, .button-primary{
            background-color: <?php echo of_get_option( 'opt_button_bgc', '#fff' ) ?> !important;
        }
    </style>
    <?php 
}
if(of_get_option( 'opt_button_color' )){
   ?>
   <style type="text/css">
    .CustomButtonWP, .button, .wrap h2 a, .button-primary{
        color:<?php echo of_get_option( 'opt_button_color', '#fff' ); ?> !important;
    }
</style>
<?php 
}
}



//
// hide adminbar
// 
add_action( 'admin_head', 'fb_admin_bar_hide_screen' );
function fb_admin_bar_hide_screen(){
    if(of_get_option( 'opt_wpadminbar_hide' )){
       ?>
       <style type="text/css">
        #wpadminbar{
            display: none;
        }
        #wpcontent {
            margin-top: -62px;
        }
    </style>
    <?php 
}
}


//
// admin bar width auto
// 
add_action( 'admin_head', 'fb_admin_bar_width_auto' );
function fb_admin_bar_width_auto(){
    if(of_get_option( 'opt_wpadminbar_width_auto' )){
       ?>
       <style type="text/css">
        #wpadminbar{
            width:auto !important;
        }
    </style>
    <?php 
}
}


//
// WP Adminbar Background
// 
add_action( 'admin_head', 'fb_bg_admin_bar' );
function fb_bg_admin_bar(){
    if(of_get_option( 'opt_wpadminbar_bgc' )){
       ?>
       <style type="text/css">
           #wpadminbar {
            background-color: <?php echo of_get_option( 'opt_wpadminbar_bgc', '#222' ) ?> !important;
        }
    </style>
    <?php 
}
}


//
// WP Adminbar font color
// 
add_action( 'admin_head', 'fb_font_admin_bar' );
function fb_font_admin_bar(){
    if(of_get_option( 'opt_wpadminbar_txtc' )){
       ?>
       <style type="text/css">
           #wpadminbar span, #wpadminbar a{
            color: <?php echo of_get_option( 'opt_wpadminbar_txtc', '#FFF' ) ?> !important;
        }
        #wpadminbar #adminbarsearch:before, #wpadminbar .ab-icon:before, #wpadminbar .ab-item:before{
            color: <?php echo of_get_option( 'opt_wpadminbar_txtc', '#FFF' ) ?> !important;
        }
    </style>
    <?php 
}
}


