// document.addEventListener("DOMContentLoaded", function () {
//     const smoothScroll = (targetElement) => {
//         if (!targetElement) return;
        
//         gsap.to(window, {
//             duration: 1,
//             scrollTo: { y: targetElement, offsetY: -50 },
//             ease: "power2.inOut"
//         });
//     };

//     // Handle planos navigation
//     document.querySelectorAll('a[href="#planos"]').forEach(link => {
//         link.addEventListener("click", (e) => {
//             e.preventDefault();
//             const isHomePage = window.location.pathname === "/";
            
//             if (isHomePage) {
//                 smoothScroll(document.getElementById("planos"));
//             } else {
//                 window.location.href = "/?scroll=planos";
//             }
//         });
//     });

//     // Handle URL parameter scroll on page load
//     if (window.location.search.includes("scroll=planos")) {
//         setTimeout(() => {
//             smoothScroll(document.getElementById("planos"));
//         }, 500);
//     }

//     // Handle other anchor links
//     document.querySelectorAll("a[href^='#']:not([href='#planos'])").forEach(anchor => {
//         anchor.addEventListener("click", (e) => {
//             e.preventDefault();
//             const targetElement = document.getElementById(anchor.getAttribute("href").substring(1));
//             smoothScroll(targetElement);
//         });
//     });
// });


document.addEventListener("DOMContentLoaded", function () {
    const smoothScroll = (targetElement) => {
        if (!targetElement) return;

        // Use window.scrollTo with smooth behavior
        targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
    };

    // Handle planos navigation
    document.querySelectorAll('a[href="#planos"]').forEach(link => {
        link.addEventListener("click", (e) => {
            e.preventDefault();
            const isHomePage = window.location.pathname === "/";

            if (isHomePage) {
                smoothScroll(document.getElementById("planos"));
            } else {
                window.location.href = "/?scroll=planos";
            }
        });
    });

    // Handle URL parameter scroll on page load
    if (window.location.search.includes("scroll=planos")) {
        setTimeout(() => {
            smoothScroll(document.getElementById("planos"));
        }, 500);
    }

    // Handle other anchor links
    document.querySelectorAll("a[href^='#']:not([href='#planos'])").forEach(anchor => {
        anchor.addEventListener("click", (e) => {
            e.preventDefault();
            const targetElement = document.getElementById(anchor.getAttribute("href").substring(1));
            smoothScroll(targetElement);
        });
    });
});
