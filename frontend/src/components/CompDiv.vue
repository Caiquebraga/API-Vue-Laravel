<template>
    <div>
        <button @click="toggleMessage">{{ showMessage ? 'Esconder Mensagem' : 'Mostrar Mensagem' }}</button>
        <p v-if="showMessage">Olá! Esta é a mensagem que aparece quando o botão é clicado.</p>
    </div>
    </template>
    
    <script>
    export default {
      name: 'CompDiv',
      data() {
        return {
            showMessage: false
        }
      },
      methods: {
        toggleMessage() {
         this.showMessage = !this.showMessage;   
          }       
        }
      }
    </script>
    
    <style>
  button {
  margin-bottom: 10px;
}
    p {
      color: #f00202;
    }
    </style>