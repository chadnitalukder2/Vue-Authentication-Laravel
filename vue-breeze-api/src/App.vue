<script setup>
import Nav from './components/Nav.vue';
import sitebar from './components/sidebar.vue';

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
  <main class="min-h-full bg-gray-200 flex">
        <!--    Sidebar-->
        <sitebar v-if="user"></sitebar>
    
        <div class="flex-1">
          <main class="p-0">
            <router-view></router-view>
          </main>
          <!--      Content-->
        </div>
  </main>
</div>

</template>

<style scoped>

</style>
