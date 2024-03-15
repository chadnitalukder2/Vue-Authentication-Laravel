<script setup>
  import { ref } from 'vue';
  import axios from 'axios';
  import { useRouter } from 'vue-router';

  const router = useRouter();
  const form = ref({
    name: '',
    email: '',
    password: '',
    password_confirmation: ''
  })
  const handleRegister = async () => {
    await axios.post('/register', {
      name:form.value.name,
      email:form.value.email,
      password:form.value.password,
      password_confirmation:form.value.password_confirmation
    });
    router.push("/");
  }
</script>

<template>
 
  <!-- <section class="bg-[#F4F7FF] py-20 lg:py-[50px]">
    <div class="container mx-auto">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4" style="    padding-left: 15rem;">
          <div
            class="relative mx-auto max-w-[525px] overflow-hidden rounded-lg bg-white py-16 px-10 text-center sm:px-12 md:px-[60px]"
          style="    margin-top: 60px;"
            >
            <div class="mb-10 text-center md:mb-16">Register Page</div>
            <form @submit.prevent="handleRegister">
              <div class="mb-6">
                <input
                  type="text"
                  placeholder="Name"
                  v-model="form.name"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none"
                />
                <div class="flex">
                  <span class="text-red-400 text-sm m-2 p-2"></span>
                </div>
              </div>
              <div class="mb-6">
                <input
                  type="email"
                  v-model="form.email"
                  placeholder="Email"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none"
                />
                <div class="flex">
                  <span class="text-red-400 text-sm m-2 p-2"></span>
                </div>
              </div>
              <div class="mb-6">
                <input
                  type="password"
                  v-model="form.password"
                  placeholder="Password"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none"
                />
                <div class="flex">
                  <span class="text-red-400 text-sm m-2 p-2"></span>
                </div>
              </div>
              <div class="mb-6">
                <input
                  type="password"
                  v-model="form.password_confirmation"
                  placeholder="Password Confirmation"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none"
                />
              </div>
              <div class="mb-10">
                <button
                  type="submit"
                  class="w-full px-4 py-3 bg-indigo-500 hover:bg-indigo-700 rounded-md text-white"
                >
                  Register
                </button>
              </div>
            </form>
            <p class="text-base text-[#adadad]">
              <router-link to="/login" class="text-primary hover:underline">
                Sign In
              </router-link>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section> -->
<div>
  
  <form @submit.prevent="handleRegister" method="post">
    <!-- <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div> -->

    <div class="container">

      <label for="uname"><b>Username</b></label>
      <input  v-model="form.name"  type="text" placeholder="Enter Username" name="uname" required>

      <label for="uname"><b>Email</b></label>
      <input  v-model="form.email"  type="text" placeholder="Enter Email" name="uname" required>

      <label for="uname"><b>Password</b></label>
      <input  v-model="form.password"  type="password" placeholder="Enter Password" name="uname" required>


      <label for="psw"><b> Password Confirmation</b></label>
      <input v-model="form.password_confirmation" type="password" placeholder="Enter Password Confirmation" name="psw" required>

      <button type="submit">Register</button>

    </div>
    <p class="sign">
      <router-link to="/login">
        Sign In
      </router-link>
    </p>
  </form>
   

 </div>
</template>



<style lang="scss" scoped>
form {
  border: 1px solid #f1f1f1;
  margin: 0 auto;
  /* height: 100vh; */
  margin-top: 100px;
  border-radius: 8px;
  padding: 20px;
  width: 50%;
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
input[type=password] {
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

.sign{
  width: 93%;
    background: #297e7e;
    padding: 10px;
    text-align: center;
    font-size: 18px;
    margin: 0px 0px 0px 13px;
    border-radius: 6px;
    a{
      text-decoration: none;
      color: #fff
    }
}
</style>

