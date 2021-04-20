<template>
  <div class="home">
    <div class="page-wrapper">
      <div class="header-wrapper">
        <div class="logo">
          <img src="../assets/img/pineapple.png" alt="pineapple">
          <span>pineapple</span>
        </div>
        <div class="main-menu">
          <div>About</div>
          <div>How it works</div>
          <div>Contact</div>
        </div>
      </div>
      <div class="content-wrapper">
        <div>Subscribe to newsletter</div>
        <p>Subscribe to our newletter and get a 10% discount on pineapple glasses</p>
      </div>
      <div class="subscribe-form-wrapper">
        <input type="text" placeholder="type your email here" @click="onSubscribe" v-model="email" >
        <div class="submit-button">
          <span>
            <img src="../assets/img/ic_arrow.svg" alt="arrow">
          </span>
        </div>
      </div>
      <div class="terms-of-use">

        <div class="checkbox-wrapper" @click="onAgreeToTerms">
          <input type="checkbox" v-bind:checked=agreeToTerms id="">
          <span class="check"></span>
        </div>

        <span class="terms-text">I agree to</span>
        <a href="#">terms of service</a>
      </div>
      <div class="separator">
        <div class="separator-line"></div>
      </div>
      <div class="social-wrapper">
        <div class="icons-wraper">
          <img src="../assets/img/Facebook.png" alt="facebook">
          <img src="../assets/img/Instagram.png" alt="instagram">
          <img src="../assets/img/Twitter.png" alt="twitter">
          <img src="../assets/img/Youtube.png" alt="youtube">
        </div>
      </div>
    </div>
    <div class="base-image">
      <img :src=sommer alt="">
    </div>
  </div>
</template>

<script>
import sommer from '@/assets/img/sommer.png'

export default {
  name: 'Home',
  components: {},
  data () {
    return {
      sommer,
      email: '',
      agreeToTerms: ''
    }
  },
  methods: {
    onSubscribe () {
      // axios send data
    },
    onAgreeToTerms () {
      this.agreeToTerms === '' ? this.agreeToTerms = 'checked' : this.agreeToTerms = ''
    }
  }
}
</script>

<style lang="scss" scoped>
@import "../assets/scss/defaults.scss";
.home {
  display: flex;
  width: 680px;
  height: 100vh;
  // color: $blue;
  // overflow: hidden;
}
.page-wrapper {
  width: 40vw;
  height: 1080px;
  background-color: $light-blue;
}
.base-image {
  width: 60vw;
}
.base-image img {
  max-height: 1080px;
}
.header-wrapper {
  display: flex;
  justify-content: space-between;
  margin: 5% 0 30% 0;
  align-items: center;
}
.logo {
  margin-left: 5%;
  display: flex;
  align-items: center;
}
.logo img {
  margin-right: 10%;
  position: relative;
  top: -7px;
}
.main-menu {
  margin-right: 5%;
  display: flex;
  justify-content: space-between;
  width: 33%;
}
.content-wrapper {
  padding-left: 15%;
  padding-right: 38%;
}
.content-wrapper :first-child {
  margin-bottom: 3%;
  font-size: $header-font-size;
  color: $black;
}
.content-wrapper p {
  margin-bottom: 20%;
}
.subscribe-form-wrapper {
  display: flex;
  justify-content: right;
  width: 42vw;
  margin-bottom: 16%;
}
.subscribe-form-wrapper input {
  border: none;
  border-left: 4px solid $blue;
  padding-left: 10%;
  margin-left: 5%;
  height: 40px;
  z-index: 2;
  width: 90%;
  border-top: 1px solid $light-grey;
  border-bottom: 1px solid $light-grey;
}
.submit-button {
  z-index: 2;
  width: 38px;
  background-color: #fff;
  border-top: 1px solid $light-grey;
  border-right: 1px solid $light-grey;
  border-bottom: 1px solid $light-grey;
  height: 40px;
}
.submit-button {
  display: flex;
  justify-content: center;
  align-items: center;
}
.submit-button span {
  margin-top: 5px;
}
.terms-of-use {
  display: flex;
  margin-left: 15%;
}
.terms-of-use .terms-text {
  padding-left: 25px;
}
  /*
  *
  *
  *
  *
  */
.checkbox-wrapper {
  display: block;
  position: relative;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.checkbox-wrapper input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}
.check {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: $blue;
  margin-right: 10px;
}
.checkbox-wrapper:hover input ~ .check {
  background-color: $grey;
}
// TODO-MAKE THIS DYNAIMC ON CLICK
.checkbox-wrapper input:checked ~ .check {
  background-color: $blue;
}
.check::after {
  content: "";
  position: absolute;
  display: none;
}
.checkbox-wrapper input:checked ~ .check:after {
  display: block;
}
/*
*
*
*
*
*/
.terms-of-use > * {
  margin-right: 10px;
}
.separator {
  margin-top: 10%;
}
.separator-line {
  border-bottom: 1px solid $light-grey;
  margin: 0 15% 0 15%;
}
.social-wrapper {
  display: flex;
  // align-items: center;
  justify-content: center;
  margin-top: 7%;
}
.icons-wraper > *{
  padding-right: 10px;
}
// mobile
@media screen and (max-width: 1024px) {
  .base-image {
    display: none;
  }
  .page-wrapper {
    width: 100vw;
    background-image: url('../assets/img/sommer.png');
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
    max-height: 746px;
  }
}
</style>
