<template>
  <Main>
    <div class="flex justify-center">
      <div class="flex flex-col">
        <VehiclePicker @change="change"></VehiclePicker>

        <EntryInput @change="entrychange"></EntryInput>

        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" @click="getConditions()">
          Simulation
        </button>

        <div class="mb-5">
          <span class="text-gray-700">Plans</span>
        </div>

        <div class="mb-5">
          <p v-for="(plan, key) in plans" :key="key">{{ plan.text }}</p>
        </div>
      </div>
    </div>
  </Main>
</template>

<script>
import Main from "../components/Main.vue";
import VehiclePicker from "../components/VehiclePicker.vue";
import EntryInput from "../components/EntryInput.vue";
import financing from "../services/financing.js";

export default {
  name: "Financing",
  components: { Main, VehiclePicker, EntryInput },
  data() {
    return {
      vehicle: {},
      plans: [],
      entry: 0
    };
  },
  methods: {
    getConditions() {
      const { id, price } = { ...this.vehicle };

      if (id === 0 || id === undefined) {
        return false;
      }

      this.plans = this.getPlans(price);
    },
    change(evt) {
      this.vehicle = evt.el;
    },
    onlyIntegers(string) {
      return toString(string).replace(/\D+/g, "");
    },
    centsToDollar(cents) {
      return cents / 100;
    },
    toMoney(money) {
      const options = {
        style: "currency",
        currency: "USD",
        currencyDisplay: "narrowSymbol"
      };

      return new Intl.NumberFormat("en-US", options).format(money);
    },
    entrychange(evt) {
      this.entry = evt.entry;
    },
    getPlans(price) {
      return financing.index().map((model, key) => {
        const money = this.toMoney((this.centsToDollar(price) - this.onlyIntegers(this.entry) / 100) / model.quantity);

        return {
          id: key,
          price: this.toMoney(this.centsToDollar(price)),
          quantity: model.quantity,
          parcel: money,
          text: `${model.quantity}x of ${money}`
        };
      });
    }
  }
};
</script>
