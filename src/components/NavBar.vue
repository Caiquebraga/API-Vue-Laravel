<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
      <a class="navbar-brand" href="/">
        <img
          alt="Vue logo"
          src="../assets/logo.png"
          width="30"
          height="30"
          class="d-inline-block align-top"
        />
        Aplication Vue
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto justify-content-end">
          <li class="nav-item">
            <router-link to="/products" class="nav-link">Sobre</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/home" class="nav-link"
              >Por que usar Vue.js?</router-link
            >
          </li>
          <li class="nav-item">
            <router-link to="/painel" class="nav-link"
              >Documentação</router-link
            >
          </li>
        </ul>
      </div>
    </nav>
  </div>
</template>

<script>
export default {
  name: "NavBar",
};
</script>


<style>
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
