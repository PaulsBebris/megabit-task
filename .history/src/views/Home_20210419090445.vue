<template>
  <div class="home">
    <div class="base">
      <div class="header-wrapper">
        <div class="logo">
          <img src="" alt="">
          <span>pineapple</span>
        </div>
        <div class="main-menu">
          <div>About</div>
          <div>How it works</div>
          <div>Contact</div>
        </div>
      </div>
      <div class="content-wrapper">
        <h3>Subscribe to newsletter</h3>
        <p>Subscribe to our newletter and get a 10% discount on pineapple glasses</p>
      </div>
      <div class="subscribe-form-wrapper">
        <input type="text" placeholder="type your email here" @click="onSubscribe" v-model="email" >
        <div class="submit-btn">
          <span></span>
        </div>
      </div>
      <div class="terms-of-use">
        <input type="checkbox" name="agreedOnTerms" id="">I agree to<a href="#">terms of service</a>
      </div>
      <div class="social-wrapper"></div>
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
      email: ''
    }
  },
  methods: {
    onSubscribe () {
      // axios send data
    }
  }
}
</script>

<style lang="scss" scoped>
@import "../assets/scss/defaults.scss";
.home {
  display: grid;
  grid-template-columns: 3fr 1fr;
  grid-template-rows: 100vh;
  max-height: 1080px;
  color: $blue;
}
.base {
  width: 40vw;
  height: 1080px;
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
  margin: 50px 0 250px 0;
}
.logo {
  margin-left: 30px;
}
.main-menu {
  margin-right: 30px;
  display: flex;
  justify-content: space-between;
  width: 33%;
}

// mobile
@media screen and (max-width: 1024px) {
  .base-image {
    display: none;
  }
  .base {
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
