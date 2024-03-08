<script setup>
import { ref } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";

const router = useRouter();

const form = ref({
  email: "",
  password: "",
});

const getToken = async () => {
  await axios.get("sanctum/csrf-cookie");
}

const handleLogin = async () => {
  await getToken();
  let response = await axios.post("/login", {
    email: form.value.email,
    password: form.value.password,
  }).then((res) => {
    localStorage.setItem("password", form.value.password);
    localStorage.setItem("email", form.value.email);
    window.location.reload();
  })
};
</script>

<template>
  <!-- <section class="bg-[#F4F7FF] py-20 lg:py-[120px]">
    <div class="container mx-auto">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4" style="    padding-left: 15rem;">
          <div
            class="relative mx-auto max-w-[525px] overflow-hidden rounded-lg bg-white py-16 px-10 text-center sm:px-12 md:px-[60px]"
          >
            <div class="mb-10 text-center md:mb-16">Login Page</div>
            <form @submit.prevent="handleLogin">
             
              <div class="mb-6">
                <input
                  type="email"
                  v-model="form.email"
                  placeholder="Email"
                  class="border-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none"
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
                  class="border-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none"
                />
                <div class="flex">
                  <span class="text-red-400 text-sm m-2 p-2"></span>
                </div>
              </div>
              <div class="mb-10">
                <button
                  type="submit"
                  class="w-full px-4 py-3 bg-indigo-500 hover:bg-indigo-700 rounded-md text-white"
                >
                  Login
                </button>
              </div>
            </form>
            <router-link
              to="/forgot-password"
              class="mb-2 inline-block text-base text-[#adadad] hover:text-primary hover:underline"
            >
              Forgot Password?
            </router-link>
            <p class="text-base text-[#adadad]">
              Not a member yet?
              <router-link to="/register" class="text-primary hover:underline">
                Sign Up
              </router-link>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section> -->


  <form @submit.prevent="handleLogin" method="post">
    <!-- <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div> -->

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input  v-model="form.email"  type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input v-model="form.password" type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit">Login</button>

    </div>

    <div class="form-footer" style="background-color:#f1f1f1">
      <router-link to="/forgot-password" class="">Forgot Password?</router-link>
      <p class="text-base text-[#adadad]"> Not a member yet?
          <router-link to="/register" class=""> Sign Up </router-link>
      </p>
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
</style>
