<template>
  <form :action="formAction" method="POST" enctype="multipart/form-data" class="max-w-xl mx-auto p-4 bg-white shadow-md rounded-md" @submit.prevent="submit">
    <h1 class="text-xl font-semibold mb-4">Pendaftaran Panitia <br> <span class="text-blue-800">{{ event.nama_event }}</span></h1>

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
    </div>

    <div class="mb-4">
      <label for="nim" class="block text-sm font-medium text-gray-700">NIM</label>
      <input id="nim" v-model="form.nim" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>

    <div class="mb-4">
      <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan</label>
      <input id="jurusan" v-model="form.jurusan" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>

    <div class="mb-4">
      <label for="fakultas" class="block text-sm font-medium text-gray-700">Fakultas</label>
      <input id="fakultas" v-model="form.fakultas" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>

    <div class="mb-4">
      <label for="angkatan" class="block text-sm font-medium text-gray-700">Angkatan</label>
      <input id="angkatan" v-model="form.angkatan" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>

    <div class="mb-4">
      <label for="pilihan1" class="block text-sm font-medium text-gray-700">Pilihan 1</label>
      <select id="pilihan1" v-model="form.pilihan1" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        <option value="">Divisi</option>
        <option value="Sekretaris">Sekretaris</option>
        <option value="Bendahara">Bendahara</option>
        <option value="Acara">Acara</option>
        <option value="Kurikulum">Kurikulum</option>
        <option value="Humpub">Humpub</option>
        <option value="PDD">PDD</option>
        <option value="ATP">ATP</option>
        <option value="Lapangan">Lapangan</option>
        <option value="Sponsorship">Sponsorship</option>
        <option value="Usda">Usda</option>
        <option value="Pendamping">Pendamping</option>
      </select>
    </div>

    <div class="mb-4">
      <label for="alasan1" class="block text-sm font-medium text-gray-700">Alasan 1</label>
      <textarea id="alasan1" v-model="form.alasan1" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
    </div>

    <div class="mb-4">
      <label for="pilihan2" class="block text-sm font-medium text-gray-700">Pilihan 2</label>
      <select id="pilihan2" v-model="form.pilihan2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        <option value="">Divisi</option>
        <option value="Sekretaris">Sekretaris</option>
        <option value="Bendahara">Bendahara</option>
        <option value="Acara">Acara</option>
        <option value="Kurikulum">Kurikulum</option>
        <option value="Humpub">Humpub</option>
        <option value="PDD">PDD</option>
        <option value="ATP">ATP</option>
        <option value="Lapangan">Lapangan</option>
        <option value="Sponsorship">Sponsorship</option>
        <option value="Usda">Usda</option>
        <option value="Pendamping">Pendamping</option>
      </select>
    </div>

    <div class="mb-4">
      <label for="alasan2" class="block text-sm font-medium text-gray-700">Alasan 2</label>
      <textarea id="alasan2" v-model="form.alasan2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
    </div>

    <div class="mb-4">
      <label for="filecv" class="block text-sm font-medium text-gray-700">Upload CV</label>
      <input type="file" id="filecv" @change="handleFileChange($event, 'filecv')" class="mt-1 block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 cursor-pointer focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" />
    </div>

    <div class="mb-4">
      <label for="fileloc" class="block text-sm font-medium text-gray-700">Upload LOC</label>
      <input type="file" id="fileloc" @change="handleFileChange($event, 'fileloc')" class="mt-1 block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 cursor-pointer focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" />
    </div>

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
  event: Object,
})

onMounted(() => {
  console.log(props.event)
})

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
  fileloc: null,
})

const formAction = '/pendaftar'

function handleFileChange(event, field) {
  form[field] = event.target.files[0]
}

function submit() {
  const formData = new FormData()
  for (const key in form) {
    formData.append(key, form[key])
  }
  
  router.post(formAction, formData)
}
</script>

<style scoped>
/* Add any additional styles here if needed */
</style>
