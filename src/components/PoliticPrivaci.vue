<template>
  <div v-if="!privacyAccepted" class="privacy-popup">
    <div class="privacy-content">
      <p>
        Nós valorizamos sua privacidade e usamos cookies para melhorar sua
        experiência no site. Ao continuar navegando, você concorda com nossa
        <a href="/politica-de-privacidade" target="_blank"
          >política de privacidade</a
        >.
      </p>
      <button @click="acceptPrivacy" class="btn btn-primary">Aceitar</button>
    </div>
  </div>
</template>

<script>
export default {
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

<style scoped>
</style>
