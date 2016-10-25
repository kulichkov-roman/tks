$(document).ready(function(){
	$(".city-select").click(function(){
		$(this).find(".city-select__current").toggleClass("state-active");
		$(this).find(".city-select__dropdown").toggleClass("state-active");
	});
});