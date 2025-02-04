import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import ScrollToPlugin from "gsap/ScrollToPlugin";

gsap.registerPlugin(ScrollToPlugin);
gsap.registerPlugin(ScrollTrigger);

//navigation
document.addEventListener("click", (e) => {
  if (e.target.classList.contains("mobile-scroll-link")
    || e.target.classList.contains("tablet-scroll-link")) {
    e.preventDefault();
    const target = document.querySelector(e.target.getAttribute("href"));
    if (target) {
      const navbarHeight = e.target.classList.contains("mobile-scroll-link")
        ? document.querySelector("#mobile-menu")?.offsetHeight || 0
        : document.querySelector("#tablet-menu")?.offsetHeight || 0;

      gsap.to(window, {
        scrollTo: { y: target, offsetY: navbarHeight },
        duration: 2,
        ease: "power2.inOut",
      });
    }
  }
});


//section about
gsap.utils.toArray(".gsap-animate-about, .gsap-animate-collection").forEach((el) => {
  gsap.from(el, {
    opacity: 0,
    scale: 0.9,
    duration: 1,
    scrollTrigger: {
      trigger: el,
      start: "top 80%",
      end: "top 30%",
      toggleActions: "play none none none",
    },
  });
});


//section curriculum vitae
gsap.from(".gsap-animate-cv", {
  opacity: 0,
  scale: 0.9,
  duration: 1,
  scrollTrigger: {
    trigger: ".gsap-animate-cv",
    start: "top 70%",
    //Keywords: play, pause, resume, reverse, restart, complete, reset
    //Order: onEnter, onLeave, onEnterBack, onLeaveBack.  
    toggleActions: "play none none none",
  },
});

//section experiences
document.querySelectorAll(".gsap-animate-experiences").forEach((experience) => {
  gsap.from(experience, {
    opacity: 0,
    scale: 0.8,
    duration: Math.random() * 5,
    scrollTrigger: {
      trigger: experience,
      start: "top 80%",
      end: "top 10%",
      //Keywords: play, pause, resume, reverse, restart, complete, reset
      //Order: onEnter, onLeave, onEnterBack, onLeaveBack.      
      toggleActions: "play reverse play reverse",
    },
  })
});

//section cv_part
document.querySelectorAll(".gsap-animate-cv-part").forEach((cv_part) => {
  gsap.from(cv_part, {
    opacity: 0,
    scale: 0.8,
    scrollTrigger: {
      trigger: cv_part,
      start: "top 80%",
      end: "top 10%",
      //Keywords: play, pause, resume, reverse, restart, complete, reset
      //Order: onEnter, onLeave, onEnterBack, onLeaveBack.      
      toggleActions: "play reverse play reverse",
    },
  })
});

//section contact
gsap.from(".gsap-animate-contact", {
  opacity: 0,
  scale: 0.9,
  duration: 1,
  scrollTrigger: {
    trigger: ".gsap-animate-contact",
    start: "top 80%",
    end: "top 30%",
    //Keywords: play, pause, resume, reverse, restart, complete, reset
    //Order: onEnter, onLeave, onEnterBack, onLeaveBack.
    toggleActions: "play none none reverse",
  },
});
