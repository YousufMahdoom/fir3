<?php
// index.php - VOLTERRA CONCEPT 02 Flagship Storefront: "BUILT TO OUTRUN."
$pageTitle = 'VOLTERRA // Built To Outrun — Flagship Storefront Concept 02';
$activeNav = 'home';
include __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     1. HERO SECTION (Deep Navy / Midnight Atmosphere)
     ========================================================================== -->
<section class="hero-flagship">
  <div class="hero-laser-grid"></div>

  <div class="hero-main-content">
    <div class="hero-typography-block">
      <div class="hero-badge-row">
        <span class="badge-orange">NEW RELEASE // LAB EXP-01</span>
        <span class="mono-tag" style="color: var(--text-secondary);">WIND-TUNNEL VERIFIED</span>
      </div>

      <h1 class="hero-headline">
        BUILT TO<br>
        <span>OUTRUN.</span>
      </h1>

      <p class="hero-tagline">
        Performance footwear engineered for speed, stability, and relentless movement. Tuned for sub-2 hour marathons and explosive track speed.
      </p>

      <div class="hero-cta-group">
        <a href="shop.php" class="btn-primary" id="btnShopPerformance">
          SHOP PERFORMANCE →
        </a>
        <a href="product.php" class="btn-secondary" id="btnExploreCollection">
          EXPLORE X-RACE 01
        </a>
      </div>
    </div>

    <!-- Visual Floating Chassis Stage -->
    <div class="hero-visual-showcase">
      <div class="hero-visual-chassis-stage">
        <div class="pedestal-ring"></div>
        <div class="pedestal-ring-inner"></div>
        <div class="hero-scanline-laser"></div>
        <div class="chassis-floor-reflection"></div>
        <div class="hero-chassis-img-wrap">
          <img src="assets/images/x-race-01.jpg" alt="VOLTERRA X-RACE 01 Carbon Marathon Super-Shoe" class="hero-chassis-img" loading="eager">
        </div>
      </div>
    </div>
  </div>

  <!-- Technical Telemetry HUD Bar -->
  <div class="hero-telemetry-hud-bar">
    <div class="hud-item">
      <div class="hud-index">01 / PROPULSION</div>
      <div class="hud-value">42% ENERGY RETURN</div>
      <div class="hud-sub">AeroFoam™ Dual Matrix</div>
    </div>
    <div class="hud-item">
      <div class="hud-index">02 / ULTRA-LIGHTWEIGHT</div>
      <div class="hud-value">218G CHASSIS</div>
      <div class="hud-sub">Monomesh Shell (US 9)</div>
    </div>
    <div class="hud-item">
      <div class="hud-index">03 / GEOMETRY</div>
      <div class="hud-value">8MM RACE DROP</div>
      <div class="hud-sub">Forward Center of Gravity</div>
    </div>
    <div class="hud-item">
      <div class="hud-index">STATUS / CERTIFICATION</div>
      <div class="hud-value" style="color: var(--volt-green);">LAB CERTIFIED 2026</div>
      <div class="hud-sub">World Athletics Compliant</div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     2. SHOP BY SPORT (Light Blue-Gray #EAF1F8 Rhythm)
     ========================================================================== -->
<section class="section-light-rhythm">
  <div class="section-container">
    
    <div class="section-header-wrap">
      <div>
        <div class="section-subhead-tag">// CHOOSE YOUR GAME</div>
        <h2 class="section-title-dark">ENGINEERED ACROSS FIVE DISCIPLINES</h2>
      </div>
      <a href="shop.php" class="btn-primary" style="background: var(--text-dark-primary);">VIEW ALL DISCIPLINES →</a>
    </div>

    <div class="sports-grid">
      <!-- Sport 1: Running -->
      <a href="shop.php?cat=marathon" class="sport-panel-card" style="background-image: url('assets/images/sport-running.jpg');">
        <div>
          <div class="sport-code">DISCIPLINE 01 // ROAD & TRACK</div>
          <div class="sport-icon-wrap">
            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          </div>
          <div class="sport-name">RUNNING</div>
          <div class="sport-desc">Sub-second responsiveness & carbon plate propulsion drive for marathon PBs.</div>
        </div>
        <div class="sport-link">EXPLORE RUNNING →</div>
      </a>

      <!-- Sport 2: Training -->
      <a href="shop.php?cat=tempo" class="sport-panel-card" style="background-image: url('assets/images/sport-training.jpg');">
        <div>
          <div class="sport-code">DISCIPLINE 02 // FORCE & TEMPO</div>
          <div class="sport-icon-wrap">
            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          </div>
          <div class="sport-name">TRAINING</div>
          <div class="sport-desc">Lateral stability and torsional support for high-impact multidirectional force.</div>
        </div>
        <div class="sport-link">EXPLORE TRAINING →</div>
      </a>

      <!-- Sport 3: Basketball -->
      <a href="shop.php" class="sport-panel-card" style="background-image: url('assets/images/sport-basketball.jpg');">
        <div>
          <div class="sport-code">DISCIPLINE 03 // VERTICAL POP</div>
          <div class="sport-icon-wrap">
            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M4.93 4.93l14.14 14.14M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10M2 12a15.3 15.3 0 0110-4 15.3 15.3 0 0110 4"/></svg>
          </div>
          <div class="sport-name">BASKETBALL</div>
          <div class="sport-desc">Cushioned impact recovery and explosive vertical takeoff rebound.</div>
        </div>
        <div class="sport-link">EXPLORE BASKETBALL →</div>
      </a>

      <!-- Sport 4: Football -->
      <a href="shop.php" class="sport-panel-card" style="background-image: url('assets/images/sport-football.jpg');">
        <div>
          <div class="sport-code">DISCIPLINE 04 // PRECISION PITCH</div>
          <div class="sport-icon-wrap">
            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6l3.5 2.5-1.5 4h-4l-1.5-4L12 6z"/></svg>
          </div>
          <div class="sport-name">FOOTBALL</div>
          <div class="sport-desc">Aerodynamic traction studs and micro-textured upper for precision ball feel.</div>
        </div>
        <div class="sport-link">EXPLORE FOOTBALL →</div>
      </a>

      <!-- Sport 5: Lifestyle -->
      <a href="shop.php" class="sport-panel-card" style="background-image: url('assets/images/sport-lifestyle.jpg');">
        <div>
          <div class="sport-code">DISCIPLINE 05 // URBAN HYPER-TECH</div>
          <div class="sport-icon-wrap">
            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
          </div>
          <div class="sport-name">LIFESTYLE</div>
          <div class="sport-desc">Hyper-tech aesthetics engineered for all-day pace and effortless movement.</div>
        </div>
        <div class="sport-link">EXPLORE LIFESTYLE →</div>
      </a>
    </div>

  </div>
</section>

<!-- ==========================================================================
     3. FEATURED DROP: "THE NEW DROP" (Deep Navy Showcase)
     ========================================================================== -->
<section class="section-deep-navy">
  <div class="section-container">
    
    <div class="featured-drop-grid">
      <!-- Product Stage Viewport -->
      <div class="drop-visual-stage">
        <div class="badge-orange mono-tag" style="position: absolute; top: 20px; left: 20px; z-index: 5;">
          LAB SPOTLIGHT // C-02 PROTOTYPE
        </div>
        
        <div class="drop-img-container">
          <img src="assets/images/x-race-01.jpg" alt="VOLTERRA X-RACE 01 Prototype Chassis" class="drop-chassis-img" loading="lazy">
        </div>
        <div class="drop-floor-reflection"></div>

        <div class="drop-telemetry-strip">
          <div><span style="color: var(--electric-blue);">CHASSIS:</span> EXP-01 CARBON</div>
          <div class="drop-meta-pill"><span>●</span> 218G FEATHERWEIGHT</div>
          <div><span style="color: var(--electric-blue);">OUTSOLE:</span> GRIP-X LUGS</div>
        </div>
      </div>

      <!-- Purchasing Matrix & Details -->
      <div class="drop-info-col">
        <div class="badge-orange mono-tag">NEW RELEASE // LAB EXP-01</div>
        <h2>VOLTERRA X-RACE 01</h2>
        
        <div class="drop-price-row">
          <div class="drop-price">$149</div>
          <div class="drop-ship-tag">✓ FREE EXPRESS TRACKED DISPATCH</div>
        </div>

        <p class="drop-description">
          Dual-density AeroFoam midsole paired with a curved carbon-fiber composite speed plate. Engineered exclusively for personal bests and sub-2 hour marathon pacing.
        </p>

        <!-- Colorway Selector -->
        <div class="colorway-selector-block">
          <div class="selector-label-row">
            <span>COLORWAY:</span>
            <span class="selected-color-val" style="color: #ffffff; font-weight: 700;">Electric Obsidian / Volt Blue</span>
          </div>
          <div class="colorway-chips">
            <div class="colorway-chip active" data-color-name="Electric Obsidian / Volt Blue" data-color-hex="#1687ff">Electric Obsidian</div>
            <div class="colorway-chip" data-color-name="Solar Flare Orange" data-color-hex="#ff6b2c">Solar Orange</div>
            <div class="colorway-chip" data-color-name="White Nimbus / Ice Blue" data-color-hex="#c5e0ff">White Nimbus</div>
          </div>
        </div>

        <!-- Size Matrix -->
        <div class="size-selector-block">
          <div class="selector-label-row">
            <span>SELECT ATHLETE SIZE (US):</span>
            <span class="selected-size-val" style="color: var(--electric-blue); font-weight: 700;">US 9.0</span>
          </div>
          <div class="size-matrix-grid">
            <button type="button" class="size-btn">US 7.0</button>
            <button type="button" class="size-btn">US 8.0</button>
            <button type="button" class="size-btn active">US 9.0</button>
            <button type="button" class="size-btn">US 10.0</button>
            <button type="button" class="size-btn">US 11.0</button>
            <button type="button" class="size-btn">US 12.0</button>
          </div>
        </div>

        <!-- CTAs -->
        <div class="drop-actions-row">
          <button type="button" class="btn-primary" style="flex: 1;" onclick="quickAddProduct('x-race-01', 'US M 9.0')">
            ADD TO BAG — $149 →
          </button>
          <button type="button" class="btn-secondary btn-wishlist" style="padding: 14px 20px;">
            ♡ WISHLIST
          </button>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ==========================================================================
     4. PERFORMANCE DATA SECTION: "ENGINEERED BY DATA"
     ========================================================================== -->
<section class="section-midnight-data">
  <div class="section-container">
    
    <div style="text-align: center; max-width: 780px; margin: 0 auto;">
      <div class="mono-tag" style="color: var(--electric-blue); margin-bottom: 8px;">// SPORTS SCIENCE LAB VALIDATION</div>
      <h2 class="section-title-white">ENGINEERED BY DATA.</h2>
      <p style="color: var(--text-secondary); margin-top: 10px; font-size: 1.05rem;">
        Differentiating from standard athletic fashion with empirical biometric measurements and high-velocity wind-tunnel metrics.
      </p>
    </div>

    <div class="data-stats-grid">
      <div class="data-card">
        <div class="mono-tag" style="color: var(--electric-blue); margin-bottom: 6px;">01 // PROPULSION</div>
        <div class="data-metric-big">42% <span>+</span></div>
        <div class="data-metric-label">ENERGY RETURN</div>
        <div class="data-metric-detail">Supercritical AeroFoam dual density matrix rebounds kinetic force on toe-off.</div>
        <div class="data-graph-snippet">
          <svg viewBox="0 0 200 40" fill="none" width="100%" height="100%"><path d="M0 35 Q 50 30, 90 15 T 190 5" stroke="#1687ff" stroke-width="2.5" fill="none"/><circle cx="190" cy="5" r="3.5" fill="#1687ff"/></svg>
        </div>
      </div>

      <div class="data-card">
        <div class="mono-tag" style="color: var(--energy-orange); margin-bottom: 6px;">02 // CHASSIS MASS</div>
        <div class="data-metric-big">218G</div>
        <div class="data-metric-label">TOTAL WEIGHT</div>
        <div class="data-metric-detail">Ultralight woven monomesh eliminates grams while ensuring midfoot lockdown.</div>
        <div class="data-graph-snippet">
          <svg viewBox="0 0 200 40" fill="none" width="100%" height="100%"><path d="M0 10 L 60 12 L 120 18 L 190 35" stroke="#ff6b2c" stroke-width="2.5" fill="none"/><circle cx="190" cy="35" r="3.5" fill="#ff6b2c"/></svg>
        </div>
      </div>

      <div class="data-card">
        <div class="mono-tag" style="color: var(--volt-green); margin-bottom: 6px;">03 // RACING BIOMECHANICS</div>
        <div class="data-metric-big">8MM</div>
        <div class="data-metric-label">RACE OFFSET DROP</div>
        <div class="data-metric-detail">Optimized forward center of gravity reduces soleus eccentric strain by 21.4%.</div>
        <div class="data-graph-snippet">
          <svg viewBox="0 0 200 40" fill="none" width="100%" height="100%"><path d="M0 25 C 60 25, 100 8, 190 8" stroke="#00e599" stroke-width="2.5" fill="none"/><circle cx="190" cy="8" r="3.5" fill="#00e599"/></svg>
        </div>
      </div>

      <div class="data-card">
        <div class="mono-tag" style="color: var(--electric-blue); margin-bottom: 6px;">04 // ENDURANCE VALIDATION</div>
        <div class="data-metric-big">100%</div>
        <div class="data-metric-label">ATHLETE VALIDATED</div>
        <div class="data-metric-detail">Tested across 14,000+ Kilometers on European marathon asphalt and tracks.</div>
        <div class="data-graph-snippet">
          <svg viewBox="0 0 200 40" fill="none" width="100%" height="100%"><path d="M0 38 L 40 28 L 80 32 L 120 16 L 160 20 L 190 4" stroke="#1687ff" stroke-width="2.5" fill="none"/><circle cx="190" cy="4" r="3.5" fill="#1687ff"/></svg>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ==========================================================================
     5. TOP PERFORMERS CAROUSEL (Light Blue-Gray Section Rhythm)
     ========================================================================== -->
<section class="section-light-rhythm">
  <div class="section-container">
    
    <div class="section-header-wrap">
      <div>
        <div class="section-subhead-tag">// ELITE CHASSIS SELECTION</div>
        <h2 class="section-title-dark">TOP PERFORMERS</h2>
      </div>

      <div style="display: flex; gap: 8px;">
        <a href="shop.php" class="action-btn" style="color: var(--text-dark-primary); border-color: var(--border-light);">VIEW ALL (16)</a>
      </div>
    </div>

    <div class="product-cards-grid">
      <?php
      // Four featured performers
      $topShoes = [
        ['id' => 'x-race-01', 'name' => 'VOLTERRA X-RACE 01', 'sub' => 'Carbon Marathon Super-Shoe', 'price' => 149, 'badge' => 'NEW RELEASE', 'badgeType' => 'orange', 'rating' => '★ 4.9 (128)', 'hex' => '#1687ff', 'img' => 'assets/images/x-race-01.jpg'],
        ['id' => 'apex-nitro-speed', 'name' => 'APEX NITRO SPEED', 'sub' => 'Tempo & Threshold Racer', 'price' => 175, 'badge' => 'LIMITED DROP', 'badgeType' => 'orange', 'rating' => '★ 4.9 (94)', 'hex' => '#00e599', 'img' => 'assets/images/apex-nitro.jpg'],
        ['id' => 'stride-aero-02', 'name' => 'STRIDE AERO 02', 'sub' => 'Daily Max Propulsion Trainer', 'price' => 130, 'badge' => 'BESTSELLER', 'badgeType' => 'blue', 'rating' => '★ 4.8 (210)', 'hex' => '#1687ff', 'img' => 'assets/images/stride-aero.jpg'],
        ['id' => 'velocity-carbon-matrix', 'name' => 'VELOCITY CARBON', 'sub' => 'Short Track & 5K Weapon', 'price' => 195, 'badge' => 'SALE -11%', 'badgeType' => 'orange', 'rating' => '★ 4.9 (62)', 'hex' => '#00f0ff', 'img' => 'assets/images/velocity-carbon.jpg'],
      ];

      foreach ($topShoes as $shoe):
      ?>
      <div class="product-card">
        <div class="product-media-wrap">
          <span class="badge-<?php echo $shoe['badgeType']; ?> product-badge-float"><?php echo $shoe['badge']; ?></span>
          <button type="button" class="wishlist-float-btn" aria-label="Add to wishlist">♡</button>
          
          <div class="card-shoe-media">
            <img src="<?php echo $shoe['img']; ?>" alt="<?php echo $shoe['name']; ?>" class="product-card-photo" loading="lazy">
          </div>
        </div>

        <div class="product-info-wrap">
          <div class="product-meta-row">
            <span class="mono-tag" style="color: var(--text-dark-secondary);">LAB SPEC</span>
            <span class="product-rating"><?php echo $shoe['rating']; ?></span>
          </div>

          <h3 class="product-title"><?php echo $shoe['name']; ?></h3>
          <div class="product-category-sub"><?php echo $shoe['sub']; ?></div>

          <div class="product-specs-chip-bar">
            <span>⚡ 89% RETURN</span>
            <span>•</span>
            <span>218G MASS</span>
            <span>•</span>
            <span>CARBON 3K</span>
          </div>

          <div class="product-price-action-row">
            <div class="card-price">$<?php echo $shoe['price']; ?></div>
            <button type="button" class="card-quick-add-btn" onclick="quickAddProduct('<?php echo $shoe['id']; ?>', 'US M 9.0')">
              + QUICK ADD
            </button>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- ==========================================================================
     6. EDITORIAL CAMPAIGN BANNER: "FIND YOUR SPEED"
     ========================================================================== -->
<section style="background: linear-gradient(180deg, rgba(3, 10, 23, 0.78) 0%, rgba(7, 20, 38, 0.85) 100%), url('assets/images/campaign-speed.jpg') center/cover no-repeat; padding: 120px 32px; position: relative; overflow: hidden; border-top: 1px solid var(--border-dark); border-bottom: 1px solid var(--border-dark);">
  <div class="hero-laser-grid" style="opacity: 0.3;"></div>
  
  <div class="section-container" style="position: relative; z-index: 10; max-width: 900px; margin: 0 auto; text-align: center;">
    <span class="badge-orange mono-tag" style="margin-bottom: 16px;">CAMPAIGN 02 // OUTRUN THE CLOCK</span>
    <h2 style="font-size: clamp(2.8rem, 6vw, 5rem); font-weight: 900; color: #ffffff; text-transform: uppercase; line-height: 1; margin-bottom: 24px;">
      FIND YOUR SPEED.
    </h2>
    <p style="font-size: 1.25rem; color: var(--text-secondary); line-height: 1.6; margin-bottom: 36px;">
      From your first kilometer to your next marathon personal best. The asphalt does not care about excuses. Engineered with supercritical nitrogen foam and curved carbon-plate forward propulsion.
    </p>
    <a href="shop.php?cat=marathon" class="btn-orange" style="font-size: 1rem; padding: 16px 36px;">
      SHOP RUNNING COLLECTION →
    </a>
  </div>
</section>

<!-- ==========================================================================
     7. TECHNOLOGY SECTION: "WHAT'S INSIDE MATTERS"
     ========================================================================== -->
<section style="background: #ffffff; color: var(--text-dark-primary); padding: 100px 32px;">
  <div class="section-container">
    
    <div style="text-align: center; max-width: 760px; margin: 0 auto 60px;">
      <div class="mono-tag" style="color: var(--electric-blue); margin-bottom: 8px;">// PROPRIETARY INNOVATIONS</div>
      <h2 class="section-title-dark">WHAT'S INSIDE MATTERS</h2>
      <p style="color: var(--text-dark-secondary); margin-top: 12px; font-size: 1.05rem;">
        Every millimeter of a VOLTERRA chassis is calibrated in the High Velocity Speed Lab.
      </p>
    </div>

    <div class="tech-cards-grid">
      
      <!-- Tech 1 -->
      <div style="background: #f4f8fc; border-radius: var(--radius-md); padding: 32px 28px; border: 1px solid var(--border-light); display: flex; flex-direction: column;">
        <div class="tech-card-visual">
          <img src="assets/images/tech-aerofoam.jpg" alt="AeroFoam Supercritical Nitrogen Cushioning" class="tech-card-img" loading="lazy">
          <span class="badge-blue tech-card-metric-badge">89.4% RETURN</span>
        </div>
        <div class="mono-tag" style="color: var(--electric-blue); margin-bottom: 8px;">01 / SUPERCRITICAL FOAM</div>
        <h3 style="font-size: 1.45rem; font-weight: 800; color: var(--text-dark-primary); margin-bottom: 12px;">AEROFOAM™ NITROGEN</h3>
        <p style="color: var(--text-dark-secondary); font-size: 0.92rem; line-height: 1.65;">
          Ultra-responsive nitrogen-infused supercritical foam cushioning engineered for explosive rebound, joint preservation, and 89.4% kinetic energy deflection.
        </p>
      </div>

      <!-- Tech 2 -->
      <div style="background: #f4f8fc; border-radius: var(--radius-md); padding: 32px 28px; border: 1px solid var(--border-light); display: flex; flex-direction: column;">
        <div class="tech-card-visual">
          <img src="assets/images/tech-flexcore.jpg" alt="FlexCore Spoon Plate Carbon Fiber Weave" class="tech-card-img" loading="lazy">
          <span class="badge-orange tech-card-metric-badge">3K CURVED WEAVE</span>
        </div>
        <div class="mono-tag" style="color: var(--energy-orange); margin-bottom: 8px;">02 / CARBON ARCH WEAVE</div>
        <h3 style="font-size: 1.45rem; font-weight: 800; color: var(--text-dark-primary); margin-bottom: 12px;">FLEXCORE™ SPOON PLATE</h3>
        <p style="color: var(--text-dark-secondary); font-size: 0.92rem; line-height: 1.65;">
          Adaptive curved 3K carbon-weave arch spoon that stabilizes upon impact and springs forward with high mechanical efficiency during toe-off.
        </p>
      </div>

      <!-- Tech 3 -->
      <div style="background: #f4f8fc; border-radius: var(--radius-md); padding: 32px 28px; border: 1px solid var(--border-light); display: flex; flex-direction: column;">
        <div class="tech-card-visual">
          <img src="assets/images/tech-gripx.jpg" alt="Vibram Grip-X Outsole Lugs" class="tech-card-img" loading="lazy">
          <span class="badge-volt tech-card-metric-badge">WET-TRACTION 5MM</span>
        </div>
        <div class="mono-tag" style="color: var(--volt-green); margin-bottom: 8px;">03 / TRACTION COMPOUND</div>
        <h3 style="font-size: 1.45rem; font-weight: 800; color: var(--text-dark-primary); margin-bottom: 12px;">VIBRAM® GRIP-X LUGS</h3>
        <p style="color: var(--text-dark-secondary); font-size: 0.92rem; line-height: 1.65;">
          Lugged micro-compound rubber engineered for high-traction wet asphalt and indoor track transitions with zero slippage in sub-zero rain.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- ==========================================================================
     8. ATHLETE STORIES: "MADE FOR MOVEMENT"
     ========================================================================== -->
<section class="section-deep-navy">
  <div class="section-container">
    
    <div class="section-header-wrap">
      <div>
        <div class="section-subhead-tag">// VERIFIED PERFORMANCE STORIES</div>
        <h2 class="section-title-white">MADE FOR MOVEMENT</h2>
      </div>
      <a href="locker.php" class="btn-primary">EXPLORE ATHLETE TELEMETRY →</a>
    </div>

    <div class="athlete-stories-grid">
      
      <!-- Story 1 -->
      <div class="athlete-story-card">
        <div class="story-athlete-photo-wrap">
          <img src="assets/images/athlete-elena.jpg" alt="Elena Vance - Marathon Competitor" class="story-athlete-photo" loading="lazy">
          <span class="badge-volt story-badge-float">BERLIN HALF // 21.1 KM</span>
        </div>
        <div class="story-content-wrap">
          <div class="mono-tag" style="color: var(--volt-green); margin-bottom: 8px;">STORY 01 // SUB-2:15 MARATHON</div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 12px;">RUN FASTER // ELENA VANCE</h3>
          <p style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.6; margin-bottom: 18px;">
            "Testing the VOLTERRA X-RACE 01 during my 35km Berlin tempo sessions unlocked a 4-second pace increase per kilometer with zero calf pack-out."
          </p>
          <div style="font-family: var(--font-mono); font-size: 0.72rem; color: var(--electric-blue);">
            PACE: 3:41 /KM // HR AVG: 168 BPM
          </div>
        </div>
      </div>

      <!-- Story 2 -->
      <div class="athlete-story-card">
        <div class="story-athlete-photo-wrap">
          <img src="assets/images/athlete-marcus.jpg" alt="Marcus Chen - Track Specialist" class="story-athlete-photo" loading="lazy">
          <span class="badge-orange story-badge-float">TRACK PROTOCOL // 5X 1000M</span>
        </div>
        <div class="story-content-wrap">
          <div class="mono-tag" style="color: var(--energy-orange); margin-bottom: 8px;">STORY 02 // THRESHOLD PROTOCOL</div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 12px;">TRAIN HARDER // MARCUS CHEN</h3>
          <p style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.6; margin-bottom: 18px;">
            "The torsional stability in the Nitro-Speed allows for explosive track intervals without sacrificing late-mile forefoot impact cushioning."
          </p>
          <div style="font-family: var(--font-mono); font-size: 0.72rem; color: var(--electric-blue);">
            5 X 1000M INTERVALS // 198G NITRO CHASSIS
          </div>
        </div>
      </div>

      <!-- Story 3 -->
      <div class="athlete-story-card">
        <div class="story-athlete-photo-wrap">
          <img src="assets/images/athlete-sara.jpg" alt="Sara Lindqvist - Biomechanics Athlete" class="story-athlete-photo" loading="lazy">
          <span class="badge-blue story-badge-float">FLEET HEALTH // 98%</span>
        </div>
        <div class="story-content-wrap">
          <div class="mono-tag" style="color: var(--electric-blue); margin-bottom: 8px;">STORY 03 // RECOVERY & BIOMECHANICS</div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 12px;">PLAY LONGER // SARA LINDQVIST</h3>
          <p style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.6; margin-bottom: 18px;">
            "Rotational fleet management in the companion app ensures my soleus muscle load remains balanced across 120km training weeks."
          </p>
          <div style="font-family: var(--font-mono); font-size: 0.72rem; color: var(--electric-blue);">
            BLE POD PODS PAIRED // BALANCED LOAD
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
