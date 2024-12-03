$(document).ready(function () {
	$(".awesome__slider").slick({
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		adaptiveHeight: true,
		lazyLoad: "ondemand",
		prevArrow:
			'<button class="prev-img room-slider-prev"><i class="bi bi-chevron-left"></i></button>',
		nextArrow:
			'<button class="next-img room-slider-next"><i class="bi bi-chevron-right"></i></button>'
	});

	$(".awesome__slider").on("swipe", function (event, slick, direction) {

	});
	$(".awesome__slider").on(
		"beforeChange",
		function (event, slick, currentSlide, nextSlide) {
			console.log(nextSlide);
			$(".thumb").removeClass("active");
			$('.thumb[data-rel="' + nextSlide + '"]').addClass("active");
		}
	);
	$(".thumb").on("click", function () {
		$(".awesome__slider").slick("slickGoTo", $(this).data("rel"));
	});
});

