import './bootstrap';
import { createApp } from "vue";
import { createPinia } from "pinia";
import piniaPluginPersistedstate from "pinia-plugin-persistedstate";
import Router from "@/router";

import App from "./views/App.vue";
import VContainer from "./components/VContainer.vue";


const pinia = createPinia();
pinia.use(piniaPluginPersistedstate);


createApp(App)
.use(pinia)
.use(Router)
.component("VContainer", VContainer)

  .mount('#app');