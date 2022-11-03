!function(t){var i=t(window);t.fn.visible=function(t,e,o){if(!(this.length<1)){var r=this.length>1?this.eq(0):this,n=r.get(0),f=i.width(),h=i.height(),o=o?o:"both",l=e===!0?n.offsetWidth*n.offsetHeight:!0;if("function"==typeof n.getBoundingClientRect){var g=n.getBoundingClientRect(),u=g.top>=0&&g.top<h,s=g.bottom>0&&g.bottom<=h,c=g.left>=0&&g.left<f,a=g.right>0&&g.right<=f,v=t?u||s:u&&s,b=t?c||a:c&&a;if("both"===o)return l&&v&&b;if("vertical"===o)return l&&v;if("horizontal"===o)return l&&b}else{var d=i.scrollTop(),p=d+h,w=i.scrollLeft(),m=w+f,y=r.offset(),z=y.top,B=z+r.height(),C=y.left,R=C+r.width(),j=t===!0?B:z,q=t===!0?z:B,H=t===!0?R:C,L=t===!0?C:R;if("both"===o)return!!l&&p>=q&&j>=d&&m>=L&&H>=w;if("vertical"===o)return!!l&&p>=q&&j>=d;if("horizontal"===o)return!!l&&m>=L&&H>=w}}}}(jQuery);
var lastScroll = document.body.scrollTop;
var homeVH = $(window).height();
$(function(){
	var lastScroll = document.body.scrollTop;
	goTop();
	menuOpen();
	windowURL();
	paintingForm();
	seriesSeparator();
	if($('body').hasClass('frontPage')){
		homeScroll();
	}
	if($('body').hasClass('page-template-archive-paintings')){
		$('.sorting').find('ul').find('li:first-child').find('a').addClass('pushed');
	}
	$('.upArrow').on('click', function(){
		$('html, body').animate({
			scrollTop: 0
		}, 1000);
	});
	if( $('.home-swiper').length > 0 ) {
		var mySwiper = new Swiper('.swiper-container', {
			loop: true,
			speed: 1000,
			autoHeight: true,

			autoplay: {
				delay: 4000,
			},

			pagination: {
				el: '.swiper-pagination',
				type: 'bullets',
				clickable: true
			},
		});
	}
});
$(window).on('load', function(){
	if($('body').hasClass('frontPage')){
		intro();
	}
	showImgs();
});

$(window).on('load resize', function(){
	showImgs()
	var homeVH = $(window).height();
	homeImage();
	seriesNameMobile();
	if($('body').hasClass('frontPage')){
		setInterval(menuStick, 5);
	}
	//setTimeout(imgPaintings, 100);
});
$(document).on('scroll', function(){
	if($(window).width() < 992){
		menuSlideUp();
	}
	homeFade();
	if($(window).width() < 1024){
		if(document.body.scrollTop > 100){
			$('.upArrow').css('opacity', '1');
		} else {
			$('.upArrow').css('opacity', '0');
		}
	}
});

function windowURL()
{
	$('.years-tags').find('> li').find('> a').each(function(){
		if(window.location.href === $(this).attr('href')){
			$(this).addClass('pushed');
		}
	});
}

function homeImage()
{
	$('.home-image').height($(window).height());
}

function goTop()
{
	$('.goTop').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, 750);
	});
}

function imgPaintings()
{
	$('.the-painting').find('> img').each(function(){
		$(this).height('auto');
		if($(this).height() > $(window).height()-$('nav.main-navigation').height()-$('.sorting').height()-100){
			$(this).height($(window).height()-$('nav.main-navigation').height()-$('.sorting').height()-100);
		} else {
			$(this).height('auto');
		}
	});
}

function yearsPos()
{
	var counter = 0;
	var loop = setInterval(function(){
		if($(window).width() > 992){
			$('.years-tags').css('margin-right', '0');
			$('.years-tags').css('margin-right', '0').css({'margin-right' : ''+$('.main-menu').width()-$('.years-tags').width()+'px'});
		} else {
			$('.years-tags').css('margin-right', '0');
		}
		counter++;
		if(counter >= 10){
			clearInterval(loop);
		}
	}, 5);
}

function newsShort()
{
	$('.news-short').each(function(){
		if($(window).width() > 1023){
			$(this).outerHeight('auto', true);
			$(this).outerHeight($(this).parent().height(), true);
		} else {
			$(this).outerHeight('auto', true);
		}
	});
}

function menuStick()
{
	offS = $('.home-image').height();
	if($(window).scrollTop() >= (offS)){
		$('nav.main-navigation').addClass('sticky');
	} else if($(window).scrollTop() < (offS)) {
		$('nav.main-navigation').removeClass('sticky');
	}
}

function menuOpen()
{
	$('.menu-button').on('click', function(){
		var menu = $('.main-menu');
		if(menu.hasClass('opened')){
			menu.removeClass('opened');
			$(this).removeClass('opened');
		} else {
			menu.addClass('opened');
			$(this).addClass('opened');
		}
	});
}

function homeScroll()
{
	$(document).on('scroll', function(e){
		e.preventDefault();
		if(!$('body').hasClass('scrolled')){
			$('body').addClass('scrolled');
			$('html, body').animate({
				scrollTop: $(window).height()
			}, 1000);
		}
	});
	$('.home-image').on('click', function(e){
		e.preventDefault();
		$('body').addClass('scrolled');
		$('html, body').animate({
			scrollTop: $(window).height()
		}, 1000);
	});
}

function intro()
{
	setTimeout(function(){
		$('.overlayHome').addClass('hide');
	}, 750);
	setTimeout(function(){
		$('.logo').addClass('fill');
		$('.logo').addClass('slide');
	}, 2200);
	$('html, body').css('opacity', '1');
	setTimeout(function(){
		$('.logo').addClass('animate');
	}, 1000);
	setTimeout(function(){
		$('.scroll').css('opacity', '1');
	}, 3200);
}

function sorting()
{
	if($(window).scrollTop() > 10){
		$('.sorting').removeClass('show');
	} else {
		$('.sorting').addClass('show');
	}
}

// function flex()
// {
// 	if($(window).width() > 1200){
// 		$('.flexin').each(function(){
// 			$(this).outerHeight($(this).parent().find('.big').find('img').height()+30);
// 		});
// 	} else if($(window).width() <= 1200 && $(window).width() > 767){
// 		$('.flexin').each(function(){
// 			$(this).outerHeight($(this).parent().find('.big').find('img').height()+12);
// 		});
// 	} else {
// 		$('.flexin').each(function(){
// 			$(this).outerHeight('auto');
// 		});
// 	}
// }

function seriesSeparator()
{
	$('.row[data-series]').each(function(){
		if($(this).next().attr('data-series') && $(this).next().attr('data-series') !== $(this).attr('data-series')){
			$(this).append('<hr class="separator">');
			console.log('cosS');
		}
	});
}


function seriesName()
{
	$('.row[data-series]').each(function(){
		var visible = $(this).visible( true ); 
		if(visible === true){
			$('.series-name').text($(this).attr("data-series"));
		}
		$(this).find('.series-name-mobile').remove();
	});
}

function seriesNameMobile()
{
	$('.row[data-series]').each(function(){
		if($(this).prev().attr('data-series') !== $(this).attr('data-series') && $(this).find('.series-name-mobile').length === 0){
			$(this).prepend('<div class="col-m-53 col-xs-16 series-name-mobile"><h2 style="margin:0;">'+$(this).attr('data-series')+'</h2></div><div class="col-m-106 col-xs-16 series-name-mobile"><p style="margin:0;">'+$(this).attr('data-description')+'</p></div>');
		}
	});
}

function menuSlideUp()
{
    if(!$('body').hasClass('frontPage')){
    	var newScroll = document.body.scrollTop;
	    var scrollDiff = newScroll - lastScroll;
	    var menu = $('nav.main-navigation');
	    if(scrollDiff >= 100 || scrollDiff <= -50){
	    	lastScroll = newScroll;
	    }
	    if(scrollDiff >= 100 && !menu.hasClass('slideUp')){
	    	menu.addClass('slideUp');
	    	lastScroll = newScroll;
	    } 
	    if(scrollDiff <= -50 && menu.hasClass('slideUp') || document.body.scrollTop < 99){
	    	menu.removeClass('slideUp');
	    	lastScroll = newScroll;
	    }

    }
}

function homeFade(){
	if($(window).width() > 992){
		var newScroll = document.body.scrollTop;
		var scrollDiff = newScroll - lastScroll;
		if(newScroll <= homeVH && scrollDiff >= homeVH/100){
			var one = 1;
			var newOp = one-scrollDiff/(homeVH-100);
			$('.home-image').css({'opacity' : ''+newOp+''});
		}
	} else {
		$('.home-image').css({'opacity' : '1'});
	}
}

function paintingForm(){
	$(document).on('click', '.buttonB.sold[data-title], .buttonB.enquiry[data-title]', function(e){
		e.preventDefault();
		$this = $(this);
		$form = $('.inquiry-contact');

		if($form.hasClass('showed') && !$this.next($form).hasClass('showed')){
			$form.slideUp(500);
			setTimeout(function(){
				$form.insertAfter($this);
				$form.slideDown(500);
			}, 500);
			$form.addClass('showed');
		} else {
			$form.insertAfter(this);
			$form.slideDown(500);
			$form.addClass('showed');
		}
		$form.find('.painting-title').find('input').val('');
		$form.find('.painting-title').find('input').val($(this).attr('data-title'));
	});
	$(document).on('click', '.buttonB.cancel', function(e){
		e.preventDefault();
		$form = $('.inquiry-contact');
		$form.slideUp(500);
		$form.removeClass('showed');
		$form.find('.painting-title').find('input').val('');
	});
}

function showImgs()
{
	$('img[data-src]').each(function() {
		$(this).attr('src', $(this).data('src'));
	});
}

// Is this element visible onscreen? 
// var visible = $(this).visible( detectPartial ); 
// // Set the visible status into the span. 
// $(this).find('span').text( visible ? 'Onscreen' : 'Offscreen' ).toggleClass('visible',visible);

/**
 * Converts :hover CSS to :active CSS on mobile devices.
 * Otherwise, when tapping a button on a mobile device, the button stays in
 * the :hover state until the button is pressed. 
 *
 * Inspired by: https://gist.github.com/rcmachado/7303143
 * @author  Michael Vartan <michael@mvartan.com>
 * @version 1.0 
 * @date    2014-12-20
 */
// function hoverTouchUnstick() {
//   // Check if the device supports touch events
//   if('ontouchstart' in document.documentElement) {
//     // Loop through each stylesheet
//     for(var sheetI = document.styleSheets.length - 1; sheetI >= 0; sheetI--) {
//       var sheet = document.styleSheets[sheetI];
//       // Verify if cssRules exists in sheet
//       if(sheet.cssRules) {
//         // Loop through each rule in sheet
//         for(var ruleI = sheet.cssRules.length - 1; ruleI >= 0; ruleI--) {
//           var rule = sheet.cssRules[ruleI];
//           // Verify rule has selector text
//           if(rule.selectorText) {
//             // Replace hover psuedo-class with active psuedo-class
//             rule.selectorText = rule.selectorText.replace(":hover", ":active");
//           }
//         }
//       }
//     }
//   }
// }

