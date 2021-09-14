<template>
  <footer class="footer absolute mt-auto w-full py-3 bg-light bottom-0 bg-gray-600">
    <div class="flex justify-center">
      <span class="text-muted text-gray-300">
        <TradeMark></TradeMark>
      </span>
    </div>
  </footer>
</template>

<script>
import TradeMark from "../components/TradeMark.vue";

export default {
  name: "Footer",
  components: { TradeMark },
};
</script>