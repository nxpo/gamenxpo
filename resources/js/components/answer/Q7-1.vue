<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.7632 0.277985L99.3835 0.370608V0L0 53.9202V169.45L99.7632 223L200 168.802V54.4762L99.7632 0.277985Z" fill="url(#paint0_linear)"/>
<path d="M107 55H98.9187V53.6443H102.114V39.2965L98.9187 41.7448L98 40.8022L102.866 37C103.492 37 103.805 37.4759 103.805 38.4297V53.6443H107V55Z" fill="white"/>
<path d="M144 138L63.0186 137.982L63 119.11L143.981 119L144 138Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M144 160L63.0186 159.981L63 140.115L143.981 140L144 160Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M144 119V78.0019L124 78V119H144Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="57.46" y1="41" x2="57.54" y2="121.1" gradientUnits="userSpaceOnUse">
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