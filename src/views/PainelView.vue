<template>
  <div>
    <h2>Painel ADM</h2>
    <button @click="showMessage">Mostrar Mensagem</button>
    <p v-if="showMessageFlag">{{ message }}</p>
  </div>
</template>
<script>
export default {
  name: 'PainelView',
  data() {
    return {
      showMessageFlag: false,
      message: 'Esta é uma mensagem de teste!'
    };
  },
  methods: {
    showMessage() {
      this.showMessageFlag = true;
    }
  }
};
</script>
<style>
/* Estilos personalizados */
</style>