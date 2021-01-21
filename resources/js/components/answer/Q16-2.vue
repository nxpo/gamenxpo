<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.262 0.275267L99.976 0.367172V0L0 53.4368V167.93L100.262 221L201 167.288V53.9873L100.262 0.275267Z" fill="url(#paint0_linear)"/>
<path d="M76 75L75.867 155H56V75H76Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M118 75L117.867 155H98V75H118Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M97 75L96.8603 155H76V75H97Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M138 75L137.867 155H118V75H138Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M100 47.537L99.7457 49H90C90.0796 48.3704 90.2385 47.6483 90.4455 46.852C91.3851 45.7409 92.4045 44.5744 93.5192 43.3151C94.6498 42.0559 95.9076 40.4631 97.277 38.5372C97.9777 37.4446 98.312 36.4262 98.312 35.4447C98.312 34.4632 98.0412 33.7036 97.5157 33.1851C96.9743 32.6665 96.2743 32.3889 95.3985 32.3889C93.4557 32.3889 92.3565 33.5187 92.1017 35.7779L90.9393 35.4077C91.0667 33.9447 91.5606 32.8335 92.4205 32.0557C93.2008 31.352 94.2042 31 95.4304 31C96.6406 31 97.6436 31.4444 98.4239 32.3147C99.2201 33.1666 99.6182 34.2592 99.6182 35.5555C99.6182 37.4629 98.3125 39.8706 95.7328 42.7409C93.8538 44.9076 92.5162 46.4999 91.7518 47.537H100Z" fill="white"/>
<defs>
<linearGradient id="paint0_linear" x1="92.4657" y1="84.8376" x2="92.6072" y2="231.926" gradientUnits="userSpaceOnUse">
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