<template>
  <div>

    <div v-if="showScore">
      <b-card title="Results" style="max-width: 20rem">
        You Scored {{ score }} of {{ questionsRan.length }}
      </b-card>
    </div>
    <div class="card-q" v-else>
        
      <span v-if="!startQuiz">  
        <b-card
          img-src=""
          img-alt="Image"
          img-top
          title="คำอธิบาย"
          style="max-width: 20rem"
          class="mb-2"
        >
          <b-card-text> คำอธิบาย </b-card-text>
          <center>
            <b-button @click="startQuizFunc()">Start Quiz</b-button>
          </center>
          <IconRestore/>
        </b-card>
      </span>
      <span v-else>

      <nav
      class="navbar navbar-light"
      style="background-color: #e3f2fd; height: 85px"
    >
      

    <div class="col-2">
      <a class="navbar-brand" href="#">Sticky top</a>
    </div>
    <div class="col-10">
<div class="row">
    <div class="col-sm" :key="index" v-for="(option, index) in questionsRan.length">
        {{ index + 1 }}
      </div>
      </div>  
  </div>
    </nav>
        
            <br />
            <div class="container ">
              <div class="row">
                <div class="col">
                  <img
                    style="width: 75%"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Regular_octagon.svg/1200px-Regular_octagon.svg.png"
                    class="img-thumbnail"
                  />
                </div>
                <div class="col">
                  <div class="card" style="width: 35rem;   height: 450px;">
                    <b-progress
                      variant="warning"
                      :max="10"
                      :value="countDown"
                      height="20px"
                    ></b-progress>
                    <div class="card-body">
                      <h5 class="card-title">
                        จากรูปที่ให้มา อะไร คือ สิ่งที่มองเห็นจากด้าน A , B หรือ
                        C แม้ว่าตัวเลือกอาจจะถูกหมุนไปก็ตาม 
                      </h5>
                      <!-- <p class="card-text">
                        {{ questionsRan[currentQuestion].questionText }}
                      </p> -->
                    </div>
                  </div>
                </div>
              </div>
        
            </div>
            <center>
              <div class="d-flex justify-content-around" style="width: 60%">
                <div
                  class="p-4"
                  :key="index"
                  v-for="(option, index) in questionsRan[currentQuestion]
                    .answerOptions"
                >
                  <b-button
                    @click="handleAnswerClick(option.isCorrect)"
                    class="ans-option-btn"
                    variant="primary"
                  >
                    <img
                      src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Regular_octagon.svg/1200px-Regular_octagon.svg.png"
                      class="img-thumbnail"
                  /></b-button>
                </div>
              </div>
            </center>
      </span>
    </div>

  
  </div>
   




</template>

<script>
import IconRestore from './icons/IconTest.vue';


export default {
    components: {
    IconRestore
  },

  data() {
    return {
        
      random: 0,
      ramdomCheck: [],
      currentQuestion: 0,
      showScore: false,
      score: 0,
      countDown: 10,
      timer: null,
      startQuiz: false,
      questionsRan: [],
      questions: [
        {
          questionText: "111111111111111",
          answerOptions: [
            { answerText: "v-on", isCorrect: false },
            { answerText: "v-bind", isCorrect: false },
            { answerText: "v-model", isCorrect: true },
            { answerText: "v-if", isCorrect: false },
            { answerText: "v-on", isCorrect: false },
          ],
        },
        {
          questionText: "222222222222222",
          answerOptions: [
            { answerText: "Jeff Bezos", isCorrect: false },
            { answerText: "Elon Musk", isCorrect: false },
            { answerText: "Evan You", isCorrect: true },
            { answerText: "Tony Stark", isCorrect: false },
            { answerText: "v-on", isCorrect: false },
          ],
        },
        {
          questionText: "33333333333333333",
          answerOptions: [
            { answerText: "True", isCorrect: false },
            { answerText: "False", isCorrect: true },
            { answerText: "v-on", isCorrect: false },
            { answerText: "v-on", isCorrect: false },
            { answerText: "v-on", isCorrect: false },
          ],
        },
        {
          questionText: "444444444444444444444444",
          answerOptions: [
            { answerText: "Vue 2", isCorrect: false },
            { answerText: "Vue 1", isCorrect: false },
            { answerText: "Vue 4", isCorrect: false },
            { answerText: "Vue 3", isCorrect: true },
            { answerText: "v-on", isCorrect: false },
          ],
        },
        {
          questionText: "55555555555555",
          answerOptions: [
            { answerText: "True", isCorrect: true },
            { answerText: "False", isCorrect: false },
            { answerText: "v-on", isCorrect: false },
            { answerText: "v-on", isCorrect: false },
            { answerText: "v-on", isCorrect: false },
          ],
        },
      ],
    };
  },
  methods: {
    startQuizFunc() {
      this.startQuiz = true;
      this.countDownTimer();
      this.randomNum();
    },
    randomNum() {
      var a1 = this.questions;
      var images = a1.slice();
      var rnd;
      while (images.length) {
        rnd = Math.floor(Math.random() * images.length);
        console.log(images[rnd].questionText);
        this.questionsRan.push(images[rnd]);
        images[rnd] = "";
        images = images.filter((a) => {
          return a;
        });
      }
      console.log(this.questionsRan);
    },
    handleAnswerClick(isCorrect) {
      clearTimeout(this.timer);
      let nextQuestion = this.currentQuestion + 1;
      if (isCorrect) {
        this.score = this.score + 1;
      }
      if (nextQuestion < this.questions.length) {
        this.currentQuestion = nextQuestion;
        // this.$store.state.questionAttended = this.currentQuestion;
        // localStorage.setItem('qattended', this.currentQuestion)
        this.countDown = 10;
        this.countDownTimer();
      } else {
        // localStorage.removeItem('qattended')
        this.showScore = true;
        // localStorage.setItem('testComplete',this.showScore)
      }
    },
    countDownTimer() {
      if (this.countDown > 0) {
        this.timer = setTimeout(() => {
          this.countDown -= 1;
          this.countDownTimer();
        }, 1000);
      } else {
        this.handleAnswerClick(false);
      }
    },
  },

  created() {
    //  alert(this.$store.state.questionAttended)
    //    this.showScore = localStorage.getItem('testComplete') || false
    //    this.currentQuestion = localStorage.getItem('qattended') || 0
    //    this.countDownTimer()
    //    this.fetchQuiz()
  },
};
</script>
