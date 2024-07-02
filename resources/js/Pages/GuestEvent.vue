
<template>
  <Head title="Event" />
  

  <div>
    <GuestNavbar />
    <div class="flex flex-col space-y-6">

      <!-- Section Header -->
      <section>
        <header class="bg-blue-700 text-white py-12">
          <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold mb-4">Event Bahtera Karsa 2024</h1>
          </div>
        </header>
<!-- Modal for Flash Message -->
<div v-if="flashMessage" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
          <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
          <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
          <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="bg-green-100 p-4">
              <div class="flex justify-between">
                <div class="px-2">
                  <h3 class="text-lg font-medium text-green-800">Notification</h3>
                  <div class="mt-2 text-sm text-green-700">
                    <p>{{ flashMessage }}</p>
                  </div>
                </div>
                <div class="px-2">
                  <button @click="flashMessage = ''" class="text-gray-400 hover:text-gray-800 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- Event Items -->
        <div v-for="item in event" :key="item.event_id" class="mt-8 space-y-8 container mx-auto px-4">
          <div class="bg-blue-100 p-8 rounded-lg shadow-md flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4">
            <img :src="'/storage/' + item.gambar" :alt="item.nama_event + ' Image'" class="w-full md:w-40 h-auto md:h-40 object-cover">
            <div class="text-center md:text-left">
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

<script setup>
import { Head } from '@inertiajs/vue3';
import { defineProps, ref, onMounted } from 'vue';
import GuestNavbar from '@/Components/GuestNavbar.vue';
import Foot from '@/Components/Foot.vue';

const { event, flash } = defineProps({ event: Array, flash: String });
const flashMessage = ref(flash);

onMounted(() => {
  // Optionally handle any logic on mount
});
</script>

<style scoped>
/* Add your scoped styles here */
</style>
