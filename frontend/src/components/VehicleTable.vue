<template>
  <div class="overflow-x-auto">
    <div class="flex justify-center font-sans overflow-hidden">
      <div class="w-full">
        <div class="bg-white shadow-md rounded overflow-scroll h-160">
          <table class="min-w-max w-full table-auto">
            <thead>
              <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Code</th>
                <th class="py-3 px-6 text-left">Name</th>
                <th class="py-3 px-6 text-left">Price</th>
                <th class="py-3 px-6 text-left">Brand</th>
                <th class="py-3 px-6 text-left">Type</th>
                <th class="py-3 px-6 text-left">Created</th>
                <th class="py-3 px-6 text-left">Updated</th>
                <th class="py-3 px-6 text-left">Actions</th>
              </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
              <tr v-for="vehicle in this.vehicles" :key="vehicle.id" class="border-b border-gray-200 hover:bg-gray-160">
                <td class="py-3 px-6 text-left whitespace-nowrap">
                  <div class="flex items-left">
                    <span class="font-medium">{{ vehicle.id }}</span>
                  </div>
                </td>
                <td class="py-3 px-6 text-left">
                  <div class="flex items-left">
                    <span>{{ vehicle.name }}</span>
                  </div>
                </td>
                <td class="py-3 px-6 text-left">
                  <div class="flex items-left">
                    <span>{{ vehicle.price }}</span>
                  </div>
                </td>
                <td class="py-3 px-6 text-left">
                  <div class="flex items-center">
                    <div class="mr-2">
                      <img class="w-6 h-6 rounded-full" v-bind:src="vehicle.brand.logo">
                    </div>
                    <span>{{ vehicle.brand.name }}</span>
                  </div>
                </td>
                <td class="py-3 px-6 text-left">
                  <div class="flex items-left">
                    <span>{{ vehicle.type.name }}</span>
                  </div>
                </td>
                <td class="py-3 px-6 text-left">
                  <div class="flex items-left">
                    <span>{{ vehicle.created_at | toDateString }}</span>
                  </div>
                </td>
                <td class="py-3 px-6 text-left">
                  <div class="flex items-left">
                    <span>{{ vehicle.updated_at | toDateString }}</span>
                  </div>
                </td>
                <td class="py-3 px-6 text-left">
                  <div class="flex item-left">
                    <div class="flex">
                      <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                        <EyeIcon></EyeIcon>
                      </div>
                      <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                        <EditIcon></EditIcon>
                      </div>
                      <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110" v-on:click="destroy(vehicle.id)">
                        <DestroyIcon></DestroyIcon>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import vehicles from "../services/vehicles.js";

import EyeIcon from "./EyeIcon.vue";
import DestroyIcon from "./DestroyIcon.vue";
import EditIcon from "./EditIcon.vue";

export default {
  name: "vehicleTable",
  components: { EyeIcon, EditIcon, DestroyIcon },
  data() {
    return {
      vehicles: [],
    };
  },
  filters: {
    toDateString: (date) => {
      return new Date(date).toDateString()
    }
  },
  mounted() {
    vehicles.index().then((response) => {
      this.vehicles = response.data;
    });
  },
  methods: {
    destroy: (id) => {
      vehicles.destroy(id).then(response => {

      location.reload();
      });
    }
  }
};
</script>

<style>
  .h-160 {
    height: 40rem;
  }
</style>