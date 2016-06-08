/********************************************
 * Change nav bar on scroll
 ********************************************/
$(window).on('scroll', function() {

	// if the scroll position is greater than 100px
	if($(window).scrollTop() > 1) {
		$('.navbar').css({paddingTop: "0", backgroundColor: "#508cff", borderBottom: "2px solid #fff"});
		$('.navbar-default .navbar-nav > li > a').css({borderTopLeftRadius: "0", borderTopRightRadius: "0"});
	} else {
		$('.navbar').css({paddingTop: "50px", background: "none", borderBottom: "1px solid #fff"});
		$('.navbar-default .navbar-nav > li > a').css({borderTopLeftRadius: "7px", borderTopRightRadius: "7px"});
	}
});
