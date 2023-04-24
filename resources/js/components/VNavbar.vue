<template>
  <ul>
    <template v-for="item in menuItems">
      <li
      >
      <router-link :to="item.to">{{ item.label }}</router-link>
      </li>

    </template>
  </ul>
</template>

<script setup lang="ts">
  const menuItems = [
    {
        name: "login",
        label: "Log in",
        to: "/login",
    },
    {
        name: "about",
        label: "About",
        to: "/about",
    },
    {
        name: "home",
        label: "Home",
        to: "/",
    },
  ]
</script>