	
/*	
	$(document).ready(function () {
		$('.swiper-slide a').simpleLightbox();
	});
	var swiper = new Swiper(".mySwiper", {
		slidesPerView: 5,
		spaceBetween: 4,
		breakpoints: {
			320: {
				slidesPerView: 2,
				spaceBetween: 4
			},
			480: {
				slidesPerView: 3,
				spaceBetween: 4
			},
			640: {
				slidesPerView: 5,
				spaceBetween: 4
			}
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});

	$(document).ready(function() {
		var $videoSrc;  
		$('.box-link').click(function() {
			$videoSrc = $(this).data( "src" );
		});
		$('#myModalVideo').on('shown.bs.modal', function (e) {
			$("#video").attr('src',$videoSrc + "?controls=0&amp;autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
		})
		$('#myModalVideo').on('hide.bs.modal', function (e) {
			$("#video").attr('src',$videoSrc); 
		}) 
	});
*/

function Utils() {}
Utils.prototype = {
  constructor: Utils,
  isElementInView: function (element, fullyInView) {
    var pageTop = $(window).scrollTop();
    var pageBottom = pageTop + $(window).height();
    var elementTop = $(element).offset().top;
    var elementBottom = elementTop + $(element).height();

    if (fullyInView === true) {
      return pageTop < elementTop && pageBottom > elementBottom;
    } else {
      return elementTop <= pageBottom && elementBottom >= pageTop;
    }
  }
};

var Utils = new Utils();
$(window).on("load", addFadeIn());

$(window).scroll(function () {
  addFadeIn(true);
});

function addFadeIn(repeat) {
	//console.log( 'addFadeIn' );
	var classToFadeIn = ".will-fadeIn";

  $(classToFadeIn).each(function (index) {
    var isElementInView = Utils.isElementInView($(this), false);
    if (isElementInView) {
      if (!$(this).hasClass("fadeInRight") && !$(this).hasClass("fadeInLeft")) {
        if (index % 2 == 0) $(this).addClass("fadeInRight");
        else $(this).addClass("fadeInLeft");
      }
    } else if (repeat) {
      $(this).removeClass("fadeInRight");
      $(this).removeClass("fadeInLeft");
    }
  });
}
