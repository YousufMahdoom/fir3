<?php
// technology.php - VOLTERRA CONCEPT 02 Proprietary Innovations & Biomechanics
$pageTitle = 'VOLTERRA // High Velocity Innovations & Sports Science';
$activeNav = 'technology';
include __DIR__ . '/includes/header.php';
?>

<main class="tech-page-container">

  <!-- Hero Header -->
  <div style="text-align: center; max-width: 820px; margin: 0 auto 48px;">
    <span class="badge-blue mono-tag">FRANKFURT SPEED LAB // INNOVATIONS</span>
    <h1 style="font-size: clamp(2.4rem, 5vw, 4.2rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin: 12px 0 16px; line-height: 1.05;">
      THE ARCHITECTURE OF VELOCITY
    </h1>
    <p style="color: var(--text-secondary); font-size: clamp(0.95rem, 2vw, 1.15rem); line-height: 1.6;">
      Every gram, millimeter, and cellular pocket of our supercritical foam is calibrated through computational fluid dynamics and multi-axis biomechanical telemetry.
    </p>
  </div>

  <!-- Tech 01: AeroFoam Nitrogen -->
  <section id="aerofoam" class="tech-feature-card">
    <div class="tech-feature-content">
      <span class="badge-blue mono-tag">INNOVATION 01 // SUPERCRITICAL MATRIX</span>
      <h2 style="font-size: clamp(1.8rem, 3.5vw, 2.6rem); color: #ffffff; text-transform: uppercase; margin: 12px 0 16px;">
        AEROFOAM™ NITROGEN
      </h2>
      <p style="color: var(--text-secondary); font-size: 1.02rem; line-height: 1.7; margin-bottom: 24px;">
        Unlike standard EVA or expanded TPU beads, AeroFoam™ utilizes a proprietary supercritical nitrogen foaming autoclave. This locks in closed-cell micro-gas pockets with a density of just 0.12 g/cm³, producing an exceptional 89.4% kinetic energy deflection upon toe-off.
      </p>

      <div class="tech-submetrics-grid">
        <div style="background: var(--bg-midnight-dark); padding: 16px; border-radius: var(--radius-sm);">
          <div style="color: var(--volt-green); font-size: 1.4rem; font-weight: 800;">89.4%</div>
          <div style="color: var(--text-muted); margin-top: 2px;">ENERGY RETURN RATE</div>
        </div>
        <div style="background: var(--bg-midnight-dark); padding: 16px; border-radius: var(--radius-sm);">
          <div style="color: var(--electric-blue); font-size: 1.4rem; font-weight: 800;">0.12 g/cm³</div>
          <div style="color: var(--text-muted); margin-top: 2px;">FOAM DENSITY INDEX</div>
        </div>
      </div>
    </div>

    <div class="tech-feature-media" style="background: radial-gradient(circle at center, #102d57 0%, #061324 80%); border-radius: var(--radius-md); text-align: center; border: 1px solid var(--border-dark);">
      <script>
        document.write(getShoeSvg('#1687ff', '#ff6b2c'));
      </script>
      <div style="font-family: var(--font-mono); font-size: 0.72rem; color: var(--electric-blue); margin-top: 14px;">
        // DUAL-DENSITY NITROGEN MATRICES WITH INTEGRATED SHOCK DAMPENING
      </div>
    </div>
  </section>

  <!-- Tech 02: FlexCore Carbon Plate -->
  <section id="flexcore" class="tech-feature-card reversed">
    <div class="tech-feature-media" style="background: radial-gradient(circle at center, #1e1b19 0%, #080d16 80%); border-radius: var(--radius-md); text-align: center; border: 1px solid var(--border-dark);">
      <svg viewBox="0 0 400 160" width="100%" height="auto">
        <path d="M 40 120 C 120 120 180 140 240 100 C 300 60 360 40 380 40" stroke="#ff6b2c" stroke-width="6" fill="none" stroke-linecap="round"/>
        <path d="M 40 120 C 120 120 180 140 240 100 C 300 60 360 40 380 40" stroke="#ffffff" stroke-width="2" stroke-dasharray="6 4" fill="none" opacity="0.6"/>
        <text x="50" y="145" fill="#ff6b2c" font-family="'JetBrains Mono'" font-size="10">REAR ARCH PIVOT</text>
        <text x="240" y="30" fill="#00e599" font-family="'JetBrains Mono'" font-size="10">KINETIC FULCRUM LEVER</text>
      </svg>
      <div style="font-family: var(--font-mono); font-size: 0.72rem; color: var(--energy-orange); margin-top: 14px;">
        // ASYMMETRICAL SPOON GEOMETRY FOR TOE-OFF LEVERAGE
      </div>
    </div>

    <div class="tech-feature-content">
      <span class="badge-orange mono-tag">INNOVATION 02 // 3K SPOON GEOMETRY</span>
      <h2 style="font-size: clamp(1.8rem, 3.5vw, 2.6rem); color: #ffffff; text-transform: uppercase; margin: 12px 0 16px;">
        FLEXCORE™ SPOON PLATE
      </h2>
      <p style="color: var(--text-secondary); font-size: 1.02rem; line-height: 1.7; margin-bottom: 24px;">
        Engineered with aerospace-grade 3K woven carbon fiber, the curved spoon plate features an asymmetrical medial scoop that guides the foot into a natural propulsive fulcrum. This reduces calf fatigue by 21.4% during prolonged marathon pacing.
      </p>

      <div class="tech-submetrics-grid">
        <div style="background: var(--bg-midnight-dark); padding: 16px; border-radius: var(--radius-sm);">
          <div style="color: var(--energy-orange); font-size: 1.4rem; font-weight: 800;">-21.4%</div>
          <div style="color: var(--text-muted); margin-top: 2px;">CALF STRAIN DAMPENING</div>
        </div>
        <div style="background: var(--bg-midnight-dark); padding: 16px; border-radius: var(--radius-sm);">
          <div style="color: #ffffff; font-size: 1.4rem; font-weight: 800;">LEVEL 4</div>
          <div style="color: var(--text-muted); margin-top: 2px;">TUNED CARBON STIFFNESS</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Tech 03: Vibram Grip-X Compound -->
  <section id="gripx" class="tech-feature-card">
    <div class="tech-feature-content">
      <span class="badge-volt mono-tag">INNOVATION 03 // TRACTION REVOLUTION</span>
      <h2 style="font-size: clamp(1.8rem, 3.5vw, 2.6rem); color: #ffffff; text-transform: uppercase; margin: 12px 0 16px;">
        VIBRAM® GRIP-X COMPOUND
      </h2>
      <p style="color: var(--text-secondary); font-size: 1.02rem; line-height: 1.7; margin-bottom: 24px;">
        Designed in partnership with Vibram®, the Grip-X compound incorporates 1.5mm micro-siped chevron lugs arranged in a computational heat-map pattern. Provides 38% superior wet asphalt traction compared to traditional blown rubber outsoles.
      </p>

      <div style="display: flex; gap: 10px; font-family: var(--font-mono); font-size: 0.8rem; flex-wrap: wrap;">
        <span class="badge-volt">WET TRACK TESTED</span>
        <span class="badge-blue">ZERO POWER DRIFT</span>
        <span class="badge-orange">1,000KM WEAR LIFECYCLE</span>
      </div>
    </div>

    <div class="tech-feature-media" style="background: #020813; border-radius: var(--radius-md); text-align: center; border: 1px solid var(--border-dark);">
      <svg viewBox="0 0 320 140" width="100%" height="auto">
        <pattern id="lugsPattern" width="20" height="20" patternUnits="userSpaceOnUse">
          <polygon points="10,2 18,10 10,18 2,10" fill="#00e599" opacity="0.4"/>
        </pattern>
        <rect width="320" height="140" fill="url(#lugsPattern)" rx="8" />
        <rect width="320" height="140" fill="none" stroke="#00e599" stroke-width="1.5" rx="8" />
        <text x="160" y="75" fill="#ffffff" font-family="'Sora'" font-weight="bold" font-size="14" text-anchor="middle">VIBRAM® GRIP-X MICRO-LUGS</text>
      </svg>
    </div>
  </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
