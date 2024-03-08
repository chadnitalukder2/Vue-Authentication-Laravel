<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";
const router = useRouter();
//---------------------------------------------------
const brand = ref([]);
let showError = ref(false);
const brandInput = ref([]);
const image = [];
//---------------------------------------------------
onMounted(async () => {
  getBrand();
});

//---------------------------------------------------
const getBrand = async () => {
  let response = await axios.get("/api/get_brand");
  brand.value = response.data.brand;
  // console.log("response", category.value);
};
//---------------------------------------------------
const deleteBrand = (id) => {
    axios.get(`/api/delete_brand/${id}`).then( () => {
      getBrand();
    })
}
//---------------------------------------------------
const getToken = async () => {
  await axios.get("sanctum/csrf-cookie");
};

//---------------------------------------------------
</script>

<template>
  <div>
    <section class="bg-[#F4F7FF] py-20 lg:py-[120px]">
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4" style="padding-left: 15rem">
            <div
              class="relative mx-auto max-w-[850px] overflow-hidden rounded-lg bg-white pt-5 px-10 text-center sm:px-12 md:px-[0px]"
            >
              <!-- <div class="search">
                <input v-model="brandInput.brand_name" placeholder="add brand name" class="searchbox" />
                <span class="btn" @click="addBrand()">Add Brand</span>
                <p v-if="showError" style="color: red;"> Brand name is required </p>
              </div> -->

              

               <div style="
                  text-align: right;
                  padding-bottom: 20px;
                  padding-right: 20px;
                ">
                            <button style="
                    border-radius: 5px;
                    padding: 10px;
                    border: 1px solid #ddd;
                    color: white;
                    background: rgb(49 46 129 / var(--tw-bg-opacity));
                  ">
                                <router-link :to="{ name: 'add-brand' }">
                                    Add brand
                                </router-link>
                            </button>
                        </div>

              <table id="customers">
                <tr>
                  <th># ID</th>
                  <th>Brand Name</th>
                  <th>Brand Image</th>
                  <th>Action</th>
                </tr> 
                <tbody v-for="item in brand" :key="item.id">
                  <tr >
                    <td># {{ item.id }}</td>
                    <td>{{ item.brand_name }}</td>
                    <td>
                      <img :src="item.brand_img" style="width: 70px; height: 50px;">
                    </td>
                    <td @click="deleteBrand(item.id)" style="color: red; cursor: pointer;" >
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

<style lang="scss" scoped>

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
  background-color: #D1EAE4;
  color: #444;
}
</style>
