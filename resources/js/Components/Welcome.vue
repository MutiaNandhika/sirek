<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div class="grid grid-cols-2 gap-6">
      <!-- Bagian kiri (Logo BEM dan judul) -->
      <div class="flex flex-col justify-center items-center col-span-1">
        <h1 class="text-3xl font-bold mb-4">Sistem Open Recruitment</h1>
        <!-- Ganti 'path_ke_gambar' dengan path gambar logo BEM -->
        <img src="https://pbs.twimg.com/profile_images/1775455225014607872/uy6WUXI3_400x400.jpg" alt="Logo BEM" class="h-auto max-h-40 w-auto max-w-full">
        <h1 class="text-3xl text-center font-bold mb-4">BEM Universitas Jenderal Soedirman</h1>

      </div>
  
      <!-- Bagian kanan (Link) -->
      <div class="col-span-1 grid grid-rows-2 gap-6">
        <!-- Link 1 -->
        <div class="flex justify-center items-center h-36">
          <a href="/pengumuman/create" class="block text-center bg-green-500 text-white p-6 rounded-lg transition duration-300 shadow-lg hover:bg-green-600 w-full max-w-sm">
            <h3 class="text-xl font-bold">Tambah Pengumuman</h3>
            <p class="mt-2 text-base">Buat pengumuman baru untuk semua orang.</p>
          </a>
        </div>
        <!-- Link 2 -->
        <div class="flex justify-center items-center h-36">
          <a href="/event/create" class="block text-center bg-green-500 text-white p-6 rounded-lg transition duration-300 shadow-lg hover:bg-green-600 w-full max-w-sm">
            <h3 class="text-xl font-bold">Tambah Event</h3>
            <p class="mt-2 text-base">Organisir acara baru yang menarik.</p>
          </a>
        </div>
      </div>
    </div>
  </template>
  
