<template>
  <div>
    <h1 class="text-black font-sans text-4xl font-bold ">Liste des utilisateurs</h1>
    <ul>
      <li>
        <router-link :to="{ name: 'UserLogin' }">Utilisateurs</router-link>
      </li>
      <li>
        <router-link :to="{ name: 'UserDetails' }">Tableau des inscrits</router-link>
      </li>
      <li>
      <router-link :to="{ name: 'watchUser' }">Tableau inscrit</router-link>
      </li>
      </ul>
    <router-view :key="$route.path" />
  </div>
</template>

<script>

export default {
  name: 'admin-utilisateurs',
  components: {
  },
};
</script>
