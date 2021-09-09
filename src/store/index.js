import { createStore } from 'vuex';
import Api from '@/services/Api';

export default createStore({
  state: {
    authenticated: false,
    users: [],
    currentUser: {},
    indices: [],
    // users: [],
    // indices: [
    //   {
    //     id: '25',
    //     nom: 'Mari',
    //     prenom: 'Fabien',
    //     date_naissance: '1984-12-06',
    //     morphologie: 'Ectomorphe',
    //     objectif: 'Prise de masse',
    //     sexe: 'Homme',
    //     pseudo: 'fmar',
    //     email: 'fabienmari@gmail.com',
    //     mdp: 'dkjfhkdjnskdjcn',
    //   },
    //   {
    //     id: '26',
    //     nom: 'Mari',
    //     prenom: 'Fabien',
    //     date_naissance: '1984-12-06',
    //     morphologie: 'Ectomorphe',
    //     objectif: 'Prise de masse',
    //     sexe: 'Homme',
    //     pseudo: 'fmar',
    //     email: 'fabienmari@gmail.com',
    //     mdp: 'dkjfhkdjnskdjcn',
    //   },
    //   {
    //     id: '132',
    //     nom: 'Mari',
    //     prenom: 'Fabien',
    //     date_naissance: '1984-12-06',
    //     morphologie: 'Ectomorphe',
    //     objectif: 'Prise de masse',
    //     sexe: 'Homme',
    //     pseudo: 'fmar',
    //     email: 'jeanlucnmari@gmail.com',
    //     mdp: 'jhbjbhjhbjhb',
    //   },
    //   {
    //     id: '135',
    //     nom: 'Mari',
    //     prenom: 'Jean-luc',
    //     date_naissance: '1984-12-06',
    //     morphologie: 'Ectomorphe',
    //     objectif: 'Prise de masse',
    //     sexe: 'Homme',
    //     pseudo: 'fmar',
    //     email: 'jeanlucnmari@gmail.com',
    //     mdp: 'jhygjugjygu',
    //   },
    // ],
  },

  mutations: {
    setAuthentification(state, status) {
      state.authenticated = status;
    },
    SET_USERS(state, indices) {
      state.indices = indices;
    },
    // DELETE_USER(state, indiceId) {
    //   const indices = state.indices.filter((i) => i.id !== indiceId);
    //   state.indices = indices;
    // },
    SET_USERS1(state, users) {
      state.users = users;
    },
    LOGOUT_USER(state) {
      state.currentUser = {};
      window.localStorage.currentUser = JSON.stringify();
    },
    SET_CURRENT_USER(state, user) {
      state.currentUser = user;
      window.localStorage.currentUser = JSON.stringify(user);
    },
  },
  actions: {
    async loadUsers({ commit }) {
      const response = await Api().get('/test_read.php');
      // const indices = response.data.map((indice) =>
      // indice.nomObjet); cette ligne est fait pour acceder
      // a un objet dans l'incide de l'objet parent
      // commit('SET_USERS', indices);
      commit('SET_USERS', response.data);
      this.indices = response.data;
    },
    async loadUsers1({ commit }) {
      // lier response avec l'api test_read
      const response = await Api().get('/test_read.php');
      // const indices = response.data.map((indice) =>
      // indice.nomObjet); cette ligne est fait pour acceder
      // a un objet dans l'incide de l'objet parent
      // commit('SET_USERS', indices);
      // afficher les données
      commit('SET_USERS1', response.data);
      this.users = response.data;
      // permet de rester connecter meme en faisant un refresh
      const user = JSON.parse(window.localStorage.currentUser);
      commit('SET_CURRENT_USER', user);
    },
    logoutUser({ commit }) {
      commit('LOGOUT_USER');
    },
    loginUser({ commit }, user) {
      commit('SET_CURRENT_USER', user);
    },
    // async loadUsers({ commit }) {
    //   const response = await Api().get('/test_read.php');
    //   commit('SET_USERS', response.data);
    // },
    // async deleteUser({ commit }, indice) {
    //   const response = await Api().delete(`/test_delete.php/${indice.id}`);
    //   if (response.status === 200 || response.status === 204) {
    //     commit('DELETE_USER', indice.id);
    //   }
    // },
  },
});
// { params: { id: indice }}
