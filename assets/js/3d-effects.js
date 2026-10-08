/**
 * VOLTERRA CONCEPT 02 // 3D Interactive Dynamics & Preflex Visual FX Engine
 * Features:
 *  - 3D Gyroscopic & Mouse Parallax on Hero Visual Stage
 *  - Interactive 3D Card Tilt with Specular Glare / Reflection ("Preflex" Sheen)
 *  - Laboratory Showroom Floor Reflection & Holographic Laser Scanline
 *  - IntersectionObserver Staggered Scroll-Reveal Transitions
 *  - Empirical Telemetry Stat Counter Physics
 *  - Fluid Tab & View Model Transitions
 */

(function () {
  'use strict';

  // Check if device is touch-first / mobile
  const isTouchDevice = ('ontouchstart' in window) || (navigator.maxTouchPoints > 0);

  /* ==========================================================================
     1. HERO 3D MULTI-LAYER PARALLAX STAGE
     ========================================================================== */
  function initHeroParallax() {
    const heroSection = document.querySelector('.hero-flagship');
    const stage = document.querySelector('.hero-visual-chassis-stage');
    const chassis = document.querySelector('.hero-chassis-img-wrap, .hero-chassis-svg');
    const laserGrid = document.querySelector('.hero-laser-grid');
    const ring = document.querySelector('.pedestal-ring');

    if (!heroSection || !stage || !chassis) return;

    let targetRotX = 0;
    let targetRotY = 0;
    let currentRotX = 0;
    let currentRotY = 0;
    let targetGridX = 0;
    let targetGridY = 0;
    let currentGridX = 0;
    let currentGridY = 0;
    let isHovering = false;
    let rafId = null;

    function renderParallax() {
      // Smooth interpolation (lerp) for 60fps spring feel
      currentRotX += (targetRotX - currentRotX) * 0.08;
      currentRotY += (targetRotY - currentRotY) * 0.08;
      currentGridX += (targetGridX - currentGridX) * 0.06;
      currentGridY += (targetGridY - currentGridY) * 0.06;

      if (isHovering || Math.abs(targetRotX - currentRotX) > 0.01) {
        stage.style.transform = `perspective(1200px) rotateX(${currentRotX}deg) rotateY(${currentRotY}deg)`;
        if (laserGrid) {
          laserGrid.style.transform = `translate3d(${currentGridX}px, ${currentGridY}px, 0)`;
        }
        if (ring) {
          ring.style.transform = `rotateX(65deg) translateZ(-25px) rotateY(${currentRotY * 0.5}deg)`;
        }
      }

      rafId = requestAnimationFrame(renderParallax);
    }

    if (!isTouchDevice) {
      heroSection.addEventListener('mousemove', (e) => {
        isHovering = true;
        const rect = heroSection.getBoundingClientRect();
        const normX = (e.clientX - rect.left) / rect.width - 0.5; // -0.5 to 0.5
        const normY = (e.clientY - rect.top) / rect.height - 0.5;

        targetRotY = normX * 18; // Max 9 deg rotation Y
        targetRotX = -normY * 14; // Max 7 deg rotation X
        targetGridX = -normX * 28;
        targetGridY = -normY * 20;
      });

      heroSection.addEventListener('mouseleave', () => {
        isHovering = false;
        targetRotX = 0;
        targetRotY = 0;
        targetGridX = 0;
        targetGridY = 0;
      });

      renderParallax();
    }
  }

  /* ==========================================================================
     2. 3D CARD TILT & SPECULAR "PREFLEX" GLARE REFLECTION
     ========================================================================== */
  function init3DCardTilt() {
    if (isTouchDevice) return; // Preserve buttery scroll on touchscreens

    const selector = `
      .product-card,
      .sport-panel-card,
      .data-card,
      .tech-cards-grid > div,
      .athlete-story-card,
      .chassis-fleet-card,
      .featured-drop-grid
    `;

    const cards = document.querySelectorAll(selector);

    cards.forEach((card) => {
      // Ensure required styles for 3D perspective
      card.classList.add('tilt-card-active');

      // Create glare sheen overlay element if not exists
      let glare = card.querySelector('.card-specular-glare');
      if (!glare) {
        glare = document.createElement('div');
        glare.className = 'card-specular-glare';
        card.appendChild(glare);
      }

      let isInside = false;

      card.addEventListener('mouseenter', () => {
        isInside = true;
        card.style.transition = 'transform 0.1s ease-out, box-shadow 0.25s ease';
        glare.style.opacity = '1';
      });

      card.addEventListener('mousemove', (e) => {
        if (!isInside) return;
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const normX = (x / rect.width) - 0.5;
        const normY = (y / rect.height) - 0.5;

        const maxTilt = 9; // Max tilt degrees
        const tiltX = -normY * maxTilt;
        const tiltY = normX * maxTilt;

        card.style.transform = `perspective(1000px) rotateX(${tiltX.toFixed(2)}deg) rotateY(${tiltY.toFixed(2)}deg) translateZ(8px)`;

        // Update dynamic light reflection coordinates
        const glarePercentX = (x / rect.width) * 100;
        const glarePercentY = (y / rect.height) * 100;
        glare.style.background = `radial-gradient(circle at ${glarePercentX.toFixed(1)}% ${glarePercentY.toFixed(1)}%, rgba(255, 255, 255, 0.22) 0%, rgba(255, 255, 255, 0.04) 45%, transparent 75%)`;
      });

      card.addEventListener('mouseleave', () => {
        isInside = false;
        card.style.transition = 'transform 0.45s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.45s ease';
        card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateZ(0px)';
        glare.style.opacity = '0';
      });
    });
  }

  /* ==========================================================================
     3. STAGGERED SCROLL-REVEAL SYSTEM
     ========================================================================== */
  function initScrollReveal() {
    const revealTargets = document.querySelectorAll(`
      .sport-panel-card,
      .product-card,
      .data-card,
      .tech-cards-grid > div,
      .athlete-story-card,
      .featured-drop-grid,
      .chassis-fleet-card,
      .section-header-wrap
    `);

    if ('IntersectionObserver' in window) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('revealed-in');
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.12,
        rootMargin: '0px 0px -40px 0px'
      });

      revealTargets.forEach((el, index) => {
        el.classList.add('reveal-prep');
        // Add progressive stagger delay within grids
        const siblingIndex = Array.from(el.parentNode.children).indexOf(el);
        if (siblingIndex > 0) {
          el.style.transitionDelay = `${(siblingIndex * 0.08).toFixed(2)}s`;
        }
        observer.observe(el);
      });
    } else {
      // Fallback for older browsers
      revealTargets.forEach(el => el.classList.add('revealed-in'));
    }
  }

  /* ==========================================================================
     4. TELEMETRY STAT COUNTER ANIMATIONS
     ========================================================================== */
  function initStatCounters() {
    const dataSection = document.querySelector('.section-midnight-data');
    if (!dataSection) return;

    let hasCounted = false;

    function countUp(el, target, suffix, duration = 1400) {
      const startTime = performance.now();
      const startVal = 0;

      function update(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        // Ease out quad
        const easeProgress = 1 - Math.pow(1 - progress, 3);
        const currentVal = Math.floor(startVal + (target - startVal) * easeProgress);

        el.innerHTML = `${currentVal}${suffix}`;

        if (progress < 1) {
          requestAnimationFrame(update);
        } else {
          el.innerHTML = `${target}${suffix}`;
        }
      }

      requestAnimationFrame(update);
    }

    if ('IntersectionObserver' in window) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting && !hasCounted) {
            hasCounted = true;
            const metricEls = dataSection.querySelectorAll('.data-metric-big');
            if (metricEls[0]) countUp(metricEls[0], 42, '<span>% +</span>');
            if (metricEls[1]) countUp(metricEls[1], 218, '<span>G</span>');
            if (metricEls[2]) countUp(metricEls[2], 8, '<span>MM</span>');
            if (metricEls[3]) countUp(metricEls[3], 100, '<span>%</span>');
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.25 });

      observer.observe(dataSection);
    }
  }

  /* ==========================================================================
     5. DYNAMIC HOLOGRAPHIC SCANNER & FLOOR REFLECTIONS
     ========================================================================== */
  function injectVisualAtmosphere() {
    // 1. Add Dual Inner Counter-Rotating Ring in Hero
    const stage = document.querySelector('.hero-visual-chassis-stage');
    if (stage && !stage.querySelector('.pedestal-ring-inner')) {
      const innerRing = document.createElement('div');
      innerRing.className = 'pedestal-ring-inner';
      stage.appendChild(innerRing);

      // Add laser scanner sweep
      const scanline = document.createElement('div');
      scanline.className = 'hero-scanline-laser';
      stage.appendChild(scanline);

      // Add laboratory floor mirror reflection under chassis
      const reflection = document.createElement('div');
      reflection.className = 'chassis-floor-reflection';
      stage.appendChild(reflection);
    }

    // 2. Add reflection glow to Featured Drop visual stage
    const dropStage = document.querySelector('.drop-visual-stage');
    if (dropStage && !dropStage.querySelector('.drop-floor-reflection')) {
      const dropReflection = document.createElement('div');
      dropReflection.className = 'drop-floor-reflection';
      dropStage.appendChild(dropReflection);
    }
  }

  /* ==========================================================================
     6. SMOOTH TAB & TRANSITION HANDLERS
     ========================================================================== */
  function initPageTransitions() {
    // Global smooth link transitions for local links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener('click', function (e) {
        const targetId = this.getAttribute('href').slice(1);
        const targetEl = document.getElementById(targetId);
        if (targetEl) {
          e.preventDefault();
          targetEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });

    // Re-initialize 3D tilt after dynamic catalog renders
    window.addEventListener('catalogRendered', () => {
      init3DCardTilt();
      initScrollReveal();
    });
  }

  // Initialize all kinetic systems upon DOM readiness
  document.addEventListener('DOMContentLoaded', () => {
    injectVisualAtmosphere();
    initHeroParallax();
    init3DCardTilt();
    initScrollReveal();
    initStatCounters();
    initPageTransitions();
  });

})();
