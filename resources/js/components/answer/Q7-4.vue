<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M200 168.802V54.4762L99.7627 0.277985L99.3835 0.370608V0L0 53.9202V169.45L99.7627 223L200 168.802Z" fill="url(#paint0_linear)"/>
<path d="M100.109 47.5413V36.8813C98.4828 37.7176 97.1509 39.1798 96.0959 41.2697C95.0928 43.2616 94.5568 45.3534 94.5049 47.5413H100.109ZM101.51 47.5413H104L103.827 48.9055H101.51V53H100.109V48.9055H93C93.0519 45.2428 93.8304 42.1442 95.3523 39.6098C96.9089 37.0772 98.9499 35.5406 101.51 35V47.5413Z" fill="white"/>
<path d="M140 138L56.0193 137.982L56 119.11L139.981 119L140 138Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M140 160L56.0193 159.981L56 140.115L139.981 140L140 160Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M56 99H99V119L56 118.994V99Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="48.8596" y1="46.2" x2="48.9396" y2="126.3" gradientUnits="userSpaceOnUse">
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