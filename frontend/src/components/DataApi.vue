<template>
    <div>
      <!-- Exibir os detalhes do carro -->
      <h2>{{ carro.nome }}</h2>
      <p>Marca: {{ carro.marca }}</p>
      <p>Modelo: {{ carro.modelo }}</p>
      <p>Cor: {{ carro.cor }}</p>
    </div>
  </template>
  
  <script>
  import { ref, onMounted } from 'vue';
  import axios from 'axios';
  
  export default {
    name: "DataApi",
    setup() {
      const carro = ref({}); // Propriedade reativa para armazenar os dados do carro
  
      onMounted(() => {
        // Fazer a requisição para obter os dados do carro
        axios.get('/api/carros/1') // Substitua "1" pelo ID do carro desejado
          .then(response => {
            console.log(response.data);
            carro.value = response.data; // Armazenar os dados do carro na propriedade
          })
          .catch(error => {
            console.error(error);
          });
      });
  
      return {
        carro
      };
    }
  };
  </script>
  
  <style scoped>
  /* Estilos específicos do componente */
  </style>
  