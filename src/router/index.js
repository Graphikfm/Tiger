import { createRouter, createWebHistory } from 'vue-router';
import Home from '../views/Home.vue';
import AdminUser from '../views/AdminUser.vue';
import GestionLogInLogOut from '../views/GestionLogInLogOut.vue';
import WatchUser from '../views/WatchUser.vue';
import UserAdminCopie from '../views/UserAdminCopie.vue';
// import HomePage from '../views/HomePage.vue';

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home,
  },
  {
    path: '/utilisateurs',
    name: 'Utilisateurs',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/users.vue'),
  },
  // {
  //   path: '/HomePage',
  //   name: 'HomePage',
  //   component: () => import(/* webpackChunkName: "about" */ '../views/HomePage.vue'),
  // },
  {
    path: '/cours',
    name: 'Cours',
    component: () => import(/* webpackChunkName: "cours" */'../views/cours.vue'),
  },
  {
    path: '/evolution',
    name: 'Evolution',
    component: () => import(/* webpackChunkName: "evolution" */'../views/evolution.vue'),
  },
  // {
  //   path: '/admin/user',
  //   name: 'UserDetails',
  //   component: () => import(/* webpackChunkName: "user" */'../views/User-Details.vue'),
  // },
  {
    path: '/adduser',
    name: 'Add-user',
    component: () => import(/* webpackChunkName: "adduser" */'../views/addUser.vue'),
  },
  {
    path: '/signin',
    name: 'Sign-in',
    component: () => import(/* webpackChunkName: "signin" */'../views/signin.vue'),
  },
  {
    path: '/users',
    name: 'admin-utilisateurs',
    component: AdminUser,
    children: [
      {
        path: 'user',
        name: 'UserDetails',
        component: () => import(/* webpackChunkName: "user" */'../views/User-Details.vue'),
      },
      {
        path: 'user/:id',
        name: 'Watchuser',
        component: WatchUser,
        params: true,
      },
      {
        path: 'utilisateurs',
        name: 'UserLogin',
        component: UserAdminCopie,
      },
    ],
  },
  {
    path: '/loginlogout',
    name: 'login-logout',
    component: GestionLogInLogOut,
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
