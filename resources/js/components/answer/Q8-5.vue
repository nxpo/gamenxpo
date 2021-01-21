<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.3835 0.370495V0L0 53.9202V169.45L99.7632 223L200 168.802V54.4762L99.7632 0.277985L99.3835 0.370495Z" fill="url(#paint0_linear)"/>
<path d="M58 157V117H142V157H58Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M58 117V78H142V117H58Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M102 47.6029C102 49.5092 101.277 51.0671 99.8728 52.2585C98.448 53.4133 96.642 54 94.3945 54C92.5283 54 91.0635 53.5418 90 52.6253L90.682 51.4705C91.0632 51.6904 91.4849 51.9103 91.9063 52.112C92.6688 52.4236 93.6118 52.5886 94.7355 52.5886C96.2004 52.5886 97.4846 52.1487 98.6083 51.2872C99.7521 50.4074 100.314 49.1976 100.314 47.6396C100.314 46.2832 99.8326 45.2933 98.8494 44.6151C98.0266 44.0103 96.9829 43.717 95.6585 43.717C94.5348 43.717 93.612 44.1201 92.9297 44.945L92.0866 45.0183L92.6887 36H101.378L101.097 37.4114H94.2339L93.8728 42.6721C94.5751 42.4338 95.3375 42.3056 96.1602 42.3056C97.7254 42.3056 99.09 42.7455 100.194 43.6436C101.398 44.6334 102 45.9532 102 47.6029Z" fill="white"/>
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