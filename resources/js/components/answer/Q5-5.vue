<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M202 169.559V54.7202L100.76 0.279004L100.377 0.372611V0L0 54.1622V170.21L100.76 224L202 169.559Z" fill="url(#paint0_linear)"/>
<path d="M108 42.6026C108 44.5089 107.235 46.0669 105.701 47.2584C104.168 48.4131 102.194 49 99.7755 49C97.7422 49 96.1504 48.5418 95 47.6253L95.7524 46.4699C96.1656 46.6898 96.6071 46.91 97.079 47.1116C97.9031 47.4232 98.9209 47.5886 100.13 47.5886C101.722 47.5886 103.122 47.1488 104.329 46.2873C105.569 45.4075 106.186 44.1973 106.186 42.6393C106.186 41.2829 105.656 40.2933 104.595 39.6152C103.712 39.0103 102.561 38.7166 101.146 38.7166C99.9082 38.7166 98.9209 39.1206 98.1837 39.9454L97.2551 40.0188L97.9183 31H107.337L107.028 32.4114H99.5994L99.2014 37.6721C99.9669 37.4339 100.793 37.3052 101.676 37.3052C103.388 37.3052 104.847 37.746 106.054 38.6441C107.352 39.6339 108 40.953 108 42.6026Z" fill="white"/>
<path d="M122.002 121L122 81H142V121H122.002Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M102.002 121L102 81H122L121.996 121H102.002Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M61 143L141.963 142.979L142 121.125L61.0261 121L61 143Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M61 163L141.981 162.982L142 144.108L61.028 144L61 163Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="48.2132" y1="46.2" x2="48.2882" y2="126.3" gradientUnits="userSpaceOnUse">
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