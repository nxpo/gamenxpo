<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.262 0.276513L99.976 0.369284V0L0 53.6786V168.691L100.262 222L201 168.045V54.2316L100.262 0.276513Z" fill="url(#paint0_linear)"/>
<path d="M106 53.6183L105.669 55H93C93.1035 54.4054 93.3101 53.723 93.5792 52.971C94.8006 51.9216 96.1258 50.8195 97.5749 49.6302C99.0447 48.441 100.68 46.9367 102.46 45.1178C103.371 44.086 103.806 43.1242 103.806 42.1973C103.806 41.2703 103.454 40.5537 102.77 40.064C102.067 39.5743 101.157 39.3117 100.018 39.3117C97.4925 39.3117 96.0634 40.3787 95.7322 42.5124L94.2211 42.1623C94.3867 40.7806 95.0288 39.7311 96.1466 38.9966C97.161 38.332 98.4655 38 100.059 38C101.633 38 102.937 38.4197 103.951 39.2417C104.986 40.0462 105.504 41.0781 105.504 42.3023C105.504 44.1037 103.806 46.3771 100.453 49.088C98.0099 51.1342 96.271 52.6389 95.2773 53.6183H106Z" fill="white"/>
<path d="M82 75L81.867 155H62V75H82Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M124 75L123.867 155H104V75H124Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M102 75L101.867 155H82V75H102Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M145 75L144.86 155H124V75H145Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="92.4657" y1="85.2214" x2="92.6085" y2="232.975" gradientUnits="userSpaceOnUse">
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