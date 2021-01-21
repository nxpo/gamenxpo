<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.8804 0.370495V0L0 53.9204V169.45L100.262 223L201 168.802V54.4759L100.262 0.277758L99.8804 0.370495Z" fill="url(#paint0_linear)"/>
<path d="M108 45.3136C108 47.0081 107.217 48.3931 105.696 49.4522C104.152 50.4787 102.196 51 99.7608 51C97.739 51 96.1522 50.5927 95 49.778L95.7388 48.7517C96.1518 48.9472 96.6086 49.1429 97.0651 49.3221C97.8912 49.5991 98.9128 49.7458 100.13 49.7458C101.717 49.7458 103.108 49.3544 104.326 48.5886C105.565 47.8065 106.174 46.7311 106.174 45.3462C106.174 44.1405 105.652 43.2608 104.587 42.6579C103.695 42.1202 102.565 41.8595 101.13 41.8595C99.9127 41.8595 98.913 42.2179 98.1738 42.9511L97.2604 43.0163L97.9127 35H107.326L107.022 36.2546H99.5867L99.1955 40.9307C99.9564 40.7189 100.782 40.6049 101.674 40.6049C103.369 40.6049 104.847 40.9959 106.043 41.7943C107.348 42.6741 108 43.8471 108 45.3136Z" fill="white"/>
<path d="M139 98H99.0186L99 117H139V98Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M139 77H99.0186L99 97H139V77Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M139 117H99.0186L99 139H139V117Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M76 77V117H57L57.018 77H76Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M98 77V117H76L76.0208 77H98Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M98 117V159H76L76.0208 117H98Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="48.06" y1="46.2" x2="48.14" y2="126.3" gradientUnits="userSpaceOnUse">
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