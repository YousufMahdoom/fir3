/**
 * VOLTERRA CONCEPT 02 // Athlete Companion App & Biomechanics Controller
 * Live 100Hz Run Simulation, Oscilloscope Waveform, Zero Tare Calibration & Modals
 */

let runTimerInterval = null;
let runSeconds = 3231; // 00:53:51 baseline
let isRunActive = true;
let oscAnimationId = null;

function switchLockerTab(tabId) {
  document.querySelectorAll('.locker-tab-btn').forEach(b => b.classList.remove('active'));
  document.querySelectorAll('.locker-tab-content').forEach(c => c.classList.remove('active'));

  const activeBtn = document.getElementById(`tabBtn_${tabId}`);
  if (activeBtn) activeBtn.classList.add('active');

  const activeContent = document.getElementById(`tabContent_${tabId}`);
  if (activeContent) activeContent.classList.add('active');
}

// 1. Live Run Simulation Controls
function toggleRunTimer() {
  const btn = document.getElementById('btnPauseRun');
  if (isRunActive) {
    clearInterval(runTimerInterval);
    isRunActive = false;
    if (btn) btn.innerHTML = '▶ RESUME RUN';
    VOLTERRA_CART.showToast('RUN PROTOCOL PAUSED (GPS PINNED)');
  } else {
    isRunActive = true;
    startRunTimer();
    if (btn) btn.innerHTML = '❚❚ PAUSE RUN';
    VOLTERRA_CART.showToast('RUN PROTOCOL RESUMED (100Hz STREAM)');
  }
}

function startRunTimer() {
  clearInterval(runTimerInterval);
  runTimerInterval = setInterval(() => {
    runSeconds++;
    const hrs = String(Math.floor(runSeconds / 3600)).padStart(2, '0');
    const mins = String(Math.floor((runSeconds % 3600) / 60)).padStart(2, '0');
    const secs = String(runSeconds % 60).padStart(2, '0');
    const timerEl = document.getElementById('liveRunTimer');
    if (timerEl) timerEl.textContent = `${hrs}:${mins}:${secs}`;

    // Micro jitter for pace & heart rate for realism
    const paceEl = document.getElementById('livePaceVal');
    if (paceEl && Math.random() > 0.6) {
      const seconds = 36 + Math.floor(Math.random() * 5);
      paceEl.innerHTML = `3:${seconds} <span>/KM</span>`;
    }
  }, 1000);
}

function recordLap() {
  VOLTERRA_CART.showToast('SPLIT RECORDED: 1.0 KM @ 3:39/KM (AUTOSYNCED)');
}

function finishRunSession() {
  clearInterval(runTimerInterval);
  VOLTERRA_CART.showToast('RUN COMPLETED // 100HZ DATA STREAM FUSED');
  setTimeout(() => {
    switchLockerTab('postrun');
  }, 600);
}

// 2. Pod Zero Calibration Modal & Live Oscilloscope
function openCalibrationModal() {
  const modal = document.getElementById('calibrationModal');
  if (modal) {
    modal.classList.add('open');
    initOscilloscope();
  }
}

function closeCalibrationModal() {
  const modal = document.getElementById('calibrationModal');
  if (modal) modal.classList.remove('open');
  if (oscAnimationId) cancelAnimationFrame(oscAnimationId);
}

function initOscilloscope() {
  const canvas = document.getElementById('oscilloscopeCanvas');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');
  let phase = 0;

  function renderWave() {
    canvas.width = canvas.parentElement.clientWidth;
    canvas.height = canvas.parentElement.clientHeight;
    const w = canvas.width;
    const h = canvas.height;

    ctx.fillStyle = '#010814';
    ctx.fillRect(0, 0, w, h);

    // Grid lines
    ctx.strokeStyle = 'rgba(22, 135, 255, 0.12)';
    ctx.lineWidth = 1;
    for (let x = 0; x < w; x += 30) {
      ctx.beginPath();
      ctx.moveTo(x, 0);
      ctx.lineTo(x, h);
      ctx.stroke();
    }
    for (let y = 0; y < h; y += 25) {
      ctx.beginPath();
      ctx.moveTo(0, y);
      ctx.lineTo(w, y);
      ctx.stroke();
    }

    // Channel X (Electric Blue)
    ctx.strokeStyle = '#1687ff';
    ctx.lineWidth = 2;
    ctx.beginPath();
    for (let x = 0; x < w; x++) {
      const y = h / 2 + Math.sin((x * 0.04) + phase) * 18 + Math.sin((x * 0.1) + phase * 2) * 6;
      if (x === 0) ctx.moveTo(x, y);
      else ctx.lineTo(x, y);
    }
    ctx.stroke();

    // Channel Y (Volt Green)
    ctx.strokeStyle = '#00e599';
    ctx.lineWidth = 1.5;
    ctx.beginPath();
    for (let x = 0; x < w; x++) {
      const y = h / 2 + Math.cos((x * 0.03) + phase * 1.5) * 12 + (Math.random() - 0.5) * 3;
      if (x === 0) ctx.moveTo(x, y);
      else ctx.lineTo(x, y);
    }
    ctx.stroke();

    phase += 0.05;
    oscAnimationId = requestAnimationFrame(renderWave);
  }

  if (oscAnimationId) cancelAnimationFrame(oscAnimationId);
  renderWave();
}

function executeZeroTare() {
  const btn = document.getElementById('btnExecuteTare');
  if (btn) btn.innerHTML = 'CALIBRATING 2,048 SAMPLES...';

  setTimeout(() => {
    if (btn) btn.innerHTML = '✓ TARE APPLIED // ZERO DRIFT SAVED';
    VOLTERRA_CART.showToast('ZERO DRIFT TARE SAVED TO FLASH MEMORY');
    setTimeout(() => {
      closeCalibrationModal();
    }, 1200);
  }, 1800);
}

// 3. Telemetry Deep-Dive Modal
function openDeepDiveModal() {
  const modal = document.getElementById('deepDiveModal');
  if (modal) modal.classList.add('open');
}

function closeDeepDiveModal() {
  const modal = document.getElementById('deepDiveModal');
  if (modal) modal.classList.remove('open');
}

document.addEventListener('DOMContentLoaded', () => {
  startRunTimer();
});
