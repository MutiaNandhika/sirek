<template>
    <nav class="bg-blue-700 backdrop-blur-lg p-3 flex justify-between items-center shadow-lg relative">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <img src="storage/assets/logofix.png" alt="Logo" class="h-15 w-32"> <!-- Ukuran disesuaikan dengan Tailwind CSS -->
        </div>

        <!-- Navigation Links -->
        <div class="absolute left-1/2 transform -translate-x-1/2">
            <ul class="flex space-x-8">
                <li><a href="/" class="text-white hover:text-gray-400">Beranda</a></li>
                <li><a href="/eventguest" class="text-white hover:text-gray-400">Event</a></li>
                <li><a href="/pengumumanguest/" class="text-white hover:text-gray-400">Pengumuman</a></li>
            </ul>
        </div>
        
        <!-- Login/Logout -->
        <div v-if="canLogin" class="flex-shrink-0">
            <Link v-if="$page.props.auth?.user" :href="route('dashboard')"
                  class="font-semibold text-white hover:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                Dashboard
            </Link>
            <Link v-else :href="route('login')" class="bg-white text-blue-700 py-2 px-4 rounded-full shadow hover:bg-gray-100">
                Masuk
            </Link>
        </div>
    </nav>
</template>

<script setup>
defineProps(['canLogin', 'canRegister']);
</script>

<style scoped>
/* Tambahkan gaya tambahan di sini jika diperlukan */
</style>