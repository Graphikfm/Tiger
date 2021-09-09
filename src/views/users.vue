<template>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <div>
    <!-- <button type="button" class="btn btn-primary m-2 float-end" data-bs-toggle="modal"
    data-bs-target="#exampleModal" @click="addClick()">Ajouter un Utilisateur</button> -->
    <table class=" z-0 table table-striped">
      <thead>
        <tr>
          <th>
            UtilisateurId
          </th>
          <th>
            UtilisateurNom
          </th>
          <th>
            UtilisateurPrenom
          </th>
          <th>
            Actions
          </th>
        </tr>
        <tr v-for="detail in details" :key="detail.id">
          <td>{{ detail.id }}</td>
          <td>{{ detail.nom }}</td>
          <td>{{ detail.prenom }}</td>
          <button @click="deleteUser(detail.id)">Supprimer</button>
          <!-- lier le composant au bouton Editer avec la props :client -->
          <UpdatePopup :client="detail">Editer</UpdatePopup>

         <!-- <img v-bind:src="product.img" alt="">  -->
          <!-- <td>
            <button type="button" class="btn btn-primary m-2 float-end"
            data-bs-toggle="modal" data-bs-target="#exampleModal" @click="editClick(detail)"
            >Edit</button>
            <button type="button">Delete</button>
          </td> -->
        </tr>
      </thead>
    </table>
    <p>{{}}</p>
        </div>
</template>

<script>
import axios from 'axios';
import UpdatePopup from '@/components/UpdatePopup.vue';
/* eslint-disable no-debugger, no-console */

export default {
  name: 'Utilisateurs',
  components: {
    UpdatePopup,
  },
  data() {
    return {
      modal: false,
      users: {
        nom: '',
        prenom: '',
        date_naissance: '',
        morphologie: '',
        objectif: '',
        sexe: '',
        pseudo: '',
        email: '',
        mdp: '',
      },
      details: [],
      // delete: {
      //   table: 'utilisateurs',
      //   id: '',
      //   _method: 'delete',

      // },
      update: {
        table: 'utilisateurs',
        id: '',
      },
    };
  },
  // mounted permet d'executer la fonction getDetails
  mounted() {
    this.getDetails();
  },
  methods: {
    getDetails() {
      axios.get('http://localhost/initPHP/site_eracles/src/PHP/test_read.php')
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
    deleteUser(idUser) {
      axios.delete('http://localhost/initPHP/site_eracles/src/PHP/test_delete.php', {
        params: {
          id: idUser,
        },
      })
        .then((response) => {
          console.log(response.data);
          this.getDetails();
        });
    },
  },
};
</script>
