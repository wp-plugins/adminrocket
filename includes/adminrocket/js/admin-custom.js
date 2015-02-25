(function($) {
	$(document).ready(function() {

		$("#flexiselDemo1").flexisel({
			visibleItems: 4,
			clone: false
		});

    	//add logo custom
    	$('#adminmenu li:eq(0)').before("<a href='index.php'><div id='logoCustom'></div></a>");

        //cutombutton
        $('.subsubsub li a').addClass("CustomButtonWP");

        //font-awesome picto
        $('.logo-tab').append('&nbsp;&nbsp;<i class="fa fa-picture-o"></i>');
        $('.background-tab').append('&nbsp;&nbsp;<i class="fa fa-desktop"></i>');
        $('.postbox-tab').append('&nbsp;&nbsp;<i class="fa fa-lightbulb-o"></i>');
        $('.colors-tab').append('&nbsp;&nbsp;<i class="fa fa-magic"></i>');
        $('.buttons-tab').append('&nbsp;&nbsp;<i class="fa fa-square"></i>');
        $('.menu-tab').append('&nbsp;&nbsp;<i class="fa fa-list-ul"></i>');
        $('.adminbar-tab').append('&nbsp;&nbsp;<i class="fa fa-ellipsis-v"></i>');
        $('.dashboard-tab').append('&nbsp;&nbsp;<i class="fa fa-tachometer"></i>');
        $('.footer-tab').append('&nbsp;&nbsp;<i class="fa fa-code"></i>');
        $('.fonts-tab').append('&nbsp;&nbsp;<i class="fa fa-font"></i>');
        $('.animations-tab').append('&nbsp;&nbsp;<i class="fa fa-star"></i>');
        $('.security-tab').append('&nbsp;&nbsp;<i class="fa fa-unlock-alt"></i>');
        $('.circularnav-tab').append('&nbsp;&nbsp;<i class="fa fa-plus-circle"></i>');

        //comments counter on adminbar
        if ($('.pending-count').html() != 0) {
        	$('#wp-admin-bar-comments .ab-item').addClass('animated tada');
        }

        //Twitter feed
        ! function(d, s, id) {
        	var js, fjs = d.getElementsByTagName(s)[0],
        	p = /^http:/.test(d.location) ? 'http' : 'https';
        	if (!d.getElementById(id)) {
        		js = d.createElement(s);
        		js.id = id;
        		js.src = p + "://platform.twitter.com/widgets.js";
        		fjs.parentNode.insertBefore(js, fjs);
        	}
        }(document, "script", "twitter-wjs");

    })//end document.ready
})(jQuery);
