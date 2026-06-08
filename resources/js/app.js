import './bootstrap';

const menuButton = document.querySelector('.mobile-menu-button');
const mobileMenu = document.querySelector('#mobile-menu');
const mobileLinks = document.querySelectorAll('.mobile-link');

const closeMenu = () => {
    if (!menuButton || !mobileMenu) {
        return;
    }

    menuButton.classList.remove('is-open');
    menuButton.setAttribute('aria-expanded', 'false');
    mobileMenu.classList.add('hidden');
};

if (menuButton && mobileMenu) {
    menuButton.addEventListener('click', () => {
        const isOpen = menuButton.classList.toggle('is-open');

        menuButton.setAttribute('aria-expanded', String(isOpen));
        mobileMenu.classList.toggle('hidden', !isOpen);
    });

    mobileLinks.forEach((link) => link.addEventListener('click', closeMenu));
}

const revealItems = document.querySelectorAll('.reveal');

if ('IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.16 },
    );

    revealItems.forEach((item) => revealObserver.observe(item));
} else {
    revealItems.forEach((item) => item.classList.add('is-visible'));
}
