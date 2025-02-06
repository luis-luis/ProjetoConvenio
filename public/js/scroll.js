document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll("a[href^='#']").forEach(anchor => {
        anchor.addEventListener("click", function(e) {
            e.preventDefault();
            const targetId = this.getAttribute("href").substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 50, // Ajuste para evitar que o topo da seção fique colado no navegador
                    behavior: "smooth"
                });
            }
        });
    });
});
