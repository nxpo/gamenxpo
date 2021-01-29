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
    height: 80vh;"
                                >
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
                                                                ].choise
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
                                                            ].choise"
                                                           
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
                                                                    class="button"
                                                                >
                                                                    A</button
                                                                ><br />
                                                            </div>
                                                            <div
                                                                class="col-10"
                                                                style="padding:8px"
                                                            >
                                                                {{
                                                                    option.choiseText
                                                                }}
                                                               
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="btnbook4"  v-if="
                                                                questionsRan[
                                                                    flipbook.page /
                                                                        2 -
                                                                        0.5
                                                                ].choise
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
                                                            ].choise"
                                                           
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
                                                                    class="button"
                                                                >
                                                                    A</button
                                                                ><br />
                                                            </div>
                                                            <div
                                                                class="col-10"
                                                                style="padding:8px"
                                                            >
                                                                {{
                                                                    option.choiseText
                                                                }}
                                                               
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="btnbook"  v-if="
                                                                questionsRan[
                                                                    flipbook.page /
                                                                        2 -
                                                                        0.5
                                                                ].choise
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
                                                            ].choise" style="padding:8px">
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
                                                                    class="button"
                                                                >
                                                                    A</button
                                                                > {{
                                                                    option.choiseText
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
            books: [
                {
                    title: 1,
                    choise: [
                        { choiseText: "เอ็มม่า", isCorrect: false },
                        { choiseText: "เจน", isCorrect: false },
                        { choiseText: "พอลลีน", isCorrect: true }
                    ],
                    page: {
                        question1: "images/book/Ans/1.png",
                        question2: "images/book/Ans/12.png"
                    }
                },
                {
                    title: 2.1,
                    choise: [
                        {
                            choiseText: "ซูซี่",
                            isCorrect: false
                        },
                        { choiseText: "โจซี", isCorrect: false },
                        { choiseText: "ซัลลี่", isCorrect: false },
                        { choiseText: "แอนนา", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/2.png",
                        question2: "images/book/Ans/22.png"
                    }
                },
                {
                    title: 2.2,
                    choise: [
                        {
                            choiseText: "ซูซี่",
                            isCorrect: false
                        },
                        { choiseText: "โจซี", isCorrect: false },
                        { choiseText: "ซัลลี่", isCorrect: false },
                        { choiseText: "แอนนา", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/3.png",
                        question2: "images/book/Ans/32.png"
                    }
                },
                {
                    title: 3,
                    choise: [
                        {
                            choiseText: "สมศรี",
                            isCorrect: false
                        },
                        { choiseText: "สมชาย", isCorrect: false },
                        { choiseText: "นำ้ทิพย์", isCorrect: false },
                        { choiseText: "ชวาลา", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/4.png",
                        question2: "images/book/Ans/42.png"
                    }
                },
                {
                    title: 4,
                    choise: [
                        {
                            choiseText: "ประดับ",
                            isCorrect: false
                        },
                        { choiseText: "ชาตรี", isCorrect: false },
                        { choiseText: "ณรงค์", isCorrect: false },
                        { choiseText: "วันเพ็ญ", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/5.png",
                        question2: "images/book/Ans/52.png"
                    }
                },
                {
                    title: 5.1,
                    choise: [
                        {
                            choiseText: "โตรอนโต",
                            isCorrect: false
                        },
                        { choiseText: "ฟลอริดา", isCorrect: false },
                        { choiseText: "โรม", isCorrect: false },
                        { choiseText: "ปารีส", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/6.png",
                        question2: "images/book/Ans/62.png"
                    }
                },
                {
                    title: 5.2,
                    choise: [
                        {
                            choiseText: "โตรอนโต",
                            isCorrect: false
                        },
                        { choiseText: "ฟลอริดา", isCorrect: false },
                        { choiseText: "โรม", isCorrect: false },
                        { choiseText: "ปารีส", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/7.png",
                        question2: "images/book/Ans/72.png"
                    }
                },
                {
                    title: 6,
                    choise: [
                        {
                            choiseText: "ฟ้าใส่เสื้อ Size XL",
                            isCorrect: false
                        },
                        {
                            choiseText: "น้ำเงินใส่เสื้อ Size XL",
                            isCorrect: false
                        },
                        { choiseText: "ดำใส่เสื้อ Size S", isCorrect: false },
                        {
                            choiseText: "ฟ้าใส่เสื้อ Size เดียวกับดำ",
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
                    choise: [
                        {
                            choiseText: "ทอม",
                            isCorrect: false
                        },
                        { choiseText: "ร็อบ", isCorrect: false },
                        { choiseText: "แฟรงค์", isCorrect: false },
                        { choiseText: "แซม", isCorrect: false },
                        { choiseText: "โจ", isCorrect: false },
                        { choiseText: "โทนี", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/9.png",
                        question2: "images/book/Ans/92.png"
                    }
                },
                {
                    title: 7.2,
                    choise: [
                        {
                            choiseText: "ทอม",
                            isCorrect: false
                        },
                        { choiseText: "ร็อบ", isCorrect: false },
                        { choiseText: "แฟรงค์", isCorrect: false },
                        { choiseText: "แซม", isCorrect: false },
                        { choiseText: "โจ", isCorrect: false },
                        { choiseText: "โทนี", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/10.png",
                        question2: "images/book/Ans/102.png"
                    }
                },
                {
                    title: 8.1,
                    choise: [
                        {
                            choiseText: "เฟร็ด",
                            isCorrect: false
                        },
                        { choiseText: "โจ", isCorrect: false },
                        { choiseText: "จอห์น", isCorrect: false },
                        { choiseText: "การ์ธ", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/11.png",
                        question2: "images/book/Ans/112.png"
                    }
                },
                {
                    title: 8.2,
                    choise: [
                        {
                            choiseText: "เฟร็ด",
                            isCorrect: false
                        },
                        { choiseText: "โจ", isCorrect: false },
                        { choiseText: "จอห์น", isCorrect: false },
                        { choiseText: "การ์ธ", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/120.png",
                        question2: "images/book/Ans/122.png"
                    }
                },
                {
                    title: 9.1,
                    choise: [
                        {
                            choiseText: "ขนมปัง",
                            isCorrect: false
                        },
                        { choiseText: "ไก่", isCorrect: false },
                        { choiseText: "เนื้อแกะ", isCorrect: false },
                        { choiseText: "ข้าว", isCorrect: false },
                        { choiseText: "เนย", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/13.png",
                        question2: "images/book/Ans/132.png"
                    }
                },
                {
                    title: 9.2,
                    choise: [
                        {
                            choiseText: "ชารอน",
                            isCorrect: false
                        },
                        { choiseText: "เคลลี่", isCorrect: false },
                        { choiseText: "โรบิน่า", isCorrect: false },
                        { choiseText: "แซม", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/14.png",
                        question2: "images/book/Ans/142.png"
                    }
                },
                {
                    title: 9.3,
                    choise: [
                        {
                            choiseText: "ชารอน",
                            isCorrect: false
                        },
                        { choiseText: "เคลลี่", isCorrect: false },
                        { choiseText: "โรบิน่า", isCorrect: false },
                        { choiseText: "แซม", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/15.png",
                        question2: "images/book/Ans/152.png"
                    }
                },
                {
                    title: 9.4,
                    choise: [
                        {
                            choiseText: "ขนมปัง",
                            isCorrect: false
                        },
                        { choiseText: "ไก่", isCorrect: false },
                        { choiseText: "เนื้อแกะ", isCorrect: false },
                        { choiseText: "ข้าว", isCorrect: false },
                        { choiseText: "เนย", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/16.png",
                        question2: "images/book/Ans/162.png"
                    }
                },
                {
                    title: 10.1,
                    choise: [
                        {
                            choiseText: "เคซี",
                            isCorrect: false
                        },
                        { choiseText: "สจ็วต", isCorrect: false },
                        { choiseText: "ริตซี", isCorrect: false },
                        { choiseText: "บิลลี", isCorrect: false },
                        { choiseText: "คอลิน", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/17.png",
                        question2: "images/book/Ans/172.png"
                    }
                },
                {
                    title: 10.2,
                    choise: [
                        {
                            choiseText: "5",
                            isCorrect: false
                        },
                        { choiseText: "4", isCorrect: false },
                        { choiseText: "3", isCorrect: false },
                        { choiseText: "2", isCorrect: false },
                        { choiseText: "1", isCorrect: false },
                        { choiseText: "ไม่มีเลย", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/18.png",
                        question2: "images/book/Ans/182.png"
                    }
                },
                {
                    title: 10.3,
                    choise: [
                        {
                            choiseText: "เคซี",
                            isCorrect: false
                        },
                        { choiseText: "สจ็วต", isCorrect: false },
                        { choiseText: "ริตซี", isCorrect: false },
                        { choiseText: "บิลลี", isCorrect: false },
                        { choiseText: "คอลิน", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/19.png",
                        question2: "images/book/Ans/192.png"
                    }
                },
                {
                    title: 11.1,
                    choise: [
                        {
                            choiseText: "คุณแบกชอว์",
                            isCorrect: false
                        },
                        { choiseText: "นางสาวเจนกินส์ ", isCorrect: false },
                        { choiseText: "คุณนายชานส์ ", isCorrect: false },
                        { choiseText: "คุณเฟลมมิง", isCorrect: false },
                        { choiseText: "คุณมาร์ก", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/20.png",
                        question2: "images/book/Ans/202.png"
                    }
                },
                {
                    title: 11.2,
                    choise: [
                        {
                            choiseText: "คุณแบกชอว์",
                            isCorrect: false
                        },
                        { choiseText: "นางสาวเจนกินส์ ", isCorrect: false },
                        { choiseText: "คุณนายชานส์ ", isCorrect: false },
                        { choiseText: "คุณเฟลมมิง", isCorrect: false },
                        { choiseText: "คุณมาร์ก", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/21.png",
                        question2: "images/book/Ans/212.png"
                    }
                },
                {
                    title: 11.3,
                    choise: [
                        {
                            choiseText: "คุณแบกชอว์",
                            isCorrect: false
                        },
                        { choiseText: "นางสาวเจนกินส์ ", isCorrect: false },
                        { choiseText: "คุณนายชานส์ ", isCorrect: false },
                        { choiseText: "คุณเฟลมมิง", isCorrect: false },
                        { choiseText: "คุณมาร์ก", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/220.png",
                        question2: "images/book/Ans/222.png"
                    }
                },
                {
                    title: 12.1,
                    choise: [
                        {
                            choiseText: "1",
                            isCorrect: false
                        },
                        { choiseText: "2", isCorrect: false },
                        { choiseText: "3", isCorrect: false },
                        { choiseText: "4", isCorrect: false },
                        { choiseText: "0", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/23.png",
                        question2: "images/book/Ans/232.png"
                    }
                },
                {
                    title: 12.2,
                    choise: [
                        {
                            choiseText: "1",
                            isCorrect: false
                        },
                        { choiseText: "2", isCorrect: false },
                        { choiseText: "3", isCorrect: false },
                        { choiseText: "4", isCorrect: false },
                        { choiseText: "0", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/24.png",
                        question2: "images/book/Ans/242.png"
                    }
                },
                {
                    title: 12.3,
                    choise: [
                        {
                            choiseText: "โตรอนโต",
                            isCorrect: false
                        },
                        { choiseText: "ฟลอริดา", isCorrect: false },
                        { choiseText: "โรม", isCorrect: false },
                        { choiseText: "ปารีส", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/25.png",
                        question2: "images/book/Ans/252.png"
                    }
                },
                {
                    title: 13.1,
                    choise: [
                        {
                            choiseText: "แซลลี",
                            isCorrect: false
                        },
                        { choiseText: "เชอริล", isCorrect: false },
                        { choiseText: "ลอรา", isCorrect: false },
                        { choiseText: "ทอม", isCorrect: false },
                        { choiseText: "แซนดี", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/26.png",
                        question2: "images/book/Ans/262.png"
                    }
                },
                {
                    title: 13.2,
                    choise: [
                        {
                            choiseText: "แซลลี",
                            isCorrect: false
                        },
                        { choiseText: "เชอริล", isCorrect: false },
                        { choiseText: "ลอรา", isCorrect: false },
                        { choiseText: "ทอม", isCorrect: false },
                        { choiseText: "แซนดี", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/27.png",
                        question2: "images/book/Ans/272.png"
                    }
                },
                {
                    title: 13.3,
                    choise: [
                        {
                            choiseText: "แซลลีและลอรา",
                            isCorrect: false
                        },
                        { choiseText: "แซลลีและทอม", isCorrect: false },
                        { choiseText: "ลอราและทอม", isCorrect: false },
                        { choiseText: "ทอมและแซนดี", isCorrect: false },
                        { choiseText: "แซนดีและแซลลี ", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/28.png",
                        question2: "images/book/Ans/282.png"
                    }
                },
                {
                    title: 13.4,
                    choise: [
                        {
                            choiseText: "7",
                            isCorrect: false
                        },
                        { choiseText: "8", isCorrect: false },
                        { choiseText: "9", isCorrect: false },
                        { choiseText: "10", isCorrect: false },
                        { choiseText: "11", isCorrect: false },
                        { choiseText: "12", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/29.png",
                        question2: "images/book/Ans/292.png"
                    }
                },
                {
                    title: 14.1,
                    choise: [
                        {
                            choiseText: "ผิวถูกทำลายด้วยการตากแดดนานๆ",
                            isCorrect: false
                        },
                        {
                            choiseText:
                                "ชั้นหนังกำพร้าอยู่ก่อนชั้นหนังแท้ ดังนั้นจะดำก่อน",
                            isCorrect: false
                        },
                        {
                            choiseText:
                                "สีผิวที่เข้มขึ้นมีผลมาจากการสร้างเมลานินใหม่หลังจากโดนรังสียูวี",
                            isCorrect: false
                        },
                        {
                            choiseText: "คนผิวขาวจะผิวคล้ำเร็วกว่าคนผิวดำ",
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
                    choise: [
                        {
                            choiseText:
                                "การเคารพกฎกติกาของสังคมทำให้สังคมมีความเป็นระเบียบเรียบร้อย",
                            isCorrect: false
                        },
                        {
                            choiseText:
                                "มนุษย์เป็นสัตว์สังคมจึงต้องอยู่ด้วยกันอย่างมีความสุข",
                            isCorrect: false
                        },
                        {
                            choiseText:
                                "สังคมสงบสุขได้เพราะทุกคนในสังคมไม่เบียดเบียนกัน",
                            isCorrect: false
                        },
                        {
                            choiseText:
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
                    choise: [
                        {
                            choiseText: "4",
                            isCorrect: false
                        },
                        { choiseText: "5", isCorrect: false },
                        { choiseText: "6", isCorrect: false },
                        { choiseText: "12", isCorrect: false },
                        { choiseText: "3", isCorrect: false },
                        { choiseText: "ไม่ทราบเลย", isCorrect: false }
                    ],
                    page: {
                        question1: "images/book/Ans/320.png",
                        question2: "images/book/Ans/322.png"
                    }
                },
                {
                    title: 17.1,
                    choise: [
                        {
                            choiseText: "การกินกล้วยหอมทำให้น้ำหนักลดได้มาก",
                            isCorrect: false
                        },
                        {
                            choiseText:
                                "วิตามินบีคือสารอาหารที่พบมากในกล้วยหอม",
                            isCorrect: false
                        },
                        {
                            choiseText:
                                "ในกล้วยหอมมีวิตามินครบถ้วนตามที่ร่างกายต้องการ",
                            isCorrect: false
                        },
                        {
                            choiseText:
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
        // selectPage(page, currentPage) {
        //     this.select = page - 1;
        //     console.log(page);
        //     console.log(currentPage);
        // },

        startQuizFunc() {
            //   this.countDownTimer();
            this.startQuiz = true;
            this.randomNum();
            this.countDownTimer();
        },

        randomNum() {
            var q = this.books;
            var quest2 = q.slice();
            var rnd;

            while (quest2.length) {
                rnd = Math.floor(Math.random() * quest2.length);

                this.questionsRan.push(quest2[rnd]);

                this.pagesRan.push(quest2[rnd].page.question1);
                this.pagesRan.push(quest2[rnd].page.question2);
                quest2[rnd] = "";
                quest2 = quest2.filter(a => {
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
                    if (nextQuestion < this.books.length) {
                        this.currentQuestion = nextQuestion;
                    } else {
                        this.showScore = true;
                    }
                }, 1000);
            }
        }
    },
    mounted() {}
};
</script>

<style>
/* @media only screen and (max-width: 1500px) {
    .bookbg {
        display: none;
    }
    .book {
        display: none;
    }
} */
.viewport {
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
    top: 53%;
    left: 80%;
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
</style>
