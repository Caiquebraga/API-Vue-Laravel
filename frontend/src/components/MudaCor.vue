<template>
    <div>
      <button class="btn btn-primary" @click="changeColor">Mudar Cor</button>
      <p :style="{ color: textColor }">Texto com cor alterada</p>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        textColor: 'black' // cor inicial do texto
      };
    },
    methods: {
      changeColor() {
        // Gere uma cor aleatória em hexadecimal
        const randomColor = '#' + Math.floor(Math.random() * 16777215).toString(16);
        this.textColor = randomColor;
      }
    }
  };
  </script>
  