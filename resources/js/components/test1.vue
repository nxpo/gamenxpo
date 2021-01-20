<template>
    <div>
        <div v-if="showScore">You Scored {{ score }}</div>
        <div class="" v-else>
            <span v-if="!startQuiz">
                <div class="bgstart">
                    <div class="container">
                        <b-row
                            class="text-center"
                            style=";
  height: 25%;"
                        >
                            <b-col
                                style=";
  top: 80%;"
                                class="font-sarabun"
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
                                style="color: #1E3966;resize: none; border:none;  font-size: 30px;line-height: 50px; "
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
                <nav
                    class="navbar navbar-light"
                    style="background-color: white; height: 85px 
  box-shadow: 5px 10px 18px #888888;"
                >
                    <div class="col-2">
                        <a class="navbar-brand pl-5" href="#"><Logo /></a>
                    </div>
                    <div class="col-10">
                        <div class="row">
                            <div
                                class="col-sm text-center font-kanit"
                                :key="index"
                                v-for="(option, index) in questionsRan.length -
                                    2"
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

                <br />
                <div class="container ">
                    <div class="row pt-4">
                        <div class="col text-center">
                            <component
                                v-bind:is="
                                    questionsRan[currentQuestion].component
                                "
                            ></component>
                        </div>
                        <div class="col text-center">
                            <div
                                class="card "
                                style="width: 35rem;      background: linear-gradient(to bottom, #ffffff 60%, #808080 176%);
  height: 450px;  box-shadow: 0 0 8px 2px  #808080;"
                            >
                                <b-progress class="" height="30px">
                                    <b-progress-bar
                                        :style="{
                                            'background-color': '#f5d020',
                                            'background-image':
                                                'linear-gradient(315deg, #f5d020 0%, #f53803 74%)'
                                        }"
                                        :max="600"
                                        :value="countDown"
                                        >
                                        <!-- <i class="fa fa-clock"></i> -->


                                        {{ minutes }}:{{
                                            seconds
                                        }}</b-progress-bar
                                    >
                                </b-progress>

                                <div
                                    class="card-body"
                                    style="    
 font-size:26px; line-height: 45px;padding: 40px;   text-align: center; color:#4682B4"
                                >
                                    จากรูปที่ให้มา อะไร คือ
                                    สิ่งที่มองเห็นจากด้าน A , B หรือ C
                                    <br />แม้ว่าตัวเลือกอาจจะถูกหมุนไปก็ตาม
                                    <p
                                        class="card-text"
                                        style=" font-size:31px; line-height: 40px;padding: 40px;  color:red"
                                    >
                                        <br />
                                        {{
                                            questionsRan[currentQuestion]
                                                .questionText
                                        }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <center>
                    <div
                        class="d-flex justify-content-around pt-5"
                        style="width: 65%  "
                    >
                        <div
                            class="pt-5 "
                            :key="index"
                            v-for="(option, index) in questionsRan[
                                currentQuestion
                            ].answerOptions"
                        >
                            <a @click="handleAnswerClick(option.isCorrect)">
                                <!-- <Ans> </Ans> -->
                                <component
                                    v-bind:is="
                                        questionsRan[currentQuestion]
                                            .answerOptions[index].answerText
                                    "
                                ></component>
                            </a>
                        </div>
                    </div>
                </center>
            </span>
        </div>
    </div>
</template>

<script>
import IconRestore from "./icons/IconTest.vue";
import shadowbtn from "./icons/shadowbtn.vue";
import Subsection1_3_1 from "./question/Q1-3.vue";
import Subsection1_3_2 from "./question/Q1-3.vue";
import Subsection1_3_3 from "./question/Q1-3.vue";
import Subsection4_6_4 from "./question/Q4-6.vue";
import Subsection4_6_5 from "./question/Q4-6.vue";
import Subsection4_6_6 from "./question/Q4-6.vue";
import Subsection7_8_7 from "./question/Q7-8.vue";
import Subsection7_8_8 from "./question/Q7-8.vue";
import Subsection9_11_9 from "./question/Q9-11.vue";
import Subsection9_11_10 from "./question/Q9-11.vue";
import Subsection9_11_11 from "./question/Q9-11.vue";
import Subsection12_14_12 from "./question/Q12-14.vue";
import startbtn from "./icons/startbtn.vue";
import startbtnon from "./icons/startbtnon.vue";

import Q1_1 from "./answer/Q1-1.vue";
import Q1_2 from "./answer/Q1-2.vue";
import Q1_3 from "./answer/Q1-3.vue";
import Q1_4 from "./answer/Q1-4.vue";
import Q1_5 from "./answer/Q1-5.vue";
import Q2_1 from "./answer/Q2-1.vue";
import Q2_2 from "./answer/Q2-2.vue";
import Q2_3 from "./answer/Q2-3.vue";
import Q2_4 from "./answer/Q2-4.vue";
import Q2_5 from "./answer/Q2-5.vue";
import Q3_1 from "./answer/Q3-1.vue";
import Q3_2 from "./answer/Q3-2.vue";
import Q3_3 from "./answer/Q3-3.vue";
import Q3_4 from "./answer/Q3-4.vue";
import Q3_5 from "./answer/Q3-5.vue";
import Q4_1 from "./answer/Q4-1.vue";
import Q4_2 from "./answer/Q4-2.vue";
import Q4_3 from "./answer/Q4-3.vue";
import Q4_4 from "./answer/Q4-4.vue";
import Q4_5 from "./answer/Q4-5.vue";
import Q5_1 from "./answer/Q5-1.vue";
import Q5_2 from "./answer/Q5-2.vue";
import Q5_3 from "./answer/Q5-3.vue";
import Q5_4 from "./answer/Q5-4.vue";
import Q5_5 from "./answer/Q5-5.vue";
import Q6_1 from "./answer/Q6-1.vue";
import Q6_2 from "./answer/Q6-2.vue";
import Q6_3 from "./answer/Q6-3.vue";
import Q6_4 from "./answer/Q6-4.vue";
import Q6_5 from "./answer/Q6-5.vue";
import Q7_1 from "./answer/Q7-1.vue";
import Q7_2 from "./answer/Q7-2.vue";
import Q7_3 from "./answer/Q7-3.vue";
import Q7_4 from "./answer/Q7-4.vue";
import Q7_5 from "./answer/Q7-5.vue";
import Q8_1 from "./answer/Q8-1.vue";
import Q8_2 from "./answer/Q8-2.vue";
import Q8_3 from "./answer/Q8-3.vue";
import Q8_4 from "./answer/Q8-4.vue";
import Q8_5 from "./answer/Q8-5.vue";
import Q9_1 from "./answer/Q9-1.vue";
import Q9_2 from "./answer/Q9-2.vue";
import Q9_3 from "./answer/Q9-3.vue";
import Q9_4 from "./answer/Q9-4.vue";
import Q9_5 from "./answer/Q9-5.vue";
import Q10_1 from "./answer/Q10-1.vue";
import Q10_2 from "./answer/Q10-2.vue";
import Q10_3 from "./answer/Q10-3.vue";
import Q10_4 from "./answer/Q10-4.vue";
import Q10_5 from "./answer/Q10-5.vue";
import Q11_1 from "./answer/Q11-1.vue";
import Q11_2 from "./answer/Q11-2.vue";
import Q11_3 from "./answer/Q11-3.vue";
import Q11_4 from "./answer/Q11-4.vue";
import Q11_5 from "./answer/Q11-5.vue";
import Q12_1 from "./answer/Q12-1.vue";
import Q12_2 from "./answer/Q12-2.vue";
import Q12_3 from "./answer/Q12-3.vue";
import Q12_4 from "./answer/Q12-4.vue";
import Q12_5 from "./answer/Q12-5.vue";

import Ans from "./icons/Ans.vue";
import Logo from "./icons/Logo.vue";
import bgfrist from "./icons/bgfrist.vue";
export default {
    components: {
        IconRestore,
        Subsection1_3_1: Subsection1_3_1,
        Subsection1_3_2: Subsection1_3_2,
        Subsection1_3_3: Subsection1_3_3,
        Subsection4_6_4: Subsection4_6_4,
        Subsection4_6_5: Subsection4_6_5,
        Subsection4_6_6: Subsection4_6_6,
        Subsection7_8_7: Subsection7_8_7,
        Subsection7_8_8: Subsection7_8_8,
        Subsection9_11_9: Subsection9_11_9,
        Subsection9_11_10: Subsection9_11_10,
        Subsection9_11_11: Subsection9_11_11,
        Subsection12_14_12: Subsection12_14_12,
        Ans: Ans,
        Logo,
        shadowbtn,
        bgfrist,
        startbtn,
        startbtnon,
        Q1_1: Q1_1,
        Q1_2: Q1_2,
        Q1_3: Q1_3,
        Q1_4: Q1_4,
        Q1_5: Q1_5,
        Q2_1: Q2_1,
        Q2_2: Q2_2,
        Q2_3: Q2_3,
        Q2_4: Q2_4,
        Q2_5: Q2_5,
        Q3_1: Q3_1,
        Q3_2: Q3_2,
        Q3_3: Q3_3,
        Q3_4: Q3_4,
        Q3_5: Q3_5,
        Q4_1: Q4_1,
        Q4_2: Q4_2,
        Q4_3: Q4_3,
        Q4_4: Q4_4,
        Q4_5: Q4_5,
        Q5_1: Q5_1,
        Q5_2: Q5_2,
        Q5_3: Q5_3,
        Q5_4: Q5_4,
        Q5_5: Q5_5,
        Q6_1: Q6_1,
        Q6_2: Q6_2,
        Q6_3: Q6_3,
        Q6_4: Q6_4,
        Q6_5: Q6_5,
        Q7_1: Q7_1,
        Q7_2: Q7_2,
        Q7_3: Q7_3,
        Q7_4: Q7_4,
        Q7_5: Q7_5,
        Q8_1: Q8_1,
        Q8_2: Q8_2,
        Q8_3: Q8_3,
        Q8_4: Q8_4,
        Q8_5: Q8_5,
        Q9_1: Q9_1,
        Q9_2: Q9_2,
        Q9_3: Q9_3,
        Q9_4: Q9_4,
        Q9_5: Q9_5,
        Q10_1: Q10_1,
        Q10_2: Q10_2,
        Q10_3: Q10_3,
        Q10_4: Q10_4,
        Q10_5: Q10_5,
        Q11_1: Q11_1,
        Q11_2: Q11_2,
        Q11_3: Q11_3,
        Q11_4: Q11_4,
        Q11_5: Q11_5,
        Q12_1: Q12_1,
        Q12_2: Q12_2,
        Q12_3: Q12_3,
        Q12_4: Q12_4,
        Q12_5: Q12_5
    },

    data() {
        return {
            hours: 0,
            minutes: 10,
            seconds: 0,
            counter: 600,
            styleObject: {
                color: "black",
                fontSize: "25px"
            },
            styleObject2: {
                color: "white",
                fontSize: "28px",
                "background-image": "url(images/hezagon.png)",
                "background-size": "contain",
                "background-repeat": "no-repeat",
                "background-position": "center"
            },

            styleObject3: {
                color: "D1D3D4",
                fontSize: "25px"
            },
            random: 0,
            ramdomCheck: [],
            currentQuestion: 0,
            showScore: false,
            score: 0,
            countDown: 600,
            timer: null,
            startQuiz: false,
            questionsRan: [],
            questions: [
                {
                    title: "1",
                    component: Subsection1_3_1,
                    questionText: "จงเลือกรูปจากด้านที่มองเห็น จากด้าน B",
                    answerOptions: [
                        { answerText: Q1_1, isCorrect: true },
                        { answerText: Q1_2, isCorrect: false },
                        { answerText: Q1_3, isCorrect: false },
                        { answerText: Q1_4, isCorrect: false },
                        { answerText: Q1_5, isCorrect: false }
                    ]
                },
                {
                    title: "2",
                    component: Subsection1_3_2,
                    questionText: "จงเลือกรูปจากด้านที่มองเห็น จากด้าน C",
                    answerOptions: [
                        { answerText: Q2_1, isCorrect: false },
                        { answerText: Q2_2, isCorrect: false },
                        { answerText: Q2_3, isCorrect: false },
                        { answerText: Q2_4, isCorrect: false },
                        { answerText: Q2_5, isCorrect: true }
                    ]
                },
                {
                    title: "3",
                    component: Subsection1_3_3,
                    questionText: "จงเลือกรูปจากด้านที่มองเห็น จากด้าน A",
                    answerOptions: [
                        { answerText: Q3_1, isCorrect: false },
                        { answerText: Q3_2, isCorrect: false },
                        { answerText: Q3_3, isCorrect: true },
                        { answerText: Q3_4, isCorrect: false },
                        { answerText: Q3_5, isCorrect: false }
                    ]
                },
                {
                    title: "4",
                    component: Subsection4_6_4,
                    questionText: "จงเลือกรูปจากด้านที่มองเห็น จากด้าน C",
                    answerOptions: [
                        { answerText: Q4_1, isCorrect: false },
                        { answerText: Q4_2, isCorrect: false },
                        { answerText: Q4_3, isCorrect: false },
                        { answerText: Q4_4, isCorrect: false },
                        { answerText: Q4_5, isCorrect: true }
                    ]
                },
                {
                    title: "5",
                    component: Subsection4_6_5,
                    questionText: "จงเลือกรูปจากด้านที่มองเห็น จากด้าน A",
                    answerOptions: [
                        { answerText: Q5_1, isCorrect: false },
                        { answerText: Q5_2, isCorrect: false },
                        { answerText: Q5_3, isCorrect: false },
                        { answerText: Q5_4, isCorrect: true },
                        { answerText: Q5_5, isCorrect: false }
                    ]
                },
                {
                    title: "6",
                    component: Subsection4_6_6,
                    questionText: "จงเลือกรูปจากด้านที่มองเห็น จากด้าน B",
                    answerOptions: [
                        { answerText: Q6_1, isCorrect: true },
                        { answerText: Q6_2, isCorrect: false },
                        { answerText: Q6_3, isCorrect: false },
                        { answerText: Q6_4, isCorrect: false },
                        { answerText: Q6_5, isCorrect: false }
                    ]
                },
                {
                    title: "7",
                    component: Subsection7_8_7,
                    questionText: "จงเลือกรูปจากด้านที่มองเห็น จากด้าน A",
                    answerOptions: [
                        { answerText: Q7_1, isCorrect: false },
                        { answerText: Q7_2, isCorrect: false },
                        { answerText: Q7_3, isCorrect: true },
                        { answerText: Q7_4, isCorrect: false },
                        { answerText: Q7_5, isCorrect: false }
                    ]
                },
                {
                    title: "8",
                    component: Subsection7_8_8,
                    questionText: "จงเลือกรูปจากด้านที่มองเห็น จากด้าน C",
                    answerOptions: [
                        { answerText: Q8_1, isCorrect: false },
                        { answerText: Q8_2, isCorrect: false },
                        { answerText: Q8_3, isCorrect: false },
                        { answerText: Q8_4, isCorrect: true },
                        { answerText: Q8_5, isCorrect: false }
                    ]
                },
                {
                    title: "9",
                    component: Subsection9_11_9,
                    questionText: "จงเลือกรูปจากด้านที่มองเห็น จากด้าน A",
                    answerOptions: [
                        { answerText: Q9_1, isCorrect: false },
                        { answerText: Q9_2, isCorrect: false },
                        { answerText: Q9_3, isCorrect: false },
                        { answerText: Q9_4, isCorrect: true },
                        { answerText: Q9_5, isCorrect: false }
                    ]
                },
                {
                    title: "10",
                    component: Subsection9_11_10,
                    questionText: "จงเลือกรูปจากด้านที่มองเห็น จากด้าน B",
                    answerOptions: [
                        { answerText: Q10_1, isCorrect: true },
                        { answerText: Q10_2, isCorrect: false },
                        { answerText: Q10_3, isCorrect: false },
                        { answerText: Q10_4, isCorrect: false },
                        { answerText: Q10_5, isCorrect: false }
                    ]
                },
                {
                    title: "11",
                    component: Subsection9_11_11,
                    questionText: "จงเลือกรูปจากด้านที่มองเห็น จากด้าน C",
                    answerOptions: [
                        { answerText: Q11_1, isCorrect: true },
                        { answerText: Q11_2, isCorrect: false },
                        { answerText: Q11_3, isCorrect: false },
                        { answerText: Q11_4, isCorrect: false },
                        { answerText: Q11_5, isCorrect: false }
                    ]
                },
                {
                    title: "12",
                    component: Subsection12_14_12,
                    questionText: "จงเลือกรูปจากด้านที่มองเห็น จากด้าน A",
                    answerOptions: [
                        { answerText: Q12_1, isCorrect: false },
                        { answerText: Q12_2, isCorrect: true },
                        { answerText: Q12_3, isCorrect: false },
                        { answerText: Q12_4, isCorrect: false },
                        { answerText: Q12_5, isCorrect: false }
                    ]
                }
            ]
        };
    },
    methods: {
        startQuizFunc() {
            this.startQuiz = true;
            this.countDownTimer();
            this.randomNum();
        },
        randomNum() {
            var q = this.questions;
            var quest = q.slice();
            var rnd;
            while (quest.length) {
                rnd = Math.floor(Math.random() * quest.length);
                console.log(quest[rnd].questionText);
                this.questionsRan.push(quest[rnd]);
                quest[rnd] = "";
                quest = quest.filter(a => {
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
            if (nextQuestion < this.questions.length - 2) {
                this.currentQuestion = nextQuestion;
                // this.$store.state.questionAttended = this.currentQuestion;
                // localStorage.setItem('qattended', this.currentQuestion)
                // this.countDown = 10;
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

                    this.seconds = --this.counter % 60;
                    this.minutes = parseInt(this.counter / 60, 10) % 60;

                    this.countDownTimer();
                }, 1000);
            } else {
                this.handleAnswerClick(false);
            }
        }
    },

    mounted() {}
};
</script>
<style>
.card-body {
    font-family: "Sarabun", sans-serif;
}

.font-kanit {
    font-family: "Kanit", sans-serif;
}

.font-sarabun {
    font-family: "Sarabun", sans-serif;
    font-weight: bold;
    color: #1a4c84;
    font-size: 35px;
}
</style>
