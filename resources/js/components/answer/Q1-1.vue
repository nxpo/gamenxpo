<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)"/>
<path d="M106 54H97.0392V52.6443H100.577V38.2965L97.0392 40.7448L96 39.8022L101.426 36C102.117 36 102.462 36.4759 102.462 37.4297V52.6443H106V54Z" fill="white"/>
<path d="M80 80L79.8676 160H60V80H80Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M123 80L122.854 160H101V80H123Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M100 80L99.8676 160H80V80H100Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M142 80L141.874 160H123V80H142Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="95.1241" y1="85.9892" x2="95.2591" y2="235.074" gradientUnits="userSpaceOnUse">
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

   <style>
      .shadow {
        -webkit-filter: drop-shadow( 4px 4px 3px rgba(0, 0, 0, .7));
        filter: drop-shadow( 4px 4px 3px rgba(0, 0, 0, .7));
      }
    </style>