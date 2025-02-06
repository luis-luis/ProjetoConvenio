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

document.addEventListener("DOMContentLoaded", function () {
    const planosLinks = document.querySelectorAll('a[href*="scroll=planos"]');
  
    planosLinks.forEach(link => {
      link.addEventListener("click", function (event) {
        event.preventDefault(); // Evita o comportamento padrão do link
  
        const isHomePage = window.location.pathname === "/"; // Verifica se está na home
        
        if (isHomePage) {
          // Está na home → Faz a rolagem suave
          const planosSection = document.getElementById("planos");
          if (planosSection) {
            planosSection.scrollIntoView({ behavior: "smooth" });
          }
        } else {
          // Não está na home → Redireciona e adiciona um parâmetro na URL
          window.location.href = "/?scroll=planos";
        }
      });
    });
  
    // Se chegou na home com ?scroll=planos, faz a rolagem automática
    if (window.location.search.includes("scroll=planos")) {
      const planosSection = document.getElementById("planos");
      if (planosSection) {
        setTimeout(() => {
          planosSection.scrollIntoView({ behavior: "smooth" });
        }, 500); // Pequeno delay para garantir que a página carregou
      }
    }
  });
  
