<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.7629 0.276738L99.3832 0.368947V0L0 53.6784V168.691L99.7629 222L200 168.045V54.2319L99.7629 0.276738Z" fill="url(#paint0_linear)"/>
<path d="M147 106V65H65L65.0193 106H147Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M148 146L65.0382 145.979L65 126.114L147.981 126L148 146Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M148 165L65.0196 164.98L65 146.108L147.962 146L148 165Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M148 125L65.0186 124.98L65 106.108L147.962 106L148 125Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M105 48H98.7145V46.6443H101.2V32.2965L98.7145 34.7448L98 33.8022L101.784 30C102.272 30 102.515 30.4759 102.515 31.4297V46.6443H105V48Z" fill="white"/>
<defs>
<linearGradient id="paint0_linear" x1="108.981" y1="75.6294" x2="109.124" y2="223.383" gradientUnits="userSpaceOnUse">
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