import Swiper from "../library/js/swiper-bundle.min.js";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

console.log("Welcome Anacours");

function initHeader() {
  console.log("init Header Height");
  var topNavHeader = document.querySelector(".top-header");
  var TopNavHeaderHeight = topNavHeader.offsetHeight;
  console.log(TopNavHeaderHeight);

  var BottomNavHeader = document.querySelector(".bottom-header");
  BottomNavHeader.style.marginTop = TopNavHeaderHeight + "px";

  var CoursParticulierHeader = document.querySelector(
    ".header-cours-particuliers-container"
  );
  var StagesIntensifsHeader = document.querySelector(
    ".header-stages-intensifs-container"
  );
  var DeroulantMenuCoursParticuliers = document.querySelector(
    "#header-cours-particulier"
  );
  var DeroulantMenuStagesIntensifs = document.querySelector(
    "#header-stages-intensifs"
  );
  var Main = document.querySelector("main");

  CoursParticulierHeader.addEventListener("click", function () {
    DeroulantMenuStagesIntensifs.classList.remove("active");
    StagesIntensifsHeader.classList.remove("active");
    DeroulantMenuCoursParticuliers.classList.toggle("active");
    CoursParticulierHeader.classList.toggle("active");
  });
  StagesIntensifsHeader.addEventListener("click", function () {
    DeroulantMenuCoursParticuliers.classList.remove("active");
    CoursParticulierHeader.classList.remove("active");
    DeroulantMenuStagesIntensifs.classList.toggle("active");
    StagesIntensifsHeader.classList.toggle("active");
  });
  Main.addEventListener("click", function () {
    DeroulantMenuCoursParticuliers.classList.remove("active");
    CoursParticulierHeader.classList.remove("active");
    StagesIntensifsHeader.classList.remove("active");
    DeroulantMenuStagesIntensifs.classList.remove("active");
  });
}
initHeader();

function InitNewsSwipper() {
  const swiperOne = new Swiper(".swiper", {
    loop: true,
    speed: 1000,
    slidesPerView: "1",
    centerSlides: true,
    spaceBetween: 50,
    breakpoints: {
      1024: {
        slidesPerView: "3",
        spaceBetween: 20,
      },
    },
    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },
    navigation: {
      prevEl: ".prev-ctrl",
      nextEl: ".next-ctrl",
    },
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
    },
  });
}
InitNewsSwipper();

function InitNewsSwipperTwo() {
  const swiperTwo = new Swiper(".swiper-two", {
    loop: false,
    speed: 1000,
    slidesPerView: "1",
    spaceBetween: 50,
    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
    },
  });
}
InitNewsSwipperTwo();

function InitNewsSwipperThree() {
  const swiperThree = new Swiper(".swiper-three", {
    loop: true,
    speed: 1000,
    slidesPerView: "3",
    spaceBetween: 110,
    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },
    navigation: {
      prevEl: ".prev-ctrl",
      nextEl: ".next-ctrl",
    },
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
    },
  });
}
InitNewsSwipperThree();

function InitNewsSwipperFour() {
  const swiperFour = new Swiper(".swiper-four-mobile", {
    loop: true,
    speed: 1000,
    centerSlides: true,
    slidesPerView: "1",
    spaceBetween: "10%",
    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
    },
  });
}
InitNewsSwipperFour();

function Scrollheader() {
  var TopHeader = document.querySelector(".desktop-header .top-header");
  var TopHeaderContainer = document.querySelector(
    ".desktop-header .top-header-container"
  );
  var Bottomheader = document.querySelector(".desktop-header .bottom-header");

  window.addEventListener("scroll", function () {
    var BottomheaderoffsetHeight = Bottomheader.getBoundingClientRect().top;
    if (BottomheaderoffsetHeight <= 0) {
      TopHeader.classList.add("scroll");
      TopHeaderContainer.classList.add("scroll");
    } else {
      TopHeader.classList.remove("scroll");
      TopHeaderContainer.classList.remove("scroll");
    }
  });
}
Scrollheader();

/*
function AnimHomePage(){
    var HomeSolutionTitle = document.querySelector('.home-solutions-container h2')
    var HomeMapTitle = document.querySelector('.home-map-container h2')
    var HomeMapParagraphe = document.querySelector('.home-map-container p')
    var HomeArgumentItems = document.querySelectorAll('.home-argument-item')
    var HomeEnseignantsTitle = document.querySelector('.home-enseignants-container h2')
    var HomeAvisWrapper = document.querySelector('.home-avis-commentaires-wrapper')
    var HomeAvisColumn1 = document.querySelector('.home-avis-commentaires-column:first-child')
    var HomeAvisColumn2 = document.querySelector('.home-avis-commentaires-column:nth-child(2)')
    var HomeAvisColumn3 = document.querySelector('.home-avis-commentaires-column:nth-child(3)')
    var HomeNewsTitle = document.querySelector('.home-magazine-container h2')
    var HomeLanding = document.querySelector('.home-landing-bandeau')
    var HomeLandingSousTitre = document.querySelector('.home-landing-bandeau-search-wrapper p')
    var HomeLandingInput = document.querySelectorAll('.home-landing-bandeau-searchbar input')
    var HomeLandingBtn = document.querySelector('.home-landing-bandeau-searchbar button')
    var HomeLandingImages = document.querySelectorAll('.home-landing-bandeau-title-container img')
    var HomeLandingParagraphe = document.querySelector('.home-landing-bandeau-text-wrapper p')
    var HomeServicesBoxs = document.querySelectorAll('.home-solution-box')
    var HomeMapList = document.querySelectorAll('.home-map-list-item')
    var HomeNewsSlides = document.querySelectorAll('.home-magazine-wrapper .swiper-wrapper .swiper-slide')

    gsap.fromTo(HomeNewsSlides, 0.5, { opacity: 0, y: 25 },
    {   opacity: 1, y: 0, stagger: 0.1,
        scrollTrigger: {
            trigger: HomeNewsSlides,
            start: "top 90%",
        }
    });

    gsap.fromTo(HomeMapList, 0.5, { opacity: 0, y: 25 },
    {   opacity: 1, y: 0, stagger: 0.1,
        scrollTrigger: {
            trigger: HomeMapList,
            start: "top 90%",
        }
    });
    gsap.fromTo(HomeLandingImages, 0.5, { opacity: 0, y: -25 },
    {   opacity: 1, y: 0, stagger: 0.1,
        scrollTrigger: {
            trigger: HomeLanding,
            start: "top 90%",
        }
    });
    gsap.fromTo(HomeLandingParagraphe, 0.5, { opacity: 0, y: -25 },
    {   opacity: 1, y: 0,
        scrollTrigger: {
            trigger: HomeLanding,
            start: "top 90%",
        }
    });
    gsap.fromTo(HomeLandingSousTitre, 0.5, { opacity: 0, y: 25 },
    {   opacity: 1, y: 0,
        scrollTrigger: {
            trigger: HomeLanding,
            start: "top 90%",
        }
    });
    gsap.fromTo(HomeLandingInput, 0.5, { opacity: 0, y: 25 },
    {   opacity: 1, y: 0, stagger: 0.1,
        scrollTrigger: {
            trigger: HomeLanding,
            start: "top 90%",
        }
    });
    gsap.fromTo(HomeLandingBtn, 0.5, { opacity: 0, y: 25 },
    {   opacity: 1, y: 0, delay: 0.4,
        scrollTrigger: {
            trigger: HomeLanding,
            start: "top 90%",
        }
    });
    gsap.fromTo(HomeSolutionTitle, 0.5, { opacity: 0, y: 25 },
    {   opacity: 1, y: 0,
        scrollTrigger: {
            trigger: HomeSolutionTitle,
            start: "top 90%",
        }
    });
    gsap.fromTo(HomeServicesBoxs, 0.5, { opacity: 0, y: 25 },
    {   opacity: 1, y: 0, stagger: 0.1,
        scrollTrigger: {
            trigger: HomeServicesBoxs,
            start: "top 90%",
        }
    });
    gsap.fromTo(HomeMapTitle, 0.5, { opacity: 0, y: 25 },
    {   opacity: 1, y: 0,
        scrollTrigger: {
            trigger: HomeMapTitle,
            start: "top 90%",
        }
    });
    gsap.fromTo(HomeNewsTitle, 0.5, { opacity: 0, y: 25 },
    {   opacity: 1, y: 0,
        scrollTrigger: {
            trigger: HomeNewsTitle,
            start: "top 90%",
        }
    });
    gsap.fromTo(HomeMapParagraphe, 0.5, { opacity: 0, y: 25 },
    {   opacity: 1, y: 0,
        scrollTrigger: {
            trigger: HomeMapParagraphe,
            start: "top 90%",
        }
    });
    gsap.fromTo(HomeEnseignantsTitle, 0.5, { opacity: 0, y: 25 },
    {   opacity: 1, y: 0,
        scrollTrigger: {
            trigger: HomeEnseignantsTitle,
            start: "top 90%",
        }
    });
    gsap.fromTo(HomeArgumentItems, 0.5, { opacity: 0, y: 25 },
    {   opacity: 1, y: 0, stagger: 0.1,
        scrollTrigger: {
            trigger: HomeArgumentItems,
            start: "top 90%",
        }
    });
    gsap.fromTo(HomeAvisColumn1, 1, { opacity: 0, y: 200 },
    {   opacity: 1, y: 0,
        scrollTrigger: {
            trigger: HomeAvisWrapper,
            start: "top 90%",
        }
    });
    gsap.fromTo(HomeAvisColumn2, 1, { opacity: 0, y: -200 },
    {   opacity: 1, y: 0,
        scrollTrigger: {
            trigger: HomeAvisWrapper,
            start: "top 90%",
        }
    });
    gsap.fromTo(HomeAvisColumn3, 1, { opacity: 0, y: 200 },
    {   opacity: 1, y: 0,
        scrollTrigger: {
            trigger: HomeAvisWrapper,
            start: "top 90%",
        }
    });
}AnimHomePage()*/
