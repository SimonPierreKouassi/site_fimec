// comportement minimal pour toggler et ouverture recherche (sans jQuery)
document.addEventListener('DOMContentLoaded', function () {
    var toggle = document.querySelector('.nav-toggle');
    var navList = document.querySelector('.nav-list');
    var searchOpen = document.querySelector('.search-open');

    if (toggle && navList) {
        toggle.addEventListener('click', function () {
            var expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !expanded);
            navList.classList.toggle('active');
        });
    }

    if (searchOpen) {
        searchOpen.addEventListener('click', function (e) {
            e.preventDefault();
            var popup = document.querySelector('.search-popup');
            if (popup) popup.classList.toggle('open');
        });
    }
});