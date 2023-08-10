import { createApp } from 'vue';
import PostComponent from "@/components/PostComponent.vue";
import './bootstrap';

const app = createApp({});

app.component('post-component', PostComponent);

app.mount('#app');
