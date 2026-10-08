/**
 * VOLTERRA CONCEPT 02 // Product Catalog & Chassis Database
 * Static Dataset with Technical Specifications, Colorways & SVG Vector Generators
 */

const VOLTERRA_PRODUCTS = [
  {
    id: 'x-race-01',
    sku: 'EXP-01-88429-GER',
    title: 'VOLTERRA X-RACE 01',
    subtitle: 'Supercritical Nitrogen-Infused Propulsion Chassis',
    discipline: 'marathon',
    categoryName: 'Marathon & Road Super-Shoe',
    badge: 'LAB PROTOTYPE',
    badgeType: 'orange',
    price: 149.00,
    rating: 4.9,
    reviewsCount: 128,
    image: 'assets/images/x-race-01.jpg',
    weight: '218g',
    energyReturn: '89.4%',
    heelDrop: '8mm',
    plateType: '3K Spoon Curved Carbon Fiber',
    stackHeight: '39.5mm WA Legal',
    colors: [
      { name: 'Electric Obsidian / Volt Blue', hex: '#1687ff', primary: '#0a1d3b', accent: '#1687ff', sole: '#0d284f' },
      { name: 'Solar Flare Orange', hex: '#ff6b2c', primary: '#1a1412', accent: '#ff6b2c', sole: '#261b17' },
      { name: 'Stealth Carbon Matrix', hex: '#3a4454', primary: '#11141a', accent: '#60728c', sole: '#1b222d' },
      { name: 'White Nimbus / Ice Blue', hex: '#c5e0ff', primary: '#f0f4fa', accent: '#00a6ff', sole: '#d6e4f7' }
    ],
    sizes: ['7.0', '7.5', '8.0', '8.5', '9.0', '9.5', '10.0', '10.5', '11.0', '11.5', '12.0', '13.0'],
    shortDesc: 'Dual-density AeroFoam midsole paired with a curved carbon-fiber composite speed plate. Engineered exclusively for personal bests.',
    longDesc: 'Engineered in the Volterra High Velocity Laboratory for sub-2 hour marathon pacing. Utilizing dual-density supercritical nitrogen-infused AeroFoam™ with an integrated 3K asymmetrical spoon carbon plate, the X-RACE 01 achieves an astounding 89.4% kinetic energy deflection while reducing soleus eccentric strain by 21.4%.'
  },
  {
    id: 'apex-nitro-speed',
    sku: 'APX-02-77401-GER',
    title: 'APEX NITRO SPEED',
    subtitle: 'Tempo & Threshold Race Chassis',
    discipline: 'tempo',
    categoryName: 'Speed & Tempo Racer',
    badge: 'LIMITED DROP',
    badgeType: 'orange',
    price: 175.00,
    rating: 4.9,
    reviewsCount: 94,
    image: 'assets/images/apex-nitro.jpg',
    weight: '198g',
    energyReturn: '88.1%',
    heelDrop: '6mm',
    plateType: 'FlexCore Carbon Winglet',
    stackHeight: '36.0mm',
    colors: [
      { name: 'Cyber White / Hyper Lime', hex: '#00e599', primary: '#f4f7fb', accent: '#00e599', sole: '#e1e9f2' },
      { name: 'Obsidian Black / Cyan', hex: '#1687ff', primary: '#0a1220', accent: '#1687ff', sole: '#101c30' }
    ],
    sizes: ['7.5', '8.0', '8.5', '9.0', '9.5', '10.0', '10.5', '11.0', '12.0'],
    shortDesc: 'Featherlight threshold weapon tuned for sub-3:30/km training blocks with responsive dynamic propulsion.',
    longDesc: 'Engineered for relentless interval workouts and tempo threshold blocks. Features an ultra-thin monomesh upper and dual-chamber nitrogen foam.'
  },
  {
    id: 'stride-aero-02',
    sku: 'STR-02-44192-GER',
    title: 'STRIDE AERO 02',
    subtitle: 'Daily Max Propulsion High-Mileage Trainer',
    discipline: 'marathon',
    categoryName: 'Daily Performance Trainer',
    badge: 'BESTSELLER',
    badgeType: 'blue',
    price: 130.00,
    rating: 4.8,
    reviewsCount: 210,
    image: 'assets/images/stride-aero.jpg',
    weight: '245g',
    energyReturn: '85.6%',
    heelDrop: '10mm',
    plateType: 'Nylon Composite Rocker',
    stackHeight: '40.0mm',
    colors: [
      { name: 'Ice Gray / Electric Blue', hex: '#1687ff', primary: '#d2ddeb', accent: '#1687ff', sole: '#b8c9df' },
      { name: 'Midnight Charcoal', hex: '#232f3e', primary: '#151d28', accent: '#3ca0ff', sole: '#1e2938' }
    ],
    sizes: ['7.0', '8.0', '8.5', '9.0', '9.5', '10.0', '10.5', '11.0', '11.5', '12.0'],
    shortDesc: 'Plush joint preservation meets forward-rolling rocker geometry for daily 20KM+ mileage blocks.',
    longDesc: 'The foundation of the Volterra fleet rotation. High-mileage endurance cushioning engineered to absorb eccentric footstrike shock.'
  },
  {
    id: 'velocity-carbon-matrix',
    sku: 'VCM-01-90312-GER',
    title: 'VELOCITY CARBON MATRIX',
    subtitle: 'Short Track & 5K-10K Pacing Weapon',
    discipline: 'track',
    categoryName: 'Track & 5K Pacing Weapon',
    badge: 'SALE -11%',
    badgeType: 'orange',
    price: 195.00,
    originalPrice: 220.00,
    rating: 4.9,
    reviewsCount: 62,
    image: 'assets/images/velocity-carbon.jpg',
    weight: '172g',
    energyReturn: '92.4%',
    heelDrop: '4mm',
    plateType: 'Rigid Full-Length 3K Plate',
    stackHeight: '32.0mm',
    colors: [
      { name: 'Electric Obsidian / Volt', hex: '#00f0ff', primary: '#081426', accent: '#00f0ff', sole: '#0e2340' }
    ],
    sizes: ['8.0', '8.5', '9.0', '9.5', '10.0', '10.5', '11.0'],
    shortDesc: 'Uncompromising stiffness and aggressive forward fulcrum designed for blistering 5K kicks.',
    longDesc: 'Built for maximum mechanical energy transfer with minimum ground contact time (sub-160ms).'
  },
  {
    id: 'volterra-vector-x',
    sku: 'VVX-01-55821-GER',
    title: 'VOLTERRA VECTOR X',
    subtitle: 'All-Terrain Technical Mountain & Trail Shoe',
    discipline: 'trail',
    categoryName: 'Technical Mountain & Trail',
    badge: 'NEW RELEASE',
    badgeType: 'blue',
    price: 155.00,
    rating: 4.7,
    reviewsCount: 89,
    image: 'assets/images/stratos-trail.jpg',
    weight: '280g',
    energyReturn: '83.0%',
    heelDrop: '6mm',
    plateType: 'Flexible Rock Shield Spine',
    stackHeight: '34.0mm',
    colors: [
      { name: 'Alpine Moss / Solar Orange', hex: '#ff6b2c', primary: '#1c261e', accent: '#ff6b2c', sole: '#253328' },
      { name: 'Granite Slate', hex: '#485566', primary: '#1a1f26', accent: '#6ea8fe', sole: '#29323d' }
    ],
    sizes: ['8.0', '8.5', '9.0', '9.5', '10.0', '10.5', '11.0', '12.0'],
    shortDesc: 'Grip-X multi-directional 5mm lugs combined with rock-plate stabilization for technical descents.',
    longDesc: 'Designed for alpine speed traversals and rough gravel trails with tear-resistant Kevlar mesh.'
  },
  {
    id: 'terra-hyperflight',
    sku: 'THF-02-61093-GER',
    title: 'TERRA HYPERFLIGHT',
    subtitle: 'Ultra-Distance Mountain Racer',
    discipline: 'trail',
    categoryName: 'Ultra-Distance Mountain Racer',
    badge: 'FIELD TESTED',
    badgeType: 'blue',
    price: 165.00,
    rating: 4.8,
    reviewsCount: 47,
    image: 'assets/images/orbit-marathon.jpg',
    weight: '235g',
    energyReturn: '86.4%',
    heelDrop: '5mm',
    plateType: 'Split Dual-Fork Carbon Spine',
    stackHeight: '35.0mm',
    colors: [
      { name: 'Cyber Sand / Signal Orange', hex: '#ff7b36', primary: '#2a2219', accent: '#ff7b36', sole: '#3b3023' }
    ],
    sizes: ['8.0', '8.5', '9.0', '9.5', '10.0', '10.5', '11.0'],
    shortDesc: 'Ultra-endurance chassis featuring dual-density mud expulsion and high rebound stability.',
    longDesc: 'Tested across 100-mile ultra marathons. Combines lightweight carbon propulsion with high-volume shock absorption.'
  },
  {
    id: 'kinetic-pulse-reflex',
    sku: 'KPR-01-33104-GER',
    title: 'KINETIC PULSE REFLEX',
    subtitle: 'Recovery & Biomechanical Reset Chassis',
    discipline: 'tempo',
    categoryName: 'Recovery & Easy Miles',
    badge: 'STABILITY LAB',
    badgeType: 'blue',
    price: 120.00,
    rating: 4.6,
    reviewsCount: 154,
    image: 'assets/images/chrono-daily.jpg',
    weight: '260g',
    energyReturn: '82.0%',
    heelDrop: '8mm',
    plateType: 'Torsional TPU Arch Cradle',
    stackHeight: '38.0mm',
    colors: [
      { name: 'Deep Space Navy', hex: '#1687ff', primary: '#081426', accent: '#1687ff', sole: '#122542' }
    ],
    sizes: ['7.0', '7.5', '8.0', '8.5', '9.0', '9.5', '10.0', '10.5', '11.0', '12.0'],
    shortDesc: 'Non-stress anatomical footbed engineered for post-race recovery jogs and baseline endurance runs.',
    longDesc: 'Specifically tunes muscle vibration dampening to accelerate muscular recovery and reduce calf strain.'
  },
  {
    id: 'aero-strike-pro-carbon',
    sku: 'ASP-01-99834-GER',
    title: 'AERO-STRIKE PRO CARBON',
    subtitle: 'Elite Half-Marathon Spec Racing Chassis',
    discipline: 'marathon',
    categoryName: 'Elite Half-Marathon Spec',
    badge: 'OLYMPIC SPEC',
    badgeType: 'orange',
    price: 189.00,
    rating: 5.0,
    reviewsCount: 38,
    image: 'assets/images/hyper-track.jpg',
    weight: '204g',
    energyReturn: '91.2%',
    heelDrop: '7mm',
    plateType: 'Curved Titanium-Infused Spoon',
    stackHeight: '38.0mm',
    colors: [
      { name: 'Volterra Electric / Volt Cyan', hex: '#00e5ff', primary: '#061326', accent: '#00e5ff', sole: '#0a2347' }
    ],
    sizes: ['8.0', '8.5', '9.0', '9.5', '10.0', '10.5', '11.0'],
    shortDesc: 'Calibrated for rapid foot-turnover racing between 10KM and 21.1KM half marathons.',
    longDesc: 'Supercritical PeBaX foam paired with titanium-infused carbon fiber for maximum snap during toe-off.'
  }
];

/**
 * Returns dynamic vector SVG of a technical aerodynamic running shoe chassis.
 * Allows custom primary, accent, and midsole styling.
 */
function getShoeSvg(colorHex = '#1687ff', accentHex = '#ff6b2c', mode = 'isometric') {
  return `
    <svg viewBox="0 0 520 280" fill="none" xmlns="http://www.w3.org/2000/svg" class="volterra-chassis-vector">
      <defs>
        <linearGradient id="upperGrad-${colorHex.replace('#','')}" x1="50" y1="50" x2="450" y2="200" gradientUnits="userSpaceOnUse">
          <stop offset="0%" stop-color="#0a1d38" />
          <stop offset="60%" stop-color="#051020" />
          <stop offset="100%" stop-color="${colorHex}" />
        </linearGradient>
        <linearGradient id="midsoleGrad" x1="50" y1="180" x2="470" y2="240" gradientUnits="userSpaceOnUse">
          <stop offset="0%" stop-color="#ffffff" />
          <stop offset="50%" stop-color="#e2ebf7" />
          <stop offset="100%" stop-color="#cedef0" />
        </linearGradient>
        <linearGradient id="carbonPlateGrad" x1="120" y1="200" x2="400" y2="210" gradientUnits="userSpaceOnUse">
          <stop offset="0%" stop-color="#111111" />
          <stop offset="50%" stop-color="${accentHex}" />
          <stop offset="100%" stop-color="#1a1a1a" />
        </linearGradient>
        <filter id="glow-${colorHex.replace('#','')}" x="-20%" y="-20%" width="140%" height="140%">
          <feGaussianBlur stdDeviation="6" result="blur" />
          <feComposite in="SourceGraphic" in2="blur" operator="over" />
        </filter>
      </defs>

      <!-- Chassis Silhouette Shadow -->
      <ellipse cx="265" cy="245" rx="195" ry="18" fill="rgba(0,0,0,0.55)" filter="blur(8px)" />

      <!-- Outsole Rubber Lugs (Vibram Grip-X) -->
      <path d="M 95 235 C 130 238 210 238 280 236 C 350 234 430 220 465 195 L 472 205 C 430 234 350 248 275 248 C 205 248 120 246 88 240 Z" fill="#040a14" />
      <path d="M 120 242 L 145 242 L 140 246 L 115 246 Z" fill="${accentHex}" />
      <path d="M 190 242 L 215 242 L 210 246 L 185 246 Z" fill="${accentHex}" />
      <path d="M 260 241 L 285 241 L 280 245 L 255 245 Z" fill="${accentHex}" />

      <!-- AeroFoam™ Supercritical Midsole -->
      <path d="M 75 225 C 80 195 105 185 140 185 C 185 185 220 195 270 195 C 330 195 400 165 460 178 C 475 182 478 192 468 205 C 435 226 360 238 275 238 C 190 238 100 236 75 225 Z" fill="url(#midsoleGrad)" />

      <!-- Integrated 3K Curved Carbon Spoon Plate -->
      <path d="M 110 205 C 170 203 235 212 290 206 C 350 200 410 175 455 182 L 452 188 C 405 182 345 206 285 212 C 230 218 165 209 108 211 Z" fill="url(#carbonPlateGrad)" />

      <!-- Upper Chassis Monomesh -->
      <path d="M 80 195 C 80 145 105 110 135 95 C 160 85 175 110 225 125 C 275 140 330 135 390 148 C 435 158 458 172 460 180 C 420 168 360 190 280 190 C 215 190 150 180 80 195 Z" fill="url(#upperGrad-${colorHex.replace('#','')})" />

      <!-- Technical Laser Lines & Kinetic Welds -->
      <path d="M 135 95 C 165 120 220 145 285 150" stroke="${colorHex}" stroke-width="2.5" stroke-dasharray="4 3" opacity="0.85" />
      <path d="M 170 120 C 230 145 320 150 400 158" stroke="#ffffff" stroke-width="1.8" opacity="0.6" />

      <!-- Heel Counter Lockdown Pod -->
      <path d="M 82 180 C 85 150 98 125 120 108 C 110 135 108 165 118 185 Z" fill="#040b17" stroke="rgba(255,255,255,0.15)" />

      <!-- Aerodynamic Speed Swoop Line -->
      <path d="M 180 138 Q 280 170 430 162" stroke="${colorHex}" stroke-width="4" stroke-linecap="round" filter="url(#glow-${colorHex.replace('#','')})" />

      <!-- Telemetry Micro-Stamp -->
      <text x="145" y="165" font-family="'JetBrains Mono', monospace" font-size="7.5" fill="#ffffff" letter-spacing="1" opacity="0.75">VOL-EXP // 89.4% RETURN</text>
      <text x="350" y="182" font-family="'JetBrains Mono', monospace" font-size="7" fill="${accentHex}" font-weight="bold">218G CHASSIS</text>
      
      <!-- Sensor Pod Cavity Indicator (100Hz BLE) -->
      <circle cx="155" cy="216" r="4.5" fill="${accentHex}" />
      <circle cx="155" cy="216" r="8" stroke="${accentHex}" stroke-width="1" opacity="0.5" />
    </svg>
  `;
}
