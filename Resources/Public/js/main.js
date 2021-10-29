$(document).ready(function(){

	$('.slider-container-simpleheader').each(function () {
		id = $(this).attr('id')
		$('#' + id).slick({
			arrows: true,
			dots: true,
		});
	})

	$(document).on("click", ".next-viewport-downn", function (event) {
		event.preventDefault();
		var vheight = $(window).height();
		$("html, body").animate(
		  {
			scrollTop: ((Math.floor($(window).scrollTop() / vheight) + 1) * vheight)+142,
		  },
		  500
		);
	  });
});
