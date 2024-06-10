<template>
  <form :action="formAction" method="POST" enctype="multipart/form-data" class="max-w-xl mx-auto p-4 bg-white shadow-md rounded-md" @submit.prevent="submit">
    <h1 class="text-xl font-semibold mb-4">Pendaftaran untuk <span class="text-blue-800">{{ event.nama_event }}</span></h1>
    
    <!-- Nama -->
    <div class="mb-4">
      <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
      <input id="nama" v-model="form.nama" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>

    <!-- Email -->
    <div class="mb-4">
      <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
      <input type="email" id="email" v-model="form.email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>

    <!-- Telepon -->
    <div class="mb-4">
      <label for="telpon" class="block text-sm font-medium text-gray-700">Telepon</label>
      <input id="telpon" v-model="form.telpon" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>

    <!-- Alamat -->
    <div class="mb-4">
      <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
      <textarea id="alamat" v-model="form.alamat" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
    </div>

    <!-- Tanggal Lahir -->
    <div class="mb-4">
      <label for="tgllahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
      <input type="date" id="tgllahir" v-model="form.tgllahir" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>

    <!-- Jenis Kelamin -->
    <div class="mb-4">
      <label for="jeniskelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
      <select id="jeniskelamin" v-model="form.jeniskelamin" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>

    <!-- NIM -->
    <div class="mb-4">
      <label for="nim" class="block text-sm font-medium text-gray-700">NIM</label>
      <input id="nim" v-model="form.nim" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>

    <!-- Jurusan -->
    <div class="mb-4">
      <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan</label>
      <input id="jurusan" v-model="form.jurusan" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>

    <!-- Fakultas -->
    <div class="mb-4">
      <label for="fakultas" class="block text-sm font-medium text-gray-700">Fakultas</label>
      <input id="fakultas" v-model="form.fakultas" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>

    <!-- Angkatan -->
    <div class="mb-4">
      <label for="angkatan" class="block text-sm font-medium text-gray-700">Angkatan</label>
      <input id="angkatan" v-model="form.angkatan" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>

    <!-- Pilihan 1 -->
    <div class="mb-4">
      <label for="pilihan2" class="block text-sm font-medium text-gray-700">Pilihan 2</label>
      <select id="pilihan1" v-model="form.pilihan1" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        <option value="">Pilihan Divisi</option>
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

    <!-- Alasan Pilihan 1 -->
    <div class="mb-4">
      <label for="alasan1" class="block text-sm font-medium text-gray-700">Alasan Pilihan 1</label>
      <textarea id="alasan1" v-model="form.alasan1" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
    </div>

    <!-- Pilihan 2 -->
    <div class="mb-4">
      <label for="pilihan2" class="block text-sm font-medium text-gray-700">Pilihan 2</label>
      <select id="pilihan2" v-model="form.pilihan2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        <option value="">Pilihan Divisi</option>
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


    <!-- Alasan Pilihan 2 -->
    <div class="mb-4">
      <label for="alasan2" class="block text-sm font-medium text-gray-700">Alasan Pilihan 2</label>
      <textarea id="alasan2" v-model="form.alasan2" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
    </div>
    <!-- File CV -->
    <div class="mb-4">
      <label for="filecv" class="block text-sm font-medium text-gray-700">File CV (PDF/DOC/DOCX)</label>
      <input type="file" id="filecv" @change="handleFileUpload('filecv', $event)" required accept=".pdf,.doc,.docx" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>

    <!-- File LOC -->
    <div class="mb-4">
      <label for="fileloc" class="block text-sm font-medium text-gray-700">File LOC (PDF/DOC/DOCX)</label>
      <input type="file" id="fileloc" @change="handleFileUpload('fileloc', $event)" required accept=".pdf,.doc,.docx" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>

    <!-- Tombol Submit dan Batal -->
    <div class="flex">
      <a href="/event" class="py-2 px-4 mx-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Batal</a>
      <button type="submit" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
    </div>
  </form>
</template>

<script setup>
import { reactive } from 'vue'
import { defineProps } from 'vue'
import { router } from '@inertiajs/vue3'

const props = defineProps({
  pendaftar: Object,
  event: Object,
  formtype: String,
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
  event_id: (props.event.event_id),
})
console.log(form);
const formAction = props.formtype === 'create' ? '/pendaftar' : `/editpendaftar/${props.pendaftar.pendaftar_id}`

function submit() {
  const formData = new FormData()
  formData.append('nama', form.nama)
  formData.append('email', form.email)
  formData.append('telpon', form.telpon)
  formData.append('alamat', form.alamat)
  formData.append('tgllahir', form.tgllahir)
  formData.append('jeniskelamin', form.jeniskelamin)
  formData.append('nim', form.nim)
  formData.append('jurusan', form.jurusan)
  formData.append('fakultas', form.fakultas)
  formData.append('angkatan', form.angkatan)
  formData.append('pilihan1', form.pilihan1)
  formData.append('alasan1', form.alasan1)
  formData.append('pilihan2', form.pilihan2)
  formData.append('alasan2', form.alasan2)
  formData.append('filecv', form.filecv)
  formData.append('fileloc', form.fileloc)
  formData.append('event_id', form.event_id)

  if (props.formtype === 'edit') {
    formData.append('_method', 'PUT')
  }

  router.post(formAction, formData)
}

function handleFileUpload(field, event) {
  if (field === 'filecv') {
    form.filecv = event.target.files[0]
  } else if (field === 'fileloc') {
    form.fileloc = event.target.files[0]
  }
}
</script>