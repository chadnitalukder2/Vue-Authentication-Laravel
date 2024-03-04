<script setup>
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
  <div>
    <section class="bg-[#F4F7FF] py-20 lg:py-[120px]">
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4" style="padding-left: 15rem">
            <div
              class="relative mx-auto max-w-[950px] overflow-hidden rounded-lg bg-white pt-5 px-10 text-center sm:px-12 md:px-[0px]"
            >
              <div style="text-align: right; padding-bottom: 20px; padding-right: 20px;">
                <button style="border-radius: 5px; padding: 10px; border: 1px solid #ddd; color: white; background:  rgb(49 46 129 / var(--tw-bg-opacity));" >
                  <router-link :to="{ name: 'add-product' }" >
                    Add Product
                  </router-link>
                  
                </button>
              </div>
              
              <table id="customers">
       
                <tr>
                  <th># ID</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Category Name</th>
                  <th>Brand Name</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                <tbody v-for="item in products" :key="item.id">
                  <tr>
                    <td style="color: blue;"><router-link :to="{ name: 'edit-product', params: { id: item.id }}" ># {{ item.id }} </router-link></td>
                    <td>{{ item.product_name }}</td>
                    <td>{{ item.product_price }}</td>
                    <td>{{ item.product_quantity }}</td>
                    <td>{{ item.category.category_name }}</td>
                    <td>{{ item.brand.brand_name }}</td>
                    <td>
                      <img :src="item.product_img" style="width: 70px; height: 50px;">
                    </td>
              
                    <td style="color: red; cursor: pointer">
                      <span>Delete</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>


<style scoped>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td,
#customers th {
  border: 1px solid #ddd;
  padding: 6px 8px;
  text-align: left;
}

#customers tr:nth-child(even) {
  background-color: #f2f2f2;
}

#customers th {
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: left;
  background-color: rgb(49 46 129 / var(--tw-bg-opacity));
  color: white;
}
</style>
