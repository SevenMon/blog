<template>
    <transition name="top">
        <div class="top" @click="top" v-show="scroll_html > 100">
            <i class="fa fa-arrow-up"></i>
        </div>
    </transition>
</template>

<script>
    export default {
        name: 'Top',
        data () {
            return {
                scroll_html:''
            }
        },
        created(){
            setTimeout(() => {
                this.scroll_html = $(window).scrollTop();
                $(window).scroll(()=> {
                    this.scroll_html = $(window).scrollTop();
                });
            }, 200)

        },
        methods:{
            top(){
                $('html').animate({
                        scrollTop: 0
                    },
                    200);
                return false;
            }
        },
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    /*字体图标用的是awesome 可以自行引入或者开启下面的注释进行开启*/
    /*@import './fonts/font-awesome.min.css';*/
    .top{
        background-color: black;
        display: inline-block;
        color: rgb(255,255,255);
        width: 24px;
        height: 24px;
        box-sizing: border-box;
        padding: 0px 5.25px;
        position: fixed;
        bottom: 65px;
        right: 20px;
        line-height: 24px;
    }
</style>
