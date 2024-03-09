<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";
const router = useRouter();
//---------------------------------------------------
const category = ref([]);
//---------------------------------------------------
onMounted(async () => {
  getCategory();
});
//---------------------------------------------------

//---------------------------------------------------
const getCategory = async () => {
  let response = await axios.get("/api/get_category");
  category.value = response.data.category;
  // console.log("response", category.value);
};
//---------------------------------------------------
const deleteCategory = (id) => {
  axios.get(`/api/delete_category/${id}`).then(() => {
    getCategory();
  });
};
//---------------------------------------------------
const getToken = async () => {
  await axios.get("sanctum/csrf-cookie");
};

//---------------------------------------------------
</script>

<template>
  <div>
    <div class="category">
      <div class="btn">
        <button  >
          <router-link :to="{ name: 'add-category' }">
            Add Category
          </router-link>
        </button>
      </div>
      <table id="customers">
        <tr>
          <th># ID</th>
          <th>Category Name</th>
          <th>Category Image</th>
          <th>Action</th>
        </tr>
        <tbody v-for="item in category" :key="item.id">
          <tr>
            <td># {{ item.id }}</td>
            <td>
              <img :src="item.category_img" style="width: 70px; height: 60px" />
            </td>
            <td>{{ item.category_name }}</td>
            <td
              @click="deleteCategory(item.id)"
              style="color: red; cursor: pointer"
            >
              <span>Delete</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<style lang="scss" scoped>
.category {
  width: 109%;
  padding-left: 15rem;
  padding-top: 50px;

  .btn{
    text-align: right;
    padding-bottom: 25px;
    button{
        padding: 10px 20px;
         border: 1px solid #ddd;
         background: #189877;
         border-radius: 6px;
         cursor: pointer;
         a{
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            color: #fff;
         }
    
    }
  }
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
  text-align: center;
}

#customers tr:nth-child(even) {
  background-color: #f2f2f2;
}

#customers th {
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: center;
  background-color: #d1eae4;
  color: #444;
}
</style>
