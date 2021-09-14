<template>
  <Main>
    <VehicleTable></VehicleTable>
  </Main>
</template>

<script>
import Main from "../components/Main.vue";

import VehicleTable from "../components/VehicleTable.vue";

export default {
  name: "Vehicle",
  components: { Main, VehicleTable },
};
</script>