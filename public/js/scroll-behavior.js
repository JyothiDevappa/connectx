// Global Scroll Behavior for ConnectX
// Handles sticky navbar and smooth scrolling across all pages

(function() {
    'use strict';

    // Initialize smooth scroll behavior
    document.documentElement.style.scrollBehavior = 'smooth';

    // Handle sticky header on scroll
    const header = document.getElementById('hdr');
    if (header) {
        window.addEventListener('scroll', () => {
            header.classList.toggle('scrolled', window.scrollY > 80);
        });
    }

    // Initialize cursor tracking (if cursors exist)
    const cur = document.getElementById('cur');
    const curR = document.getElementById('curR');
    
    if (cur && curR) {
        let mx = 0, my = 0, rx = 0, ry = 0;
        
        document.addEventListener('mousemove', e => {
            mx = e.clientX;
            my = e.clientY;
            cur.style.left = mx + 'px';
            cur.style.top = my + 'px';
        });

        (function loop() {
            rx += (mx - rx) * 0.13;
            ry += (my - ry) * 0.13;
            curR.style.left = rx + 'px';
            curR.style.top = ry + 'px';
            requestAnimationFrame(loop);
        })();

        // Add 'big' class on interactive elements
        document.querySelectorAll('a, button, .p-card, .exp-card, .ev-card, .com-card').forEach(el => {
            el.addEventListener('mouseenter', () => {
                cur.classList.add('big');
                curR.classList.add('big');
            });
            el.addEventListener('mouseleave', () => {
                cur.classList.remove('big');
                curR.classList.remove('big');
            });
        });
    }

    // Mobile menu toggle
    const hambBtn = document.getElementById('hambBtn');
    const fsMenu = document.getElementById('fsMenu');

    window.toggleMenu = function() {
        if (fsMenu) {
            fsMenu.classList.toggle('open');
            document.body.style.overflow = fsMenu.classList.contains('open') ? 'hidden' : '';
        }
    };

    if (hambBtn) {
        hambBtn.addEventListener('click', toggleMenu);
    }

    // Close menu when clicking nav items
    const fsNavItems = document.querySelectorAll('.fs-nav-item');
    fsNavItems.forEach(item => {
        item.addEventListener('click', () => {
            if (fsMenu) {
                fsMenu.classList.remove('open');
                document.body.style.overflow = '';
            }
        });
    });
})();
