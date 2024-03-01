import { createRouter, createWebHistory } from "vue-router";

import Home from "../components/Home.vue";

const routes = [
  { path: "/", name: "Home", component: Home },
  {
    path: "/login",
    name: "Login",
    component: () => import("../components/Login.vue"),
  },
  {
    path: "/register",
    name: "Register",
    component: () => import("../components/Register.vue"),
  },
  {
    path: "/forgot-password",
    name: "ForgotPassword",
    component: () => import("../components/ForgotPassword.vue"),
  },
  {
    path: "/password-reset/:token",
    name: "ResetPassword",
    component: () => import("../components/ResetPassword.vue"),
  },
  {
    path: "/add-product",
    name: "add-product",
    component: () => import("../components/product/add_product.vue"),
  },
  {
    path: "/all-product",
    name: "all-product",
    component: () => import("../components/product/all_product.vue"),
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;