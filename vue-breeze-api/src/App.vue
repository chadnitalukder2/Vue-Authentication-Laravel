<script setup>
import Nav from './components/Nav.vue';
import sitebar from './components/sidebar.vue';
</script>

<template>
<div>
  <Nav ></Nav>
  <main class="min-h-full bg-gray-200 flex">
        <!--    Sidebar-->
        <sitebar/>
    
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
