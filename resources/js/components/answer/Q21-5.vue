<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M200 168.802V54.4759L99.7625 0.277758L99.3837 0.370495V0L0 53.9204V169.45L99.7625 223L200 168.802Z" fill="url(#paint0_linear)"/>
<path d="M109 45.6028C109 47.5091 108.217 49.0672 106.696 50.2587C105.152 51.4135 103.196 52 100.761 52C98.739 52 97.1522 51.5417 96 50.6252L96.7399 49.4706C97.1529 49.6906 97.6091 49.9107 98.0656 50.1124C98.8917 50.424 99.9138 50.589 101.131 50.589C102.718 50.589 104.109 50.1487 105.326 49.2872C106.565 48.4073 107.174 47.1975 107.174 45.6395C107.174 44.283 106.653 43.2934 105.587 42.6151C104.696 42.0102 103.566 41.717 102.131 41.717C100.914 41.717 99.913 42.1201 99.1738 42.945L98.261 43.0183L98.9138 34H108.326L108.022 35.4115H100.588L100.196 40.672C100.957 40.4337 101.783 40.3055 102.675 40.3055C104.37 40.3055 105.848 40.7454 107.044 41.6436C108.348 42.6334 109 43.953 109 45.6028Z" fill="white"/>
<path d="M101 117H141.943L142 135.929L101 136V117Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M142 114L58.0387 113.981L58 94.1136L141.981 94L142 114Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M142 155L58.0387 154.982L58 136.108L141.981 136L142 155Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M142 94L58.0189 93.982L58 75.108L141.981 75L142 94Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="91.0574" y1="85.6053" x2="91.2022" y2="234.025" gradientUnits="userSpaceOnUse">
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