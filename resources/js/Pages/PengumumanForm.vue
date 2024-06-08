<template>
  <form :action="formAction" method="POST" enctype="multipart/form-data" class="max-w-xl mx-auto p-4 bg-white shadow-md rounded-md" @submit.prevent="submit">
    <h1 class="text-xl font-semibold mb-4">{{ props.formtype === 'create' ? 'Tambah Pengumuman Baru' : 'Edit Pengumuman' }}</h1>
    
    <!-- Jika formtype === 'create', tampilkan dropdown untuk memilih event -->
    <div v-if="props.formtype === 'create'" class="mb-4">
      <label for="event_id" class="block text-sm font-medium text-gray-700">Nama Event</label>
      <select v-model="form.event_id" id="event_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        <option value="" disabled selected>Pilih Event</option>
        <option v-for="pengumuman in pengumuman" :key="pengumuman.event_id" :value="pengumuman.event_id">{{ pengumuman.nama_event }}</option>
      </select>
    </div>

    <!-- Jika formtype === 'edit', tampilkan input yang terdisable -->
    <div v-else class="mb-4">
      <label for="event_id" class="block text-sm font-medium text-gray-700">Nama Event</label>
      <input disabled id="event_id" v-model="form.nama_event" class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>

    <div class="mb-4">
      <label for="file_pengumuman" class="block text-sm font-medium text-gray-700">File Pengumuman</label>
      <input type="file" id="file_pengumuman" @change="handleFileUpload" class="mt-1 block w-full text-sm text-gray-900 border border-gray-300 rounded-md cursor-pointer bg-gray-50 focus:outline-none focus:border-indigo-500 focus:ring-indigo-500" />
      <p id="file_exist" class="mt-1 text-sm text-gray-500">{{ props.formtype === 'edit' && props.pengumuman && props.pengumuman.file_pengumuman }}</p>
    </div>

    <div class="mb-4">
      <label for="tgl_pengumuman" class="block text-sm font-medium text-gray-700">Tanggal</label>
      <input type="date" id="tgl_pengumuman" v-model="form.tgl_pengumuman" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>

    <div class="mb-4">
      <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
      <input id="keterangan" v-model="form.keterangan" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
    </div>
    
    <div class="flex">
      <a href="/pengumuman" class="py-2 px-4 mx-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Batal</a>
      <button type="submit" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">{{ props.formtype === 'create' ? 'Submit' : 'Simpan Perubahan' }}</button>
    </div>
  </form>
</template>

<script setup>
import { reactive } from 'vue'
import { defineProps } from 'vue'
import { router } from '@inertiajs/vue3'

const props = defineProps({
  formtype: String,
  pengumuman: Object
})
console.log(props.pengumuman)

const form = reactive({
  event_id: '',
  file_pengumuman: null,
  tgl_pengumuman: '',
  keterangan: ''
})

const formAction = props.formtype === 'create' ? '/pengumuman' : `/editpengumuman/${props.pengumuman.pengumuman_id}`

function submit() {
  const formData = new FormData()
  formData.append('event_id', form.event_id)
  formData.append('keterangan', form.keterangan)
  formData.append('tgl_pengumuman', form.tgl_pengumuman) 
  if (props.formtype === 'edit' && form.file_pengumuman === null) {
    formData.append('_method', 'PUT')
    router.post(formAction, formData)
  } else {
    formData.append('file_pengumuman', form.file_pengumuman) //
    if (props.formtype === 'edit') {
      formData.append('_method', 'PUT')
    }
    router.post(formAction, formData)
  }
}
if (props.formtype === 'edit' && props.pengumuman) {
  form.nama_event = props.pengumuman.event.nama_event
  form.tgl_pengumuman = props.pengumuman.tgl_pengumuman
  form.keterangan = props.pengumuman.keterangan
}

function handleFileUpload(event) {
  form.file_pengumuman = event.target.files[0]
}
</script>
