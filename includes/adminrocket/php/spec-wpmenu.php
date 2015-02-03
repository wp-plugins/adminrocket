<?

//
// wp menu background
// 
add_action( 'admin_head', 'fb_wpmenu_bgc' );
function fb_wpmenu_bgc(){
    if(of_get_option( 'opt_wpmenu_bg' )){
     ?>
        <style type="text/css">
            #adminmenuwrap, #adminmenu {
                    background-color: <?php echo of_get_option( 'opt_wpmenu_bg', '#fff' ) ?> ;
                }
        </style>
    <?php 
    }
}


//
// wp menu current element
// 
add_action( 'admin_head', 'fb_wpmenu_currentelemt' );
function fb_wpmenu_currentelemt(){
    if(of_get_option( 'opt_wpmenu_current_elemt' )){
     ?>
        <style type="text/css">
             #adminmenu .wp-menu-open, #adminmenu li.current a.menu-top{
                    background-color: <?php echo of_get_option( 'opt_wpmenu_current_elemt', '#0074a2' ) ?> ;
                }
        </style>
    <?php 
    }
}


//
// wp menu picto color
// 
add_action( 'admin_head', 'fb_wpmenu_pictocolor' );
function fb_wpmenu_pictocolor(){
    if(of_get_option( 'opt_wpmenu_picto' )){
     ?>
        <style type="text/css">
             #adminmenu div.wp-menu-image:before{
                    color: <?php echo of_get_option( 'opt_wpmenu_picto', '#FFF' ) ?> !important;
                }
        </style>
    <?php 
    }
}


//
// wp submenu background
// 
add_action( 'admin_head', 'fb_wpmenu_subbg' );
function fb_wpmenu_subbg(){
    if(of_get_option( 'opt_wpmenu_submenu_bg' )){
     ?>
        <style type="text/css">
             #adminmenu .wp-has-current-submenu .wp-submenu, .wp-submenu-wrap{
                    background-color: <?php echo of_get_option( 'opt_wpmenu_submenu_bg', '#333' ) ?> !important;
                }
            #adminmenu li>a.menu-top { background-color: transparent !important; }
            #adminmenu li>a.menu-top:hover { background-color: <?php echo of_get_option( 'opt_wpmenu_submenu_bg', '#333' ) ?> !important; }
        </style>
    <?php 
    }
}


//
// wp submenu font color
// 
add_action( 'admin_head', 'fb_wpmenu_sub_font_color' );
function fb_wpmenu_sub_font_color(){
    if(of_get_option( 'opt_wpmenu_submenu_fontcolor' )){
     ?>
        <style type="text/css">
            #adminmenu .wp-submenu a {
                    color: <?php echo of_get_option( 'opt_wpmenu_submenu_fontcolor', '#bbbbbb' ) ?> !important;
            }
        </style>
    <?php 
    }
}



//
// wp menu font color
// 
add_action( 'admin_head', 'fb_wpmenu_fontcolor' );
function fb_wpmenu_fontcolor(){
    if(of_get_option( 'opt_wpmenu_font' )){
     ?>
        <style type="text/css">
             .wp-menu-name{
                    color: <?php echo of_get_option( 'opt_wpmenu_font', '#FFF' ) ?> !important;
                }
        </style>
    <?php 
    }
}

//
// wp menu font color
// 
add_action( 'admin_head', 'fb_wpmenu_fontcolor_active' );
function fb_wpmenu_fontcolor_active(){
    if(of_get_option( 'opt_wpmenu_font_active' )){
     ?>
        <style type="text/css">
             .current{
                    color: <?php echo of_get_option( 'opt_wpmenu_font_active', '#FFF' ) ?> !important;
                }
        </style>
    <?php 
    }
}