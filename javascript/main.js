document.addEventListener('DOMContentLoaded', function () { //initier la fonction


    // MOBILE MENU

    const iconMenu = document.querySelector('.icon-menu');
    const iconClose = document.querySelector('.icon-close');

    iconMenu.addEventListener('click', function () {  //première fonction quand je clique sur l'icone hamburger

        iconMenu.style.display = 'none';
        iconClose.style.display = 'block';
    });

    iconClose.addEventListener('click', function () {  //afficher l'icone croix

        iconMenu.style.display = 'block';
        iconClose.style.display = 'none';
    });


    const iconMobileMenu = document.querySelector('.icon-menu');
    const mobileMenu = document.querySelector('.mobile-menu');

    iconMobileMenu.addEventListener('click', () =>
        mobileMenu.classList.toggle('active')

    );

    iconClose.addEventListener('click', () =>
        mobileMenu.classList.toggle('active')

    );



    // FONCTIONS DE RENVOI VERS PAGE PRODUCT POUR CHAQUE ARTICLE 

    const topSellersItems = document.querySelectorAll('.top-sellers-item');

    if (topSellersItems.length > 0) {
        topSellersItems.forEach(function (item) {
            item.addEventListener('click', function () {
                // Redirect to product.html for each clicked element
                window.location.href = 'product.html';
            });
        });
    }

    const nouveautesItems = document.querySelectorAll('.nouveautes-item');

    if (nouveautesItems.length > 0) {
        nouveautesItems.forEach(function (item) {
            item.addEventListener('click', function () {
                window.location.href = 'product.html';
            });
        });
    }

    const promotionItems = document.querySelectorAll('.promotions-item');

    if (promotionItems.length > 0) {
        promotionItems.forEach(function (item) {
            item.addEventListener('click', function () {
                window.location.href = 'product.html';
            });
        });
    }

    const kitsPacksItems = document.querySelectorAll('.kits-packs-item');

    if (kitsPacksItems.length > 0) {
        kitsPacksItems.forEach(function (item) {
            item.addEventListener('click', function () {
                window.location.href = 'product.html';
            });
        });
    }
});





nouveautes - item

