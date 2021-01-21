<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.3836 0.372156V0L0 54.1622V170.21L99.763 224L200 169.559V54.7202L99.763 0.279004L99.3836 0.372156Z" fill="url(#paint0_linear)"/>
<path d="M104.39 43.5382V32.869C102.481 33.7218 100.902 35.1733 99.6559 37.26C98.4652 39.256 97.8423 41.3427 97.7871 43.5382H104.39ZM106.051 43.5382H109L108.792 44.8991H106.051V49H104.39V44.8991H96C96.0572 41.2338 96.9844 38.1493 98.7838 35.609C100.612 33.0686 103.034 31.5444 106.051 31V43.5382Z" fill="white"/>
<path d="M143 159V119H60L60.0037 159H143Z" fill="#FFAD0F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M143 118V78H60L60.0037 118H143Z" fill="#FFAD0F" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="48.4121" y1="46.2" x2="48.4871" y2="126.3" gradientUnits="userSpaceOnUse">
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