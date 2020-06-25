$(window).on('load', function() {
	function handleLoadedImg(e) {
		$(e.target)
			.off('load', handleLoadedImg)
			.parent().addClass('loaded');
	}

	$('.lightup').each(function() {
		$(this).on('openstart.fluidbox', function() {
			var $captionWrap = $(this).next('.caption-wrap');

			if ($captionWrap.length) {
				var captionWrapHtml = $captionWrap.html()
				this.captionWrapObj = $('<div class="caption-wrap"></div>').appendTo(document.body);
				this.captionWrapObj.html(captionWrapHtml.replace(/<p>/g, '<br><p>'));
			}
		});

		$(this).on('openend.fluidbox', function() {
			if (this.captionWrapObj) this.captionWrapObj.addClass('show');
		});

		$(this).on('closestart.fluidbox', function() {
			if (this.captionWrapObj) this.captionWrapObj.remove();
		});
	});

	$('.lightup[data-gallery]').each(function() {
		var gallery = $(this).attr('data-gallery').replace(/\n\s*/g, '').split(','),
			$fluidBoxGhost = $(this).find('.fluidbox__ghost'),
			$fluidBoxBgFig = $('<figure class="bg-fig"></figure>').appendTo($fluidBoxGhost),
			$swiper = $('<div class="swiper-container"></div>').appendTo($fluidBoxGhost),
			$swiperWrap = $('<div class="swiper-wrapper"></div>').appendTo($swiper);
		
		this.fluidBoxGhostObj = $fluidBoxGhost;
		this.fluidBoxBgFigObj = $fluidBoxBgFig;
		this.swiperObj = null;
		this.swiperEl = $swiper[0];
		gallery.unshift($(this).attr('href'));

		for (var i = 0; i < gallery.length; i++)
			$swiperWrap.append('<div class="swiper-slide"><figure class="swiper-fig"><img data-src="' + gallery[i] + '" class="swiper-img"></fig></div>');

		$(this).on('openstart.fluidbox', function() {
			this.btnPrevObj = $('<button class="gallery-arrow-btn prev"></button>').appendTo(document.body);
			this.btnNextObj = $('<button class="gallery-arrow-btn next"></button>').appendTo(document.body);
			this.paginationObj = $('<div class="gallery-pagination"></div>').appendTo(document.body);

			this.swiperObj = new Swiper(this.swiperEl, {
				effect: 'fade',
				allowTouchMove: false,
				loop: true,
				preloadImages: false,
				navigation: {
					nextEl: this.btnNextObj[0],
					prevEl: this.btnPrevObj[0]
				},
				pagination: {
					el: this.paginationObj[0],
					type: 'bullets'
				},
				on: {
					slideChangeTransitionStart: function() {
						var $swipeImg = $(this.slides[this.activeIndex]).find('.swiper-img');
						if (!$swipeImg.parent().is('.loaded')) {
							$swipeImg
								.on('load', handleLoadedImg)
								.attr('src', $swipeImg.attr('data-src'))
								.parent().css('background-image', 'url("' + $swipeImg.attr('src') + '")');
						}
					},
					slideChangeTransitionEnd: function() {
						var $fluidBoxGhost = $(this.el).parent();
						if (this.activeIndex !== 1) {
							$fluidBoxGhost.addClass('hide-bg');
							$(this.el).addClass('show');
						}
					}
				}
			});
		});

		$(this).on('openend.fluidbox', function() {
			this.btnPrevObj.addClass('show');
			this.btnNextObj.addClass('show');
			this.paginationObj.addClass('show');
		});

		$(this).on('imageloaddone.fluidbox', function() {
			this.fluidBoxBgFigObj
				.css('background-image', 'url("' + $(this).attr('href') + '")')
				.addClass('show');
			this.fluidBoxGhostObj.addClass('hide-bg');
		});

		$(this).on('closestart.fluidbox', function() {
			this.fluidBoxGhostObj.removeClass('hide-bg');
			$(this.swiperEl).removeClass('show');
			this.btnPrevObj.remove();
			this.btnNextObj.remove();
			this.paginationObj.remove();
		});

		$(this).on('closeend.fluidbox', function() {
			this.swiperObj.destroy(false, false);
		});
	});
});