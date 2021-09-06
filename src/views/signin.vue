<template>

<!-- <div class=" w-full flex flex-col items-center justify-center">
  <form class="bg-black shadow-md rounded mt-10 px-8 pt-6 pb-8 mb-4">
    <h1 v-if="mode == 'login'" class="text-white mb-4 font-bold lext-4xl">Connexion</h1>
    <h1 v-else class="text-white mb-4 font-bold lext-4xl">Inscription</h1>
    <div class="mb-4">
      <label class="block text-predator text-sm font-bold mb-2" for="username">
        Username
      </label>
      <input  class="shadow appearance-none border
      rounded w-full py-2 px-3
       text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username"
       type="text" placeholder="Username">
    </div>
    <div class="mb-6">
      <label class="block text-predator text-sm font-bold mb-2" for="email">
        Email
      </label>
      <input  class="shadow appearance-none border
      border-red-500 rounded w-full py-2 px-3
       text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password"
       type="email" placeholder="exemple@exemple.com">
      <p class="text-red-500 text-xs italic">Please choose a email.</p>
    </div>
    <div class="mb-6">
      <label class="block text-predator text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input  class="shadow appearance-none border
      border-red-500 rounded w-full py-2 px-3
       text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password"
       type="password" placeholder="******************">
      <p class="text-red-500 text-xs italic">Please choose a password.</p>
    </div>
    <div class="flex items-center justify-between">
      <button @click="loginUser" class="bg-predatorhover:bg-predator-600 text-white
      font-bold py-2 px-4
       rounded focus:outline-none focus:shadow-outline" type="button">
        Login In
      </button>
      <a v-if="mode == 'login'" @click="switchToAddUser" class="inline-block align-baseline
      font-bold
      text-sm
      text-blue-500 hover:text-blue-800
      no-underline"
      href="#">
        Pas encore enregistré?
      </a>
      <a v-else @click="switchToSignIn" class="inline-block align-baseline font-bold text-sm
      text-blue-500 hover:text-blue-800
      no-underline"
      href="#">
        Déjà enregistré?
      </a>
    </div>
  </form>
</div> -->

<div class=" w-full flex flex-col items-center justify-center">
  <form class="bg-black shadow-md rounded mt-10 px-8 pt-6 pb-8 mb-4 formulaire1">
    <h1 v-if="mode == 'login'" class="text-white mb-4 font-bold lext-4xl">Connexion</h1>
    <h1 v-else class="text-white mb-4 font-bold lext-4xl">Inscription</h1>
    <div v-if="mode == 'create'" class="mb-4">
      <label class="block text-predator text-sm font-bold mb-2" for="nom">
        Nom
      </label>
      <input v-model="nom" class="shadow appearance-none border rounded w-full py-2 px-3
       text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nom"
       type="text" placeholder="Nom" name="nom">
       <p class="text-red-500 text-xs italic">Renseigner nom</p>
    </div>
    <div v-if="mode == 'create'" class="mb-6">
      <label class="block text-predator text-sm font-bold mb-2" for="prenom">
        Prénom
      </label>
      <input v-model="prenom" class="shadow appearance-none border
      border-red-500 rounded w-full py-2 px-3
       text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="prenom"
       type="text" placeholder="Prénom" name="prenom">
      <p class="text-red-500 text-xs italic">Renseigner prénom</p>
    </div>

    <div v-if="mode == 'create'" class="mb-4">
      <label class="block text-predator text-sm font-bold mb-2" for="date_naissance">
        Date de naissance
      </label>
      <input v-model="date_naissance" class="shadow appearance-none border rounded w-full py-2 px-3
       text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date_naissance"
       type="date" placeholder="yyyy/mm/dd" name="date_naissance">
       <p class="text-red-500 text-xs italic">Renseigner date de naissance</p>
    </div>
    <div v-if="mode == 'create'" class="mb-6">
      <label class="block text-predator text-sm font-bold mb-2" for="morphologie">
        Morphologie
      </label>
        <select v-model="morphologie" class="shadow appearance-none border rounded w-full py-2 px-3
        text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="morphologie" id="">
        <option value=""></option>
        <option value="Ectomorphe">Ectomorphe</option>
        <option value="Endomorphe">Endomorphe</option>
        <option value="Mesomorphe">Mesomorphe</option>
        </select>
      <p class="text-red-500 text-xs italic">Aucun choix selectionné</p>
    </div>

    <div v-if="mode == 'create'" class="mb-4">
      <label class="block text-predator text-sm font-bold mb-2" for="objectif">
        Objectif
      </label>
      <input v-model="objectifs" class="shadow appearance-none border rounded w-full py-2 px-3
       text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="objectif"
       type="text" placeholder="Objectif" name="objectif">
       <p class="text-red-500 text-xs italic">Renseigner objectif</p>
    </div>
    <div v-if="mode == 'create'" class="mb-6">
      <label class="block text-predator text-sm font-bold mb-2" for="password">
        Sexe
      </label>
      <select v-model="sexe" class="shadow appearance-none border rounded w-full py-2 px-3
        text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        id="" name="sexe">
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
      <input v-model="pseudo" class="shadow appearance-none border border-red-500
      rounded w-full py-2 px-3
       text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="pseudo"
       type="text" placeholder="Pseudo" name="pseudo">
      <p class="text-red-500 text-xs italic">Renseigner pseudo</p>
    </div>

    <div class="mb-4">
      <label class="block text-predator text-sm font-bold mb-2" for="email">
        Email
      </label>
      <input v-model="email" class="shadow appearance-none border rounded w-full py-2 px-3
       text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email"
       type="text" placeholder="exemple@exemple.com" name="email">
        <p class="text-red-500 text-xs italic">Saisissez email</p>
    </div>
    <div class="mb-6">
      <label class="block text-predator text-sm font-bold mb-2" for="mdp">
        Mot de passe
      </label>
      <input v-model="mdp" class="shadow appearance-none border border-red-500
      rounded w-full py-2 px-3
       text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="mdp"
       type="mdp" placeholder="******************" autocomplete="off" name="mdp">
      <p class="text-red-500 text-xs italic">Saisissez mot de passe</p>
    </div>
    <div v-if="mode == 'create'" class="mb-6">
      <label class="block text-predator text-sm font-bold mb-2" for="mdp">
        Confirmer mot de passe
      </label>
      <input v-model="mdp" class="shadow appearance-none border border-red-500
      rounded w-full py-2 px-3
       text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="mdp"
       type="mdp" placeholder="******************" autocomplete="off" name="mdp">
      <p class="text-red-500 text-xs italic">Confirmer</p>
    </div>
    <div class="flex items-center justify-between ">
      <button v-if="mode == 'login'" type="submit" class="opacity-50
      bg-predator hover:bg-predator-600
      text-white font-bold py-2 px-4
       rounded focus:outline-none focus:shadow-outline" : >
        Se connecter
      </button>
      <button v-else type="submit" class="disabled:opacity-50 bg-predator
      hover:bg-predator-600
      text-white font-bold py-2 px-4
       rounded focus:outline-none focus:shadow-outline" disabled>
        S'enregistrer
      </button>
      <a v-if="mode == 'login'" @click="switchToAddUser" class="inline-block align-baseline
      font-bold
      text-sm
      text-blue-500 hover:text-blue-800
      no-underline"
      href="#">
        Pas encore enregistré?
      </a>
      <a v-else @click="switchToSignIn" class="inline-block align-baseline font-bold text-sm
      text-blue-500 hover:text-blue-800
      no-underline"
      href="#">
        Déjà enregistré?
      </a>
    </div>
  </form>
</div>
</template>

<script>

export default {
  data() {
    return {
      mode: 'login',
    };
  },
  methods: {
    // loginUser() {
    //   this.$store.dispatch('loginUser', this.loginInfo);
    switchToAddUser() {
      this.mode = 'create';
    },
    switchToSignIn() {
      this.mode = 'login';
    },
  },
};
</script>
