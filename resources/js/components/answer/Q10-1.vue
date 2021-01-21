<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.8804 0.372156V0L0 54.1622V170.21L100.262 224L201 169.559V54.7202L100.262 0.279004L99.8804 0.372156Z" fill="url(#paint0_linear)"/>
<path d="M104 54H95.9187V52.5731H99.1136V37.4239L95.9187 40.0038L95 39.0068L99.8655 35C100.492 35 100.805 35.5078 100.805 36.5047V52.5731H104V54Z" fill="white"/>
<path d="M139 99L57.0189 98.9801L57 78.1193L138.981 78L139 99Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M139 140L57.0377 139.981L57 120.114L138.981 120L139 140Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M139 159L57.0189 158.982L57 140.108L138.962 140L139 159Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M139 118L57.0189 117.982L57 99.108L138.962 99L139 118Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
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