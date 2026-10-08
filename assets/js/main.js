/**
 * VOLTERRA CONCEPT 02 // Global Interactions & UI Handlers
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Header scroll effect
  const header = document.querySelector('.site-header');
  if (header) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 40) {
        header.style.background = 'rgba(4, 12, 23, 0.96)';
        header.style.boxShadow = '0 10px 30px rgba(0,0,0,0.5)';
      } else {
        header.style.background = 'rgba(7, 20, 38, 0.88)';
        header.style.boxShadow = 'none';
      }
    });
  }

  // 2. Global Interactive Size Selector Buttons
  document.addEventListener('click', (e) => {
    const sizeBtn = e.target.closest('.size-btn');
    if (sizeBtn) {
      const container = sizeBtn.closest('.size-matrix-grid');
      if (container) {
        container.querySelectorAll('.size-btn').forEach(btn => btn.classList.remove('active'));
        sizeBtn.classList.add('active');
        const label = container.closest('.size-selector-block')?.querySelector('.selected-size-val');
        if (label) label.textContent = sizeBtn.textContent.trim();
      }
    }

    // Colorway chip clicks
    const chip = e.target.closest('.colorway-chip');
    if (chip) {
      const parent = chip.closest('.colorway-chips');
      if (parent) {
        parent.querySelectorAll('.colorway-chip').forEach(c => c.classList.remove('active'));
        chip.classList.add('active');
        const colorName = chip.dataset.colorName || chip.textContent.trim();
        const hex = chip.dataset.colorHex || '#1687ff';
        const label = chip.closest('.colorway-selector-block')?.querySelector('.selected-color-val');
        if (label) label.textContent = colorName;

        // If on hero or product detail, re-render shoe SVG in chosen color
        const shoeContainer = document.querySelector('.interactive-chassis-stage');
        if (shoeContainer && typeof getShoeSvg === 'function') {
          shoeContainer.innerHTML = getShoeSvg(hex, '#ff6b2c');
        }
      }
    }

    // Wishlist Heart Click
    const heartBtn = e.target.closest('.wishlist-float-btn, .btn-wishlist');
    if (heartBtn) {
      heartBtn.classList.toggle('active');
      const isSaved = heartBtn.classList.contains('active');
      VOLTERRA_CART.showToast(isSaved ? 'SAVED TO ATHLETE LOCKER WISHLIST' : 'REMOVED FROM WISHLIST');
    }
  });

  // 3. Quick Add Helper
  window.quickAddProduct = function(productId, defaultSize = 'US M 9.0') {
    if (typeof VOLTERRA_PRODUCTS === 'undefined') return;
    const prod = VOLTERRA_PRODUCTS.find(p => p.id === productId);
    if (prod) {
      VOLTERRA_CART.addItem(prod, prod.colors[0]?.name, defaultSize);
    }
  };

  // 4. Newsletter Form Handler
  const newsletterForm = document.getElementById('newsletterForm');
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const input = newsletterForm.querySelector('input[type="email"]');
      if (input && input.value) {
        VOLTERRA_CART.showToast(`ATHLETE ENROLLED: ${input.value}`);
        input.value = '';
      }
    });
  }
});
