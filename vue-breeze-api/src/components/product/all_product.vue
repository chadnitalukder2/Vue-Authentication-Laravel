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

const deleteProduct = (id) => {
    axios.get(`/api/delete_product/${id}`).then( () => {
      getProduct();
    })
}


</script>


<template>
  <div>
       <div class="product">

          <div class="btn">
            <button  >
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
          
                <td @click="deleteProduct(item.id)" style="color: red; cursor: pointer">
                  <span>Delete</span>
                </td>
              </tr>
            </tbody>
          </table>

        </div>
           
  </div>
</template>


<style lang="scss" scoped>
.product {
  width: 109%;
  padding-left: 5rem;
  padding-top: 50px;

  .btn{
    text-align: right;
    padding-bottom: 25px;
    button{
        padding: 10px 20px;
         border: 1px solid #ddd;
         background: #d1eae4;
         border-radius: 6px;
         cursor: pointer;
         a{
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            color: #444;
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
  background-color: #D1EAE4;
  color: #444;
}
</style>
