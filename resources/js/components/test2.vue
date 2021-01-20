
<template>
 <div id="app">
        <div class="">
            <div class="row d-flex justify-content-between">
                <div class="col pt-4 pl-5">
                    <Logo />
                </div>
                <div class="col-9 pt-4">
                    <div class="col text-center">
                        <div class="card " style="">
                            <b-progress class="" height="20px">
                                <b-progress-bar
                                    :style="{
                                        'background-color': '#f5d020',
                                        'background-image':
                                            'linear-gradient(315deg, #f5d020 0%, #f53803 74%)'
                                    }"
                                    :max="600"
                                >
                                </b-progress-bar>
                            </b-progress>

                            <div class="card-body" style=" height:145px">
                              จากโจทย์ที่ได้อ่าน จงวิเคราะห์หาข้อเท็จจริง และหาคำตอบ ที่สมเหตุสมผล
                            </div>
                        </div>
                    </div>
                    
        <flipbook   class=" book" :pages="pages" :startPage="select"   v-slot="flipbook">
     
      <button @click="flipbook.flipLeft">Previous Page</button>
      <div class="btnbook">
<button  @click="flipbook.flipRight">A</button>{{flipbook.page}}<br><br>
<button  @click="flipbook.flipRight">B</button>{{flipbook.page}}<br><br>
<button  @click="flipbook.flipRight">C</button>{{flipbook.page}}<br><br>
<button  @click="flipbook.flipRight">D</button>{{flipbook.page}}<br>

     </div>
    </flipbook>

            
                </div>

                <div class="col"></div>
      </div>
    

            
        </div>
    
 
  </div>
</template>

<script>
import Logo from "./icons/Logo.vue";
 
export default {
   components: {
  
        Logo,
        },

  data() {
    return {
      pages: ["images/book/2.1.png", "images/book/2.2.png", "images/book/2.3.png", "images/book/2.1.png", "images/book/2.2.png", "images/book/2.3.png", "images/book/2.1.png"],
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

.book{
  position: absolute;
     width: 65vw;
    height: 65vh;
    left: 10%;
    
}

.btnbook{
  position: absolute;
top: 25%;
    left: 15%;
    z-index: 1;
    
}

</style>