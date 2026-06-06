import '../css/app.css';
import { createInertiaApp } from '@inertiajs/vue3';
import DashboardLayout from './layouts/Dashboard/DashboardLayout.vue';

createInertiaApp({
    layout: () => DashboardLayout,
});
