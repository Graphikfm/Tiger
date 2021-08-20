<template>
  <div class="flex justify-end pr-8  border-b-2 shadow border-predator-200" id="nav">
    <router-link class="no-underline text-5xl mt-4 mb-4 mr-64" to="/">ERACLES</router-link>
    <router-link class="no-underline m-8" to="/">Home</router-link>
    <router-link class="no-underline m-8" to="/about">Utilisateurs</router-link>
    <router-link class="no-underline m-8" to="/user/:id">Utilisateurs</router-link>
    <router-link class="no-underline m-8" to="/adduser">Créer un compte</router-link>
    <router-link class="no-underline m-8" to="/signin">Se connecter</router-link>
  </div>
  <router-view/>
</template>
<script>

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
