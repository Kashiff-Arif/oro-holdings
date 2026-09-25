document.addEventListener("DOMContentLoaded", (event) => {
    gsap.registerPlugin(ScrollTrigger, ScrollSmoother, ScrollToPlugin);

    const isArabic = document.documentElement.lang === "ar";

    const animationMap = {
        "fade-up": { y: 100 },
        "fade-down": { y: -100 },
        "fade-left": { x: isArabic ? -250 : 250 },
        "fade-right": { x: isArabic ? 250 : -250 },
        "zoom-in": { scale: 0.7 },
        "zoom-out": { scale: 1.3 },
    };

    Object.entries(animationMap).forEach(([type, fromVars]) => {
        const elements = gsap.utils.toArray(`[data-animate="${type}"]`);

        elements.forEach((el) => {
            const duration = parseFloat(el.getAttribute("data-animate-duration") || 1000) / 1000;
            const delay = parseFloat(el.getAttribute("data-animate-delay") || 0) / 1000;

            gsap.fromTo(
                el,
                {
                    opacity: 0,
                    visibility: "hidden",
                    ...fromVars,
                },
                {
                    opacity: 1,
                    visibility: "visible",
                    x: 0,
                    y: 0,
                    scale: 1,
                    duration,
                    delay,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: el,
                        start: "top 80%",
                        toggleActions: "play none none reverse",
                    },
                }
            );
        });
    });





    function imageReveal() {
        const revealContainers = document.querySelectorAll(".reveal");

        revealContainers.forEach((container) => {
            const image = container.querySelector("img");

            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: container,
                    toggleActions: "restart none none none",
                    start: "top 85%",
                }
            });

            tl.set(container, { autoAlpha: 1 });

            tl.from(container, {
                clipPath: isArabic ? "inset(0 0 0 100%)" : "inset(0 100% 0 0)",
                duration: 1,
                ease: Power4.easeInOut
            });

            if (container.classList.contains("reveal--overlay")) {
                tl.from(image, {
                    clipPath: isArabic ? "inset(0 0 0 100%)" : "inset(0 0 100% 0)",
                    duration: 1,
                    ease: Power4.easeOut
                });
            }

            tl.from(image, {
                scale: 1.3,
                duration: 1,
                ease: Power2.easeOut
            }, "-=1");
        });
    }

    imageReveal();

    document.querySelectorAll(".animate-right").forEach((sliderSection) => {
        gsap.from(sliderSection.querySelectorAll(".swiper-slide"), {
            x: isArabic ? "-100vw" : "100vw",
            opacity: 0,
            duration: 2,
            ease: "power2.out",
            stagger: 0.1,
            scrollTrigger: {
                trigger: sliderSection,
                start: "top 80%",
                toggleActions: "play none none none",
            },
        });
    });
    

});
document.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

    const smoother = ScrollSmoother.create({
        wrapper: "#smooth-wrapper",
        content: "#smooth-content",
        smooth: 1.6,
        effects: true,
    });

    // const header = document.querySelector("header");
    // const headerHeight = header ? header.offsetHeight : 60;

    // document.querySelectorAll('a[href*="#"]').forEach((link) => {
    //     link.addEventListener("click", (e) => {
    //         const url = new URL(link.href, window.location.href);

    //         // Only handle links pointing to current page
    //         if (url.pathname !== window.location.pathname) return;

    //         const target = document.querySelector(url.hash);

    //         if (!target) return;

    //         e.preventDefault();

    //         const targetY =
    //             target.getBoundingClientRect().top +
    //             smoother.scrollTop();

    //         smoother.scrollTo(targetY - headerHeight, {
    //             duration: 1.5
    //         });
    //     });
    // });
    // if (window.location.hash) {
    //     const target = document.querySelector(window.location.hash);

    //     if (target) {
    //         // Wait until ScrollSmoother/layout is ready
    //         setTimeout(() => {
    //             const targetY =
    //                 target.getBoundingClientRect().top +
    //                 smoother.scrollTop();

    //             smoother.scrollTo(targetY - headerHeight, {
    //                 duration: 1.5
    //             });
    //         }, 100);
    //     }
    // }
});

// const loader = document.getElementById("pageLoader");
// const progressBar = document.querySelector(".loader-progress-bar");
// const sectionHead = document.querySelector(".sectionHead");
// const header = document.querySelector(".header");
// const hero = document.querySelector(".hero");
// const innerBanner = document.querySelector(".inner-banner");

// let progress = 0;

// const loaderInterval = setInterval(() => {
//   progress += Math.floor(Math.random() * 5) + 1;

//   if (progress >= 100) {
//     progress = 100;
//     clearInterval(loaderInterval);

//     setTimeout(() => {
//       // Hide loader
//       if (loader) {
//         loader.classList.add("hide");
//       }

//       // Header + Page Wrapper
//       setTimeout(() => {
//         if (header) {
//           header.classList.add("animate");
//         }

//         if (hero) {
//           hero.classList.add("animate");
//         }

//         if (innerBanner) {
//           innerBanner.classList.add("animate");
//         }

//         // Section Head
//         setTimeout(() => {
//           if (sectionHead) {
//             sectionHead.classList.add("animate");
//           }

//           // SectionHead complete hone ke baad Swiper animation
//           setTimeout(() => {
//             document.querySelectorAll(".swiper").forEach((sliderSection) => {
//               const slides = sliderSection.querySelectorAll(".swiper-slide");

//               if (!slides.length) return;

//               gsap.to(slides, {
//                 opacity: 1,
//                 duration: 1.2,
//                 ease: "power2.out",
//                 stagger: 0.15,
//                 scrollTrigger: {
//                   trigger: sliderSection,
//                   start: "top 80%",
//                   toggleActions: "play none none none",
//                 },
//               });
//             });
//           }, 1400);

//         }, 500);

//       }, 500);

//     }, 300);
//   }

//   if (progressBar) {
//     progressBar.style.width = `${progress}%`;
//   }

// }, 80);

const loader = document.getElementById("pageLoader");
const progressBar = document.querySelector(".loader-progress-bar");
const sectionHead = document.querySelector(".sectionHead");
const header = document.querySelector(".header");
const hero = document.querySelector(".hero");
const innerBanner = document.querySelector(".inner-banner");

let progress = 0;

if (loader) {
  const loaderInterval = setInterval(() => {
    progress += Math.floor(Math.random() * 5) + 1;

    if (progress >= 100) {
      progress = 100;
      clearInterval(loaderInterval);

      setTimeout(() => {
        loader.classList.add("hide");

        setTimeout(() => {
          if (header) {
            header.classList.add("animate");
          }

          if (hero) {
            hero.classList.add("animate");
          }

          if (innerBanner) {
            innerBanner.classList.add("animate");
          }

          setTimeout(() => {
            if (sectionHead) {
              sectionHead.classList.add("animate");
            }

            setTimeout(() => {
              document.querySelectorAll(".swiper").forEach((sliderSection) => {
                const slides =
                  sliderSection.querySelectorAll(".swiper-slide");

                if (!slides.length) return;

                gsap.to(slides, {
                  opacity: 1,
                  duration: 1.2,
                  ease: "power2.out",
                  stagger: 0.15,
                  scrollTrigger: {
                    trigger: sliderSection,
                    start: "top 80%",
                    toggleActions: "play none none none",
                  },
                });
              });
            }, 1400);

          }, 500);

        }, 500);

      }, 300);
    }

    if (progressBar) {
      progressBar.style.width = `${progress}%`;
    }
  }, 80);
} else {

  if (header) {
    header.classList.add("animate");
  }

  if (hero) {
    hero.classList.add("animate");
  }

  if (innerBanner) {
    innerBanner.classList.add("animate");
  }

  if (sectionHead) {
    sectionHead.classList.add("animate");
  }
}