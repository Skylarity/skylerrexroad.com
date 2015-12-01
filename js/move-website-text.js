$(document).ready(function() {
	var width = $(window).width();
	var sideContent = $("#website-text").html();
	if(width <= 992) {
		if(sideContent) {
			console.log(sideContent);
			$("#website-text").hide();
			$("<div id='website-text\' class='col-md-4'>" + sideContent + "</div>").prependTo("#website-content");
		}
	}
});