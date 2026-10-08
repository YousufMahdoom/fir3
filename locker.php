<?php
// locker.php - VOLTERRA Athlete Telemetry Companion App & Locker
$pageTitle = 'VOLTERRA // Athlete Companion App & Biomechanics Lab';
$activeNav = 'locker';
include __DIR__ . '/includes/header.php';
?>

<main class="locker-container">

  <!-- Athlete Context & Locker Header Bar -->
  <!-- Athlete Context & Locker Header Bar -->
  <div class="locker-header-bar">
    <div style="display: flex; align-items: center; gap: 18px;">
      <img src="assets/images/athlete-elena.jpg" alt="Elena Vance" style="width: 58px; height: 58px; border-radius: 50%; object-fit: cover; border: 2px solid var(--electric-blue); box-shadow: 0 0 15px rgba(22, 135, 255, 0.4);">
      <div>
        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 6px;">
          <span class="pulse-indicator"></span>
          <span class="mono-tag" style="color: var(--electric-blue);">
            ATHLETE: @ELENA.VANCE // MARATHON DIV A
          </span>
          <span class="badge-volt mono-tag">STRAVA PRO SYNCED</span>
        </div>
        <h1 style="font-size: 2.2rem; color: #ffffff; text-transform: uppercase;">
          ATHLETE TELEMETRY & FLEET LOCKER
        </h1>
      </div>
    </div>

    <!-- Navigation Tabs Navigation -->
    <div class="locker-tabs-nav">
      <button type="button" class="locker-tab-btn active" id="tabBtn_locker" onclick="switchLockerTab('locker')">
        FLEET LOCKER
      </button>
      <button type="button" class="locker-tab-btn" id="tabBtn_activerun" onclick="switchLockerTab('activerun')">
        ACTIVE RUN (100Hz)
      </button>
      <button type="button" class="locker-tab-btn" id="tabBtn_postrun" onclick="switchLockerTab('postrun')">
        POST-RUN ANALYSIS
      </button>
      <button type="button" class="locker-tab-btn" id="tabBtn_strava" onclick="switchLockerTab('strava')">
        STRAVA SYNC
      </button>
    </div>
  </div>

  <!-- ==========================================================================
       TAB 1: FLEET LOCKER (SCREEN 7)
       ========================================================================== -->
  <div id="tabContent_locker" class="locker-tab-content active">
    
    <!-- Fleet Summary & Rotation Matrix -->
    <div class="fleet-summary-bar">
      <div>
        <div class="mono-tag" style="color: var(--text-muted);">FLEET TRACKED MILEAGE</div>
        <div style="font-family: var(--font-headline); font-size: 1.6rem; font-weight: 800; color: #ffffff;">842.6 KM</div>
        <div style="font-size: 0.75rem; color: var(--text-secondary);">Across 3 Active Chassis</div>
      </div>

      <div>
        <div class="mono-tag" style="color: var(--volt-green);">ENERGY RETENTION</div>
        <div style="font-family: var(--font-headline); font-size: 1.6rem; font-weight: 800; color: var(--volt-green);">91.2% AVG</div>
        <div style="font-size: 0.75rem; color: var(--text-secondary);">Optimal Rebound Window</div>
      </div>

      <div>
        <div class="mono-tag" style="color: var(--electric-blue);">ROTATION ALLOCATION</div>
        <div style="font-family: var(--font-mono); font-size: 0.95rem; font-weight: 700; color: #ffffff;">
          R:25% • T:35% • REC:40%
        </div>
        <div style="font-size: 0.75rem; color: var(--text-secondary);">Balanced Soleus Load</div>
      </div>

      <div style="background: rgba(22, 135, 255, 0.08); border: 1px solid var(--border-dark-highlight); border-radius: var(--radius-sm); padding: 14px 18px;">
        <div class="mono-tag" style="color: var(--energy-orange); font-size: 0.7rem; margin-bottom: 2px;">SMART ROTATION ADVISORY</div>
        <div style="font-size: 0.85rem; color: #ffffff;">
          Next session: <strong>12KM Aerobic Recovery</strong>. Recommended: <strong>VOLTERRA STRATOS GLIDE</strong> to preserve carbon race chassis.
        </div>
      </div>
    </div>

    <!-- Active Rotation Footwear Cards -->

    <!-- Card 1: VOLTERRA X-RACE 01 (Primary Race Chassis) -->
    <div class="chassis-fleet-card">
      <div class="chassis-media-box">
        <img src="assets/images/x-race-01.jpg" alt="VOLTERRA X-RACE 01" style="width: 100%; max-height: 140px; object-fit: contain; border-radius: 4px;">
      </div>

      <div>
        <div style="display: flex; gap: 8px; margin-bottom: 8px;">
          <span class="badge-orange mono-tag">PRIMARY RACE CHASSIS</span>
          <span class="badge-blue mono-tag">SN: EXP-01-88429-GER</span>
        </div>

        <h3 style="font-size: 1.6rem; color: #ffffff; text-transform: uppercase;">
          VOLTERRA X-RACE 01 [C-02]
        </h3>
        <div style="color: var(--text-secondary); font-size: 0.9rem; margin-bottom: 16px;">
          Electric Obsidian / Volt Blue | Size: US M 9.0 D
        </div>

        <!-- 50KM Break-In Protocol Gauge -->
        <div class="break-in-progress-wrap">
          <div class="progress-header">
            <span>50KM TRIAL ACCREDITATION GAUGE</span>
            <strong style="color: var(--volt-green);">35.9 / 50.0 KM (71.8% CERTIFIED)</strong>
          </div>
          <div class="progress-track">
            <div class="progress-fill" style="width: 71.8%;"></div>
          </div>
          <div style="font-size: 0.75rem; color: var(--text-muted); margin-top: 6px;">
            14.1 KM remaining until permanent carbon calibration lock. 100% money-back guarantee active.
          </div>
        </div>

        <div style="display: flex; gap: 24px; font-family: var(--font-mono); font-size: 0.78rem; margin-top: 14px;">
          <div>REBOUND: <strong style="color: var(--volt-green);">90.6% PEAK</strong></div>
          <div>FOAM ELASTICITY: <strong style="color: #ffffff;">96%</strong></div>
          <div>TRACTION: <strong style="color: #ffffff;">94%</strong></div>
        </div>
      </div>

      <div style="display: flex; flex-direction: column; gap: 10px;">
        <button type="button" class="btn-primary" style="padding: 12px; font-size: 0.8rem;" onclick="openDeepDiveModal()">
          INSPECT BIO-TELEMETRY →
        </button>
        <button type="button" class="btn-secondary" style="padding: 10px; font-size: 0.78rem;" onclick="openCalibrationModal()">
          TARE SENSOR PODS (ZERO)
        </button>
        <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--text-muted); text-align: center; margin-top: 6px;">
          LAST: Berlin Half Simulation • 21.1 KM (3:41/km)
        </div>
      </div>
    </div>

    <!-- Card 2: NITRO-SPEED 03 (Tempo & Threshold) -->
    <div class="chassis-fleet-card">
      <div class="chassis-media-box">
        <img src="assets/images/apex-nitro.jpg" alt="VOLTERRA NITRO-SPEED 03" style="width: 100%; max-height: 140px; object-fit: contain; border-radius: 4px;">
      </div>

      <div>
        <div style="display: flex; gap: 8px; margin-bottom: 8px;">
          <span class="badge-blue mono-tag">TEMPO & INTERVAL PROTOCOL</span>
          <span class="mono-tag" style="color: var(--text-muted);">SN: NS3-77210-GER</span>
        </div>

        <h3 style="font-size: 1.6rem; color: #ffffff; text-transform: uppercase;">
          VOLTERRA NITRO-SPEED 03
        </h3>
        <div style="color: var(--text-secondary); font-size: 0.9rem; margin-bottom: 16px;">
          Cyber White / Hyper Lime | Size: US M 9.0 D
        </div>

        <div class="break-in-progress-wrap">
          <div class="progress-header">
            <span>CHASSIS LIFECYCLE TRACKER</span>
            <strong style="color: #ffffff;">318.4 / 600.0 KM (53%)</strong>
          </div>
          <div class="progress-track">
            <div class="progress-fill" style="width: 53%; background: var(--electric-blue);"></div>
          </div>
        </div>

        <div style="display: flex; gap: 24px; font-family: var(--font-mono); font-size: 0.78rem; margin-top: 14px;">
          <div>ENERGY RETURN: <strong style="color: #ffffff;">86.8%</strong></div>
          <div>FOAM RESILIENCE: <strong style="color: #ffffff;">78%</strong></div>
          <div>INTEGRATED POD: <strong style="color: var(--volt-green);">B-04 (85% BATT)</strong></div>
        </div>
      </div>

      <div style="display: flex; flex-direction: column; gap: 10px;">
        <button type="button" class="btn-secondary" style="padding: 12px; font-size: 0.8rem;" onclick="VOLTERRA_CART.showToast('CHASSIS SET AS TEMPO DEFAULT')">
          SET AS DEFAULT TEMPO
        </button>
        <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--text-muted); text-align: center; margin-top: 6px;">
          LAST: 5 x 1000m Track Reps • 8.5 KM
        </div>
      </div>
    </div>

    <!-- Card 3: STRATOS GLIDE (Recovery Chassis) -->
    <div class="chassis-fleet-card">
      <div class="chassis-media-box">
        <img src="assets/images/stride-aero.jpg" alt="VOLTERRA STRATOS GLIDE" style="width: 100%; max-height: 140px; object-fit: contain; border-radius: 4px;">
      </div>

      <div>
        <div style="display: flex; gap: 8px; margin-bottom: 8px;">
          <span class="badge-volt mono-tag">MAX CUSHION // RECOVERY</span>
          <span class="mono-tag" style="color: var(--text-muted);">SN: SG1-49931-GER</span>
        </div>

        <h3 style="font-size: 1.6rem; color: #ffffff; text-transform: uppercase;">
          VOLTERRA STRATOS GLIDE [C-01]
        </h3>
        <div style="color: var(--text-secondary); font-size: 0.9rem; margin-bottom: 16px;">
          Stealth Slate / Solar Orange | Size: US M 9.0 D
        </div>

        <div class="break-in-progress-wrap">
          <div class="progress-header">
            <span>CHASSIS LIFECYCLE TRACKER</span>
            <strong style="color: #ffffff;">488.3 / 750.0 KM (65%)</strong>
          </div>
          <div class="progress-track">
            <div class="progress-fill" style="width: 65%; background: var(--volt-green);"></div>
          </div>
        </div>

        <div style="display: flex; gap: 24px; font-family: var(--font-mono); font-size: 0.78rem; margin-top: 14px;">
          <div>IMPACT DAMPENING: <strong style="color: var(--volt-green);">-28.4% SHOCK</strong></div>
          <div>FOAM MATRIX: <strong style="color: #ffffff;">HIGH-DENSITY STABLE</strong></div>
          <div>BEACON: <strong style="color: #ffffff;">#02 PAIRED</strong></div>
        </div>
      </div>

      <div style="display: flex; flex-direction: column; gap: 10px;">
        <button type="button" class="btn-secondary" style="padding: 12px; font-size: 0.8rem;" onclick="VOLTERRA_CART.showToast('STRATOS GLIDE SELECTED FOR RECOVERY')">
          LOAD FOR RECOVERY RUN
        </button>
        <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--text-muted); text-align: center; margin-top: 6px;">
          LAST: Easy Tiergarten Shakeout • 10.0 KM
        </div>
      </div>
    </div>

  </div>

  <!-- ==========================================================================
       TAB 2: ACTIVE RUN LIVE TELEMETRY (SCREEN 13)
       ========================================================================== -->
  <div id="tabContent_activerun" class="locker-tab-content">
    
    <div class="live-run-cockpit">
      <div class="hero-laser-grid" style="opacity: 0.4;"></div>

      <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; margin-bottom: 24px; position: relative; z-index: 10;">
        <div style="display: flex; align-items: center; gap: 12px;">
          <span class="badge-orange mono-tag">
            <span class="pulse-indicator" style="background: var(--energy-orange);"></span>
            REC ● LIVE KINETIC STREAM (100Hz)
          </span>
          <span class="mono-tag" style="color: var(--electric-blue);">0.3M RTK GPS LOCK</span>
        </div>

        <div class="mono-tag" style="color: var(--volt-green);">
          MOUNTED: VOLTERRA X-RACE 01 [EXP-01-88429-GER] (98% BATT)
        </div>
      </div>

      <!-- Live Digital Pacing Display -->
      <div style="position: relative; z-index: 10;">
        <div class="mono-tag" style="color: var(--text-muted);">CURRENT KINETIC PACE</div>
        <div class="live-pace-display" id="livePaceVal">
          3:38 <span>/KM</span>
        </div>
        <div class="badge-volt mono-tag" style="font-size: 0.85rem;">
          PACE DELTA: -0:04 VS 3:42 TARGET // PACE GOAL EXCEEDED
        </div>
      </div>

      <!-- Live Telemetry Matrix -->
      <div class="live-metrics-quad" style="position: relative; z-index: 10;">
        <div class="live-metric-box">
          <div class="mono-tag" style="color: var(--text-muted);">DISTANCE</div>
          <div style="font-family: var(--font-headline); font-size: 2.2rem; font-weight: 800; color: #ffffff;">14.82 <span style="font-size: 1rem; color: var(--electric-blue);">KM</span></div>
          <div style="font-size: 0.72rem; color: var(--text-secondary);">Target: 21.10 KM Half</div>
        </div>

        <div class="live-metric-box">
          <div class="mono-tag" style="color: var(--text-muted);">ELAPSED DURATION</div>
          <div style="font-family: var(--font-mono); font-size: 2.2rem; font-weight: 800; color: #ffffff;" id="liveRunTimer">00:53:51</div>
          <div style="font-size: 0.72rem; color: var(--text-secondary);">Split #14 Active</div>
        </div>

        <div class="live-metric-box">
          <div class="mono-tag" style="color: var(--text-muted);">GROUND CONTACT (GCT)</div>
          <div style="font-family: var(--font-headline); font-size: 2.2rem; font-weight: 800; color: var(--volt-green);">164 <span style="font-size: 1rem;">MS</span></div>
          <div style="font-size: 0.72rem; color: var(--text-secondary);">Flight Efficiency: OPTIMAL</div>
        </div>

        <div class="live-metric-box">
          <div class="mono-tag" style="color: var(--text-muted);">HEART RATE (CADENCE)</div>
          <div style="font-family: var(--font-headline); font-size: 2.2rem; font-weight: 800; color: var(--energy-orange);">168 <span style="font-size: 1rem;">BPM</span></div>
          <div style="font-size: 0.72rem; color: var(--text-secondary);">186 SPM Cadence Lock</div>
        </div>
      </div>

      <!-- Interactive Tiergarten Loop Vector Trace Map -->
      <div style="position: relative; z-index: 10; background: var(--bg-navy-surface); border: 1px solid var(--border-dark); border-radius: var(--radius-md); padding: 24px; margin: 30px 0;">
        <div style="display: flex; justify-content: space-between; margin-bottom: 12px; font-family: var(--font-mono); font-size: 0.75rem;">
          <span style="color: var(--electric-blue);">GPS ROUTE: BERLIN TIERGARTEN LOOP / STRASSE DES 17. JUNI</span>
          <span style="color: var(--volt-green);">KM 14.8 / 21.1 KM</span>
        </div>
        <svg viewBox="0 0 600 80" width="100%" height="80">
          <path d="M 20 40 Q 150 10, 280 45 T 450 30 T 580 40" stroke="rgba(22, 135, 255, 0.25)" stroke-width="4" fill="none" stroke-linecap="round"/>
          <path d="M 20 40 Q 150 10, 280 45 T 420 32" stroke="#1687ff" stroke-width="4" fill="none" stroke-linecap="round"/>
          <circle cx="420" cy="32" r="6" fill="#00e599" />
          <circle cx="420" cy="32" r="12" stroke="#00e599" stroke-width="1.5" opacity="0.6">
            <animate attributeName="r" values="6;16;6" dur="2s" repeatCount="indefinite"/>
          </circle>
        </svg>
      </div>

      <!-- Mid-Run Controls -->
      <div class="run-controls-row" style="position: relative; z-index: 10;">
        <button type="button" class="btn-secondary" id="btnPauseRun" onclick="toggleRunTimer()" style="padding: 16px 36px; font-size: 1rem;">
          ❚❚ PAUSE RUN
        </button>
        <button type="button" class="action-btn" onclick="recordLap()" style="padding: 16px 28px; font-size: 0.9rem;">
          ⏱ LAP SPLIT (KM)
        </button>
        <button type="button" class="btn-orange" onclick="finishRunSession()" style="padding: 16px 36px; font-size: 1rem;">
          FINISH RUN PROTOCOL →
        </button>
      </div>

    </div>

  </div>

  <!-- ==========================================================================
       TAB 3: POST-RUN BIOMECHANICAL ANALYSIS (SCREEN 9)
       ========================================================================== -->
  <div id="tabContent_postrun" class="locker-tab-content">
    
    <div style="background: var(--bg-navy-surface); border: 1px solid var(--border-dark-highlight); border-radius: var(--radius-lg); padding: 48px; margin-bottom: 40px;">
      
      <div class="locker-header-summary">
        <div>
          <span class="badge-volt mono-tag">RUN PROTOCOL COMPLETED // 100HZ STREAM FUSED</span>
          <h2 style="font-size: 2.2rem; color: #ffffff; text-transform: uppercase; margin: 8px 0 4px;">
            BERLIN HALF MARATHON SIMULATION // TIERGARTEN LOOP
          </h2>
          <div style="color: var(--text-secondary); font-size: 0.9rem;">
            Elena Vance · Completed 10:34 AM CEST · 14°C Dry Asphalt · Chassis: VOLTERRA X-RACE 01
          </div>
        </div>

        <div style="text-align: right;">
          <div class="mono-tag" style="color: var(--volt-green);">CHASSIS EFFICIENCY SCORE</div>
          <div style="font-family: var(--font-headline); font-size: 2.6rem; font-weight: 900; color: var(--volt-green);">
            94.8 <span style="font-size: 1.1rem; color: #ffffff;">/ 100</span>
          </div>
        </div>
      </div>

      <!-- 4 Primary Metrics -->
      <div class="locker-metrics-grid">
        <div style="background: var(--bg-midnight-dark); border: 1px solid var(--border-dark); border-radius: var(--radius-sm); padding: 24px;">
          <div class="mono-tag" style="color: var(--text-muted);">DISTANCE</div>
          <div style="font-family: var(--font-headline); font-size: 2.2rem; font-weight: 800; color: #ffffff;">21.10 KM</div>
          <div style="font-size: 0.75rem; color: var(--volt-green);">Official Half Marathon</div>
        </div>

        <div style="background: var(--bg-midnight-dark); border: 1px solid var(--border-dark); border-radius: var(--radius-sm); padding: 24px;">
          <div class="mono-tag" style="color: var(--text-muted);">OFFICIAL TIME</div>
          <div style="font-family: var(--font-headline); font-size: 2.2rem; font-weight: 800; color: #ffffff;">01:17:42</div>
          <div style="font-size: 0.75rem; color: var(--electric-blue);">Personal Best (PB)</div>
        </div>

        <div style="background: var(--bg-midnight-dark); border: 1px solid var(--border-dark); border-radius: var(--radius-sm); padding: 24px;">
          <div class="mono-tag" style="color: var(--text-muted);">AVERAGE PACE</div>
          <div style="font-family: var(--font-headline); font-size: 2.2rem; font-weight: 800; color: var(--volt-green);">3:41 /KM</div>
          <div style="font-size: 0.75rem; color: var(--text-secondary);">-0:01 vs 3:42 Target</div>
        </div>

        <div style="background: var(--bg-midnight-dark); border: 1px solid var(--border-dark); border-radius: var(--radius-sm); padding: 24px;">
          <div class="mono-tag" style="color: var(--text-muted);">ENERGY EXPENDITURE</div>
          <div style="font-family: var(--font-headline); font-size: 2.2rem; font-weight: 800; color: #ffffff;">1,384 KCAL</div>
          <div style="font-size: 0.75rem; color: var(--energy-orange);">166 BPM Avg HR</div>
        </div>
      </div>

      <!-- Biomechanical Deep-Dive Cards -->
      <div class="locker-biomech-grid">
        <div style="background: rgba(22, 135, 255, 0.08); border: 1px solid var(--border-dark-highlight); border-radius: var(--radius-sm); padding: 20px;">
          <div class="mono-tag" style="color: var(--electric-blue); margin-bottom: 4px;">ENERGY RETURN</div>
          <div style="font-size: 1.6rem; font-weight: 800; color: #ffffff;">90.6%</div>
          <div style="font-size: 0.75rem; color: var(--text-secondary); margin-top: 4px;">+1.2% over factory bench baseline 89.4%</div>
        </div>

        <div style="background: rgba(0, 229, 153, 0.08); border: 1px solid rgba(0, 229, 153, 0.3); border-radius: var(--radius-sm); padding: 20px;">
          <div class="mono-tag" style="color: var(--volt-green); margin-bottom: 4px;">GROUND CONTACT (GCT)</div>
          <div style="font-size: 1.6rem; font-weight: 800; color: #ffffff;">161 MS</div>
          <div style="font-size: 0.75rem; color: var(--text-secondary); margin-top: 4px;">50.1% L / 49.9% R Balance (Ultra-Symmetric)</div>
        </div>

        <div style="background: rgba(255, 107, 44, 0.08); border: 1px solid rgba(255, 107, 44, 0.3); border-radius: var(--radius-sm); padding: 20px;">
          <div class="mono-tag" style="color: var(--energy-orange); margin-bottom: 4px;">VERTICAL OSCILLATION</div>
          <div style="font-size: 1.6rem; font-weight: 800; color: #ffffff;">6.2 CM</div>
          <div style="font-size: 0.75rem; color: var(--text-secondary); margin-top: 4px;">Elite propulsion window (&lt;6.5cm)</div>
        </div>

        <div style="background: rgba(22, 135, 255, 0.08); border: 1px solid var(--border-dark-highlight); border-radius: var(--radius-sm); padding: 20px;">
          <div class="mono-tag" style="color: var(--electric-blue); margin-bottom: 4px;">SOLEUS STRAIN DAMPENING</div>
          <div style="font-size: 1.6rem; font-weight: 800; color: #ffffff;">-21.4% LOAD</div>
          <div style="font-size: 0.75rem; color: var(--text-secondary); margin-top: 4px;">Reduced eccentric calf pack-out</div>
        </div>
      </div>

    </div>

  </div>

  <!-- ==========================================================================
       TAB 4: STRAVA TELEMETRY SYNC (SCREEN 3)
       ========================================================================== -->
  <div id="tabContent_strava" class="locker-tab-content">
    
    <div style="background: var(--bg-navy-surface); border: 1px solid var(--border-dark-highlight); border-radius: var(--radius-lg); padding: 48px; max-width: 900px; margin: 0 auto;">
      
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px; padding-bottom: 20px; border-bottom: 1px solid var(--border-dark);">
        <div>
          <span class="badge-orange mono-tag" style="background: rgba(252, 76, 2, 0.15); color: var(--strava-orange); border-color: rgba(252, 76, 2, 0.4);">
            STRAVA PRO PIPELINE
          </span>
          <h2 style="font-size: 2rem; color: #ffffff; text-transform: uppercase; margin-top: 6px;">
            STRAVA TELEMETRY SYNC CHAMBER
          </h2>
        </div>

        <div style="display: flex; align-items: center; gap: 8px;">
          <span class="pulse-indicator"></span>
          <span class="mono-tag" style="color: var(--volt-green);">STATUS: SYNCED & STREAMING</span>
        </div>
      </div>

      <!-- Athlete Credentials Binding Capsule -->
      <div style="background: var(--bg-midnight-dark); border: 1px solid var(--border-dark); border-radius: var(--radius-sm); padding: 24px; margin-bottom: 32px;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
          <div>
            <div style="color: #ffffff; font-weight: 700; font-size: 1.1rem;">@elena.vance // Marathon Div A</div>
            <div style="color: var(--text-secondary); font-size: 0.82rem; font-family: var(--font-mono); margin-top: 2px;">
              STRAVA PRO ATHLETE ID: #STR-8820491 • BERLIN, GERMANY
            </div>
          </div>
          <span class="badge-blue mono-tag">DISPATCH LINKED</span>
        </div>
      </div>

      <!-- 4 Data Pipeline Toggles -->
      <div style="display: flex; flex-direction: column; gap: 14px; margin-bottom: 36px;">
        <div class="selection-tile selected">
          <div>
            <div class="tile-title">Auto-Log Volterra Footwear Gear ID</div>
            <div class="tile-sub">Binds chassis serial number #EXP-01-88429-GER to every Strava road upload</div>
          </div>
          <span style="color: var(--volt-green); font-family: var(--font-mono); font-size: 0.8rem;">ENABLED</span>
        </div>

        <div class="selection-tile selected">
          <div>
            <div class="tile-title">Kinetic Rebound & Cadence Telemetry</div>
            <div class="tile-sub">Injects 100Hz ground contact time & stiffness into Strava stream FIT files</div>
          </div>
          <span style="color: var(--volt-green); font-family: var(--font-mono); font-size: 0.8rem;">ENABLED</span>
        </div>

        <div class="selection-tile selected">
          <div>
            <div class="tile-title">Automated 50KM Trial Compliance Reporting</div>
            <div class="tile-sub">Accredits authenticated GPS mileage towards the 50KM risk-free money back guarantee</div>
          </div>
          <span style="color: var(--volt-green); font-family: var(--font-mono); font-size: 0.8rem;">ENABLED</span>
        </div>
      </div>

      <div style="display: flex; gap: 16px;">
        <button type="button" class="btn-primary" style="flex: 1;" onclick="VOLTERRA_CART.showToast('FORCE SYNCED WITH STRAVA PRO API');">
          FORCE SYNC STRAVA TELEMETRY ↻
        </button>
        <button type="button" class="btn-secondary" onclick="openCalibrationModal()">
          SENSOR ZERO TARE
        </button>
      </div>

    </div>

  </div>

  <!-- ==========================================================================
       MODAL 1: POD ZERO CALIBRATION & OSCILLOSCOPE (SCREEN 8)
       ========================================================================== -->
  <div class="telemetry-modal-backdrop" id="calibrationModal">
    <div class="telemetry-modal-sheet">
      
      <div class="modal-header-row">
        <div>
          <span class="badge-blue mono-tag">DIAGNOSTIC PROTOCOL ISO-992</span>
          <h3 style="font-size: 1.6rem; color: #ffffff; text-transform: uppercase; margin-top: 4px;">
            POD ZERO CALIBRATION & DRIFT TARE
          </h3>
        </div>
        <button type="button" class="modal-close-btn" onclick="closeCalibrationModal()">✕</button>
      </div>

      <div style="font-family: var(--font-mono); font-size: 0.78rem; color: var(--text-secondary); margin-bottom: 20px;">
        LINKED CHASSIS: VOLTERRA X-RACE 01 [EXP-01-88429-GER] • DUAL 6-AXIS IMU SENSORS
      </div>

      <!-- Real-Time 3-Axis Oscilloscope Waveform -->
      <div>
        <div class="mono-tag" style="color: var(--electric-blue); margin-bottom: 6px;">
          LIVE 3-AXIS ACCELEROMETER NOISE WAVE (100Hz RAW)
        </div>
        <div class="oscilloscope-box">
          <canvas id="oscilloscopeCanvas" class="oscilloscope-canvas"></canvas>
        </div>
      </div>

      <!-- Checklist -->
      <div class="locker-tare-checklist">
        <div style="background: var(--bg-midnight-dark); padding: 14px; border-radius: var(--radius-sm); border: 1px solid var(--border-dark);">
          <div style="color: var(--volt-green); font-size: 0.85rem; font-weight: 700;">✓ SURFACE LEVELED</div>
          <div style="font-size: 0.72rem; color: var(--text-muted); margin-top: 2px;">Resting flat horizontally</div>
        </div>

        <div style="background: var(--bg-midnight-dark); padding: 14px; border-radius: var(--radius-sm); border: 1px solid var(--border-dark);">
          <div style="color: var(--volt-green); font-size: 0.85rem; font-weight: 700;">✓ TARE UNLOADED</div>
          <div style="font-size: 0.72rem; color: var(--text-muted); margin-top: 2px;">Zero foot weight load</div>
        </div>

        <div style="background: var(--bg-midnight-dark); padding: 14px; border-radius: var(--radius-sm); border: 1px solid var(--border-dark);">
          <div style="color: var(--volt-green); font-size: 0.85rem; font-weight: 700;">✓ THERMAL BALANCED</div>
          <div style="font-size: 0.72rem; color: var(--text-muted); margin-top: 2px;">21.4°C ambient stable</div>
        </div>
      </div>

      <!-- Execution Button -->
      <button type="button" id="btnExecuteTare" class="btn-primary" style="width: 100%; padding: 16px; font-size: 0.95rem;" onclick="executeZeroTare()">
        EXECUTE ZERO TARE & SAVE TO FLASH MEMORY →
      </button>

    </div>
  </div>

  <!-- ==========================================================================
       MODAL 2: X-RACE 01 TELEMETRY DEEP-DIVE MODAL (SCREEN 11)
       ========================================================================== -->
  <div class="telemetry-modal-backdrop" id="deepDiveModal">
    <div class="telemetry-modal-sheet">
      
      <div class="modal-header-row">
        <div>
          <span class="badge-orange mono-tag">CHASSIS DEEP-DIVE // LAB REPORT</span>
          <h3 style="font-size: 1.6rem; color: #ffffff; text-transform: uppercase; margin-top: 4px;">
            VOLTERRA X-RACE 01 [C-02 PROTOTYPE]
          </h3>
        </div>
        <button type="button" class="modal-close-btn" onclick="closeDeepDiveModal()">✕</button>
      </div>

      <div class="locker-modal-info">
        <script>
          document.write(getShoeSvg('#1687ff', '#ff6b2c'));
        </script>
        <div>
          <div style="font-family: var(--font-mono); font-size: 0.78rem; color: var(--text-secondary);">
            SERIAL NUMBER: <strong>EXP-01-88429-GER</strong>
          </div>
          <div style="font-size: 0.85rem; color: #ffffff; margin-top: 4px;">
            Stack: 39.5mm WA Legal • Tare Weight: 218g • Spoon Stiffness: Level 4
          </div>
          <div style="color: var(--volt-green); font-family: var(--font-mono); font-size: 0.75rem; margin-top: 4px;">
            ✓ FOAM DEGRADATION: 0.0% PACK-OUT (NOMINAL REBOUND)
          </div>
        </div>
      </div>

      <!-- Bilateral Balance -->
      <div class="locker-modal-stats">
        <div style="background: var(--bg-midnight-dark); padding: 18px; border-radius: var(--radius-sm); border: 1px solid var(--border-dark);">
          <div class="mono-tag" style="color: var(--electric-blue);">BILATERAL GCT SYMMETRY</div>
          <div style="font-family: var(--font-headline); font-size: 1.5rem; font-weight: 700; color: #ffffff; margin-top: 4px;">
            50.1% L / 49.9% R
          </div>
          <div style="font-size: 0.75rem; color: var(--text-secondary);">161ms Left vs 162ms Right</div>
        </div>

        <div style="background: var(--bg-midnight-dark); padding: 18px; border-radius: var(--radius-sm); border: 1px solid var(--border-dark);">
          <div class="mono-tag" style="color: var(--volt-green);">PRONATION ANGLE</div>
          <div style="font-family: var(--font-headline); font-size: 1.5rem; font-weight: 700; color: #ffffff; margin-top: 4px;">
            -3.2° L / -3.0° R
          </div>
          <div style="font-size: 0.75rem; color: var(--text-secondary);">Neutral Strike Zone Confirmed</div>
        </div>
      </div>

      <button type="button" class="btn-primary" style="width: 100%; padding: 14px;" onclick="closeDeepDiveModal(); VOLTERRA_CART.showToast('TELEMETRY FIT EXPORTED (.PDF)');">
        EXPORT FULL BIO-TELEMETRY FIT REPORT ↓
      </button>

    </div>
  </div>

</main>

<script src="assets/js/locker.js"></script>

<?php include __DIR__ . '/includes/footer.php'; ?>
