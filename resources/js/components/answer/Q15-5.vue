<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.377 0.372156V0L0 54.1622V170.21L100.761 224L202 169.559V54.7202L100.761 0.279004L100.377 0.372156Z" fill="url(#paint0_linear)"/>
<path d="M109 42.6028C109 44.5091 108.277 46.0672 106.873 47.2587C105.448 48.4135 103.642 49 101.395 49C99.5283 49 98.0635 48.5417 97 47.6252L97.6829 46.4706C98.0642 46.6906 98.4853 46.9107 98.9068 47.1124C99.6693 47.424 100.613 47.589 101.737 47.589C103.201 47.589 104.485 47.1487 105.609 46.2872C106.753 45.4073 107.315 44.1975 107.315 42.6395C107.315 41.283 106.833 40.2934 105.85 39.6151C105.027 39.0102 103.984 38.717 102.66 38.717C101.536 38.717 100.612 39.1201 99.9297 39.945L99.087 40.0183L99.6896 31H108.378L108.098 32.4115H101.235L100.873 37.672C101.576 37.4337 102.338 37.3055 103.161 37.3055C104.726 37.3055 106.09 37.7454 107.194 38.6436C108.398 39.6334 109 40.953 109 42.6028Z" fill="white"/>
<path d="M142 117V78H61L61.0191 117H142Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M142 157V118H61L61.0191 157H142Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="92.0637" y1="85.9892" x2="92.2084" y2="235.074" gradientUnits="userSpaceOnUse">
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