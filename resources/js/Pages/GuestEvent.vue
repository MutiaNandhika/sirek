<script setup>
import { defineProps } from 'vue';
import GuestNavbar from '@/Components/GuestNavbar.vue';
import Foot from '@/Components/Foot.vue';

// Properti event telah didefinisikan dengan menggunakan defineProps
const { event } = defineProps({ event: Array });
console.log(event);  // Log the props to verify data
</script>

<template>
  <div>
    <GuestNavbar />
    <div class="flex flex-col space-y-6">
      <!-- Menampilkan informasi tentang setiap acara -->
      <section>
        <header class="bg-blue-700 text-white py-12">
          <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold mb-4">Event Bahtera Karsa 2024</h1>
          </div>
        </header>

        <div v-for="item in event" :key="item.event_id" class="mt-8 space-y-8 container mx-auto px-4">
          <!-- Event 1 -->
          <div class="bg-blue-100 p-8 rounded-lg shadow-md flex items-center space-x-4">
              <img :src="'/storage/' + item.gambar" :alt="item.nama_event + ' Image'" class="w-40 h-40 object-cover">
              <div>
                <h2 class="text-xl font-bold text-blue-600">{{ item.nama_event }}</h2>
                <p class="text-gray-600 mt-2">{{ item.deskripsi }}</p>
                <a :href="'/pendaftar/create/' + item.event_id" class="bg-orange-400 text-white py-2 px-4 rounded mt-4 inline-block hover:bg-orange-600">Daftar Sekarang</a>
              </div>
          </div>
        </div>
      </section>
    </div>
    <Foot />
  </div>
</template>
