
<template>
  <div>
    <img alt="Vue logo" src="./assets/logo.png">
    <h1>Minha Aplicação Vue</h1>
    <nav>
      <router-link to="/products">Produtos</router-link><br>
      <router-link to="/home">Home</router-link> <br>
       <router-link to="/painel">Painel ADM</router-link>
    </nav>
    <main>
      <router-view></router-view>
    </main>
  </div>
</template>

<script>
export default {
  name: 'App',
  components: {},
  data() {
    return {}
  },
  methods: {}
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
