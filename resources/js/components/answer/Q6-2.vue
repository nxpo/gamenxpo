<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.763 0.277758L99.3836 0.370947V0L0 53.9204V169.451L99.763 223L200 168.802V54.4759L99.763 0.277758Z" fill="url(#paint0_linear)"/>
<path d="M105 54.6183L104.663 56H92C92.1138 55.4054 92.3103 54.723 92.5896 53.971C93.7957 52.9216 95.128 51.8195 96.5864 50.6302C98.0449 49.441 99.6709 47.9367 101.467 46.1178C102.362 45.086 102.811 44.1242 102.811 43.1973C102.811 42.2703 102.462 41.5537 101.76 41.064C101.059 40.5743 100.147 40.3117 99.0255 40.3117C96.5016 40.3117 95.0721 41.3787 94.7349 43.5124L93.2206 43.1623C93.3881 41.7806 94.0336 40.7311 95.1548 39.9966C96.1644 39.332 97.4698 39 99.0689 39C100.639 39 101.928 39.4197 102.937 40.2417C103.976 41.0462 104.495 42.0781 104.495 43.3023C104.495 45.1037 102.811 47.3771 99.4475 50.088C97.0064 52.1342 95.281 53.6389 94.2715 54.6183H105Z" fill="white"/>
<path d="M144 102L63.0261 101.982L63 83.108L143.972 83L144 102Z" fill="#FFAD0F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M144 144L63.0279 143.982L63 125.108L143.972 125L144 144Z" fill="#FFAD0F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M144 165L63.0261 164.981L63 145.114L143.972 145L144 165Z" fill="#FFAD0F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M144 125L63.0261 124.981L63 105.114L143.974 105L144 125Z" fill="#FFAD0F" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="57.8116" y1="41" x2="57.8866" y2="121.1" gradientUnits="userSpaceOnUse">
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