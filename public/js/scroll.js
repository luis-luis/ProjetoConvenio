document.addEventListener("DOMContentLoaded", function () {
    const smoothScroll = (targetElement) => {
        if (!targetElement) return;
        
        // Get the target's position
        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
        
        // Add offset for header/navigation
        const offset = 50;
        const finalPosition = targetPosition - offset;

        // Use requestAnimationFrame for smoother scrolling
        window.scrollTo({
            top: finalPosition,
            behavior: 'auto' // Changed from 'smooth' to 'auto'
        });
    };

    document.querySelectorAll('a[href="#planos"]').forEach(link => {
        link.addEventListener("click", (e) => {
            e.preventDefault();
            const isHomePage = window.location.pathname === "/";
            
            if (isHomePage) {
                const targetElement = document.getElementById("planos");
                smoothScroll(targetElement);
            } else {
                window.location.href = "/?scroll=planos";
            }
        });
    });

    if (window.location.search.includes("scroll=planos")) {
        setTimeout(() => {
            const targetElement = document.getElementById("planos");
            smoothScroll(targetElement);
        }, 100); // Reduced timeout
    }
});
