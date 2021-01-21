<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.377 0.372156V0L0 54.1622V170.21L100.761 224L202 169.559V54.7202L100.761 0.279004L100.377 0.372156Z" fill="url(#paint0_linear)"/>
<path d="M105 53H96.9353V51.5731H100.119V36.4239L96.9353 39.0038L96 38.0068L100.883 34C101.505 34 101.816 34.5078 101.816 35.5047V51.5731H105V53Z" fill="white"/>
<path d="M144 100L60.027 100.017L60 117.898L143.971 118L144 100Z" fill="#F7941F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M144 78L60.027 78.0199L60 98.8807L143.971 99L144 78Z" fill="#F7941F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M144 159V119H60L60.0039 159H144Z" fill="#F7941F" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="49.413" y1="46.2" x2="49.488" y2="126.3" gradientUnits="userSpaceOnUse">
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