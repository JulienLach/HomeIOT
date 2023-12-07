document.addEventListener('DOMContentLoaded', () => {

    const hamburgerButton = document.querySelector('.hamburger-button');  // ici définir les constante que je vais animer en cliquant dessus , ici le boutton et le menu en lui même
    const mobileMenu = document.querySelector('.mobile-menu');

    hamburgerButton.addEventListener('click', () =>
        mobileMenu.classList.toggle('active')
    );
});