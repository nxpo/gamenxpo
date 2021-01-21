<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.874 0.372157V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.372157Z" fill="url(#paint0_linear)"/>
<path d="M100.874 0.372157V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.372157Z" fill="url(#paint1_linear)"/>
<path d="M106 46H97.0392V44.6482H100.577V30.2963L97.0392 32.7409L96 31.7964L101.426 28C102.117 28 102.462 28.4815 102.462 29.426V44.6482H106V46Z" fill="white"/>
<path d="M146 155V115H62L62.0039 155H146Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M101.998 114L102 75.0182L83 75L83.0036 114H101.998Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M82 113.982L81.9735 75L62 75.0181L62.0321 114L82 113.982Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="49.413" y1="46.2" x2="49.488" y2="126.3" gradientUnits="userSpaceOnUse">
<stop stop-color="#3F88DE"/>
<stop offset="1" stop-color="#1E3966"/>
</linearGradient>
<linearGradient id="paint1_linear" x1="49.413" y1="46.2" x2="49.488" y2="126.3" gradientUnits="userSpaceOnUse">
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