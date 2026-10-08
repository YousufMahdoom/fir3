<?php
// confirmation.php - VOLTERRA CONCEPT 02 Order Confirmation & Dispatch Telemetry
$pageTitle = 'VOLTERRA // Order Confirmation & Dispatch Telemetry — Order #VLT-89210-DE';
$activeNav = '';
include __DIR__ . '/includes/header.php';
?>

<main class="tech-page-container">

  <!-- Hero Confirmation Banner -->
  <div class="dispatch-hero-banner">
    <div class="hero-laser-grid" style="opacity: 0.3;"></div>

    <div style="position: relative; z-index: 10;">
      <div style="display: flex; gap: 12px; align-items: center; margin-bottom: 16px;">
        <span class="badge-volt mono-tag">
          <span class="pulse-indicator"></span>
          ORDER PROTOCOL CONFIRMED // DISPATCH SEQUENCE INITIATED
        </span>
        <span class="mono-tag" style="color: var(--electric-blue); font-size: 0.75rem;">
          SESSION: OX9924-LATENCY-4MS
        </span>
      </div>

      <h1 style="font-size: clamp(2.6rem, 5vw, 4.4rem); font-weight: 900; color: #ffffff; text-transform: uppercase; line-height: 1; margin-bottom: 16px;">
        YOU ARE CLEARED FOR SPEED.
      </h1>

      <p style="color: var(--text-secondary); font-size: 1.15rem; max-width: 760px; line-height: 1.6; margin-bottom: 28px;">
        Your Volterra X-Race 01 chassis has been allocated at Frankfurt Lab Node 4 and calibrated for dispatch. Tracking beacon #TRK-994182 is streaming live telemetry.
      </p>

      <div style="display: flex; gap: 16px; flex-wrap: wrap;">
        <button type="button" class="btn-primary" onclick="VOLTERRA_CART.showToast('GENERATING TELEMETRY PDF MANIFEST...');">
          DOWNLOAD ORDER TELEMETRY PDF ↓
        </button>
        <a href="locker.php" class="btn-secondary">
          SYNC TO ATHLETE LOCKER APP →
        </a>
      </div>
    </div>
  </div>

  <!-- Live Dispatch Telemetry Radar & Progress Stepper -->
  <div style="background: var(--bg-navy-surface); border: 1px solid var(--border-dark-highlight); border-radius: var(--radius-md); padding: 36px; margin-bottom: 48px;">
    
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; margin-bottom: 24px;">
      <div>
        <div class="mono-tag" style="color: var(--electric-blue); margin-bottom: 4px;">CARRIER PROTOCOL</div>
        <div style="font-family: var(--font-headline); font-size: 1.1rem; font-weight: 700; color: #ffffff;">
          PRIORITY EXPRESS LABORATORY DISPATCH // GPS BEACON #TRK-994182
        </div>
      </div>

      <div style="text-align: right;">
        <div class="mono-tag" style="color: var(--volt-green); margin-bottom: 4px;">ESTIMATED DELIVERY</div>
        <div style="font-family: var(--font-headline); font-size: 1.25rem; font-weight: 800; color: #ffffff;">
          THURSDAY, OCT 26 BY 12:00 PM
        </div>
      </div>
    </div>

    <!-- 4-Node Stepper -->
    <div class="dispatch-radar-track">
      <!-- Node 1 -->
      <div class="dispatch-node completed">
        <div class="node-status-dot"></div>
        <div class="node-title">01. Order Encrypted</div>
        <div class="node-sub">COMPLETED // 14:32 UTC</div>
        <div style="font-size: 0.72rem; color: var(--text-muted); margin-top: 6px;">256-bit tokenized auth</div>
      </div>

      <!-- Node 2 -->
      <div class="dispatch-node active">
        <div class="node-status-dot"></div>
        <div class="node-title">02. Lab Calibration</div>
        <div class="node-sub">IN PROGRESS // FRANKFURT NODE 4</div>
        <div style="font-size: 0.72rem; color: var(--volt-green); margin-top: 6px;">Laser alignment 0.00mm tare</div>
      </div>

      <!-- Node 3 -->
      <div class="dispatch-node">
        <div class="node-status-dot"></div>
        <div class="node-title">03. High-Velocity Air Transit</div>
        <div class="node-sub">OCT 25 // 08:30 UTC</div>
        <div style="font-size: 0.72rem; color: var(--text-muted); margin-top: 6px;">Frankfurt Cargo Flight VL-42</div>
      </div>

      <!-- Node 4 -->
      <div class="dispatch-node">
        <div class="node-status-dot"></div>
        <div class="node-title">04. Final Hand-off</div>
        <div class="node-sub">OCT 26 // 11:00 UTC</div>
        <div style="font-size: 0.72rem; color: var(--text-muted); margin-top: 6px;">Berlin Courier Telemetry Scan</div>
      </div>
    </div>

  </div>

  <!-- Two-Column Breakdown -->
  <div class="confirmation-grid">
    
    <!-- LEFT: Destination & Lab Manifest -->
    <div>
      <div class="form-card" style="margin-bottom: 28px;">
        <div class="form-card-title">
          <span>DISPATCH DESTINATION & COURIER DETAILS</span>
          <span class="mono-tag" style="color: var(--volt-green);">SMS ALERTS ACTIVE</span>
        </div>

        <div class="confirmation-details-grid">
          <div>
            <div class="mono-tag" style="color: var(--text-muted); margin-bottom: 4px;">ATHLETE RECIPIENT</div>
            <strong style="color: #ffffff;">Elena Vance</strong>
            <div style="color: var(--text-secondary); margin-top: 2px;">elena.vance@velocity-lab.io</div>
            <div style="color: var(--text-secondary); margin-top: 2px;">+49 170 9482 119</div>
          </div>

          <div>
            <div class="mono-tag" style="color: var(--text-muted); margin-bottom: 4px;">DELIVERY NODE ADDRESS</div>
            <div style="color: #ffffff; font-weight: 600;">Friedrichstraße 43, Velocity Testing Quad 4B</div>
            <div style="color: var(--text-secondary);">10117 Berlin, Germany</div>
          </div>
        </div>
      </div>

      <!-- Chassis Certification Manifest -->
      <div class="form-card">
        <div class="form-card-title">
          <span>CHASSIS CERTIFICATION & LAB MANIFEST</span>
          <span class="mono-tag" style="color: var(--electric-blue);">SN: EXP-01-88429-GER</span>
        </div>

        <div style="display: grid; grid-template-columns: 100px 1fr; gap: 20px; align-items: center; margin-bottom: 20px;">
          <div style="background: var(--bg-midnight-dark); border-radius: var(--radius-sm); padding: 8px;">
            <script>
              document.write(getShoeSvg('#1687ff', '#ff6b2c'));
            </script>
          </div>

          <div>
            <h3 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 4px;">VOLTERRA X-RACE 01</h3>
            <div style="font-family: var(--font-mono); font-size: 0.78rem; color: var(--text-secondary);">
              Electric Obsidian / Volt Blue | Size: US M 9.0 (Standard D) | Qty: 1
            </div>
            <div style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--volt-green); margin-top: 4px;">
              ⚡ 89.4% Kinetic Deflection Spec | Density: 0.12 g/cm³
            </div>
          </div>
        </div>

        <div class="guarantee-callout-box">
          <strong style="color: var(--volt-green);">ATHLETE GUARANTEE ACCREDITATION:</strong><br>
          Your 50KM Trial Run guarantee activates automatically when the package is delivered. Log your test runs via the companion app or Strava to authenticate road miles.
        </div>
      </div>
    </div>

    <!-- RIGHT: Financial Summary & Athlete Companion Integration -->
    <aside>
      <div class="form-card" style="margin-bottom: 28px;">
        <div class="form-card-title">
          <span>ORDER FINANCIAL SUMMARY</span>
          <span class="mono-tag" style="color: var(--volt-green);">PAID // AUTH #99104</span>
        </div>

        <div class="cost-row">
          <span>Chassis Subtotal</span>
          <span>$149.00 USD</span>
        </div>
        <div class="cost-row">
          <span>Express Lab Freight</span>
          <span style="color: var(--volt-green);">FREE ($0.00)</span>
        </div>
        <div class="cost-row">
          <span>Carbon Offset Program</span>
          <span style="color: var(--volt-green);">0.00g CO₂e (VERIFIED)</span>
        </div>
        <div class="cost-row total">
          <span>Total Authorized</span>
          <span style="color: #ffffff;">$149.00 USD</span>
        </div>
      </div>

      <!-- App Integration Card -->
      <div style="background: linear-gradient(135deg, #102a4e 0%, #081628 100%); border: 1px solid var(--border-dark-highlight); border-radius: var(--radius-md); padding: 32px;">
        <div class="mono-tag" style="color: var(--energy-orange); margin-bottom: 8px;">NEXT STEP // PRE-RACE PROTOCOL</div>
        <h3 style="font-size: 1.35rem; color: #ffffff; text-transform: uppercase; margin-bottom: 12px;">
          SYNC WITH ATHLETE APP
        </h3>
        <p style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.6; margin-bottom: 24px;">
          Pair your Strava account and initialize live 100Hz kinetic telemetry to track break-in progress towards your 50KM guarantee lock.
        </p>

        <a href="locker.php" class="btn-primary" style="width: 100%; text-align: center; justify-content: center;">
          OPEN ATHLETE LOCKER APP →
        </a>
      </div>
    </aside>

  </div>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
