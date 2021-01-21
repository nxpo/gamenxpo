<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.7629 0.276738L99.4786 0.368947V0L0 53.6784V168.691L99.7629 222L200 168.045V54.2319L99.7629 0.276738Z" fill="url(#paint0_linear)"/>
<path d="M144 101V62H62L62.0193 101H144Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M144 163V123H62L62.0193 163H144Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M144 123L62.0184 122.979L62 103.114L143.962 103L144 123Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M110 43.5314L109.669 45H97C97.1035 44.3722 97.3101 43.6573 97.5792 42.8535C98.8006 41.7497 100.126 40.5699 101.575 39.3142C103.045 38.0585 104.68 36.4639 106.46 34.5304C107.371 33.4525 107.806 32.4228 107.806 31.443C107.806 30.4633 107.454 29.7114 106.77 29.1836C106.067 28.6558 105.157 28.3928 104.018 28.3928C101.492 28.3928 100.063 29.5225 99.7322 31.782L98.2211 31.4061C98.3867 29.9504 99.0288 28.8317 100.147 28.0539C101.161 27.3519 102.465 27 104.059 27C105.633 27 106.937 27.4389 107.951 28.3168C108.986 29.1706 109.504 30.2504 109.504 31.5561C109.504 33.4637 107.806 35.862 104.453 38.7494C102.01 40.9088 100.271 42.5017 99.2773 43.5314H110Z" fill="white"/>
<defs>
<linearGradient id="paint0_linear" x1="92.0057" y1="85.2214" x2="92.1492" y2="232.975" gradientUnits="userSpaceOnUse">
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