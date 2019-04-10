jQuery(document).ready(function($) {
	$('#mainSlider').owlCarousel({
		items: 1,
		autoHeight:true,
		lazyLoad: true,
		loop: true,
		animateOut: 'fadeOutDown',
    	animateIn: 'fadeInUp',
    	autoplay:true,
	    autoplayTimeout:3000,
	    autoplayHoverPause:true,
	});

	$('#sidebarCarousel').owlCarousel({
		items: 1,
		autoHeight:true,
		lazyLoad: true,
		loop: true,
    	autoplay:true,
	    autoplayTimeout:3000,
	    autoplayHoverPause:true
	})

	$('.brandCarousel').owlCarousel({
		autoplay:false,
	    autoplayTimeout:3000,
	    autoplayHoverPause:true,
	    margin: 15,
	    responsive: {
	    	0: {
	    		items: 3
	    	},
	    	768: {
	    		items: 5
	    	}
	    },
	})

	if ($('.product-gallery-wrapper').length)
	{
		$('.product-gallery-wrapper').owlCarousel({
			loop:true,
		    dots: false,
			nav: false,
		    items: 1,
		    autoplay:false,
			autoplayTimeout:5000,
			autoplayHoverPause:false,
			margin: 10,
			mouseDrag: false,
		    thumbs: true,
		    thumbImage: false,
		    thumbsPrerendered: true,
		    thumbContainerClass: 'product-navigation',
		    thumbItemClass: 'product-navigation-item'
		})
	}

	$('#lnc_add_video_bnt').owlCarousel({
		items: 4,
		autoplay:true,
	    autoplayTimeout:3000,
	    autoplayHoverPause:true,
	    margin: 0,
	    nav: true,
	    navText: ['<i class="fa fa-angle-left fa-2x"></i>','<i class="fa fa-angle-right fa-2x"></i>'],
	})

	$('#product-gallery').owlCarousel({
		items: 1,
		autoHeight:true,
		lazyLoad: true,
		loop: true,
    	autoplay:true,
	    autoplayTimeout:3000,
	    autoplayHoverPause:true,
	    dotsEach: 1,
	})

	var brandSlider = $('.homeCarousel');
	brandSlider.owlCarousel({
		autoplay:false,
	    autoplayTimeout:3000,
	    autoplayHoverPause:true,
	    margin: 15,
	    responsive: {
	    	0: {
	    		items: 3
	    	},
	    	768: {
	    		items: 4
	    	}
	    }
	})

	$('.navigation-next').click(function() {
	    ($(this).parent()).next().trigger('next.owl.carousel');
	})
	// Go to the previous item
	$('.navigation-prev').click(function() {
	    ($(this).parent()).next().trigger('prev.owl.carousel');
	})


	if ($(window).width() >=992) {
		var navToTop = parseInt($('.main-navigation').offset().top);
		var lastScroll = 0;

		$(window).scroll(function() {
			var st = parseInt($(this).scrollTop());
			if ( st >= navToTop ) {
				$('.main-navigation').addClass('main-navigation-fixed');
				$('.navbar-brand').addClass('navbar-brand-fixed');
				$('.main-navbar').css('min-height', '50px');
				$('.responsive-navbar').css('margin-top', '12px');
				$('.fixed-cart-button').hide(400);
				$('.navbar-brand img').css('max-width', 111);
				$('.responsive-navbar .navbar-form').css({
					position: 'relative',
					top: '-9px',
					right: '30px',
				});
			}else {
				$('.main-navigation').removeClass('main-navigation-fixed');	
				$('.navbar-brand').removeClass('navbar-brand-fixed');
				$('.main-navbar').css('min-height', '130px');
				$('.responsive-navbar').css('margin-top', '100px');
				$('.fixed-cart-button').hide(400);
				$('.navbar-brand img').css('max-width', 200);
				$('.responsive-navbar .navbar-form').css({
					position: 'absolute',
					top: '50px',
					right: '30px',
				});

			};

			lastScroll = st;

		});
		
        $('.navbar .dropdown').hover(function() {
			$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
		}, function() {
			$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
		});

		$('.navbar .dropdown > a').click(function(){
			location.href = this.href;
		});
	}


	$('.btn-number').click(function(e){
	    e.preventDefault();
	    
	    fieldName = $(this).attr('data-field');
	    type      = $(this).attr('data-type');
	    var input = $("input[name='"+fieldName+"']");
	    var currentVal = parseInt(input.val());
	   
	    if (!isNaN(currentVal)) {
	        if(type == 'minus') {
	            if(currentVal > input.attr('min')) {
	                input.val(currentVal - 1).change();
	            } 
	            if(parseInt(input.val()) == input.attr('min')) {
	                $(this).attr('disabled', true);
	            } else if (parseInt(input.val()) < input.attr('max')) {
	            	$('button[data-type="plus"]').attr('disabled', false);
	            }

	        } else if(type == 'plus') {

	            if(currentVal < input.attr('max')) {
	                input.val(currentVal + 1).change();
	            }
	            if(parseInt(input.val()) == input.attr('max')) {
	                $(this).attr('disabled', true);
	            } else if (parseInt(input.val()) > input.attr('min')) {
	            	$('button[data-type="minus"]').attr('disabled', false);
	            }
	        }
	    } else {
	        input.val(0);
	    }
	});

	$('#loader-add-product').hide();


	$('.product-wrapper .product-item .product-desc').hide();
	$('.clickChangeView').click(function(event) {
		if ($(this).hasClass('listView')) {
			$('.product-wrapper .row').hide();
			$('#loadView').removeClass('hidden');
			if ($(this).hasClass('active') == false) {
				$(this).addClass('active');
				$('.gridView').removeClass('active');
			}
			setTimeout(function(){
				$('.product-wrapper .row').show();
				$('#loadView').addClass('hidden');
			}, 1200);
			$('.product-wrapper .row .product-item').addClass('list-view-product-item');
			$('.product-wrapper .row .product-item').removeClass('col-md-3');
			$('.product-wrapper .row .product-item').addClass('col-md-12');
			$('.product-wrapper .row .product-item .product-item-images').addClass('col-sm-3');
			$('.product-wrapper .row .product-item .product-item-title').removeClass('text-center');
			$('.product-wrapper .row .product-item .product-item-title').addClass('col-sm-9');
			$('.product-wrapper .row .product-item .product-item-title').css('padding-left', 20);
			$('.product-wrapper .row .product-item .product-item-info').css('padding-left', 20);
			$('.product-wrapper .row .product-item .product-item-info').addClass('col-sm-9');
			$('.product-wrapper .row .product-item .product-item-info').removeClass('text-center');
			$('.product-wrapper .row .product-item .product-item-info').removeClass('text-center');
			$('.product-wrapper .row .product-item .product-desc').show();
		}else if ($(this).hasClass('gridView')) {
			$('.product-wrapper .row').hide();
			$('#loadView').removeClass('hidden');
			if ($(this).hasClass('active') == false) {
				$(this).addClass('active');
				$('.listView').removeClass('active');
			}
			setTimeout(function(){
				 $('.product-wrapper .row').show();
				 $('#loadView').addClass('hidden');
			}, 1200);
			$('.product-wrapper .row .product-item').removeClass('list-view-product-item');
			$('.product-wrapper .row .product-item').addClass('col-md-3');
			$('.product-wrapper .row .product-item').removeClass('col-md-12');
			$('.product-wrapper .row .product-item .product-item-images').removeClass('col-sm-3');
			$('.product-wrapper .row .product-item .product-item-title').addClass('text-center');
			$('.product-wrapper .row .product-item .product-item-title').removeClass('col-sm-9');
			$('.product-wrapper .row .product-item .product-item-title').css('padding-left', 0);
			$('.product-wrapper .row .product-item .product-item-info').css('padding-left', 0);
			$('.product-wrapper .row .product-item .product-item-info').removeClass('col-sm-9');
			$('.product-wrapper .row .product-item .product-item-info').addClass('text-center');
			$('.product-wrapper .row .product-item .product-item-info').addClass('text-center');
			$('.product-wrapper .row .product-item .product-desc').hide();
		}
			
	});

	if ($('.dropdown-menu li').hasClass('dropdown')) {
		$('.dropdown-menu li').addClass('dropdown-submenu');
		$('.dropdown-menu li').removeClass('dropdown');
	}

});