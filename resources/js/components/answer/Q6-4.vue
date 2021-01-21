<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.3836 0.369284V0L0 53.6786V168.691L99.763 222L200 168.045V54.2316L99.763 0.276513L99.3836 0.369284Z" fill="url(#paint0_linear)"/>
<path d="M104.39 44.8421V34.7648C102.481 35.5702 100.902 36.9411 99.6559 38.9118C98.4652 40.7969 97.8423 42.7685 97.7871 44.8421H104.39ZM106.051 44.8421H109L108.792 46.1274H106.051V50H104.39V46.1274H96C96.0572 42.6657 96.9844 39.7521 98.7838 37.3529C100.612 34.9537 103.034 33.5141 106.051 33V44.8421Z" fill="white"/>
<path d="M144 99H103.002L103 119H144V99Z" fill="#FFAD0F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M144 77H103.002L103 96H144V77Z" fill="#FFAD0F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M61 159L143.973 158.981L144 139.114L61.0286 139L61 159Z" fill="#FFAD0F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M61 138L143.973 137.982L144 119.108L61.0286 119L61 138Z" fill="#FFAD0F" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="48.4116" y1="46.2" x2="48.4866" y2="126.3" gradientUnits="userSpaceOnUse">
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