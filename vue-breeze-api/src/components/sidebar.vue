<template>
    <div>
        <div class="w-[200px] h-full transition-all bg-indigo-900 text-white py-4 px-2 display-flex" style="position: fixed;    padding-top: 6rem;">
        <router-link :to="{ name: 'all-category' }" class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
            <span class="mr-2 text-gray-300">
                <!-- <HomeIcon class="w-5"/> -->
            </span>
            <span class="block rounded py-2 pr-4 pl-3 text-white"> Category </span>
        </router-link>
        <router-link :to="{ name: 'all-brand' }" class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
            <span class="mr-2 text-gray-300">
                <!-- <HomeIcon class="w-5"/> -->
            </span>
            <span class="block rounded py-2 pr-4 pl-3 text-white"> Brand</span>
        </router-link>
        
        <router-link :to="{ name: 'all-product' }" class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
            <span class="mr-2 text-gray-300">
                <!-- <HomeIcon class="w-5"/> -->
            </span>
            <span class="block rounded py-2 pr-4 pl-3 text-white"> Product </span>
        </router-link>
      
    </div>
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>

</style>