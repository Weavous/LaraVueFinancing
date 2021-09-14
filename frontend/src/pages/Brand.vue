<template>
  <Main>
    <BrandTable></BrandTable>
  </Main>
</template>

<script>
import Main from "../components/Main.vue";

import BrandTable from "../components/BrandTable.vue";

export default {
  name: "Financing",
  components: { Main, BrandTable },
};
</script>