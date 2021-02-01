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
                        <b-row class="text-center pt-2 font-sarabun">
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
                        <div class="col pt-3 pl-5">
                            <Logo />
                        </div>
                        <div class="col-9 pt-3">
                            <div class="col text-center">
                                <div class="card " style="height: 105px;">
                                    <b-progress class="" height="50px">
                                        <b-progress-bar
                                            :style="{
                                                'background-color': '#f5d020',
                                                'background-image':
                                                    'linear-gradient(315deg, #f5d020 0%, #f53803 74%)'
                                            }"
                                            :max="600"
                                            :value="countDown"
                                        >
                                            {{ minutes }}:{{ seconds }}
                                        </b-progress-bar>
                                    </b-progress>

                                    <div
                                        class="card-body"
                                        style=" height:100px"
                                    >
                                        จากโจทย์ที่ได้อ่าน
                                        จงวิเคราะห์หาข้อเท็จจริง และหาคำตอบ
                                        ที่สมเหตุสมผล
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="bookbg">
                                    <book></book>
                                </div>

                                <flipbook
                                    :zooms="null"
                                    class=" book"
                                    :pages="pagesRan"
                                    :startPage="select"
                                    v-slot="flipbook"
                                    style=" width: 80vw;
    height: 80vh;
  
"       >
                                    <div class="btnbook" v-if="!isHidden">
                                        <div
                                            class="w3-card-4 w3-margin"
                                            style="width:50%"
                                        >
                                            <div class="w3-row">
                                                <div
                                                    class="w3-third w3-center "
                                                >
                                                    <div class="btnbook"  v-if="
                                                                questionsRan[
                                                                    flipbook.page /
                                                                        2 -
                                                                        0.5
                                                                ].choice
                                                                    .length <= 4 && (questionsRan[
                                                                    flipbook.page /
                                                                        2 -
                                                                        0.5
                                                                ].title != 14.1 && questionsRan[
                                                                    flipbook.page /
                                                                        2 -
                                                                        0.5
                                                                ].title != 15.1 && questionsRan[
                                                                    flipbook.page /
                                                                        2 -
                                                                        0.5
                                                                ].title != 17.1)
                                                            ">
                                                        <div
                                                            class="row "
                                                            :key="index"
                                                            v-for="(option,
                                                            index) in questionsRan[
                                                                flipbook.page /
                                                                    2 -
                                                                    0.5
                                                            ].choice"
                                                           
                                                        >
                                                            <div class="col-2 ">
                                                                <button
                                                                    @click="
                                                                        flipbook.flipRight
                                                                    "
                                                                    v-on:click="
                                                                        (isHidden = true),
                                                                            handleAnswerClick()
                                                                    "
                                                                    class=" buttonshadow"
                                                   
                                                                >
                                                                    {{choiceAnswer[index]}}</button
                                                                ><br />
                                                            </div>
                                                            <div
                                                                class="col-10 "
                                                                style="padding:8px"
                                                            >
                                                       {{
                                                                    option.choiceText
                                                                }}
                                                               
                                                               
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="btnbook4"  v-if="
                                                                questionsRan[
                                                                    flipbook.page /
                                                                        2 -
                                                                        0.5
                                                                ].choice
                                                                    .length <= 4 && (questionsRan[
                                                                    flipbook.page /
                                                                        2 -
                                                                        0.5
                                                                ].title === 14.1 || questionsRan[
                                                                    flipbook.page /
                                                                        2 -
                                                                        0.5
                                                                ].title === 15.1 || questionsRan[
                                                                    flipbook.page /
                                                                        2 -
                                                                        0.5
                                                                ].title === 17.1)
                                                            ">
                                                        <div
                                                            class="row "
                                                            :key="index"
                                                            v-for="(option,
                                                            index) in questionsRan[
                                                                flipbook.page /
                                                                    2 -
                                                                    0.5
                                                            ].choice"
                                                           
                                                        >
                                                            <div class="col-2 ">
                                                                <button
                                                                    @click="
                                                                        flipbook.flipRight
                                                                    "
                                                                    v-on:click="
                                                                        (isHidden = true),
                                                                            handleAnswerClick()
                                                                    "
                                                                    class=" buttonshadow"
                                                                >
                                                                    {{choiceAnswer[index]}}</button
                                                                ><br />
                                                            </div>
                                                            <div
                                                                class="col-10"
                                                                style="padding:8px"
                                                            >
                                                               {{
                                                                    option.choiceText
                                                                }}
                                                               
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="btnbook"  v-if="
                                                                questionsRan[
                                                                    flipbook.page /
                                                                        2 -
                                                                        0.5
                                                                ].choice
                                                                    .length > 4 
                                                            ">
                                                        <div
                                                            class="row "
                                                        >
                                                            <div class="col-6" :key="index"
                                                            v-for="(option,
                                                            index) in questionsRan[
                                                                flipbook.page /
                                                                    2 -
                                                                    0.5
                                                            ].choice" style="padding:8px">
                                                                <div
                                                            class="row "
                                                        ><button
                                                                    @click="
                                                                        flipbook.flipRight
                                                                    "
                                                                    v-on:click="
                                                                        (isHidden = true),
                                                                            handleAnswerClick()
                                                                    "
                                                                    class=" buttonshadow"
                                                                >
                                                                    {{choiceAnswer[index]}}</button
                                                                > &nbsp;{{
                                                                    option.choiceText
                                                                }}</div>
                                                                

                                                            </div>
                
                                                        </div>
                                                    </div>


                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </flipbook>

                                <div class="bookmark">
                                    <mark1 v-if="currentQuestion == 0"></mark1>
                                    <mark1w v-if="currentQuestion > 0"></mark1w
                                    ><br />
                                    <mark2 v-if="currentQuestion <= 1"></mark2>
                                    <mark2w v-if="currentQuestion > 1"></mark2w
                                    ><br />
                                    <mark3 v-if="currentQuestion <= 2"></mark3>
                                    <mark3w v-if="currentQuestion > 2"></mark3w
                                    ><br />
                                    <mark4 v-if="currentQuestion <= 3"></mark4>
                                    <mark4w v-if="currentQuestion > 3"></mark4w
                                    ><br />
                                    <mark5 v-if="currentQuestion <= 4"></mark5>
                                    <mark5w v-if="currentQuestion > 4"></mark5w
                                    ><br />
                                    <mark6 v-if="currentQuestion <= 5"></mark6>
                                    <mark6w v-if="currentQuestion > 5"></mark6w
                                    ><br />
                                    <mark7 v-if="currentQuestion <= 6"></mark7>
                                    <mark7w v-if="currentQuestion > 6"></mark7w
                                    ><br />
                                    <mark8 v-if="currentQuestion <= 7"></mark8>
                                    <mark8w v-if="currentQuestion > 7"></mark8w
                                    ><br />
                                    <mark9 v-if="currentQuestion <= 8"></mark9>
                                    <mark9w v-if="currentQuestion > 8"></mark9w
                                    ><br />
                                    <mark10
                                        v-if="currentQuestion <= 9"
                                    ></mark10>
                                    <mark10w
                                        v-if="currentQuestion > 9"
                                    ></mark10w
                                    ><br />
                                </div>
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
import bookmark from "./book/bookmark.vue";
import mark1 from "./book/tag/1b.vue";
import mark1w from "./book/tag/1w.vue";
import mark2 from "./book/tag/2b.vue";
import mark2w from "./book/tag/2w.vue";
import mark3 from "./book/tag/3b.vue";
import mark3w from "./book/tag/3w.vue";
import mark4 from "./book/tag/4b.vue";
import mark4w from "./book/tag/4w.vue";
import mark5 from "./book/tag/5b.vue";
import mark5w from "./book/tag/5w.vue";
import mark6 from "./book/tag/6b.vue";
import mark6w from "./book/tag/6w.vue";
import mark7 from "./book/tag/7b.vue";
import mark7w from "./book/tag/7w.vue";
import mark8 from "./book/tag/8b.vue";
import mark8w from "./book/tag/8w.vue";
import mark9 from "./book/tag/9b.vue";
import mark9w from "./book/tag/9w.vue";
import mark10 from "./book/tag/10b.vue";
import mark10w from "./book/tag/10w.vue";

export default {
    components: {
        
        startbtn,
        book,
        Logo,
        bookmark,
        mark1,
        mark1w,
        mark2,
        mark2w,
        mark3w,
        mark3,
        mark4,
        mark4w,
        mark5,
        mark5w,
        mark6,
        mark6w,
        mark7,
        mark7w,
        mark8,
        mark8w,
        mark9,
        mark9w,
        mark10,
        mark10w
    },

    data() {
        return {
            
            countDownChoise: 1,
            hours: 0,
            minutes: 10,
            seconds: 0,
            counter: 600,
            random: 0,
            currentQuestion: 0,
            showScore: false,
            score: 0,
            countDown: 600,
            timer: null,
            startQuiz: false,
            isHidden: false,
            select: 1,
            questionsRan: [],
            pagesRan: [],
            styleObject1: {
                position: "absolute",
                "z-index": 1,
                top: "55%",
                left: "80%"
            },

            choiceAnswer :['A','B','C','D','E','F'],
             

            books: [
                {
                    title: 1,
                    choice: [
                        { choiceText: "เอ็มม่า", isCorrect: false },
                        { choiceText: "เจน", isCorrect: false },
                        { choiceText: "พอลลีน", isCorrect: true }
                    ],
                    page: {
                        question1: "images/book/Ans/1.png",
                        question2: "images/book/Ans/12.png"
                    }
                },
                {
                    title: 2.1,
                    choice: [
                        {
                            choiceText: "ซูซี่",
                            isCorrect: false
                        },
                        { choiceText: "โจซี", isCorrect: false },
                        { choiceText: "ซัลลี่", isCorrect: false },
                        { choiceText: "แอนนา", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/2.png",
                        question2: "images/book/Ans/22.png"
                    }
                },
                {
                    title: 2.2,
                    choice: [
                        {
                            choiceText: "ซูซี่",
                            isCorrect: false
                        },
                        { choiceText: "โจซี", isCorrect: false },
                        { choiceText: "ซัลลี่", isCorrect: false },
                        { choiceText: "แอนนา", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/3.png",
                        question2: "images/book/Ans/32.png"
                    }
                },
                {
                    title: 3,
                    choice: [
                        {
                            choiceText: "สมศรี",
                            isCorrect: false
                        },
                        { choiceText: "สมชาย", isCorrect: false },
                        { choiceText: "นำ้ทิพย์", isCorrect: false },
                        { choiceText: "ชวาลา", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/4.png",
                        question2: "images/book/Ans/42.png"
                    }
                },
                {
                    title: 4,
                    choice: [
                        {
                            choiceText: "ประดับ",
                            isCorrect: false
                        },
                        { choiceText: "ชาตรี", isCorrect: false },
                        { choiceText: "ณรงค์", isCorrect: false },
                        { choiceText: "วันเพ็ญ", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/5.png",
                        question2: "images/book/Ans/52.png"
                    }
                },
                {
                    title: 5.1,
                    choice: [
                        {
                            choiceText: "โตรอนโต",
                            isCorrect: false
                        },
                        { choiceText: "ฟลอริดา", isCorrect: false },
                        { choiceText: "โรม", isCorrect: false },
                        { choiceText: "ปารีส", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/6.png",
                        question2: "images/book/Ans/62.png"
                    }
                },
                {
                    title: 5.2,
                    choice: [
                        {
                            choiceText: "โตรอนโต",
                            isCorrect: false
                        },
                        { choiceText: "ฟลอริดา", isCorrect: false },
                        { choiceText: "โรม", isCorrect: false },
                        { choiceText: "ปารีส", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/7.png",
                        question2: "images/book/Ans/72.png"
                    }
                },
                {
                    title: 6,
                    choice: [
                        {
                            choiceText: "ฟ้าใส่เสื้อ Size XL",
                            isCorrect: false
                        },
                        {
                            choiceText: "น้ำเงินใส่เสื้อ Size XL",
                            isCorrect: false
                        },
                        { choiceText: "ดำใส่เสื้อ Size S", isCorrect: false },
                        {
                            choiceText: "ฟ้าใส่เสื้อ Size เดียวกับดำ",
                            isCorrect: false
                        }
                    ],
                    page: {
                        question1: "images/book/Ans/8.png",
                        question2: "images/book/Ans/82.png"
                    }
                },
                {
                    title: 7.1,
                    choice: [
                        {
                            choiceText: "ทอม",
                            isCorrect: false
                        },
                        { choiceText: "ร็อบ", isCorrect: false },
                        { choiceText: "แฟรงค์", isCorrect: false },
                        { choiceText: "แซม", isCorrect: false },
                        { choiceText: "โจ", isCorrect: false },
                        { choiceText: "โทนี", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/9.png",
                        question2: "images/book/Ans/92.png"
                    }
                },
                {
                    title: 7.2,
                    choice: [
                        {
                            choiceText: "ทอม",
                            isCorrect: false
                        },
                        { choiceText: "ร็อบ", isCorrect: false },
                        { choiceText: "แฟรงค์", isCorrect: false },
                        { choiceText: "แซม", isCorrect: false },
                        { choiceText: "โจ", isCorrect: false },
                        { choiceText: "โทนี", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/10.png",
                        question2: "images/book/Ans/102.png"
                    }
                },
                {
                    title: 8.1,
                    choice: [
                        {
                            choiceText: "เฟร็ด",
                            isCorrect: false
                        },
                        { choiceText: "โจ", isCorrect: false },
                        { choiceText: "จอห์น", isCorrect: false },
                        { choiceText: "การ์ธ", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/11.png",
                        question2: "images/book/Ans/112.png"
                    }
                },
                {
                    title: 8.2,
                    choice: [
                        {
                            choiceText: "เฟร็ด",
                            isCorrect: false
                        },
                        { choiceText: "โจ", isCorrect: false },
                        { choiceText: "จอห์น", isCorrect: false },
                        { choiceText: "การ์ธ", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/120.png",
                        question2: "images/book/Ans/122.png"
                    }
                },
                {
                    title: 9.1,
                    choice: [
                        {
                            choiceText: "ขนมปัง",
                            isCorrect: false
                        },
                        { choiceText: "ไก่", isCorrect: false },
                        { choiceText: "เนื้อแกะ", isCorrect: false },
                        { choiceText: "ข้าว", isCorrect: false },
                        { choiceText: "เนย", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/13.png",
                        question2: "images/book/Ans/132.png"
                    }
                },
                {
                    title: 9.2,
                    choice: [
                        {
                            choiceText: "ชารอน",
                            isCorrect: false
                        },
                        { choiceText: "เคลลี่", isCorrect: false },
                        { choiceText: "โรบิน่า", isCorrect: false },
                        { choiceText: "แซม", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/14.png",
                        question2: "images/book/Ans/142.png"
                    }
                },
                {
                    title: 9.3,
                    choice: [
                        {
                            choiceText: "ชารอน",
                            isCorrect: false
                        },
                        { choiceText: "เคลลี่", isCorrect: false },
                        { choiceText: "โรบิน่า", isCorrect: false },
                        { choiceText: "แซม", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/15.png",
                        question2: "images/book/Ans/152.png"
                    }
                },
                {
                    title: 9.4,
                    choice: [
                        {
                            choiceText: "ขนมปัง",
                            isCorrect: false
                        },
                        { choiceText: "ไก่", isCorrect: false },
                        { choiceText: "เนื้อแกะ", isCorrect: false },
                        { choiceText: "ข้าว", isCorrect: false },
                        { choiceText: "เนย", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/16.png",
                        question2: "images/book/Ans/162.png"
                    }
                },
                {
                    title: 10.1,
                    choice: [
                        {
                            choiceText: "เคซี",
                            isCorrect: false
                        },
                        { choiceText: "สจ็วต", isCorrect: false },
                        { choiceText: "ริตซี", isCorrect: false },
                        { choiceText: "บิลลี", isCorrect: false },
                        { choiceText: "คอลิน", isCorrect: false }
                    ],

                    page: {
                        question1: "images/book/Ans/17.png",
                        question2: "images/book/Ans/172.png"
                    }
                },

                {
                    title: 10.2,
                    choice: [
                        {
                            choiceText: "5",
                            isCorrect: false
                        },
                        { choiceText: "4", isCorrect: false },
                        { choiceText: "3", isCorrect: false },
                        { choiceText: "2", isCorrect: false },
                        { choiceText: "1", isCorrect: false },
                        { choiceText: "ไม่มีเลย", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/18.png",
                        question2: "images/book/Ans/182.png"
                    }
                },
                {
                    title: 10.3,
                    choice: [
                        {
                            choiceText: "เคซี",
                            isCorrect: false
                        },
                        { choiceText: "สจ็วต", isCorrect: false },
                        { choiceText: "ริตซี", isCorrect: false },
                        { choiceText: "บิลลี", isCorrect: false },
                        { choiceText: "คอลิน", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/19.png",
                        question2: "images/book/Ans/192.png"
                    }
                },
                {
                    title: 11.1,
                    choice: [
                        {
                            choiceText: "คุณแบกชอว์",
                            isCorrect: false
                        },
                        { choiceText: "นางสาวเจนกินส์ ", isCorrect: false },
                        { choiceText: "คุณนายชานส์ ", isCorrect: false },
                        { choiceText: "คุณเฟลมมิง", isCorrect: false },
                        { choiceText: "คุณมาร์ก", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/20.png",
                        question2: "images/book/Ans/202.png"
                    }
                },
                {
                    title: 11.2,
                    choice: [
                        {
                            choiceText: "คุณแบกชอว์",
                            isCorrect: false
                        },
                        { choiceText: "นางสาวเจนกินส์ ", isCorrect: false },
                        { choiceText: "คุณนายชานส์ ", isCorrect: false },
                        { choiceText: "คุณเฟลมมิง", isCorrect: false },
                        { choiceText: "คุณมาร์ก", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/21.png",
                        question2: "images/book/Ans/212.png"
                    }
                },
                {
                    title: 11.3,
                    choice: [
                        {
                            choiceText: "คุณแบกชอว์",
                            isCorrect: false
                        },
                        { choiceText: "นางสาวเจนกินส์ ", isCorrect: false },
                        { choiceText: "คุณนายชานส์ ", isCorrect: false },
                        { choiceText: "คุณเฟลมมิง", isCorrect: false },
                        { choiceText: "คุณมาร์ก", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/220.png",
                        question2: "images/book/Ans/222.png"
                    }
                },
                {
                    title: 12.1,
                    choice: [
                        {
                            choiceText: "1",
                            isCorrect: false
                        },
                        { choiceText: "2", isCorrect: false },
                        { choiceText: "3", isCorrect: false },
                        { choiceText: "4", isCorrect: false },
                        { choiceText: "0", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/23.png",
                        question2: "images/book/Ans/232.png"
                    }
                },
                {
                    title: 12.2,
                    choice: [
                        {
                            choiceText: "1",
                            isCorrect: false
                        },
                        { choiceText: "2", isCorrect: false },
                        { choiceText: "3", isCorrect: false },
                        { choiceText: "4", isCorrect: false },
                        { choiceText: "0", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/24.png",
                        question2: "images/book/Ans/242.png"
                    }
                },
                {
                    title: 12.3,
                    choice: [
                        {
                            choiceText: "โตรอนโต",
                            isCorrect: false
                        },
                        { choiceText: "ฟลอริดา", isCorrect: false },
                        { choiceText: "โรม", isCorrect: false },
                        { choiceText: "ปารีส", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/25.png",
                        question2: "images/book/Ans/252.png"
                    }
                },
                {
                    title: 13.1,
                    choice: [
                        {
                            choiceText: "แซลลี",
                            isCorrect: false
                        },
                        { choiceText: "เชอริล", isCorrect: false },
                        { choiceText: "ลอรา", isCorrect: false },
                        { choiceText: "ทอม", isCorrect: false },
                        { choiceText: "แซนดี", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/26.png",
                        question2: "images/book/Ans/262.png"
                    }
                },
                {
                    title: 13.2,
                    choice: [
                        {
                            choiceText: "แซลลี",
                            isCorrect: false
                        },
                        { choiceText: "เชอริล", isCorrect: false },
                        { choiceText: "ลอรา", isCorrect: false },
                        { choiceText: "ทอม", isCorrect: false },
                        { choiceText: "แซนดี", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/27.png",
                        question2: "images/book/Ans/272.png"
                    }
                },
                {
                    title: 13.3,
                    choice: [
                        {
                            choiceText: "แซลลีและลอรา",
                            isCorrect: false
                        },
                        { choiceText: "แซลลีและทอม", isCorrect: false },
                        { choiceText: "ลอราและทอม", isCorrect: false },
                        { choiceText: "ทอมและแซนดี", isCorrect: false },
                        { choiceText: "แซนดีและแซลลี ", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/28.png",
                        question2: "images/book/Ans/282.png"
                    }
                },
                {
                    title: 13.4,
                    choice: [
                        {
                            choiceText: "7",
                            isCorrect: false
                        },
                        { choiceText: "8", isCorrect: false },
                        { choiceText: "9", isCorrect: false },
                        { choiceText: "10", isCorrect: false },
                        { choiceText: "11", isCorrect: false },
                        { choiceText: "12", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/29.png",
                        question2: "images/book/Ans/292.png"
                    }
                },
                {
                    title: 14.1,
                    choice: [
                        {
                            choiceText: "ผิวถูกทำลายด้วยการตากแดดนานๆ",
                            isCorrect: false
                        },
                        {
                            choiceText:
                                "ชั้นหนังกำพร้าอยู่ก่อนชั้นหนังแท้ ดังนั้นจะดำก่อน",
                            isCorrect: false
                        },
                        {
                            choiceText:
                                "สีผิวที่เข้มขึ้นมีผลมาจากการสร้างเมลานินใหม่หลังจากโดนรังสียูวี",
                            isCorrect: false
                        },
                        {
                            choiceText: "คนผิวขาวจะผิวคล้ำเร็วกว่าคนผิวดำ",
                            isCorrect: false
                        }
                    ],
                    page: {
                        question1: "images/book/Ans/30.png",
                        question2: "images/book/Ans/302.png"
                    }
                },
                {
                    title: 15.1,
                    choice: [
                        {
                            choiceText:
                                "การเคารพกฎกติกาของสังคมทำให้สังคมมีความเป็นระเบียบเรียบร้อย",
                            isCorrect: false
                        },
                        {
                            choiceText:
                                "มนุษย์เป็นสัตว์สังคมจึงต้องอยู่ด้วยกันอย่างมีความสุข",
                            isCorrect: false
                        },
                        {
                            choiceText:
                                "สังคมสงบสุขได้เพราะทุกคนในสังคมไม่เบียดเบียนกัน",
                            isCorrect: false
                        },
                        {
                            choiceText:
                                "ความสามัคคีทำให้สมาชิกในสังคมมีความสุข",
                            isCorrect: false
                        }
                    ],
                    page: {
                        question1: "images/book/Ans/31.png",
                        question2: "images/book/Ans/312.png"
                    }
                },
                {
                    title: 16.1,
                    choice: [
                        {
                            choiceText: "4",
                            isCorrect: false
                        },
                        { choiceText: "5", isCorrect: false },
                        { choiceText: "6", isCorrect: false },
                        { choiceText: "12", isCorrect: false },
                        { choiceText: "3", isCorrect: false },
                        { choiceText: "ไม่ทราบเลย", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/320.png",
                        question2: "images/book/Ans/322.png"
                    }
                },
                {
                    title: 17.1,
                    choice: [
                        {
                            choiceText: "การกินกล้วยหอมทำให้น้ำหนักลดได้มาก",
                            isCorrect: false
                        },
                        {
                            choiceText:
                                "วิตามินบีคือสารอาหารที่พบมากในกล้วยหอม",
                            isCorrect: false
                        },
                        {
                            choiceText:
                                "ในกล้วยหอมมีวิตามินครบถ้วนตามที่ร่างกายต้องการ",
                            isCorrect: false
                        },
                        {
                            choiceText:
                                "กล้วยหอมให้พลังงานสูง จึงสามารถรับประทานแทนอาหารเช้า",
                            isCorrect: false
                        }
                    ],
                    page: {
                        question1: "images/book/Ans/33.png",
                        question2: "images/book/Ans/332.png"
                    }
                }
            ]
        };
    },
    methods: {
        

        startQuizFunc() {
            //   this.countDownTimer();
            this.startQuiz = true;
            this.countDownTimer();
            this.randomNum();
   
        },

        randomNum() {
            var q = this.books;
      var quest1 = q.slice();
      var rnd;
            console.log(quest1);
            var rnd;
            while (this.books.length) {
                rnd = Math.floor(Math.random() * this.books.length);

                this.questionsRan.push(this.books[rnd]);

                this.pagesRan.push(this.books[rnd].page.question1);
                this.pagesRan.push(this.books[rnd].page.question2);
                this.books[rnd] = "";
                this.books = this.books.filter(a => {
                    return a;
                });
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
        },

        handleAnswerClick() {
            this.countDownChoise = 2;
            let nextQuestion = this.currentQuestion + 1;
        
            if (this.countDownChoise > 0) {
                setTimeout(() => {
                    this.countDownChoise -= 1;

                    if (this.countDownChoise <= 1) {
                        this.isHidden = false;
                    }
                    if (nextQuestion < this.questionsRan.length -23 ) {
                        this.currentQuestion = nextQuestion;
                    } else {
                   this.showScore = true;
                                    console.log(this.showScore);

                    }
                }, 1000);
            }
        }
    },
    mounted() {
    }
};
</script>

<style>
@media only screen and (max-width: 1500px) {
    .bookbg {
        display: none;
    }
    .book {
        display: none;
    }
    .bookmark{
                display: none;

    }
}
 .viewport{
     pointer-events: none;
}

.bookbg {
    position: absolute;
    height: auto;
    top: 106%;
    left: 6%;
    width: 1500px;
}

.book {
    position: absolute;
    top: 90%;
    left: -17.1%;
}

.bookmark {
    position: absolute;
    height: auto;
    top: 137%;
    left: 88.4%;
    width: 100%;
}

.btnbook {
    position: absolute;
    font-family: "Sarabun", sans-serif;
    z-index: 1;
    top: 45%;
    left: 59%;
    width: 340px;
    font-size: 22px;
}
.btnbook2 {
    position: absolute;
    font-family: "Sarabun", sans-serif;
    z-index: 1;
    top: 67%;
    left: 78%;
    width: 340px;
    font-size: 22px;
}

.btnbook3 {
    position: absolute;
    font-family: "Sarabun", sans-serif;
    z-index: 1;
    top: 46%;
    left: 80%;
    width: 340px;
    font-size: 22px;
}
.btnbook4 {
    position: absolute;
    font-family: "Sarabun", sans-serif;
    z-index: 1;
    top: 46%;
    left: 54%;
    width: 340px;
    font-size: 15px;
}
.button {
    height: 39px;
    width: 39px;
    border-radius: 50%;
    border-style: none;
}

.font-sarabun {
    font-family: "Sarabun", sans-serif;
    font-weight: bold;
    color: #1a4c84;
    font-size: 35px;
}



.buttonshadow {
  transition: box-shadow .3s;
 height: 39px;
    width: 39px;
    border-radius: 50%;
    border-style: none;
  border: 1px solid gray;
  background: gray;
  color:white;
  float: left;
  
}
.buttonshadow:hover {
  box-shadow: 0 0 11px #FF6317; 
  background: #FF6317;
}


.answershadow {
  color: black
  
}
/* .answershadow:hover {
  box-shadow: 0 0 11px #FF6317; 
  background: #FF6317;
} */
</style>
