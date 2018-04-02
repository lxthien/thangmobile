$(document).ready(function() {
	initSlider();

	function initSlider() {
		if(jQuery.browser.mobile) {
			$('#service-bxslider').carouFredSel({
	            responsive: true,
				width: '100%',
				scroll: 1,
				items: {
                    width: 160,
                    height: 120,
					visible: {
						min: 1,
						max: 1
					}
				}
	        });
        } else {
	        $('#service-bxslider').carouFredSel({
                responsive: true,
                width: '100%',
                height: '100%',
                auto: false,
                prev: '#partner-prev',
                next: '#partner-next',
                scroll: 1,
                swipe: {
                    onMouse: true,
                    onTouch: true
                },
                items: {
                    width: 160,
                    visible: {
                        min: 1,
                        max: 7
                    }
                }
            });
        }

        $('#slider').nivoSlider({animSpeed: 500, pauseTime: 9000});

        $('#slider1').carouFredSel({
            auto: false,
            responsive: true,
            scroll: {
                items: 1,
                duration: 3000
            },
            mousewheel: true,
            items: {
                visible: 1,
                width: 200,
                height: 190
            }
		});
	}
});