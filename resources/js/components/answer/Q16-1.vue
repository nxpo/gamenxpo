<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.761 0.275267L100.377 0.367172V0L0 53.4368V167.93L100.761 221L202 167.288V53.9873L100.761 0.275267Z" fill="url(#paint0_linear)"/>
<path d="M55 96.0943L96.9419 96L97 115.906L55.0581 116L55 96.0943Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M55 137.071L96.9419 137L97 155.928L55.0581 156L55 137.071Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M97 137.071L139.941 137L140 155.928L97.0595 156L97 137.071Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M55 75.0943L96.9609 75L97 94.9062L55.0391 95L55 75.0943Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M55 116.075L96.9609 116L97 135.925L55.0391 136L55 116.075Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M97 116.075L139.96 116L140 135.925L97.04 136L97 116.075Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M103 51H95.8166V49.6482H98.657V35.2963L95.8166 37.7404L95 36.7959L99.3249 33C99.8817 33 100.16 33.4811 100.16 34.4255V49.6482H103V51Z" fill="white"/>
<defs>
<linearGradient id="paint0_linear" x1="110.07" y1="75.2887" x2="110.211" y2="222.377" gradientUnits="userSpaceOnUse">
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