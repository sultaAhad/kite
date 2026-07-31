<!DOCTYPE html>
<html lang="en" class="site-root">

<head>
    <!-- HeaderLinks Include Here -->
    <?php include 'headlinks.php'; ?>
    <!-- HeaderLinks Include Here -->
</head>

<body class="<?php echo isset($bodyClass) ? $bodyClass : ''; ?>">
    <?php
  // <!-- Header Include Here -->
  if (!isset($without_header)) {
    include 'header.php';
  }
  // <!-- Header Include Here -->
  ?>

    <!-- Preloader -->
    <!-- <div class="loader">
        <div class="preloader__icon">
            <svg class="premium-boat" viewBox="0 0 300 220" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="hullGradient" x1="0" x2="1">
                        <stop offset="0%" stop-color="#0A3D62" />
                        <stop offset="100%" stop-color="#00A8F3" />
                    </linearGradient>
                    <linearGradient id="sailGradient" x1="0" y1="0" x2="1" y2="1">
                        <stop stop-color="#00CAFF" />
                        <stop offset="1" stop-color="#0077B6" />
                    </linearGradient>
                    <filter id="shadow">
                        <feGaussianBlur stdDeviation="3" />
                    </filter>
                </defs>
                <path class="sail" d="M145 25 L145 120 L75 120 Z" fill="url(#sailGradient)" />
                <path class="sail" d="M155 45 L155 120 L215 120 Z" fill="#0B5C8F" />
                <rect x="148" y="18" width="7" height="110" rx="3" fill="#14213D" />
                <path d="M35 125 
           C80 140 215 140 265 125
           L215 175
           C150 190 85 185 55 165Z" fill="url(#hullGradient)" />
                <path d="M80 125 H220" stroke="#ffffff" stroke-width="5" stroke-linecap="round" opacity=".8" />
                <rect x="120" y="132" width="18" height="10" rx="3" fill="#ffffff" opacity=".8" />
                <rect x="150" y="132" width="18" height="10" rx="3" fill="#ffffff" opacity=".8" />
                <rect x="180" y="132" width="18" height="10" rx="3" fill="#ffffff" opacity=".8" />
                <ellipse cx="150" cy="190" rx="90" ry="12" fill="#00A8F3" opacity=".25" filter="url(#shadow)" />
                <path class="wave" d="M25 185
        C60 165 95 205 130 185
        C165 165 205 205 275 180" fill="none" stroke="#00CAFF" stroke-width="7" stroke-linecap="round" />
                <path class="wave wave2" d="M40 205
        C80 185 110 220 150 200
        C190 180 220 215 270 195" fill="none" stroke="#0077B6" stroke-width="5" stroke-linecap="round" />

            </svg>
        </div>
        <div class="loader____text mt-4">
            <h2>HOT BOAT WEEKEND...</h2>
        </div>
    </div> -->
    <!-- Preloader -->

    <!-- cursor Animation  -->
    <div class="ball">
        <div class="kite-wrapper" id="kiteWrapper">
            <div class="glow-ring"></div>
            <svg class="kite-svg" viewBox="0 0 220 220" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <!-- dreamy teal gradient -->
                    <linearGradient id="kiteGrad" x1="0" y1="0" x2="1" y2="1">
                        <stop offset="0%" stop-color="#3dd6c9" />
                        <stop offset="40%" stop-color="#1fa89b" />
                        <stop offset="100%" stop-color="#0f7a6e" />
                    </linearGradient>

                    <!-- orange accent gradient -->
                    <linearGradient id="orangeAccent" x1="0" y1="0" x2="1" y2="1">
                        <stop offset="0%" stop-color="#ff8c1a" />
                        <stop offset="100%" stop-color="#e06600" />
                    </linearGradient>

                    <!-- subtle shadow filter -->
                    <filter id="kiteShadow" x="-10%" y="-10%" width="130%" height="130%">
                        <feDropShadow dx="2" dy="8" stdDeviation="6" flood-color="#030a1a" flood-opacity="0.5" />
                    </filter>

                    <!-- string glow -->
                    <filter id="stringGlow" x="-20%" y="-20%" width="140%" height="140%">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="1.5" result="blur" />
                        <feMerge>
                            <feMergeNode in="blur" />
                            <feMergeNode in="SourceGraphic" />
                        </feMerge>
                    </filter>
                </defs>

                <!-- === TAIL STRING (with wave animation) === -->
                <path id="kiteString" d="M110 150 C120 172 94 188 108 210" stroke="#c0e4ff" stroke-width="2.2"
                    fill="none" opacity="0.75" filter="url(#stringGlow)" stroke-linecap="round" />

                <!-- === MAIN KITE BODY (with shadow) === -->
                <g id="kiteBody" filter="url(#kiteShadow)">
                    <!-- primary kite shape -->
                    <path d="M110 16 Q180 68 162 136 Q110 152 58 136 Q40 68 110 16Z" fill="url(#kiteGrad)" />

                    <!-- inner geometric pattern (delicate mandala) -->
                    <path
                        d="M110 38 L126 58 L148 54 L142 78 L162 90 L146 110 L156 132 L130 126 L120 148 L110 132 L100 148 L74 126 L64 110 L78 90 L62 78 L82 54 L104 58 Z"
                        fill="none" stroke="#ffffff" stroke-width="1.8" opacity="0.35" stroke-linejoin="round" />

                    <!-- subtle dashed circle -->
                    <circle cx="110" cy="88" r="28" fill="none" stroke="#ffffff" stroke-width="1.4"
                        stroke-dasharray="4,5" opacity="0.4" />

                    <!-- crossing structural lines (black) -->
                    <path d="M110 16 Q70 76 58 136" stroke="#0a1a2b" stroke-width="2.5" opacity="0.5" />
                    <path d="M110 16 Q150 76 162 136" stroke="#0a1a2b" stroke-width="2.5" opacity="0.5" />
                    <path d="M110 16 L110 152" stroke="#0a1a2b" stroke-width="2.5" opacity="0.5" />

                    <!-- ORANGE CORNER ACCENTS (semi-circles & circles) -->
                    <!-- left bottom cap -->
                    <path d="M 58 136 A 14 14 0 0 1 72 122 L 58 122 Z" fill="url(#orangeAccent)" />
                    <!-- right bottom cap -->
                    <path d="M 162 136 A 14 14 0 0 0 148 122 L 162 122 Z" fill="url(#orangeAccent)" />

                    <!-- top corner circle -->
                    <circle cx="110" cy="26" r="9" fill="url(#orangeAccent)" />
                    <!-- left corner circle -->
                    <circle cx="66" cy="130" r="9" fill="url(#orangeAccent)" />
                    <!-- right corner circle -->
                    <circle cx="154" cy="130" r="9" fill="url(#orangeAccent)" />

                    <!-- bottom knot (green) -->
                    <path d="M100 147 L120 147 L110 162 Z" fill="#2bd67b" stroke="#1a9e5a" stroke-width="1.2" />
                </g>

                <!-- === TAIL RIBBONS (fluttering group) === -->
                <g id="tailGroup">
                    <path d="M105 156 L93 172 L112 180 Z" fill="#2bd67b" />
                    <path d="M105 164 L94 182 L113 190 Z" fill="#30c5ff" />
                    <path d="M105 174 L92 192 L111 200 Z" fill="#ffb347" />
                    <path d="M105 184 L88 202 L107 210 Z" fill="#c084fc" />
                </g>
            </svg>
        </div>
    </div>
    <!-- cursor Animation  -->