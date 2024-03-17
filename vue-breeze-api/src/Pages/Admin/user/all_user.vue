<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";
const router = useRouter();
//---------------------------------------------------
const user = ref([]);
//---------------------------------------------------
onMounted(async () => {
  getUser();
});
//---------------------------------------------------
const getUser = async () => {
  let response = await axios.get("/api/get_user");
  user.value = response.data.user;
  // console.log("response", response.data.user);
};
//---------------------------------------------------
const deleteUser = (id) => {
    axios.get(`/api/delete_user/${id}`).then( () => {
      getUser();
    })
}

//---------------------------------------------------

//---------------------------------------------------
</script>

<template>
  <div>
        <div class="user">
          <table id="customers">
            <tr>
              <th># ID</th>
              <th>User Name</th>
              <th>User Email</th>
              <th>Action</th>
            </tr> 
            <tbody v-for="item in user" :key="item.id">
              <tr >
                <td style="color: blue;"><router-link :to="{ name: 'edit-user', params: { id: item.id }}" ># {{ item.id }} </router-link></td>
                <td>{{ item.name }}</td>
                <td>{{ item.email  }}</td>
                <td @click="deleteUser(item.id)" style="color: red; cursor: pointer;" >
                    <span>Delete</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
  </div>
</template>

<style scoped>
.user {
  width: 109%;
  padding-left: 12rem;
  padding-top: 50px;
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
