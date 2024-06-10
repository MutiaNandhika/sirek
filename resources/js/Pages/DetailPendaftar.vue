<template>
    <AppLayout title="Detail Pendaftar">
      <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Detail Pendaftar
        </h2>
      </template>
  
      <div class="max-w-3xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
          <div class="mt-4 text-right">
          <a href="/pendaftar" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
            Kembali
          </a>
        </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <p class="text-sm font-medium text-gray-500">ID:</p>
              <p class="text-md font-semibold">{{ pendaftar.pendaftar_id }}</p>
            </div>
            <div>
              <p class="text-sm font-medium text-gray-500">Nama:</p>
              <p class="text-md font-semibold">{{ pendaftar.nama }}</p>
            </div>
            <div>
              <p class="text-sm font-medium text-gray-500">Email:</p>
              <p class="text-md font-semibold">{{ pendaftar.email }}</p>
            </div>
            <div>
              <p class="text-sm font-medium text-gray-500">Telpon:</p>
              <p class="text-md font-semibold">{{ pendaftar.telpon }}</p>
            </div>
            <div>
              <p class="text-sm font-medium text-gray-500">Alamat:</p>
              <p class="text-md font-semibold">{{ pendaftar.alamat }}</p>
            </div>
            <div>
              <p class="text-sm font-medium text-gray-500">Tanggal Lahir:</p>
              <p class="text-md font-semibold">{{ pendaftar.tgllahir }}</p>
            </div>
            <div>
              <p class="text-sm font-medium text-gray-500">Jenis Kelamin:</p>
              <p class="text-md font-semibold">{{ pendaftar.jeniskelamin }}</p>
            </div>
            <div>
              <p class="text-sm font-medium text-gray-500">NIM:</p>
              <p class="text-md font-semibold">{{ pendaftar.nim }}</p>
            </div>
            <div>
              <p class="text-sm font-medium text-gray-500">Jurusan:</p>
              <p class="text-md font-semibold">{{ pendaftar.jurusan }}</p>
            </div>
            <div>
              <p class="text-sm font-medium text-gray-500">Fakultas:</p>
              <p class="text-md font-semibold">{{ pendaftar.fakultas }}</p>
            </div>
            <div>
              <p class="text-sm font-medium text-gray-500">Angkatan:</p>
              <p class="text-md font-semibold">{{ pendaftar.angkatan }}</p>
            </div>
            <div>
              <p class="text-sm font-medium text-gray-500">Pilihan 1:</p>
              <p class="text-md font-semibold">{{ pendaftar.pilihan1 }}</p>
            </div>
            <div>
              <p class="text-sm font-medium text-gray-500">Alasan 1:</p>
              <p class="text-md font-semibold">{{ pendaftar.alasan1 }}</p>
            </div>
            <div>
              <p class="text-sm font-medium text-gray-500">Pilihan 2:</p>
              <p class="text-md font-semibold">{{ pendaftar.pilihan2 }}</p>
            </div>
            <div>
              <p class="text-sm font-medium text-gray-500">Alasan 2:</p>
              <p class="text-md font-semibold">{{ pendaftar.alasan2 }}</p>
            </div>
            <div>
              <p class="text-sm font-medium text-gray-500">File CV:</p>
              <p class="text-md font-semibold">{{ pendaftar.filecv }}</p>
            </div>
            <div>
              <p class="text-sm font-medium text-gray-500">File LOC:</p>
              <p class="text-md font-semibold">{{ pendaftar.fileloc }}</p>
            </div>
          </div>
        
        </div>
      
      </div>
    </AppLayout>
  </template>
  
  <script setup>
  import AppLayout from '@/Layouts/AppLayout.vue';
  const props = defineProps({ 
    pendaftar: Object 
  });
  </script>
  