document.addEventListener("DOMContentLoaded", function() {
  document.querySelectorAll("a[href^='#']").forEach(anchor => {
      anchor.addEventListener("click", function(e) {
          e.preventDefault();
          const targetId = this.getAttribute("href").substring(1);
          const targetElement = document.getElementById(targetId);

          if (targetElement) {
              // iOS fix for smooth scrolling
              const yOffset = -50;
              const y = targetElement.getBoundingClientRect().top + window.pageYOffset + yOffset;
              
              window.scrollTo({
                  top: y,
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
          event.preventDefault();
          
          const isHomePage = window.location.pathname === "/";
          
          if (isHomePage) {
              const planosSection = document.getElementById("planos");
              if (planosSection) {
                  // iOS fix for smooth scrolling
                  const yOffset = -50;
                  const y = planosSection.getBoundingClientRect().top + window.pageYOffset + yOffset;
                  
                  window.scrollTo({
                      top: y,
                      behavior: "smooth"
                  });
              }
          } else {
              window.location.href = "/?scroll=planos";
          }
      });
  });

  if (window.location.search.includes("scroll=planos")) {
      const planosSection = document.getElementById("planos");
      if (planosSection) {
          setTimeout(() => {
              const yOffset = -50;
              const y = planosSection.getBoundingClientRect().top + window.pageYOffset + yOffset;
              
              window.scrollTo({
                  top: y,
                  behavior: "smooth"
              });
          }, 500);
      }
  }
});