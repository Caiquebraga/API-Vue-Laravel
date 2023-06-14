<template>
  <div class="container mt-5">
    <DataApi></DataApi>
    <!-- <div>
      <img
        src="/Vue-Blog-Cover-2.png"
        width="300"
        height="260"
        alt="Imagem de capa Vue JS" />
    </div> -->
  </div>
</template>

<script>
import DataApi from "../components/DataApi.vue";
export default {
  name: "HomeView",
  components: {
    DataApi,
  },
};
</script>

<style scoped>
.jumbotron {
  background-color: #e9ecef;
  padding: 2rem;
  border-radius: 0.3rem;
}
p {
  font-size: 22px;
}
</style>