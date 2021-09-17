<template>
  <Main>
    <div class="flex justify-center">
      <div class="flex flex-col">
        <div class="inline-block relative w-64">
          <span class="text-gray-700">Selecione um veículo</span>

          <select @change="changePrice()" v-model="vehicles.name" class="block appearance-none w-full bg-white border mb-5 border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
            <option v-for="vehicle in vehicles" :key="vehicle.id">{{ vehicle.name }}</option>
          </select>

          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
            </svg>
          </div>
        </div>

        <div class="mb-5">
          <span class="text-gray-700">Preço:</span>
          <span>{{ vehicles.price }}</span>
        </div>

        <div class="mb-5">
          <label class="block text-gray-700"> Valor de entrada </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Price">
        </div>

        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" @click="getConditions()">
          Simular
        </button>
      </div>
    </div>
  </Main>
</template>

<script>
import Main from "../components/Main.vue";

import vehicles from "../services/vehicles.js";

export default {
  name: "Financing",
  components: { Main },
  data() {
    return {
      vehicles: {
        name,
        price: "0,00",
        object: {},
        data: []
      },
      financing: {
        id: 0,
      },
    };
  },
  methods: {
    getConditions() {
      console.log(`vehicle::id => ${this.vehicle.id}`);
      console.log(`financing::id => ${this.financing.id}`);
    },
    changePrice() {
      const vehicle = this.vehicles.find(vehicle => vehicle.name === this.vehicles.name);

      this.setVehicle(vehicle);
    },
    setVehicle(vehicle) {
      if (typeof undefined === typeof vehicle) {
        return false;
      }

      this.setPrice(vehicle.price);

      this.vehicles.object = vehicle;

    },
    setPrice(price) {
      this.vehicles.price = price.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');;
    }
  },
  mounted() {
    vehicles.index().then(response =>  {
      this.vehicles = response.data;
    });
  }
};
</script>