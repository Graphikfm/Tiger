<template>
  <div class="flex justify-center items-center flex-col w-full">
    <h1>Utilisateurs</h1>
    <table class="shadow-lg bg-white">
      <thead>
        <tr>
          <th class="bg-predator-200 border text-left px-8 py-4">
            Identifiant
          </th>
          <th class="bg-predator-200 border text-left px-8 py-4">
            Nom
          </th>
          <th class="bg-predator-200 border text-left px-8 py-4">
            Prenom
          </th>
          <th class="bg-predator-200 border text-left px-8 py-4">
            Date de naissance
          </th>
          <th class="bg-predator-200 border text-left px-8 py-4">
            Action
          </th>
        </tr>
      <tr v-for="indice in indices" :key="indice.nom">
        <td class="border px-8 py-4 hover:text-predator-500"><router-link :to="{ name: 'Watchuser',
        params: { id: indice.id }}">
          {{ indice.id }}</router-link></td>
            <td class="border px-8 py-4">{{ indice.nom }}</td>
            <td class="border px-8 py-4" v-html="indice.prenom"></td>
            <td class="border px-8 py-4">{{ indice.date_naissance }}</td>
            <button  class=" text-white border-2 border-black
        rounded-md px-6 hover:bg-predator-700 mt-2 bg-predator-600"
        ><UpdatePopup :client="indice">Editer</UpdatePopup></button>
        <button class=" text-white border-2 border-black bg-red-400
        rounded-md px-2 mt-2 hover:bg-red-500"
        @click="deleteUser(indice.id)">Supprimer</button>
      </tr>
    </thead>
  </table>
  </div>
</template>

<style>
tr:nth-child(odd) {
  background-color: #eee;
}
</style>

<script>
import axios from 'axios';
import UpdatePopup from '@/components/UpdatePopup.vue';

export default {

  name: 'UserDetails',
  components: {
    UpdatePopup,
  },
  computed: {
    indices() {
      return this.$store.state.indices;
    },
  },

  methods: {
    deleteUser(idUser) {
      // let validation = confirm(`Etes vous sur de vouloir supprimer ${idUser.id}`),
      // if(validation){
      axios.delete('http://localhost/initPHP/site_eracles/src/PHP/test_delete.php', {
        params: {
          id: idUser,
        },
      })
        .then((response) => {
          console.log(response.data);
          return this.$store.state.indice;
        });
    },
  },
};
</script>
