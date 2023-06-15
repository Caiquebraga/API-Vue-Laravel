<template>
  <div>
    <h1>API de carros Com Vue e Laravel</h1>
    <button class="btn btn-primary" @click="openModalAddCarro">Adicionar Carro</button>
    <!-- Exibir os detalhes dos carros -->
    <div v-for="carro in carros" :key="carro.id" class="row carro-item mt-5">
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
              <a href="#" @click="openModal(carro)">
                <i class="fas fa-edit"></i>
              </a>
              <a href="#" @click="openDeleteModal(carro)">
                <i class="fas fa-trash-alt"></i>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <!-- Modal de edição -->
    <div v-if="selectedCarro" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <h2>Editar Carro</h2>
          <form @submit.prevent="updateCarro">
            <div class="form-group">
              <label for="marca">Marca</label>
              <input type="text" id="marca" v-model="selectedCarro.marca" required>
            </div>
            <div class="form-group">
              <label for="modelo">Modelo</label>
              <input type="text" id="modelo" v-model="selectedCarro.modelo" required>
            </div>
            <div class="form-group">
              <label for="cor">Cor</label>
              <input type="text" id="cor" v-model="selectedCarro.cor" required>
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary">Salvar</button>
              <button @click="closeModal" class="btn btn-secondary">Cancelar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal de exclusão -->
    <div v-if="selectedCarroToDelete" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <h2>Excluir Carro</h2>
          <p>Tem certeza que deseja excluir o carro {{ selectedCarroToDelete.marca }} - {{ selectedCarroToDelete.modelo }}?</p>
          <div class="form-group text-center">
            <button type="button" class="btn btn-danger" @click="deleteCarro(selectedCarroToDelete)">Excluir</button>
            <button type="button" class="btn btn-secondary" @click="closeDeleteModal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal de adição -->
    <div v-if="showModalAddCarro" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <h2>Adicionar Carro</h2>
          <form @submit.prevent="addCarro">
            <div class="form-group">
              <label for="marcaAdd">Marca</label>
              <input type="text" id="marcaAdd" v-model="newCarro.marca" required>
            </div>
            <div class="form-group">
              <label for="modeloAdd">Modelo</label>
              <input type="text" id="modeloAdd" v-model="newCarro.modelo" required>
            </div>
            <div class="form-group">
              <label for="corAdd">Cor</label>
              <input type="text" id="corAdd" v-model="newCarro.cor" required>
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary">Adicionar</button>
              <button @click="closeModalAddCarro" class="btn btn-secondary">Cancelar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue';
import axios from 'axios';

export default {
  name: 'DataApi',
  setup() {
    const carros = ref([]);
    const selectedCarro = ref(null);
    const selectedCarroToDelete = ref(null);
    const showModalAddCarro = ref(false);
    const newCarro = ref({
      marca: '',
      modelo: '',
      cor: ''
    });

    onMounted(() => {
      axios
        .get('http://localhost:8000/api/carros')
        .then(response => {
          carros.value = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    });

    const openModal = (carro) => {
      selectedCarro.value = { ...carro };
      closeModalAddCarro();
    };

    const updateCarro = () => {
      axios
        .put(`http://localhost:8000/api/carros/${selectedCarro.value.id}`, selectedCarro.value)
        .then(response => {
          console.log('Carro atualizado:', response.data);
          carros.value = carros.value.map(carro => {
            if (carro.id === selectedCarro.value.id) {
              return response.data;
            } else {
              return carro;
            }
          });
          closeModal();
        })
        .catch(error => {
          console.error(error);
        });
    };

    const openDeleteModal = (carro) => {
      selectedCarroToDelete.value = { ...carro };
      closeModal();
    };

    const deleteCarro = (carro) => {
      axios
        .delete(`http://localhost:8000/api/carros/${carro.id}`)
        .then(() => {
          console.log('Carro excluído:', carro);
          carros.value = carros.value.filter(c => c.id !== carro.id);
          closeDeleteModal();
        })
        .catch(error => {
          console.error(error);
        });
    };

    const closeDeleteModal = () => {
      selectedCarroToDelete.value = null;
    };

    const closeModal = () => {
      selectedCarro.value = null;
    };

    const openModalAddCarro = () => {
      newCarro.value = {
        marca: '',
        modelo: '',
        cor: ''
      };
      showModalAddCarro.value = true;
    };

    const addCarro = () => {
      axios
        .post('http://localhost:8000/api/carros', newCarro.value)
        .then(response => {
          console.log('Novo carro adicionado:', response.data);
          carros.value.push(response.data);
          closeModalAddCarro();
        })
        .catch(error => {
          console.error(error);
        });
    };

    const closeModalAddCarro = () => {
      showModalAddCarro.value = false;
    };

    return {
      carros,
      selectedCarro,
      selectedCarroToDelete,
      showModalAddCarro,
      newCarro,
      openModal,
      updateCarro,
      openDeleteModal,
      deleteCarro,
      closeDeleteModal,
      closeModal,
      openModalAddCarro,
      addCarro,
      closeModalAddCarro
    };
  },
};
</script>

<style scoped>
/* Estilos específicos do componente */
.icons-container {
  display: flex;
  justify-content: space-between;
}

.modal {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal-dialog {
  max-width: 400px;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

.modal-content h2 {
  margin-top: 0;
}

.form-group {
  margin-bottom: 10px;
}

button {
  margin-top: 10px;
}
.carro-item {
  margin-bottom: 20px;
}
</style>
