<?php
// product.php - VOLTERRA X-RACE 01 Product Detail Page (PDP)
$pageTitle = 'VOLTERRA // X-RACE 01 Supercritical Carbon Racing Chassis';
$activeNav = 'product';
include __DIR__ . '/includes/header.php';
?>

<main style="max-width: 1440px; margin: 0 auto; padding: 40px 32px 100px;">

  <!-- Breadcrumbs & Telemetry Status -->
  <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; margin-bottom: 32px; padding-bottom: 16px; border-bottom: 1px solid var(--border-dark);">
    <div style="font-family: var(--font-mono); font-size: 0.78rem; color: var(--text-secondary);">
      <a href="shop.php" style="color: var(--text-muted);">RUNNING</a> / 
      <a href="shop.php?cat=marathon" style="color: var(--text-muted);">MARATHON & ROAD</a> / 
      <span style="color: #ffffff; font-weight: 700;">VOLTERRA X-RACE 01</span>
    </div>

    <div style="display: flex; align-items: center; gap: 14px;">
      <span class="badge-volt mono-tag">
        <span class="pulse-indicator"></span>
        LAB RELEASE VOL. 02 // IN STOCK (38 PAIRS)
      </span>
      <span class="mono-tag" style="color: var(--electric-blue); font-size: 0.72rem;">
        CALIBRATION: C-02-GER
      </span>
    </div>
  </div>

  <!-- Dual-Column Product Configurator Suite -->
  <div class="pdp-grid-layout">
    
    <!-- LEFT COLUMN: Media Viewport & Telemetry Barometer (7 cols) -->
    <div class="pdp-media-col">
      <!-- Main Visual Viewport -->
      <div style="background: radial-gradient(circle at 50% 45%, #0e2b52 0%, #061324 80%); border: 1px solid var(--border-dark-highlight); border-radius: var(--radius-lg); padding: 48px 32px; position: relative; text-align: center; box-shadow: var(--shadow-elevation);">
        
        <!-- View Mode Selector Pills -->
        <div style="position: absolute; top: 20px; left: 24px; display: flex; gap: 8px;">
          <button type="button" class="action-btn active" style="padding: 6px 12px; font-size: 0.72rem; background: var(--electric-blue); border-color: var(--electric-blue); color: #ffffff;" onclick="switchViewModel('360', this)">360° CHASSIS</button>
          <button type="button" class="action-btn" style="padding: 6px 12px; font-size: 0.72rem;" onclick="switchViewModel('exploded', this)">EXPLODED MATRIX</button>
          <button type="button" class="action-btn" style="padding: 6px 12px; font-size: 0.72rem;" onclick="switchViewModel('zoom', this)">ZOOM LAB</button>
        </div>

        <div style="position: absolute; top: 20px; right: 24px; font-family: var(--font-mono); font-size: 0.72rem; color: var(--electric-blue);">
          MASS: 218g ± 1.5g
        </div>

        <div id="pdpShoeStage" class="interactive-chassis-stage" style="width: 100%; max-width: 520px; margin: 24px auto; position: relative;">
          <div class="hero-scanline-laser"></div>
          <img id="pdpMainPhoto" src="assets/images/x-race-01.jpg" alt="VOLTERRA X-RACE 01" style="width: 100%; height: auto; max-height: 360px; object-fit: contain; filter: drop-shadow(0 20px 40px rgba(0,0,0,0.8)); transition: all 0.35s ease;">
          <div class="drop-floor-reflection" style="bottom: -10px;"></div>
        </div>

        <div style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--text-muted); margin-top: 10px;">
          INTERACTIVE TELEMETRY VIEW // SERIAL EXP-01-88429-GER
        </div>
      </div>

      <!-- 5-Angle Thumbnail Gallery -->
      <div class="pdp-angle-gallery">
        <div class="pdp-angle-item active" onclick="setAngleView('assets/images/x-race-01.jpg', this)">
          <div>LATERAL</div>
        </div>
        <div class="pdp-angle-item" onclick="setAngleView('assets/images/tech-gripx.jpg', this)">
          <div>OUTSOLE</div>
        </div>
        <div class="pdp-angle-item" onclick="setAngleView('assets/images/tech-aerofoam.jpg', this)">
          <div>AEROFOAM</div>
        </div>
        <div class="pdp-angle-item" onclick="setAngleView('assets/images/tech-flexcore.jpg', this)">
          <div>CARBON</div>
        </div>
        <div class="pdp-angle-item" onclick="setAngleView('assets/images/campaign-speed.jpg', this)">
          <div>ON-TRACK</div>
        </div>
      </div>

      <!-- Telemetry Specs Barometer -->
      <div class="pdp-specs-barometer">
        <div>
          <div class="mono-tag" style="color: var(--electric-blue); font-size: 0.68rem;">PROPULSION</div>
          <div style="font-family: var(--font-headline); font-size: 1.15rem; font-weight: 700; color: #ffffff;">89.4%</div>
          <div style="font-size: 0.72rem; color: var(--text-secondary);">AeroFoam Rebound</div>
        </div>
        <div>
          <div class="mono-tag" style="color: var(--energy-orange); font-size: 0.68rem;">WEIGHT</div>
          <div style="font-family: var(--font-headline); font-size: 1.15rem; font-weight: 700; color: #ffffff;">218G</div>
          <div style="font-size: 0.72rem; color: var(--text-secondary);">US Men's 9.0</div>
        </div>
        <div>
          <div class="mono-tag" style="color: var(--volt-green); font-size: 0.68rem;">STACK & DROP</div>
          <div style="font-family: var(--font-headline); font-size: 1.15rem; font-weight: 700; color: #ffffff;">8MM / 39.5MM</div>
          <div style="font-size: 0.72rem; color: var(--text-secondary);">WA Legal Limit</div>
        </div>
        <div>
          <div class="mono-tag" style="color: var(--electric-blue); font-size: 0.68rem;">CHASSIS CORE</div>
          <div style="font-family: var(--font-headline); font-size: 1.15rem; font-weight: 700; color: #ffffff;">3K CARBON</div>
          <div style="font-size: 0.72rem; color: var(--text-secondary);">Curved Spoon Plate</div>
        </div>
      </div>
    </div>

    <!-- RIGHT COLUMN: Purchasing Matrix & Specifications (5 cols) -->
    <div class="pdp-info-col" style="background: var(--bg-navy-surface); border: 1px solid var(--border-dark-highlight); border-radius: var(--radius-lg); padding: 40px; box-shadow: var(--shadow-elevation);">
      
      <div style="display: flex; gap: 8px; margin-bottom: 14px; flex-wrap: wrap;">
        <span class="badge-orange mono-tag">NEW RELEASE</span>
        <span class="badge-blue mono-tag">SUB-2 HR SPEC</span>
        <span class="badge-volt mono-tag">EXP-01 CARBON</span>
      </div>

      <h1 style="font-size: 2.8rem; font-weight: 800; color: #ffffff; text-transform: uppercase; margin-bottom: 6px;">
        VOLTERRA X-RACE 01
      </h1>
      <p style="color: var(--text-secondary); font-size: 1rem; margin-bottom: 16px;">
        Supercritical Nitrogen-Infused Propulsion Chassis
      </p>

      <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px; padding-bottom: 18px; border-bottom: 1px solid var(--border-dark);">
        <div style="color: #f39c12; font-size: 0.95rem;">★★★★★</div>
        <div style="font-size: 0.85rem; color: #ffffff; font-weight: 600;">4.9 / 5.0</div>
        <div style="font-size: 0.8rem; color: var(--text-muted);">(128 Lab & Athlete Reviews // 98% Recommend)</div>
      </div>

      <!-- Pricing -->
      <div style="margin-bottom: 28px;">
        <div style="font-family: var(--font-headline); font-size: 2.4rem; font-weight: 800; color: #ffffff;">
          $149.00 <span style="font-size: 1rem; color: var(--text-muted); font-weight: normal;">USD</span>
        </div>
        <div style="font-size: 0.85rem; color: var(--text-secondary); margin-top: 4px;">
          or 4 interest-free payments of <strong>$37.25</strong> with Klarna
        </div>
      </div>

      <!-- Colorway Chips -->
      <div class="colorway-selector-block" style="margin-bottom: 28px;">
        <div class="selector-label-row">
          <span>COLORWAY:</span>
          <span class="selected-color-val" style="color: #ffffff; font-weight: 700;">Electric Obsidian / Volt Blue</span>
        </div>
        <div class="colorway-chips">
          <div class="colorway-chip active" data-color-name="Electric Obsidian / Volt Blue" data-color-hex="#1687ff">Electric Obsidian</div>
          <div class="colorway-chip" data-color-name="Solar Flare Orange" data-color-hex="#ff6b2c">Solar Orange</div>
          <div class="colorway-chip" data-color-name="Stealth Carbon Matrix" data-color-hex="#3a4454">Stealth Carbon</div>
          <div class="colorway-chip" data-color-name="White Nimbus / Ice Blue" data-color-hex="#c5e0ff">White Nimbus</div>
        </div>
      </div>

      <!-- Size Selector -->
      <div class="size-selector-block" style="margin-bottom: 32px;">
        <div class="selector-label-row">
          <span>SELECT SIZE (US MEN'S):</span>
          <a href="#sizeGuideModal" style="color: var(--electric-blue); font-weight: 600;" onclick="VOLTERRA_CART.showToast('SIZE SCAN GUIDE: TRUE TO RACE FIT (D)')">SIZE GUIDE / 3D SCAN</a>
        </div>
        <div class="size-matrix-grid">
          <button type="button" class="size-btn">US 7.0</button>
          <button type="button" class="size-btn">US 7.5</button>
          <button type="button" class="size-btn">US 8.0</button>
          <button type="button" class="size-btn">US 8.5</button>
          <button type="button" class="size-btn active">US 9.0</button>
          <button type="button" class="size-btn">US 9.5</button>
          <button type="button" class="size-btn">US 10.0</button>
          <button type="button" class="size-btn">US 10.5</button>
          <button type="button" class="size-btn">US 11.0</button>
          <button type="button" class="size-btn">US 11.5</button>
          <button type="button" class="size-btn">US 12.0</button>
          <button type="button" class="size-btn">US 13.0</button>
        </div>
      </div>

      <!-- Action Buttons -->
      <div style="display: flex; flex-direction: column; gap: 14px; margin-bottom: 28px;">
        <button type="button" class="btn-primary" style="width: 100%; padding: 18px; font-size: 1.05rem;" onclick="addCurrentProductToBag()">
          ADD TO BAG — $149.00 →
        </button>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
          <button type="button" class="btn-secondary btn-wishlist" style="padding: 12px;">
            ♡ SAVE TO WISHLIST
          </button>
          <a href="checkout.php" class="btn-orange" style="padding: 12px; font-size: 0.85rem; text-align: center;">
            INSTANT CHECKOUT
          </a>
        </div>
      </div>

      <!-- Guarantees & Reassurance -->
      <div style="border-top: 1px solid var(--border-dark); padding-top: 20px; font-size: 0.82rem; color: var(--text-secondary); line-height: 1.8;">
        <div>✓ <strong>Free Express Tracked Dispatch</strong> over $100</div>
        <div>✓ <strong>50KM Trial Run Guarantee:</strong> Run outdoors, return if not faster</div>
        <div>✓ <strong>Lifetime Carbon Plate Integrity:</strong> Guaranteed zero delamination</div>
      </div>

    </div>

  </div>

  <!-- Performance Telemetry Benchmark Module -->
  <section class="pdp-matrix-section">
    <div style="text-align: center; max-width: 720px; margin: 0 auto 40px;">
      <span class="badge-blue mono-tag">BIOMECHANICAL COMPARISON MATRIX</span>
      <h2 style="font-size: clamp(1.8rem, 4vw, 2.4rem); color: #ffffff; text-transform: uppercase; margin-top: 8px;">
        ENGINEERED BY DATA: X-RACE 01 VS STANDARD RACE FOAM
      </h2>
    </div>

    <div class="pdp-comparison-matrix">
      <div style="background: var(--bg-navy-surface); border: 1px solid var(--border-dark); border-radius: var(--radius-sm); padding: 24px; text-align: center;">
        <div class="mono-tag" style="color: var(--text-muted); margin-bottom: 6px;">ENERGY DEFLECTION</div>
        <div style="font-family: var(--font-headline); font-size: 2.2rem; font-weight: 800; color: var(--volt-green);">89.4%</div>
        <div style="font-size: 0.78rem; color: var(--text-secondary); margin-top: 4px;">vs 64.0% Standard EVA</div>
      </div>

      <div style="background: var(--bg-navy-surface); border: 1px solid var(--border-dark); border-radius: var(--radius-sm); padding: 24px; text-align: center;">
        <div class="mono-tag" style="color: var(--text-muted); margin-bottom: 6px;">CALF FATIGUE REDUCTION</div>
        <div style="font-family: var(--font-headline); font-size: 2.2rem; font-weight: 800; color: var(--electric-blue);">-18%</div>
        <div style="font-size: 0.78rem; color: var(--text-secondary); margin-top: 4px;">Over 42.2KM Marathon</div>
      </div>

      <div style="background: var(--bg-navy-surface); border: 1px solid var(--border-dark); border-radius: var(--radius-sm); padding: 24px; text-align: center;">
        <div class="mono-tag" style="color: var(--text-muted); margin-bottom: 6px;">GROUND CONTACT TIME</div>
        <div style="font-family: var(--font-headline); font-size: 2.2rem; font-weight: 800; color: var(--energy-orange);">172ms</div>
        <div style="font-size: 0.78rem; color: var(--text-secondary); margin-top: 4px;">vs 214ms Standard Trainer</div>
      </div>

      <div style="background: var(--bg-navy-surface); border: 1px solid var(--border-dark); border-radius: var(--radius-sm); padding: 24px; text-align: center;">
        <div class="mono-tag" style="color: var(--text-muted); margin-bottom: 6px;">AERODYNAMIC DRAG (CDA)</div>
        <div style="font-family: var(--font-headline); font-size: 2.2rem; font-weight: 800; color: #ffffff;">0.018</div>
        <div style="font-size: 0.78rem; color: var(--text-secondary); margin-top: 4px;">Wind-Tunnel Verified</div>
      </div>
    </div>
  </section>

</main>

<script>
function switchViewModel(mode, btn) {
  document.querySelectorAll('.pdp-media-col .action-btn').forEach(b => {
    b.classList.remove('active');
    b.style.background = 'transparent';
    b.style.borderColor = 'var(--border-dark)';
    b.style.color = 'var(--text-secondary)';
  });
  if (btn) {
    btn.classList.add('active');
    btn.style.background = 'var(--electric-blue)';
    btn.style.borderColor = 'var(--electric-blue)';
    btn.style.color = '#ffffff';
  }

  const img = document.getElementById('pdpMainPhoto');
  if (!img) return;

  if (mode === 'exploded') {
    VOLTERRA_CART.showToast('CAD VIEW: EXPLODED MATERIAL ARCHITECTURE');
    img.src = 'assets/images/tech-flexcore.jpg';
    img.style.filter = 'contrast(1.1) drop-shadow(0 0 25px rgba(22, 135, 255, 0.6))';
  } else if (mode === 'zoom') {
    VOLTERRA_CART.showToast('CAD VIEW: SUPERCRITICAL FOAM MACRO INSPECTION');
    img.src = 'assets/images/tech-aerofoam.jpg';
    img.style.filter = 'drop-shadow(0 0 35px rgba(255, 107, 44, 0.5))';
  } else {
    VOLTERRA_CART.showToast('CAD VIEW: X-RACE 01 ISOMETRIC PROFILE');
    img.src = 'assets/images/x-race-01.jpg';
    img.style.filter = 'drop-shadow(0 20px 40px rgba(0,0,0,0.8))';
  }
}

function setAngleView(src, el) {
  document.querySelectorAll('.pdp-angle-item').forEach(i => i.classList.remove('active'));
  if (el) el.classList.add('active');
  const img = document.getElementById('pdpMainPhoto');
  if (img) {
    img.src = src;
    img.style.filter = 'drop-shadow(0 20px 40px rgba(0,0,0,0.8))';
  }
}

function addCurrentProductToBag() {
  const chosenColor = document.querySelector('.colorway-chip.active')?.dataset.colorName || 'Electric Obsidian / Volt Blue';
  const chosenHex = document.querySelector('.colorway-chip.active')?.dataset.colorHex || '#1687ff';
  const chosenSize = document.querySelector('.size-btn.active')?.textContent.trim() || 'US 9.0';

  const product = {
    id: 'x-race-01',
    title: 'VOLTERRA X-RACE 01',
    subtitle: 'Supercritical Nitrogen-Infused Propulsion Chassis',
    price: 149.00,
    colors: [{ name: chosenColor, hex: chosenHex }]
  };

  VOLTERRA_CART.addItem(product, chosenColor, chosenSize);
}
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
