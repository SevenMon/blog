<template>
    <div class="sidebar" @click="toClose" @mouseenter="toArrow" @mouseleave="toLine">
        <div class="sidebar-line">
            <span class="line-one">
            </span>
            <span class="line-two">
            </span>
            <span class="line-three">
            </span>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'sideBar',
        data () {
            return {
                status:0
            }
        },
        props:{
            showSide
        },
        created(){
        },
        methods:{
            toClose(){
                if(this.status == 0) {
                    this._toClose();
                } else {
                    this._toLine();
                }
                this.status = this.status == 0 ? 1 : 0;
            },
            toArrow(){
                if(status == 0) {
                    this._toArrow();
                }
            },
            toLine(){
                if(status == 0) {
                    this._toLine();
                }
            },
            _toArrow(){
                //console.log('变箭头');
                $(".line-one").css("transform", "rotateZ(-45deg)");
                $(".line-one").css("-ms-transform", "rotateZ(-45deg)");
                $(".line-one").css("-moz-transform", "rotateZ(-45deg)");
                $(".line-one").css("-webkit-transform", "rotateZ(-45deg)");
                $(".line-one").css("-o-transform", "rotateZ(-45deg)");
                $(".line-one").css("width", "50%");
                $(".line-one").css("left", "0px");
                $(".line-one").css("top", "2px");
                $(".line-three").css("transform", "rotateZ(45deg)");
                $(".line-three").css("-ms-transform", "rotateZ(45deg)");
                $(".line-three").css("-moz-transform", "rotateZ(45deg)");
                $(".line-three").css("-webkit-transform", "rotateZ(45deg)");
                $(".line-three").css("-o-transform", "rotateZ(45deg)");
                $(".line-three").css("width", "50%");
                $(".line-three").css("left", "0px");
                $(".line-three").css("top", "-2px");
                $(".line-two").css("width", "90%");
                $(".line-two").css("left", "0px");
                $(".line-two").css("top", "0px");
                $(".line-two").css("opacity", "1");
            },
            _toClose(){
                //console.log('变叉');
                $(".line-one").css("transform", "rotateZ(-45deg)");
                $(".line-one").css("-ms-transform", "rotateZ(-45deg)");
                $(".line-one").css("-moz-transform", "rotateZ(-45deg)");
                $(".line-one").css("-webkit-transform", "rotateZ(-45deg)");
                $(".line-one").css("-o-transform", "rotateZ(-45deg)");
                $(".line-one").css("width", "100%");
                $(".line-one").css("left", "0px");
                $(".line-one").css("top", "5px");
                $(".line-three").css("transform", "rotateZ(45deg)");
                $(".line-three").css("-ms-transform", "rotateZ(45deg)");
                $(".line-three").css("-moz-transform", "rotateZ(45deg)");
                $(".line-three").css("-webkit-transform", "rotateZ(45deg)");
                $(".line-three").css("-o-transform", "rotateZ(45deg)");
                $(".line-three").css("width", "100%");
                $(".line-three").css("left", "0px");
                $(".line-three").css("top", "-5px");
                $(".line-two").css("opacity", "0");
            },
            _toLine(){
                //console.log('变三横线');
                $(".line-one").css("transform", "rotateZ(0deg)");
                $(".line-one").css("-ms-transform", "rotateZ(0deg)");
                $(".line-one").css("-moz-transform", "rotateZ(0deg)");
                $(".line-one").css("-webkit-transform", "rotateZ(0deg)");
                $(".line-one").css("-o-transform", "rotateZ(0deg)");
                $(".line-one").css("width", "100%");
                $(".line-one").css("left", "0px");
                $(".line-one").css("top", "0px");
                $(".line-three").css("transform", "rotateZ(0deg)");
                $(".line-three").css("-ms-transform", "rotateZ(0deg)");
                $(".line-three").css("-moz-transform", "rotateZ(0deg)");
                $(".line-three").css("-webkit-transform", "rotateZ(0deg)");
                $(".line-three").css("-o-transform", "rotateZ(0deg)");
                $(".line-three").css("width", "100%");
                $(".line-three").css("left", "0px");
                $(".line-three").css("top", "0px");
                $(".line-two").css("width", "100%");
                $(".line-two").css("left", "0px");
                $(".line-two").css("top", "0px");
                $(".line-two").css("opacity", "1");
            }
        },
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
    .sidebar {
        position: fixed;
        bottom: 94px;
        right: 20px;
        display: inline-block;
        background-color: #1d2935;
        width: 24px;
        height: 24px;
        padding: 5px;
        .sidebar-line {
            display: block;
            line-height: 0;
            .line-one {
                display: inline-block;
                width: 100%;
                height: 2px;
                left: 0px;
                top: 0px;
                background-color: #fff;
                position: relative;
                transition: all .5s;
                -moz-transition: all .5s;
                -webkit-transition: all .5s;
                -o-transition: all .5s;
                transform: rotateZ(0deg);
                -ms-transform: rotateZ(0deg);
                -moz-transform: rotateZ(0deg);
                -webkit-transform: rotateZ(0deg);
                -o-transform: rotateZ(0deg);
                vertical-align: top
            }
            .line-two {
                display: inline-block;
                margin-top: 3px;
                width: 100%;
                height: 2px;
                left: 0px;
                top: 0px;
                background-color: #fff;
                position: relative;
                transition: all .5s;
                -moz-transition: all .5s;
                -webkit-transition: all .5s;
                -o-transition: all .5s;
                transform: rotateZ(0deg);
                -ms-transform: rotateZ(0deg);
                -moz-transform: rotateZ(0deg);
                -webkit-transform: rotateZ(0deg);
                -o-transform: rotateZ(0deg);
                vertical-align: top;
                opacity: 1;
            }
            .line-three {
                display: inline-block;
                width: 100%;
                height: 2px;
                left: 0px;
                top: 0px;
                background-color: #fff;
                position: relative;
                margin-top: 3px;
                transition: all .5s;
                -moz-transition: all .5s;
                -webkit-transition: all .5s;
                -o-transition: all .5s;
                transform: rotateZ(0deg);
                -ms-transform: rotateZ(0deg);
                -moz-transform: rotateZ(0deg);
                -webkit-transform: rotateZ(0deg);
                -o-transform: rotateZ(0deg);
                vertical-align: top
            }
        }
    }

</style>
