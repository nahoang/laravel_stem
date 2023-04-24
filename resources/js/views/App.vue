<template>
  <VNavbar />
  <main>
    <router-view v-slot="{ Component }">
      <transition name="fade" mode="out-in">
        <component :is="Component" />
      </transition>
    </router-view>
  </main>
</template>

<script setup lang="ts">
import VNavbar from "../components/VNavbar.vue";

</script>

<style lang="scss">
main {
  display: flex;
  flex: 1;
}
</style>