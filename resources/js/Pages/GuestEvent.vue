<template>
    <div>
      <GuestNavbar />
      <div class="flex flex-col space-y-6">
        <!-- Menampilkan informasi tentang setiap acara -->
        <div v-for="item in event" :key="item.event_id" class="flex items-start bg-white rounded-lg shadow-md">
          <div class="flex items-center justify-center p-4">
            <img :src="'/storage/'+item.gambar" alt="Gambar" class="w-25 object-cover rounded">
          </div>
          <div class="flex flex-col flex-grow p-4">
            <h3 class="text-lg font-semibold">{{ item.nama_event }}</h3>
            <p class="text-sm text-gray-600 mt-2">{{ item.deskripsi }}</p>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { defineProps } from 'vue';
  import GuestNavbar from '@/Components/GuestNavbar.vue';
  
  // Properti event telah didefinisikan dengan menggunakan defineProps
  const { event } = defineProps({ event: Array });
  console.log(event);  // Log the props to verify data
  </script>
  