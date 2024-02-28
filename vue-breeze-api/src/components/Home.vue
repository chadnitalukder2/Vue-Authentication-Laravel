<template>
    <div>

    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const user = ref();
onMounted (async () => {
    const data = await axios.get('/api/user');
    user.value = data.data;
    // console.log(user.value);
})

</script>

<style lang="scss" scoped>

</style>