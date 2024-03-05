<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";
const router = useRouter();
//---------------------------------------------------
const category = ref([]);
const brand = ref([]);
const form = ref([]);
const image = ([]);
//---------------------------------------------------
onMounted(async () => {
  getCategory();
  getBrand();
});
//---------------------------------------------------
const getCategory = async () => {
  let response = await axios.get("/api/get_category");
  category.value = response.data.category;
  // console.log("response", category.value);
};
//---------------------------------------------------
const getBrand = async () => {
  let response = await axios.get("/api/get_brand");
  brand.value = response.data.brand;
  // console.log("response", category.value);
};
//---------------------------------------------------
const handleFileChange = async (event) => {
    image.value = event.target.files[0];
}
//---------------------------------------------------
const addProduct = async () => {
    const formData = new FormData();
    formData.append('product_name', form.value.product_name);
    formData.append('product_price', form.value.product_price);
    formData.append('product_quantity', form.value.product_quantity);
    formData.append('category_id', form.value.category_id);
    formData.append('brand_id', form.value.brand_id);
    formData.append('product_details', form.value.product_details);
    formData.append('product_img', image.value);

    console.log({formData});
    let response = await axios.post('/api/add_products', formData);
    console.log('response', response);
}

</script>

<template>

</template>



<style lang="scss" scoped></style>
<section class="bg-[#F4F7FF] py-20 lg:py-[120px]">
    <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4" style="padding-left: 15rem">
                <div class="relative mx-auto max-w-[650px] overflow-hidden rounded-lg bg-white py-10 px-10 text-center sm:px-12 md:px-[60px]">
                    <div class="mb-3 text-center md:mb-10" style="
                background: rgb(49 46 129);
                color: white;
                padding: 10px;
                width: 30%;
                margin-left: 372px;
                border-radius: 5px;
              ">
                        Add Product Page
                    </div>
                    <form @submit.prevent="addProduct"  enctype="multipart/form-data">
                        <div class="mb-5">
                            <p style="text-align: left; padding-bottom: 10px">
                                Product Name:
                            </p>
                            <input v-model="form.product_name" type="text" placeholder="Product Name" class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none" />
                        </div>

                        <div class="mb-5">
                            <p style="text-align: left; padding-bottom: 10px">
                                Product Price:
                            </p>
                            <input v-model="form.product_price" type="number" placeholder="Product Price" class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none" />
                        </div>

                        <div class="mb-5">
                            <p style="text-align: left; padding-bottom: 10px">
                                Product Quantity:
                            </p>
                            <input v-model="form.product_quantity" type="number" placeholder="Product Quantity" class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none" />
                        </div>

                        <div class="mb-5">
                            <p style="text-align: left; padding-bottom: 10px">
                                Product Brand Name:
                            </p>
                            <select v-model="form.brand_id" class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none">
                                <option disabled>Select brand</option>
                                <option v-for="item in brand" :key="item.id" :value="item.id">
                                    {{ item.brand_name }}
                                </option>
                            </select>
                        </div>


                        <div class="mb-5">
                            <p style="text-align: left; padding-bottom: 10px">
                                 Category Name:
                            </p>
                            <select v-model="form.category_id" class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none">
                                <option disabled >Select category</option>
                                <option v-for="item in category" :key="item.id" :value="item.id">
                                    {{ item.category_name }}
                                </option>
                            </select>
                        </div>

                        <div class="mb-5">
                            <p style="text-align: left; padding-bottom: 10px">
                                Product Image:
                            </p>
                            <input @change="handleFileChange"  type="file" placeholder="Product Image" class="border-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none" />
                        </div>
              
                        <div class="mb-5">
                            <p style="text-align: left; padding-bottom: 10px">
                                Product Details:
                            </p>
                            <textarea v-model="form.product_details" type="text" placeholder="" style="text-align: left;" class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none">
                               bccnjn hbdnund
                            </textarea>
                        </div>

                        <div class="mb-5">
                            <button type="submit" class="w-full px-4 py-3 bg-indigo-500 hover:bg-indigo-700 rounded-md text-white">
                                Add Product
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>