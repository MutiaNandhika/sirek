<template>
    <div>
      <GuestNavbar />
      <div class="flex flex-col space-y-6">
        <!-- Menampilkan informasi tentang setiap acara -->
        <section class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold text-center text-blue-600">Event Bahtera Karsa 2024</h1>

        <div class="mt-8 space-y-8">
            <!-- Event 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md flex items-center space-x-4">
                <img src="path-to-image" alt="Event Image" class="w-24 h-24 object-cover rounded-full">
                <div>
                    <h2 class="text-xl font-bold text-blue-600">Soedirman Student Summit</h2>
                    <p class="text-gray-600 mt-2">Acara tahunan yang diselenggarakan oleh BEM Unsoed dalam rangka penyambutan mahasiswa baru 2023...</p>
                    <a href="#" class="text-yellow-600 mt-2 inline-block">Selengkapnya</a>
                </div>
            </div>
            <!-- Event 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md flex items-center space-x-4">
                <img src="path-to-image" alt="Event Image" class="w-24 h-24 object-cover rounded-full">
                <div>
                    <h2 class="text-xl font-bold text-blue-600">Starfest</h2>
                    <p class="text-gray-600 mt-2">Starfest adalah kegiatan atau rangkaian acara yang diselenggarakan oleh Kementerian Minat dan Bakat...</p>
                    <a href="#" class="text-yellow-600 mt-2 inline-block">Selengkapnya</a>
                </div>
            </div>
            <!-- Event 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md flex items-center space-x-4">
                <img src="path-to-image" alt="Event Image" class="w-24 h-24 object-cover rounded-full">
                <div>
                    <h2 class="text-xl font-bold text-blue-600">Desa Cita</h2>
                    <p class="text-gray-600 mt-2">Desa cita merupakan rangkaian kegiatan yang diselenggarakan oleh kementerian pengabdian masyarakat...</p>
                    <a href="#" class="text-yellow-600 mt-2 inline-block">Selengkapnya</a>
                </div>
            </div>
            <!-- Event 4 -->
            <div class="bg-white p-6 rounded-lg shadow-md flex items-center space-x-4">
                <img src="path-to-image" alt="Event Image" class="w-24 h-24 object-cover rounded-full">
                <div>
                    <h2 class="text-xl font-bold text-blue-600">Soedirman Digital School</h2>
                    <p class="text-gray-600 mt-2">Sekolah Digital Soedirman (SDS) merupakan program pelatihan digital Unsoed yang diselenggarakan oleh Kementerian Media Komunikasi...</p>
                    <a href="#" class="text-yellow-600 mt-2 inline-block">Selengkapnya</a>
                </div>
            </div>
            <!-- Event 5 -->
            <div class="bg-white p-6 rounded-lg shadow-md flex items-center space-x-4">
                <img src="path-to-image" alt="Event Image" class="w-24 h-24 object-cover rounded-full">
                <div>
                    <h2 class="text-xl font-bold text-blue-600">SOLO</h2>
                    <p class="text-gray-600 mt-2">Kegiatan yang memfasilitasi mahasiswa Unsoed untuk meningkatkan potensi dan kontribusi dalam sebuah organisasi di tingkat Universitas...</p>
                    <a href="#" class="text-yellow-600 mt-2 inline-block">Selengkapnya</a>
                </div>
            </div>
        </div>
        </section>
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
  