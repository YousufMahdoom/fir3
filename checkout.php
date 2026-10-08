<?php
// checkout.php - VOLTERRA CONCEPT 02 Multi-Step Checkout Experience
$pageTitle = 'VOLTERRA // Multi-Step Checkout (Order Telemetry)';
$activeNav = '';
include __DIR__ . '/includes/header.php';
?>

<main class="checkout-wrapper">
  
  <div style="margin-bottom: 28px;">
    <div class="mono-tag" style="color: var(--electric-blue); margin-bottom: 6px;">
      // PROTOCOL C-02 CHECKOUT CHAMBER
    </div>
    <h1 style="font-size: clamp(1.8rem, 4vw, 2.4rem); color: #ffffff; text-transform: uppercase;">
      ORDER TELEMETRY & DISPATCH ALLOCATION
    </h1>
    <p style="color: var(--text-secondary); font-size: 0.95rem; margin-top: 4px;">
      Confirm dispatch node, athlete credentials, and courier telemetry encryption before allocation.
    </p>
  </div>

  <div class="checkout-grid">
    
    <!-- LEFT COLUMN: Multi-Step Flow (60%) -->
    <div class="checkout-main-flow">
      
      <!-- Stepper Progress Header -->
      <div class="checkout-stepper">
        <div class="step-indicator active" id="stepIndicator1" onclick="setCheckoutStep(1)" style="cursor: pointer;">
          <div class="step-num-pill">01</div>
          <span>Information</span>
        </div>
        <div class="step-arrow-divider">→</div>
        
        <div class="step-indicator" id="stepIndicator2" onclick="setCheckoutStep(2)" style="cursor: pointer;">
          <div class="step-num-pill">02</div>
          <span>Shipping Protocol</span>
        </div>
        <div class="step-arrow-divider">→</div>
        
        <div class="step-indicator" id="stepIndicator3" onclick="setCheckoutStep(3)" style="cursor: pointer;">
          <div class="step-num-pill">03</div>
          <span>Payment & Auth</span>
        </div>
      </div>

      <!-- Express 1-Click Checkout -->
      <div class="express-checkout-box">
        <div class="express-checkout-title">⚡ EXPRESS ATHLETE CHECKOUT</div>
        <div class="express-btns-grid">
          <button type="button" class="express-btn" onclick="VOLTERRA_CART.showToast('AUTHENTICATING APPLE PAY...'); setTimeout(() => setCheckoutStep(2), 700);">
             Pay
          </button>
          <button type="button" class="express-btn" onclick="VOLTERRA_CART.showToast('AUTHENTICATING GOOGLE PAY...'); setTimeout(() => setCheckoutStep(2), 700);">
            G Pay
          </button>
          <button type="button" class="express-btn klarna" onclick="VOLTERRA_CART.showToast('AUTHENTICATING KLARNA...'); setTimeout(() => setCheckoutStep(2), 700);">
            Klarna.
          </button>
        </div>
      </div>

      <div class="divider-with-text">
        <span>OR CONTINUE WITH ATHLETE TELEMETRY CHECKOUT</span>
      </div>

      <!-- STEP 1: ATHLETE & SHIPPING INFORMATION -->
      <div id="checkoutSection1" class="form-card">
        <div class="form-card-title">
          <span>01. ATHLETE & DISPATCH ADDRESS</span>
          <span class="mono-tag" style="color: var(--electric-blue); font-size: 0.75rem;">STEP 1 OF 3</span>
        </div>

        <div style="background: rgba(22, 135, 255, 0.08); border: 1px solid var(--border-dark-highlight); padding: 14px 18px; border-radius: var(--radius-sm); margin-bottom: 24px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;">
          <div style="font-size: 0.85rem; color: var(--text-primary-light);">
            Already have a Volterra Athlete Profile? <strong style="color: var(--electric-blue);">Log in for 1-click telemetry sync.</strong>
          </div>
          <button type="button" class="action-btn" style="padding: 6px 14px; font-size: 0.75rem;">SIGN IN</button>
        </div>

        <form onsubmit="event.preventDefault(); setCheckoutStep(2);">
          <div class="form-field full">
            <label class="field-label" for="fieldEmail">Athlete Email Address (For Dispatch Telemetry)</label>
            <input type="email" id="fieldEmail" class="field-input" value="elena.vance@velocity-lab.io" required placeholder="runner@domain.com">
          </div>

          <div class="form-group-row">
            <div class="form-field">
              <label class="field-label" for="fieldFirstName">First Name</label>
              <input type="text" id="fieldFirstName" class="field-input" value="Elena" required>
            </div>
            <div class="form-field">
              <label class="field-label" for="fieldLastName">Last Name</label>
              <input type="text" id="fieldLastName" class="field-input" value="Vance" required>
            </div>
          </div>

          <div class="form-field full">
            <label class="field-label" for="fieldAddress">Delivery Destination / Street Address</label>
            <input type="text" id="fieldAddress" class="field-input" value="Friedrichstraße 43, Velocity Testing Quad 4B" required>
          </div>

          <div class="form-group-row">
            <div class="form-field">
              <label class="field-label" for="fieldCity">City</label>
              <input type="text" id="fieldCity" class="field-input" value="Berlin" required>
            </div>
            <div class="form-field">
              <label class="field-label" for="fieldPostal">Postal Code</label>
              <input type="text" id="fieldPostal" class="field-input" value="10117" required>
            </div>
          </div>

          <div class="form-group-row">
            <div class="form-field">
              <label class="field-label" for="fieldCountry">Country / Region</label>
              <select id="fieldCountry" class="field-select">
                <option value="Germany" selected>Germany (Frankfurt Lab Hub)</option>
                <option value="United States">United States (Oregon Speed Lab)</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="France">France</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Japan">Japan</option>
              </select>
            </div>
            <div class="form-field">
              <label class="field-label" for="fieldPhone">Courier SMS Alerts Phone</label>
              <input type="tel" id="fieldPhone" class="field-input" value="+49 170 9482 119" placeholder="+49 ...">
            </div>
          </div>

          <div class="checkout-actions-row" style="justify-content: flex-end;">
            <button type="submit" class="btn-primary" style="padding: 14px 32px;">
              CONTINUE TO SHIPPING METHOD →
            </button>
          </div>
        </form>
      </div>

      <!-- STEP 2: SHIPPING PROTOCOL -->
      <div id="checkoutSection2" class="form-card" style="display: none;">
        <div class="form-card-title">
          <span>02. DISPATCH & COURIER PROTOCOL</span>
          <span class="mono-tag" style="color: var(--electric-blue); font-size: 0.75rem;">STEP 2 OF 3</span>
        </div>

        <div style="margin-bottom: 24px;">
          <!-- Option 1: Standard Tracked Free -->
          <div class="selection-tile shipping-tile selected" onclick="selectShippingOption(0.00, 'Priority Express Laboratory Dispatch (24-48h)', this)">
            <div class="selection-tile-left">
              <input type="radio" name="shippingRadio" checked style="accent-color: var(--electric-blue);">
              <div>
                <div class="tile-title">Priority Express Laboratory Dispatch (24–48h)</div>
                <div class="tile-sub">Guaranteed 24-48h arrival with live GPS tracking beacon from Frankfurt Hub</div>
              </div>
            </div>
            <div class="tile-price" style="color: var(--volt-green);">FREE</div>
          </div>

          <!-- Option 2: Expedited Same Day -->
          <div class="selection-tile shipping-tile" onclick="selectShippingOption(18.00, 'Lab Expedited Courier (Guaranteed Next-Day by 10:00 AM)', this)">
            <div class="selection-tile-left">
              <input type="radio" name="shippingRadio" style="accent-color: var(--electric-blue);">
              <div>
                <div class="tile-title">Lab Expedited Courier (Next-Day by 10:00 AM)</div>
                <div class="tile-sub">High-velocity priority flight routing with temperature-stabilized courier pouch</div>
              </div>
            </div>
            <div class="tile-price">$18.00</div>
          </div>
        </div>

        <div class="checkout-actions-row">
          <button type="button" class="btn-secondary" onclick="setCheckoutStep(1)">
            ← BACK TO ADDRESS
          </button>
          <button type="button" class="btn-primary" onclick="setCheckoutStep(3)" style="padding: 14px 32px;">
            CONTINUE TO PAYMENT →
          </button>
        </div>
      </div>

      <!-- STEP 3: PAYMENT METHOD & REVIEW -->
      <div id="checkoutSection3" class="form-card" style="display: none;">
        <div class="form-card-title">
          <span>03. SECURE TELEMETRY PAYMENT</span>
          <span class="mono-tag" style="color: var(--volt-green); font-size: 0.75rem;">256-BIT ENCRYPTED</span>
        </div>

        <!-- Payment Selector Tiles -->
        <div class="selection-tile payment-tile selected" onclick="selectPaymentMethod('cc', this)">
          <div class="selection-tile-left">
            <input type="radio" name="paymentRadio" checked style="accent-color: var(--electric-blue);">
            <div>
              <div class="tile-title">Credit / Debit Card</div>
              <div class="tile-sub">Visa, Mastercard, American Express with 3D Secure</div>
            </div>
          </div>
          <div style="font-family: var(--font-mono); font-size: 0.8rem; color: var(--text-secondary);">💳 ENCRYPTED</div>
        </div>

        <div id="paymentDetail_cc" class="payment-detail-box" style="background: var(--bg-midnight-dark); border: 1px solid var(--border-dark); border-radius: var(--radius-sm); padding: 20px; margin-bottom: 16px;">
          <div class="form-field full">
            <label class="field-label" for="ccNumber">Card Number</label>
            <input type="text" id="ccNumber" class="field-input" value="•••• •••• •••• 8812" placeholder="4242 4242 4242 4242">
          </div>
          <div class="form-group-row">
            <div class="form-field">
              <label class="field-label" for="ccExpiry">Expiry Date</label>
              <input type="text" id="ccExpiry" class="field-input" value="10/28" placeholder="MM/YY">
            </div>
            <div class="form-field">
              <label class="field-label" for="ccCvc">Security CVC</label>
              <input type="text" id="ccCvc" class="field-input" value="•••" placeholder="CVC">
            </div>
          </div>
          <div class="form-field full">
            <label class="field-label" for="ccName">Name on Card</label>
            <input type="text" id="ccName" class="field-input" value="Elena Vance">
          </div>
        </div>

        <div class="selection-tile payment-tile" onclick="selectPaymentMethod('klarna', this)">
          <div class="selection-tile-left">
            <input type="radio" name="paymentRadio" style="accent-color: var(--electric-blue);">
            <div>
              <div class="tile-title">Klarna. Pay in 4 Interest-Free Installments</div>
              <div class="tile-sub">Split total into 4 bi-weekly payments with zero APR</div>
            </div>
          </div>
          <div style="font-family: var(--font-mono); font-size: 0.8rem; color: #ffb3c7;">KLARNA</div>
        </div>

        <div class="selection-tile payment-tile" onclick="selectPaymentMethod('paypal', this)">
          <div class="selection-tile-left">
            <input type="radio" name="paymentRadio" style="accent-color: var(--electric-blue);">
            <div>
              <div class="tile-title">PayPal Direct</div>
              <div class="tile-sub">Safe instant checkout using linked PayPal wallet</div>
            </div>
          </div>
          <div style="font-family: var(--font-mono); font-size: 0.8rem; color: #0079c1;">PAYPAL</div>
        </div>

        <div style="margin: 20px 0; display: flex; align-items: center; gap: 10px;">
          <input type="checkbox" id="billingCheck" checked style="accent-color: var(--electric-blue);">
          <label for="billingCheck" style="font-size: 0.85rem; color: var(--text-secondary);">Billing address matches shipping destination</label>
        </div>

        <div class="checkout-actions-row">
          <button type="button" class="btn-secondary" onclick="setCheckoutStep(2)">
            ← BACK TO SHIPPING
          </button>
          
          <button type="button" class="btn-primary" onclick="processOrder(event)" style="padding: 16px 28px; font-size: 0.95rem;">
            COMPLETE ORDER & INITIATE DISPATCH — <span id="btnFinalAmount">$149.00 USD</span> →
          </button>
        </div>

        <div class="trust-badges-bar">
          <div>🔒 256-BIT LAB ENCRYPTION</div>
          <div>⚡ 50KM TRIAL GUARANTEE</div>
          <div>🌍 30-DAY GLOBAL RETURNS</div>
        </div>
      </div>

    </div>

    <!-- RIGHT COLUMN: Order Telemetry & Manifest (Sticky Sidebar 40%) -->
    <aside class="order-manifest-sidebar">
      
      <div class="manifest-header">
        <div class="manifest-title">ORDER TELEMETRY MANIFEST // PROTOCOL C-02</div>
        <span class="badge-blue mono-tag">1 ITEM LOADED</span>
      </div>

      <!-- Loaded Items from Cart -->
      <div id="manifestItemsContainer">
        <!-- Rendered by updateCheckoutManifest() in checkout.js -->
      </div>

      <!-- Telemetry Voucher / Lab Code -->
      <div style="margin: 24px 0 16px;">
        <div style="font-family: var(--font-mono); font-size: 0.72rem; color: var(--text-secondary); margin-bottom: 6px;">
          ATHLETE VOUCHER / LAB ACCESS CODE
        </div>
        <div class="voucher-input-group">
          <input type="text" id="checkoutVoucherInput" class="voucher-input" placeholder="e.g. SPEEDLAB10, ELENA50">
          <button type="button" class="voucher-btn" onclick="applyVoucherFromCheckout()">APPLY</button>
        </div>
        <div style="font-size: 0.72rem; color: var(--text-muted); font-family: var(--font-mono);">
          Try: <span style="color: var(--electric-blue); cursor: pointer;" onclick="document.getElementById('checkoutVoucherInput').value='SPEEDLAB10'; applyVoucherFromCheckout();">SPEEDLAB10</span> (10% off) or <span style="color: var(--electric-blue); cursor: pointer;" onclick="document.getElementById('checkoutVoucherInput').value='ELENA50'; applyVoucherFromCheckout();">ELENA50</span> ($50 off)
        </div>
      </div>

      <!-- Cost Summary -->
      <div class="manifest-cost-summary">
        <div class="cost-row">
          <span>Telemetry Subtotal</span>
          <span id="manifestSubtotal">$149.00</span>
        </div>
        
        <div class="cost-row" id="manifestDiscountRow" style="display: none; color: var(--volt-green);">
          <span>Lab Protocol Discount</span>
          <span id="manifestDiscount">-$0.00</span>
        </div>

        <div class="cost-row">
          <span>Express Tracked Courier</span>
          <span id="manifestShipping" style="color: var(--volt-green);">FREE ($0.00)</span>
        </div>

        <div class="cost-row">
          <span>Estimated Duties & Taxes</span>
          <span style="color: var(--text-muted);">INCLUDED ($0.00)</span>
        </div>

        <div class="cost-row total">
          <span>Total Authorized</span>
          <span id="manifestTotal" style="color: #ffffff;">$149.00 USD</span>
        </div>
        
        <div style="font-size: 0.8rem; color: var(--text-secondary); text-align: right; margin-top: 4px;">
          or 4 installments of <strong id="klarnaInstallment" style="color: #ffffff;">$37.25</strong> with Klarna
        </div>
      </div>

      <!-- 50KM Guarantee Callout Box -->
      <div class="guarantee-callout-box">
        <strong style="color: var(--volt-green); font-family: var(--font-mono);">VOLTERRA 50KM TRIAL RUN PROMISE:</strong><br>
        Put 50 kilometers on your chassis outdoors. If you don't feel a measurable increase in propulsion efficiency and cadence speed, return them with 100% money back.
      </div>

      <!-- Support Info -->
      <div style="margin-top: 24px; padding-top: 16px; border-top: 1px solid var(--border-dark); font-family: var(--font-mono); font-size: 0.72rem; color: var(--text-muted);">
        <div>LIVE TELEMETRY BEACON: <span style="color: var(--volt-green);">ONLINE</span></div>
        <div style="margin-top: 4px;">DISPATCH ASSIGNMENT: FRANKFURT CARGO NODE 04</div>
      </div>

    </aside>

  </div>

</main>

<script src="assets/js/checkout.js"></script>

<?php include __DIR__ . '/includes/footer.php'; ?>
