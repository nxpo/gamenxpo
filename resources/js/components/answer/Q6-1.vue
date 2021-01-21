<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M100.377 0.369284V0L0 53.6786V168.691L100.761 222L202 168.045V54.2316L100.761 0.276513L100.377 0.369284Z" fill="url(#paint0_linear)"/>
<path d="M105 53H96.9353V51.7233H100.119V38.1691L96.9353 40.4774L96 39.5858L100.883 36C101.505 36 101.816 36.4548 101.816 37.3467V51.7233H105V53Z" fill="white"/>
<path d="M60 119H99.9981L100 138L60 137.982V119Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M100 119H143.998L144 138L100 137.982V119Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M60 139H99.9981L100 159H60V139Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M100 139H143.998L144 159H100V139Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M144 119V77H60L60.0039 119H144Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
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