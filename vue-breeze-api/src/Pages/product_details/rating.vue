<template>
    <div>
        <span>
            <label v-for="rating in 5" name="rating" :key="rating.id" :class=" props.rating >= rating ? 'active' : ''" value="1">★</label>
        </span>
    </div>
</template>

<script setup>
import {
    defineProps
} from "vue";
const props = defineProps(["rating"]);
</script>

<style lang="scss" scoped>
  span{
        label{
            font-size: 18px;
            color:  gray;
        }
        .active{
            color: #f1c40f;
        }
    }

</style>