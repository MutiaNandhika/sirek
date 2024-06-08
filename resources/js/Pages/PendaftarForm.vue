<template>
  <form :action="formAction" method="POST" enctype="multipart/form-data" class="max-w-xl mx-auto p-4 bg-white shadow-md rounded-md" @submit.prevent="submit">
    <h1 class="text-xl font-semibold mb-4">Tambah Pendaftar Baru</h1>
    
    <div class="mb-4">
      <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
      <input id="nama" v-model="form.nama" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>
    
    <div class="mb-4">
      <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
      <input type="email" id="email" v-model="form.email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>

    <div class="mb-4">
      <label for="telpon" class="block text-sm font-medium text-gray-700">Telpon</label>
      <input id="telpon" v-model="form.telpon" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>

    <div class="mb-4">
      <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
      <textarea id="alamat" v-model="form.alamat" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
    </div>

    <div class="mb-4">
      <label for="tgllahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
      <input type="date" id="tgllahir" v-model="form.tgllahir" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>

    <div class="mb-4">
      <label for="jeniskelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
      <select id="jeniskelamin" v-model="form.jeniskelamin" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
      <input type="hidden" name="event_id">
    </div>
    <!-- Tambahkan input sesuai dengan field yang dibutuhkan -->
    <div class="flex">
      <a href="/pendaftar" class="py-2 px-4 mx-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Batal</a>
      <button type="submit" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
    </div>
  </form>
</template>

<script setup>
import { reactive } from 'vue'
import { defineProps } from 'vue'
import { router } from '@inertiajs/vue3'
import { onMounted } from 'vue'



const props = defineProps({
  formtype: String,
  pendaftar: Object,
  event_id: String,
})
onMounted(() => {
  console.log(props.event_id)
});
const form = reactive({
  nama: '',
  email: '',
  telpon: '',
  alamat: '',
  tgllahir: '',
  jeniskelamin: '',
  nim: '',
  jurusan: '',
  fakultas: '',
  angkatan: '',
  pilihan1: '',
  alasan1: '',
  pilihan2: '',
  alasan2: '',
  filecv: null,
  fileloc: null
})
const formAction = '/pendaftar'
function submit() {
  const formData = new FormData()
  for (const key in form) {
    formData.append(key, form[key])
  }
  
  router.post(formAction, formData)
}
</script>
