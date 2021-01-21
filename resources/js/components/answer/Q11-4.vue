<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.377 0.370947V0L0 53.9204V169.451L100.76 223L202 168.802V54.4759L100.76 0.277758L100.377 0.370947Z" fill="url(#paint0_linear)"/>
<path d="M101.401 50.5387V39.8686C99.4797 40.7214 97.9057 42.1729 96.6588 44.2596C95.4733 46.2556 94.8398 48.3431 94.7785 50.5387H101.401ZM103.057 50.5387H106L105.795 51.8996H103.057V56H101.401V51.8996H93C93.0613 48.2342 93.9813 45.1493 95.78 42.609C97.6196 40.0686 100.032 38.5444 103.057 38V50.5387Z" fill="white"/>
<path d="M142 139L61.0186 138.979L61 117.125L141.981 117L142 139Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M142 159L61.0186 158.982L61 140.108L141.981 140L142 159Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M142 79V117H61L61.0187 79H142Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="48.4096" y1="46.2" x2="48.4896" y2="126.3" gradientUnits="userSpaceOnUse">
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