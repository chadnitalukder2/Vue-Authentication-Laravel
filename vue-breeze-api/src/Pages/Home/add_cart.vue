<script setup>

</script>

<template>
    <div class="container">
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
                <td>$100</td>
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
</template>


<style lang="scss" scoped>
.container{
    width: 100%;
    padding: 80px 100px;
    text-align: center;
}

table {
  border-collapse: collapse;
  width: 100%;
}
th{
    background: #D1EAE4;
    padding: 20px 10px !important;
    border: 1px solid transparent ;
    font-size: 22px;
}
th, td {
  padding: 15px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}
</style>