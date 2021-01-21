<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.262 0.279004L99.8804 0.372156V0L0 54.1622V170.21L100.262 224L201 169.559V54.7202L100.262 0.279004Z" fill="url(#paint0_linear)"/>
<path d="M107 56H99.8166V54.6482H102.657V40.2963L99.8166 42.7404L99 41.7959L103.325 38C103.882 38 104.16 38.4811 104.16 39.4255V54.6482H107V56Z" fill="white"/>
<path d="M102 159H62V79L102 79.0184V159Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M104 79H145V97H104V79Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M104 98H145V119H104V98Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M104 120H145V138H104V120Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
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