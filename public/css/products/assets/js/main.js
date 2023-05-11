/**
* Template Name: PhotoFolio
* Updated: Mar 10 2023 with Bootstrap v5.2.3
* Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      setTimeout(() => {
        preloader.classList.add('loaded');
      }, 1000);
      setTimeout(() => {
        preloader.remove();
      }, 2000);
    });
  }

  /**
   * Mobile nav toggle
   */
  const mobileNavShow = document.querySelector('.mobile-nav-show');
  const mobileNavHide = document.querySelector('.mobile-nav-hide');

  document.querySelectorAll('.mobile-nav-toggle').forEach(el => {
    el.addEventListener('click', function(event) {
      event.preventDefault();
      mobileNavToogle();
    })
  });

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavShow.classList.toggle('d-none');
    mobileNavHide.classList.toggle('d-none');
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navbar a').forEach(navbarlink => {

    if (!navbarlink.hash) return;

    let section = document.querySelector(navbarlink.hash);
    if (!section) return;

    navbarlink.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');

  navDropdowns.forEach(el => {
    el.addEventListener('click', function(event) {
      if (document.querySelector('.mobile-nav-active')) {
        event.preventDefault();
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('dropdown-active');

        let dropDownIndicator = this.querySelector('.dropdown-indicator');
        dropDownIndicator.classList.toggle('bi-chevron-up');
        dropDownIndicator.classList.toggle('bi-chevron-down');
      }
    })
  });

  /**
   * Scroll top button
   */
  const scrollTop = document.querySelector('.scroll-top');
  if (scrollTop) {
    const togglescrollTop = function() {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
    window.addEventListener('load', togglescrollTop);
    document.addEventListener('scroll', togglescrollTop);
    scrollTop.addEventListener('click', window.scrollTo({
      top: 0,
      behavior: 'smooth'
    }));
  }

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Init swiper slider with 1 slide at once in desktop view
   */
  new Swiper('.slides-1', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  /**
   * Init swiper slider with 3 slides at once in desktop view
   */
  new Swiper('.slides-3', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },

      1200: {
        slidesPerView: 3,
      }
    }
  });

  /**
   * Animation on scroll function and init
   */
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });

});

const timer = () => {
  const dayValues = document.querySelectorAll(".day");
  const hourValues = document.querySelectorAll(".hour");
  const minuteValues = document.querySelectorAll(".minute");
  const secondValues = document.querySelectorAll(".second");

  for (let i = 0; i < dayValues.length; i++) {
      const dayValue = parseInt(dayValues[i].innerText);
      const hourValue = parseInt(hourValues[i].innerText);
      const minuteValue = parseInt(minuteValues[i].innerText);
      const secondValue = parseInt(secondValues[i].innerText);

      const countDate = new Date();
      countDate.setDate(countDate.getDate() + dayValue);
      countDate.setHours(countDate.getHours() + hourValue);
      countDate.setMinutes(countDate.getMinutes() + minuteValue);
      countDate.setSeconds(countDate.getSeconds() + secondValue);

      const updateTimer = () => {
          const now = new Date().getTime();
          const remainingTime = countDate - now;

          const second = 1000;
          const minute = second * 60;
          const hour = minute * 60;
          const day = hour * 24;

          const textDay = Math.floor(remainingTime / day);
          const textHour = Math.floor((remainingTime % day) / hour);
          const textMinute = Math.floor((remainingTime % hour) / minute);
          const textSecond = Math.floor((remainingTime % minute) / second);

          dayValues[i].innerText = textDay > 0 ? textDay : 0;
          hourValues[i].innerText = textHour > 0 ? textHour : 0;
          minuteValues[i].innerText = textMinute > 0 ? textMinute : 0;
          secondValues[i].innerText = textSecond > 0 ? textSecond : 0;

          if (remainingTime > 0) {
              requestAnimationFrame(updateTimer);
          }
      };

      setTimeout(updateTimer, 0);
  }
}

timer();
//end timer //
//notification message//

const bell = document.querySelector('.notification-bell');
const list = document.querySelector('.notification-list');
const count = document.querySelector('.notification-count');
const closeNotificationButtons = document.querySelectorAll('.close-notification');

// إظهار/إخفاء قائمة الإشعارات عند النقر على جرس الإشعارات
bell.addEventListener('click', function () {
  list.style.display = list.style.display === 'block' ? 'none' : 'block';
});

// إغلاق الإشعار عند النقر على زر الإغلاق (X)
closeNotificationButtons.forEach(function (button) {
  button.addEventListener('click', function (event) {
      event.stopPropagation();
      const li = button.parentElement;
      li.parentElement.removeChild(li);
      updateNotificationCount();
  });
});

// تحديث عدد الإشعارات
function updateNotificationCount() {
  const messages = document.querySelectorAll('.notification-list li');
  const num = messages.length;
  count.innerText = num;

  // عرض عدد الإشعارات على زر الجرس
  const bellCount = document.querySelector('.notification-bell .notification-count');
  bellCount.innerText = num;
}

// عرض عدد الإشعارات عند تحميل الصفحة
updateNotificationCount();

//end notification message//

// First Like Button   
var btnvar1 = document.getElementById('btnh1');

function Toggle1() {
  if (btnvar1.style.color == "red") {
      btnvar1.style.color = "gray"
  }
  else {
      btnvar1.style.color = "red"
  }
}

var btnvar2 = document.getElementById('btnh2');

function Toggle2() {
  if (btnvar2.style.color == "red") {
      btnvar2.style.color = "gray"
  }
  else {
      btnvar2.style.color = "red"
  }
}

var btnvar3 = document.getElementById('btnh3');

function Toggle3() {
  if (btnvar3.style.color == "red") {
      btnvar3.style.color = "gray"
  }
  else {
      btnvar3.style.color = "red"
  }
}

var btnvar4 = document.getElementById('btnh4');

function Toggle4() {
  if (btnvar4.style.color == "red") {
      btnvar4.style.color = "gray"
  }
  else {
      btnvar4.style.color = "red"
  }
}

var btnvar5 = document.getElementById('btnh5');

function Toggle5() {
  if (btnvar5.style.color == "red") {
      btnvar5.style.color = "gray"
  }
  else {
      btnvar5.style.color = "red"
  }
}

var btnvar6 = document.getElementById('btnh6');

function Toggle6() {
  if (btnvar6.style.color == "red") {
      btnvar6.style.color = "gray"
  }
  else {
      btnvar6.style.color = "red"
  }
}

var btnvar7 = document.getElementById('btnh7');

function Toggle7() {
  if (btnvar7.style.color == "red") {
      btnvar7.style.color = "gray"
  }
  else {
      btnvar7.style.color = "red"
  }
}


