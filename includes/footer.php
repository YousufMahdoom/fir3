<?php
// includes/footer.php - Global Footer & Scripts
?>
  <!-- Newsletter & Brand Lab Transition Banner -->
  <section style="background: linear-gradient(180deg, var(--bg-deep-navy) 0%, var(--bg-midnight-dark) 100%); padding: 60px 24px; border-top: 1px solid var(--border-dark);">
    <div class="newsletter-banner-box">
      <div>
        <div class="mono-tag" style="color: var(--electric-blue); margin-bottom: 8px;">// ATHLETE TELEMETRY DISPATCH</div>
        <h2 style="font-size: clamp(1.8rem, 4vw, 2.2rem); color: #ffffff; text-transform: uppercase;">READY TO OUTRUN?</h2>
        <p style="color: var(--text-secondary); max-width: 500px; margin-top: 8px;">
          Join 14,000+ athletes receiving real-time race telemetry reports, limited lab prototype drops, and break-in protocols.
        </p>
      </div>

      <form id="newsletterForm" class="newsletter-form-row">
        <input type="email" placeholder="ENTER ATHLETE EMAIL / STRAVA ID" required style="flex-grow: 1; background: #061324; border: 1px solid var(--border-dark-highlight); color: #ffffff; padding: 14px 18px; border-radius: var(--radius-sm); font-family: var(--font-mono); font-size: 0.85rem;">
        <button type="submit" class="btn-primary" style="padding: 14px 24px; white-space: nowrap;">JOIN THE LAB</button>
      </form>
    </div>
  </section>

  <!-- Master Site Footer -->
  <footer class="site-footer">
    <div class="footer-container">
      <div class="footer-top-grid">
        <div class="footer-brand-bio">
          <div class="brand-logo" style="margin-bottom: 14px;">
            VOLTERRA
            <span class="brand-badge">CONCEPT 02</span>
          </div>
          <p>
            Performance footwear engineered for speed, stability, and relentless movement. Supercritical nitrogen AeroFoam™ and curved carbon plate architectures validated across 14,000+ kilometers of road testing.
          </p>
          <div style="margin-top: 20px; font-family: var(--font-mono); font-size: 0.72rem; color: var(--electric-blue);">
            FRANKFURT HIGH VELOCITY LAB // NODE 04
          </div>
        </div>

        <div>
          <div class="footer-col-title">Footwear Lab</div>
          <ul class="footer-links-list">
            <li><a href="shop.php?cat=marathon">Marathon & Road</a></li>
            <li><a href="shop.php?cat=tempo">Tempo & Intervals</a></li>
            <li><a href="shop.php?cat=trail">Technical Trail</a></li>
            <li><a href="shop.php?cat=track">Short Track & 5K</a></li>
            <li><a href="product.php">VOLTERRA X-RACE 01</a></li>
          </ul>
        </div>

        <div>
          <div class="footer-col-title">Innovations</div>
          <ul class="footer-links-list">
            <li><a href="technology.php#aerofoam">AeroFoam™ Nitrogen</a></li>
            <li><a href="technology.php#flexcore">FlexCore™ Spoon Plate</a></li>
            <li><a href="technology.php#gripx">Vibram® Grip-X Compound</a></li>
            <li><a href="technology.php#windtunnel">Wind-Tunnel Testing</a></li>
            <li><a href="technology.php#guarantee">50KM Trial Run Policy</a></li>
          </ul>
        </div>

        <div>
          <div class="footer-col-title">Athlete Hub</div>
          <ul class="footer-links-list">
            <li><a href="locker.php?tab=locker">Chassis Locker</a></li>
            <li><a href="locker.php?tab=activerun">Live Run Stream (100Hz)</a></li>
            <li><a href="locker.php?tab=postrun">Biomechanical Analysis</a></li>
            <li><a href="locker.php?tab=strava">Strava Telemetry Sync</a></li>
            <li><a href="checkout.php">Order Manifest</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom-row">
        <div>© 2026 VOLTERRA KINETIC LAB. ALL RIGHTS RESERVED. // PROTOCOL C-02</div>
        <div style="display: flex; gap: 24px;">
          <span>PRIVACY PROTOCOL</span>
          <span>DISPATCH TERMS</span>
          <span>ISO-992 BIOMECHANICAL CERTIFICATION</span>
        </div>
      </div>
    </div>
  </footer>

  <!-- Mobile Bottom App Navigation Bar -->
  <nav class="mobile-bottom-nav" aria-label="Mobile Navigation">
    <a href="index.php" class="mob-nav-item <?php if ($activeNav === 'home') echo 'active'; ?>">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
      <span>Store</span>
    </a>
    <a href="shop.php" class="mob-nav-item <?php if ($activeNav === 'shop') echo 'active'; ?>">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
      <span>Catalog</span>
    </a>
    <a href="product.php" class="mob-nav-item <?php if ($activeNav === 'product') echo 'active'; ?>">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      <span>X-Race</span>
    </a>
    <a href="locker.php" class="mob-nav-item <?php if ($activeNav === 'locker') echo 'active'; ?>">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
      <span>Locker</span>
    </a>
    <button type="button" class="mob-nav-item" style="background: none; border: none; cursor: pointer;" onclick="VOLTERRA_CART.openDrawer()">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
      <span>Bag (<span class="cart-count-badge">0</span>)</span>
    </button>
  </nav>

  <!-- Include Cart Drawer & Scripts -->
  <?php include __DIR__ . '/cart-drawer.php'; ?>

  <script src="assets/js/products-data.js"></script>
  <script src="assets/js/cart.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/3d-effects.js"></script>
</body>
</html>
