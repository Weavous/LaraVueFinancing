<template>
  <div class="overflow-x-auto">
    <div class="flex justify-center font-sans overflow-hidden">
      <div class="w-full">
        <div class="bg-white shadow-md rounded overflow-scroll h-160">
          <table class="min-w-max w-full table-auto">
            <thead>
              <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Code</th>
                <th class="py-3 px-6 text-left">Brand</th>
                <th class="py-3 px-6 text-left">Created</th>
                <th class="py-3 px-6 text-left">Updated</th>
                <th class="py-3 px-6 text-left">Actions</th>
              </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
              <tr v-for="brand in this.types" :key="brand.id" class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 text-left whitespace-nowrap">
                  <div class="flex items-left">
                    <span class="font-medium">{{ brand.id }}</span>
                  </div>
                </td>
                <td class="py-3 px-6 text-left">
                  <div class="flex items-center">
                    <span>{{ brand.name }}</span>
                  </div>
                </td>
                <td class="py-3 px-6 text-left">
                  <div class="flex items-left">
                    <span>{{ brand.created_at | toDateString }}</span>
                  </div>
                </td>
                <td class="py-3 px-6 text-left">
                  <div class="flex items-left">
                    <span>{{ brand.updated_at | toDateString }}</span>
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
                      <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110" v-on:click="destroy(brand.id)">
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
import types from "../services/types.js";

import EyeIcon from "./EyeIcon.vue";
import DestroyIcon from "./DestroyIcon.vue";
import EditIcon from "./EditIcon.vue";

export default {
  name: "TypeTable",
  components: { EyeIcon, EditIcon, DestroyIcon },
  data() {
    return {
      types: [],
    };
  },
  filters: {
    toDateString: (date) => {
      return new Date(date).toDateString()
    }
  },
  mounted() {
    types.index().then((response) => {
      this.types = response.data;
    });
  },
  methods: {
    destroy: (id) => {
      types.destroy(id).then(response => {

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