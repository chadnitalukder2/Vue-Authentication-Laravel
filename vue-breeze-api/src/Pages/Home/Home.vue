
<script setup>
import Hero from './Hero.vue'
import Card from "../../Pages/Admin/product/Card.vue";
</script>

<template>
 <!-- #fdebcb -->
 <div class="container" style="width: 100%;">
    <Hero />
    <h4 class="product-title">All PRODUCTS</h4>
    <div class="product-wrapper">
        <Card />
        <Card />
        <Card />
        <Card />
        <Card />
        <Card />
    </div>
 </div>
    
</template>

<style lang="scss" scoped>
.product-title {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 20px;
    margin: 0 auto;
    text-align: center;
    padding: 10px;
    margin-top: 28px;
    border-bottom: 2px solid #009688;
    width: 170px;
}
.product-wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding: 40px;
}

</style>