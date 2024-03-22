document.addEventListener("DOMContentLoaded", function () {
  // MOBILE MENU

  const iconMenu = document.querySelector(".icon-menu");
  const iconClose = document.querySelector(".icon-close");

  iconMenu.addEventListener("click", function () {
    // Première fonction quand je clique sur l'icone hamburger

    iconMenu.style.display = "none";
    iconClose.style.display = "block";
  });

  iconClose.addEventListener("click", function () {
    // Afficher l'icone croix

    iconMenu.style.display = "block";
    iconClose.style.display = "none";
  });

  const iconMobileMenu = document.querySelector(".icon-menu");
  const mobileMenu = document.querySelector(".mobile-menu");

  iconMobileMenu.addEventListener("click", () =>
    mobileMenu.classList.toggle("active")
  );

  iconClose.addEventListener("click", () =>
    mobileMenu.classList.toggle("active")
  );

  // FONCTIONS DE RENVOI VERS PAGE PRODUCT POUR CHAQUE ARTICLE CLIQUÉ

  const topSellersItems = document.querySelectorAll(".top-sellers-item");

  if (topSellersItems.length > 0) {
    topSellersItems.forEach(function (item) {
      item.addEventListener("click", function () {
        window.location.href = "product.php";
      });
    });
  }

  const nouveautesItems = document.querySelectorAll(".product-id");

  if (nouveautesItems.length > 0) {
    nouveautesItems.forEach(function (item) {
      item.addEventListener("click", function () {
        const productId = item.dataset.productId; // Dataset récupère les attributs data-....
        window.location.href = "product.php?id=" + productId; // Redirige vers la page product.php avec l'id du produit stocké dans l'URL
      });
    });
  }

  // FONCTION SLIDER HEADER BANNER //

  var slides = document.querySelectorAll(".slide");
  var currentSlide = 0; // Slide au chargement de la page
  var slideInterval = setInterval(nextSlide, 8000); // Change le slide toutes les 8 secondes

  function nextSlide() {
    slides[currentSlide].classList.remove("active");
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.add("active");
  }

  // Fonction pour afficher la technical_sheet et la description longue du produit
  const technicalSheetButton = document.getElementById("technical-sheet-btn");
  const descriptionButton = document.getElementById("description-btn");
  const technicalSheetParagraph = document.getElementById(
    "technical-sheet-paragraph"
  );
  const descriptionParagraph = document.getElementById("description-paragraph");

  // Afficher la fiche technique par défaut
  technicalSheetParagraph.classList.add("active");

  // logique pour afficher la fiche technique ou la description longue en fonction de qui est affiché
  technicalSheetButton.addEventListener("click", function () {
    if (!technicalSheetParagraph.classList.contains("active")) {
      technicalSheetParagraph.classList.add("active");
      descriptionParagraph.classList.remove("active");
    }
  });

  descriptionButton.addEventListener("click", function () {
    if (!descriptionParagraph.classList.contains("active")) {
      descriptionParagraph.classList.add("active");
      technicalSheetParagraph.classList.remove("active");
    }
  });
});
