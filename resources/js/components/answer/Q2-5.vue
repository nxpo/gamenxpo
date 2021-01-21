<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M200 169.559V54.7205L99.7629 0.279231L99.3835 0.372157V0L0 54.162V170.21L99.7629 224L200 169.559Z" fill="url(#paint0_linear)"/>
<path d="M109 36.6029C109 38.5092 108.293 40.0671 106.878 41.2585C105.463 42.4133 103.64 43 101.408 43C99.5313 43 98.0619 42.5418 97 41.6253L97.6946 40.4705C98.076 40.6904 98.4834 40.9103 98.919 41.112C99.6798 41.4236 100.619 41.5886 101.735 41.5886C103.205 41.5886 104.497 41.1487 105.612 40.2872C106.756 39.4074 107.326 38.1976 107.326 36.6396C107.326 35.2832 106.836 34.2933 105.856 33.6151C105.042 33.0103 103.98 32.717 102.673 32.717C101.531 32.717 100.619 33.1201 99.9388 33.945L99.0816 34.0183L99.6939 25H108.388L108.103 26.4114H101.246L100.878 31.6721C101.585 31.4338 102.348 31.3056 103.163 31.3056C104.742 31.3056 106.089 31.7455 107.203 32.6436C108.402 33.6334 109 34.9532 109 36.6029Z" fill="white"/>
<path d="M144 155H103V75L144 75.0184V155Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M103 155H61V75L103 75.0184V155Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="95.1241" y1="85.9892" x2="95.2591" y2="235.074" gradientUnits="userSpaceOnUse">
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