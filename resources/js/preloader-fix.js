window.addEventListener('load', function () {
    var pre = document.querySelector('.preloader');
    if (!pre) return;

    // si jQuery est disponible, utiliser fadeOut pour garder l'animation
    if (window.jQuery) {
        try {
            window.jQuery(pre).fadeOut(600, function () {
                if (pre.parentNode) pre.parentNode.removeChild(pre);
            });
            return;
        } catch (e) {
            // fallback si erreur jQuery
        }
    }

    // fallback sans jQuery : transition opacity puis suppression
    pre.style.transition = 'opacity 0.6s ease';
    pre.style.opacity = '0';
    setTimeout(function () {
        if (pre.parentNode) pre.parentNode.removeChild(pre);
    }, 700);
});