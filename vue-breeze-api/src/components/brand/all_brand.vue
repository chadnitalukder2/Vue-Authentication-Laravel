<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";
const router = useRouter();
//---------------------------------------------------
const brand = ref([]);
let showError = ref(false);
const brandInput = ref([]);
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
const addBrand = async () => {
        showError.value = false;
        if (!brandInput.value.brand_name ) {
            showError.value = true;
            // console.log("hi");
            return;
        }
     
        let data = {
            brand_name : brandInput.value.brand_name,
        }
        await axios.post("/api/add_brand",data ).then( () => {
          getBrand();
          brandInput.value = []
        })
    //   console.log('response', response.data);
    
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
              <div class="search">
                <input v-model="brandInput.brand_name" placeholder="add brand name" class="searchbox" />
                <span class="btn" @click="addBrand()">Add Brand</span>
                <p v-if="showError" style="color: red;"> Brand name is required </p>
              </div>

              <table id="customers">
                <tr>
                  <th># ID</th>
                  <th>Brand Name</th>
                  <th>Action</th>
                </tr> 
                <tbody v-for="item in brand" :key="item.id">
                  <tr >
                    <td># {{ item.id }}</td>
                    <td>{{ item.brand_name }}</td>
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

<style scoped>
.search {
  text-align: left;
  padding: 10px 20px 30px 20px;
}
.btn {
  border: 1px solid #ddd;
  padding: 10px;
  cursor: pointer;
}
.searchbox {
  border: 1px solid #ddd;
  padding: 9px;
  width: 85%;
  border-radius: 5px 2px 0px 5px;
}
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
