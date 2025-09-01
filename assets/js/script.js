/*==============================================================*/
		// Hero slider
		/*==============================================================*/
		var $bannerSlider = jQuery('.banner-slider');
		var $bannerFirstSlide = $('div.banner-slide:first-child');

		$bannerSlider.on('init', function(e, slick) {
			var $firstAnimatingElements = $bannerFirstSlide.find('[data-animation]');
			slideanimate($firstAnimatingElements);
		});
		$bannerSlider.on('beforeChange', function(e, slick, currentSlide, nextSlide) {
			var $animatingElements = $('div.slick-slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
			slideanimate($animatingElements);
		});
		$bannerSlider.slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			fade: true,
			dots: false,
			swipe: true,
			adaptiveHeight: true,
			responsive: [
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: false,
					autoplaySpeed: 4000,
					swipe: true,
				}
			}
			]
		});
		function slideanimate(elements) {
			var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
			elements.each(function() {
				var $this = $(this);
				var $animationDelay = $this.data('delay');
				var $animationType = 'animated ' + $this.data('animation');
				$this.css({
					'animation-delay': $animationDelay,
					'-webkit-animation-delay': $animationDelay
				});
				$this.addClass($animationType).one(animationEndEvents, function() {
					$this.removeClass($animationType);
				});
			});
		}

// data color
jQuery("[data-color]").each(function () {
		jQuery(this).css('color', jQuery(this).attr('data-color'));
});
// data background color
jQuery("[data-bgcolor]").each(function () {
	jQuery(this).css('background-color', jQuery(this).attr('data-bgcolor'));
});

/*==============================================================*/
// Global Wissen Enhancements
/*==============================================================*/

// KCR Bubbles Interactive Functionality
jQuery(document).ready(function($) {
    
    // KCR Bubble Click Events
    $('.kcr-bubble').on('click', function() {
        var kcrType = $(this).data('kcr');
        
        // Remove active class from all bubbles
        $('.kcr-bubble').removeClass('active');
        
        // Add active class to clicked bubble
        $(this).addClass('active');
        
        // Trigger custom event for tracking
        $(this).trigger('kcr-bubble-clicked', [kcrType]);
        
        // Optional: Scroll to detailed section
        // You can add more functionality here
        console.log('KCR Bubble clicked:', kcrType);
    });
    
    // Enhanced hover effects
    $('.kcr-bubble').hover(
        function() {
            $(this).find('.bubble-icon').css('transform', 'scale(1.1)');
        },
        function() {
            $(this).find('.bubble-icon').css('transform', 'scale(1)');
        }
    );
    
    // Partner carousel pause on hover
    $('.partners-carousel').hover(
        function() {
            $(this).find('.partner-logos').css('animation-play-state', 'paused');
        },
        function() {
            $(this).find('.partner-logos').css('animation-play-state', 'running');
        }
    );
    
    // Smooth scroll for navigation links
    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && 
            location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 1000, function() {
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) {
                        return false;
                    } else {
                        $target.attr('tabindex','-1');
                        $target.focus();
                    }
                });
            }
        }
    });
    
    // Enhanced stats counter animation
    function animateStats() {
        $('.stats_info .counter').each(function() {
            var $this = $(this);
            var countTo = parseInt($this.text().replace(/,/g, ''));
            
            $({ countNum: 0 }).animate({
                countNum: countTo
            }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.floor(this.countNum).toLocaleString());
                },
                complete: function() {
                    $this.text(countTo.toLocaleString());
                }
            });
        });
    }
    
    // Trigger stats animation when in viewport
    function checkStatsInView() {
        var statsSection = $('.w3l-stats-main');
        if (statsSection.length) {
            var statsTop = statsSection.offset().top;
            var statsHeight = statsSection.outerHeight();
            var windowTop = $(window).scrollTop();
            var windowHeight = $(window).height();
            
            if (windowTop + windowHeight > statsTop + (statsHeight / 2)) {
                if (!statsSection.hasClass('animated')) {
                    statsSection.addClass('animated');
                    animateStats();
                }
            }
        }
    }
    
    // Check on scroll
    $(window).scroll(checkStatsInView);
    
    // Check on load
    checkStatsInView();
    
    // Add parallax effect to hero section
    $(window).scroll(function() {
        var scrolled = $(window).scrollTop();
        var rate = scrolled * -0.5;
        $('.hero-overlay').css('transform', 'translateY(' + rate + 'px)');
    });
    
    // Add loading animation
    $(window).on('load', function() {
        $('.kcr-bubble').each(function(index) {
            $(this).delay(index * 200).animate({
                opacity: 1
            }, 500);
        });
    });
    
    // Initialize bubbles with opacity 0 for animation
    $('.kcr-bubble').css('opacity', 0);
    
    // Enhanced mobile touch support
    if ('ontouchstart' in window) {
        $('.kcr-bubble').on('touchstart', function() {
            $(this).addClass('touch-active');
        });
        
        $('.kcr-bubble').on('touchend', function() {
            var self = this;
            setTimeout(function() {
                $(self).removeClass('touch-active');
            }, 300);
        });
    }
});

// Intersection Observer for animations
if ('IntersectionObserver' in window) {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                
                // Animate KCR bubbles when they come into view
                if (entry.target.classList.contains('kcr-bubble')) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, Math.random() * 300);
                }
            }
        });
    }, observerOptions);
    
    // Observe KCR bubbles
    document.querySelectorAll('.kcr-bubble').forEach(bubble => {
        bubble.style.opacity = '0';
        bubble.style.transform = 'translateY(50px)';
        bubble.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(bubble);
    });
}