<template>
    <div class="modal" v-if="isOpen">
      <div class="modal-content">
        <h2>Termo de Aceite!</h2>
        <p>Aqui é o termo de aceite</p>
        <p>{{ termos }}</p>
        <button @click="aceitarTermos">Aceitar</button>
        <button @click="fecharModal">Fechar</button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        isOpen: false,
        termos: "Lorem ipsum dolor sit amet, consectetur adipiscing elit...",
      };
    },
    methods: {
      aceitarTermos() {
        this.fecharModal();
      },
      fecharModal() {
        this.isOpen = false;
        this.$emit("fechar"); // Emitir evento para fechar o modal no componente pai
      },
    },
  };
  </script>
  
  <style scoped>
  .modal {
    /* Estilos para criar um modal com fundo escuro e posição fixa */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .modal-content {
    /* Estilos para o conteúdo do modal */
    background-color: #fff;
    padding: 20px;
    border-radius: 4px;
  }
  </style>
  