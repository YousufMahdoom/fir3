<?php
// includes/header.php - VOLTERRA CONCEPT 02 Global Header
if (!isset($pageTitle)) $pageTitle = 'VOLTERRA // Built To Outrun';
if (!isset($activeNav)) $activeNav = 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="VOLTERRA CONCEPT 02: Built to Outrun. Agency-grade performance footwear engineered with supercritical nitrogen foam and curved carbon propulsion plates.">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/telemetry.css">
</head>
<body>

  <!-- Top Telemetry Ticker -->
  <div class="top-telemetry-ticker">
    <div class="ticker-left">
      <span class="pulse-indicator"></span>
      <span>VOLTERRA KINETIC LAB // FRANKFURT NODE 4</span>
      <span style="opacity: 0.5;">|</span>
      <span>LAT: 50.1109° N, 8.6821° E</span>
      <span style="opacity: 0.5;">|</span>
      <span style="color: var(--volt-green);">100Hz BLE STREAM ACTIVE</span>
    </div>
    <div style="display: flex; gap: 20px; align-items: center;">
      <span>50KM TRIAL RUN GUARANTEE // 100% REFUND ACTIVE</span>
      <span style="opacity: 0.5;">|</span>
      <span style="color: var(--electric-blue);">FREE EXPRESS GLOBAL SHIPPING OVER $100</span>
    </div>
  </div>

  <!-- Primary Site Header -->
  <header class="site-header">
    <div class="header-container">
      <div class="brand-logo-wrap">
        <a href="index.php" class="brand-logo" id="brandLogoLink">
          VOLTERRA
          <span class="brand-badge">C-02</span>
        </a>
      </div>

      <nav>
        <ul class="nav-links">
          <li>
            <a href="index.php" class="nav-link <?php if ($activeNav === 'home') echo 'active'; ?>">Storefront</a>
          </li>
          <li>
            <a href="shop.php" class="nav-link <?php if ($activeNav === 'shop') echo 'active'; ?>">Footwear Catalog</a>
          </li>
          <li>
            <a href="product.php" class="nav-link <?php if ($activeNav === 'product') echo 'active'; ?>">X-RACE 01</a>
          </li>
          <li>
            <a href="technology.php" class="nav-link <?php if ($activeNav === 'technology') echo 'active'; ?>">Technology</a>
          </li>
          <li>
            <a href="locker.php" class="nav-link <?php if ($activeNav === 'locker') echo 'active'; ?>">Athlete Locker</a>
          </li>
        </ul>
      </nav>

      <div class="nav-actions">
        <a href="locker.php" class="action-btn" title="Elena Vance Athlete Profile">
          <span class="pulse-indicator" style="background: var(--electric-blue);"></span>
          <span>@ELENA.VANCE</span>
        </a>

        <button type="button" class="cart-toggle-btn" onclick="VOLTERRA_CART.openDrawer()" aria-label="Open Cart Drawer">
          <span>BAG</span>
          <span class="cart-count-badge">0</span>
        </button>
      </div>
    </div>
  </header>
