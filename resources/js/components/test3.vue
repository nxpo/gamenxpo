<template>
    <div>
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
                                rows="10"
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
              เป็นแบบทดสอบที่ผู้ทดสอบจะได้ทดสอบหาความสัมพันธ์ของแต่ละตัวเลข และการค้นหารูปแบบ (Pattern) ของความสัมพันธ์นั้น ซึ่งต้องอาศัยทักษะในเชิงตัวเลข ผสมผสานกับความสามารถในเชิงการวิเคราะห์  ร่วมกับการใช้สมาธิ ตลอดจนความรอบคอบในการทำโจทย์แต่ละข้อ
ในแบบทดสอบนี้ จะมีตัวเลขที่มีความสัมพันธ์กันไม่ทางใดก็ทางหนึ่ง ตัวเลขเหล่านั้นจะมีความสัมพันธ์กันในแนวนอน และมีความสัมพันธ์กันในเชิงแนวตั้งด้วยเช่นกัน  ถึงแม้บางกรณีตัวเลขจะไม่ได้ระบุไว้ (-) แต่ก็ยังต้องให้ผู้ทดสอบหาความสัมพันธ์นั้นอยู่ และมีตัวเลขตัวหนึ่งซึ่งถูกแทนด้วยเครื่องหมายคำถาม (?) ซึ่งนั้น คือ ผู้ทดสอบต้องหาว่า ? คือ ตัวเลขใด
  </textarea
                            >
                        </b-row>
                        <b-row class="text-center pt-4">
                            <b-col>
                                                                  <button @click="startQuizFunc()" class="start start1">START</button>

                            </b-col>
                        </b-row>
                    </div>
                </div>
            </span>

            <span v-else>
                <nav
                    class="navbar navbar-light"
                    style="background-color: white; height: 65px 
  box-shadow: 5px 10px 18px #888888;"
                >
                    <div class="col-2">
                        <a class="navbar-brand pl-4" href="#"><Logo /></a>
                    </div>
                    <div class="col-10">
                        <div class="row">
                            <div
                                class="col-sm text-center font-kanit"
                                :key="index"
                                v-for="(option, index) in questionsRan.length -
                                    5"
                            >
                                <div v-if="index < currentQuestion">
                                    <div v-bind:style="styleObject">
                                        {{ index + 1 }}
                                    </div>
                                </div>

                                <div v-if="index == currentQuestion">
                                    <div v-bind:style="styleObject2">
                                        {{ index + 1 }}
                                    </div>
                                </div>

                                <div v-if="index > currentQuestion">
                                    <div v-bind:style="styleObject3">
                                        {{ index + 1 }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div
                    class="imgup"
                    style=" background-image: url('images/bggame3.png');
  height: 110%; 

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: fixed;"
                >
                    <b-row class="text-center">
                        <b-col></b-col>
                        <b-col
                            cols="5"
                            style="  
                text-align: center;"
                        >
                            <div class="col text-center pt-5">
                                <div class="card " style="z-index: 1;">
                                    <b-progress class="" height="30px">
                                        <b-progress-bar
                                            :style="{
                                                'background-color': '#f5d020',
                                                'background-image':
                                                    'linear-gradient(315deg, #f5d020 0%, #f53803 74%)'
                                            }"
                                            :max="816"
                                            :value="imgTop"
                                            >{{ minutes }}:{{ seconds }}
                                        </b-progress-bar>
                                    </b-progress>

                                    <div
                                        class="card-body"
                                        style=" height:430px"
                                    >
                                        พิมพ์คำตอบให้เร็วที่สุดก่อนนำ้ทะเลจะท่วม
                                        <b-row class="pt-4">
                                            <b-col></b-col>
                                            <b-col
                                                :key="index"
                                                v-for="(option,
                                                index) in questionsRan[
                                                    currentQuestion
                                                ].answerOptions.slice(
                                                    0,
                                                    questionsRan[
                                                        currentQuestion
                                                    ].answerOptions.length / 2
                                                )"
                                            >
                                                 <div v-if="option.answerText != '?'">
                                                    <span class="dot pt-2">{{
                                                        option.answerText
                                                    }}</span>
                                                </div>
                                                <div v-if="option.answerText === '?'">
                                                    <span class="dot2 pt-2">{{
                                                        option.answerText
                                                    }}</span>
                                                </div> </b-col
                                            ><b-col></b-col>
                                        </b-row>
                                        <b-row class="pt-4">
                                            <b-col></b-col>
                                            <b-col
                                                :key="index2"
                                                v-for="(option2,
                                                index2) in questionsRan[
                                                    currentQuestion
                                                ].answerOptions.slice(
                                                    questionsRan[
                                                        currentQuestion
                                                    ].answerOptions.length / 2
                                                )"
                                            >
                                                <div v-if="option2.answerText != '?'">
                                                    <span class="dot pt-2" >{{
                                                        option2.answerText
                                                    }}</span>
                                                </div>
                                                <div v-if="option2.answerText === '?'">
                                                    <span class="dot2 pt-2" >{{
                                                        option2.answerText
                                                    }}</span>
                                                </div>
                                            </b-col>
                                            <b-col></b-col>
                                        </b-row>
                                        <a @click="handleAnswerClick()"> </a>
                                        <b-row class="pt-5">
                                            <b-col> </b-col>
                                            <b-col>
                                                <div
                                                    class="pt-3"
                                                    style="  
                                                         width: 305px;;
                text-align: center;
                height:200px;
              background-repeat: no-repeat;
      background-image: url('images/TextAns.png');"
                                                >
                                                    {{ aa[aa.length - 2] }}
                                                    {{ aa[aa.length - 1] }}
                                                </div>
                                            </b-col>
                                            <b-col></b-col>
                                        </b-row>

                                        <!-- <div >
                <img  class="pt-5"
                            src="images\TextAns.png"
                            :style="{ top: imgTop }"
                        />
                        {{aa[aa.length-2] }} {{aa[aa.length-1]}}
              </div>       -->
                                        <!-- <vue-star animate="animated bounceIn" color="#F05654">
    <i slot="icon" class="fa fa-heart"></i>
  </vue-star> -->
                                        <!-- <vue-fake-input
  :length="2"
  :fontSize="40"
  inputColor="#31bce6"
  fontColor="#ffc107"
  :allowPaste="false"
  :v-model="fullValue"
  :onlyNumber="true"
  @input="checkExist($event)"
/> -->
                                    </div>
                                </div>
                            </div></b-col
                        >
                        <b-col></b-col>
                    </b-row>
                    <div>
                        <img
                            class="img"
                            src="images\water.png"
                            width="2000"
                            alt="kitty"
                            :style="{ top: imgTop }"
                        />
                    </div>
                </div>
            </span>
        </div>
    </div>
</template>

<script>
import Logo from "./icons/Logo.vue";
import startbtn from "./icons/startbtn.vue";

export default {
    components: {
        Logo,
        startbtn
    },

    data: () => ({
        fullValue: "",
        countDownChoise: 3,
        amount: 7800,
        anwser: "",
        aa: [],
        hours: 0,
        minutes: 20,
        seconds: 0,
        counter: 1200,
        random: 0,
        ramdomCheck: [],
        currentQuestion: 0,
        showScore: false,
        score: 0,
        countDown: 600,
        timer: null,
        startQuiz: false,
        imgTop: 816,
        max: 2,
        text: "",
        answerUser: [],
        questionsRan: [],
        styleObject: {
            color: "4387CE",
            fontSize: "25px"
        },
        styleObject2: {
            color: "white",
            "background-image": "url(images/Vector.png)",
            "background-size": "contain",
            "background-repeat": "no-repeat",
            "background-position": "center",
            "font-size": " 24px"
        },

        styleObject3: {
            color: "#91D3D9",
            fontSize: "25px"
        },
        questions: [
            {
                title: "1",
                answer: "3",
                answerOptions: [
                    { answerText: "1" },
                    { answerText: "?" },
                    { answerText: "5" },
                    { answerText: "7" },
                    { answerText: "-" },
                    { answerText: "6" },
                    { answerText: "-" },
                    { answerText: "-" }
                ]
            },
            {
                title: "2",
                answer: "2",
                answerOptions: [
                    { answerText: "-" },
                    { answerText: "-" },
                    { answerText: "8" },
                    { answerText: "4" },
                    { answerText: "?" },
                    { answerText: "64" },
                    { answerText: "32" },
                    { answerText: "-" },
                    { answerText: "-" },
                    { answerText: "4" }
                ]
            },

            {
                title: "3",
                answer: "5",
                answerOptions: [
                    { answerText: "2" },
                    { answerText: "3" },
                    { answerText: "?" },
                    { answerText: "-" },
                    { answerText: "13" },
                    { answerText: "-" },
                    { answerText: "-" },
                    { answerText: "5" },
                    { answerText: "8" },
                    { answerText: "13" }
                ]
            },
            {
                title: "4",
                answer: "18",
                answerOptions: [
                    { answerText: "3" },
                    { answerText: "6" },
                    { answerText: "9" },
                    { answerText: "12" },
                    { answerText: "9" },
                    { answerText: "?" },
                    { answerText: "-" },
                    { answerText: "36" }
                ]
            },
            {
                title: "5",
                answer: "1",
                answerOptions: [
                    { answerText: "4" },
                    { answerText: "3" },
                    { answerText: "2" },
                    { answerText: "?" },
                    { answerText: "4" },
                    { answerText: "-" },
                    { answerText: "2" },
                    { answerText: "1" }
                ]
            },
            {
                title: "6",
                answer: "8",
                answerOptions: [
                    { answerText: "2" },
                    { answerText: "4" },
                    { answerText: "6" },
                    { answerText: "-" },
                    { answerText: "4" },
                    { answerText: "?" },
                    { answerText: "12" },
                    { answerText: "16" }
                ]
            },
            {
                title: "7",
                answer: "3",
                answerOptions: [
                    { answerText: "25" },
                    { answerText: "16" },
                    { answerText: "9" },
                    { answerText: "4" },
                    { answerText: "-" },
                    { answerText: "4" },
                    { answerText: "?" },
                    { answerText: "2" }
                ]
            },
            {
                title: "8",
                answer: "15",
                answerOptions: [
                    { answerText: "3" },
                    { answerText: "7" },
                    { answerText: "?" },
                    { answerText: "-" },
                    { answerText: "4" },
                    { answerText: "8" },
                    { answerText: "16" },
                    { answerText: "32" }
                ]
            },
            {
                title: "9",
                answer: "39",
                answerOptions: [
                    { answerText: "7" },
                    { answerText: "12" },
                    { answerText: "22" },
                    { answerText: "-" },
                    { answerText: "82" },
                    { answerText: "4" },
                    { answerText: "9" },
                    { answerText: "19" },
                    { answerText: "?" },
                    { answerText: "79" }
                ]
            },
            {
                title: "10",
                answer: "20",
                answerOptions: [
                    { answerText: "13" },
                    { answerText: "14" },
                    { answerText: "16" },
                    { answerText: "?" },
                    { answerText: "28" },
                    { answerText: "1" },
                    { answerText: "-" },
                    { answerText: "4" },
                    { answerText: "8" },
                    { answerText: "-" }
                ]
            },
            {
                title: "11",
                answer: "16",
                answerOptions: [
                    { answerText: "4" },
                    { answerText: "5" },
                    { answerText: "8" },
                    { answerText: "10" },
                    { answerText: "?" },
                    { answerText: "20" },
                    { answerText: "10" },
                    { answerText: "8" },
                    { answerText: "20" },
                    { answerText: "16" },
                    { answerText: "40" },
                    { answerText: "-" }
                ]
            },
            {
                title: "12",
                answer: "3",
                answerOptions: [
                    { answerText: "?" },
                    { answerText: "5" },
                    { answerText: "7" },
                    { answerText: "12" },
                    { answerText: "-" },
                    { answerText: "31" },
                    { answerText: "3" },
                    { answerText: "-" },
                    { answerText: "8" },
                    { answerText: "13" },
                    { answerText: "20" },
                    { answerText: "32" }
                ]
            },
            {
                title: "13",
                answer: "28",
                answerOptions: [
                    { answerText: "5" },
                    { answerText: "10" },
                    { answerText: "7" },
                    { answerText: "12" },
                    { answerText: "-" },
                    { answerText: "10" },
                    { answerText: "30" },
                    { answerText: "?" },
                    { answerText: "60" },
                    { answerText: "54" }
                ]
            },
            {
                title: "14",
                answer: "31",
                answerOptions: [
                    { answerText: "0" },
                    { answerText: "5" },
                    { answerText: "3" },
                    { answerText: "13" },
                    { answerText: "11" },
                    { answerText: "?" },
                    { answerText: "5" },
                    { answerText: "-" },
                    { answerText: "10" },
                    { answerText: "2" },
                    { answerText: "20" },
                    { answerText: "-" }
                ]
            },
            {
                title: "15",
                answer: "9",
                answerOptions: [
                    { answerText: "13" },
                    { answerText: "?" },
                    { answerText: "22" },
                    { answerText: "31" },
                    { answerText: "53" },
                    { answerText: "5" },
                    { answerText: "-" },
                    { answerText: "12" },
                    { answerText: "19" },
                    { answerText: "31" }
                ]
            }
        ]
    }),
    methods: {
        startQuizFunc() {
            //   this.countDownTimer();

            this.startQuiz = true;
            this.countDownTimer();
            this.randomNum();
        },

        randomNum() {
            var q = this.questions;
            var quest3 = q.slice();
            var rnd;
            // console.log(this.questions3);
            // console.log(quest3);
            while (quest3.length) {
                rnd = Math.floor(Math.random() * quest3.length);
                this.questionsRan.push(quest3[rnd]);
                quest3[rnd] = "";
                quest3 = quest3.filter(a => {
                    return a;
                });
            }
            // console.log(this.questionsRan);
        },

        handleAnswerClick() {
            clearTimeout(this.timer);
            this.anwser = "";
            this.countDownChoise = 6;
            let nextQuestion = this.currentQuestion + 1;
            

            if (nextQuestion < this.questions.length - 5) {
                this.currentQuestion = nextQuestion;

                //     console.log('aa'+this.questionsRan[this.currentQuestion].answer);

                //  if (this.answerUser.length) {
                //     this.score = this.score + 1;
                //   }
                this.countDownTimer();
            } else {
                this.showScore = true;
            }
        },

        countDownTimer() {
            this.timer = setTimeout(() => {
                if (this.imgTop >= 0) {
                    this.countDown -= 1;
                    this.imgTop -= 0.68;

                    this.seconds = --this.counter % 60;
                    this.minutes = parseInt(this.counter / 60, 10) % 60;
                }

                this.countDownTimer();
            }, 1000);
        }
    },
    mounted() {
        let self = this;

        window.addEventListener("keyup", e => {
            var i = 0;
            // console.log(e.key);

            for (i; i <= 10; i++) {
                if (e.code == "Digit" + i) {
                    this.answerUser.push(i);

                    // console.log("sd" + this.answerUser.length);
                    // console.log("a" + this.answerUser.length - 1);

                    this.aa.push(i);

                    if (this.aa.length % 2 == 0) {
                        // console.log("222");

                        if (this.countDownChoise > 0) {
                            setTimeout(() => {
                                this.countDownChoise -= 1;

                                // console.log(this.countDownChoise);
                                this.aa.shift();
                                this.aa.shift(1, 1);
                                 this.handleAnswerClick();
                            }, 1000);
                        }

                        this.countDownChoise = 6;
                       
                    }
                }
            }
            // console.log(this.aa);
            // console.log(this.aa[0]*10 + this.aa[1]);
            // // console.log(this.currentQuestion);
            // console.log('answer'+this.questionsRan[this.currentQuestion].answer);
if (this.aa[0]*10 + this.aa[1] == this.questionsRan[this.currentQuestion].answer) {
console.log('true');
this.score = this.score + 1;
        }

        });

       
    }
};
</script>

<style>
.card-body {
    font-family: "Sarabun", sans-serif;
    font-size: 30px;
    color: #1e3966;
}

.imgup {
    width: 100vw;
    height: 901px;
}

.img {
    position: absolute;
}

/* fontเฉลย 660000 */
/* fe9900 */
/* FF7000 */
.dot {
    height: 65px;
    width: 65px;
    background-color: #ff7000;
    border-radius: 50%;
    display: inline-block;
}

.dot2 {
    height: 65px;
    width: 65px;
    background-color: #FE9900;
    border-radius: 50%;
    display: inline-block;
    color:  #660000
}
/* .imageContainer {
       width:200px; 
       height:200px; 
      background-image: url("images/TextAns.png");

 } */

.font-kanit {
    font-family: "Kanit", sans-serif;
    font-size: "9px";
}


.start1 {
  background: linear-gradient(to bottom, #ffa927 0%, #ff6400 100%);
  color: white; 
  border: none;
                    font-size: 30px;

}

.start1:hover {
  background: linear-gradient(to bottom, #2e68a8 0%, #234277 100%);
  color: white;
    border: none;
  font-size: 30px;


}
</style>
