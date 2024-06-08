<template>
  <div>
    <GuestNavbar />
    <div class="flex flex-col space-y-6">
      <!-- Menampilkan informasi tentang setiap acara -->
      <div
        v-for="item in pengumuman"
        :key="item.pengumuman_id"
        class="flex items-start bg-white rounded-lg shadow-md"
      >
        <div class="flex flex-col flex-grow p-4">
          <h3 class="text-lg font-semibold">{{ item.event.nama_event }}</h3>
          <p>{{ item.keterangan }}</p>
          <a :href="'/unduhpengumuman/' + item.pengumuman_id" class="bg-blue-500 text-sm hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Unduh Pengumuman
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { defineProps } from 'vue';
import GuestNavbar from '@/Components/GuestNavbar.vue';

// Define props for pengumuman
const { pengumuman } = defineProps({ pengumuman: Array });
console.log(pengumuman); // Log the props to verify data
</script>

<style scoped>
/* Add your scoped styles here */
</style>
