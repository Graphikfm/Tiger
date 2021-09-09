<template>
<div class="flex items-center justify-center flex-col">
  <h1>Utilisateur numero: </h1>
  <h3>{{ this.$route.params.id }}</h3>
  <table class="shadow-lg bg-white">
    <thead>
      <tr>
        <th class="bg-predator-200 border text-left px-8 py-4">
          Nom
        </th>
        <th class="bg-predator-200 border text-left px-8 py-4">
          Prénom
        </th>
        <th class="bg-predator-200 border text-left px-8 py-4">
          Date de naissance
        </th>
        <th class="bg-predator-200 border text-left px-8 py-4">
          Morphologie
        </th>
        <th class="bg-predator-200 border text-left px-8 py-4">
          Objectif
        </th>
        <th class="bg-predator-200 border text-left px-8 py-4">
          Sexe
        </th>
        <th class="bg-predator-200 border text-left px-8 py-4">
          Email
        </th>
        <th class="bg-predator-200 border text-left px-8 py-4">
          Pseudo
        </th>
        <th class="bg-predator-200 border text-left px-8 py-4">
          Mot de passe
        </th>
        <th class="bg-predator-200 border text-left px-8 py-4">
          Action
        </th>
      </tr>
      <tr class="text-center">
        <td class="border px-8 py-4">{{ indice.nom }}</td>
        <td class="border px-8 py-4">{{ indice.prenom }}</td>
        <td class="border px-8 py-4">{{ indice.date_naissance }}</td>
        <td class="border px-8 py-4">{{ indice.morphologie }}</td>
        <td class="border px-8 py-4">{{ indice.objectif }}</td>
        <td class="border px-8 py-4">{{ indice.sexe }}</td>
        <td class="border px-8 py-4">{{ indice.email }}</td>
        <td class="border px-8 py-4">{{ indice.pseudo }}</td>
        <td class="border px-8 py-4">{{ indice.mdp }}</td>
          <!-- lier le composant au bouton Editer avec la props :client
          <UpdatePopup :client="detail">Editer</UpdatePopup> -->
      </tr>
    </thead>
  </table>
</div>
</template>

<script>
// import axios from 'axios';

export default {
  name: 'watchUser',
  // components {

  // }
  data() {
    return {
      details: [
      ],
    };
  },

  computed: {
    indice() {
      return this.$store.state.indices.find((ind) => ind.id === this.$route.params.id);
      // ind.id sera indiqué
      // dans l'url cet id retournera les données liées a celui-ci
    // user() {
    //   this.$store.state.users.find(use => use.id == this.$route.params.id)
    },
  },
  methods: {
    // deleteUser(indiceId) {
    //   this.$store.dispatch('deleteUser', indiceId);
    // },
    // deleteUser(idUser) {
    //   axios.delete('http://localhost/initPHP/site_eracles/src/PHP/test_delete.php', {
    //     params: {
    //       id: idUser,
    //     },
    //   })
    //     .then((response) => {
    //       console.log(response.data);
    //     });
    // },
  },
  // }
};
</script>
