//ハンバーガーメニュー

document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("menuButton").addEventListener("click", function () {
    this.classList.toggle("active");
    document.getElementById("nav").classList.toggle("active");
    document.getElementById("mask").classList.toggle("active");
    document.getElementById("ul").classList.toggle("active");
  });
  document.getElementById("mask").addEventListener("click", function () {
    this.classList.toggle("active");
    document.getElementById("nav").classList.toggle("active");
    document.getElementById("menuButton").classList.toggle("active");
    document.getElementById("ul").classList.toggle("active");
  });
  document.getElementById("ul").addEventListener("click", function () {
    this.classList.toggle("active");
    document.getElementById("nav").classList.toggle("active");
    document.getElementById("menuButton").classList.toggle("active");
    document.getElementById("ul").classList.toggle("active");
    document.getElementById("mask").classList.toggle("active");
  });
});

//スライダー

const swiper = new Swiper(".swiper-container", {
  // Optional parameters
  // direction: 'vertical',

  speed: 3000,
  loop: true,
  autoplay: {
    delay: 250,
  },
  effect: "fade",

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

//クリックでドロワーを閉じる
