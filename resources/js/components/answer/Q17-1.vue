<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.761 0.276513L100.377 0.369284V0L0 53.6786V168.691L100.761 222L202 168.045V54.2316L100.761 0.276513Z" fill="url(#paint0_linear)"/>
<path d="M106 57H97.9187V55.6482H101.114V41.2967L97.9187 43.7407L97 42.7968L101.866 39C102.492 39 102.805 39.4815 102.805 40.4259V55.6482H106V57Z" fill="white"/>
<path d="M145 115V75H62L62.0196 115H145Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M145 155V116H62L62.0196 155H145Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="110.07" y1="75.6294" x2="110.212" y2="223.383" gradientUnits="userSpaceOnUse">
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