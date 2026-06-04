// CURSOR
const cur = document.getElementById('cur');
const curR = document.getElementById('curR');
let mx = 0, my = 0, rx = 0, ry = 0;
document.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY; cur.style.left = mx + 'px'; cur.style.top = my + 'px'; });
(function loop() { rx += (mx - rx) * 0.13; ry += (my - ry) * 0.13; curR.style.left = rx + 'px'; curR.style.top = ry + 'px'; requestAnimationFrame(loop); })();
document.querySelectorAll('a,button,.p-card,.exp-card,.ev-card,.com-card').forEach(el => {
  el.addEventListener('mouseenter', () => { cur.classList.add('big'); curR.classList.add('big'); });
  el.addEventListener('mouseleave', () => { cur.classList.remove('big'); curR.classList.remove('big'); });
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
function goSlide(n) {
  slides[cur_slide].classList.remove('active');
  dots[cur_slide].classList.remove('on');
  cur_slide = n;
  slides[cur_slide].classList.add('active');
  dots[cur_slide].classList.add('on');
}
dots.forEach(d => d.addEventListener('click', () => goSlide(+d.dataset.i)));
setInterval(() => goSlide((cur_slide + 1) % slides.length), 4500);

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
