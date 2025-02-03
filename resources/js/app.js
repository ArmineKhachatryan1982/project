import './bootstrap';

import { createApp } from 'vue'

import app from './components/App.vue'
import router from './router'

// Импортируем FullCalendar
import FullCalendar from '@fullcalendar/vue3';

import Swal from "sweetalert2"
window.Swal = Swal
const toast = Swal.mixin({
toast: true,
position: 'top-end',
showConfirmButton: false,
timer: 3000,
timerProgressBar: true,
})
window.toast = toast

// createApp(app).use(router).mount("#app")

const myApp = createApp(app);
myApp.use(router);
myApp.component('FullCalendar', FullCalendar);
myApp.mount("#app");

