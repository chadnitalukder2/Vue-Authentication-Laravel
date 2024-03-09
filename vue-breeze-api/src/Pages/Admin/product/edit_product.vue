<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";
const router = useRouter();
import { useRoute } from 'vue-router'
const route = useRoute()
//---------------------------------------------------
const category = ref({
    category_name: ''
});
const brand = ref({
    brand_name: ''
});
const form = ref({
    product_name: '',
    product_price: '',
    product_quantity: '',
    brand_id : '',
    category_id : '',
    product_details: '',
});
const image = ref(null);
//---------------------------------------------------
onMounted(async () => {
  getCategory();
  getBrand();
  getProduct();
});


//---------------------------------------------------
const getProduct = async () => {
    const id = route.params.id;
    // console.log('routhiuhuunje', id);
 let response = await axios.get(`/api/edit_product/${id}`);
    form.value = response.data.product
    // console.log('responseydyhfb', response.data.product);
}
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
const updateProduct = async () => {
    let id = route.params.id;
    const formData = new FormData();
    formData.append('product_name', form.value.product_name);
    formData.append('product_price', form.value.product_price);
    formData.append('product_quantity', form.value.product_quantity);
    formData.append('category_id', form.value.category_id);
    formData.append('brand_id', form.value.brand_id);
    formData.append('product_details', form.value.product_details);
    // formData.append('product_img', image.value);
    // let formData = {
    //     'product_name': form.value.product_name,
    //     'product_price': form.value.product_price,
    //     'product_quantity': form.value.product_quantity,
    //     'category_id': form.value.category_id,
    //     'brand_id': form.value.brand_id,
    //     'product_details': form.value.product_details,
    // }

    console.log({formData});
        let response = await axios.post(`/api/update_product/${id}`, formData).then( () => {
           router.push('/all-product');
        });

}
</script>

<template>
<!-- <section class="bg-[#F4F7FF] py-20 lg:py-[120px]">
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
                        Edit Product Page
                    </div>
                    <form @submit.prevent="updateProduct"  enctype="multipart/form-data">
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
                                Update product
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> -->

<div>
    <form @submit.prevent="updateProduct" enctype="multipart/form-data">

<div class="container">
<label for="uname"><b>Product Name</b></label>
<input  v-model="form.product_name" type="text" placeholder="Product Name" name="uname" required>

<label for="uname"><b>Product Price</b></label>
<input v-model="form.product_price" type="number" placeholder="Product Price" name="uname" required>

<label for="uname"><b>Product Quantity</b></label>
<input  v-model="form.product_quantity" type="number" placeholder="Product Quantity" name="uname" required>

<div>
<label for="uname"><b>Catagory Name</b></label>
    <select v-model="form.category_id" >
        <option disabled >Select category</option>
        <option v-for="item in category" :key="item.id" :value="item.id">
            {{ item.category_name }}
        </option>
    </select>
</div>

<div>
    <label for="uname"><b>Brand Name</b></label>
    <select v-model="form.brand_id"   >
        <option disabled>Select brand</option>
        <option v-for="item in brand" :key="item.id" :value="item.id">
            {{ item.brand_name }}
        </option>
    </select>
</div>

<label for="psw"><b>Product Image</b></label>
<input  @change="handleFileChange"  type="file" placeholder="Product Image" name="psw" required>

<label for="uname"><b>Category Name</b></label>
<textarea v-model="form.product_details" type="text" placeholder="" >
                bccnjn hbdnund
</textarea><br><br>
<button type="submit">Upedat Product</button>

</div>

</form> 
</div>
</template>


<style lang="scss" scoped>
form {
  border: 1px solid #f1f1f1;
  margin-left: 28%;
  width: 55%;
  margin-top: 100px;
  border-radius: 8px;
  padding: 20px;
}

.form-footer {
    background-color: rgb(241, 241, 241);
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-radius: 8px;
    padding: 4px 16px;
    margin: 0px 12px;
}

input[type=text],
input[type=password],
input[type=file],
input[type=number],
select,textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 8px;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 8px;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }

  .cancelbtn {
    width: 100%;
  }
}
</style>
