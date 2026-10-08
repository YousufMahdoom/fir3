<?php
// includes/cart-drawer.php - Slide-over Cart Drawer
?>
<!-- Slide-over Cart Drawer Backdrop -->
<div class="cart-backdrop" id="cartBackdrop">
  <div class="cart-drawer-panel" id="cartDrawerPanel">
    
    <div class="drawer-header">
      <div class="drawer-title">
        <span>BAG / TELEMETRY INDEX</span>
        <span class="badge-blue mono-tag">C-02</span>
      </div>
      <button type="button" class="drawer-close-btn" onclick="VOLTERRA_CART.closeDrawer()" aria-label="Close Bag">✕</button>
    </div>

    <!-- Free Shipping Progress Meter -->
    <div class="free-ship-meter-wrap">
      <div class="meter-text" id="freeShipText">
        <span>⚡ FREE EXPRESS DISPATCH UNLOCKED ($149 / $100 QUALIFIED)</span>
      </div>
      <div class="meter-progress-track">
        <div class="meter-progress-fill" id="freeShipFill" style="width: 100%;"></div>
      </div>
    </div>

    <!-- Cart Items Scroll List -->
    <div class="drawer-items-list" id="drawerItemsList">
      <!-- Injected dynamically by VOLTERRA_CART.updateUI() -->
    </div>

    <!-- Recommended Add-ons -->
    <div style="padding: 16px 24px; background: rgba(4, 12, 23, 0.6); border-top: 1px solid var(--border-dark);">
      <div style="font-family: var(--font-mono); font-size: 0.72rem; color: var(--text-secondary); margin-bottom: 8px;">
        RECOMMENDED RACE DAY ACCESSORIES:
      </div>
      <div style="display: flex; gap: 8px;">
        <button type="button" class="action-btn" style="padding: 6px 12px; font-size: 0.72rem;" onclick="VOLTERRA_CART.addItem({id:'socks', title:'PRO CARBON SOCKS', price:24.00, colors:[{name:'Stealth Carbon', hex:'#1687ff'}]})">
          + PRO SOCKS ($24)
        </button>
        <button type="button" class="action-btn" style="padding: 6px 12px; font-size: 0.72rem;" onclick="VOLTERRA_CART.addItem({id:'flask', title:'SPEED NUTRITION FLASK', price:18.00, colors:[{name:'Aero Cyan', hex:'#00e599'}]})">
          + FLASK ($18)
        </button>
      </div>
    </div>

    <!-- Drawer Footer -->
    <div class="drawer-footer">
      <div class="drawer-summary-row">
        <span>Telemetry Subtotal</span>
        <span id="drawerSubtotal">$0.00</span>
      </div>
      <div class="drawer-summary-row">
        <span>Express Tracked Dispatch</span>
        <span style="color: var(--volt-green);">FREE</span>
      </div>
      <div class="drawer-total-row">
        <span>Total Due</span>
        <span id="drawerTotal">$0.00 USD</span>
      </div>

      <a href="checkout.php" class="btn-primary drawer-checkout-btn">
        PROCEED TO SECURE CHECKOUT →
      </a>

      <div style="margin-top: 14px; text-align: center; font-family: var(--font-mono); font-size: 0.68rem; color: var(--text-muted); display: flex; justify-content: space-around;">
        <span>🔒 256-BIT ENCRYPTION</span>
        <span>50KM TRIAL GUARANTEE</span>
        <span>FREE RETURNS</span>
      </div>
    </div>

  </div>
</div>
