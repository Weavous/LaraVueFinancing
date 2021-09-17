<template>
  <div class="bg-gray-100 h-screen">
    <Nav></Nav>

    <main class="p-3">
      <slot></slot>
    </main>

    <Footer></Footer>
  </div>
</template>

<script>
import Nav from "../components/Nav.vue";
import Footer from "../components/Footer.vue";

export default {
  name: "Main",
  components: { Nav, Footer },
};
</script>