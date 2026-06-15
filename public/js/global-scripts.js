// CURSOR
const cur = document.getElementById('cur');
const curR = document.getElementById('curR');
let mx = 0, my = 0, rx = 0, ry = 0;
if (cur) {
  document.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY; cur.style.left = mx + 'px'; cur.style.top = my + 'px'; });
}
if (curR) {
  (function loop() { rx += (mx - rx) * 0.13; ry += (my - ry) * 0.13; curR.style.left = rx + 'px'; curR.style.top = ry + 'px'; requestAnimationFrame(loop); })();
}
document.querySelectorAll('a,button,.p-card,.exp-card,.ev-card,.com-card').forEach(el => {
  el.addEventListener('mouseenter', () => { if (cur) cur.classList.add('big'); if (curR) curR.classList.add('big'); });
  el.addEventListener('mouseleave', () => { if (cur) cur.classList.remove('big'); if (curR) curR.classList.remove('big'); });
});

// HEADER SCROLL
const hdr = document.getElementById('hdr');
window.addEventListener('scroll', () => {
  hdr.classList.toggle('scrolled', window.scrollY > 80);
});

// MENU
function toggleMenu() {
  document.getElementById('fsMenu').classList.toggle('open');
  document.body.style.overflow = document.getElementById('fsMenu').classList.contains('open') ? 'hidden' : '';
}

// HERO SLIDES
const slides = document.querySelectorAll('.hero-slide');
const dots = document.querySelectorAll('.hdot');
let cur_slide = 0;
let slideInterval;

function goSlide(n) {
  if (slides.length === 0) return;
  slides[cur_slide].classList.remove('active');
  dots[cur_slide].classList.remove('on');
  cur_slide = n;
  slides[cur_slide].classList.add('active');
  dots[cur_slide].classList.add('on');
}

function startSlideTimer() {
  stopSlideTimer();
  if (slides.length > 0) {
    slideInterval = setInterval(() => {
      goSlide((cur_slide + 1) % slides.length);
    }, 8000);
  }
}

function stopSlideTimer() {
  if (slideInterval) clearInterval(slideInterval);
}

if (slides.length > 0) {
  dots.forEach(d => d.addEventListener('click', () => {
    goSlide(+d.dataset.i);
    startSlideTimer();
  }));

  const prevBtn = document.querySelector('.prev-btn');
  const nextBtn = document.querySelector('.next-btn');

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      goSlide((cur_slide - 1 + slides.length) % slides.length);
      startSlideTimer();
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      goSlide((cur_slide + 1) % slides.length);
      startSlideTimer();
    });
  }

  // Swipe gesture support for mobile
  let touchStartX = 0;
  let touchEndX = 0;
  const heroSection = document.querySelector('.hero');
  if (heroSection) {
    heroSection.addEventListener('touchstart', e => {
      touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });
    
    heroSection.addEventListener('touchend', e => {
      touchEndX = e.changedTouches[0].screenX;
      if (touchEndX < touchStartX - 50) {
        // Swipe left -> next slide
        goSlide((cur_slide + 1) % slides.length);
        startSlideTimer();
      } else if (touchEndX > touchStartX + 50) {
        // Swipe right -> prev slide
        goSlide((cur_slide - 1 + slides.length) % slides.length);
        startSlideTimer();
      }
    }, { passive: true });
  }

  startSlideTimer();
}

// SCROLL REVEAL
const rvEls = document.querySelectorAll('.rv,.rv-l,.rv-r');
const rvObs = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('go'); });
}, { threshold: 0.1 });
rvEls.forEach(el => rvObs.observe(el));

// STATS COUNTER
function countUp(el) {
  const target = +el.dataset.target;
  const sup = el.querySelector('sup') ? el.querySelector('sup').outerHTML : '';
  let start = null;
  const dur = 1800;
  function step(ts) {
    if (!start) start = ts;
    const p = Math.min((ts - start) / dur, 1);
    const ease = 1 - Math.pow(1 - p, 3);
    el.innerHTML = Math.floor(ease * target) + sup;
    if (p < 1) requestAnimationFrame(step);
  }
  requestAnimationFrame(step);
}
const statObs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) { countUp(e.target); statObs.unobserve(e.target); }
  });
}, { threshold: 0.5 });
document.querySelectorAll('.stat-num').forEach(el => statObs.observe(el));
