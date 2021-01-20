<template>
    <div id="app">
        <nav
            class="navbar navbar-light"
            style="background-color: white; height: 75px 
  box-shadow: 5px 10px 18px #888888;"
        >
            <div class="col-2">
                <a class="navbar-brand pl-5" href="#"><Logo /></a>
            </div>
            <div class="col-10">
                <div class="row">
                    <!-- <div
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
                            </div> -->
                </div>
            </div>
        </nav>
        <div class="imgup">
            <b-row class="text-center">
                <b-col></b-col>
                <b-col cols="5">
                    <div class="col text-center pt-5">
                        <div class="card " style="">
                            <b-progress class="" height="30px">
                                <b-progress-bar
                                    :style="{
                                        'background-color': '#f5d020',
                                        'background-image':
                                            'linear-gradient(315deg, #f5d020 0%, #f53803 74%)'
                                    }"
                                    :max="816"
                                    :value="imgTop"
                                >
                                </b-progress-bar>
                            </b-progress>

                            <div class="card-body" style=" height:145px">
                                พิมคำตอบให้เร็วที่สุดก่อนนำ้ทะเลจะท่วม
                            </div>
                        </div>
                    </div></b-col
                >
                <b-col></b-col>
            </b-row>
            <div @click.stop="onClick">
                <img
                    class="img"
                    src="//placekitten.com/100/100"
                    width="100"
                    alt="kitty"
                    :style="{ top: imgTop }"
                />
            </div>
        </div>
    </div>
</template>

<script>
import Logo from "./icons/Logo.vue";

export default {
    components: {
        Logo
    },

    data: () => ({
        hours: 0,
        minutes: 10,
        seconds: 0,
        counter: 0,
        random: 0,
        ramdomCheck: [],
        currentQuestion: 0,
        showScore: false,
        score: 0,
        countDown: 600,
        timer: null,
        startQuiz: false,
        imgTop: 816
    }),
    methods: {
        onClick(e) {
            this.countDownTimer();
        },

        countDownTimer() {
            this.timer = setTimeout(() => {
                this.countDown -= 1;
                this.imgTop -= 0.68;
                console.log(this.imgTop);
                console.log(this.counter++);

                this.countDownTimer();
            }, 1000);
        }
        // onClick(e) {
        //   this.imgTop += 1;
        //           console.log(this.imgTop);

        // }
    },
    mounted() {
        console.log(this.imgTop);
    }
};
</script>

<style>
.imgup {
    width: 100vw;
    height: 891px;
}

.img {
    position: absolute;
}
</style>
