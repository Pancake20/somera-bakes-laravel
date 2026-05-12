// ── Bulma Navbar Burger ──
document.addEventListener('DOMContentLoaded', () => {
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  $navbarBurgers.forEach( el => {
    el.addEventListener('click', () => {
      const target = el.dataset.target;
      const $target = document.getElementById(target);
      el.classList.toggle('is-active');
      $target.classList.toggle('is-active');
    });
  });
});

// ── Smooth scroll for nav links ──
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', (e) => {
    const id = a.getAttribute('href');
    if (id && id !== '#') {
      e.preventDefault();
      const target = document.querySelector(id);
      if (target) {
        target.scrollIntoView({ behavior: 'smooth' });
        // Close menu on mobile after clicking
        const burger = document.querySelector('.navbar-burger');
        const menu = document.querySelector('.navbar-menu');
        if (burger.classList.contains('is-active')) {
          burger.classList.remove('is-active');
          menu.classList.remove('is-active');
        }
      }
    }
  });
});

// ── Intersection Observer for scroll animations ──
const observerOptions = { threshold: 0.05, rootMargin: '0px 0px -20px 0px' };
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const el = entry.target;
      const delay = el.style.animationDelay || '0s';
      el.style.animationDelay = delay;
      el.classList.add('visible');
      observer.unobserve(el);
    }
  });
}, observerOptions);

document.querySelectorAll('.animate').forEach(el => observer.observe(el));

// ── Parallax blobs ──
window.addEventListener('mousemove', (e) => {
  const x = (e.clientX / window.innerWidth - 0.5) * 30;
  const y = (e.clientY / window.innerHeight - 0.5) * 30;
  const blobs = document.querySelectorAll('.hero-bg::before, .hero-bg::after');
  // Parallax effect on pseudo-elements is hard directly via JS, so we add a dynamic offset var instead
  document.documentElement.style.setProperty('--mouse-x', `${x}px`);
  document.documentElement.style.setProperty('--mouse-y', `${y}px`);
}, { passive: true });

// ── Hero Carousel ──
const carouselSlide = document.querySelector('.carousel-slide');
if (carouselSlide) {
  let counter = 0;
  setInterval(() => {
    counter++;
    if (counter > 2) counter = 0;
    carouselSlide.style.transform = `translateX(${-counter * (100 / 3)}%)`;
  }, 4000);
}

// ── Language Switcher ──
function setLanguage(lang) {
  localStorage.setItem('somera-lang', lang);
  document.querySelectorAll('[data-en]').forEach(el => {
    const translation = el.getAttribute('data-' + lang);
    if (translation) {
      if (el.tagName === 'INPUT') {
        el.placeholder = translation;
      } else {
        el.textContent = translation;
      }
    }
  });
  document.querySelectorAll('.lang-btn').forEach(btn => {
    if (btn.dataset.lang === lang) {
      btn.style.fontWeight = '600';
      btn.style.color = 'var(--rust)';
    } else {
      btn.style.fontWeight = '300';
      btn.style.color = 'var(--charcoal)';
    }
  });
}

document.addEventListener('DOMContentLoaded', () => {
  const savedLang = localStorage.getItem('somera-lang') || 'en';
  setLanguage(savedLang);
});
