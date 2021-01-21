<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.262 0.276738L99.976 0.368834V0L0 53.6784V168.69L100.262 222L201 168.045V54.2319L100.262 0.276738Z" fill="url(#paint0_linear)"/>
<path d="M102 54.537L101.695 56H90C90.0955 55.3704 90.2862 54.6481 90.5346 53.8518C91.6621 52.7407 92.8849 51.574 94.2417 50.3147C95.5793 49.0555 97.0891 47.463 98.7324 45.5371C99.5732 44.4445 99.9743 43.4259 99.9743 42.4444C99.9743 41.463 99.6495 40.7038 99.0189 40.1853C98.3692 39.6668 97.5292 39.3889 96.4782 39.3889C94.1469 39.3889 92.8278 40.5186 92.522 42.7779L91.1271 42.4074C91.28 40.9444 91.8727 39.8334 92.9046 39.0557C93.8409 38.352 95.0451 38 96.5164 38C97.9687 38 99.1724 38.4446 100.109 39.315C101.064 40.1668 101.542 41.2594 101.542 42.5557C101.542 44.4631 99.975 46.8704 96.8794 49.7408C94.6245 51.9074 93.0194 53.5 92.1022 54.537H102Z" fill="white"/>
<path d="M52 85.0381L52.0792 126L73 125.962L72.9006 85L52 85.0381Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M117 85.0381L117.072 126L136 125.962L135.91 85L117 85.0381Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M94 85L93.867 166H74V85H94Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M116 85L115.854 166H94V85H116Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="92.4657" y1="85.2214" x2="92.6085" y2="232.975" gradientUnits="userSpaceOnUse">
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