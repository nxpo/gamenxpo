<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.3835 0.370947V0L0 53.9204V169.451L99.7632 223L200 168.802V54.4759L99.7632 0.277758L99.3835 0.370947Z" fill="url(#paint0_linear)"/>
<path d="M102 58H93.9187V56.7233H97.1136V43.1691L93.9187 45.4774L93 44.5858L97.8655 41C98.492 41 98.8051 41.4548 98.8051 42.3467V56.7233H102V58Z" fill="white"/>
<path d="M141 159V121H58L58.0191 159H141Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M141 117V79H58L58.0191 117H141Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="49.41" y1="46.2" x2="49.49" y2="126.3" gradientUnits="userSpaceOnUse">
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