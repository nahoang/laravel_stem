<template>
  <h1>Log in</h1>
  <form @submit.prevent="submit">
    <input type="text" v-model="formData.username.value"
      name="username"
      label="Username"
    />
    <input type="text" v-model="formData.password.value"
      name="password"
      label="Password"
    />
    <button type="submit">Log in</button>
  </form>
</template>

<script setup lang="ts">
  import { ref, reactive } from 'vue';
  import axios from "axios";


  const formData = reactive({
    username: {
      value: ""
    },
    password: {
      value: ""
    }
  });

  const submit = async () => {
    try {
      let res = await axios.post('login', {
        username: formData.username.value,
        password: formData.password.value
      });
      console.log('res', res);
    } catch(e) {
      console.log('e', e);
    }
  }

</script>