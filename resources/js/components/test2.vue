
<template>

<div id="app">
    <div v-if="showScore">You Scored {{ score }}</div>

    <div class="" v-else>
      <span v-if="!startQuiz">
        <div class="bgstart">
          <div class="container">
            <b-row class="text-center" style="height: 25%">
              <b-col style="top: 80%" class="font-sarabun"
                >คำอธิบายแบบทดสอบ</b-col
              >
            </b-row>
            <b-row class="text-center pt-2">
              <textarea
                id="w3review"
                name="w3review"
                rows="9"
                readonly
                cols="120"
                style="
                  color: #1e3966;
                  resize: none;
                  border: none;
                  font-size: 30px;
                  line-height: 50px;
                "
                class="card-body"
              >
 เป็นแบบทดสอบที่ผู้ทดสอบต้องหาด้านที่ซ่อนอยู่ของวัตถุต่างๆตามที่โจทย์กำหนด โดยผู้ทดสอบจะเห็นแท่งสี่เหลี่ยมที่แต่ละแท่งมีขนาดเท่ากันและวางซ้อนกัน ซึ่งผู้ทดสอบจะเห็นด้านหนึ่งและไม่เห็นอีกด้านหนึ่ง รวมทั้งไม่เห็นด้านล่างและด้านบน แต่ผู้ทดสอบต้องใช้จินตนาการว่าด้านที่ไม่เห็นนั้นมีลักษณะเช่นไร
ซึ่งสี่เหลี่ยมที่ให้มาเปรียบเสมือนข้อมูลที่มี โดยผู้ทดสอบต้องใช้การวิเคราะห์ร่วมกับการจินตนาการ ความคิดสร้างสรรค์ และการวาดภาพในสมอง เพื่อหาสิ่งที่มองไม่เห็น โดยเป็นการทดสอบความคิดสร้างสรรค์แบบมีรูปแบบมากกว่าคิดสร้างสรรค์แบบไร้กรอบ เพราะสี่เหลี่ยมทุกรูปมีความเท่ากัน
  </textarea
              >
            </b-row>
            <b-row class="text-center pt-4">
              <b-col>
                <a @click="startQuizFunc()">
                  <startbtn></startbtn>
                </a>
              </b-col>
            </b-row>
          </div>
        </div>
      </span>


      <span v-else>
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
      
      <div>
        <!-- <img src="images/book/Book.png" style=" position: absolute;
    z-index: 0;position: absolute;
     width: 60vw;
    height: 60vh;
top: 120%;
    left: 7%;"> -->

          
<div class="bookbg" style="width: 65vw;
    height: 65vh;">
  <book ></book>
</div>


<flipbook  :zooms= null
 class=" book" :pages="pages" :startPage="select"   v-slot="flipbook" style="     width: 58vw;
    height: 58vh;">
     
      <!-- <button @click="flipbook.flipLeft">Previous Page</button> -->
      <div class="btnbook" v-if="!isHidden">
<button  @click="flipbook.flipRight" v-on:click="isHidden = true , handleAnswerClick()" >A</button>{{flipbook.page}}<br><br>
<button  @click="flipbook.flipRight">B</button>{{flipbook.page}}<br><br>
<button  @click="flipbook.flipRight">C</button>{{flipbook.page}}<br><br>
<button  @click="flipbook.flipRight">D</button>{{flipbook.page}}<br>

     </div>
    </flipbook>
      </div>              
      

            
                </div>

                <div class="col"></div>
      </div>
    

            
        </div>
      </span>
    </div>
  </div>





</template>

<script>
import Logo from "./icons/Logo.vue";
 import startbtn from "./icons/startbtn.vue";
import book from "./book/book.vue";

export default {
   components: {
      startbtn,
book,
        Logo,
        },

  data() {
    return {
      countDownChoise : 1,
        hours: 0,
        minutes: 10,
        seconds: 0,
        counter: 0,
        random: 0,
        currentQuestion: 0,
        showScore: false,
        score: 0,
        countDown: 600,
        timer: null,
        startQuiz: false,

    isHidden: false,

      pages: ["images/book/l1.png", "images/book/r1.png", "images/book/l22.png", "images/book/r22.png", "images/book/l1.png", "images/book/r1.png", "images/book/l22.png"],
      select:1
    };
  },
  methods: {
    selectPage(page,currentPage){
this.select = page-1;
console.log(page);
console.log(currentPage);
    },


     startQuizFunc() {
    //   this.countDownTimer();
      this.startQuiz = true;
    },

 handleAnswerClick() {

                  this.countDownChoise =2           

if(this.countDownChoise > 0) {
                   setTimeout(() => {
                        this.countDownChoise -= 1

                        console.log(this.countDownChoise);

                        if(this.countDownChoise<=1){
                     this.isHidden=false
console.log(this.isHidden);
                        }
                    }, 1000)
                }
 
      // let nextQuestion = this.currentQuestion + 1;
    //   if (isCorrect) {
    //     this.score = this.score + 1;
    //   }
      // if (nextQuestion < this.questions.length ) {
      //   this.currentQuestion = nextQuestion;
      
      // } else {
      //   this.showScore = true;
      // }
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

.bookbg{
    position: absolute;
  width: 100%;
  height: auto;
top: 145%;
    left: 20%;
     word-wrap: break-word;
}

.book{
  position: absolute;
  width: 100%;
  height: auto;
top: 139%;
    left: 13.5%;
     

}

.btnbook{
  position: absolute;
    z-index: 1;
  font-size:16;
  word-wrap: break-word;
  width: 10%; 
  top: 40%;
    left: 62%;
  max-width: 100%;
}


/* div.relative {
  position: relative;
  width: 400px;
  height: 200px;
  border: 3px solid #73AD21;
left: 20%;
} 

div.absolute {
  position: absolute;
  top: 25%;
  right: 25%;
  width: 200px;
  height: 100px;
  border: 3px solid #73AD21;
} */



</style>