<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.8806 0.370495V0L0 53.9204V169.45L100.262 223L201 168.802V54.4759L100.262 0.277758L99.8806 0.370495Z" fill="url(#paint0_linear)"/>
<path d="M103.743 38.8417V28.7652C101.972 29.5706 100.522 30.9415 99.3723 32.9123C98.2796 34.7974 97.6953 36.7681 97.6576 38.8417H103.743ZM105.269 38.8417H108L107.793 40.127H105.269V44H103.743V40.127H96C96.0565 36.6652 96.904 33.7521 98.5619 31.3529C100.257 28.9537 102.481 27.5141 105.269 27V38.8417Z" fill="white"/>
<path d="M101 152H141.962L142 71.1118L101 71V152Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M60 133L99.9259 132.981L100 91.0195L60.0371 91L60 133Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M60 71.0188L99.9628 71L100 90.9058L60.0372 91L60 71.0188Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<path d="M60 133.036L99.9628 133L100 151.929L60.0372 152L60 133.036Z" fill="#FF7A00" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="91.608" y1="85.6053" x2="91.7521" y2="234.025" gradientUnits="userSpaceOnUse">
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