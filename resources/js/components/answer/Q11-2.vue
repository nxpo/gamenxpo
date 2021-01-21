<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.76 0.277758L100.473 0.370947V0L0 53.9204V169.451L100.76 223L202 168.802V54.4759L100.76 0.277758Z" fill="url(#paint0_linear)"/>
<path d="M107 56.537L106.694 58H95C95.0955 57.3704 95.2867 56.6479 95.5351 55.8516C96.6625 54.7405 97.8853 53.5736 99.2228 52.3144C100.58 51.0551 102.089 49.4624 103.732 47.5365C104.573 46.444 104.974 45.4256 104.974 44.4442C104.974 43.4627 104.65 42.704 104.019 42.1855C103.369 41.667 102.528 41.3889 101.477 41.3889C99.1463 41.3889 97.8277 42.5186 97.5219 44.7778L96.1271 44.4071C96.28 42.9442 96.8726 41.833 97.9045 41.0552C98.8408 40.3515 100.044 40 101.516 40C102.968 40 104.172 40.4444 105.108 41.3147C106.064 42.1665 106.541 43.2591 106.541 44.5554C106.541 46.4627 104.974 48.8699 101.879 51.7402C99.6239 53.9068 98.0188 55.5 97.1016 56.537H107Z" fill="white"/>
<path d="M79 79L78.8745 161H60V79H79Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M122 79L121.861 161H101V79H122Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M101 79L100.868 161H81V79H101Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M143 79L142.868 161H123V79H143Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="49.0608" y1="46.2" x2="49.1408" y2="126.3" gradientUnits="userSpaceOnUse">
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