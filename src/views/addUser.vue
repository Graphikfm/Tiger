<template>

<div class=" w-full flex flex-col items-center justify-center">
  <form class="bg-black shadow-md rounded mt-10 px-8 pt-6 pb-8 mb-4 formulaire1"
  @submit="createUser" method="post">
    <div class="mb-4">
      <label class="block text-predator text-sm font-bold mb-2" for="nom">
        Nom
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3
       text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nom"
       type="text" placeholder="Nom" name="nom" v-model="utilisateurs.nom">
       <p class="text-red-500 text-xs italic">Renseigner nom</p>
    </div>
    <div class="mb-6">
      <label class="block text-predator text-sm font-bold mb-2" for="prenom">
        Prénom
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3
       text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="prenom"
       type="text" placeholder="Prénom" name="prenom" v-model="utilisateurs.prenom">
      <p class="text-red-500 text-xs italic">Renseigner prénom</p>
    </div>

    <div class="mb-4">
      <label class="block text-predator text-sm font-bold mb-2" for="date_naissance">
        Date de naissance
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3
       text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date_naissance"
       type="date" placeholder="yyyy/mm/dd" name="date_naissance"
       v-model="utilisateurs.date_naissance">
       <p class="text-red-500 text-xs italic">Renseigner date de naissance</p>
    </div>
    <div class="mb-6">
      <label class="block text-predator text-sm font-bold mb-2" for="morphologie">
        Morphologie
      </label>
        <select class="shadow appearance-none border rounded w-full py-2 px-3
        text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="morphologie" id="" v-model="utilisateurs.morphologie">
        <option value=""></option>
        <option value="ectomorphe">Ectomorphe</option>
        <option value="endomorphe">Endomorphe</option>
        <option value="mesomorphe">Mesomorphe</option>
        </select>
      <p class="text-red-500 text-xs italic">Aucun choix selectionné</p>
    </div>

    <div class="mb-4">
      <label class="block text-predator text-sm font-bold mb-2" for="objectif">
        Objectif
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3
       text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="objectif"
       type="text" placeholder="Objectif" name="objectif" v-model="utilisateurs.objectif">
       <p class="text-red-500 text-xs italic">Renseigner objectif</p>
    </div>
    <div class="mb-6">
      <label class="block text-predator text-sm font-bold mb-2" for="password">
        Sexe
      </label>
      <select class="shadow appearance-none border rounded w-full py-2 px-3
        text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="" name="sexe" v-model="utilisateurs.sexe">
        <option value=""></option>
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
        <option value="autre">Autre</option>
        </select>
      <p class="text-red-500 text-xs italic">Aucun choix selectionné</p>
    </div>
    <div class="mb-6">
      <label class="block text-predator text-sm font-bold mb-2" for="prenom">
        Pseudo
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3
       text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="pseudo"
       type="text" placeholder="Pseudo" name="pseudo" v-model="utilisateurs.pseudo">
      <p class="text-red-500 text-xs italic">Renseigner pseudo</p>
    </div>

    <div class="mb-4">
      <label class="block text-predator text-sm font-bold mb-2" for="email">
        Email
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3
       text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email"
       type="text" placeholder="exemple@exemple.com" name="email" v-model="utilisateurs.email">
        <p class="text-red-500 text-xs italic">Saisissez email</p>
    </div>
    <div class="mb-6">
      <label class="block text-predator text-sm font-bold mb-2" for="mdp">
        Mot de passe
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3
       text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="mdp"
       type="mdp" placeholder="******************" autocomplete="off" name="mdp"
        v-model="utilisateurs.mdp">
      <p class="text-red-500 text-xs italic">Saisissez mot de passe</p>
    </div>
    <div class="mb-6">
      <label class="block text-predator text-sm font-bold mb-2" for="mdp">
        Confirmer mot de passe
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3
       text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="mdp"
       type="mdp" placeholder="******************" autocomplete="off" name="mdp"
        v-model="utilisateurs.mdp">
      <p class="text-red-500 text-xs italic">Confirmer</p>
    </div>
    <div class="flex items-center justify-between ">
      <button type="submit" class="bg-predator hover:bg-predator-600 text-white font-bold py-2 px-4
       rounded focus:outline-none focus:shadow-outline">
        S'enregistrer
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800
      no-underline"
      href="#">
        Déja enregistré?
      </a>
    </div>
  </form>
</div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'addUser',
  data() {
    return {
      utilisateurs: {
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
    };
  },
  methods: {
    createUser(e) {
      // console.warn(this.users);
      // e.preventDefault();
      axios.post('https://www.tiger-xtreme.fr/Tiger/api/test_create.php', this.utilisateurs)
        .then((response) => {
          console.warn(response.data);
          this.utilisateurs = response.data;
        });
      e.preventDefault();
    },
  },
};
</script>
