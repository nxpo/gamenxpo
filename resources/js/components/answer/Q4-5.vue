<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M200 168.802V54.4759L99.7629 0.277758L99.3835 0.370495V0L0 53.9204V169.45L99.7629 223L200 168.802Z" fill="url(#paint0_linear)"/>
<path d="M81 70L80.8675 151H61V70H81Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M122 70L121.874 151H103V70H122Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M103 70L102.861 151H82V70H103Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M144 70L143.874 151H125V70H144Z" fill="#FFD80B" stroke="#4A1200" stroke-width="0.5"/>
<path d="M103 43.6029C103 45.5092 102.235 47.0673 100.701 48.2588C99.1683 49.4135 97.1936 50 94.7755 50C92.7422 50 91.1504 49.5418 90 48.6253L90.7524 47.4703C91.1656 47.6902 91.607 47.9103 92.0789 48.112C92.9031 48.4236 93.9209 48.5886 95.13 48.5886C96.7218 48.5886 98.1222 48.1487 99.3291 47.2872C100.569 46.4074 101.186 45.1976 101.186 43.6396C101.186 42.2832 100.656 41.2931 99.5944 40.6149C98.7115 40.01 97.5612 39.7168 96.1455 39.7168C94.9081 39.7168 93.9208 40.1199 93.1836 40.9447L92.2551 41.0181L92.9183 32H102.337L102.028 33.4114H94.5993L94.2014 38.6719C94.9669 38.4336 95.7932 38.3053 96.6761 38.3053C98.3876 38.3053 99.8467 38.7452 101.054 39.6434C102.352 40.6332 103 41.9532 103 43.6029Z" fill="white"/>
<defs>
<linearGradient id="paint0_linear" x1="48.013" y1="46.2" x2="48.088" y2="126.3" gradientUnits="userSpaceOnUse">
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