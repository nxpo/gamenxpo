<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.262 0.277758L99.8801 0.370947V0L0 53.9204V169.451L100.262 223L201 168.802V54.4759L100.262 0.277758Z" fill="url(#paint0_linear)"/>
<path d="M103 56H93.1228V54.498H97.0283V38.5519L93.1228 41.2675L92 40.2186L97.9468 36C98.7124 36 99.0945 36.535 99.0945 37.5844V54.498H103V56Z" fill="white"/>
<path d="M79 133.104L118.963 133L119 154.897L79.0372 155L79 133.104Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M58 114.09L97.9628 114L98 132.911L58.0372 133L58 114.09Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M79 74.054L79.0754 113L99 112.946L98.9053 74L79 74.054Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M99 74.054L99.0754 113L119 112.946L118.905 74L99 74.054Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M139 175L58.0182 174.982L58 156.108L138.982 156L139 175Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="109.525" y1="75.9701" x2="109.67" y2="224.39" gradientUnits="userSpaceOnUse">
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