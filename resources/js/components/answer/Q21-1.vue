<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.262 0.279004L99.8801 0.372156V0L0 54.1622V170.21L100.262 224L201 169.559V54.7202L100.262 0.279004Z" fill="url(#paint0_linear)"/>
<path d="M106 61H97.9369V59.7233H101.125V46.1687L97.9369 48.4771L97 47.5851L101.875 44C102.5 44 102.812 44.4543 102.812 45.3463V59.7233H106V61Z" fill="white"/>
<path d="M105 102.094L63.0591 102L63 121.906L104.961 122L105 102.094Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M105 83.0895L63.0591 83L63 101.91L104.961 102L105 83.0895Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M63 163L147.981 162.982L148 144.108L63.0191 144L63 163Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M63 144L147.981 143.982L148 125.108L63.0191 125L63 144Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="109.525" y1="76.3108" x2="109.671" y2="225.396" gradientUnits="userSpaceOnUse">
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