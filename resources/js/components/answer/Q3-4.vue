<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.3836 0.370495V0L0 53.9204V169.45L99.763 223L200 168.802V54.4759L99.763 0.277758L99.3836 0.370495Z" fill="url(#paint0_linear)"/>
<path d="M103.39 34.5382V23.869C101.481 24.7218 99.9018 26.1733 98.6559 28.26C97.4652 30.256 96.8423 32.3427 96.7871 34.5382H103.39ZM105.051 34.5382H108L107.792 35.8991H105.051V40H103.39V35.8991H95C95.0572 32.2338 95.9844 29.1493 97.7838 26.609C99.6117 24.0686 102.034 22.5444 105.051 22V34.5382Z" fill="white"/>
<path d="M63 106H103.998L104 125H63V106Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M105 106H144.998L145 125H105V106Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M85 66V106H63L63.0062 66H85Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M63 126H103.998L104 147H63V126Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M105 126H144.998L145 147H105V126Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
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