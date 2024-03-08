<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";
const router = useRouter();

let showError = ref(false);
const brandInput = ref([]);
const image = [];

//---------------------------------------------------
const handleFileChange = async (event) => {
    image.value = event.target.files[0];
};
//---------------------------------------------------
const addBrand = async () => {
        showError.value = false;
        if (!brandInput.value.brand_name ) {
            showError.value = true;
            // console.log("hi");
            return;
        }
     
        // let data = {
        //     brand_name : brandInput.value.brand_name,
        // }
        const formData = new FormData();
        formData.append("brand_name", brandInput.value.brand_name);
        formData.append("brand_img", image.value);

        await axios.post("/api/add_brand",formData ).then( () => {
           router.push('/all-brand');
          brandInput.value = []
          image.value = []
        })
    //   console.log('response', response.data);
    
    };


</script>



<template>
<div>
    <form @submit.prevent="addBrand" enctype="multipart/form-data">
        <div class="mb-5" style="padding: 0px 20px">
            <p style="text-align: left; padding-bottom: 10px">Brand Name:</p>
            <input v-model="brandInput.brand_name" type="text" placeholder="brand name" class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none" />
            <p v-if="showError" style="color: red; text-align: left">
                Brand name is required
            </p>
        </div>
        <div class="mb-5" style="padding: 0px 20px">
            <p style="text-align: left; padding-bottom: 10px">Brand Image:</p>
            <input @change="handleFileChange" type="file" placeholder="Product Image" class="border-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none" />
        </div>
        <div class="mb-5" style="text-align: left; padding: 20px">
            <button type="submit" class="px-4 py-3 bg-indigo-500 hover:bg-indigo-700 rounded-md text-white">
                Add Brand
            </button>
        </div>
    </form>
</div>
</template>


<style lang="scss" scoped></style>
