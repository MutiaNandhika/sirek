<template>
    <nav class="bg-blue-700 backdrop-blur-lg p-3 flex justify-between items-center shadow-lg relative">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <img src="storage/assets/logofix.png" alt="Logo" class="h-15 w-32"> <!-- Ukuran disesuaikan dengan Tailwind CSS -->
      </div>
  
      <!-- Navigation Links for Desktop -->
      <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2">
        <ul class="flex space-x-8">
          <li><a href="/" class="text-white hover:text-gray-400">Beranda</a></li>
          <li><a href="/eventguest" class="text-white hover:text-gray-400">Event</a></li>
          <li><a href="/pengumumanguest" class="text-white hover:text-gray-400">Pengumuman</a></li>
        </ul>
      </div>
  
      <!-- Login/Logout -->
      <div v-if="canLogin" class="hidden md:flex-shrink-0">
        <Link v-if="$page.props.auth?.user" :href="route('dashboard')"
              class="font-semibold text-white hover:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
          Dashboard
        </Link>
        <Link v-else :href="route('login')" class="bg-white text-blue-700 py-2 px-4 rounded-full shadow hover:bg-gray-100">
          Masuk
        </Link>
      </div>
  
      <!-- Mobile Menu Button -->
      <div class="md:hidden flex items-center">
        <button @click="toggleMobileMenu" class="text-white focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>
  
      <!-- Mobile Menu -->
      <div v-show="isMobileMenuOpen" class="md:hidden absolute top-full left-0 w-full bg-blue-700 z-20">
        <ul class="flex flex-col space-y-2 p-4">
          <li><a href="/" class="text-white hover:text-gray-400">Beranda</a></li>
          <li><a href="/eventguest" class="text-white hover:text-gray-400">Event</a></li>
          <li><a href="/pengumumanguest" class="text-white hover:text-gray-400">Pengumuman</a></li>
          <li v-if="canLogin" class="pt-6">
            <Link v-if="$page.props.auth?.user" :href="route('dashboard')"
                  class="font-semibold text-white hover:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
              Dashboard
            </Link>
            <Link v-else :href="route('login')" class="bg-white text-blue-700 py-2 px-4 rounded-full shadow hover:bg-gray-100">
              Masuk
            </Link>
          </li>
        </ul>
      </div>
    </nav>
  </template>
  
  <script setup>
  import { ref } from 'vue'
  import { Link } from '@inertiajs/vue3'
  import { defineProps } from 'vue'
  
  defineProps(['canLogin', 'canRegister'])
  
  const isMobileMenuOpen = ref(false)
  
  function toggleMobileMenu() {
    isMobileMenuOpen.value = !isMobileMenuOpen.value
  }
  </script>
  
  <style scoped>
  /* Tambahkan gaya tambahan di sini jika diperlukan */
  </style>
  