<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";
const router = useRouter();
import { useRoute } from 'vue-router'
const route = useRoute()

//----------------------------------------------------
const orderItem = ref([]);
//---------------------------------------------------
onMounted(async () => {
    getOrderItem();
});
//----------------------------

const getOrderItem = async () => {
    let response = await axios.get("/api/get_OrderItem");
    orderItem.value = response.data.orderItem;
    console.log("response", orderItem.value);
};
//-------------------------------------
</script>

<template>
  <div class="container"> 
    <div class="table" style="padding-bottom: 85px">
      <table>
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>Action</th>
        </tr>
        
        <tr v-for="item in orderItem" :key="item.id">
          <td> 
            <img :src="item.product.product_img" style="width: 70px; height: 60px" >
          </td>
          <td>{{ item.product.product_name }}</td>
          <td>{{ item.product.product_price }}</td>
          <td>
            <input type="number" v-model="item.quantity">
          </td>
          <td>${{ item.line_total }}</td>
          <td><i class="fa-solid fa-xmark" style="    background: #D1EAE4; padding: 5px 8px;"></i></td>
        </tr>

    
      </table>
    </div>

    <div class="cart">
    <div class="cart_total">
      <h3>Cart Totals</h3>
      <p class="d-flex">
        <span>Subtotal</span>
        <span>$20.60</span>
      </p>
      <p class="d-flex">
        <span>Delivery</span>
        <span>$0.00</span>
      </p>
      <p>
        <span>Discount</span>
        <span>$3.00</span>
      </p>
      <hr style="background: rgba(255, 255, 255, 0.1)" />
      <p>
        <span>TOTAL</span>
        <span style="color: #000000; font-weight: 600">$17.60</span>
      </p>
    </div>
    <p class="check_out"><a href="">Proceed to Checkout</a></p>
  </div>
  </div>
</template>

<style lang="scss" scoped>
.container {
  width: 100%;
  padding: 80px 100px;
  text-align: center;
}
.cart{
 
}
.cart_total {
  padding: 20px;
  width: 30%;
  text-align: center;
  border: 1px solid rgba(0, 0, 0, 0.05);
  h3 {
    font-size: 18px;
    text-align: left;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 20px;
    font-weight: 700;
  }
  p {
    display: flex;
    justify-content: space-between;
    span {
      font-family: "Open Sans", Arial, sans-serif;
      font-size: 15px;
      line-height: 1.8;
      font-weight: 400;
      color: gray;
    }
  }
  hr {
    background: rgba(255, 255, 255, 0.1);
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
  }
}
.check_out{
        border-radius: 30px;
        width: 30%;
        background: #D1EAE4;
        font-size: 18px;
        padding: 16px;
        border: 2px solid #D1EAE4;
    a{
        text-decoration: none;
        color: black;
        
    }
    &:hover{
            transition: all 0.2s ease;
            background: white;
            border: 2px solid #D1EAE4;
        }
   
}

table {
  border-collapse: collapse;
  width: 100%;
}
th {
  background: #d1eae4;
  padding: 20px 10px !important;
  border: 1px solid transparent;
  font-size: 22px;
}
th,
td {
  padding: 15px;
  text-align: center;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}
td{
  input{
    width: 40%;
    padding: 15px 10px;
    text-align: center;
    border: 1px solid rgba(0, 0, 0, 0.05);
    &:focus-visible{
      outline: none;
      border: 1px solid rgba(0, 0, 0, 0.05) !important;
    }
  }
}

</style>
