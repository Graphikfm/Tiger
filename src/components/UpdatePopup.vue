<template>
  <button @click="modal = !modal">Éditer</button>
   <div v-if="modal" class=" z-10 bg-gray-200 w-full flex justify-center items-center">
      <div id="app" class=" w-1/2 bg-white shadow-lg rounded p-4 mt">
      <button @click="modal = !modal" class="bg-red-500 text-white rounded-2px
       border-white border-2
           px-2 float-right">X</button>
        <div class=" w-full flex flex-col items-center justify-center">
          <form id="myForm" class="bg-black shadow-md rounded mt-10 px-8 pt-6 pb-8 mb-4 formulaire1"
          @submit.prevent="updateUser" method="put">
          <div class="mb-4">
          <label class="block text-predator text-sm font-bold mb-2" for="nom">
          Nom
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3
          text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nom"
          type="text" placeholder="Nom" name="nom" v-model="user.nom">
          <p class="text-red-500 text-xs italic">Renseigner nom</p>
        </div>
      <div class="mb-6">
      <label class="block text-predator text-sm font-bold mb-2" for="prenom">
        Prénom
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3
       text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="prenom"
       type="text" placeholder="Prénom" name="prenom" v-model="user.prenom">
      <p class="text-red-500 text-xs italic">Renseigner prénom</p>
    </div>

    <div class="mb-4">
      <label class="block text-predator text-sm font-bold mb-2" for="date_naissance">
        Date de naissance
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3
       text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date_naissance"
       type="date" placeholder="yyyy/mm/dd" name="date_naissance"
       v-model="user.date_naissance">
       <p class="text-red-500 text-xs italic">Renseigner date de naissance</p>
    </div>
    <div class="mb-6">
      <label class="block text-predator text-sm font-bold mb-2" for="morphologie">
        Morphologie
      </label>
        <select class="shadow appearance-none border rounded w-full py-2 px-3
        text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="morphologie" id="" v-model="user.morphologie">
        <option value=""></option>
        <option value="Ectomorphe">Ectomorphe</option>
        <option value="Endomorphe">Endomorphe</option>
        <option value="Mesomorphe">Mesomorphe</option>
        </select>
      <p class="text-red-500 text-xs italic">Aucun choix selectionné</p>
    </div>

    <div class="mb-4">
      <label class="block text-predator text-sm font-bold mb-2" for="objectif">
        Objectif
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3
       text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="objectif"
       type="text" placeholder="Objectif" name="objectif" v-model="user.objectif">
       <p class="text-red-500 text-xs italic">Renseigner objectif</p>
    </div>
    <div class="mb-6">
      <label class="block text-predator text-sm font-bold mb-2" for="password">
        Sexe
      </label>
      <select class="shadow appearance-none border rounded w-full py-2 px-3
        text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="" name="sexe" v-model="user.sexe">
        <option value=""></option>
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
        <option value="Autre">Autre</option>
        </select>
      <p class="text-red-500 text-xs italic">Aucun choix selectionné</p>
    </div>
    <div class="mb-6">
      <label class="block text-predator text-sm font-bold mb-2" for="prenom">
        Pseudo
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3
       text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="pseudo"
       type="text" placeholder="Pseudo" name="pseudo" v-model="user.pseudo">
      <p class="text-red-500 text-xs italic">Renseigner pseudo</p>
    </div>

    <div class="mb-4">
      <label class="block text-predator text-sm font-bold mb-2" for="email">
        Email
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3
       text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email"
       type="text" placeholder="exemple@exemple.com" name="email" v-model="user.email">
        <p class="text-red-500 text-xs italic">Saisissez email</p>
    </div>
    <div class="mb-6">
      <label class="block text-predator text-sm font-bold mb-2" for="mdp">
        Mot de passe
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3
       text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="mdp"
       type="mdp" placeholder="******************" autocomplete="off" name="mdp"
        v-model="user.mdp">
      <p class="text-red-500 text-xs italic">Saisissez mot de passe</p>
    </div>
    <div class="mb-6">
      <label class="block text-predator text-sm font-bold mb-2" for="mdp">
        Confirmer mot de passe
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3
       text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="mdp"
       type="mdp" placeholder="******************" autocomplete="off" name="mdp"
        v-model="user.mdp">
      <p class="text-red-500 text-xs italic">Confirmer</p>
    </div>
    <div class="flex items-center justify-between ">
      <button @click="updateUser(user.id)" type="submit" class="bg-predator
       hover:bg-predator-600
       text-white font-bold py-2 px-4
       rounded focus:outline-none focus:shadow-outline">
        Mettre à jour
      </button>
    </div>
  </form>
</div>

      </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
  props: [
    'client',
  ],
  data() {
    return {
      modal: false,
      user: {},
    };
  },
  created() {
  // recuperation des données et transfeert de ces données aux props
    this.user = this.client;
  },
  methods: {
    updateUser(idUser) {
      axios.put('http://localhost/initPHP/site_eracles/src/PHP/test_update.php', {
        data: this.user,
      },
      {
        params: {
          id: idUser,
        },
      })
        .then((response) => {
          console.log(response.data);
        });
    },
  },
};
</script>
