/**
 * VOLTERRA CONCEPT 02 // Cart State & Drawer Controller
 * Handles localStorage persistence, Slide-over Drawer, Quantity, Vouchers & Toasts
 */

const VOLTERRA_CART = {
  KEY: 'volterra_concept02_cart',
  VOUCHER_KEY: 'volterra_concept02_voucher',

  getItems() {
    try {
      const data = localStorage.getItem(this.KEY);
      return data ? JSON.parse(data) : [
        // Default initial items reflecting Concept 02 specifications:
        {
          id: 'x-race-01',
          title: 'VOLTERRA X-RACE 01',
          subtitle: 'Supercritical Nitrogen-Infused Chassis // EXP-01',
          color: 'Electric Obsidian / Volt Blue',
          colorHex: '#1687ff',
          size: 'US M 9.0',
          price: 149.00,
          qty: 1
        }
      ];
    } catch (e) {
      return [];
    }
  },

  saveItems(items) {
    try {
      localStorage.setItem(this.KEY, JSON.stringify(items));
      this.updateUI();
    } catch (e) {
      console.error('Error saving cart items', e);
    }
  },

  addItem(product, color = null, size = 'US M 9.0') {
    const items = this.getItems();
    const chosenColor = color || (product.colors && product.colors[0] ? product.colors[0].name : 'Standard Edition');
    const chosenHex = (product.colors && product.colors[0]) ? product.colors[0].hex : '#1687ff';

    const existingIndex = items.findIndex(
      item => item.id === product.id && item.color === chosenColor && item.size === size
    );

    if (existingIndex > -1) {
      items[existingIndex].qty += 1;
    } else {
      items.push({
        id: product.id,
        title: product.title,
        subtitle: product.subtitle || 'High-Velocity Race Chassis',
        color: chosenColor,
        colorHex: chosenHex,
        size: size,
        price: product.price,
        image: product.image || (typeof VOLTERRA_PRODUCTS !== 'undefined' ? VOLTERRA_PRODUCTS.find(p => p.id === product.id)?.image : null) || 'assets/images/x-race-01.jpg',
        qty: 1
      });
    }

    this.saveItems(items);
    this.showToast(`ADDED: ${product.title} (${size})`);
    this.openDrawer();
  },

  updateQty(index, change) {
    const items = this.getItems();
    if (!items[index]) return;

    items[index].qty += change;
    if (items[index].qty <= 0) {
      items.splice(index, 1);
    }
    this.saveItems(items);
  },

  removeItem(index) {
    const items = this.getItems();
    if (items[index]) {
      const title = items[index].title;
      items.splice(index, 1);
      this.saveItems(items);
      this.showToast(`REMOVED: ${title}`);
    }
  },

  getSubtotal() {
    const items = this.getItems();
    return items.reduce((sum, item) => sum + (item.price * item.qty), 0);
  },

  getVoucher() {
    try {
      return JSON.parse(localStorage.getItem(this.VOUCHER_KEY)) || null;
    } catch (e) {
      return null;
    }
  },

  applyVoucher(code) {
    const trimmed = (code || '').trim().toUpperCase();
    if (trimmed === 'SPEEDLAB10') {
      localStorage.setItem(this.VOUCHER_KEY, JSON.stringify({ code: trimmed, discountPercent: 10, label: '10% Lab Discount' }));
      this.showToast('VOUCHER APPLIED: 10% LAB DISCOUNT');
    } else if (trimmed === 'ELENA50') {
      localStorage.setItem(this.VOUCHER_KEY, JSON.stringify({ code: trimmed, discountFixed: 50, label: 'Elena Vance $50 VIP Pass' }));
      this.showToast('VOUCHER APPLIED: $50 ATHLETE CREDIT');
    } else if (trimmed === 'FREESHIP') {
      localStorage.setItem(this.VOUCHER_KEY, JSON.stringify({ code: trimmed, freeShip: true, label: 'Free Priority Courier' }));
      this.showToast('VOUCHER APPLIED: FREE PRIORITY COURIER');
    } else {
      this.showToast('INVALID PROTOCOL VOUCHER CODE');
      return false;
    }
    this.updateUI();
    return true;
  },

  removeVoucher() {
    localStorage.removeItem(this.VOUCHER_KEY);
    this.showToast('VOUCHER REMOVED');
    this.updateUI();
  },

  getTotal() {
    const sub = this.getSubtotal();
    const voucher = this.getVoucher();
    let discount = 0;
    if (voucher) {
      if (voucher.discountPercent) discount = (sub * voucher.discountPercent) / 100;
      if (voucher.discountFixed) discount = Math.min(voucher.discountFixed, sub);
    }
    return Math.max(0, sub - discount);
  },

  openDrawer() {
    const backdrop = document.getElementById('cartBackdrop');
    if (backdrop) {
      backdrop.classList.add('open');
      document.body.style.overflow = 'hidden';
    }
  },

  closeDrawer() {
    const backdrop = document.getElementById('cartBackdrop');
    if (backdrop) {
      backdrop.classList.remove('open');
      document.body.style.overflow = '';
    }
  },

  showToast(msg) {
    let toast = document.getElementById('telemetryToast');
    if (!toast) {
      toast = document.createElement('div');
      toast.id = 'telemetryToast';
      toast.className = 'telemetry-toast';
      document.body.appendChild(toast);
    }
    toast.innerHTML = `
      <span class="pulse-indicator"></span>
      <span style="font-family: var(--font-mono); font-size: 0.8rem; font-weight: 700; letter-spacing: 0.05em;">${msg}</span>
    `;
    toast.classList.add('show');
    clearTimeout(this._toastTimeout);
    this._toastTimeout = setTimeout(() => {
      toast.classList.remove('show');
    }, 3200);
  },

  updateUI() {
    const items = this.getItems();
    const count = items.reduce((sum, item) => sum + item.qty, 0);
    const subtotal = this.getSubtotal();
    const total = this.getTotal();
    const voucher = this.getVoucher();

    // 1. Update Header Cart Badges
    document.querySelectorAll('.cart-count-badge').forEach(el => {
      el.textContent = count;
    });

    // 2. Update Drawer Items List
    const drawerList = document.getElementById('drawerItemsList');
    if (drawerList) {
      if (items.length === 0) {
        drawerList.innerHTML = `
          <div class="drawer-empty-msg">
            <p style="font-family: var(--font-mono); margin-bottom: 12px;">// BAG IS CURRENTLY UNINITIALIZED</p>
            <p>Explore the high velocity footwear laboratory and select your chassis.</p>
            <a href="shop.php" class="btn-primary" style="margin-top: 20px; padding: 10px 20px; font-size: 0.8rem;">SHOP ALL CHASSIS</a>
          </div>
        `;
      } else {
        drawerList.innerHTML = items.map((item, idx) => `
          <div class="cart-item-card">
            <div class="cart-item-thumb" style="overflow: hidden; padding: 2px;">
              ${item.image ? `<img src="${item.image}" alt="${item.title}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 4px;">` : (typeof getShoeSvg === 'function' ? getShoeSvg(item.colorHex || '#1687ff', '#ff6b2c') : '👟')}
            </div>
            <div class="cart-item-details">
              <div>
                <div class="cart-item-title">${item.title}</div>
                <div class="cart-item-variant">${item.color} // ${item.size}</div>
              </div>
              <div class="cart-item-bottom">
                <div class="qty-counter">
                  <button type="button" class="qty-btn" onclick="VOLTERRA_CART.updateQty(${idx}, -1)">−</button>
                  <span class="qty-val">${item.qty}</span>
                  <button type="button" class="qty-btn" onclick="VOLTERRA_CART.updateQty(${idx}, 1)">+</button>
                </div>
                <div class="cart-item-price">$${(item.price * item.qty).toFixed(2)}</div>
                <button type="button" onclick="VOLTERRA_CART.removeItem(${idx})" title="Remove item" style="background: none; border: none; color: var(--text-muted); cursor: pointer; font-size: 0.85rem;">✕</button>
              </div>
            </div>
          </div>
        `).join('');
      }
    }

    // 3. Update Drawer Pricing
    const subtotalEl = document.getElementById('drawerSubtotal');
    if (subtotalEl) subtotalEl.textContent = `$${subtotal.toFixed(2)}`;

    const totalEl = document.getElementById('drawerTotal');
    if (totalEl) totalEl.textContent = `$${total.toFixed(2)} USD`;

    // 4. Update Free Shipping Meter
    const freeShipMeter = document.getElementById('freeShipFill');
    const freeShipText = document.getElementById('freeShipText');
    if (freeShipMeter && freeShipText) {
      if (subtotal >= 100) {
        freeShipMeter.style.width = '100%';
        freeShipText.innerHTML = `✓ FREE EXPRESS DISPATCH UNLOCKED ($${subtotal.toFixed(0)} / $100 QUALIFIED)`;
      } else {
        const pct = Math.min(100, (subtotal / 100) * 100);
        freeShipMeter.style.width = `${pct}%`;
        freeShipText.innerHTML = `ADD $${(100 - subtotal).toFixed(2)} FOR FREE EXPRESS LAB DISPATCH`;
      }
    }

    // 5. Update Checkout Page Manifest (if on checkout page)
    if (typeof updateCheckoutManifest === 'function') {
      updateCheckoutManifest(items, subtotal, total, voucher);
    }
  }
};

// Auto initialize on DOM ready
document.addEventListener('DOMContentLoaded', () => {
  VOLTERRA_CART.updateUI();

  // Attach backdrop close listener
  const backdrop = document.getElementById('cartBackdrop');
  if (backdrop) {
    backdrop.addEventListener('click', (e) => {
      if (e.target === backdrop) {
        VOLTERRA_CART.closeDrawer();
      }
    });
  }

  // Keyboard escape closes drawer
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      VOLTERRA_CART.closeDrawer();
      const modal = document.querySelector('.telemetry-modal-backdrop.open');
      if (modal) modal.classList.remove('open');
    }
  });
});
