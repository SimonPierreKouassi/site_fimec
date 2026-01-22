/**
 * Bundle JS central : expose jQuery globalement puis importe les plugins
 * Ordre important : jquery en premier, puis plugins qui en dépendent.
 */

import './jquery-3.7.1.min.js';
window.$ = window.jQuery = window.jQuery || window.$ || window.$$ || undefined;

// Importer plugins/local scripts (ordre approximatif ; adapte si besoin)
import './jquery-3.7.1.min.js';
import './bootstrap.bundle.min.js';
import './imagesloaded.pkgd.min.js';
import './jquery.magnific-popup.min.js';
import './isotope.pkgd.min.js';
import './jquery.appear.min.js';
import './jquery.easing.min.js';
import './owl.carousel.min.js';
import './counter-up.js';
import './wow.min.js';
import './countdown.min.js';
//import './email-decode.min.js';
//import './multi-tabs.js';
import './header.js';
import './preloader-fix.js';
import './main.js';

// Sécurité supplémentaire pour masquer le preloader au load
window.addEventListener('load', function () {
    try {
        var pre = document.querySelector('.preloader');
        if (!pre) return;
        if (window.jQuery && typeof window.jQuery(pre).fadeOut === 'function') {
            window.jQuery(pre).fadeOut(600, function () { pre.remove(); });
            return;
        }
        pre.style.transition = 'opacity 0.6s ease';
        pre.style.opacity = '0';
        setTimeout(function () { pre.remove(); }, 700);
    } catch (e) {
        // ignore
        console.error('Preloader hide error:', e);
    }
});