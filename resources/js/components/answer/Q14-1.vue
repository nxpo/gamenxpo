<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.262 0.279231L99.8801 0.372157V0L0 54.162V170.21L100.262 224L201 169.559V54.7205L100.262 0.279231Z" fill="url(#paint0_linear)"/>
<path d="M104 54H95.9187V52.6482H99.1141V38.2963L95.9187 40.7409L95 39.7964L99.8655 36C100.492 36 100.805 36.4815 100.805 37.426V52.6482H104V54Z" fill="white"/>
<path d="M80 72L79.8603 152H59V72H80Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M102 72L101.86 152H81V72H102Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M143 152H102V72L143 72.0184V152Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="109.525" y1="76.3108" x2="109.671" y2="225.396" gradientUnits="userSpaceOnUse">
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