$(document).ready(function(){
    $('.reviews_wrapper').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        // dots: true,
        prevArrow: $('.prev_btn'),
        nextArrow: $('.next_btn'),
        responsive: [
            {
              breakpoint: 1200,
              settings: {
              slidesToShow: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
              slidesToShow: 1
              }
            }
          ]
    });
});

let hamb = document.querySelector('.hamburger'),
    pageMenu = document.querySelector('.hamburger-menu'),
    divTop = document.getElementById('top'),
    divMiddle = document.getElementById('middle'),
    divBottom = document.getElementById('bottom'),
    headerForm = document.querySelector('.header_form'),
    headerClose = document.querySelector('.header_form_close'),
    orderCall = document.querySelector('.header_btn'),
    formSubmit = document.querySelector('.header_form_btn'),
    thanks = document.querySelector('.thanks'),
    thanksClose = document.querySelector('.thanks_title_close')

    // headTime = document.getElementById('header-time'),
    // headCall = document.getElementById('header-call'),
    //sinBtn = document.getElementById('single-btn'),
    // sinForm = document.getElementById('single-form'),
    // sinClose = document.getElementById('single-close'),
    // sinOrderBtn = document.getElementById('single-order-btn'),
    // bg = document.querySelector('.bg-layer'),
    // calcForm = document.getElementById('calculation-request-form')

;

document.addEventListener("DOMContentLoaded", function() {
  if (hamb != null) {
    hamb.addEventListener('click', function () {
      if (pageMenu.style.display == 'block') {
          pageMenu.style.display = 'none';
          divTop.style.transform = 'rotate(0deg)';
          divTop.style.position = 'relative';
          divMiddle.style.transform = 'rotate(0deg)';
          divMiddle.style.position = 'relative';
          divBottom.style.display = 'block';
          divBottom.style.transform = 'rotate(0deg)';
          divBottom.style.position = 'relative';
      }else {
          pageMenu.style.display = 'block';
          divTop.style.transform = 'rotate(45deg)';
          divTop.style.position = 'absolute';
          divTop.style.top = '6%';
          divMiddle.style.transform = 'rotate(-45deg)';
          divMiddle.style.position = 'absolute';
          divMiddle.style.top = '6%';
          divBottom.style.display = 'none';
          pageMenu.addEventListener('click', function () {
            pageMenu.style.display = 'none';
            divTop.style.transform = 'rotate(0deg)';
            divTop.style.position = 'relative';
            divMiddle.style.transform = 'rotate(0deg)';
            divMiddle.style.position = 'relative';
            divBottom.style.display = 'block';
            divBottom.style.transform = 'rotate(0deg)';
            divBottom.style.position = 'relative';
          });
      }  
    });
  }
});

document.addEventListener("DOMContentLoaded", function() {
  if (orderCall != null) {
    orderCall.addEventListener('click', function () {
      if (headerForm.style.display == 'block') {
          headerForm.style.display = 'none';
      }else {
          headerForm.style.display = 'block';
          headerClose.addEventListener('click', function () {
            headerForm.style.display = 'none';
          });
          headerClose.addEventListener('click', function () {
            headerForm.style.display = 'none';
          });
          formSubmit.addEventListener('click', function () {
            event.preventDefault();
            headerForm.style.display = 'none';
            thanks.style.display = 'block';
            thanksClose.addEventListener('click', function () {
              thanks.style.display = 'none';
            });
            // thanks.addEventListener('click', function () {
            //   thanks.style.display = 'none';
            // });
          });
      }  
    });
  }
});

