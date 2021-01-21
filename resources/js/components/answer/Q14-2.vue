<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.262 0.279231L99.976 0.372157V0L0 54.162V170.21L100.262 224L201 169.559V54.7205L100.262 0.279231Z" fill="url(#paint0_linear)"/>
<path d="M101 50.4557L100.72 52H90C90.0876 51.3354 90.2624 50.573 90.4901 49.7325C91.5236 48.5596 92.6449 47.3281 93.8711 45.9989C95.1148 44.6697 96.4983 42.9887 98.0047 40.9558C98.7755 39.8025 99.1431 38.7274 99.1431 37.6914C99.1431 36.6554 98.8454 35.854 98.2673 35.3067C97.6718 34.7593 96.9017 34.466 95.9383 34.466C93.8013 34.466 92.5921 35.6586 92.3119 38.0433L91.0332 37.6522C91.1733 36.108 91.7167 34.9353 92.6625 34.1143C93.5209 33.3715 94.6246 33 95.9734 33C97.3047 33 98.408 33.4693 99.2663 34.388C100.142 35.2872 100.58 36.4405 100.58 37.8088C100.58 39.8221 99.1438 42.3633 96.3061 45.3931C94.2392 47.6801 92.7678 49.3611 91.927 50.4557H101Z" fill="white"/>
<path d="M142 152H100V72L142 72.0184V152Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M100 113V152H58L58.0201 113H100Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M58 72H100V92H58V72Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M58 92H100V112H58V92Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="92.4657" y1="85.9892" x2="92.6111" y2="235.074" gradientUnits="userSpaceOnUse">
<stop stop-color="#3F88DE"/>
<stop offset="1" stop-color="#1E3966"/>
</linearGradient>
</defs>
</svg>

</template>
<script>
export default {
  data() {
    return {
             active: false

    };
  },
  methods: {



  },
  mounted() {
  },
};
</script>