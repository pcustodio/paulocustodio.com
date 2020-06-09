$(window).load(function() {
	$('.lightup[data-gallery]').each(function() {
		var gallery = $(this).attr('data-gallery').replace(/\n\s*/g, '').split(','),
			$fluidBoxGhost = $(this).find('.fluidbox__ghost'),
			$swiper = $('<div class="swiper-container"></div>').appendTo($fluidBoxGhost),
			$swiperWrap = $('<div class="swiper-wrapper"></div>').appendTo($swiper);
		
		this.fluidBoxGhostObj = $fluidBoxGhost;
		this.swiperObj = null;
		this.swiperEl = $swiper[0];
		gallery.unshift($(this).attr('href'));

		for (var i = 0; i < gallery.length; i++)
			$swiperWrap.append('<div data-background="' + gallery[i] + '" class="swiper-slide swiper-lazy"></div>');

		$(this).on('openstart.fluidbox', function() {
			this.btnPrevObj = $('<button class="gallery-arrow-btn prev"></button>').appendTo(document.body);
			this.btnNextObj = $('<button class="gallery-arrow-btn next"></button>').appendTo(document.body);
			this.paginationObj = $('<div class="gallery-pagination"></div>').appendTo(document.body);

			this.swiperObj = new Swiper(this.swiperEl, {
				preloadImages: false,
				lazy: true,
				effect: 'fade',
				allowTouchMove: false,
				loop: true,
				navigation: {
					nextEl: this.btnNextObj[0],
					prevEl: this.btnPrevObj[0]
				},
				pagination: {
					el: this.paginationObj[0],
					type: 'bullets'
				},
				on: {
					lazyImageReady: function(slideEl, imageEl) {
						$(this.el).parent().addClass('hide-bg');
						var galleryRoot = $(this.el).closest('[data-gallery]')[0];
						galleryRoot.btnPrevObj.addClass('show');
						galleryRoot.btnNextObj.addClass('show');
						galleryRoot.paginationObj.addClass('show');
					}
				}
			});
		});

		$(this).on('closestart.fluidbox', function() {
			this.fluidBoxGhostObj.removeClass('hide-bg');
			this.btnPrevObj.remove();
			this.btnNextObj.remove();
			this.paginationObj.remove();
		});

		$(this).on('closeend.fluidbox', function() {
			this.swiperObj.destroy(false, false);
		});
	});
});