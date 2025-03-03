// document.addEventListener("DOMContentLoaded", function () {
//     document.querySelectorAll("a[href^='#']").forEach(anchor => {
//         anchor.addEventListener("click", function (e) {
//             e.preventDefault();
//             const targetId = this.getAttribute("href").substring(1);
//             const targetElement = document.getElementById(targetId);

//             if (targetElement) {
//                 gsap.to(window, { duration: 1, scrollTo: { y: targetElement, offsetY: -50 }, ease: "power2.inOut" });
//             }
//         });
//     });

//     if (window.location.search.includes("scroll=planos")) {
//         const planosSection = document.getElementById("planos");
//         if (planosSection) {
//             setTimeout(() => {
//                 gsap.to(window, { duration: 1, scrollTo: { y: planosSection, offsetY: -50 }, ease: "power2.inOut" });
//             }, 500);
//         }
//     }
// });

// document.addEventListener("DOMContentLoaded", function () {
//     const planosLinks = document.querySelectorAll('a[href*="scroll=planos"]');

//     planosLinks.forEach(link => {
//         link.addEventListener("click", function (event) {
//             event.preventDefault();

//             const isHomePage = window.location.pathname === "/";

//             if (isHomePage) {
//                 const planosSection = document.getElementById("planos");
//                 if (planosSection) {
//                     // iOS fix for smooth scrolling
//                     const yOffset = -50;
//                     const y = planosSection.getBoundingClientRect().top + window.pageYOffset + yOffset;

//                     gsap.to(window, { duration: 1, scrollTo: { y: planosSection, offsetY: -50 }, ease: "power2.inOut" });

//                 }
//             } else {
//                 window.location.href = "/?scroll=planos";
//             }
//         });
//     });

//     if (window.location.search.includes("scroll=planos")) {
//         const planosSection = document.getElementById("planos");
//         if (planosSection) {
//             setTimeout(() => {
//                 const yOffset = -50;
//                 const y = planosSection.getBoundingClientRect().top + window.pageYOffset + yOffset;

//                 gsap.to(window, { duration: 1, scrollTo: { y: planosSection, offsetY: -50 }, ease: "power2.inOut" });

//             }, 500);
//         }
//     }
// });

document.addEventListener("DOMContentLoaded", function () {
    // Unified scroll function
    const smoothScroll = (targetElement) => {
        if (targetElement) {
            gsap.to(window, {
                duration: 1,
                scrollTo: { y: targetElement, offsetY: -50 },
                ease: "power2.inOut"
            });
        }
    };

    // Handle all anchor links
    document.querySelectorAll("a[href^='#']").forEach(anchor => {
        anchor.addEventListener("click", (e) => {
            e.preventDefault();
            const targetElement = document.getElementById(anchor.getAttribute("href").substring(1));
            smoothScroll(targetElement);
        });
    });

    // Handle planos links
    document.querySelectorAll('a[href*="scroll=planos"]').forEach(link => {
        link.addEventListener("click", (e) => {
            e.preventDefault();
            const isHomePage = window.location.pathname === "/";
            const planosSection = document.getElementById("planos");

            if (isHomePage) {
                smoothScroll(planosSection);
            } else {
                window.location.href = "/?scroll=planos";
            }
        });
    });

    // Handle URL parameter scroll
    if (window.location.search.includes("scroll=planos")) {
        setTimeout(() => {
            smoothScroll(document.getElementById("planos"));
        }, 500);
    }
});
