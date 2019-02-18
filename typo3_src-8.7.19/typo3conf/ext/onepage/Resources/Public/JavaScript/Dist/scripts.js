/*!
 * OnePage v1.0.0 (https://www.robinfasano.ch)
 * Copyright 2017-2018 Robin Fasano
 * Licensed under the GPL-2.0-or-later license
 */
console.log("WE LOVE TYPO3");
//parallax
$(document).ready(function(){
    $('.parallax').parallax();
  });

//Navbar Color Change
$(document).ready(function(){

     $(window).scroll(function(){

       if($(window).scrollTop()>300){
         $('nav').addClass('navbar-scrolled').addClass('z-depth-3');
         $('nav a').addClass('black-text');
         $('nav a').removeClass('white-text');
         $('nav ul a').addClass('special');
         $('nav').removeClass('z-depth-0');


       }else{
         $('nav').removeClass('navbar-scrolled');
         $('nav a').removeClass('black-text');
         $('nav a').addClass('white-text');
         $('nav').addClass('z-depth-0');
         $('nav ul a').removeClass('special');
       }

     });

});


var $mydiv = $('nav ul a');
$(window).scroll(function() {
  if ($(this).scrollTop() > 300) {
    $mydiv.addClass('special');
  } else {
    $mydiv.removeClass('special');
  }
})

//sidenav
$(document).ready(function(){
  $('.sidenav').sidenav();
});

//navbar underline animation

$('.nav-item').on('click', function() {
	$('.active-link').removeClass('active-link');
	$(this).addClass('active-link');
});
//Typewriter
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
//scrollSpy
    $(document).ready(function(){
        $('.scrollspy').scrollSpy();
      });
//alternating section background-Color
$(".post:even").addClass('white');
$(".post:odd").addClass('custom-grey');
//Forms
$(document).ready(function() {
    M.updateTextFields();
  });


    $(document).ready(function(){
      $('.fixed-action-btn').floatingActionButton();
    });

    $(window).scroll(function() {
      if ($(this).scrollTop() > 50 ) {
          $('.scrolltop:hidden').stop(true, true).fadeIn();
      } else {
          $('.scrolltop').stop(true, true).fadeOut();
      }
  });
  $(function(){$(".scroll").click(function(){$("html,body").animate({scrollTop:$(".thetop").offset().top},"1000");return false})})
