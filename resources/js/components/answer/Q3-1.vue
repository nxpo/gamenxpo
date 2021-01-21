<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.874 0.370495V0L0 53.9204V169.45L101.259 223L203 168.802V54.4759L101.259 0.277758L100.874 0.370495Z" fill="url(#paint0_linear)"/>
<path d="M106 42H97.0392V40.6482H100.577V26.2963L97.0392 28.7404L96 27.7959L101.426 24C102.117 24 102.462 24.4811 102.462 25.4255V40.6482H106V42Z" fill="white"/>
<path d="M53 108H92.9981L93 128L53 127.981V108Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M94 108H134.998L135 128L94 127.981V108Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M135 68V107H115L115.006 68H135Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M53 128H92.9981L93 148H53V128Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M94 128H134.998L135 148H94V128Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M115 68V107H94L94.006 68H115Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="49.413" y1="46.2" x2="49.488" y2="126.3" gradientUnits="userSpaceOnUse">
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