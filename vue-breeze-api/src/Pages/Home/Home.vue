
<script setup>
import Hero from './Hero.vue'
import Card from "./Product_card.vue";
import Category_card from './Category_card.vue';

import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";
const router = useRouter();

const form =ref([]);
const products = ref([]);

onMounted(async () => {
  getProduct();
});

const getProduct = async () => {
  let response = await axios.get("/api/get_product");
  products.value = response.data.products;
  console.log("response", products.value);
};
</script>

<template>
 <!-- #fdebcb -->
 <div class="container" style="width: 100%;">
    <Hero />
    <h4 class="product-title"> CATEGORY </h4>
    <div class="product-wrapper">
        <Category_card />
        <Category_card />
        <Category_card />
        <Category_card />
        <Category_card />
       
    </div>

    <h4 class="product-title">All PRODUCTS</h4>
    <div class="product-wrapper">

        <Card  v-for="product in products" :key="product.id" :product="product"/>
      
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