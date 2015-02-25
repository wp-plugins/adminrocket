<?
//
//Add footer left section
//
add_filter('admin_footer_text', 'left_admin_footer_text_output');
function left_admin_footer_text_output($text) {
	if(of_get_option( 'opt_footer_left' )){
		if(of_get_option( 'opt_footer_font_color' )){
	    	?>
	           <style type="text/css">
	            #wpfooter{
	                color: <?php echo of_get_option( 'opt_footer_font_color', '#fff' ); ?> !important;
	            }
	        </style>
	        <?php 
	    }
	    ?>
        <style type="text/css">
            #wpfooter{
                margin-left: 0px !important;
                padding: 10px 180px !important;
            }
        </style>
        <?php  
    	return of_get_option( 'opt_footer_left' );
    } 
}

//
//Add footer right section
//
add_filter('update_footer', 'right_admin_footer_text_output', 11);
function right_admin_footer_text_output($text) {
    if(of_get_option( 'opt_footer_right' )){
    	if(of_get_option( 'opt_footer_font_color' )){
	    	?>
	           <style type="text/css">
	            #wpfooter{
	                color: <?php echo of_get_option( 'opt_footer_font_color', '#fff' ); ?> !important;
	            }
	        </style>
	        <?php 
	    } 
	    ?>
        <style type="text/css">
            #wpfooter{
                margin-left: 0px !important;
                padding: 10px 180px !important;
            }
        </style>
        <?php  
    	return of_get_option( 'opt_footer_right' );
    } 
}

