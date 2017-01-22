<!-- Sticky Navigation on Scroll -->
jQuery(function() {
    // grab the initial top offset of the navigation
    var sticky_navigation_offset_top = jQuery('#site-navigation').offset().top;
     
    // our function that decides whether the navigation bar should have "fixed" css position or not.
    var sticky_navigation = function(){
        var scroll_top = jQuery(window).scrollTop(); // our current vertical position from the top
         
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative
        if (scroll_top > sticky_navigation_offset_top) {
            jQuery('#site-navigation').css({ 'position': 'fixed', 'top':0 });
        } else {
            jQuery('#site-navigation').css({ 'position': 'relative' });
        }  
    };
     
    // run our function on load
    sticky_navigation();
     
    // and run it again every time you scroll
    jQuery(window).scroll(function() {
         sticky_navigation();
    });
});

jQuery(document).ready(function() {
	jQuery(".thinking-select-categories h3").click(function() {
		jQuery(".thinking-select-categories ul").toggle();
	});
	
	jQuery(".thinking-select-tags h3").click(function() {
		jQuery(".thinking-select-tags ul").toggle();
	});
});