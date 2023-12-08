document.addEventListener('DOMContentLoaded', function () { //initier la fonction

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
});