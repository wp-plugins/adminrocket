<?

//
// logo on menu wp
// 
add_action( 'admin_head', 'fb_logo_menuwp' );
function fb_logo_menuwp(){
    if(of_get_option( 'opt_body_logoupload' )){
       ?>
       <style type="text/css">
        #logoCustom{
            background-image: url( <?php echo of_get_option( 'opt_body_logoupload', '')?> ) !important;
        }
        </style>
        <?php 
        }
    }

//
// body background color
// 
    add_action( 'admin_head', 'fb_body_bgc' );
    function fb_body_bgc(){
        if(of_get_option( 'opt_body_bgc' )){
           ?>
           <style type="text/css">
            #wpwrap{
                background-color: <?php echo of_get_option( 'opt_body_bgc', '#fff' ); ?> !important;
            }
        </style>
        <?php 
    }
}


//
// body background image
// 
add_action( 'admin_head', 'fb_body_bgi' );
function fb_body_bgi(){
    if(of_get_option( 'opt_body_bgupload' )){
       ?>
       <style type="text/css">
        #wpwrap{
            background-image: url( <?php echo of_get_option( 'opt_body_bgupload', '' )?> );
            background-size: 100% !important;
            background-repeat: no-repeat !important;
            background-attachment: fixed !important;
            -webkit-background-size: cover !important; 
            background-size: cover !important;
        }
    </style>
    <?php 
}
}


//
// body background pattern
// 
add_action( 'admin_head', 'fb_body_bgpattern' );
function fb_body_bgpattern(){
    if(of_get_option( 'opt_body_bguploadpattern' )){
       ?>
       <style type="text/css">
        #wpwrap{
            background-image: url( <?php echo of_get_option( 'opt_body_bguploadpattern', '' )?> );
            background-repeat: repeat !important;
        }
    </style>
    <?php 
}
}



//
// body font titles
// 
add_action( 'admin_head', 'fb_font_titles' );
function fb_font_titles(){
    if(of_get_option( 'opt_googlefont_title' )){
        $fontstyle = of_get_option( 'opt_googlefont_title' );
        ?>
        <style type="text/css">
            h1,h2,h3,h4,h5,h6{
                font-family: <?php echo of_get_option( 'opt_googlefont_title' ) ?> !important;
            }
        </style>
        <?php 
    }
}


//
// body font titles
// 
add_action( 'admin_head', 'fb_font_menu' );
function fb_font_menu(){
    if(of_get_option( 'opt_googlefont_menu' )){
        $menustyle = of_get_option( 'opt_googlefont_menu' );
        ?>
        <style type="text/css">
            #adminmenu{
                font-family: <?php echo of_get_option( 'opt_googlefont_menu' ) ?> !important;
            }
        </style>
        <?php 
    }
}



//
// h2 title of pages background color
// 
add_action( 'admin_head', 'fb_titlepage_bgc' );
function fb_titlepage_bgc(){
    if(of_get_option( 'opt_h2_bgc' )){
       ?>
       <style type="text/css">
        .wrap h2 { 
            background-color: <?php echo of_get_option( 'opt_h2_bgc', '#fff' ); ?>;
            margin-bottom:8px;
        }
        .postbox-container h3{
            background-color: <?php echo of_get_option( 'opt_h2_bgc', '#fff' ); ?>;
        }
    </style>
    <?php 
}
}

//
// h2 title of pages background color radius
// 
add_action( 'admin_head', 'fb_titlepage_bgc_radius' );
function fb_titlepage_bgc_radius(){
    if(of_get_option( 'opt_h2_radius' )){
       ?>
       <style type="text/css">
        .wrap h2 { 
            -webkit-border-radius: <?php echo of_get_option( 'opt_h2_radius', '10px' ); ?>;
            -moz-border-radius: <?php echo of_get_option( 'opt_h2_radius', '10px' ); ?>;
            border-radius: <?php echo of_get_option( 'opt_h2_radius', '10px' ); ?>;
        }

    </style>
    <?php 
}
}


//
// listing posts background delimiter
// 
add_action( 'admin_head', 'fb_listingposts_delimiter_bgc' );
function fb_listingposts_delimiter_bgc(){
    if(of_get_option( 'opt_posts_listing_bgc' )){
       ?>
       <style type="text/css">
        .alternate, .input_section, #screen-meta {
            background:<?php echo of_get_option( 'opt_posts_listing_bgc', '#FFF' ) ?> !important;
        } 
    </style>
    <?php 
}
}


//
// buttons background color
// 
add_action( 'admin_head', 'fb_button_bgc' );
function fb_button_bgc(){
    if(of_get_option( 'opt_button_bgc' )){
       ?>
       <style type="text/css">
        .CustomButtonWP, .button, .wrap h2 a, .button-primary{
            background-color: <?php echo of_get_option( 'opt_button_bgc', '#FFF' ) ?> !important;
        }
    </style>
    <?php 
}
}


//
// postbox opacity
// 
add_action( 'admin_head', 'fb_postbox_opacity' );
function fb_postbox_opacity(){
    if(of_get_option( 'opt_postbox_bgopacity' )){
        $hexrgba = hex2rgb(of_get_option( 'opt_postbox_bgc' )).','.of_get_option( 'opt_postbox_bgopacity' );
        ?>
        <style type="text/css">
            .postbox, .widgets-holder-wrap {
                background:rgba(<?php echo $hexrgba ?>) !important;

            }
        </style>
        <?php
    }
}

//
// convert #hex to rgba for opacity (fb_postbox_opacity function)
// 
function hex2rgb($hex) {
 $hex = str_replace("#", "", $hex);

 if(strlen($hex) == 3) {
  $r = hexdec(substr($hex,0,1).substr($hex,0,1));
  $g = hexdec(substr($hex,1,1).substr($hex,1,1));
  $b = hexdec(substr($hex,2,1).substr($hex,2,1));
} else {
  $r = hexdec(substr($hex,0,2));
  $g = hexdec(substr($hex,2,2));
  $b = hexdec(substr($hex,4,2));
}
$rgb = array($r, $g, $b);
   return implode(",", $rgb); // returns the rgb values separated by commas
   //return $rgb; // returns an array with the rgb values
}


//
// loading google font title & menu
// 
add_action('admin_enqueue_scripts', 'fb_insert_googlefont');
add_action('login_enqueue_scripts', 'fb_insert_googlefont');
function fb_insert_googlefont(){
    if(of_get_option( 'opt_googlefont_title' )){
        $pizzat  = of_get_option( 'opt_googlefont_title' );
        $piecest = explode(",", $pizzat);
        wp_register_style('opt_googlefont_title', 'http://fonts.googleapis.com/css?family='.$piecest[0]);
        wp_enqueue_style( 'opt_googlefont_title');
    }

    if(of_get_option( 'opt_googlefont_menu' )){
        $pizzatt  = of_get_option( 'opt_googlefont_menu' );
        $piecestt = explode(",", $pizzatt);
        wp_register_style('opt_googlefont_menu', 'http://fonts.googleapis.com/css?family='.$piecestt[0]);
        wp_enqueue_style( 'opt_googlefont_menu');
    }
}


//
// overide logo width
// 
add_action( 'admin_head', 'fb_logo_menu_width' );
function fb_logo_menu_width(){
    if(of_get_option( 'opt_logo_width' )){
        ?>
        <style type="text/css">
            #logoCustom{
                width: <?php echo of_get_option( 'opt_logo_width', '')?>px !important;
            }
        </style>
        <?php
    }
}

//
// overide logo height
// 
add_action( 'admin_head', 'fb_logo_menu_height' );
function fb_logo_menu_height(){
    if(of_get_option( 'opt_logo_height' )){
        ?>
        <style type="text/css">
            #logoCustom{
                height: <?php echo of_get_option( 'opt_logo_height', '')?>px !important;
            }
        </style>
        <?php
    }
}


//
// wpmenu opacity
// 
add_action( 'admin_head', 'fb_wpmenu_opacity' );
function fb_wpmenu_opacity(){
    if(of_get_option( 'opt_wpmenu_opacity' )){
        $hexrgbamenu = hex2rgb(of_get_option( 'opt_wpmenu_bg' )).','.of_get_option( 'opt_wpmenu_opacity' );
        $hexrgbacurrent = hex2rgb(of_get_option( 'opt_wpmenu_current_elemt' )).','.of_get_option( 'opt_wpmenu_opacity' );
        ?>
        <style type="text/css">
            #adminmenuwrap{
                background:rgba(<?php echo $hexrgbamenu ?>) !important;
            }
            #adminmenu{
                background:transparent !important;
            }
            #adminmenu .wp-menu-open, #adminmenu li.current a.menu-top{
                background:rgba(<?php echo $hexrgbacurrent ?>) !important;
            }
        </style>
        <?php
    }
}

//
// adminbar opacity
// 
add_action( 'admin_head', 'fb_admin_bar_opacity' );
function fb_admin_bar_opacity(){
    if(of_get_option( 'opt_wpadminbar_opacity' )){
        $hexrgbaadminbar = hex2rgb(of_get_option( 'opt_wpadminbar_bgc' )).','.of_get_option( 'opt_wpadminbar_opacity' );
        ?>
        <style type="text/css">
          #wpadminbar {
            background:rgba(<?php echo $hexrgbaadminbar ?>) !important;
        }
    </style>
    <?php 
}
}



//
// h2 bg opacity
// 
add_action( 'admin_head', 'fb_admintitlepages_opacity' );
function fb_admintitlepages_opacity(){
    if(of_get_option( 'opt_h2_bgopacity' )){
        $hexrgbatitlepages = hex2rgb(of_get_option( 'opt_h2_bgc' )).','.of_get_option( 'opt_h2_bgopacity' );
        ?>
        <style type="text/css">
            .wrap h2 { 
                background:rgba(<?php echo $hexrgbatitlepages ?>) !important;
            }
        </style>
        <?php 
    }
}



//
// post list delimiter EVEN bgc opacity
// 
add_action( 'admin_head', 'fb_postdelimiter_opacity' );
function fb_postdelimiter_opacity(){
    if(of_get_option( 'opt_posts_listing_bgopacity' )){
        $hexrgbadelimiter = hex2rgb(of_get_option( 'opt_posts_listing_bgc' )).','.of_get_option( 'opt_posts_listing_bgopacity' );
        ?>
        <style type="text/css">
            .alternate, .input_section, #screen-meta, .odd  { 
                background:rgba(<?php echo $hexrgbadelimiter ?>) !important;
            }
        </style>
        <?php 
    }
}




//
// post list delimiter ODD bgc simple background
// 
add_action( 'admin_head', 'fb_listingposts_delimiterodd_bgc' );
function fb_listingposts_delimiterodd_bgc(){
    if(of_get_option( 'opt_posts_listing_second_bgc' )){
       ?>
       <style type="text/css">
        #the-list{
            background:<?php echo of_get_option( 'opt_posts_listing_second_bgc', '#FFF' ) ?> !important;
        } 
        #the-comment-list{
            background:<?php echo of_get_option( 'opt_posts_listing_second_bgc', '#FFF' ) ?> !important;
        } 
    </style>
    <?php 
}
}

//
// post list delimiter ODD bgc opacity
// 
add_action( 'admin_head', 'fb_postdelimiterodd_opacity' );
function fb_postdelimiterodd_opacity(){
    if(of_get_option( 'opt_posts_listing_second_bgopacity' )){
        $hexrgbadelimiterodd = hex2rgb(of_get_option( 'opt_posts_listing_second_bgc' )).','.of_get_option( 'opt_posts_listing_second_bgopacity' );
        ?>
        <style type="text/css">
            #the-list{ 
                background:rgba(<?php echo $hexrgbadelimiterodd ?>) !important;
            }
            #the-comment-list{ 
                background:rgba(<?php echo $hexrgbadelimiterodd ?>) !important;
            }
        </style>
        <?php 
    }
}



//
// post list delimiter font color
// 
add_action( 'admin_head', 'fb_postdelimiter_fontcolor' );
function fb_postdelimiter_fontcolor(){
    if(of_get_option( 'opt_listing_fontcolor' )){
       ?>
       <style type="text/css">
        .wp-list-table td, .wp-list-table a, .wp-list-table thead th, .wp-list-table tfoot th  { 
            color:<?php echo of_get_option( 'opt_listing_fontcolor' ) ?> !important;
        }
    </style>
    <?php 
}
}




//
// circular navigation button + background color
// 
add_action( 'admin_head', 'fb_circularnav_bgc' );
function fb_circularnav_bgc(){
    if(of_get_option( 'opt_circular_navigation_button_bgc' )){
       ?>
       <style type="text/css">
        .cn-button  { 
            background:<?php echo of_get_option( 'opt_circular_navigation_button_bgc','#19AEFF' ) ?> !important;
            z-index: 9999999 !important;
        }
        </style>
            <?php 
        }
    }

//
// circular navigation font color
// 
    add_action( 'admin_head', 'fb_circularnav_fontcolor' );
    function fb_circularnav_fontcolor(){
        if(of_get_option( 'opt_circular_navigation_button_font' )){
           ?>
           <style type="text/css">
            .cn-button  { 
                color:<?php echo of_get_option( 'opt_circular_navigation_button_font','#FFF' ) ?> !important;
                z-index: 9999999 !important;
            }
        </style>
        <?php 
    }
}


//
// circular navigation submenu first
// 
add_action( 'admin_head', 'fb_circularnav_submenu_bgc_first' );
function fb_circularnav_submenu_bgc_first(){
    if(of_get_option( 'opt_circular_navigation_submenu_bg_first' )){
       ?>
       <style type="text/css">
        .csstransforms .cn-wrapper li:nth-child(odd) a{
            background:<?php echo of_get_option( 'opt_circular_navigation_submenu_bg_first','#BBE767' ) ?> !important;
        }
    </style>
    <?php 
}
}

//
// circular navigation submenu second
// 
add_action( 'admin_head', 'fb_circularnav_submenu_bgc_second' );
function fb_circularnav_submenu_bgc_second(){
    if(of_get_option( 'opt_circular_navigation_submenu_bg_second' )){
       ?>
       <style type="text/css">
        .csstransforms .cn-wrapper li:nth-child(even) a{
            background:<?php echo of_get_option( 'opt_circular_navigation_submenu_bg_second','#AFD440' ) ?> !important;
        }
    </style>
    <?php 
}
}


//
// circular navigation submenu item font color
// 
add_action( 'admin_head', 'fb_circularnav_submenu_font_color' );
function fb_circularnav_submenu_font_color(){
    if(of_get_option( 'opt_circular_navigation_submenu_font' )){
       ?>
       <style type="text/css">
        #cn-wrapper .fa, #cn-wrapper .circularlabel{
            color:<?php echo of_get_option( 'opt_circular_navigation_submenu_font','#FFF' ) ?> !important;
        }
    </style>
    <?php 
}
}



//
// circle navigation overlay background
// 
add_action( 'admin_head', 'fb_circlenav_overlay_bgc' );
function fb_circlenav_overlay_bgc(){
    if(of_get_option( 'opt_circular_overlay_bgc' )){
        $hexrgbacn_bgc = hex2rgb(of_get_option( 'opt_circular_overlay_bgc' )).','.of_get_option( 'opt_circular_overlay_opacity', '' );
        ?>
        <style type="text/css">
           .cn-overlay{
            background:rgba(<?php echo $hexrgbacn_bgc ?>) !important;
        }
    </style>
    <?php 
}
}


//
// body font color
// 
add_action( 'admin_head', 'fb_body_content_font_color_default' );
function fb_body_content_font_color_default(){
    if(of_get_option( 'opt_body_font_color' )){
       ?>
       <style type="text/css">
        body.index-php, body.index-php .wrap a  { 
            color:<?php echo of_get_option( 'opt_body_font_color' ) ?> !important;
        }
    </style>
    <?php 
}
}