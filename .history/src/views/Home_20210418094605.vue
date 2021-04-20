<template>
  <div class="home">
    <div class="base">base</div>
    <div class="base-image">
      <img :src=sommerDesktop alt="">
    </div>
  </div>
</template>

<script>
import sommerDesktop from '@/assets/img/sommer-desktop.png'
// @ is an alias to /src
// import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'Home',
  components: {},
  data () {
    return {
      sommerDesktop: sommerDesktop
    }
  }
}
</script>

<style lang="scss" scoped>
.home {
  display: flex;
}
</style>
