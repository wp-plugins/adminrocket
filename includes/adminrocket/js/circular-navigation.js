(function($) {
	$(document).ready(function() {


    // START Circular Navigation

    $('#wpwrap').append('<button class="cn-button" id="cn-button">+</button> \
    	<div class="cn-wrapper" id="cn-wrapper"> \
    	<ul> \
    	<li><a href="post-new.php"><span class="fa fa-pencil-square-o"></span><br/><span class="circularlabel">Post</span></a></li> \
    	<li><a href="edit-tags.php?taxonomy=category"><span class="fa fa-tag"></span><br/><span class="circularlabel">Category</span></a></li> \
    	<li><a href="post-new.php?post_type=page"><span class="fa fa-book"></span><br/><span class="circularlabel">Page</span></a></li> \
    	<li><a href="upload.php"><span class="fa fa-picture-o"></span><br/><span class="circularlabel">Media</span></a></li> \
    	<li><a href="user-new.php"><span class="fa fa-user"></span><br/><span class="circularlabel">User</span></a></li> \
    	</ul> \
    	</div> \
    	<div id="cn-overlay" class="cn-overlay"></div>');

    var button = document.getElementById('cn-button'),
    wrapper = document.getElementById('cn-wrapper'),
    overlay = document.getElementById('cn-overlay');
        //open and close menu when the button is clicked
        var open = false;
        button.addEventListener('click', handler, false);
        wrapper.addEventListener('click', cnhandle, false);

        function cnhandle(e) {
        	e.stopPropagation();
        }

        function handler(e) {
        	if (!e) var e = window.event;
            e.stopPropagation(); //so that it doesn't trigger click event on document
            if (!open) {
            	openNav();
            } else {
            	closeNav();
            }
        }

        function openNav() {
        	open = true;
        	button.innerHTML = "-";
        	classie.add(overlay, 'on-overlay');
        	classie.add(wrapper, 'opened-nav');
        }

        function closeNav() {
        	open = false;
        	button.innerHTML = "+";
        	classie.remove(overlay, 'on-overlay');
        	classie.remove(wrapper, 'opened-nav');
        }
        document.addEventListener('click', closeNav);

        // END Circular Navigation

        $('#cn-button').addClass('animated rubberBand');

    })
})(jQuery);
