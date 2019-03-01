$(document).ready(function () {
    "use strict";
	
   var carousel = $("#screenshot-carousel");

   carousel.owlCarousel({
        items : 5,
        lazyLoad : true,
        navigation : true,
        navigationText : ["prev", "next"],
        pagination: true,
        paginationNumbers: true,
        responsive: true,
        afterAction: function (el) {
            //remove class active
            this
            .$owlItems
            .removeClass('active')

            //add class active
            this
            .$owlItems //owl internal $ object containing items
            .eq(this.currentItem + 2)
            .addClass('active')    
        } 
    });
    
    //App Reviews
    $("#app-reviews").owlCarousel({
        items : 1,
        itemsDesktop : [1199, 1],
        itemsDesktopSmall : [980, 1],
        itemsTablet: [768, 1],
        itemsTabletSmall: true,
        itemsMobile : [479, 1],
        paginationNumbers: true,
        transitionStyle: "backSlide",
    });
    
    //Sticky Nav
    $("#main-nav").sticky({topSpacing:0});
    
    //Smooth Scroll
    smoothScroll.init();
    
	//Scroll Spy
	$('body').scrollspy({ target: '#main-nav' })
		
    //menu-active item
    var navlnks = document.querySelectorAll(".navbar-nav a");
    Array.prototype.map.call(navlnks, function(item) {

        item.addEventListener("click", function(e) {

            var navlnks = document.querySelectorAll(".nav a"); 

            Array.prototype.map.call(navlnks, function(item) {

                if (item.parentNode.className == "active" || item.parentNode.className == "active open" ) {

                    item.parentNode.className = "";

                } 

            }); 

            e.currentTarget.parentNode.className = "active";
        });
    });

	//Mailchimp Form
    $('#mc-form').ajaxChimp({
        url: 'http://sylhostbd.us7.list-manage.com/subscribe/post?u=cfb2b00a2b6d600f82d39ad78&amp;id=eeb2f32703'
    });
	
	
	//WOW JS
	new WOW().init();
	
	$(window).load(function() { // makes sure the whole site is loaded
	  $('#status').fadeOut(); // will first fade out the loading animation
	  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
	  $('body').delay(350).css({'overflow':'visible'});
	})
   
});





