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
// normalize
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
.home {
  display: grid;
  grid-template-columns: 3fr 1fr;
  grid-template-rows: 100wh;
}
// iPhone 6/7/8 portrait
@media screen and (max-width: 414px) {
  .base {
    display: none;
  }
}
</style>
