<template>
    <div>
          
              <div class="card_categories">
        
               <div class="card-categories-image">
                  <img class="image" :src="props.brand.brand_img" alt="Blouses Shirts">
               </div>
              <div class="card_title">
                <h4>{{ props.brand.brand_name  }}</h4>
                <span >
                  <a href="#">  READ MORE </a>
                </span>
              </div>
          
          </div>
          
        
    </div>
</template>

<script setup>
import {
    defineProps
} from "vue";

const props = defineProps(["brand"]);
</script>

<style lang="scss" scoped>
.card_categories{
  width: 140px;
  border-radius: 6px;
  padding: 12px;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
}
.card_title{
  text-align: center;
  h4{
    color: #212121;
  }
}
.card-categories {
    width: 12.5%;
    height: 148.5px;
    border-right: 1px solid #e2e2e2;
    border-bottom: 1px solid #e2e2e2;
    background-color: #fff;
}
a{
  font-size: 12px;
    color: #009688;
}
.card-categories-image {
    margin: 0 auto;
    width: 80px;
    height: 80px;
}
.card-categories-image .image {
    width: 100%;
    height: 100%;
    border-radius: 50%;
}
.card-categories-name {
    text-align: center;
    margin-top: 10px;
}


</style>