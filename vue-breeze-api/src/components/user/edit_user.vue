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
<section class="bg-[#F4F7FF] py-20 lg:py-[120px]">
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
</section>
</template>



<style lang="scss" scoped></style>
