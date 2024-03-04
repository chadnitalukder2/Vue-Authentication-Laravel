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
    meta: { requiresAuth: true },
  },
  {
    path: "/all-product",
    name: "all-product",
    component: () => import("../components/product/all_product.vue"),
    meta: { requiresAuth: true },
  },
  {
    path: '/edit-product/:id',
    name : 'edit-product',
    component: () => import("../components/product/edit_product.vue"),
    meta: { requiresAuth: true },
  },
  {
    path: "/all-category",
    name: "all-category",
    component: () => import("../components/category/all_category.vue"),
    meta: { requiresAuth: true },
  },
  {
    path: "/all-brand",
    name: "all-brand",
    component: () => import("../components/brand/all_brand.vue"),
    meta: { requiresAuth: true },
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

router.beforeEach((to, from, next) => {
  // Check if the route requires authentication
  if (to.meta.requiresAuth) {
    // const currentUser = getCurrentUser(); // Implement a function to get the current user
    console.log(localStorage.getItem('email'));

    if (localStorage.getItem('email')) {
      // User is authenticated, allow access
      next();
    } else {
      // User is not authenticated, redirect to login page
      next('/login');
    }
  } else {
    // No authentication required, proceed to the route
    next();
  }
});


export default router;