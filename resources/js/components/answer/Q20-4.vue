<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.3837 0.372157V0L0 54.162V170.21L99.7634 224L200 169.559V54.7205L99.7634 0.279231L99.3837 0.372157Z" fill="url(#paint0_linear)"/>
<path d="M98.0975 48.5382V37.8688C96.4742 38.7216 95.1447 40.1733 94.0913 42.26C93.0897 44.256 92.554 46.3427 92.5195 48.5382H98.0975ZM99.4964 48.5382H102L101.81 49.8991H99.4964V54H98.0975V49.8991H91C91.0518 46.2338 91.8287 43.1491 93.3484 40.6088C94.9027 38.0684 96.9406 36.5444 99.4964 36V48.5382Z" fill="white"/>
<path d="M96 104.09L136.943 104L137 122.91L96.0567 123L96 104.09Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M55 104.09L95.9619 104L96 122.91L55.0381 123L55 104.09Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M96 123H136.962L137 141.928L96 142V123Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M137 101L55.0184 100.982L55 82.1077L136.982 82L137 101Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M137 163L55.0184 162.981L55 143.113L136.982 143L137 163Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="91.1522" y1="85.9892" x2="91.2983" y2="235.074" gradientUnits="userSpaceOnUse">
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