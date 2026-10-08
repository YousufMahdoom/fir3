/**
 * VOLTERRA CONCEPT 02 // Multi-Step Checkout Controller
 * Stepper Progression, Delivery Protocols, Live Manifest Sync & Order Processing
 */

let currentCheckoutStep = 1;
let selectedShippingCost = 0.00;
let selectedShippingTitle = 'Priority Express Laboratory Dispatch (24-48h)';

function setCheckoutStep(step) {
  currentCheckoutStep = step;

  // Update Stepper Indicators
  for (let i = 1; i <= 3; i++) {
    const indicator = document.getElementById(`stepIndicator${i}`);
    if (indicator) {
      indicator.classList.remove('active', 'completed');
      if (i < step) indicator.classList.add('completed');
      if (i === step) indicator.classList.add('active');
    }
    const section = document.getElementById(`checkoutSection${i}`);
    if (section) {
      section.style.display = (i === step) ? 'block' : 'none';
    }
  }

  // Scroll smoothly to top of form
  const wrapper = document.querySelector('.checkout-wrapper');
  if (wrapper) wrapper.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

function selectShippingOption(cost, title, el) {
  selectedShippingCost = parseFloat(cost);
  selectedShippingTitle = title;

  document.querySelectorAll('.shipping-tile').forEach(t => t.classList.remove('selected'));
  if (el) el.classList.add('selected');

  updateManifestCost();
}

function selectPaymentMethod(method, el) {
  document.querySelectorAll('.payment-tile').forEach(t => t.classList.remove('selected'));
  if (el) el.classList.add('selected');

  document.querySelectorAll('.payment-detail-box').forEach(b => b.style.display = 'none');
  const targetBox = document.getElementById(`paymentDetail_${method}`);
  if (targetBox) targetBox.style.display = 'block';
}

function updateCheckoutManifest(items, subtotal, total, voucher) {
  const container = document.getElementById('manifestItemsContainer');
  if (!container) return;

  if (items.length === 0) {
    container.innerHTML = `
      <div style="text-align: center; padding: 24px; color: var(--text-muted); font-family: var(--font-mono); font-size: 0.8rem;">
        NO CHASSIS IN MANIFEST // RETURN TO CATALOG
      </div>
    `;
  } else {
    container.innerHTML = items.map(item => `
      <div class="manifest-item-card">
        <div class="manifest-item-thumb">
          ${typeof getShoeSvg === 'function' ? getShoeSvg(item.colorHex || '#1687ff', '#ff6b2c') : '👟'}
        </div>
        <div>
          <div class="manifest-item-title">${item.title}</div>
          <div class="manifest-item-spec">${item.color} | ${item.size}</div>
          <div class="manifest-item-spec" style="color: var(--volt-green); margin-top: 3px;">⚡ 89.4% KINETIC DEFLECTION</div>
          <div class="manifest-item-price">$${(item.price * item.qty).toFixed(2)} USD <span style="font-size: 0.75rem; color: var(--text-muted); font-weight: normal;">(Qty: ${item.qty})</span></div>
        </div>
      </div>
    `).join('');
  }

  updateManifestCost();
}

function updateManifestCost() {
  const subtotal = VOLTERRA_CART.getSubtotal();
  const voucher = VOLTERRA_CART.getVoucher();
  let discount = 0;
  if (voucher) {
    if (voucher.discountPercent) discount = (subtotal * voucher.discountPercent) / 100;
    if (voucher.discountFixed) discount = Math.min(voucher.discountFixed, subtotal);
    if (voucher.freeShip) selectedShippingCost = 0;
  }

  const shipping = selectedShippingCost;
  const finalTotal = Math.max(0, subtotal - discount + shipping);

  const subEl = document.getElementById('manifestSubtotal');
  if (subEl) subEl.textContent = `$${subtotal.toFixed(2)}`;

  const shipEl = document.getElementById('manifestShipping');
  if (shipEl) {
    shipEl.textContent = shipping === 0 ? 'FREE ($0.00)' : `$${shipping.toFixed(2)}`;
  }

  const discRow = document.getElementById('manifestDiscountRow');
  const discEl = document.getElementById('manifestDiscount');
  if (discRow && discEl) {
    if (discount > 0) {
      discRow.style.display = 'flex';
      discEl.textContent = `-$${discount.toFixed(2)} (${voucher.label})`;
    } else {
      discRow.style.display = 'none';
    }
  }

  const totalEl = document.getElementById('manifestTotal');
  if (totalEl) totalEl.textContent = `$${finalTotal.toFixed(2)} USD`;

  const klarnaEl = document.getElementById('klarnaInstallment');
  if (klarnaEl) klarnaEl.textContent = `$${(finalTotal / 4).toFixed(2)}`;

  const btnTotalEl = document.getElementById('btnFinalAmount');
  if (btnTotalEl) btnTotalEl.textContent = `$${finalTotal.toFixed(2)} USD`;
}

function applyVoucherFromCheckout() {
  const input = document.getElementById('checkoutVoucherInput');
  if (input && input.value) {
    VOLTERRA_CART.applyVoucher(input.value);
    input.value = '';
  }
}

function processOrder(e) {
  if (e) e.preventDefault();

  const items = VOLTERRA_CART.getItems();
  if (items.length === 0) {
    VOLTERRA_CART.showToast('BAG IS EMPTY. CANNOT DISPATCH.');
    return;
  }

  const email = document.getElementById('fieldEmail')?.value || 'elena.vance@velocity-lab.io';
  const firstName = document.getElementById('fieldFirstName')?.value || 'Elena';
  const lastName = document.getElementById('fieldLastName')?.value || 'Vance';
  const address = document.getElementById('fieldAddress')?.value || 'Friedrichstraße 43, Velocity Testing Quad 4B';
  const city = document.getElementById('fieldCity')?.value || 'Berlin';
  const postal = document.getElementById('fieldPostal')?.value || '10117';
  const country = document.getElementById('fieldCountry')?.value || 'Germany';

  const orderData = {
    orderId: 'VLT-89210-DE',
    sessionCode: 'OX9924-LATENCY-4MS',
    timestamp: new Date().toISOString(),
    recipient: `${firstName} ${lastName}`,
    email: email,
    shippingAddress: `${address}, ${city} ${postal}, ${country}`,
    shippingMethod: selectedShippingTitle,
    items: items,
    subtotal: VOLTERRA_CART.getSubtotal(),
    shippingCost: selectedShippingCost,
    total: VOLTERRA_CART.getTotal() + selectedShippingCost,
    serialNumber: 'EXP-01-88429-GER',
    beaconId: 'TRK-994182'
  };

  localStorage.setItem('volterra_last_order', JSON.stringify(orderData));
  VOLTERRA_CART.showToast('ORDER INITIATED // DISPATCHING TO FRANKFURT HUB');

  setTimeout(() => {
    window.location.href = 'confirmation.php';
  }, 900);
}

document.addEventListener('DOMContentLoaded', () => {
  VOLTERRA_CART.updateUI();
  updateManifestCost();
});
