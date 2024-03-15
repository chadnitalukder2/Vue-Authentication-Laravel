<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";
const router = useRouter();

let showError = ref(false);
const categoryInput = ref([]);
const image = [];

const handleFileChange = async (event) => {
    image.value = event.target.files[0];
};

//---------------------------------------------------
const addCategory = async () => {
    showError.value = false;
    if (!categoryInput.value.category_name) {
        showError.value = true;
        // console.log("hi");
        return;
    }

    // let data = {
    //     category_name: categoryInput.value.category_name,
    // };
    const formData = new FormData();
    formData.append("category_name", categoryInput.value.category_name);
    formData.append("category_img", image.value);

    await axios.post("/api/add_category", formData).then((response) => {
        if (response.status == 200) {
            router.push('/all-category');
            categoryInput.value = [];
            image.value = [];
        }
    });
};

</script>



<template>
  <div>
    <!-- <form @submit.prevent="addCategory" enctype="multipart/form-data">
      <div class="mb-5" style="padding: 0px 20px">
        <p style="text-align: left; padding-bottom: 10px">Category Name:</p>
        <input
          v-model="categoryInput.category_name"
          type="text"
          placeholder="category name"
          class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none"
        />
        <p v-if="showError" style="color: red; text-align: left">
          Category name is required
        </p>
      </div>
      <div class="mb-5" style="padding: 0px 20px">
        <p style="text-align: left; padding-bottom: 10px">Category Image:</p>
        <input
          @change="handleFileChange"
          type="file"
          placeholder="Product Image"
          class="border-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none"
        />
      </div>
      <div class="mb-5" style="text-align: left; padding: 20px">
        <button
          type="submit"
          class="px-4 py-3 bg-indigo-500 hover:bg-indigo-700 rounded-md text-white"
        >
          Add Category
        </button>
      </div>
    </form> -->
 
    <form @submit.prevent="addCategory" enctype="multipart/form-data">

        <div class="container">
          <label for="uname"><b>Category Name</b></label>
          <input  v-model="categoryInput.category_name"  type="text" placeholder="category name " name="uname" required>

          <label for="psw"><b>Category Image</b></label>
          <input  @change="handleFileChange" type="file" placeholder="category Image" name="psw" required>

          <button type="submit">Add Category</button>

        </div>

    </form> <form @submit.prevent="addCategory" enctype="multipart/form-data">

        <div class="container">
          <label for="uname"><b>Category Name</b></label>
          <input  v-model="categoryInput.category_name"  type="text" placeholder="category name " name="uname" required>

          <label for="psw"><b>Category Image</b></label>
          <input  @change="handleFileChange" type="file" placeholder="category Image" name="psw" required>

          <button type="submit">Add Category</button>

        </div>

    </form>
 
 </div>
</template>


<style lang="scss" scoped>
form {
  border: 1px solid #f1f1f1;
  margin-left: 28%;
  width: 80%;
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
input[type=file] {
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
