<template>
  <div class="about">
    <h2>Post Details</h2>
    <table class="table">
      <tbody>
        <tr>
          <th>Id</th>
          <th>Nom</th>
          <th>Prénom</th>
        </tr> -->
      <tbody>
        <tr v-for="detail in details" :key="detail">
          <td>{{ detail.id }}</td>
          <td>{{ detail.nom }}</td>
          <td>{{ detail.prenom }}</td>
          <td>{{ detail.date_naissance }}</td>
          <td>{{ detail.morphologie }}</td>
          <td>{{ detail.objectif }}</td>
          <td>{{ detail.sexe }}</td>
          <td>{{ detail.pseudo }}</td>
          <td>{{ detail.email }}</td>
          <td>{{ detail.mdp }}</td>
        </tr>
        </tbody>
        <tr v-for="detail in details" :key="detail">
          <td>{{ detail.id }} </td>
          <td>{{ detail.nom }}</td>
          <td>{{ detail.prenom }}</td>
          <button @click="deleteUser(detail.id)">Delete</button>
        </tr>
      </tbody>
    </table>
    <button @click="postUser">Create user</button>
    <button @click="getDetails">Load User details</button>
  </div>
</template>
<script>
import axios from 'axios';

export default {
  data() {
    return {
      details: [],
      // delete: {
      //   methods: 'delete',

      // postDetails: [],
      // id: '',
      // nom: '',
      // prenom: '',
      // date_naissance: '',
      // morphologie: '',
      // objectif: '',
      // sexe: '',
      // pseudo: '',
      // email: '',
      // mdp: '',
      //  isSuccess: false,
    };
  },
  methods: {
    getDetails() {
      axios.get('http://localhost:80/initPHP/test1/src/PHP/test_read.php')
        .then((response) => {
          console.log(response.data);
          this.details = response.data;
        })
        .catch((error) => {
          if (error.response) {
            console.log(error.esponse.data);
            console.log(error.response.status);
            console.log(error.response.headers);
          } else if (error.request) {
            console.log(error.request);
          } else {
            console.log('Error', error.message);
          }
          console.log(error.config);
        });
    },

    // deleteUser() {
    //   axios.get('http://localhost/initPHP/sport-application-project/src/PHP/test_delete.php?id=')
    // }
  },
};

</script>
