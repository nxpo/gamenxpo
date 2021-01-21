<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.262 0.277758L99.976 0.370495V0L0 53.9204V169.45L100.262 223L201 168.802V54.4759L100.262 0.277758Z" fill="url(#paint0_linear)"/>
<path d="M106 46.6182L105.669 48H93C93.1035 47.4053 93.3101 46.7234 93.5792 45.9713C94.8006 44.922 96.1253 43.8203 97.5951 42.6309C99.0442 41.4416 100.68 39.9374 102.46 38.1185C103.371 37.0866 103.806 36.1248 103.806 35.1978C103.806 34.2708 103.454 33.5534 102.77 33.0637C102.067 32.574 101.157 32.3117 100.018 32.3117C97.4925 32.3117 96.0634 33.3787 95.7322 35.5125L94.2211 35.1628C94.3867 33.7811 95.0288 32.7316 96.1466 31.997C97.161 31.3324 98.4655 31 100.059 31C101.633 31 102.937 31.4197 103.951 32.2417C104.986 33.0462 105.504 34.0781 105.504 35.3024C105.504 37.1039 103.806 39.3778 100.453 42.0887C98.0099 44.135 96.271 45.6388 95.2773 46.6182H106Z" fill="white"/>
<path d="M100 156H142.941L143 75.0559L100 75V156Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M59 75.0188L99.9619 75L100 94.9058L59.0381 95L59 75.0188Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M59 116.02L99.9619 116L100 136.901L59.0381 137L59 116.02Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M59 95.0188L99.9619 95L100 114.906L59.0381 115L59 95.0188Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M59 137.018L100 137V156H59V137.018Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="92.4657" y1="85.6053" x2="92.6098" y2="234.025" gradientUnits="userSpaceOnUse">
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