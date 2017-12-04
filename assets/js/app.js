$(document).ready(function() {
	initSlider();


	function initSlider() {
		$('#service-bxslider').carouFredSel({
            responsive: true,
            width: '100%',
            height: '100%',
            auto: true,
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
});