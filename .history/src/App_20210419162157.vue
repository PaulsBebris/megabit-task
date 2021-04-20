<template>
  <div id="app">
    <router-view/>
  </div>
</template>

<style lang="scss">
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
@import "./assets/scss/defaults.scss";
@font-face {
  font-family: "Roboto";
  src: local("Roboto"), url(./assets/fonts/Roboto.ttf) format("truetype");
  src: url();
}
@font-face {
  font-family: "Roboto";
  src: local("Roboto-Thin"), url(./assets/fonts/Roboto-Thin.ttf) format("truetype");
  src: url();
}

#app {
  font-family: Roboto, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: $grey;
  overflow: hidden;
}

</style>
