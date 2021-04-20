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
.home {
  display: grid;
  grid-template-columns: 3fr 1fr;
}
</style>
