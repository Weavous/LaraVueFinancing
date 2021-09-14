<template>
  <Main>
    <Display></Display>
  </Main>
</template>

<script>
import Main from "../components/Main.vue";

import Display from "../components/Display.vue";

import vehicles from "../services/brands.js";

export default {
  name: "Financing",
  components: { Main, Display },
  mounted() {
    vehicles.index().then((response) => {
      console.log(response.data);
    });
  },
};
</script>