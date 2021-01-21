<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.3835 0.372157V0L0 54.162V170.21L99.7627 224L200 169.559V54.7205L99.7627 0.279231L99.3835 0.372157Z" fill="url(#paint0_linear)"/>
<path d="M142 102L58.0193 102.019L58 121.887L141.981 122L142 102Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M142 162V122H58L58.0193 162H142Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M97.7548 53.5382V42.8688C95.9812 43.7216 94.5283 45.1733 93.3774 47.26C92.2831 49.256 91.6983 51.3427 91.6417 53.5382H97.7548ZM99.2832 53.5382H102L101.811 54.8991H99.2832V59H97.7548V54.8991H90C90.0566 51.2338 90.9058 48.1491 92.5662 45.6088C94.2643 43.0684 96.4908 41.5444 99.2832 41V53.5382Z" fill="white"/>
<defs>
<linearGradient id="paint0_linear" x1="48.4096" y1="46.2" x2="48.4896" y2="126.3" gradientUnits="userSpaceOnUse">
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