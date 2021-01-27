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
 เป็นแบบทดสอบที่ผู้ทดสอบต้องหาข้อสรุปบางอย่างที่สมเหตุสมผลจากข้อมูลที่อาจดูสับสน  ต้องอาศัยการวิเคราะห์จากข้อเท็จจริงที่มี และผู้ทดสอบต้องมีการวิเคราะห์ ตั้งสมมติฐานจากข้อมูลเดียวที่ได้รับในขณะนั้น  ร่วมกับการใช้ความสามารถในการให้เหตุผลจากการอ่าน โดยใช้สมาธิ ตลอดจนความรอบคอบในการทำโจทย์แต่ละข้อ
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
                                <div class="card " style="height: 120px;">
                                    <b-progress class="" height="50px">
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

                                    <div
                                        class="card-body"
                                        style=" height:145px"
                                    >
                                        จากโจทย์ที่ได้อ่าน
                                        จงวิเคราะห์หาข้อเท็จจริง และหาคำตอบ
                                        ที่สมเหตุสมผล
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

                                <div class="bookbg">
                                    <book></book>
                                </div>

                                <!-- <flipbook
                                    :zooms="null"
                                    class=" book"
                                    :pages="pages"
                                    :startPage="select"
                                    v-slot="flipbook"
                                    style=" width: 80vw;
    height: 80vh;"
                                >
                                    <div class="btnbook" v-if="!isHidden">
                                        <button
                                            @click="flipbook.flipRight"
                                            v-on:click="
                                                (isHidden = true),
                                                    handleAnswerClick()
                                            "
                                            class="button "
                                        >
                                            A</button 
                                        >{{ flipbook.page }}<br /><br />
                                        <button @click="flipbook.flipRight" class="button ">
                                            B</button
                                        >{{ flipbook.page }}<br /><br />
                                        <button @click="flipbook.flipRight" class="button ">
                                            C</button
                                        >{{ flipbook.page }}<br /><br />
                                        <button @click="flipbook.flipRight" class="button ">
                                            D</button
                                        >{{ flipbook.page }}<br />
                                    </div>
                                </flipbook> -->
                                {{pages}}
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
        Logo
    },

    data() {
        return {
            countDownChoise: 1,
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

            pages: [
                "images/book/l1.png",
                "images/book/r1.png",
                "images/book/l22.png",
                "images/book/r22.png",
                "images/book/l1.png",
                "images/book/r1.png",
                "images/book/l22.png",
                "images/book/l22.png"
            ],
            select: 1,

            books: [
                
                {
                    tietle:1,
                    choise:{
                        choiseText: 'เอ็มม่า',
                        choiseText: 'เจน',
                        choiseText: 'พอลลีน',
                    },
                    page: {
                        question1: 'images/book/Q1/1.png',
                        question2:'images/book/Q1/12.png',
                    }
                },

                 {
                    tietle:2.1,
                    choise:{
                        choiseText: 'ซูซี่',
                        choiseText: 'โจซี',
                        choiseText: 'ซัลลี่',
                        choiseText: 'แอนนา',
                    },
                    page: {
                        question1: 'images/book/Q2/2.png',
                        question2:'images/book/Q2/22.png',
                    }
                },
                 {
                    tietle:2.2,
                    choise:{
                        choiseText: 'ซูซี่',
                        choiseText: 'โจซี',
                        choiseText: 'ซัลลี่',
                        choiseText: 'แอนนา',
                    },
                    page: {
                        question1: 'images/book/Q2/3.png',
                        question2:'images/book/Q2/32.png',
                    }
                },
                {
                    tietle:3,
                    choise:{
                        choiseText: 'สมศรี',
                        choiseText: 'สมชาย',
                        choiseText: 'นำ้ทิพย์',
                        choiseText: 'ชวาลา',
                    },
                    page: {
                        question1: 'images/book/Q2/4.png',
                        question2:'images/book/Q2/42.png',
                    }
                },
                {
                    tietle:4,
                    choise:{
                        choiseText: 'ประดับ',
                        choiseText: 'ชาตรี',
                        choiseText: 'ณรงค์',
                        choiseText: 'วันเพ็ญ',
                    },
                    page: {
                        question1: 'images/book/Q2/5.png',
                        question2:'images/book/Q2/52.png',
                    }
                },
                {
                    tietle:5.1,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/6.png',
                        question2:'images/book/Q2/62.png',
                    }
                },
                {
                    tietle:5.2,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:6,
                    choise:{
                        choiseText: 'ฟ้าใส่เสื้อ Size XL',
                        choiseText: 'น้ำเงินใส่เสื้อ Size XL',
                        choiseText: 'ดำใส่เสื้อ Size S',
                        choiseText: 'ฟ้าใส่เสื้อ Size เดียวกับดำ',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:7.1,
                    choise:{
                        choiseText: 'ทอม',
                        choiseText: 'ร็อบ',
                        choiseText: 'แฟรงค์',
                        choiseText: 'แซม',
                        choiseText: 'โจ',
                        choiseText: 'โทนี'
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:7.2,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:8.1,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:8.2,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:9.1,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:9.2,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:9.3,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:9.4,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:10.1,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:10.2,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:10.3,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:11.1,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:11.2,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:11.3,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:12.1,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:12.2,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:12.3,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:13.1,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:13.2,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:13.3,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:13.4,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:14,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:15,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:16,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
                {
                    tietle:17,
                    choise:{
                        choiseText: 'โตรอนโต',
                        choiseText: 'ฟลอริดา',
                        choiseText: 'โรม',
                        choiseText: 'ปารีส',
                    },
                    page: {
                        question1: 'images/book/Q2/7.png',
                        question2:'images/book/Q2/72.png',
                    }
                },
            ]
        };
    },
    methods: {
        selectPage(page, currentPage) {
            this.select = page - 1;
            console.log(page);
            console.log(currentPage);
        },

        startQuizFunc() {
            //   this.countDownTimer();
            this.startQuiz = true;
        },

        handleAnswerClick() {
            this.countDownChoise = 2;

            if (this.countDownChoise > 0) {
                setTimeout(() => {
                    this.countDownChoise -= 1;

                    console.log(this.countDownChoise);

                    if (this.countDownChoise <= 1) {
                        this.isHidden = false;
                        console.log(this.isHidden);
                    }
                }, 1000);
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
        }
    },
    mounted() {
        console.log(this.pages);
    }
};
</script>

<style>
.flipbook {
    width: 150%;
    height: 150%;
}

.bookbg {
    position: absolute;
    height: auto;
    top: 145%;
    left: 12.5%;
    word-wrap: break-word;
    max-width: 1500px;
}

.book {
    position: absolute;
    top: 100%;
    left: -16%;
}

.btnbook {
    position: absolute;
    z-index: 1;
    font-size: 16;
    word-wrap: break-word;
    width: 10%;
    top: 40%;
    left: 62%;
    max-width: 100%;
}

.button {
    height: 39px;
    width: 39px;
    border-radius: 50%;
    border-style: none;
}
</style>
