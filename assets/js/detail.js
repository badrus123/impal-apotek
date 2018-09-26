$(document).ready(function() {
	$("div.content > div").hide();
	$(".nav li:first").addClass("active").show();
	$("div.content div:first").show();

	$(".nav li").click(function() {
		$("div.content > div").hide();
		$(".nav li").removeClass("active");
		$(this).addClass("active");
		var activePage = $(this).find("a").attr("href");
		$(activePage).fadeIn();
	});
});
