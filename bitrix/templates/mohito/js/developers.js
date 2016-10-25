$(document).ready(function(){
	$(".city-select").click(function(){
		$(this).find(".city-select__current").toggleClass("state-active");
		$(this).find(".city-select__dropdown").toggleClass("state-active");
	});

	$(".js_city__link").click(function(){
		var cityId = $(this).data('city-id');
		$.ajax({
			url: '/include/ajax/set_city.php',
			data: {
				'setUserId': cityId
			},
			context: this,
			type: 'POST'
		}).done(function(data) {
			if(data['status'] == 1) {
				location.reload();
			}
		});
	});
});
