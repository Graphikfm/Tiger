<template>
  <div>
    <div v-for="user in users" :key="user.id">
      <!-- <router-link :to="{ name:  }"></router-link> -->
      {{ user.nom }}
      {{ user.email }}

    </div>
  </div>
</template>

<script>
// import Api from '@/services/Api';
export default {
  name: 'GestionLogInLogOut',
  components: {},
  mounted() {
    this.$store.dispatch('loadUsers');
  },
  computed: {
    users() { return this.$store.state.users; },
  },
  // data() {
  //   return {
  //     users: [],
  //   };
  // },

};
</script>
