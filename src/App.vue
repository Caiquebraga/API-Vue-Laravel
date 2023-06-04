<template>
<div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img alt="Vue logo" src="./assets/logo.png" width="30" height="30" class="d-inline-block align-top">
      Aplication Vue
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto justify-content-end">
          <li class="nav-item">
            <router-link to="/products" class="nav-link">Sobre</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/home" class="nav-link">Por que usar Vuejs?</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/painel" class="nav-link">Documentação</router-link>
          </li>
        </ul>
      </div>
    </nav>

    <div>
      <WellcomeMyVue></WellcomeMyVue>
    </div>

    <main>
      <router-view></router-view>
    </main>
  </div>
</template>

<script>

import WellcomeMyVue from './components/WellcomeMy.vue'

export default {
  name: 'App',
  components: {
    WellcomeMyVue
  },
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
  
}

.navbar-brand {
  display: flex;
  align-items: center;
}

.navbar-brand img {
  margin-right: 5px;
}

.navbar-nav .nav-link {
  color: #fff;
}
</style>
