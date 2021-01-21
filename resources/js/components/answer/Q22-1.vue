<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.262 0.277758L99.8801 0.370495V0L0 53.9204V169.45L100.262 223L201 168.802V54.4759L100.262 0.277758Z" fill="url(#paint0_linear)"/>
<path d="M108 52H99.9369V50.5731H103.125V35.4239L99.9369 38.0038L99 37.0068L103.875 33C104.5 33 104.812 33.5078 104.812 34.5047V50.5731H108V52Z" fill="white"/>
<path d="M105 75.0943L63.0591 75L63 94.9251L104.961 95L105 75.0943Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M63 137L147.981 136.98L148 116.119L63.0191 116L63 137Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M63 156L147.981 155.982L148 137.108L63.0191 137L63 156Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M63 115L147.981 114.981L148 95.1136L63.0191 95L63 115Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="109.525" y1="75.9701" x2="109.67" y2="224.39" gradientUnits="userSpaceOnUse">
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