document.addEventListener("DOMContentLoaded", function () {
  // Initier la fonction

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

  const nouveautesItems = document.querySelectorAll(".nouveautes-item");

  if (nouveautesItems.length > 0) {
    nouveautesItems.forEach(function (item) {
      item.addEventListener("click", function () {
        const productId = item.dataset.productId; // Dataset récupère les attributs data-....
        window.location.href = "product.php?id=" + productId; // Redirige vers la page product.php avec l'id du produit stocké dans l'URL
      });
    });
  }

  const promotionItems = document.querySelectorAll(".promotions-item");

  if (promotionItems.length > 0) {
    promotionItems.forEach(function (item) {
      item.addEventListener("click", function () {
        const productId = item.dataset.productId; // Dataset récupère les attributs data-....
        window.location.href = "product.php?id=" + productId; // Redirige vers la page product.php avec l'id du produit stocké dans l'URL
      });
    });
  }

  const kitsPacksItems = document.querySelectorAll(".kits-packs-item");

  if (kitsPacksItems.length > 0) {
    kitsPacksItems.forEach(function (item) {
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
});
