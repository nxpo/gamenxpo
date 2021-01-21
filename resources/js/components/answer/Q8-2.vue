<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.7627 0.277985L99.4784 0.370495V0L0 53.9202V169.45L99.7627 223L200 168.802V54.4762L99.7627 0.277985Z" fill="url(#paint0_linear)"/>
<path d="M92 76L91.8745 157H73V76H92Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M135 76L134.861 157H114V76H135Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M114 76L113.868 157H94V76H114Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M103 50.537L102.694 52H91C91.0955 51.3704 91.2867 50.6481 91.5351 49.8518C92.6625 48.7407 93.8853 47.574 95.2228 46.3147C96.5795 45.0555 98.0888 43.463 99.7321 41.5371C100.573 40.4445 100.974 39.4259 100.974 38.4444C100.974 37.463 100.65 36.7038 100.019 36.1853C99.3693 35.6668 98.5284 35.3889 97.4775 35.3889C95.1463 35.3889 93.8277 36.5186 93.5219 38.7779L92.1271 38.4074C92.28 36.9444 92.8726 35.8334 93.9045 35.0557C94.8408 34.352 96.0444 34 97.5157 34C98.9679 34 100.172 34.4446 101.108 35.315C102.064 36.1668 102.541 37.2594 102.541 38.5557C102.541 40.4631 100.974 42.8704 97.8787 45.7408C95.6239 47.9074 94.0188 49.5 93.1016 50.537H103Z" fill="white"/>
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