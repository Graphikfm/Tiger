// import axios from 'axios';

// const API_URL = 'http://localhost/initPHP/site_eracles/src/PHP/test_create.php';

// class AuthService {
//   login(user) {
//     return axios
//       .post(API_URL + 'signin', {
//         username: user.pseudo,
//         password: user.mdp,
//       })
//       .then(response => {
//         if (response.data.accessToken) {
//           localStorage.setItem('user', JSON.stringify(response.data));
//         }

//         return response.data;
//       });
//   }

//   logout() {
//     localStorage.removeItem('user');
//   }

//   register(user) {
//     return axios.post(API_URL + 'signup', {
//       nom: user.nom,
//       prenom: user.prenom,
//       date: user.date_naissance,
//       morpho: user.morphologie,
//       objectif: user.objectif,
//       sexe: user.sexe,
//       email: user.email,
//       username: user.pseudo,
//       password: user.password,
//     });
//   }
// }

// export default new AuthService();
