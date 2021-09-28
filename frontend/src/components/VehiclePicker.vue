<template>
  <div>
    <div class="inline-block relative w-64">
      <span class="text-gray-700">Select an Vehicle</span>

      <select @change="change()" v-model="name" class="block appearance-none w-full bg-white border mb-5 border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
        <option v-for="(vehicle, key) in vehicles.data" :key="key">{{ vehicle.name }}</option>
      </select>

      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
        </svg>
      </div>
    </div>

    <div class="mb-5">
      <span class="text-gray-700">Price:</span>
      <span>{{ price }}</span>
    </div>
  </div>
</template>

<script>
import vehicles from "../services/vehicles.js";

export default {
  name: "VehiclePicker",
  data() {
    return {
      name,
      price: 0,
      vehicles: {
        data: []
      }
    };
  },
  created() {
    vehicles.index().then(response => {
      this.vehicles.data = response.data;
    });

    this.setPrice(0);
  },
  methods: {
    change() {
      const vehicle = this.vehicles.data.find(
        vehicle => vehicle.name === this.name
      );

      this.setPrice(vehicle.price);

      this.$emit("change", {
        el: vehicle,
        timestamp: new Date()
      });
    },
    monetaryBeautify(money) {
      return new Intl.NumberFormat("en-US", {
        style: "currency",
        currency: "USD",
        currencyDisplay: "narrowSymbol"
      }).format(money);
    },
    setPrice(cents) {
      this.price = this.monetaryBeautify(cents / 100);
    }
  }
};
</script>
