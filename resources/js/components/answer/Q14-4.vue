<template>
<svg width="233" height="234" viewBox="-10 -8 233 234" fill="none" xmlns="http://www.w3.org/2000/svg" @mouseover="active = true" @mouseleave="active = false">
<path v-show="active" d="M100.874 0.37227V0L0 54.162V170.21L101.259 224L203 169.559V54.7205L101.259 0.279231L100.874 0.37227Z" fill="url(#paint0_linear)" style="fill:lime;stroke:white;stroke-width:5;fill-rule:evenodd;"/>
<path d="M99.3837 0.367173V0L0 53.4366V167.931L99.7634 221L200 167.288V53.9876L99.7634 0.275492L99.3837 0.367173Z" fill="url(#paint0_linear)"/>
<path d="M99.4008 50.2348V38.9726C97.4794 39.8728 95.9058 41.4052 94.659 43.6078C93.4734 45.7147 92.8389 47.9173 92.7776 50.2348H99.4008ZM101.057 50.2348H104L103.795 51.6713H101.057V56H99.4008V51.6713H91C91.0613 47.8023 91.9809 44.5463 93.7797 41.8648C95.6193 39.1833 98.0314 37.5746 101.057 37V50.2348Z" fill="white"/>
<path d="M141 156H101V76L141 76.0184V156Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<path d="M99 156H58V76L99 76.0184V156Z" fill="#F7A11F" stroke="#4A1200" stroke-width="0.5"/>
<defs>
<linearGradient id="paint0_linear" x1="91.1522" y1="84.8376" x2="91.2944" y2="231.926" gradientUnits="userSpaceOnUse">
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