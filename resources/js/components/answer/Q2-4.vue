<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.3836 0.372157V0L0 54.162V170.21L99.763 224L200 169.559V54.7205L99.763 0.279231L99.3836 0.372157Z" fill="url(#paint0_linear)"/>
<path d="M99.3836 0.372157V0L0 54.162V170.21L99.763 224L200 169.559V54.7205L99.763 0.279231L99.3836 0.372157Z" fill="url(#paint1_linear)"/>
<path d="M103.39 37.5382V26.8688C101.481 27.7216 99.9018 29.1733 98.6559 31.26C97.4652 33.256 96.8423 35.3427 96.7871 37.5382H103.39ZM105.051 37.5382H108L107.792 38.8991H105.051V43H103.39V38.8991H95C95.0572 35.2338 95.9844 32.1491 97.7838 29.6088C99.6117 27.0684 102.034 25.5444 105.051 25V37.5382Z" fill="white"/>
<path d="M143 95L60.0268 95.018L60 113.892L142.971 114L143 95Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M143 75L60.0268 75.0189L60 94.8866L142.971 95L143 75Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M143 155V115H60L60.0037 155H143Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="95.1241" y1="85.9892" x2="95.2591" y2="235.074" gradientUnits="userSpaceOnUse">
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