<template>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <div>
    <!-- <button type="button" class="btn btn-primary m-2 float-end" data-bs-toggle="modal"
    data-bs-target="#exampleModal" @click="addClick()">Ajouter un Utilisateur</button> -->
    <table class="table table-striped">
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
        </tr>
        <tr v-for="detail in details" :key="detail.id">
          <td>{{ detail.id }}</td>
          <td>{{ detail.nom }}</td>
          <td>{{ detail.prenom }}</td>
          <button @click="deleteUser()">Supprimer</button>
          <button @click="updateUser()">Editer</button>
          <!-- <td>
            <button type="button" class="btn btn-primary m-2 float-end"
            data-bs-toggle="modal" data-bs-target="#exampleModal" @click="editClick(detail)"
            >Edit</button>
            <button type="button">Delete</button>
          </td> -->
        </tr>
      </thead>
    </table>
    <button @click="getDetails">Load User details</button>
    <p>{{}}</p>

      <!-- <div class="modal fade" id="exampleModal" tabindex="1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modalLabel" aria-hidden="true">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{modalTitle}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"
          aria-label="Close"></button> -->
        </div>

          <!-- <div class="modal-body">
            <div class="input-group mb-3">
              <span class="input-group-text">Nom Utilisateur</span>
              <input type="text" class="form-control" v-model="nom">
            </div>

            <button type="button" v-if="id==0" class="btn btn-primary">
            Create</button>

            <button type="button" v-if="id!=0" class="btn btn-primary">
            Update</button> -->

          <!-- </div> -->
      <!-- </div>
      </div>
      </div>

  </div> -->
</template>

<!-- <div class="about">
    <h2>Post Details</h2>
    <table class="table">
      <tbody>
        <tr>
          <th>Id</th>
          <th>Nom</th>
          <th>Prénom</th>
        </tr>
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
  </div> -->

<script>
import axios from 'axios';

export default {
  name: 'About',
  data() {
    return {
      details: [],
      // modalTitle: '',
      // nom: '',
      // prenom: '',
      // id: 0,
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
      delete: {
        table: 'utilisateurs',
        id: '',
        _method: 'post',

      },
      update: {
        table: 'utilisateurs',
        id: '',

      },
    };
  },
  methods: {
    getDetails() {
      axios.get('https://www.tiger-xtreme.fr/Tiger/api/test_read.php')
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
    deleteUser() {
      axios.post('https://www.tiger-xtreme.fr/Tiger/api/test_delete.php', this.delete)
        .then((response) => {
          console.log(response.data);
          this.getDetails();
        });
    },
    updateUser() {
      axios.put('www.https://www.tiger-xtreme.fr/Tiger/api/test_update.php/{id}')
        .then((response) => {
          console.log(response.data);
        });
    },
  },
};
</script>
