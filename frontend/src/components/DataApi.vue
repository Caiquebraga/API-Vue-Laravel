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
  import axios from 'axios';
  
  export default {
    name: "DataApi",
    data() {
      return {
        carro: {} // Propriedade para armazenar os dados do carro
      };
    },
    mounted() {
      // Fazer a requisição para obter os dados do carro
      axios.get('/api/carros/1') // Substitua "1" pelo ID do carro desejado
        .then(response => {
          console.log(response.data);
          this.carro = response.data; // Armazenar os dados do carro na propriedade
        })
        .catch(error => {
          console.error(error);
        });
    }
  };
  </script>
  
  <style scoped>
  /* Estilos específicos do componente */
  </style>
  