<script setup>
import Nav from './components/Nav.vue';

import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";
const router = useRouter();

const user = ref([]);

onMounted(async () => {
  getUser();
});

const getUser = async () => {
 user.value = localStorage.getItem('email') ;
}

</script>

<template>
  
<div>

  <Nav :user="user"></Nav>
  <main style=" width: 100%;">
      <router-view></router-view>
  </main>
</div>

</template>

<style scoped>

</style>
