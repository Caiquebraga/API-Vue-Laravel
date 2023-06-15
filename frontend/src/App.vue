<template>
  <div>
    <NavBar></NavBar>
    <main>
      <router-view></router-view>
    </main>
    
    <PoliticPrivaci></PoliticPrivaci>
    <FooterPag></FooterPag>
  </div>
</template>

<script>
import NavBar from "./components/NavBar.vue";
import FooterPag from "./components/FooterPag.vue";
import PoliticPrivaci from "./components/PoliticPrivaci.vue";

export default {
  name: "App",
  components: {
    NavBar,
    FooterPag,
    PoliticPrivaci,
   
  },
  data() {
    return {
      privacyAccepted: false,
    };
  },
  mounted() {
    const privacyAccepted = localStorage.getItem("privacyAccepted");
    if (privacyAccepted) {
      this.privacyAccepted = true;
    }
  },
  methods: {
    acceptPrivacy() {
      this.privacyAccepted = true;
      localStorage.setItem("privacyAccepted", true);
    },
  },
};
</script>

<style>

.privacy-popup {
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

.privacy-content {
  background-color: #ffffff;
  padding: 20px;
  max-width: 400px;
  text-align: center;
  margin: 0 auto; /* Centraliza horizontalmente */
  margin-top: 20vh; /* Define o espaçamento do topo */
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
