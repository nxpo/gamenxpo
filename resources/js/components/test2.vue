<template>
  <div id="app">
    <flipbook   class="flipbook" :pages="pages" :startPage="select"   singlePage v-slot="flipbook">
      <button @click="flipbook.flipLeft">Previous Page</button>
      <button @click="flipbook.flipRight">Next Page</button>
      {{ flipbook.page }}
      <div v-for="index in 4" :key="index">

        <div >
       <button ><div v-if="index!=flipbook.page"><a @click="flipbook.flipRight"><a @click="selectPage(index,flipbook.page);">{{index}}</a></a></div>
       <div v-else>{{index}}</div></button> 
        </div>
     </div>
    </flipbook>
  </div>
</template>

<script>
export default {
  data() {
    return {
      pages: ["images/1.png", "images/2.png", "images/3.png", "images/1.png"],
      select:1
    };
  },
  methods: {
    selectPage(page,currentPage){
this.select = page-1;
console.log(page);
console.log(currentPage);
    },


  },
  mounted() {
    console.log(this.pages);
  },
};
</script>

<style>
.flipbook {
  width: 30vw;
  height: 30vh;
}
</style>