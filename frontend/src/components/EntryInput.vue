<template>
  <div class="mb-5">
    <label class="block text-gray-700"> Entry value </label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" @keyup="change()" v-model="entry" v-money="money">
  </div>
</template>

<script>
import { VMoney } from "v-money";

export default {
  data() {
    return {
      entry: 0,
      money: {
        decimal: ",",
        thousands: ".",
        prefix: "R$ ",
        precision: 2,
        masked: false
      }
    };
  },
  directives: { money: VMoney },
  methods: {
    change() {
      this.$emit("change", {
        entry: this.entry,
        timestamp: new Date()
      });
    }
  }
};
</script>
