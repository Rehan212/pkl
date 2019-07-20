<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:700');

:root {
  --color-main: #004880;
}

html, body, .wrapper {
  position: relative;

  width: 100%;
  height: 100%;

  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

* {
  box-sizing: border-box;
}

.composition {
  position: relative;

  width: 750px;
  height: 400px;

  background-color: var(--color-main);
  background-image: linear-gradient(to left, #072e61, #004880);

  overflow: hidden;
}

.layer-0 {
  position: absolute;
  z-index: 10;
}
.layer-1 {
  position: absolute;
  z-index: 15;
}
.layer-2 {
  position: absolute;
  z-index: 20;
}

.shelf {
  position: absolute;
  top: 150px;
  left: 250px;
}
.shelf__side_left {
  position: absolute;
  top: 0;
  left: 0;

  width: 500px;
  height: 60px;

  background-color: #cdfffa;

  transform: skewY(-25deg);
}
.shelf__side_front {
  position: absolute;
  top: 137px;
  left: 0;

  width: 70px;
  height: 60px;

  background-color: #9dfbf3;
  background-image: linear-gradient(160deg, #84fff2, #2f7fb2);

  border: 1px solid rgba(47, 127, 178, 0.5);

  transform: skewY(30deg);
}
.shelf__side_bottom {
  position: absolute;
  top: 43px;
  left: 36px;

  width: 500px;
  height: 73px;

  background-color: #7adbd5;

  transform: skewY(-25deg) skewX(44deg);
}
.shelf__side_right {
  position: absolute;
  top: 42px;
  left: 70px;

  width: 500px;
  height: 60px;

  background-color: #0b2f6c;
  background-image: linear-gradient(0deg, #0b2f6c, #16598b);

  transform: skewY(-25deg);
}

.shelf__handle_top {
  position: absolute;
  top: 144px;
  left: 17px;

  width: 30px;
  height: 7px;

  background-color: #5ac8d3;

  transform: skewY(30deg) skewX(-50deg)
}
.shelf__handle_front {
  position: absolute;
  top: 149px;
  left: 13px;

  width: 30px;
  height: 10px;

  background-color: #71e7e4;
  border: 1px solid rgba(47, 127, 178, 0.5);

  transform: skewY(30deg);
}
.shelf__handle_right {
  position: absolute;
  top: 155px;
  left: 43px;

  width: 6px;
  height: 10px;

  background-color: #287caa;

  transform: skewY(-30deg);
}

.shadow {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;

  width: 150px;
  height: 100%;

  background-image: linear-gradient(to right, rgba(1, 20, 61, 0), rgba(1, 20, 61, 0.8) 65%, rgba(1, 20, 61, 1));
}

.case {
  position: absolute;

  transform: translateY(0);
  transition: .3s transform ease-in;
}
.case:hover {
  transform: translateY(-5px);
}
.case_1 {
  top: -85px;
  right: -470px;
}
.case_2 {
  top: -82px;
  right: -463px;
}
.case_3 {
  top: -79px;
  right: -456px;
}
.case_4 {
  top: -76px;
  right: -449px;
}
.case_5 {
  top: -73px;
  right: -442px;
}
.case_6 {
  top: -70px;
  right: -435px;
}
.case_7 {
  top: -67px;
  right: -428px;
}
.case_8 {
  top: -63px;
  right: -421px;
}
.case_9 {
  top: -59px;
  right: -414px;
}
.case_10 {
  top: -56px;
  right: -407px;
}
.case_11 {
  top: -53px;
  right: -400px;
}
.case_12 {
  top: -49px;
  right: -393px;
}
.case_13 {
  top: -46px;
  right: -386px;
}
.case_14 {
  top: -43px;
  right: -379px;
}
.case_15 {
  top: -39px;
  right: -372px;
}
.case_16 {
  top: -36px;
  right: -365px;
}
.case_17 {
  top: -33px;
  right: -358px;
}
.case_18 {
  top: -29px;
  right: -351px;
}
.case_19 {
  top: -26px;
  right: -344px;
}
.case_20 {
  top: -23px;
  right: -337px;
}
.case_21 {
  top: -19px;
  right: -330px;
}
.case_22 {
  top: -16px;
  right: -323px;
}
.case_23 {
  top: -13px;
  right: -316px;
}
.case_24 {
  top: -9px;
  right: -309px;
}
.case_25 {
  top: -6px;
  right: -302px;
}
.case_26 {
  top: -3px;
  right: -295px;
}
.case_27 {
  top: 1px;
  right: -288px;
}
.case_28 {
  top: 4px;
  right: -281px;
}
.case_29 {
  top: 7px;
  right: -274px;
}
.case_30 {
  top: 11px;
  right: -267px;
}
.case_31 {
  top: 14px;
  right: -260px;
}
.case_32 {
  top: 17px;
  right: -253px;
}
.case_33 {
  top: 20px;
  right: -246px;
}
.case_34 {
  top: 24px;
  right: -239px;
}
.case_35 {
  top: 27px;
  right: -232px;
}
.case_36 {
  top: 30px;
  right: -225px;
}
.case_37 {
  top: 33px;
  right: -218px;
}
.case_38 {
  top: 37px;
  right: -211px;
}
.case_39 {
  top: 40px;
  right: -204px;
}
.case_40 {
  top: 43px;
  right: -197px;
}
.case_41 {
  top: 46px;
  right: -190px;
}
.case_42 {
  top: 49px;
  right: -183px;
}
.case_43 {
  top: 53px;
  right: -176px;
}
.case_44 {
  top: 56px;
  right: -169px;
}
.case_45 {
  top: 59px;
  right: -162px;
}
.case_46 {
  top: 62px;
  right: -155px;
}
.case_47 {
  top: 65px;
  right: -148px;
}

.case__front {
  position: absolute;
  top: 3px;
  left: 0;

  width: 70px;
  height: 55px;

  background-color: #9d7f63;

  transform: skewY(25deg);
}
.case__label {
  position: absolute;
  top: -12px;
  left: 5px;

  width: 10px;
  height: 7px;

  background-color: #9d7f63;

  transform: skewY(25deg);
}
.case__label_left {
  top: -12px;
  left: 5px;
}
.case__label_right {
  top: 12px;
  left: 55px;
}
.case__top {
  position: absolute;
  top: 0;
  left: 2px;

  width: 70px;
  height: 4px;

  background-image: linear-gradient(to top, #e9eceb, #a3bab4 50%, #e9eceb);

  transform: skewY(25deg) skewX(-45deg);
}
.case__right {
  position: absolute;
  top: 18px;
  left: 69px;

  width: 5px;
  height: 55px;

  background-image: linear-gradient(to left, #e9eceb, #a3bab4 50%, #e9eceb);

  transform: skewY(-25deg);
}
.case__number {
  position: absolute;
  top: 41px;
  left: 10px;

  color: #7c664e;
  font-size: 8px;

  transform-origin: top left;
  transform: rotate(-66deg) skewY(-25deg);
}

.glow {
  position: absolute;
}
.glow__bottom {
  position: absolute;
  top: 60px;
  left: 5px;

  width: 135px;
  height: 120px;

  background-image: linear-gradient(to top, rgba(132, 255, 242, 1), rgba(132, 255, 242, 1) 30%, rgba(132, 255, 242, 0));

  transform: perspective(120px) rotateX(-20deg);
}
.glow__top {
  position: absolute;
  top: -25px;
  left: 7px;

  width: 130px;
  height: 180px;

  background-image: linear-gradient(to top, rgba(132, 255, 242, 1), rgba(132, 255, 242, 1) 20%, rgba(132, 255, 242, 0));

  transform: perspective(150px) rotateX(-20deg);
}

.glow__ball {
  position: absolute;
  top: 0;
  left: 0;

  width: 10px;
  height: 10px;

  border-radius: 10px;
  background-color: #83fff2;

  transform: translateY(160px);
}
.glow__ball_1 {
  animation: 5s fadeUp infinite;
  animation-delay: .5s;
}
.glow__ball_2 {
  left: 10px;

  width: 5px;
  height: 5px;

  animation: 4s fadeUp infinite;
  animation-delay: .8s;
}
.glow__ball_3 {
  left: 24px;

  width: 15px;
  height: 15px;

  animation: 9s fadeUp infinite;
  animation-delay: .65s;
}
.glow__ball_4 {
  left: 34px;

  width: 8px;
  height: 8px;

  animation: 7s fadeUp infinite;
  animation-delay: .5s;
}
.glow__ball_5 {
  left: 57px;

  width: 14px;
  height: 14px;

  animation: 7s fadeUp infinite;
  animation-delay: .9s;
}
.glow__ball_6 {
  left: 78px;

  width: 11px;
  height: 11px;

  animation: 3s fadeUp infinite;
  animation-delay: .3s;
}
.glow__ball_7 {
  left: 91px;

  width: 13px;
  height: 13px;

  animation: 8s fadeUp infinite;
  animation-delay: .77s;
}
.glow__ball_8 {
  left: 105px;

  width: 7px;
  height: 7px;

  animation: 6s fadeUp infinite;
  animation-delay: .4s;
}
.glow__ball_9 {
  left: 113px;

  width: 8px;
  height: 8px;

  animation: 4s fadeUp infinite;
  animation-delay: .6s;
}
.glow__ball_10 {
  left: 120px;

  width: 4px;
  height: 4px;

  animation: 9s fadeUp infinite;
  animation-delay: .92s;
}

.numbers {
  position: absolute;
  top: 0;
  left: 122px;

  color: #fff;
  font-family: 'Roboto', sans-serif;
  font-size: 200px;

  display: flex;
}
.numbers__item {
  margin: 0 10px;

  animation: 5s bounceUpDown infinite;
}
.numbers__item_1 {
  animation-delay: .3s;
}
.numbers__item_2 {
  animation: 5.4s bounceUpDown infinite;
  animation-delay: .5s;
}
.numbers__item_3 {
  animation-delay: .3s;
}

@keyframes fadeUp {
  0% {
    transform: translateY(160px);
    opacity: 1;
  }
  60% {
    opacity: 1;
  }
  100% {
    transform: translateY(-10px);
    opacity: 0;
  }
}
@keyframes bounceUpDown {
  0, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(50px);
  }
}


@media screen and (max-width: 800px) {
  .composition {
    transform: scale(0.8);
  }
}

@media screen and (max-width: 700px) {
  .composition {
    transform: scale(0.7);
  }
}

@media screen and (max-width: 600px) {
  .composition {
    transform: scale(0.6);
  }
}

@media screen and (max-width: 500px) {
  .composition {
    transform: scale(0.5);
  }
}

@media screen and (max-width: 400px) {
  .composition {
    transform: scale(0.4);
  }
}

@media screen and (max-width: 300px) {
  .composition {
    transform: scale(0.3);
  }
}
</style>

<body>
    <div class="wrapper">
  <div class="composition">
    <div class="layer-0 shelf">
      <div class="shelf__side_left"></div>
      <div class="shelf__side_bottom"></div>

      <div class="case case_1">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_2">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_3">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_4">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_5">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_6">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_7">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_8">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_9">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_10">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_11">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_12">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_13">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_14">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_15">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_16">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_17">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_18">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_19">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_20">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_21">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_22">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_23">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_24">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_25">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_26">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_27">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_28">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_29">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_30">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_31">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_32">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_33">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_34">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_35">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_36">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_37">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_38">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_39">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_40">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_41">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_42">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_43">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_44">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_45">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_46">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_right"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>
      <div class="case case_47">
        <div class="case__front"></div>
        <div class="case__top"></div>
        <div class="case__label case__label_left"></div>
        <div class="case__right"></div>
        <div class="case__number">
          №2428506
        </div>
      </div>

      <div class="glow">
        <div class="glow__bottom"></div>
        <div class="glow__top"></div>
        <div class="glow__ball glow__ball_1"></div>
        <div class="glow__ball glow__ball_2"></div>
        <div class="glow__ball glow__ball_3"></div>
        <div class="glow__ball glow__ball_4"></div>
        <div class="glow__ball glow__ball_5"></div>
        <div class="glow__ball glow__ball_6"></div>
        <div class="glow__ball glow__ball_7"></div>
        <div class="glow__ball glow__ball_8"></div>
        <div class="glow__ball glow__ball_9"></div>
        <div class="glow__ball glow__ball_10"></div>

      </div>

      <div class="shelf__side_front"></div>
      <div class="shelf__side_right"></div>

      <div class="shelf__handle_top"></div>
      <div class="shelf__handle_front"></div>
      <div class="shelf__handle_right"></div>
    </div>
    <div class="layer-1 shadow"></div>
    <div class="layer-2 numbers">
      <div class="numbers__item numbers__item_1">4</div>
      <div class="numbers__item numbers__item_2">0</div>
      <div class="numbers__item numbers__item_3">4</div>
    </div>
  </div>
</div>
</body>
</html>
