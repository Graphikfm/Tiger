<template>
  <div class=" h-auto w-screen flex justify-center content-center" >
    <div class=" flex justify-center w-screen space-x-10 text-4xl sm:text-4xl sm:space-x-24 p-2
     md:text-4xl md:space-x-36 md:w-screen sm:w-screen bg-white" id="nav">
     <router-link to="/users" class="text-lg
    bg-predator-500 p-2 mt-4 mb-5 border-gray-400 border-2 rounded-lg
    text-white ">ADMIN</router-link>
      <router-link class="no-underline m-8" to="/user"><fa class="hover:text-predator
      hover:text-6xl text-4xl" :icon="['fas','id-card']" /></router-link>
      <router-link class="no-underline m-8" to="/utilisateurs"><fa class="hover:text-predator
      hover:text-6xl text-4xl" :icon="['fas','users']" />
      </router-link>
      <router-link class="no-underline m-8" to="/"><fa class="hover:text-predator hover:text-6xl
       text-4xl" :icon="['fas','book-open']" />
      </router-link>
      <router-link class=" m-8 hover:text-predator
      hover:text-6xl" to="/adduser"><fa class="hover:text-predator
      hover:text-6xl text-4xl" :icon="['fas','plus-square']" /></router-link>
      <router-link class="no-underline m-8" to="/signin"><fa class="hover:text-predator
      hover:text-6xl text-4xl" :icon="['fas','user']" /></router-link>
      <div v-if="currentUser.prenom" class= " w-20 text-sm flex items-center">
          {{ currentUser.prenom }}
          <button @click="logoutUser" class="text-lg bg-red-500 hover:bg-red-600 p-2 mt-4 mb-5
          border-gray-400 border-2 rounded-lg
        text-white ">LOGOUT</button>
      </div>
      <div v-else>
        <button @click="loginUser" class="text-lg hover:bg-predator-600 bg-predator-500
        p-2 mt-4 mb-5 border-gray-400 border-2 rounded-lg
        text-white ">LOGIN</button>
       </div>
    </div>
  </div>
  <router-view/>
</template>
<script>
import { mapState } from 'vuex';

export default {

  mounted() {
    this.$store.dispatch('loadUsers');
  },
  computed: {
    ...mapState(['currentUser']),
  },
  methods: {
    logoutUser() {
      this.$store.dispatch('logoutUser');
    },
  },
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

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>
