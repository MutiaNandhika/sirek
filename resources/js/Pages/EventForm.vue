<template>
    <form :action="formAction" method="POST" enctype="multipart/form-data" class="max-w-xl mx-auto p-4 bg-white shadow-md rounded-md" @submit.prevent="submit">
      <h1 class="text-xl font-semibold mb-4">{{ props.formtype === 'create' ? 'Tambah Pengumuman Baru' : 'Edit Pengumuman' }}</h1>
      
      <div class="mb-4">
        <label for="nama_event" class="block text-sm font-medium text-gray-700">Nama Event</label>
        <input id="nama_event" v-model="form.nama_event" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
      </div>
  
      <div class="mb-4">
        <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
        <input type="file" id="gambar" @change="handleFileUpload" class="mt-1 block w-full text-sm text-gray-900 border border-gray-300 rounded-md cursor-pointer bg-gray-50 focus:outline-none focus:border-indigo-500 focus:ring-indigo-500" />
        <p id="file_exist" class="mt-1 text-sm text-gray-500">{{ props.formtype === 'edit' && props.event && props.event.gambar }}</p>
      </div>
  
      <div class="mb-4">
        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
        <input id="deskripsi" v-model="form.deskripsi" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
      </div>
      
      <div class="flex">
        <a href="/event" class="py-2 px-4 mx-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Batal</a>
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
    event: Object
  })
  
  const form = reactive({
    nama_event: '',
    gambar: null,
    deskripsi: ''
  })
  
  const formAction = props.formtype === 'create' ? '/event' : `/editevent/${props.event.event_id}`
  
  function submit() {
  const formData = new FormData()
  formData.append('nama_event', form.nama_event)
  formData.append('deskripsi', form.deskripsi)
  if (props.formtype === 'edit' && form.gambar === null) {
    formData.append('_method', 'PUT')
    router.post(formAction, formData)
  } else {
    formData.append('gambar', form.gambar)
    if (props.formtype === 'edit') {
      formData.append('_method', 'PUT')
    }
    router.post(formAction, formData)
  }
}

  
  if (props.formtype === 'edit' && props.event) {
    form.nama_event = props.event.nama_event
    form.deskripsi = props.event.deskripsi
  }
  
  function handleFileUpload(event) {
    form.gambar = event.target.files[0]
  }
  </script>
  