<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M200 169.559V54.7205L99.7625 0.279231L99.3837 0.372157V0L0 54.162V170.21L99.7625 224L200 169.559Z" fill="url(#paint0_linear)"/>
<path d="M109 46.6029C109 48.5092 108.277 50.0671 106.873 51.2585C105.448 52.4133 103.642 53 101.395 53C99.5283 53 98.0635 52.5418 97 51.6253L97.6829 50.4705C98.0642 50.6904 98.4853 50.9103 98.9068 51.112C99.6693 51.4236 100.613 51.5886 101.737 51.5886C103.201 51.5886 104.485 51.1487 105.609 50.2872C106.753 49.4074 107.315 48.1976 107.315 46.6396C107.315 45.2832 106.833 44.2933 105.85 43.6151C105.027 43.0103 103.984 42.717 102.66 42.717C101.536 42.717 100.612 43.1201 99.9297 43.945L99.087 44.0183L99.6896 35H108.378L108.098 36.4114H101.235L100.873 41.6721C101.576 41.4338 102.338 41.3056 103.161 41.3056C104.726 41.3056 106.09 41.7455 107.194 42.6436C108.398 43.6334 109 44.9532 109 46.6029Z" fill="white"/>
<path d="M100 103.09L60.0372 103L60 121.91L99.9628 122L100 103.09Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M142 103.09L101.038 103L101 121.91L141.962 122L142 103.09Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M100 81.0895L60.0553 81L60 99.9105L99.9447 100L100 81.0895Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M100 142H60.0554L60 161.906L100 162V142Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M60 141L141.962 140.982L142 122.108L60.0193 122L60 141Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="91.0574" y1="85.9892" x2="91.2035" y2="235.074" gradientUnits="userSpaceOnUse">
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