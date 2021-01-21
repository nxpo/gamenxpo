<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.262 0.277985L99.8804 0.370495V0L0 53.9202V169.45L100.262 223L201 168.802V54.4762L100.262 0.277985Z" fill="url(#paint0_linear)"/>
<path d="M145 157V119H62L62.0191 157H145Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M104 55H98.6124V53.6482H100.742V39.2963L98.6124 41.7409L98 40.7964L101.244 37C101.661 37 101.87 37.4815 101.87 38.426V53.6482H104V55Z" fill="white"/>
<defs>
<linearGradient id="paint0_linear" x1="57.46" y1="41" x2="57.54" y2="121.1" gradientUnits="userSpaceOnUse">
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