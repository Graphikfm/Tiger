import { createRouter, createWebHistory } from 'vue-router';
import Home from '../views/Home.vue';

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home,
  },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue'),
  },
  {
    path: '/user/:id',
    name: 'User',
    component: () => import(/* webpackChunkName: "user" */'../views/User-Details.vue'),
  },
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
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;