<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.3836 0.369284V0L0 53.6786V168.691L99.7629 222L200 168.045V54.2316L99.7629 0.276513L99.3836 0.369284Z" fill="url(#paint0_linear)"/>
<path d="M101 57H92.9353V55.6482H96.119V41.2967L92.9353 43.7407L92 42.7968L96.8831 39C97.5052 39 97.8162 39.4815 97.8162 40.4259V55.6482H101V57Z" fill="white"/>
<path d="M76 163.962L56.0246 164L56 82H75.9263L76 163.962Z" fill="#F7941F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M98 163.962L78.0246 164L78 82H97.9263L98 163.962Z" fill="#F7941F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M98 124H141V143H98V124Z" fill="#F7941F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M98 144H141V164H98V144Z" fill="#F7941F" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="49.413" y1="46.2" x2="49.488" y2="126.3" gradientUnits="userSpaceOnUse">
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