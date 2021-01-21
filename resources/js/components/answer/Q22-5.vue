<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M200 168.045V54.2316L99.7625 0.276513L99.3837 0.368834V0L0 53.6786V168.69L99.7625 222L200 168.045Z" fill="url(#paint0_linear)"/>
<path d="M110 36.2474C110 38.2596 109.217 39.9043 107.696 41.162C106.152 42.3809 104.196 43 101.761 43C99.739 43 98.1522 42.5163 97 41.5489L97.7399 40.3301C98.1529 40.5623 98.6091 40.7947 99.0656 41.0075C99.8917 41.3364 100.914 41.5106 102.131 41.5106C103.718 41.5106 105.109 41.0458 106.326 40.1364C107.565 39.2077 108.174 37.9307 108.174 36.2861C108.174 34.8543 107.653 33.8097 106.587 33.0938C105.696 32.4553 104.566 32.1457 103.131 32.1457C101.914 32.1457 100.913 32.5712 100.174 33.4419L99.261 33.5194L99.9138 24H109.326L109.022 25.4899H101.588L101.196 31.0427C101.957 30.7912 102.783 30.6558 103.675 30.6558C105.37 30.6558 106.848 31.1201 108.044 32.0682C109.348 33.113 110 34.506 110 36.2474Z" fill="white"/>
<path d="M83 67L82.8678 148H63L63.1312 67H83Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M126 67L125.855 148H104L104.144 67H126Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M103 67L102.868 148H83L83.1312 67H103Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M145 67L144.874 148H126L126.125 67H145Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="91.0574" y1="85.2214" x2="91.2009" y2="232.975" gradientUnits="userSpaceOnUse">
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