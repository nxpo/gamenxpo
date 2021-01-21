<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.262 0.276738L99.8801 0.368834V0L0 53.6784V168.69L100.262 222L201 168.045V54.2319L100.262 0.276738Z" fill="url(#paint0_linear)"/>
<path d="M103 58H94.9369V56.6482H98.1251V42.2963L94.9369 44.7409L94 43.7964L98.8749 40C99.4999 40 99.8118 40.4815 99.8118 41.426V56.6482H103V58Z" fill="white"/>
<path d="M53 85.0381L53.0754 126L73 125.962L72.9053 85L53 85.0381Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M95 126.037L95.0754 166L115 165.963L114.905 126L95 126.037Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M95 85L94.867 166H75V85H95Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M136 85L135.874 166H117V85H136Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="109.525" y1="75.6294" x2="109.668" y2="223.383" gradientUnits="userSpaceOnUse">
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