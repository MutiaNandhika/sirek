<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestNavbar from '@/Components/GuestNavbar.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<template>
    <Head title="Welcome" />
    
    <!-- Guest Navbar -->
    <GuestNavbar :canLogin="canLogin" :canRegister="canRegister" />
    <!-- Login/Logout Links -->
    <div v-if="canLogin" class="sm:absolute sm:top-0 sm:end-0 p-6 text-end z-10">
        <Link v-if="$page.props.auth?.user" :href="route('dashboard')"
              class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            Dashboard
        </Link>
        <Link v-else :href="route('login')"
              class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            Log in
        </Link>
    </div>
    <!-- Main Content -->
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center selection:bg-red-500 selection:text-white">
    </div>
</template>
