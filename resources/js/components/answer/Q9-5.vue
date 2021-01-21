<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.3835 0.372156V0L0 54.1622V170.21L99.7632 224L200 169.559V54.7202L99.7632 0.279004L99.3835 0.372156Z" fill="url(#paint0_linear)"/>
<path d="M103 47.6028C103 49.5091 102.277 51.0672 100.873 52.2587C99.448 53.4135 97.642 54 95.3945 54C93.5283 54 92.0635 53.5417 91 52.6252L91.682 51.4706C92.0632 51.6906 92.4849 51.9107 92.9063 52.1124C93.6688 52.424 94.6118 52.589 95.7355 52.589C97.2004 52.589 98.4846 52.1487 99.6083 51.2872C100.752 50.4073 101.314 49.1975 101.314 47.6395C101.314 46.283 100.833 45.2934 99.8494 44.6151C99.0266 44.0102 97.9829 43.717 96.6585 43.717C95.5348 43.717 94.612 44.1201 93.9297 44.945L93.0866 45.0183L93.6887 36H102.378L102.097 37.4115H95.2339L94.8728 42.672C95.5751 42.4337 96.3375 42.3055 97.1602 42.3055C98.7254 42.3055 100.09 42.7454 101.194 43.6436C102.398 44.6334 103 45.953 103 47.6028Z" fill="white"/>
<path d="M139 119V79H57L57.0189 119H139Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M75 159L74.983 120H57L57.034 159H75Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M98 159L97.9811 120H78L78.0378 159H98Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M118 159L117.982 120H99L99.0359 159H118Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="48.06" y1="46.2" x2="48.14" y2="126.3" gradientUnits="userSpaceOnUse">
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