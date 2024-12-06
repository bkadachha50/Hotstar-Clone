var p1 = document.querySelectorAll(".p1");
var zoom = document.querySelectorAll("i");
var blur = document.querySelector(".nav-section");

function show() {
    p1.forEach(p1 => {     
       p1.style.opacity = "1";
       p1.style.visibility = "visible";
       p1.style.transition = "all linear 2s";
    });
}; 

function left() {
    p1.forEach(p1 => {     
       p1.style.opacity = "0";
       p1.style.visibility = "hidden";
       p1.style.transition = "all linear 0.5s";
    });
};

gsap.to(".section-1",{
    backgroundColor: "#0f1014",
    scrollTrigger:{
      trigger:".btn2",
      marker: true,
      scroller:"body",
      start: "top 50%",
      end: "top -60%",
      scrub:3
    }
})

gsap.to(".main,.x1,.x2,.Type,#btn,#btn2,.bg-image",{
    opacity: 0,
    scrollTrigger:{
      trigger:".btn",
      marker: true,
      scroller:"body",
      top: "top -50%",
      end: "top -70%",
      scrub:3
    }
})