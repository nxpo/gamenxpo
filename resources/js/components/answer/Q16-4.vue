<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.3837 0.372156V0L0 54.1622V170.21L99.7634 224L200 169.559V54.7202L99.7634 0.279004L99.3837 0.372156Z" fill="url(#paint0_linear)"/>
<path d="M138 120V79H56L56.0193 120H138Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M138 160V120H56L56.0193 160H138Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M99.4622 47.5382V36.869C97.9842 37.7218 96.7737 39.1733 95.8146 41.26C94.9026 43.256 94.4145 45.3427 94.3674 47.5382H99.4622ZM100.736 47.5382H103L102.843 48.8991H100.736V53H99.4622V48.8991H93C93.0472 45.2338 93.7545 42.1493 95.1382 39.609C96.5533 37.0686 98.4088 35.5444 100.736 35V47.5382Z" fill="white"/>
<defs>
<linearGradient id="paint0_linear" x1="91.1522" y1="85.9892" x2="91.2983" y2="235.074" gradientUnits="userSpaceOnUse">
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