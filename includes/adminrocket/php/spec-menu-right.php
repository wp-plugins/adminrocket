<?

//
//move menu sidebar right : if = RIGHT, else = LEFT
//
add_action('admin_head','move_admin_sidebar');
function move_admin_sidebar() {
	if(of_get_option( 'opt_wpmenu_right' )){
		?>
		<style>
			/*html body #adminmenuback { display: none; float: right !important; }*/
			html body #adminmenuwrap { float: right !important; right: 0; }
			#wpcontent { margin-right: 160px !important; margin-left: 0px !important; }
			#adminmenuwrap{
				-webkit-border-top-left-radius: 5px;
				-webkit-border-bottom-left-radius: 5px;
				-moz-border-radius-topleft: 5px;
				-moz-border-radius-bottomleft: 5px;
				border-top-left-radius: 5px;
				border-bottom-left-radius: 5px;
				-webkit-border-top-right-radius: 0px;
				-webkit-border-bottom-right-radius: 0px;
				-moz-border-radius-topright: 0px;
				-moz-border-radius-bottomright: 0px;
				border-top-right-radius: 0px;
				border-bottom-right-radius: 0px;
				margin-top:10px;
			}
			#adminmenu .wp-submenu{
				left:-160px;
			}
			.wp-menu-open .wp-submenu{
				left:0px !important;
			}
		</style>
		<?
	}
	else{
		?>
		<style>
			html body #adminmenuback { display: none; float: left !important; }
			html body #adminmenuwrap { float: left !important; left: 0; }
			#wpcontent { margin-left: 160px !important; margin-right: 0px !important; }
			#adminmenuwrap{
				-webkit-border-top-right-radius: 5px;
				-webkit-border-bottom-right-radius: 5px;
				-moz-border-radius-topright: 5px;
				-moz-border-radius-bottomright: 5px;
				border-top-right-radius: 5px;
				border-bottom-right-radius: 5px;
				-webkit-border-top-left-radius: 0px;
				-webkit-border-bottom-left-radius: 0px;
				-moz-border-radius-topleft: 0px;
				-moz-border-radius-bottomleft: 0px;
				border-top-left-radius: 0px;
				border-bottom-left-radius: 0px;
				margin-top:10px;
			}
			#adminmenu .wp-submenu{
				left:160px;
			}
		</style>
		<?
	}
}
