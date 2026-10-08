<?php
// shop.php - VOLTERRA CONCEPT 02 Running Footwear Catalog (PLP)
$pageTitle = 'VOLTERRA // Running Footwear Catalog — High Velocity Lab';
$activeNav = 'shop';
include __DIR__ . '/includes/header.php';
?>

<main style="padding: 60px 32px 100px; max-width: 1440px; margin: 0 auto;">

  <!-- Hero / Catalog Header -->
  <div style="background: linear-gradient(135deg, #0b1f3a 0%, #051020 100%); border: 1px solid var(--border-dark-highlight); border-radius: var(--radius-lg); padding: 48px; margin-bottom: 40px; position: relative; overflow: hidden;">
    <div class="hero-laser-grid" style="opacity: 0.35;"></div>
    
    <div style="position: relative; z-index: 10; max-width: 780px;">
      <div class="mono-tag" style="color: var(--electric-blue); margin-bottom: 12px;">
        RUNNING / FOOTWEAR // HIGH VELOCITY LAB
      </div>
      <h1 style="font-size: clamp(2.8rem, 5vw, 4.2rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 16px; line-height: 1;">
        RUN FASTER.
      </h1>
      <p style="color: var(--text-secondary); font-size: 1.1rem; line-height: 1.6; margin-bottom: 24px;">
        Engineered footwear for every pace, distance, and ambition. Supercritical nitrogen foam matrixes, curved carbon composite propulsion plates, and aerodynamic lockdown.
      </p>

      <div style="display: flex; gap: 16px; flex-wrap: wrap; font-family: var(--font-mono); font-size: 0.75rem;">
        <span class="badge-blue">LAB TESTED // VOL. 02</span>
        <span class="badge-orange">CHASSIS ROTATION INDEXED</span>
        <span class="badge-volt">50KM TRIAL GUARANTEE ACTIVE</span>
      </div>
    </div>
  </div>

  <!-- Catalog Controls & Discipline Filter Pills -->
  <div class="catalog-controls-bar" style="background: var(--bg-navy-surface); border: 1px solid var(--border-dark); border-radius: var(--radius-md); padding: 20px 28px; margin-bottom: 36px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
    
    <!-- Filter Pills -->
    <div style="display: flex; gap: 8px; flex-wrap: wrap;" id="disciplineFilterPills">
      <button type="button" class="action-btn" style="background: var(--electric-blue); color: #ffffff; border-color: var(--electric-blue);" onclick="filterDiscipline('all', this)">
        ALL RUNNING (8)
      </button>
      <button type="button" class="action-btn" onclick="filterDiscipline('marathon', this)">
        MARATHON & ROAD (3)
      </button>
      <button type="button" class="action-btn" onclick="filterDiscipline('tempo', this)">
        SPEED & TEMPO (2)
      </button>
      <button type="button" class="action-btn" onclick="filterDiscipline('trail', this)">
        TRAIL & ULTRA (2)
      </button>
      <button type="button" class="action-btn" onclick="filterDiscipline('track', this)">
        TRACK & 5K (1)
      </button>
    </div>

    <!-- Search & Sort Controls -->
    <div style="display: flex; gap: 14px; align-items: center;">
      <input type="text" id="catalogSearchInput" placeholder="Search chassis specs, foam..." oninput="handleCatalogSearch(this.value)" style="background: var(--bg-midnight-dark); border: 1px solid var(--border-dark); color: #ffffff; padding: 10px 16px; border-radius: var(--radius-pill); font-family: var(--font-mono); font-size: 0.78rem; width: 220px;">
      
      <select id="catalogSortSelect" onchange="handleCatalogSort(this.value)" style="background: var(--bg-midnight-dark); border: 1px solid var(--border-dark); color: #ffffff; padding: 10px 16px; border-radius: var(--radius-pill); font-family: var(--font-mono); font-size: 0.78rem;">
        <option value="featured">Featured / Lab Pick</option>
        <option value="price-low">Price: Low to High</option>
        <option value="price-high">Price: High to Low</option>
        <option value="weight">Lightest Weight</option>
        <option value="rating">Highest Rating</option>
      </select>
    </div>

  </div>

  <!-- Products Grid (4-Column Layout with Integrated Editorial Tile) -->
  <div class="product-cards-grid" id="catalogProductsGrid">
    <!-- Rendered dynamically by script below -->
  </div>

  <!-- Integrated Speed Lab Dispatch Tile -->
  <div class="speed-lab-dispatch-tile">
    <div>
      <span class="badge-orange mono-tag" style="margin-bottom: 12px;">THE SPEED LAB DISPATCH</span>
      <h2 style="font-size: clamp(1.6rem, 3.5vw, 2.2rem); color: #ffffff; text-transform: uppercase; margin: 10px 0 14px;">
        HOW CURVED CARBON GEOMETRY REDUCES SOLEUS FATIGUE BY 21.4%
      </h2>
      <p style="color: var(--text-secondary); line-height: 1.7; font-size: 0.98rem;">
        Biomechanical lab testing demonstrates that the 3K spoon-shaped carbon plate accelerates forward lever projection, shifting ground-contact force away from calf tendons during the crucial 30KM–42.2KM marathon wall.
      </p>
      <div style="margin-top: 24px;">
        <a href="technology.php" class="btn-primary" style="font-size: 0.82rem; padding: 12px 24px;">READ FULL LAB REPORT →</a>
      </div>
    </div>

    <div style="background: rgba(4, 12, 23, 0.7); border: 1px solid var(--border-dark); border-radius: var(--radius-sm); padding: 24px;">
      <div class="mono-tag" style="color: var(--volt-green); margin-bottom: 12px;">LAB GAIT TELEMETRY BENCHMARK</div>
      <div style="display: flex; flex-direction: column; gap: 12px;">
        <div style="display: flex; justify-content: space-between; font-size: 0.85rem;">
          <span style="color: var(--text-secondary);">Ground Contact Time:</span>
          <strong style="color: #ffffff;">161ms vs 214ms Standard</strong>
        </div>
        <div style="display: flex; justify-content: space-between; font-size: 0.85rem;">
          <span style="color: var(--text-secondary);">Kinetic Energy Rebound:</span>
          <strong style="color: var(--volt-green);">89.4% Dual AeroFoam™</strong>
        </div>
        <div style="display: flex; justify-content: space-between; font-size: 0.85rem;">
          <span style="color: var(--text-secondary);">Vertical Oscillation:</span>
          <strong style="color: #ffffff;">6.2cm (Elite Forward Focus)</strong>
        </div>
      </div>
    </div>
  </div>

  <!-- 30-Day / 50KM Trial Run Policy Banner -->
  <div class="policy-trial-banner">
    <div>
      <h3 style="font-size: 1.4rem; color: #ffffff; text-transform: uppercase; margin-bottom: 6px;">
        ⚡ 30-DAY / 50KM TRIAL RUN GUARANTEE
      </h3>
      <p style="color: var(--text-secondary); font-size: 0.92rem; max-width: 680px;">
        Put 50 kilometers on any VOLTERRA chassis on outdoor road or track. If you do not break your pace or feel the propulsion advantage, return them for a 100% money-back refund. No questions asked.
      </p>
    </div>
    <a href="checkout.php" class="btn-primary" style="background: var(--volt-green); color: #020914;">
      EXPLORE GUARANTEED MODELS →
    </a>
  </div>

</main>

<script>
let currentDiscipline = 'all';
let currentSearch = '';
let currentSort = 'featured';

function renderCatalog() {
  const grid = document.getElementById('catalogProductsGrid');
  if (!grid || typeof VOLTERRA_PRODUCTS === 'undefined') return;

  let list = [...VOLTERRA_PRODUCTS];

  // Discipline Filter
  if (currentDiscipline !== 'all') {
    list = list.filter(p => p.discipline === currentDiscipline);
  }

  // Search Filter
  if (currentSearch) {
    const q = currentSearch.toLowerCase();
    list = list.filter(p => p.title.toLowerCase().includes(q) || p.shortDesc.toLowerCase().includes(q) || p.categoryName.toLowerCase().includes(q));
  }

  // Sorting
  if (currentSort === 'price-low') {
    list.sort((a, b) => a.price - b.price);
  } else if (currentSort === 'price-high') {
    list.sort((a, b) => b.price - a.price);
  } else if (currentSort === 'weight') {
    list.sort((a, b) => parseInt(a.weight) - parseInt(b.weight));
  } else if (currentSort === 'rating') {
    list.sort((a, b) => b.rating - a.rating);
  }

  if (list.length === 0) {
    grid.innerHTML = `
      <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px; font-family: var(--font-mono); color: var(--text-muted);">
        NO CHASSIS MATCHED FILTER CRITERIA // RESET SEARCH
      </div>
    `;
    return;
  }

  grid.innerHTML = list.map(prod => `
    <div class="product-card">
      <div class="product-media-wrap">
        <span class="badge-${prod.badgeType} product-badge-float">${prod.badge}</span>
        <button type="button" class="wishlist-float-btn" aria-label="Save to Wishlist">♡</button>
        
        <a href="product.php" class="card-shoe-media">
          <img src="${prod.image || 'assets/images/x-race-01.jpg'}" alt="${prod.title}" class="product-card-photo" loading="lazy">
        </a>
      </div>

      <div class="product-info-wrap">
        <div class="product-meta-row">
          <span class="mono-tag" style="color: var(--text-dark-secondary);">${prod.weight} CHASSIS</span>
          <span class="product-rating">★ ${prod.rating} (${prod.reviewsCount})</span>
        </div>

        <a href="product.php">
          <h3 class="product-title">${prod.title}</h3>
        </a>
        <div class="product-category-sub">${prod.subtitle}</div>

        <div class="product-specs-chip-bar">
          <span>⚡ ${prod.energyReturn}</span>
          <span>•</span>
          <span>${prod.heelDrop} DROP</span>
          <span>•</span>
          <span>CARBON</span>
        </div>

        <div class="product-price-action-row">
          <div class="card-price">$${prod.price.toFixed(2)}</div>
          <button type="button" class="card-quick-add-btn" onclick="quickAddProduct('${prod.id}', 'US M 9.0')">
            + QUICK ADD
          </button>
        </div>
      </div>
    </div>
  `).join('');

  // Dispatch event for 3D physics and tilt initialization
  window.dispatchEvent(new CustomEvent('catalogRendered'));
}

function filterDiscipline(disc, btn) {
  currentDiscipline = disc;
  document.querySelectorAll('#disciplineFilterPills .action-btn').forEach(b => {
    b.style.background = 'transparent';
    b.style.borderColor = 'var(--border-dark)';
    b.style.color = 'var(--text-primary-light)';
  });
  if (btn) {
    btn.style.background = 'var(--electric-blue)';
    btn.style.borderColor = 'var(--electric-blue)';
    btn.style.color = '#ffffff';
  }
  renderCatalog();
}

function handleCatalogSearch(val) {
  currentSearch = val;
  renderCatalog();
}

function handleCatalogSort(val) {
  currentSort = val;
  renderCatalog();
}

document.addEventListener('DOMContentLoaded', () => {
  renderCatalog();
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
