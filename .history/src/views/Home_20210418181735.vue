<template>
  <div class="home">
    <div class="base">base</div>
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
      sommer
    }
  }
}
</script>

<style lang="scss" scoped>
.base {
  width: 40vw;
  height: 1080px;
}
.base-image {
  width: 60vw;
}
.home {
  display: grid;
  grid-template-columns: 3fr 1fr;
  grid-template-rows: 100vh;
  max-height: 1080px;
}
.base-image img {
  max-height: 1080px;
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
