<template>
    <div class="side-bar-wrapper">
        <router-link class="active" :to="{ name: 'all-category' }">All Category</router-link>
        <router-link :to="{ name: 'all-product' }">All Product</router-link>
        <router-link :to="{ name: 'all-brand' }">All Brand</router-link>
        <router-link :to="{ name: 'all-user' }">All User</router-link>
    </div>
</template>

<script setup>
// import { defineProps } from 'vue'

// const props = defineProps({
//   user: String
// })

</script>

<style lang="scss" scoped>

.side-bar-wrapper {
    display: flex;
    flex-direction: column;
    width: 160px;
    align-items: center;
    gap: 10px;
    border-right: 1px solid #EAECF0;
    height: 100vh;
    background: #D1EAE4;
    padding: 60px 0px;
    a {
        text-decoration: none;
        font-weight: 500;
        font-size: 18px;
        padding: 10px 15px;
        width: calc(100% - 30px);
        color: #444;
        &.active {
            background: #189877;
            color: #fff;
        }
    }
}


</style>