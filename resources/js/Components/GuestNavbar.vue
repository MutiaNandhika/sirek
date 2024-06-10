<template>
    <nav class="bg-blue-800 backdrop-blur-lg p-3 flex justify-between items-center shadow-lg">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <img src="storage/assets/logo1.png" alt="Logo" class="h-15 w-32"> <!-- Ukuran disesuaikan dengan Tailwind CSS -->
        </div>

        <!-- Navigation Links -->
        <div class="flex-grow flex justify-center"> <!-- Menggunakan justify-center untuk memastikan tautan berada di tengah -->
            <ul class="flex space-x-8">
                <li><a href="/" class="text-white hover:text-gray-400">Home</a></li>
                <li><a href="/eventguest" class="text-white hover:text-gray-400">Event</a></li>
                <li><a href="/pengumumanguest/" class="text-white hover:text-gray-400">Pengumuman</a></li>
            </ul>
        </div>

        <!-- Login/Logout -->
        <div class="flex-shrink-0">
        </div>
    </nav>
</template>

<script setup>
defineProps(['canLogin', 'canRegister']);
</script>

<style scoped>
/* Tambahkan gaya tambahan di sini jika diperlukan */
</style>
