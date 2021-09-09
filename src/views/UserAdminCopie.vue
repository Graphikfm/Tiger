<template>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  <div class="flex items-center justify-center flex-col">
    <!-- <button type="button" class="btn btn-primary m-2 float-end" data-bs-toggle="modal"
    data-bs-target="#exampleModal" @click="addClick()">Ajouter un Utilisateur</button> -->
    <table class="shadow-lg bg-white">
      <thead>
        <tr>
          <th class="bg-predator-200 border text-left px-8 py-4">
            UtilisateurId
          </th>
          <th class="bg-predator-200 border text-left px-8 py-4">
            UtilisateurNom
          </th>
          <th class="bg-predator-200 border text-left px-8 py-4">
            UtilisateurPrenom
          </th>
          <th class="bg-predator-200 border text-left px-8 py-4">
            Action
          </th>
        </tr>
        <tr class="text-center" v-for="user in users" :key="user.id">
          <td class="border px-8 py-4">{{ user.id }}</td>
          <td class="border px-8 py-4">{{ user.nom }}</td>
          <td class="border px-8 py-4">{{ user.prenom }}</td>
          <button @click="loginUser(user)" class=" mt-2 text-sm border-2
          rounded-lg p-2 hover:bg-predator-600 bg-predator-500 text-white">Login</button>
        </tr>
      </thead>
    </table>
    <p>{{}}</p>
        </div>
</template>

<script>
// import axios from 'axios';
import { mapState } from 'vuex';

export default {
  name: 'UserLogin',
  computed: {
    ...mapState(['users']),
  },
  mounted() {
    this.$store.dispatch('loadUsers1');
  },
  methods: {
    loginUser(user) {
      this.$store.dispatch('loginUser', user);
    },
  },
};
</script>
