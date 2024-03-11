<script setup></script>

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
        <tr>
          <td>Peter</td>
          <td>Griffin</td>
          <td>$100</td>
          <td>Peter</td>
          <td>Griffin</td>
          <td><i class="fa-solid fa-xmark" style="    background: #D1EAE4; padding: 5px 8px;"></i></td>
        </tr>
        <tr>
          <td>Lois</td>
          <td>Griffin</td>
          <td>$150</td>
          <td>Peter</td>
          <td>Griffin</td>
          <td>$100</td>
        </tr>
        <tr>
          <td>Joe</td>
          <td>Swanson</td>
          <td>$300</td>
          <td>Peter</td>
          <td>Griffin</td>
          <td>$100</td>
        </tr>
        <tr>
          <td>Cleveland</td>
          <td>Brown</td>
          <td>$250</td>
          <td>Peter</td>
          <td>Griffin</td>
          <td>$100</td>
        </tr>
      </table>
    </div>

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
   
  </div>
</template>

<style lang="scss" scoped>
.container {
  width: 100%;
  padding: 80px 100px;
  text-align: center;
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
</style>
