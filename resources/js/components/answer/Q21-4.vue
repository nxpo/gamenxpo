<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.8806 0.370495V0L0 53.9204V169.45L100.262 223L201 168.802V54.4759L100.262 0.277758L99.8806 0.370495Z" fill="url(#paint0_linear)"/>
<path d="M102.033 49.5382V38.869C99.9671 39.7218 98.2751 41.1733 96.9344 43.26C95.6596 45.256 94.9779 47.3427 94.9339 49.5382H102.033ZM103.814 49.5382H107L106.759 50.8991H103.814V55H102.033V50.8991H93C93.0659 47.2338 94.0547 44.1493 95.9889 41.609C97.967 39.0686 100.561 37.5444 103.814 37V49.5382Z" fill="white"/>
<path d="M118 78L117.874 158H99L99.1247 78H118Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M99 78L98.8678 158H79L79.1312 78H99Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M56 120.035L56.0754 158L76 157.965L75.9053 120L56 120.035Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M119 120.035L119.083 158L141 157.965L140.896 120L119 120.035Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="91.608" y1="85.6053" x2="91.7521" y2="234.025" gradientUnits="userSpaceOnUse">
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