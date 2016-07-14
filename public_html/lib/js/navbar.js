/********************************************
 * Change nav bar on scroll
 ********************************************/
$(window).on('scroll', function() {

	// if the scroll position is greater than 100px
	if($(window).scrollTop() > 1) {
		$('.navbar').css({paddingTop: "0", backgroundColor: "#508cff", borderBottom: "1px solid #fff"});
		$('.navbar-default .navbar-nav > li > a').css({borderTopLeftRadius: "0", borderTopRightRadius: "0"});
		$('.navbar-default .navbar-brand').css({fontSize: "4rem", lineHeight: "20px"});
		// $('.robo-logo').css({height: "50px"});
	} else {
		$('.navbar').css({paddingTop: "50px", background: "none", borderBottom: "1px solid #fff"});
		$('.navbar-default .navbar-nav > li > a').css({borderTopLeftRadius: "4px", borderTopRightRadius: "4px"});
		$('.navbar-default .navbar-brand').css({fontSize: "8rem", lineHeight: "0"});
		// $('.robo-logo').css({height: "75px"});
	}
});
