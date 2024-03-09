<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";
const router = useRouter();
import { useRoute } from 'vue-router'
const route = useRoute()
//---------------------------------------------------
const form = ref([]);
//---------------------------------------------------
onMounted(async () => {
  editUser();
});


//---------------------------------------------------
const editUser = async () => {
    const id = route.params.id;
    console.log('routhiuhuunje', id);
 let response = await axios.get(`/api/edit_user/${id}`);
    form.value = response.data.user
    // console.log('responseydyhfb', response.data.product);
}

//---------------------------------------------------
const updateUser = async () => {
    let id = route.params.id;
    let data = {
        name  : form.value.name ,
        email : form.value.email,
     }
   
    // console.log({formData});
        let response = await axios.post(`/api/update_user/${id}`, data);
        // console.log('Response:', response);
        router.push('/all-user');

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
                        Edit User Page
                    </div>
                    <form @submit.prevent="updateUser">
                        
                        <div class="mb-5">
                            <p style="text-align: left; padding-bottom: 10px">
                                User Name:
                            </p>
                            <input v-model="form.name" type="text" placeholder="user name" class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none" />
                        </div>

                        <div class="mb-5">
                            <p style="text-align: left; padding-bottom: 10px">
                                User Email:
                            </p>
                            <input v-model="form.email" type="email" placeholder="user email" class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none" />
                        </div>

                        <div class="mb-5">
                            <button type="submit" class="w-full px-4 py-3 bg-indigo-500 hover:bg-indigo-700 rounded-md text-white">
                                Update User
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> -->

<form @submit.prevent="updateUser" method="post">
    
    <div class="container">
      <label for="uname"><b>User Name</b></label>
      <input  v-model="form.name" type="text" placeholder="user name" name="uname" required>

      <label for="psw"><b>User Name</b></label>
      <input v-model="form.email" type="email" placeholder="user email" name="psw" required>

      <button type="submit">Update User</button>

    </div>
  </form>



</template>



<style lang="scss" scoped>
form {
  border: 1px solid #f1f1f1;
  margin: 0 auto;
  /* height: 100vh; */
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
input[type=password],input[type=email] {
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
