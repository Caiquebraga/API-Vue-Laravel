<template>
  <div>

    <h1>API de carros</h1>
    <!-- Exibir os detalhes dos carros -->
    <div v-for="carro in carros" :key="carro.id" class="row">
      <div class="col-md-4">
        <ul class="list-group">
          <li class="list-group-item bg-primary text-white"><strong>Marca:</strong></li>
          <li class="list-group-item">{{ carro.marca }}</li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul class="list-group">
          <li class="list-group-item bg-success text-white"><strong>Modelo:</strong></li>
          <li class="list-group-item">{{ carro.modelo }}</li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul class="list-group">
          <li class="list-group-item bg-info text-white"><strong>Cor:</strong></li>
          <li class="list-group-item">{{ carro.cor }}</li>
        </ul>
      </div>
      <div class="col-md-1">
        <ul class="list-group">
          <li class="list-group-item">
            <div class="icons-container">
              <a href="#" @click="editCarro(carro)">
                <i class="fas fa-edit"></i>
              </a>
              <a href="#" @click="deleteCarro(carro)">
                <i class="fas fa-trash-alt"></i>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue';
import axios from 'axios';

export default {
  name: "DataApi",
  setup() {
    const carros = ref([]); // Propriedade reativa para armazenar os dados dos carros

    onMounted(() => {
      // Fazer a requisição para obter os dados dos carros
      axios.get('http://localhost:8000/api/carros')
        .then(response => {
          console.log(response.data);
          carros.value = response.data; // Armazenar os dados dos carros na propriedade
        })
        .catch(error => {
          console.error(error);
        });
    });

    const editCarro = (carro) => {
      // Lógica para editar o carro
      console.log("Editar carro:", carro);
    };

    const deleteCarro = (carro) => {
      // Lógica para excluir o carro
      console.log("Excluir carro:", carro);
    };

    return {
      carros,
      editCarro,
      deleteCarro
    };
  }
};
</script>

<style scoped>
/* Estilos específicos do componente */
.icons-container {
  display: flex;
  justify-content: space-between;
}
</style>
